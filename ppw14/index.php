<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class = "container-fluid">
<?php
    // komen 1 baris
    /*
    komen multi line
    */

    // cara menampilkan pesan di php
    echo "selamat pagi";
    print "<p>hari ini belajar php dasar</p>";

    // ========== variable START ==========
    $npm            = 123456789;
    $nama           = "kiki";
    $tempat_lahir   = "palembang";
    $tanggal_lahir  = "2000-13-15";

    // array index di awali index 0
    $hobi           = ["game", "ngoding", "jalan-jalan"];
    $skill          = array ("JS", "CSS", "HTML");

    // array asosiatif (key => value)
    $nilai  = [
        "S001" => "olahraga",
        "nilai" => "A"
    ];

    // Array multidimensi
    $transkrip  = [
        [
            "kode_mk" => "S001",
            "nama_mk" => "olahraga",
            "sks"     => 2,
            "nilai"   => "A"
        ],
        [
            "kode_mk" => "S002",
            "nama_mk" => "olahraga",
            "sks"     => 2,
            "nilai"   => "B"
            ]
        ];
        
    $total_sks = 0; 
    $total_kxn = 0;
    // ========== variable END ==========

    echo "nama saya           : ". $nama;
    echo "<br>npm             : ". $npm;
    echo "<br>tempat lahir    : ". $tempat_lahir;
    echo "<br>tanggal lahir   : ". $tanggal_lahir;
    echo "<br>hobi saya       : ". $hobi[0];
    echo "<br>skill saya      : ". $skill[0];
    echo "<br>pelajaran       : ". $nilai["S001"];
    echo "<br>nilai           : ". $nilai["nilai"];
    echo "<hr>"; 

    echo "<ul>";
    foreach ($hobi as $row) {
        echo "<li>" .$row. "</li>";
    };
    echo "</ul>";

    echo "<table class = 'table table-dark table-striped'> 
    <thead>
        <tr>
            <th>Kode MK</th>
            <th>Nama MK</th>
            <th>Nilai</th>
            <th>Bobot</th>
            <th>SKS</th>
            <th>KxN</th>
        </tr>
    </thead>
    <tbody>";

    foreach ($transkrip as $row) {
        echo "<tr>";
        echo "<td>". $row ["kode_mk"]. "</td>";
        echo "<td>". $row ["nama_mk"]. "</td>";
        echo "<td>". $row ["nilai"]. "</td>";
        echo "<td>". get_bobot($row ["nilai"]). "</td>";
        echo "<td>". $row ["sks"]. "</td>"; $total_sks += $row["sks"];
        echo "<td>". ($row["sks"] * get_bobot($row['nilai'])) ."</td>"; $total_kxn += ($row["sks"] * get_bobot($row['nilai']));
        echo "</tr>";
    };
    echo "
    </tbody>
    <tfoot>
        <tr>
            <th> Jumlah </th>
            <th></th>
            <th></th>
            <th></th>
            <th>". $total_sks ."</th>
            <th>". $total_kxn ."</th>
        </tr>
        <tr>
            <th colspan = '4'>Index Prestasi Semester</th>
            <th colspan = '2'>". ($total_kxn / $total_sks) ."</th>
        </tr>
        <tr>
            <th colspan = '5'>Jumlah SKS</th>  
            <th colspan = '2'>". get_mks_sks($total_kxn / $total_sks)."</th>
        </tr>
    </tfoot>
    </table>";

    function get_bobot($nilai) {
        $array_nilai = [
            "A"     => 4,
            "A-"    => 3.7,
            "B"     => 3,
        ];
        return $array_nilai[$nilai];
    };

    function get_mks_sks($mks_sks) {
        $sks = 0;
        if ($mks_sks >= 3.0) {
            $sks = 24;
        } else if ($mks_sks >= 2.5 && $mks_sks <= 2.99) {
            $sks = 21;
        } else if ($mks_sks >= 2 && $mks_sks <= 2.49) {
            $sks = 18;
        } else if ($mks_sks >= 1.5 && $mks_sks <= 1.99) {
            $sks = 15;
        } else {
            $sks = 12;
        }
        return $sks;
    };

?>
</div>
</body>
</html>
