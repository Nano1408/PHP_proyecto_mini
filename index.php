<?php
const api_url = 'https://whenisthenextmcufilm.com/api';
#Inicializar una nueva sesion de CULR; ch curl handle
$ch = curl_init(api_url);

#incicar que queremos ecibir el resultados de la peticion y no mostrala en pantalla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*
Ejecutar la peticion  guardar el resultado
*/
$result = curl_exec($ch);

//una alternativa seria utiliar file_get_contents
//$result = file_get_contents(api_url); //si solo se quiere hacer un GET de la api

$data = json_decode($result, true);
curl_close($ch);

//var_dump($data);
?>

<head>
    <title>La proxima pelicula de marvel</title>
    <meta name="description" content="la proxima pelicula de marvel" />
    <meta name="viewport" content="width=device-widhh" , initial="scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.fluid.classless.min.css" />
    <link rel="stylesheet" href="./style.css">
</head>

<header class="header">
    <h1>When is the next MCU film?</h1>
</header>

<main>
    <!-- <pre style="font-size: 10px; overflow:scrool; height: 100px;">
        <?php var_dump($data); ?> 
    </pre> -->
    <section>
        <h3><?= $data["title"]; ?> release in <?= $data["days_until"] ?></h3>
    </section>
    <section>
        <img src="<?= $data["poster_url"] ?>" alt="poster de <?= $data["title"] ?>" style="border-radius: 16px;">
    </section>
    <hgroup>
        <h3>Se estrena en <?= $data["days_until"] ?></h3>
        <p>
            Fecha de estreno <?= $data["release_date"]; ?>
        </p>
        <p>La siguiente es: <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>




<style>
    :root {
        background-color: #000F0F;
    }

    body {
        text-align: center;
    }
</style>