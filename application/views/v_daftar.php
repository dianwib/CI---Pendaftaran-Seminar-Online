<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>DAFTAR</title>
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
          <h2>PENDAFTARAN SEMINAR</h2>
      <form method="post" action="<?php echo base_url().'index.php/Home/input_aksi_user'?>" class="form-horizontal" role="form">

                    <?php if(!empty(@$notif)){ ?>
                    <div id="signupalert" class="alert alert-<?php echo @$notif['type'];?>">
                        <p><?php echo @$notif['message'];?></p>
                        <span></span>
                    </div>
                    <?php } ?>
 
                    <div class="form-group">
                        <label for="nama" class="col-md-3 control-label">Nama Lengkap</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" required="True">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="True">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input type="email" class="form-control" name="email" placeholder="abc@gmail.com"  required="True">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-md-3 control-label">No Telefon</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="no_telepon" placeholder="+62...."  required="True" style="background-color: transparent;">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bank" class="col-md-3 control-label">BANK</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="bank" placeholder="Nama Bank yang digunakan" required="True" >
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="no_rekening" class="col-md-3 control-label">No Rekening</label>
                        <div class="col-md-9">
                            <input type="number" class="form-control" name="no_rekening" placeholder="No rekening" required="True" style="background-color: transparent;">
                        </div>
                    </div>
         
         <br>
                    <div  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                            <input style="background-color: #e44c65 " type="submit" class="btn btn-primary" value=" &nbsp Daftar &nbsp">
                        </div>         

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
