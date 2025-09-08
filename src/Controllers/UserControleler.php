<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function show(): string
    {
        $user = new User("Alysson");
        return "<h2>Perfil do Usuário</h2><p>Nome: " . $user->getName() . "</p>";
    }
}
