<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Global Styles */

    * {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  font-family:;
  background-color: #111;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin: 40px auto;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  background-color: #000;
  color: #fff;
}

th, td {
  border: 1px solid #333;
  padding: 12px;
  text-align: left;
}

th {
  background-color: #6c5ce7;
}

tr:nth-child(even) {
  background-color: #333;
}

tr:hover {
  background-color: #444;
}


  </style>
  <title>List Barang</title>
</head>
<body>
<table border="1">
  <tr>
    <th>kode</th>
    <th>nama</th>
    <th>jumlah</th>
    <th>merk</th>
  </tr>
  <?php
  require_once("db.php");

  $result = mysqli_query($conn, "SELECT * FROM barang");

  while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['kode'] . "</td>";
    echo "<td>" . $row['nama'] . "</td>";
    echo "<td>" . $row['jumlah'] . "</td>";
    echo "<td>" . $row['merk'] . "</td>";
    echo "</tr>";
  }

  mysqli_close($conn);
  ?>
</table>
</body>
<div class="back-btn">
        <a href="inputbarang.html">Tambah Barang</a>
    </div>
</html>