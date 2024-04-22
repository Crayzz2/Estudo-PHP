<?php
    include_once ("db.php");
    include_once ("dao/CarDAO.php");

    $carDAO = new CarDao($conn);

    $cars = $carDAO->findAll();
?>

<h1>Insira um carro:</h1>
<form action="process.php" method="post">
    <div>
        <label for="brand">Marca do carro:</label>
        <input type="text" name="brand" placeholder="Insira a marca">
    </div>
    <div>
        <label for="km">kilometragem:</label>
        <input type="text" name="km" placeholder="Insira a kilometragem">
    </div>
    <div>
        <label for="color">cor do carro:</label>
        <input type="text" name="color" placeholder="Insira a cor">
    </div>
    <input type="submit">
</form>

<ul>
    <?php foreach ($cars as $car): ?>
        <li><?= $car->getBrand(); ?> - <?= $car->getKm(); ?> - <?= $car->getColor(); ?></li>
    <?php endforeach; ?>
</ul>