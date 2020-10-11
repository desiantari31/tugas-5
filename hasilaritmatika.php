<html>
<head>
    <title>Hasil Barisan</title>
</head>
<body>
    <table>
    <?php
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        $baris = $_POST['banyakbaris'];
        
        echo 
            "<h4>Hasil :</h4> 
            <table border=1 cellspacing=0 cellpadding=9>
            <tr align=center>
                <td>i</td>
                <td>x</td>
            </tr>";
            for ($i=1; $i <= $baris; $i++) {
                if ($i == 1) {
                    echo " <tr align=center>
                            <td>$i</td>
                            <td>$angka1</td>
                        </tr>";
                }
                else {
                    $aritmatika = $angka1 + $angka2;
                    $angka1 = $aritmatika;
                    $angka2 = 5;
                    echo "<tr align=center>
                            <td>$i</td>
                            <td>$aritmatika</td>
                        </tr>";
                }
            }
        echo "</table> <br>";
        echo "Banyak Baris : ".$baris;
    ?>

</body>
</html>