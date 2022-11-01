<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drivers</title>
</head>

<body>
    <table border="1px" width="600px">
        <tr>
            <th>Lat</th>
            <th>Lon</th>
            <th>Driver_name</th>
            <th>Date</th>
        </tr>
        <?php
        $file = fopen("file.txt", "r") or die("Unable to open file!");
        $data = fread($file, filesize("file.txt"));
        $j = json_decode($data, true);
        foreach ($j as $row) {
        ?>
            <tr>
                <td><?=$row['lat']?></td>
                <td><?=$row['lon']?></td>
                <td><?=$row['driver_name']?></td>
                <td><?=$row['date']?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
