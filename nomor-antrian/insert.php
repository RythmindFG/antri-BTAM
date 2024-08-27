<?php
// pengecekan ajax request untuk mencegah direct access file, agar file tidak bisa diakses secara langsung dari browser
// jika ada ajax request
if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && ($_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest')) {
  // panggil file "database.php" untuk koneksi ke database
  require_once "../config/database.php";

  //variable
  $nama = $_POST['nama'];
  $loket = $_POST['jenislayanan'];
  $pertanyaan1 = $_POST['wgss1'];
  $pertanyaan2 = $_POST['wgss2'];
  $pertanyaan3 = $_POST['wgss3'];
  $pertanyaan4 = $_POST['wgss4'];
  $pertanyaan5 = $_POST['wgss5'];
  $pertanyaan6 = $_POST['wgss6'];
  // ambil tanggal sekarang

  $tanggal = gmdate("Y-m-d", time() + 60 * 60 * 7);

  // membuat "no_antrian"
  // sql statement untuk menampilkan data "no_antrian" terakhir pada tabel "tbl_antrian" berdasarkan "tanggal"
  $query = mysqli_query($mysqli, "SELECT max(no_antrian) as nomor FROM tbl_antrian WHERE tanggal='$tanggal'")
                                  or die('Ada kesalahan pada query tampil data : ' . mysqli_error($mysqli));
  // ambil jumlah baris data hasil query
  $rows = mysqli_num_rows($query);

  // cek hasil query
  // jika "no_antrian" sudah ada
  if ($rows <> 0) {
    // ambil data hasil query
    $data = mysqli_fetch_assoc($query);
    // "no_antrian" = "no_antrian" yang terakhir + 1
    $no_antrian = $data['nomor'] + 1;
    
  }
  // jika "no_antrian" belum ada
  else {
    // "no_antrian" = 1
    $no_antrian = 1;
  }
  
  // sql statement untuk insert data ke tabel "tbl_antrian"
  if (!empty($nama) && !empty($pertanyaan1) && !empty($pertanyaan2) && !empty($pertanyaan3) && !empty($pertanyaan4) && !empty($pertanyaan5) && !empty($pertanyaan6)) {
    $insert = mysqli_query($mysqli, "INSERT INTO tbl_antrian(tanggal, no_antrian, loket, nama, wgss1, wgss2, wgss3, wgss4, wgss5, wgss6) 
                                   VALUES('$tanggal', '$no_antrian', '$loket', '$nama', '$pertanyaan1', '$pertanyaan2', '$pertanyaan3', '$pertanyaan4', '$pertanyaan5', '$pertanyaan6')")
                                   or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));
  } if(!empty($nama)){
    $insert = mysqli_query($mysqli, "INSERT INTO tbl_antrian(tanggal, no_antrian, loket, nama) 
                                   VALUES('$tanggal', '$no_antrian', '$loket', '$nama')")
                                   or die('Ada kesalahan pada query insert : ' . mysqli_error($mysqli));
  }

  // cek query
  // jika proses insert berhasil
  if ($insert) {
    // tampilkan pesan sukses insert data
    echo "Sukses";
  }else {
    echo"Gagal";
  }
}
