<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $mahasiswas = [
            ["id" => 1,"nama" => "Raihan", "nim" => "0110221240", "uts" => 100, "uas" => 100],
            ["id" => 2,"nama" => "Kenshin", "nim" => "0110221245", "uts" => 90, "uas" => 90],
            ["id" => 3,"nama" => "Albert", "nim" => "0110221250", "uts" => 80, "uas" => 80]
        ];
    
    // foreach($mahasiswas as $mhss){
    //     echo $mhss["nama"].'<br><br>'; //Tidak pakai [0] karena looping
    // }
    ?>
</head>
<body>
    <h1>Raihan</h1>
    <table style="width:100%;">
        <thead>
            <th>ID</th>
            <th>NAMA</th>
            <th>NIM</th>
            <th>UTS</th>
            <th>UAS</th>
        </thead>
        <tbody style="text-align:center;">
            <?php foreach ($mahasiswas as $mhss):?>
                <tr>
                    <td><?= $mhss["id"]?></td>
                    <td><?= $mhss["nama"]?></td>
                    <td><?= $mhss["nim"]?></td>
                    <td><?= $mhss["uts"]?></td>
                    <td><?= $mhss["uas"]?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
