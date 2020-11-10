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
            <h2>Login</h2>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Login</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcrumb Area End ##### -->
 <section class="alazea-portfolio-area portfolio-page section-padding-0-100">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                    <!-- Section Heading -->
                <form action="#" method="post" >
                    <div class="section-heading text-center">
                        <h2>Login</h2>
                        <p>Masukkan Username dan Password anda</p>
                        <br>
                         <div class="col-md 2">
                        <input type="text" class="form-control" name="Username" placeholder=" Username">
                        <br> 
                        <input type="text" class="form-control" name="Password" placeholder="password">
                        <br>
                    </div>
                         <a href="<?php echo site_url('admin/Homeadmin')?>" class="btn alazea-btn w-10">Login</a>
                         <a href="" class="btn alazea-btn w-10">Register</a>
                         <p>Daftar dahulu jika belum mempunyai akun.</p>
                    </div>  
                </form>           	
 </section>
	
</body>
<?php $this->load->view('partials/script'); ?>
</html>