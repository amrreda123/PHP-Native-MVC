<!-- php -S localhost:8888 -->
<?php

$_SESSION['name'] = "John Doe";

view("index.view.php",[
    'heading' => "Welcome to MVC Framework"
]);