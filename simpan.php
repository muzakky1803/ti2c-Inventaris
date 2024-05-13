<?php

// Check if data is submitted via POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Capture form data
  $kode = $_POST["kode"];
  $nama = $_POST["nama"];
  $jumlah = $_POST["jumlah"];
  $merk = $_POST["merk"];
  

  // Prepare data string
  $data = "kode: $kode\nnama: $nama\njumlah: $jumlah\nmerek: $merek";

  // Open file for appending (adds to existing content)
  $file = fopen("proses.php", "a");

  // Write data to file
  fwrite($file, $data);

  // Close the file
  fclose($file);

  // Display success message (optional)
  echo "Data mahasiswa berhasil disimpan!";
  
} else {
  // If data is not submitted via POST, handle the error (optional)
  echo "Error: Data not submitted correctly.";
}
?>
