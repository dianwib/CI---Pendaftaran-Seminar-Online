<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>HOME</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css'?>" />
    <noscript><link rel="stylesheet" href="<?php echo base_url().'assets/css/noscript.css'?>" /></noscript>
  </head>
  <body class="is-preload landing">
    <div id="page-wrapper">

      <!-- Header -->
        <header id="header">

           <img  style="width: 100px;height: 120px;" src="<?php echo base_url().'images/itc.png'?>" alt="pamflte" />
       <br>
       <h1 style="margin-left: 100px;">  Hello 
          
         <?php echo $this->session->userdata('ses_nama');?></h1>
           
          <nav id="nav" class="container">
            <?php $this->load->view('menu');?> <!--Include menu-->
            
          </nav>
        </header>


      <!-- Banner -->
        <section id="banner">
          <div class="content">
            <header>
              <h2>Seminar Nasional UKM-FT ITC 2018</h2>
              <marquee direction="left"><p> Selamat Datang di Website Seminar Nasionar UKMFT-ITC (Arie Ramadhan - Malang Creators || Ferdiansyah. A - Madura Creators) with Grand Theme : "Be A Creative Creator" by UKM-FT ITC Universitas Trunojoyo Madura</p></marquee>
            </header>
            <center>
            <img src="<?php echo base_url().'images/itc.jpeg'?>" alt="pamflte" />
          </center>
          </div>
          <a href="#one" class="goto-next scrolly">Next</a>
        </section>

    
      <!-- Five -->
        <section id="five" style="background-color: white;" class="wrapper style2 special fade">
          <div class="container">
            <header>
           <?php $this->load->view('cek_status');?>
          

       
            </header>
          
          </div>
        </section>

      <!-- Footer -->
        <footer id="footer">
          <ul class="icons">
           
            <li class="icon alt fa-envelope"><span class="label">Email</span></a></li><li>2nd.wibowo@gmail.com</li>
          </ul>
          <ul class="copyright">
            <li>&copy; Copyright 2018. All rights reserved.</li><li>Design: kelompok 7</li>
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
