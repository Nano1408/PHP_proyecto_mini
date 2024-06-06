<?php
$name = "Fernando"; //variables
$isDev = true;
$age = 65;

$isOld = $age > 40;

$output = "hola $name";

define('LOGO_URL', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXalRyF7J7QRLkJfMwCMqA47UUDCFdHJ-dFQ&s');

$outPutAge = match (true) {
    $age < 2 => "Eres un bebe, $name",
    $age <= 10 => "Eres un niño, $name",
    $age < 18 => "Eres un adolecente, $name",
    $age === 18 => "Eres mayor de edad, $name",
    $age > 18 and $age <= 25 => "Eres adulto adolecente, $name",
    $age < 40 => "Eres adulto joven, $name",
    $age < 60 => "Eres adulto viejo, $name",
    default => "Hueles mas a madera que a fruta, $name",
};

$bestLanguaje = ["PHP", "JavaScript", "Python"];
$bestLanguaje[] = "Java";
$bestLanguaje[] = "TypeScript";

$person = [
    "name" => "Fernando",
    "age" => "24",
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Java"],
];

$person["name"] = "Jose";
$person["languages"][] = "TypeScript";

?>

<ul>
    <?php foreach ($person as $key => $data) : ?>
        <li> <?= $key . " " . $data ?> </li>
    <?php endforeach ?>
</ul>

<h3>
    El mejor lenguaje es <?= $bestLanguaje[1] ?>
</h3>


<ul>
    <?php foreach ($bestLanguaje as $key => $language) : ?>
        <li><?= $key . " " . $language ?></li>
    <?php endforeach ?>
</ul>



<h2><?= $outPutAge ?></h2>

<img src="<?= LOGO_URL ?>" alt="PHP logo" width="200">
<h1>
    <?= $output ?>
</h1>

<main>
    <h1>La proxima pelicula de marvel</h1>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>