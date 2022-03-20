<!DOCTYPE html>
<html>
<head>
    <title>Restoran Salsa</title>
    <style type="text/css">
    * {
        font-family: "Trebuchet MS";
      }
      h3{
        margin-left: 100px;
      }
    button {
        background-color: #FFB72B;
        color: #B5FE83;
        padding: 60px;
        text-decoration: none;
        font-size: 12px;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 10px;
      width: 100%;
      box-sizing: border-box;
      background: #B5FE83;
      border: 2px solid #ccc;
      outline-color: #FFB72B;
    }
    label input{
        width: 2%;
    }
    fieldset {
        width: 25%;
        height: 100%;
    }
    </style>
</head>

<body>
    <header>
        <h3>Formulir Penambahan Makanan</h3>
    </header>

    <form action="proses-penambahan.php" method="POST">

        <fieldset>

        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama makanan" />
        </p>
        <p>
            <label for="harga">Harga: </label>
            <input type="text" name="harga" placeholder="harga makanan" />
        </p>
        <p>
            <label for="ketersediaan">Ketersediaan: </label>
            <label><input type="radio" name="ketersediaan" value="ya"> Ya</label>
            <label><input type="radio" name="ketersediaan" value="tidak"> Tidak</label>
        </p>
        <p>
            <input type="submit" value="Daftar" name="daftar" />
        </p>

        </fieldset>

    </form>

    </body>
</html>