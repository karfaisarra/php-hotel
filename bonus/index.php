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

if (isset($_GET['parking']) && isset($_GET['stars'])) {
    //var_dump('Filter by parking e stars');
    $has_parking = $_GET['parking'];
    $stars = $_GET['stars'];

    // filter array $hotels 

    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'] && $hotel['vote'] >= $_GET['stars'];
    });
} elseif (isset($_GET['parking'])) {
    //var_dump('Filter by parking');
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['parking'];
    });
} elseif (isset($_GET['stars'])) {
    //var_dump('Filter by stars');
    $hotels = array_filter($hotels, function ($hotel) {
        return $hotel['vote'] >= $_GET['stars'];
    });
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Live Hotels</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
</head>

<body>
    <div class="container">
        <div class="filter my-4">
            <form action="index.php" method="get">
                <label for="parking">
                    Has Parking:
                    <input type="checkbox" name="parking" id="parking">
                </label>
                <select name="stars" id="stars">
                    <option value="" disabled selected>Filter by stars</option>
                    <option value="1">1+</option>
                    <option value="2">2+</option>
                    <option value="3">3+</option>
                    <option value="4">4+</option>
                    <option value="5">5</option>

                </select>

                <button type="submit" class="btn btn-primary btn-sm">Filter</button>
                <button type="reset" class="btn btn-secondary btn-sm">Clear</button>

            </form>
        </div>
        <div class="table-responsive-sm">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Descripotion</th>
                        <th scope="col">Parking</th>
                        <th scope="col">Vote</th>
                        <th scope="col">Distance</th>


                    </tr>
                </thead>
                <tbody>

                    <?php foreach ($hotels as $hotel) : ?>
                        <tr class="">
                            <td scope="row"><?= $hotel['name'] ?></td>
                            <td><?= $hotel['description'] ?></td>
                            <td><?= $hotel['parking'] ?></td>
                            <td>
                                <?php for ($i = 0; $i < $hotel['vote']; $i++) : ?>
                                    <i class="fa-solid fa-star"></i>
                                <?php endfor; ?>

                            </td>
                            <td><?= $hotel['distance_to_center'] ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</body>

</html>