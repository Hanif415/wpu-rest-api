<?php
// $mahasiswa = [
//     [
//         "nama" => "Hanif",
//         "nrp" => "0230032112",
//         "email" => "hanfi@gmail.com"
//     ],
//     [
//         "nama" => "Hanif",
//         "nrp" => "0230032112",
//         "email" => "hanfi@gmail.com"
//     ],
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', 'Root123!@@');

$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
