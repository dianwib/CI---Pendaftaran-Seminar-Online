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
             
           <h2>Edit Member</h2>
  <?php foreach ($user as $data) 
    {
      ?>
           
    <div class="container">
        <div class="col-md-4 col-md-offset-4">

          <?php if($this->session->userdata('akses')=='admin')://jika dari admin maka ke kontroller admin?>
          <form class="form-signin" action="<?php echo base_url().'Admin/update_member/'.$data->id ?>" method="post">
             <?php endif;?>
           
            <?php if($this->session->userdata('akses')=='member'):?>
                        <form class="form-signin" action="<?php echo base_url().'User/update_member/'.$data->id ?>" method="post">
             <?php endif;?>


            <table>
            
            <tr>
            <td><b>Nama</b></td>
            <td> 
            <input type="text" id="id" name="nama" class="form-control" value="<?php echo $data->nama ?>" required ></td></tr>

            <tr>
            <td><b>Password</b></td>
            <td> 
            <input type="text" id="id" name="password" class="form-control" value="<?php echo $data->password ?>" required ></td></tr>

            <tr>
            <td><b>Email</b></td>
            <td> 
            <input type="email" id="id" name="email" class="form-control" value="<?php echo $data->email ?>" required ></td></tr>

            <tr>
            <td><b>Tipe</b></td>
            <td> 
            <input disabled type="text" id="id" name="level" class="form-control" value="<?php echo $data->level ?>" required ></td></tr>

            <tr>
            <td><b>No Telepon</b></td>
            <td> 
            <input style="background-color: transparent;" type="number" id="id" name="no_telepon" class="form-control" value="<?php echo $data->no_telepon ?>" required ></td></tr>

            <tr>
            <td><b>Bank</b></td>
            <td> 
            <input type="text" id="id" name="bank" class="form-control" value="<?php echo $data->bank ?>" required ></td></tr>

            <tr>
            <td><b>No Rekening</b></td>
            <td> 
            <input style="background-color: transparent;" type="number" id="id" name="no_rekening" class="form-control" value="<?php echo $data->no_rekening ?>" required ></td></tr>

            
          </table>
            <br>
            <input style="background-color: #e44c65 " type="submit" class="btn btn-primary" value=" &nbsp Ubah &nbsp">
          </form>
        </div>
        </div> <!-- /container -->
 
 <?php 
 }
  ?>
</form>
</div>
</div>
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
