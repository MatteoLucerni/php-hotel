<?php
include './includes/data/hotel.php';

$is_only_parking = $_GET['onlyParking'] ?? 'off';

$minVote = $_GET['minVote'] ?? '0';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css' integrity='sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg==' crossorigin='anonymous' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous' />
    <title>Hotels</title>
</head>

<body>
    <div class="container py-5">
        <h1 class="text-center fw-bold mb-5">HOTEL</h1>
        <h3>Filters</h3>
        <form class="mb-5" action="">
            <div class="input-group fs-4">
                <input <?php if ($is_only_parking === 'on') echo 'checked' ?> type="checkbox" name="onlyParking" id="onlyParking"><span class="ms-2">Show only hotels with parking</span>
            </div>
            <hr>
            <label class="form-label fs-4" for="minVote">Filter for minimun vote:</label>
            <div class="input-group w-25">
                <input class="form-control" type="number" name="minVote" id="minVote" value="<?= $minVote ?>">
            </div>
            <input type="submit" class="mt-3" value="SEND!">
        </form>
        <table class="table border">
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
                <?php if ($hotel['vote'] >= intval($minVote)) : ?>
                    <?php if ($is_only_parking === 'on') : ?>
                        <?php if ($hotel['parking']) : ?>
                            <?= include './includes/templates/row.php' ?>
                        <?php endif ?>
                    <?php else : ?>
                        <?= include './includes/templates/row.php' ?>
                    <?php endif ?>
                <?php endif ?>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>