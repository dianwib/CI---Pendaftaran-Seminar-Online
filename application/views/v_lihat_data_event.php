<!DOCTYPE HTML>
<!--
  Landed by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
  <head>
    <title>Jadwal Acara</title>
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
             
           <h2>Rundown Jadwal Event</h2>
  <table border="1px" class="table-striped ">
    <th>NO</th>
    <th>JAM ACARA</th>
    <th>KETERANGAN ACARA</th>
    <th>PEMBAWA ACARA</th>  
    <th>PENANGGUNG JAWAB ACARA</th>
    
    
    
    <!--ketika non admin maka no fasilitas lihat password edit/hapus-->
    <?php if($this->session->userdata('akses')=='admin'):?>
    <th>ACTION</th>
    <?php endif;?>
  
  
<? $total=0;?>
<?php foreach($event as $data){ 
    
    $total+=1;
    
    echo "<tr>";
      echo "<td>". $total ."</td>";
      echo "<td>". $data->jam_acara ."</td>";
      echo "<td>". $data->keterangan_acara ."</td>";
      echo "<td>". $data->pembawa_acara ."</td>";
      echo "<td>". $data->penanggungjawab_acara ."</td>";
      
      //ketika non admin maka no fasilitas  edit/hapus/tambah
      if($this->session->userdata('akses')=='admin'){
        echo "<td>".anchor('Admin/edit_event/'.$data->id_acara,'Edit')."||".anchor('Admin/hapus_event/'.$data->id_acara,'Hapus')."||".anchor('Admin/input_event/','Tambah')."</td>";
        echo "</tr>";  
      }
      

}
?>      
</table>
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
