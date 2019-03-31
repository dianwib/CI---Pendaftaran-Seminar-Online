<nav class="navbar navbar-inverse" >
<div class="container-fluid" >
<!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav" >
  
<!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='admin'):?>


      <li class="nav-item" ><a href="<?php echo base_url().'/Admin/index'?>">HOME</a></li>
      
      <li class="nav-item"><a href="<?php echo base_url().'/Admin/lihat_data_member'?>">DAFTAR MEMBER</a></li>

      <li class="nav-item"><a href="<?php echo base_url().'/Admin/lihat_data_non_member'?>">DAFTAR NON MEMBER</a></li>

      <li class="nav-item"><a href="<?php echo base_url().'/Admin/lihat_data_event'?>">JADWAL EVENT</a></li>
      

    <!--TAB SIGOUT-->
    <li ><a href="<?php echo base_url().'/login/logout'?>">LOG OUT</a></li>
  </ul>

      <!--Akses Menu Untuk panitia-->
  <?php elseif($this->session->userdata('akses')=='panitia'):?>
  <li class="nav-item"><a href="<?php echo base_url().'/Admin/index'?>">HOME</a></li>
      
      <li class="nav-item"><a href="<?php echo base_url().'/Admin/lihat_data_member'?>">DAFTAR MEMBER</a></li>

      <li class="nav-item"><a href="<?php echo base_url().'/Admin/lihat_data_event'?>">JADWAL EVENT</a></li>

<li ><a href="<?php echo base_url().'/login/logout'?>">LOG OUT</a></li>
  </ul>
      
  <!--Akses Menu Untuk Member-->


  <?php elseif($this->session->userdata('akses')=='member'):?>
  <li class="nav-item"><a href="<?php echo base_url().'/User/index'?>">HOME</a></li>
      
      <li class="nav-item"><a href="<?php echo base_url().'/User/edit_member/'.$this->session->userdata('ses_id');?>">EDIT MEMBER</a></li>
      

      <li class="nav-item"><a href="<?php echo base_url().'/User/lihat_data_event'?>">JADWAL EVENT</a></li>

       <li class="nav-item"><a href="<?php echo base_url().'/User/lihat_sertifikat'?>">SERTIFIKAT</a></li>


<li ><a href="<?php echo base_url().'/login/logout'?>">LOG OUT</a></li>
  </ul>

  <!--Akses Menu Untuk NON Member /publik-->
  <?php elseif($this->session->userdata('akses')=='publik'):?>
  <li class="nav-item"><a href="<?php echo base_url().'/User/index'?>">HOME</a></li>

<li ><a href="<?php echo base_url().'/login/logout'?>">LOG OUT</a></li>
  </ul>
  
  
  <!--Akses Menu Untuk home awal-->
  <?php else:?>
  <li class="nav-item"><a href="<?php echo base_url().'/User/index'?>">HOME</a></li>

  <li class="nav-item"><a href="<?php echo base_url().'login/index'?>">LOG IN</a></li>

  <li class="nav-item"><a href="<?php echo base_url().'home/daftar'?>">REGISTER</a></li>


  <?php endif;?>
  
  
</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav> 
