<?php
// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nama" => "Aceng Karburator", "nim" => "01101099", "uts" => 100, "uas" => 100, "tugas" => 100];
$nilai2 = ["id" => 2, "nama" => "Agus Kopling", "nim" => "01102069", "uts" => 90, "uas" => 94, "tugas" => 100];
$nilai3 = ["id" => 3, "nama" => "Asep Oli Samping", "nim" => "01103007", "uts" => 90, "uas" => 97, "tugas" => 100];
$nilai4 = ["id" => 4, "nama" => "Dadang Solar", "nim" => "01104021", "uts" => 88, "uas" => 95, "tugas" => 100];
$nilai5 = ["id" => 5, "nama" => "Nizar Pertalite", "nim" => "01104021", "uts" => 80, "uas" => 88, "tugas" => 100];

// Buat array multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4, $nilai5];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center py-3 my-3 font-weight-bold">Daftar Nilai Siswa</h1>
        <table class="table table-striped">
            <thead class="thead bg-warning">
                <tr class="text-center">
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">UTS</th>
                    <th scope="col">UAS</th>
                    <th scope="col">Tugas</th>
                    <th scope="col">Nilai Akhir</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <?php
                    foreach ($kumpulan_nilai as $nilai): ?>

                    <tr>
                        <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                        <td><?= $nilai["id"]?></td>
                        <td><?= $nilai["nama"]?></td>
                        <td><?= $nilai["nim"]?></td>
                        <td><?= $nilai["uts"]?></td>
                        <td><?= $nilai["uas"]?></td>
                        <td><?= $nilai["tugas"]?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                    </tr>
                
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>