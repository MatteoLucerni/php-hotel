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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels</title>
</head>

<body>
    <h1>Hotels</h1>
    <table>
        <tr>
            <th>
                Name
            </th>
            <th>
                Description
            </th>
            <th>
                Parking
            </th>
            <th>
                Vote
            </th>
            <th>
                Distance to center
            </th>
        </tr>
        <?php foreach ($hotels as $hotel) : ?>
            <tr>
                <td>
                    <?= $hotel['name'] ?>
                </td>
                <td>
                    <?= $hotel['description'] ?>
                </td>
                <td>
                    <?php
                    if ($hotel['parking']) {
                        echo 'SI';
                    } else {
                        echo 'NO';
                    }
                    ?>
                </td>
                <td>
                    <?= $hotel['vote'] ?>
                </td>
                <td>
                    <?= $hotel['distance_to_center'] ?>
                </td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>