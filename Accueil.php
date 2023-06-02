<?php
session_start();

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $characterType = $_POST['warrior'];
    $characterType = $_POST['mage'];

    $host = 'mysql:host=localhost:8889;dbname=TP2';
    $username = 'root';
    $passwordDB = 'root';

    if ($characterType == "warrior") {
        $character = new Warrior($characterName);
    } else if ($characterType == "mage") {
        $character = new Mage($characterName);
    } else {
        die;
    }
}

?>

<form method="POST">
    <label for="characterType">Type de personnage:</label>
    <select id="characterType" name="characterType">
        <option value="warrior">Guerrier</option>
        <option value="mage">Mage</option>
    </select>

    <label for="chracterName">Nom du personnage :</label>
    <input type="text" id="characterName" name="characterName">

    <button type="submit">Créer</button>
</form>

