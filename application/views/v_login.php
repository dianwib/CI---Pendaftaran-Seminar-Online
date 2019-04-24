<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>MASUK</title>
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
       <section id="three" class="spotlight style3 left" style="background-color:black  ;">
          <div class="content">
             <div class="container">
        <div class="col-md-4 col-md-offset-4">
          <form class="form-signin" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
            <h2 class="form-signin-heading">Log In</h2>


            <label for="id" class="sr-only">ID</label>
            <input type="text" id="id" name="id" class="form-control" placeholder="NIK / Email" required autofocus>
            <br>
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
               
            <br>
              <input style="background-color: #0875a8 " type="submit" class="btn btn-primary" value=" &nbsp Log In &nbsp">
          </form>
        </div>
        </div> <!-- /container -->
 
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
