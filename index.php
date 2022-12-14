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

    var_dump($hotels);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <hr>
    <?php foreach($hotels as $hotel) { ?>
        <li>
            <h3><?php echo $hotel['name']; ?></h3>
            <h4><?php echo $hotel['description']; ?></h4>
            <h4><?php echo $hotel['parking']; ?></h4>
            <h4><?php echo $hotel['vote']; ?></h4>
            <h4><?php echo $hotel['distance_to_center']; ?></h4>
        </li>
    <?php } ?>
    <hr>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Parking</th>
                <th scope="col">Vote</th>
                <th scope="col">Distance to center</th>
            </tr>
        </thead>    
        <tbody>
            <?php foreach($hotels as $key => $hotel) { ?>
                <tr>
                    <th scope="row">
                        <h3><?php echo $key; ?></h3>
                    </th>
                    <td>
                        <h4><?php echo $hotel['name']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $hotel['description']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $hotel['parking']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $hotel['vote']; ?></h4>
                    </td>
                    <td>
                        <h4><?php echo $hotel['distance_to_center']; ?></h4>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
</body>
</html>