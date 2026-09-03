<?php
$x =10;
$y =20;
$z=$x+$y;
// the PHP_EOL is end of line and there is no automatic newline character at the end of echo.
//you can use \n or <br> but br would break on the server side, while \n and PHP_EOL would break at the browser
echo("$x+$y=$z".PHP_EOL);
echo("$x+$y=" .($x+$y));
?>