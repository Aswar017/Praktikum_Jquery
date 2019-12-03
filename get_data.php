<?php
$nama = $_GET['nama'];
$alamat = $_GET['alamat'];
$pekerjaan = $_GET['pekerjaan'];
$formType = $_GET['formType'];

echo '<p>nama : ' . $nama . '</p>';
echo '<p>alamat : ' . $alamat . '</p>';
echo '<p>pekerjaan : ' . $pekerjaan . '</p>';

?>

<head>
    <link rel="stylesheet" type="text/css" href="assets/style.css">
</head>

<body>
    <a href="index.html"> <input type="submit" value="back"> </a>
</body>