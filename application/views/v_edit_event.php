<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Daftar Member</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>" />
    <noscript><link rel="stylesheet" href="<?php echo base_url().'assets/css/noscript.css'?>" /></noscript>
  </head>
  <body class="is-preload landing">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header">
         <h1>  
          
         <?php echo $this->session->userdata('ses_nama');?></h1>
         
          <nav id="nav" class="container">
            <?php $this->load->view('menu');?> <!--Include menu-->
            
          </nav>
        </header>

      <!-- Banner -->
        <section id="banner">
          <div class="content">
             
           <h2>Edit Rundown Acara</h2>
 <?php foreach ($event as $data) 
    {
      ?>
           
    <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/Admin/update_event/'.$data->id_acara ?>" method="post">
            <table>

            <tr>
            <td><b>JAM ACARA</b></td>
            <td> 
            <input type="text" name="jam_acara" class="form-control" value="<?php echo $data->jam_acara ?>" required autofocus></td></tr>

            <tr>
            <td><b>KETERANGAN ACARA</b></td>
            <td> 
            <input type="text"  name="keterangan_acara" class="form-control" value="<?php echo $data->keterangan_acara ?>" required autofocus></td></tr>

            <tr>
            <td><b>PEMBAWA ACARA</b></td>
            <td> 
            <input type="text" id="id" name="pembawa_acara" class="form-control" value="<?php echo $data->pembawa_acara ?>" required autofocus></td></tr>

            <tr>
            <td><b>PENANGGUNG JAWAB ACARA</b></td>
            <td> 
            <input type="text" id="id" name="penanggungjawab_acara" class="form-control" value="<?php echo $data->penanggungjawab_acara ?>" required autofocus></td></tr>

            
          </table>
            <br>
            <input style="background-color: #e44c65 " type="submit" class="btn btn-primary" value=" &nbsp Ubah &nbsp">
            
          </form>
        </div>
        </div> <!-- /container -->
 
 <?php 
 }
  ?>
</div>
</section>
     

      <!-- Five -->
        <section id="five" class="wrapper style2 special fade">
          <div class="container">
              <?php $this->load->view('cek_status');?>
          </div>
        </section>

    
      <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
           
            <li class="icon alt fa-envelope"><span class="label">Email</span></a></li><li>2nd.wibowo@gmail.com</li>
          </ul>
          <ul class="copyright">
            <li>&copy; Copyright 2018. All rights reserved.</li><li>Design: kelompok 11</li>
          </ul>
          <ul class="copyright">
          </ul>
        </footer>

    </div>

    <!-- Scripts -->
      <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/jquery.scrolly.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/jquery.dropotron.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/jquery.scrollex.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/browser.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/breakpoints.min.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/util.js'?>"></script>
      <script src="<?php echo base_url().'assets/js/main.js'?>"></script>

  </body>
</html>
