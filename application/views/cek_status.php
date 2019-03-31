<?php //sesion berisi
if($this->session->userdata('akses')!=''):?> 
          <h2>Selamat datang <?php echo $this->session->userdata('ses_nama');?></h2>
          <h4>ID: <?php echo $this->session->userdata('ses_id');?></h4>
          <h4>Login sebagai: <?php echo $this->session->userdata('ses_level');?></h4>
          <?php endif;?>
           
            <?php if($this->session->userdata('akses')=='member'):?>
            <h4><i>Akun anda telah terverifikasi pada acara seminar kami</i></h4>
             
           <?php elseif($this->session->userdata('akses')=='publik'):?>
            <h4><i>Akun anda belum terverifikasi pada acara seminar kami, pastikan data yang anda masukkan telah benar</i></h4>
           
           <?php endif;?>

<?php //sesion berisi
if($this->session->userdata('akses')==''):?> 
          <h4><marquee direction="left"> Sebelum mendaftar pastikan anda telah melakukan transfer ke nomor rekening yang telah disedikan</i></marquee></h4>
          <?php endif;?>
