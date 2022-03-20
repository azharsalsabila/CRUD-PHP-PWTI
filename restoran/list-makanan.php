<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Restoran Salsa</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: #E45826;
      }
      h3{
        text-align: center;
      }
      nav{
        text-align: center;
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
        color: #E45826;
        padding: 10px;
        text-align: left;
        text-decoration: none;
    }
    table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
    }
    a {
          background-color: #B5FE83;
          color: #E45826;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
</head>

<body>
    <header>
        <h3>Makanan yang tersedia</h3>
    </header>

    <nav>
        <a href="form-tambah.php">[+] Tambah Baru</a>
    </nav>

    <br>

    <table border="1">
    <thead>
        <tr>
            <th>id</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>ketersediaan</th>
            <th>Edit</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM makanan";
        $query = mysqli_query($db, $sql);

        while($makanan = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$makanan['id_makanan']."</td>";
            echo "<td>".$makanan['nama']."</td>";
            echo "<td>".$makanan['harga']."</td>";
            echo "<td>".$makanan['ketersediaan']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id_makanan=".$makanan['id_makanan']."'>Edit</a> | ";
            echo "<a href='hapus.php?id_makanan=".$makanan['id_makanan']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <p>Total Barang: <?php echo mysqli_num_rows($query) ?></p>

    </body>
</html>