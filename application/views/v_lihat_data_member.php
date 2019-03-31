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
             
          <h2>Data Pendaftar</h2>
  <table border="1px" class="table-striped ">
    <th>ID</th>
    <th>NAMA</th>
    <th>EMAIL</th>  
    <th>NO TELEPON</th>
    <th>BANK</th>
    <th>NO REKENING</th>
    <th>TIPE</th>
    
    
    
    <!--ketika non admin maka no fasilitas lihat password edit/hapus-->
    <?php if($this->session->userdata('akses')=='admin'):?>
    <th>PASSWORD</th>
    <th>ACTION</th>
    <?php endif;?>
  
  
<? $total=0;?>
<?php foreach($user as $data){ 
    
    $total+=1;
    
    echo "<tr>";
      echo "<td>". $data->id ."</td>";
      echo "<td>". $data->nama ."</td>";
      echo "<td>". $data->email ."</td>";
      echo "<td>". $data->no_telepon ."</td>";
      echo "<td>". $data->bank ."</td>";
      echo "<td>". $data->no_rekening ."</td>";
      echo "<td>". $data->level ."</td>";
      

      //ketika non admin maka no fasilitas lihat password edit/hapus
      if($this->session->userdata('akses')=='admin'){
      echo "<td>". $data->password ."</td>";
        echo "<td>".anchor('Admin/deaktivasi_member/'.$data->id,'Deaktivasi')."||".anchor('Admin/edit_member/'.$data->id,'Edit')."||".anchor('Admin/hapus_member/'.$data->id,'Hapus')."</td>";
        echo "</tr>";  
      }
      
}
?>
</table>
<?php echo "<br><i> Total peserta yang terverifikasi adalah: <b>".$total." Orang.</b></i>"; ?>

        </div>
      </div>
    </div> <!-- /container -->
          </div>
          <a href="#one" class="goto-next scrolly">Next</a>
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
