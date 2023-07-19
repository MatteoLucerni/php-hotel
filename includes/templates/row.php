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
            echo '<i class="fa-solid fa-circle-check text-success"></i>';
        } else {
            echo '<i class="fa-sharp fa-solid fa-circle-xmark text-danger"></i>';
        }
        ?>
    </td>
    <td>
        <?= $hotel['vote'] ?>
    </td>
    <td>
        <?= $hotel['distance_to_center'] km ?>
    </td>
</tr>