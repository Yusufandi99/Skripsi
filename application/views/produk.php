<?php $this->load->view('partials_admin/_head'); ?> 
     <!-- meta -->  
      <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?> <!-- nav -->      
      <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Produk
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Data Produk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-6">
        <?php foreach ($data as $p) {?>
<div  class="modal fade" id="modal-edit<?php echo $p['id_produk']?>">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                   
              <h3 style="display:block; text-align:center;">Edit Data Produk</h3>
 <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'Produk/edit'; ?>">
    <div class="form-group">
    <input type="text" value="<?php echo $p['id_produk'] ?>" id="id_produk" placeholder="id Produk" name="id_produk" aria-describedby="sizing-addon2" hidden>
    <div class="form-group">
      <input type="text" value="<?php echo $p['nama_produk'] ?>" id="nama_produk" class="form-control" placeholder="Nama Produk" name="nama_produk" aria-describedby="sizing-addon2" >
    </div>
     <div class="kotak">
		<input type="number" value="<?php echo $p['harga'] ?>" id="harga" name="harga" class="form-control" placeholder="Harga" />
	</div> <br>
  <div class="form-group">
  <select id="kategori" name="kategori" class="form-control select2" style="width: 100%;">
                  <option><?php echo $p['kategori'] ?></option>
                  <option>L QUEENLY</option>
                  <option>L MTH AKSESORIS (IM)</option>
                  <option>L MTH TABUNG (LK)</option>
                  <option>SP MTH SPAREPART (LK)</option>
                  <option>I MTH TINTA LAIN</option> 	
                  <option>L MTH AKSESORIS (LK)</option>
                  <option>S MTH STEMPEL (IM)</option>
                  </select>
    </div> 
    <div class="form-group">
                <select id="status" name="status" class="form-control select2" style="width: 100%;">
                  <option><?php echo $p['status'] ?></option>
                  <option>bisa dijual</option>
                  <option>tidak bisa dijual</option>
                  </select>
    </div> 
    </div>
   
    

          
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                
                <button type="submit" class="btn btn-primary" >Edit</button>
              </div>
            </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div></div></div>   
        <?php } ?>  
        <!-- /.modal -->


        <?php foreach ($data as $p) {?>

  <div class="modal fade" id="modal-hapus<?php echo $p['id_produk']?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <div class="form-msg"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
         <br>
        <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>Produk/hapus/<?=$p['id_produk']?>">Hapus</a>
        </div>
      </div>    </div></div>
      <?php } ?>
  
   

   <button class="btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
<div class="box">
  <div class="box-header">
    <div class="col-md-2" style="padding: 0;">      
    </div>

      <div class="box-body">
    <table id="example1" class="table table-bordered table-hover">

      <thead>
        <tr>
          <th>Id Produk </th>
          <th>Nama Produk</th>
          <th>Harga</th>
          <th>Kategori</th>
          <th>Status</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
         </thead>
         <?php
           foreach ($data as $p ) {
                ?>
      <tr>
        <td><?php echo $p['id_produk'] ?></td>
        <td><?php echo $p['nama_produk'] ?></td>
        <td><?php echo $p['harga'] ?></td>
        <td><?php echo $p['kategori'] ?></td>
        <td><?php echo $p['status'] ?></td>
        <td class="text-center" style="min-width:230px;">
          <button class="btn btn-warning update glyphicon glyphicon-repeat" data-toggle="modal" data-target="#modal-edit<?php echo $p['id_produk']?>">Edit</button>
          <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_produk']?>" >Hapus   </button></td>
                      
          </td>
      
      </tr>
      <?php } ?>
    </table>
  </div>
</div>
</div>
</div>
</div>


    <!-- Main content -->
    <!-- /.content -->
  </div>

    <?php $this->load->view('partials_admin/_footer'); ?>
      
      <!-- content -->
    <?php $this->load->view('partials_admin/_aside2'); ?> <!-- headerContent --><!-- mainContent -->
    
      <!-- footer -->
      
     
    <!-- js -->
       

     <?php $this->load->view('partials_admin/_script'); ?>

<div class="modal fade" id="modal-tambah">
         <div id="tempat-modal"><div class="modal fade in" id="update-kota" role="dialog" style="display: block;">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                  <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Produk</h3>

  <form method="post" enctype="multipart/form-data" action="<?php echo base_url(). 'Produk/tambah_aksi'; ?>">
    <input id="id_produk" name="id_produk" hidden> <br>
    <div class="form-group">
      <input type="text" id="nama_produk" class="form-control" placeholder="Nama Produk" name="nama_produk" aria-describedby="sizing-addon2" >
    </div>
     <div class="kotak">
		<input type="number" id="harga" name="harga" class="form-control" placeholder="Harga" />
	</div> <br>
  <div class="form-group">
  <select id="kategori" name="kategori" class="form-control select2" style="width: 100%;">
                  <option>L QUEENLY</option>
                  <option>L MTH AKSESORIS (IM)</option>
                  <option>L MTH TABUNG (LK)</option>
                  <option>SP MTH SPAREPART (LK)</option>
                  <option>I MTH TINTA LAIN</option> 	
                  <option>L MTH AKSESORIS (LK)</option>
                  <option>S MTH STEMPEL (IM)</option>
                  </select>
    </div> 
    <div class="form-group">
                <select id="status" name="status" class="form-control select2" style="width: 100%;">
                   <option>bisa dijual</option>
                  <option>tidak bisa dijual</option>
                  </select>
    </div> 
   
      <div class="row">
        <div class="col-md-12">
          
          <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>

</div>

