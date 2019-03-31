<!DOCTYPE html>
<html>
  <head>
    <title>INPUT MEMBER</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
   <link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>" />
    <noscript><link rel="stylesheet" href="<?php echo base_url().'assets/css/noscript.css'?>" /></noscript>
  </head>
  <body>
 
    <div class="container">
      <?php $this->load->view('menu');?> <!--Include menu-->
      <div class="col-md-12">
        <div class="row">
          <h2>Laporan Hasil Studi</h2>
          <table class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>Kode</th>
                <th>Mata Kuliah</th>
                <th>Sks</th>
                <th>Nilai</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>MK0001</td>
                <td>Bahasa Pemrograman I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0002</td>
                <td>Web I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0003</td>
                <td>Algoritma II</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
              <tr>
                <td>MK0004</td>
                <td>Bahasa Inggris I</td>
                <td>2</td>
                <td><button class="btn btn-info btn-xs">Input Nilai</button></td>
              </tr>
            </tbody>
 
          </table>
        </div>
      </div>
    </div> <!-- /container -->
 
 
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
 
  </body>
</html>
