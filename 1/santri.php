<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>IDS Akademik</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php include 'view/header.php';?>
      <?php include 'view/left-menu.php';?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Santri
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-users"></i> Santri</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                </div><!-- /.box-header -->
                <div class="box-body">
		 <a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Add</button></a>
                  <br></br>
                    <table id="data" class="table table-bordered table-striped table-scalable">
			<?php include "dt_santri.php"; ?>
                    </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
<!-- Modal Popup santri -->
<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Mahasiswa</h4>
            </div>
            <div class="modal-body">
                <form action="santri_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
                    <div class="form-group">
                        <label>NISN</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-id-card"></i>
                                </div>
                                <input name="NIM" type="text" class="form-control" placeholder="NISN"/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Nama Santri</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user"></i>
                                </div>
                                <input name="Nama_Mahasiswa" type="text" class="form-control" placeholder="Nama Santri"/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Tanggal Lahir</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input id="Tanggal_Lahir" name="Tanggal_Lahir" type="text" class="form-control" placeholder="Tanggal Lahir">
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <select name="JK" class="form-control">
                                    <option selected>Pilih Jenis Kelamin</option>
                                    <option value="L">Laki - laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>No. Telp</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <input name="No_Telp" type="text" class="form-control" placeholder="No Telpon"/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Alamat</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-flag"></i>
                                </div>
                                <input name="Alamat" type="text" class="form-control" placeholder="Alamat"/>
                            </div>
                    </div>
                    <div class="form-group">
                        <label>Kelas</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-graduation-cap"></i>
                                </div>
                                <select name="Kode_Jurusan_Mhs" class="form-control">
                                    <?php

                                        $queryjurusan = mysqli_query($konek, "SELECT * FROM jurusan");
                                        if($queryjurusan == false){
                                                die ("Terdapat Kesalahan : ". mysqli_error($konek));	
                                        }
                                        while($jurusan = mysqli_fetch_array($queryjurusan)){
                                                echo "
                                                        <option value='$jurusan[Kode_Jurusan]'>$jurusan[Nama_Jurusan]</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-success" type="submit">
                                Add
                        </button>
                        <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
                                Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
		
		<!-- Modal Popup santri Edit -->
		<div id="ModalEditSantri" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
    <?php include "view/footer.php"; ?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>
