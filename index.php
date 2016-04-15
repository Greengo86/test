<?php
/*
 * 
 */
use App\Models\User;


require __DIR__ . '/autoload.php';

$users = \App\Models\User::findAll();

function sendEmail(User $user, string $message)
{
    echo 'Почта уходит на ' . $user->email;
}