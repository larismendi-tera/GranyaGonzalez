<?php

if(isset($_GET))
    $id = $_GET["id"];
else
    $id = null;

require_once 'email.class.php';
$email = new Email("74.208.12.83","granyaGonzalez","vtetlAw2596T","granyaGonzalez","111f431bd6dfadf804828ccbb7ecb6b0-us9");
$email->execute($id);
