<?php
//koneksi ke db
$host = "localhost";
$user = "root";
$pass = "";
$nama_db = "db_employee"; //nama database
$koneksi = mysqli_connect($host, $user, $pass, $nama_db);

if (!$koneksi) { //jika tidak terkoneksi maka akan tampil error
    die("Koneksi dengan database gagal: " . mysql_connect_error());
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>PT Employee</title>
    <style type="text/css">
        * {
            font-family: "Trebuchet MS";
        }

        h1 {
            text-transform: uppercase;
            color: salmon;
        }

        table {
            border: solid 1px #DDEEEE;
            border-collapse: collapse;
            border-spacing: 0;
            width: 70%;
            margin: 10px auto 10px auto;
        }

        table thead th {
            background-color: #DDEFEF;
            border: solid 1px #DDEEEE;
            color: #336B6B;
            padding: 10px;
            text-align: left;
            text-shadow: 1px 1px 1px #fff;
            text-decoration: none;
        }

        table tbody td {
            border: solid 1px #DDEEEE;
            color: #333;
            padding: 10px;
            text-shadow: 1px 1px 1px #fff;
        }

        a {
            background-color: salmon;
            color: #fff;
            padding: 10px;
            text-decoration: none;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <center>
        <h1>DW Employee</h1>
        <center>
            <center>
                <br />
                <table>
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Photo</th>
                            <th>Nama</th>
                            <th>Skill</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // data diurutkan berdasarkan angka
                        $query = "SELECT * FROM users_tb ORDER BY id ASC";
                        $result = mysqli_query($koneksi, $query);
                        //mengecek apakah ada error ketika menjalankan query
                        if (!$result) {
                            die("Query Error: " . mysqli_errno($koneksi) .
                                " - " . mysqli_error($koneksi));
                        }


                        $no = 1; //variabel untuk membuat nomor urut
                        // hasil query akan disimpan dalam variabel $data dalam bentuk array
                        // kemudian dicetak dengan perulangan while
                        while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                            <tr>
                                <td><?php echo $no; ?></td>

                                <td style="text-align: center;"><img src="gambar/<?php echo $row['photo']; ?>" style="width: 120px;"><br />
                                    <input type="file" name="photo" required="" /></td>
                                <td><?php echo $row['name'] ?></td>
                                <td>
                                    <?php
                                    $query2 = "SELECT * FROM skill_tb ORDER BY id ASC";
                                    $result2 = mysqli_query($koneksi, $query2);
                                    $row2 = mysqli_fetch_assoc($result2);
                                    echo $row2['name'] ?></td>

                            </tr>

                        <?php
                            $no++; //untuk nomor urut terus bertambah 1
                        }
                        ?>
                    </tbody>
                </table>
</body>

</html>