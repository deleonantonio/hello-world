<?php
//---------ERROR EXAMPLES------------------

// Fatal error: require(): Failed opening required 'this-file-is-bogus.php' (include_path='.:/Applications/MAMP/bin/php/php7.1.0/lib/php') in /Applications/MAMP/htdocs/hello-world/errorExamples.php on line 3
require 'this-file.php;';

// Parse error: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' in /Applications/MAMP/htdocs/errorExamples.php on line 4
// echo "Hello"
// echo "World"

// Warning: rand() expects exactly 2 parameters, 1 given in /Applications/MAMP/htdocs/hello-world/errorExamples.php on line 3
// echo rand(5);

// Notice: Undefined variable: foo in /Applications/MAMP/htdocs/hello-world/errorExamples.php on line 3
// echo $foo;
?>