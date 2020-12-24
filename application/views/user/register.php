<!DOCTYPE html>
<html>
<head>
<?php $this->load->view('partials/head'); ?>
    
</head>
<body>
    <?php $this->load->view('partials/header'); ?>
     <!-- ##### Breadcrumb Area Start ##### -->
   <!-- ##### Breadcrumb Area Start ##### -->
    <div class="breadcrumb-area">
        <!-- Top Breadcrumb Area -->
        <div class="top-breadcrumb-area bg-img bg-overlay d-flex align-items-center justify-content-center" style="background-image: url(../assets_user/img/bg-img/jst.jpg);">
            <h2>Daftar</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Daftar</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
    <?= $this->session->flashdata('alert'); ?>
 <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <!-- Section Heading -->
                <form action="<?= base_url() ?>user/Register/daftar" method="post" >
                    <div class="section-heading text-center">
                        <h2>Daftar</h2>
                        <p>Masukkan Data Diri Anda</p>
                        <br>
                         <input type="text" class="form-control" name="id_user" placeholder=" id_user" value="<?php echo sprintf( $id_user) ?>" hidden>
                         <div class="col-md 2">
                        <input type="text" class="form-control" name="nama" placeholder=" Nama Lengkap">
                        <br> 
                        <input type="text" class="form-control" name="username" placeholder="Username">
                        <br>
                        <input type="password" class="form-control" name="password" placeholder="Password"><br>
                        <textarea type="textarea" class="form-control" name="alamat" placeholder="Alamat"></textarea><br>
                        <input type="text" class="form-control" name="kategori" value="user" hidden><br>
                    </div>
                      <button type="submit" class="btn alazea-btn w-10">Daftar</button>
                    </div>  
                </form>             
 </section>
    
</body>
<?php $this->load->view('partials/script'); ?>
</html>