<?php

function dd($data){
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function active($path) {
    return $_SERVER['REQUEST_URI'] === $path ? 'bg-gray-900 text-white' : '';
}


function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition)
        abort($status);
}