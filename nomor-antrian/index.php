<!-- Aplikasi Antrian Berbasis Web 
**********************************************
* Developer   : -
* Company     : -
* Release     : Juni 2021
* Update      : -
* Website     : -
* E-mail      : -
* WhatsApp    : -
-->

<!doctype html>
<html lang="en" class="h-100">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Aplikasi Antrian Berbasis Web">
  <meta name="author" content="-">

  <!-- Title -->
  <title>Balai Teknologi Air Minum</title>

  <!-- Favicon icon -->
  <link rel="shortcut icon" href="../assets/img/favico.ico" type="image/x-icon">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">

  <!-- Custom Style -->
  <link rel="stylesheet" href="../assets/css/style.css">
</head>

<body class="d-flex flex-column h-100">
  <main class="flex-shrink-0">
    <div class="container mt-1">
      <div class="row justify-content-lg-center">
        <div class="col-lg-5 mb-4">
          <div class="px-4 py-3 mb-4 bg-white rounded-2 shadow-sm">
            <!-- judul halaman -->
            <div class="d-flex align-items-center me-md-auto justify-content-center">
              <img src="../assets/img/BTAM.png" alt="" width="300px">
            </div>
          </div>
          <div class="alert alert-light d-flex align-items-center mb-2" role="alert">
            <i class="bi-info-circle text-success me-3 fs-3"></i>
            <div>
              Selamat Datang di <strong>Balai Teknologi Air Minum</strong>. Silahkan Ambil Nomor Antrian sesuai Jenis
              Layanan.
            </div>
          </div>

          <div class="card border-0 shadow-sm">
            <div class="card-body text-center d-grid p-4">

              <div class="border border-success rounded-2 py-2 px-2 mb-5">
                <div class="col-8 mx-auto mb-3">
                  <h3 class="pt-4">PILIH LAYANAN</h3>
                </div>
                <div class="row p-3 justify-content-between">
                  <div class="col-5">
                    <input type="radio" class="btn-check" name="jenis" id="primary-outlined" autocomplete="off"
                      value="Pelayanan Publik">
                    <label class="btn btn-outline-primary" for="primary-outlined">Pelayanan Publik</label>
                  </div>
                  <div class="col-6">
                    <input type="radio" class="btn-check" name="jenis" id="danger-outlined" autocomplete="off"
                      value="Informasi dan Pengaduan">
                    <label class="btn btn-outline-danger" for="danger-outlined">Informasi dan Pengaduan</label>
                  </div>
                </div>
                <!-- Disabilitas -->
                <div class="row mt-3">
                  <div class="col-12">
                    <button type="button" class="btn btn-outline-warning" data-bs-toggle="modal"
                      data-bs-target="#exampleModal">
                      Penyandang Disabilitas
                      ?
                    </button>
                    <!-- <input type="checkbox" class="btn-check" id="btn-check-2-warning" autocomplete="off">
                    <label class="btn btn-outline-warning" for="btn-check-2-warning">asd</label><br> -->
                  </div>
                </div>
                <!-- End disabilitas -->

                <div class="col-8 mx-auto">
                  <div class="mb-3 mt-5">
                    <label for="nama" class="form-label fw-bold">Nama Lengkap :</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="nama"
                      placeholder="Isi nama lengkap sesuai KTP" required autocomplete="off">
                  </div>
                </div>

              </div>
            </div>
            <div class="alert alert-success alert-dismissible fs-5" id="success" style="display:none;">
            </div>
            <div class="alert alert-danger alert-dismissible fs-5" id="danger" style="display:none;">
            </div>
            <div class="border border-success rounded-2 mb-5 mx-4">
              <h3 class="pt-4">JUMLAH ANTRIAN</h3>
              <!-- menampilkan informasi jumlah antrian -->
              <h1 id="antrian" class="display-1 text-success text-center lh-1 pb-2 fw-bold"></h1>
              <br>
            </div>
            <!-- button pengambilan nomor antrian -->
            <a id="insert" href="javascript:void(0)"
              class="btn btn-success btn-block rounded-pill fs-5 px-5 py-4 mb-3 mx-4">
              <i class="bi-person-plus fs-4 me-2"></i> Ambil Nomor Antrian
            </a>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>

  <!-- Footer -->
  <footer class="footer mt-auto py-4">
    <div class="container">
      <!-- copyright -->
      <div class="copyright text-center mb-2 mb-md-0">
        &copy; 2024 - <a href="https://btamciptakarya.pu.go.id/" target="_blank"
          class="text-danger text-decoration-none">Balai
          Teknologi Air Minum</a>.
      </div>
    </div>
  </footer>

  <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Formulir Identifikasi Kelompok Rentan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p class="fw-bold text-center">Silahkan isi formulir berikut untuk mengidentifikasi kelompok rentan
            menggunakan
            Washington
            Group Short Set (<span class="fst-italic">WG-SS</span>). Data yang Anda berikan akan digunakan untuk
            mastikan layanan yang lebih inklusif dan sesuai kebutuhan</p>

          <label for="disabledTextInput" class="form-label">1. Apakah Anda mengalami kesulitan melihat, meskipun
            memakai kacamata?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss1" id="wgss1-1" value="Iya">
            <label class="form-check-label" for="wgss1-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss1" id="wgss1-2" value="Tidak">
            <label class="form-check-label" for="wgss1-2">
              Tidak
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss1" id="wgss1-2" value="Tidak">
            <label class="form-check-label" for="wgss1-2">
              Tidak
            </label>
          </div>
          <label for="disabledTextInput" class="form-label mt-3">2. Apakah Anda mengalami kesulitan mendengar, meskipun
            menggunakan alat bantu dengar?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss2" id="wgss2-1" value="Iya">
            <label class="form-check-label" for="wgss2-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss2" id="wgss2-2" value="Tidak">
            <label class="form-check-label" for="wgss2-2">
              Tidak
            </label>
          </div>
          <label for="disabledTextInput" class="form-label mt-3">3. Apakah Anda mengalami kesulitan berjalan atau
            menaiki tangga?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss3" id="wgss3-1" value="Iya">
            <label class="form-check-label" for="wgss3-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss3" id="wgss3-2" value="Tidak">
            <label class="form-check-label" for="wgss3-2">
              Tidak
            </label>
          </div>
          <label for="disabledTextInput" class="form-label mt-3">4. Apakah Anda mengalami kesulitan dengan perawatan
            diri seperti membersihkan seluruh tubuh atau berpakaian?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss4" id="wgss4-1" value="Iya">
            <label class="form-check-label" for="wgss4-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss4" id="wgss4-2" value="Tidak">
            <label class="form-check-label" for="wgss4-2">
              Tidak
            </label>
          </div>
          <label for="disabledTextInput" class="form-label mt-3">5. Apakah Anda mengalami kesulitan mengingat atau
            berkonsentrasi?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss5" id="wgss5-1" value="Iya">
            <label class="form-check-label" for="wgss5-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss5" id="wgss5-2" value="Tidak">
            <label class="form-check-label" for="wgss5-2">
              Tidak
            </label>
          </div>
          <label for="disabledTextInput" class="form-label mt-3">6. Apakah Anda mengalami kesulitan berkomunikasi,
            misalnya memahami atau dimengerti?</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="wgss6" id="wgss6-1" value="Iya">
            <label class="form-check-label" for="wgss6-1">
              Iya
            </label>
          </div>
          <div class="form-check mt-2">
            <input class="form-check-input" type="radio" name="wgss6" id="wgss6-2" value="Tidak">
            <label class="form-check-label" for="wgss6-2">
              Tidak
            </label>
          </div>
          <!-- end body modal -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery Core -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <!-- Popper and Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
  </script>

  <script type="text/javascript">
    $(document).ready(function () {
      $("#insert").prop('hidden', true);
      $("[type='radio']").change(function () {
        if ($(this).val() == "") {
          $("#insert").attr('hidden', true);
        } else {
          $("#insert").removeAttr('hidden');
        }
      });

      //debug radio button
      // $('input[name="jenis"]').on("click", function () {
      //   var jenislayan = $('input[name="jenis"]:checked').val();
      //   alert(jenislayan);
      // });

      // tampilkan jumlah antrian
      $('#antrian').load('get_antrian.php');

      // proses insert data
      $('#insert').on('click', function () {
        var jenislayanan = $('input[name="jenis"]:checked').val();
        var nama = $("#nama").val();
        var wgss1 = document.querySelector('input[name="wgss1"]:checked').value;
        var wgss2 = document.querySelector('input[name="wgss2"]:checked').value;
        var wgss3 = document.querySelector('input[name="wgss3"]:checked').value;
        var wgss4 = document.querySelector('input[name="wgss4"]:checked').value;
        var wgss5 = document.querySelector('input[name="wgss5"]:checked').value;
        var wgss6 = document.querySelector('input[name="wgss6"]:checked').value;

        $.ajax({
          type: 'POST', // mengirim data dengan method POST
          url: 'insert.php',
          data: {
            jenislayanan: jenislayanan,
            nama: nama,
            wgss1: wgss1,
            wgss2: wgss2,
            wgss3: wgss3,
            wgss4: wgss4,
            wgss5: wgss5,
            wgss6: wgss6
          }, // url file proses insert data
          success: function (result) { // ketika proses insert data selesai
            // jika berhasil
            if (result === 'Sukses') {
              // tampilkan jumlah antrian
              $('#antrian').load('get_antrian.php').fadeIn('slow');
              // tampil message success
              $("#success").show();
              $('#success').html('Berhasil ambil nomor antrian, silahkan menunggu di panggil ke loket');
              $("#success").fadeTo(1000, 500).slideUp(500, function () {
                $("#success").slideUp(500);
                window.location.href = "../reporting/report.php";
              });
            } else {
              // tampil message gagal
              $("#danger").show();
              $('#danger').html(
                'Gagal mengambil nomor antrian, silahkan isi kembali data dengan lengkap');
              $("#danger").fadeTo(2000, 500).slideUp(500, function () {
                $("#danger").slideUp(500);
                // window.setTimeout(function () {
                //   location.reload()
                // }, 2000)
              });
            }
          },
        });
      });
    });
  </script>
</body>

</html>