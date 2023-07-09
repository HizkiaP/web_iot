<!DOCTYPE html>
<html lang="en">

  <head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Deteksi Kualitas Tanah</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logomonstera2.png" rel="icon" />
  <link href="assets/img/logomonstera2.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    body {
      background-image: linear-gradient(45deg, #EFEFBB, #D4D3DD, #DAE2F8, #D6A4A4);
      background-size: 400% 400%;
      animation: gradientAnimation 10s ease infinite;
    }

    @keyframes gradientAnimation {
      0% {
        background-position: 0% 50%;
      }
      50% {
        background-position: 100% 50%;
      }
      100% {
        background-position: 0% 50%;
      }
    }
  </style>
  </head>

  <body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center" style="background-image: linear-gradient(245.59deg, #D6A4A4, #DAE2F8);">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{route('beranda')}}" class="logo d-flex align-items-center">
        <img src="images/logomonstera.png" alt="" style="max-width: 50px; max-height: 50px;">
        <span class="d-none d-lg-block">Sistem Deteksi</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- End Search Bar -->

    <!-- End Search Icon-->

        <!-- End Notification Icon -->

          <!-- End Notification Dropdown Items -->

            <!-- End Notification Nav -->

        <!-- End Messages Icon -->

          <!-- End Messages Dropdown Items -->

        <!-- End Messages Nav -->

        <!-- End Profile Iamge Icon -->

          <!-- End Profile Dropdown Items -->
        <!-- End Profile Nav -->

    <!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar" style="background-image: linear-gradient(245.59deg,#DAE2F8, #D6A4A4);">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('beranda')}}">
          <i class="bi bi-grid"></i>
          <span>Menu Utama</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- End Components Nav -->

      <!-- End Forms Nav -->

      <li class="nav-item">
        <a
            class="nav-link"
            data-bs-target="#tables-nav"
            data-bs-toggle="collapse"
            href="{{route('data-sensor')}}"
        >
            <i class="bi bi-layout-text-window-reverse"></i
            ><span>Data</span
            ><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul
            id="tables-nav"
            class="nav-content collapse show"
            data-bs-parent="#sidebar-nav"
        >
            <li>
                <a href="{{route('data-sensor')}}" class="active">
                    <i class="bi bi-circle"></i
                    ><span>Data Sensor</span>
                </a>
            </li>
        </ul>
    </li><!-- End Tables Nav -->

    {{-- <li class="nav-item">
        <a class="nav-link " href="{{route('grafik')}}">
          <i class="bi bi-bar-chart"></i>
          <span>Grafik</span>
        </a>
      </li><!-- End Charts Nav --> --}}

      <li class="nav-item">
        <a
            class="nav-link"
            href="{{route('hasil')}}"
        >
            <i class="bi bi-bookmark-plus-fill"></i><span>Hasil Keputusan</span>
        </a>
      </li><!-- End Result Nav -->

      <!-- End Profile Page Nav -->

      <!-- End F.A.Q Page Nav -->

      <!-- End Contact Page Nav -->

      <!-- End Register Page Nav -->

      <!-- End Login Page Nav -->

      <!-- End Error 404 Page Nav -->

      <!-- End Blank Page Nav -->

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Hasil Perhitungan Kelayakan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('beranda')}}">Home</a></li>
          <li class="breadcrumb-item">Hasil</li>
          <li class="breadcrumb-item active">Perhitungan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        
              <!-- Default Table -->
              <!-- End Default Table Example -->

              <!-- Dark Table -->
              <!-- End Dark Table -->

              <!-- Active Table -->
              <!-- End Active Table -->

              <!-- Active Table -->
              <!-- End Tables without borders -->

              <!-- Table Variants -->
              <!-- End Table Variants -->

              <!-- Table with stripped rows -->
              <!-- End Table with stripped rows -->

              <!-- Table with hoverable rows -->
              <!-- End Table with hoverable rows -->

              <!-- Bordered Table -->
              <!-- End Bordered Table -->

              <!-- Primary Color Bordered Table -->
              <!-- End Primary Color Bordered Table -->

          {{-- <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Rata-rata Suhu Udara</h5>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Suhu Udara</th>
                  </tr>
                </thead>
                @php $no = 0; @endphp
                @foreach ($datasensor as $item )
                @php $no++; @endphp
                <tbody>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nilai_temp}} °C </td>
                  </tr>
                </tbody>
                @endforeach
              </table>

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Rata-rata Suhu Tanah</h5>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Suhu Tanah</th>
                  </tr>
                </thead>
                @php $no = 0; @endphp
                @foreach ($datasensor as $item )
                @php $no++; @endphp
                <tbody>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nilai_suhu_tanah}} °C </td>
                  </tr>
                </tbody>
                @endforeach
              </table>

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Rata-rata pH Tanah</h5>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">pH Tanah</th>
                  </tr>
                </thead>
                @php $no = 0; @endphp
                @foreach ($datasensor as $item )
                @php $no++; @endphp
                <tbody>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nilai_ph}}</td>
                  </tr>
                </tbody>
                @endforeach
              </table>

            </div>
          </div>

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nilai Rata-rata Kelembaban Tanah</h5>
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Kelembaban Tanah</th>
                  </tr>
                </thead>
                @php $no = 0; @endphp
                @foreach ($datasensor as $item )
                @php $no++; @endphp
                <tbody>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$item->nilai_kelembaban}} % </td>
                  </tr>
                </tbody>
                @endforeach
              </table>

            </div>
          </div> --}}

          <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Rata-rata Nilai</h5>
                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th scope="col">Kriteria</th>
                            <th scope="col">Nilai Rata-rata</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Temperatur</td>
                            <td>{{ isset($averageValues['average_temp']) ? $averageValues['average_temp'] : '' }} °C</td>
                        </tr>
                        <tr>
                            <td>Suhu Tanah</td>
                            <td>{{ isset($averageValues['average_suhu_tanah']) ? $averageValues['average_suhu_tanah'] : '' }} °C</td>
                        </tr>
                        <tr>
                            <td>pH</td>
                            <td>{{ isset($averageValues['average_ph']) ? $averageValues['average_ph'] : '' }}</td>
                        </tr>
                        <tr>
                            <td>Kelembaban</td>
                            <td>{{ isset($averageValues['average_kelembaban']) ? $averageValues['average_kelembaban'] : '' }} %</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

          <div class="card">
            <div class="card-body table-responsive p-0" style="height: 300px;">
              <h5 class="card-title" style="padding-left: 10px; padding-right: 10px;">Hasil</h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Multi Criteria Decision Making</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                @php $no = 0; @endphp
                @foreach ($results as $result)
                @php $no++; @endphp
                <tbody>
                  <tr>
                    <td>{{$no}}</td>
                    <td>{{$result}}</td>
                    <td>
                      @if ($result >= 4 && $result <= 5)
                        <b>Tanah Layak</b>
                      @else
                        <b>Tanah Tidak Layak</b>
                      @endif
                    </td>
                  </tr>
                </tbody>
                @endforeach
              </table>

            </div>
          </div>

          <div>
            <span> <b>*Catatan : </b>
              <br> <b>1. Hasil dengan rentang 1 - 3 dinyatakan TIDAK LAYAK</b> 
              <br> <b>2. Hasil dengan rentang 4 - 5 dinyatakan LAYAK</b> </span>
          </div>
          <!-- End small tables -->

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Hizkia Panjaitan</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  </body>

</html>