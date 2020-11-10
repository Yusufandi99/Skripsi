    <?php $this->load->view('partials_admin/_head'); ?> 
     <!-- meta -->  
      <!-- header -->
    <?php $this->load->view('partials_admin/_header'); ?> <!-- nav -->      
      <!-- sidebar -->
    <?php $this->load->view('partials_admin/_aside'); ?>
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
 <!-- Content Header (Page header) -->
 
 <!-- Content Header (Page header) -->
 <?php foreach ($aturan as $p) {?>
  <div class="modal fade" id="modal-hapus<?php echo $p['id_hp']?>" aria-lavelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">
      <div class="modal-content">
          <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
      <div class="form-msg"></div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
          <h3 class="modal-title" id="exampleModalLabel"> Apakah Anda Yakin Menghapus Data ? </h3>
         <br>
        <a class="form-control btn btn-danger glyphicon glyphicon-remove-sign" href="<?= base_url() ?>admin/Aturan/hapus/<?=$p['id_hp']?>">Hapus</a>
        </div>
      </div>    </div></div>
  
      <?php }?>



    <section class="content-header">
      <h1>
        Aturan
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Aturan</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-12 col-xs-6">
<div class="box">
  <div class="box-header">
    <div class="col-md-2" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#modal-tambah"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>

           <div class="box-body">
    <table id="example2" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Hama Penyakit</th>
          <th>Gejala</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
         </thead>
         
      <?php
      
      $no = 1;
      foreach ($aturan as $p ) {
      ?>
      <tr>
        <td><?php echo $no++ ?></td>
        <td><?php echo $p['nama_hp'] ?></td>
        <td><?php echo $p['gejala'] ?></td>
          <td style="text-align: center;">
             <button class="btn btn-danger glyphicon glyphicon-remove-sign" data-toggle="modal" data-target="#modal-hapus<?php echo $p['id_hp']?>" >Hapus   </button></td>              
          </td>
      </tr>
    <?php } ?>
     
      <tbody id="data-hp">

      </tbody>
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
<div class="modal fade in"  role="dialog" style="display: block;">
            <div class="modal-dialog modal-md" role="document">
              <div class="modal-content">
                  <div class="col-md-offset-1 col-md-10 col-md-offset-1 well">
  <div class="form-msg"></div>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
  <h3 style="display:block; text-align:center;">Tambah Data Aturan</h3>

  <form method="post" action="<?php echo base_url(). 'admin/Aturan/tambah_aksi'; ?>">
    <input id="id_aturan" name="id_aturan" value="<?php echo $id_aturan ?>" hidden> 
     <div class="form-group">
      <label for="name">Pilih Hama Penyakit</label>
                <select required id="id_hp" name="id_hp" class="form-control select2" style="width: 100%;" >
                  <option  required>--Pilih Hama Penyakit--</option>
                 <?php foreach ($hp as $key) { 
                   echo"<option value='".$key['id_hp']."'>".$key['nama_hp']."</option>";
                  }
                   echo "</select>"
                  ?>
                 
    </div> 
    
        <div class="form-group">
      <label for="name">Pilih Gejala</label>
                <select required id="id_gejala" name="id_gejala" class="form-control select2" style="width: 100%;">
                  <option required>--Pilih Gejala--</option>
                 <?php foreach ($gejala as $key) { 
                   echo"<option value='".$key['id_gejala']."'>".$key['gejala']."</option>";
                  }
                   echo "</select>"
                  ?>
                 
    </div> 
    
   
    <div class="form-group">
      <div class="col-md-12">
          <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
      </div>
    </div>


