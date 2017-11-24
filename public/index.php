<?php

namespace Styde;

require '../vendor/autoload.php';

$user = new User([
    'first_name' => 'Duilio',
    'last_name' => 'Palacios'
        ]);


echo "<p>Bienvenido {$user->first_name} {$user->last_name}</p>";
