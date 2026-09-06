FROM php:8.2-cli

ENV DEBIAN_FRONTEND=noninteractive
ENV COMPOSER_HOME=/opt/composer
ENV PATH="/opt/composer/vendor/bin:/opt/venv/bin:${PATH}"

# System dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    python3 \
    python3-pip \
    python3-venv \
    libzmq3-dev \
    pkg-config \
    build-essential \
    autoconf \
    libtool \
    && rm -rf /var/lib/apt/lists/*

# Build PHP ZMQ from source
RUN git clone --depth 1 https://github.com/zeromq/php-zmq.git /tmp/php-zmq \
    && cd /tmp/php-zmq \
    && phpize \
    && ./configure \
    && make -j"$(nproc)" \
    && make install \
    && docker-php-ext-enable zmq \
    && rm -rf /tmp/php-zmq

# Install MySQL PDO drivers
RUN docker-php-ext-install pdo pdo_mysql

# Verify ZMQ is actually loaded
RUN php -m | grep -i "^zmq$"

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Python virtual environment
RUN python3 -m venv /opt/venv \
    && /opt/venv/bin/pip install --no-cache-dir \
       jupyterlab \
       notebook \
       ipykernel

# Install PHP Jupyter kernel
RUN composer global config --append policy.advisories.ignore PKSA-4s4z-t146-6123 \
    && composer global require rabrennie/jupyter-php-kernel --ignore-platform-reqs

# Register PHP kernel with Jupyter
RUN jupyter-php-kernel --install

WORKDIR /workspace

EXPOSE 8888

CMD ["jupyter", "lab", "--ip=0.0.0.0", "--port=8888", "--allow-root", "--no-browser"]