<?php


// Cadastro
$people        = new People();
$people->name  = "Fernando Petry";
$people->email = "fernando.petry@autoavaliar.com.br";
$people->save();

// Atualização
$people        = new People();
$people->id    = 1;
$people->name  = "Fernando Petry Alterado";
$people->email = "fernando.petry@autoavaliar.com.br";
$people->save();

// Consulta
$people = People::findFirst(1);

// Delete
$people = People::findFirst(1);
$people->delete();