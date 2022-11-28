<?php
$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>PHP Hotel</title>
    <style>
        h5 {
            color: red;
            margin-bottom: 1.5rem;
        }
    </style>
</head>

<body>
    <div class="container my-5">
        <h1 class="text-center my-5 text-primary">Hotels</h1>
        <div class="row">
            <div class="col">
                <h5>Nome Hotel</h5>
                <?php foreach ($hotels as $hotel) : ?>
                    <p><?php echo $hotel['name'] ?></p>
                <?php endforeach ?>
            </div>
            <div class="col">
                <h5>Descrizione Hotel</h5>
                <?php foreach ($hotels as $hotel) : ?>
                    <p><?php echo $hotel['description'] ?></p>
                <?php endforeach ?>
            </div>
            <div class="col">
                <h5>Parking:</h5>
                <?php foreach ($hotels as $hotel) : ?>
                    <p><?php if ($hotel['parking']) {
                            echo 'Sì';
                        } else {
                            echo 'No';
                        }   ?></p>
                <?php endforeach ?>
            </div>
            <div class="col">
                <h5>Voto</h5>
                <?php foreach ($hotels as $hotel) : ?>
                    <p><?php echo $hotel['vote'] ?></p>
                <?php endforeach ?>
            </div>
            <div class="col">
                <h5>Distanza Dal Centro</h5>
                <?php foreach ($hotels as $hotel) : ?>
                    <p><?php echo $hotel['distance_to_center'] ?></p>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</body>

</html>