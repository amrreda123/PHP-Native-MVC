<?php

use Core\App;
use Core\Validator;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if(! validator::string($_POST["body"], 1, 1000))
    $errors['body'] = "A body between 1 and 1,000 characters is required.";

if(! empty($errors)){
    return view("notes/create.view.php",[
        'heading' => "Create Note",
        'errors' => $errors
    ]);
    exit();
}


$db->query('INSERT INTO notes (body, user_id) VALUES (:body, :user_id)', ['body' => $_POST['body'], 'user_id' => 1]);
header('Location: /notes');
 die();
