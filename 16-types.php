<?php

declare(strict_types=1);
include 'includes/header.php';

$auth = false;

function isAuth(bool $auth): string
{
    return !$auth ? 'No autenticado' : 'Autenticado';
}

$user = isAuth($auth);

echo $user;


include 'includes/footer.php';
