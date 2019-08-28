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
            User
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> User</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddGuru" data-toggle="modal"><i class="fa fa-plus"></i> Add Guru/Tenaga Pendidik</button></a>
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddSantri" data-toggle="modal"><i class="fa fa-plus"></i> Add Santri</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAddGuru" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Guru/Tenaga Pendidik</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIP/NID Guru/Tenaga Pendidik</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_guru.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2 selected>Guru</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Guru/Tenaga Pengajar</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Dosen" class="form-control">
											<?php
												$querydosen = mysqli_query($konek, "SELECT * FROM dosen");
												if($querydosen == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($dosen = mysqli_fetch_array($querydosen)){
													if($dosen["NIP"] != $_SESSION["Username"]){
														echo "<option value='$dosen[NIP]'>$dosen[Nama_Dosen], Tambah Dosen untuk User dengan NIP = $dosen[NIP]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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
		
		<!-- Modal Popup Dosen -->
		<div id="ModalAddSantri" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User Santri</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NISN Santri</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_santri.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>Santri</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Santri</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_Mahasiswa" class="form-control">
											<?php
												$querymahasiswa = mysqli_query($konek, "SELECT * FROM mahasiswa");
												if($querymahasiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($mhs = mysqli_fetch_array($querymahasiswa)){
													if($mhs["NIM"] != $_SESSION["Username"]){
														echo "<option value='$mhs[NIM]'>$mhs[Nama_Mahasiswa], Tambah Mahasiswa untuk User dengan NIM = $mhs[NIM]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
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
	<?php include 'view/footer.php';?>
     
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>