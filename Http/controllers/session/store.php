<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if ($form->validate($email, $password)) {
    if((new Authenticator)->attempt($email, $password))
        redirect('/');
    $form->error('email', 'No matching password found for that email address.');
};

return view('session/create.view.php', [
    'heading' => 'login to your account',
    'errors' => $form->errors()
]);
