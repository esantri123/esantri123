<!-- Add Santri -->
<?php
    include 'dbo.php';
    error_reporting(0);
    if($_GET['form-santri'] == 'add'){   
?>
<div class="row">
  <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

    <div role="tabpanel">
    <form class='form form-horizontal' name='frsantri' method='POST' action='_crud/santri/create.php'>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Santri</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Orang Tua</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
                <div class="section"><div class="form-group col-md-14 col-sm-14">
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Perhatian!</strong> NISN santri harus di isi, jika santri tidak memiliki NISN inputkan NISN dengan 6 angka.
                        <p>(ex:000001,000002,000003,,,)
                    </div></div>
                </div>
                
                <div class="section">
                    
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <span class="label label-danger col-md-9" >
                            <font size="3">Pilih Form Pendaftaran</font></span>
                        </label>
                          <div class="radio radio-inline col-md-2">
                          <input type="radio" name="jenis_s" id="jenis_sa" value="MTs">
                          <label for="jenis_sa" >MTs</label>
                          </div>
                          <div class="radio radio-inline col-md-2">
                          <input type="radio" name="jenis_s" id="jenis_sb" value="MAK">
                          <label for="jenis_sb" >MAK</label>
                          </div>
                          <div class="radio radio-inline col-md-2">
                          <input type="radio" name="jenis_a" id="jenis_aa" value="Asrama">
                          <label for="jenis_aa" >Asrama</label>
                          </div>
                          <div class="radio radio-inline col-md-2">
                          <input type="radio" name="jenis_a" id="jenis_ab" value="Non Asrama">
                          <label for="jenis_ab" >Non Asrama</label>
                          </div>
                        
                        <label class="col-md-3 control-label">
                            <span class="label label-primary col-md-9" >
                            <font size="3">Tanggal Masuk</font></span></label>
                        <div class="col-md-3 form-group has-warning">
                            <input type='date' name='t_msk' class="form-control" >
                        </div>
                   </div>
                </div>
            
                <div class="section"><label>Identitas Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-2 control-label">No. Pendaftaran</label>
                        <div class="col-md-4">
                            <input type="text" name='no_daftar' class="form-control" placeholder="Masukkan No. Pendaftaran">
                        </div>                    
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-2 control-label">NISN</label>
                        <div class="col-md-4">
                            <input type="text" name='nisn' class="form-control" placeholder="Masukkan NISN">
                        </div> 
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-2 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik' class="form-control" placeholder="Masukkan NIK">
                        </div>
                    </div>    

                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">Nama Lengkap</label>
                    <div class="col-md-7">
                      <input type="text" name='nama' class="form-control" placeholder="Masukkan Nama Lengkap">
                    </div>
                    </div>

                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Jenis Kelamin</label>
                          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jka' value='L'>
                          <label for='jka'>L</label>
                          </div>
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jkb' value='P'>
                          <label for='jkb'>P</label>
                          </div>
                          
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;Anak ke</label>
                    <div class="col-md-1">
                        <input type="text" name='anak_ke' class="form-control" value="1">
                    </div>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dari </label>
                    <div class="col-md-1">
                        <input type="text" name='j_saudara' class="form-control" value="1">
                    </div>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;Bersaudara</label>
                    </div>
                                     
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Tempat Lahir</label>
                    <div class="col-md-3">
                        <input type="text" name='tp_lahir' class="form-control" placeholder="Tempat Lahir">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Tanggal Lahir</label>
                    <div class="col-md-3" >
                        <input type='date' name='tg_lahir' class="form-control" placeholder="Tanggal Lahir">
                    </div>
                    </div>

                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat' class="form-control" placeholder="Alamat">
                    </div>
                    </div>
                        
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec' class="form-control" placeholder="Kecamatan">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab' class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                    </div>
                    
                    <div class="form-group  has-warning">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov' class="form-control" placeholder="Provinsi">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep' class="form-control" placeholder="Kode POS">
                    </div>
                    </div> 
                </div> 
                
                <div class="section"><label>Sekolah Asal</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">Nama Sekolah</label>
                    <div class="col-md-7">
                      <input type="text" name='nama_s' class="form-control" placeholder="Nama Sekolah">
                    </div>
                    </div> 
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat_s' class="form-control" placeholder="Alamat Sekolah">
                    </div>
                    </div>
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec_s' class="form-control" placeholder="Kecamatan Sekolah">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab_s' class="form-control" placeholder="Kabupaten/Kota Sekolah">
                    </div>
                    </div>
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov_s' class="form-control" placeholder="Provinsi Sekolah">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep_s' class="form-control" placeholder="Kode POS Sekolah">
                    </div>
                    </div> 
                </div>
                
                <div class="section"><label>Hobi</label> 
                    <div class="form-group has-success">
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_olg" name="h_olg" value="Olahraga">
                       <label for="h_olg" class="col-md-1 control-label">Olahraga
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_baca" name="h_baca" value="Mambaca">
                       <label for="h_baca" class="col-md-1 control-label">Mambaca
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_tulis" name="h_tulis" value="Menulis">
                       <label for="h_tulis" class="col-md-1 control-label">Menulis
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_seni" name="h_seni" value="Kesenian">
                       <label for="h_seni" class="col-md-1 control-label">Kesenian
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_travel" name="h_travel" value="Travelling">
                       <label for="h_travel" class="col-md-1 control-label">Travelling
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="h_lain" name="h_lain" value="Lainnya">
                       <label for="h_lain" class="col-md-1 control-label">Lainnya
                       </label>
                    </div> 
                    </div>                    
                </div>
           
                <div class="section"><label>Cita-Cita</label> 
                    <div class="form-group has-success">
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_pns" name="c_pns" value="PNS">
                       <label for="c_pns" class="col-md-1 control-label">PNS
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_guru" name="c_guru" value="Guru/Dosen">
                       <label for="c_guru" class="col-md-1 control-label">Guru/Dosen
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_politik" name="c_politik" value="Politikus">
                       <label for="c_politik" class="col-md-1 control-label">Politikus
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_seni" name="c_seni" value="Seni/Artis/Sejenis">
                       <label for="c_seni" class="col-md-1 control-label">Seni/Artis/Sejenis
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_tni" name="c_tni" value="TNI/Polri">
                       <label for="c_tni" class="col-md-1 control-label">TNI/Polri
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_dokter" name="c_dokter" value="Dokter">
                       <label for="c_dokter" class="col-md-1 control-label">Dokter
                       </label>
                    </div>
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_wira" name="c_wira" value="Wiraswasta">
                       <label for="c_wira" class="col-md-1 control-label">Wiraswasta
                       </label>
                    </div>    
                    <div class="checkbox col-md-2">
                       <input type="checkbox" id="c_lain" name="c_lain" value="Lainnya">
                       <label for="c_lain" class="col-md-1 control-label">Lainnya
                       </label>
                    </div> 
                    </div>                    
                </div>
                
                <div class="section"><label>Kemampuan Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                    <label class="col-md-1 control-label">B. Arab</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="b_arab">
                          <option value="Tidak Bisa" class="col-md-1 control-label">Tidak Bisa</option>
                          <option value="Bisa" class="col-md-1 control-label">Bisa</option>
                          <option value="Aktif" class="col-md-1 control-label">Aktif</option>
                          <option value="Pasif" class="col-md-1 control-label">Pasif</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">B. Inggris</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="b_inggris">
                          <option value="Tidak Bisa" class="col-md-1 control-label">Tidak Bisa</option>
                          <option value="Bisa" class="col-md-1 control-label">Bisa</option>
                          <option value="Aktif" class="col-md-1 control-label">Aktif</option>
                          <option value="Pasif" class="col-md-1 control-label">Pasif</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Komputer</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="kom">
                          <option value="Tidak Bisa" class="col-md-1 control-label">Tidak Bisa</option>
                          <option value="Bisa" class="col-md-1 control-label">Bisa</option>
                        </select>
                    </div>
                    </div>
                </div>
                
                <div class="section"><label>Ke Madrasah</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group has-warning">
                    <label class="col-md-1 control-label">Biaya Study</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="by_study">
                          <option value="Orang Tua" class="col-md-1 control-label">Orang Tua</option>
                          <option value="Wali" class="col-md-1 control-label">Wali</option>
                          <option value="Yayasan" class="col-md-1 control-label">Yayasan</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Jarak</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="jarak">
                          <option value="< 1 KM" class="col-md-1 control-label">< 1 KM</option>
                          <option value="1-3 KM" class="col-md-1 control-label">1-3 KM</option>
                          <option value="3-5 KM" class="col-md-1 control-label">3-5 KM</option>
                          <option value="5-10 KM" class="col-md-1 control-label">5-10 KM</option>
                          <option value="> 10 KM" class="col-md-1 control-label">> 10 KM</option>
                        </select>
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Transportasi</label>
                    <div class="col-md-2">
                        <select class="select2 col-md-1" name="trans">
                          <option value="Jalan Kaki" class="col-md-1 control-label">Jalan Kaki</option>
                          <option value="Sepeda" class="col-md-1 control-label">Sepeda</option>
                          <option value="Sepeda Motor" class="col-md-1 control-label">Sepeda Motor</option>
                          <option value="Mobil Pribadi" class="col-md-1 control-label">Mobil Pribadi</option>
                          <option value="Angkutan Umum" class="col-md-1 control-label">Angkutan Umum</option>
                          <option value="Lainnya" class="col-md-1 control-label">Lainnya</option>
                        </select>
                    </div>
                    </div>
                </div>
        </div> 
        
        <div role="tabpanel" class="tab-pane" id="profile">
                <div class="section"><label>Identitas Orang Tua / Wali Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group has-warning">
                        <label class="col-md-2 control-label">No. Kartu Keluarga</label>
                        <div class="col-md-4">
                            <input type="text" name='no_keluarga' class="form-control" placeholder="Masukkan No. Kartu Keluarga">
                        </div>                    
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label">Ayah :</label>
                        <label class="col-md-1 control-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" name='nama_a' class="form-control" placeholder="Masukkan Nama Lengkap Ayah">
                        </div> 
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik_a' class="form-control" placeholder="Masukkan NIK Ayah">
                        </div> 
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                        <div class="col-md-2">
                            <select class="select2 col-md-1" name="pend_a">
                              <option value="<= SLTP" class="col-md-1 control-label"><= SLTP</option>
                              <option value="SLTA" class="col-md-1 control-label">SLTA</option>
                              <option value="D1" class="col-md-1 control-label">D1</option>
                              <option value="D2" class="col-md-1 control-label">D2</option>
                              <option value="D3" class="col-md-1 control-label">D3</option>
                              <option value="D4" class="col-md-1 control-label">D4</option>
                              <option value="S1" class="col-md-1 control-label">S1</option>
                              <option value="S2" class="col-md-1 control-label">S2</option>
                              <option value="Tidak Berpendidikan Formal" class="col-md-1 control-label">Tidak Berpendidikan Formal</option>
                            </select>
                        </div>
                       
                        <label class="col-md-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label>
                        <div class="col-md-2">
                            <select class="select2 col-md-1" name="kerja_a">
                              <<option value="Tidak Bekerja" class="col-md-1 control-label">Tidak Bekerja</option>
                              <option value="Pensiunan/Almarhum" class="col-md-1 control-label">Pensiunan/Almarhum</option>
                              <option value="PNS(Selain Guru/Dosen)" class="col-md-1 control-label">PNS(Selain Guru/Dosen)</option>
                              <option value="Dokter/Bidan/Perawat" class="col-md-1 control-label">Dokter/Bidan/Perawat</option>
                              <option value="TNI/Polri" class="col-md-1 control-label">TNI/Polri</option>
                              <option value="Guru/Dosen" class="col-md-1 control-label">Guru/Dosen</option>
                              <option value="Wiraswasta/Pengusaha" class="col-md-1 control-label">Wiraswasta/Pengusaha</option>
                              <option value="Petani/Peternak" class="col-md-1 control-label">Petani/Peternak</option>
                              <option value="Buruh Bangunan" class="col-md-1 control-label">Buruh Bangunan</option>
                              <option value="Sopir" class="col-md-1 control-label">Sopir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label"></label>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label">Ibu :</label>
                        <label class="col-md-1 control-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" name='nama_i' class="form-control" placeholder="Masukkan Nama Lengkap Ibu">
                        </div> 
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik_i' class="form-control" placeholder="Masukkan NIK Ibu">
                        </div> 
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                        <div class="col-md-2">
                            <select class="select2 col-md-1" name="pend_i">
                              <option value="<= SLTP" class="col-md-1 control-label"><= SLTP</option>
                              <option value="SLTA" class="col-md-1 control-label">SLTA</option>
                              <option value="D1" class="col-md-1 control-label">D1</option>
                              <option value="D2" class="col-md-1 control-label">D2</option>
                              <option value="D3" class="col-md-1 control-label">D3</option>
                              <option value="D4" class="col-md-1 control-label">D4</option>
                              <option value="S1" class="col-md-1 control-label">S1</option>
                              <option value="S2" class="col-md-1 control-label">S2</option>
                              <option value="Tidak Berpendidikan Formal" class="col-md-1 control-label">Tidak Berpendidikan Formal</option>
                            </select>
                        </div>
                       
                        <label class="col-md-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label>
                        <div class="col-md-2">
                            <select class="select2 col-md-1" name="kerja_i">
                              <<option value="IRT" class="col-md-1 control-label">IRT</option>
                              <option value="Pensiunan/Almarhum" class="col-md-1 control-label">Pensiunan/Almarhum</option>
                              <option value="PNS(Selain Guru/Dosen)" class="col-md-1 control-label">PNS(Selain Guru/Dosen)</option>
                              <option value="Dokter/Bidan/Perawat" class="col-md-1 control-label">Dokter/Bidan/Perawat</option>
                              <option value="TNI/Polri" class="col-md-1 control-label">TNI/Polri</option>
                              <option value="Guru/Dosen" class="col-md-1 control-label">Guru/Dosen</option>
                              <option value="Wiraswasta/Pengusaha" class="col-md-1 control-label">Wiraswasta/Pengusaha</option>
                              <option value="Petani/Peternak" class="col-md-1 control-label">Petani/Peternak</option>
                              <option value="Buruh Bangunan" class="col-md-1 control-label">Buruh Bangunan</option>
                              <option value="Sopir" class="col-md-1 control-label">Sopir</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label"></label>
                    </div>
                    
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat Orang Tua</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat_o' class="form-control" placeholder="Alamat">
                    </div>
                    </div>
                        
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec_o' class="form-control" placeholder="Kecamatan">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab_o' class="form-control" placeholder="Kabupaten/Kota">
                    </div>
                    </div>
                    
                    <div class="form-group  has-warning">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov_o' class="form-control" placeholder="Provinsi">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep_o' class="form-control" placeholder="Kode POS">
                    </div>
                    </div> 
                    
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. Telpon</label>
                    <div class="col-md-4">
                      <input type="text" name='telp_o' class="form-control" placeholder="No. Telpon">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-9 control-label">Penghasilan rata-rata/bulan&nbsp;
                    
                        <select class="select2 col-md-9" name="p_hasil">
                          <option value="<= Rp 500.000"><= Rp 500.000</option>
                          <option value="Rp 500.001 - Rp 1.000.000" >Rp 500.001 s/d Rp 1.000.000</option>
                          <option value="Rp 1.000.001 - Rp 2.000.000" >Rp 1.000.001 s/d Rp 2.000.000</option>
                          <option value="Rp 2.000.001 - Rp 3.000.000" >Rp 2.000.001 s/d Rp 3.000.000</option>
                          <option value="Rp 3.000.001 - Rp 5.000.000" >Rp 3.000.001 s/d Rp 5.000.000</option>
                          <option value="> Rp 5.000.000" >> Rp 5.000.000</option>
                        </select>
                    </label>
                    </div>
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. KKS/KPS</label>
                    <div class="col-md-4">
                      <input type="text" name='no_kks' class="form-control" placeholder="No. KKS/KPS">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. KIP</label>
                    <div class="col-md-4">
                      <input type="text" name='no_kip' class="form-control" placeholder="No. KIP">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. PKH</label>
                    <div class="col-md-4">
                      <input type="text" name='no_pkh' class="form-control" placeholder="No. PKH">
                    </div>
                    </div> 
                </div>
        </div>
    </div> 
    
    <div class="form-footer">
        <div class="form-group">
          <div class="col-md-3 col-md-offset-8">
            <label class="col-md-1 control-label"></label>
            <input type="submit" class="btn btn-primary" value='Simpan'>
            <input type="reset" class="btn btn-default" value='Batal'>
            <label class="col-md-1 control-label"></label>
          </div>
        </div>
    </div>
    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
    <div class="section"></div>
   </form>   
   </div>
  </div>
 </div>
<?php } ?>

<!-- Update Santri -->
<?php
include 'dbo.php';
if($_GET['form-santri'] == 'edit'){ 
    $id=$_GET['id'];
    //$query = "SELECT * FROM datasiswa where nisn='$id'";
    $query = "SELECT * 
              FROM dataortu c 
              JOIN datasiswa s USING (nisn)
              WHERE nisn='".$id."'";
    $sql = mysqli_query($connect, $query)
               or die("Error query ".mysql_error());
    if($row = mysqli_fetch_array($sql)){            
?>
<div class="row">
  <div class="col-md-12">
   <div class="card card-tab card-mini">   
    <div role="tabpanel">
    <form class='form form-horizontal' name='frsantri' method='POST' action='_crud/santri/update.php'>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Santri</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Orang Tua</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
                
                <div class="section"><label> </label> 
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <span class="label label-danger col-md-9" >
                            <font size="3">Pilih Form Pendaftaran</font></span>
                        </label>
                        <?php
                        if($row['jenis_s'] == "MTs"){
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sa' value='MTs' checked>
                          <label for='jenis_sa' >MTs</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sb' value='MAK'>
                          <label for='jenis_sb' >MAK</label>
                          </div>
                          ";                          
                        }else if($row['jenis_s'] == "MAK"){
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sa' value='MTs'>
                          <label for='jenis_sa' >MTs</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sb' value='MAK' checked>
                          <label for='jenis_sb' >MAK</label>
                          </div>
                          ";
                        }else{
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sa' value='MTs'>
                          <label for='jenis_sa' >MTs</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_s' id='jenis_sb' value='MAK'>
                          <label for='jenis_sb' >MAK</label>
                          </div>
                          ";
                        }
                        
                        if($row['jenis_a'] == "Asrama"){
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_aa' value='Asrama' checked>
                          <label for='jenis_aa'>Asrama</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_ab' value='Non Asrama'>
                          <label for='jenis_ab'>Non Asrama</label>
                          </div>
                          ";                          
                        }else if($row['jenis_a'] == "Non Asrama"){
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_aa' value='Asrama'>
                          <label for='jenis_aa'>Asrama</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_ab' value='Non Asrama'  checked>
                          <label for='jenis_ab'>Non Asrama</label>
                          </div>
                          ";
                        }else{
                          echo "
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_aa' value='Asrama'>
                          <label for='jenis_aa'>Asrama</label>
                          </div>
                          <div class='radio radio-inline col-md-2'>
                          <input type='radio' name='jenis_a' id='jenis_ab' value='Non Asrama'>
                          <label for='jenis_ab'>Non Asrama</label>
                          </div>
                          ";
                        }
                        ?>
                        
                        <label class="col-md-3 control-label">
                            <span class="label label-primary col-md-9" >
                            <font size="3">Tanggal Masuk</font></span></label>
                        <div class="col-md-3 form-group has-warning" >
                            <input type='date' name='t_msk' class="form-control" value="<?php echo $row['t_msk']?>">
                        </div>
                   </div>
                </div>
            
                <div class="section"><label>Identitas Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-2 control-label">No. Pendaftaran</label>
                        <div class="col-md-4 has-success">
                            <input type="text" name='no_daftar' class="form-control" value="<?php echo $row['no_daftar']?>">
                        </div>                    
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-2 control-label">NISN</label>
                        <div class="col-md-4">
                            <input type="text" name='nisn' class="form-control" value="<?php echo $row['nisn']?>">
                        </div>                    
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-2 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik' class="form-control" value="<?php echo $row['nik']?>">
                        </div>
                    </div>    

                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">Nama Lengkap</label>
                    <div class="col-md-7">
                      <input type="text" name='nama' class="form-control" value="<?php echo $row['nama']?>">
                    </div>
                    </div>

                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Jenis Kelamin</label>
                    <?php
                    if($row['jk'] == "L"){
                          echo "
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jka' value='L' checked>
                          <label for='jka'>L</label>
                          </div>
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jkb' value='P'>
                          <label for='jkb'>P</label>
                          </div>
                          ";                          
                        }else if($row['jk'] == "P"){
                          echo "
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jka' value='L'>
                          <label for='jka'>L</label>
                          </div>
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jkb' value='P' checked>
                          <label for='jkb'>P</label>
                          </div>
                          ";
                        }else{
                          echo "
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jka' value='L'>
                          <label for='jka'>L</label>
                          </div>
                          <div class='radio radio-inline col-md-1'>
                          <input type='radio' name='jk' id='jkb' value='P'>
                          <label for='jkb'>P</label>
                          </div>
                          ";
                        }
                    ?>
                          
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;Anak ke</label>
                    <div class="col-md-1">
                        <input type="text" name='anak_ke' class="form-control" value="<?php echo $row['anak_ke']?>">
                    </div>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Dari </label>
                    <div class="col-md-1">
                        <input type="text" name='j_saudara' class="form-control" value="<?php echo $row['j_saudara']?>">
                    </div>
                    <label class="col-md-1 control-label">&nbsp;&nbsp;Bersaudara</label>
                    </div>
                                     
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Tempat Lahir</label>
                    <div class="col-md-3">
                        <input type="text" name='tp_lahir' class="form-control" value="<?php echo $row['tp_lahir']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Tanggal Lahir</label>
                    <div class="col-md-3" >
                        <input type='date' name='tg_lahir' class="form-control" value="<?php echo $row['tg_lahir']?>">
                    </div>
                    </div>

                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat' class="form-control" value="<?php echo $row['alamat']?>">
                    </div>
                    </div>
                        
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec' class="form-control" value="<?php echo $row['kec']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab' class="form-control" value="<?php echo $row['kab']?>">
                    </div>
                    </div>
                    
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov' class="form-control" value="<?php echo $row['prov']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep' class="form-control" value="<?php echo $row['kodep']?>">
                    </div>
                    </div> 
                </div> 
                
                <div class="section"><label>Sekolah Asal</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">Nama Sekolah</label>
                    <div class="col-md-7">
                      <input type="text" name='nama_s' class="form-control" value="<?php echo $row['nama_s']?>">
                    </div>
                    </div> 
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat_s' class="form-control" value="<?php echo $row['alamat_s']?>">
                    </div>
                    </div>
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec_s' class="form-control" value="<?php echo $row['kec_s']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab_s' class="form-control" value="<?php echo $row['kab_s']?>">
                    </div>
                    </div>
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov_s' class="form-control" value="<?php echo $row['prov_s']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep_s' class="form-control" value="<?php echo $row['kodep_s']?>">
                    </div>
                    </div> 
                </div>
                
                <div class="section"><label>Hobi</label> 
                    <div class="form-group">
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_olg'] == "Olahraga"){
                       echo "
                       <input type='checkbox' id='h_olg' name='h_olg' value='Olahraga' checked>
                       <label for=h_olg class=col-md-1 control-label>Olahraga</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_olg' name='h_olg' value='Olahraga'>
                       <label for=h_olg class=col-md-1 control-label>Olahraga</label>";    
                      }
                    ?>   
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_baca'] == "Mambaca"){
                       echo "
                       <input type='checkbox' id='h_baca' name='h_baca' value='Mambaca' checked>
                       <label for=h_baca class=col-md-1 control-label>Mambaca</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_baca' name='h_baca' value='Mambaca'>
                       <label for=h_baca class=col-md-1 control-label>Mambaca</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_tulis'] == "Menulis"){
                       echo "
                       <input type='checkbox' id='h_tulis' name='h_tulis' value='Menulis' checked>
                       <label for=h_tulis class=col-md-1 control-label>Menulis</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_tulis' name='h_tulis' value='Menulis'>
                       <label for=h_tulis class=col-md-1 control-label>Menulis</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_seni'] == "Kesenian"){
                       echo "
                       <input type='checkbox' id='h_seni' name='h_seni' value='Kesenian' checked>
                       <label for=h_seni class=col-md-1 control-label>Kesenian</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_seni' name='h_seni' value='Kesenian'>
                       <label for=h_seni class=col-md-1 control-label>Kesenian</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_travel'] == "Travelling"){
                       echo "
                       <input type='checkbox' id='h_travel' name='h_travel' value='Travelling' checked>
                       <label for=h_travel class=col-md-1 control-label>Travelling</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_travel' name='h_travel' value='Travelling'>
                       <label for=h_travel class=col-md-1 control-label>Travelling</label>";   
                      }
                    ?>
                    </div> 
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_lain'] == "Lainnya"){
                       echo "
                       <input type='checkbox' id='h_lain' name='h_lain' value='Lainnya' checked>
                       <label for=h_lain class=col-md-1 control-label>Lainnya</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_lain' name='h_lain' value='Lainnya'>
                       <label for=h_lain class=col-md-1 control-label>Lainnya</label>";    
                      }
                    ?>
                    </div> 
                    </div>                    
                </div>
           
                <div class="section"><label>Cita-Cita</label> 
                    <div class="form-group">
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_pns'] == "PNS"){
                       echo "
                       <input type='checkbox' id='c_pns' name='c_pns' value='PNS' checked>
                       <label for=c_pns class=col-md-1 control-label>PNS</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_pns' name='c_pns' value='PNS'>
                       <label for=c_pns class=col-md-1 control-label>PNS</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_guru'] == "Guru/Dosen"){
                       echo "
                       <input type='checkbox' id='c_guru' name='c_guru' value='Guru/Dosen' checked>
                       <label for=c_guru class=col-md-1 control-label>Guru/Dosen</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_guru' name='c_guru' value='Guru/Dosen'>
                       <label for=c_guru class=col-md-1 control-label>Guru/Dosen</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_politik'] == "Politikus"){
                       echo "
                       <input type='checkbox' id='c_politik' name='c_politik' value='Politikus' checked>
                       <label for=c_politik class=col-md-1 control-label>Politikus</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_politik' name='c_politik' value='Politikus'>
                       <label for=c_politik class=col-md-1 control-label>Politikus</label>";   
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_seni'] == "Seni/Artis/Sejenis"){
                       echo "
                       <input type='checkbox' id='c_seni' name='c_seni' value='Seni/Artis/Sejenis' checked>
                       <label for=c_seni class=col-md-1 control-label>Seni/Artis/Sejenis</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_seni' name='c_seni' value='Seni/Artis/Sejenis'>
                       <label for=c_seni class=col-md-1 control-label>Seni/Artis/Sejenis</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_tni'] == "TNI/Polri"){
                       echo "
                       <input type='checkbox' id='c_tni' name='c_tni' value='TNI/Polri' checked>
                       <label for=c_tni class=col-md-1 control-label>TNI/Polri</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_tni' name='c_tni' value='TNI/Polri'>
                       <label for=c_tni class=col-md-1 control-label>TNI/Polri</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_dokter'] == "Dokter"){
                       echo "
                       <input type='checkbox' id='c_dokter' name='c_dokter' value='Dokter' checked>
                       <label for=c_dokter class=col-md-1 control-label>Dokter</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_dokter' name='c_dokter' value='Dokter'>
                       <label for=c_dokter class=col-md-1 control-label>Dokter</label>";  
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_wira'] == "Wiraswasta"){
                       echo "
                       <input type='checkbox' id='c_wira' name='c_wira' value='Wiraswasta' checked>
                       <label for=c_wira class=col-md-1 control-label>Wiraswasta</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_wira' name='c_wira' value='Wiraswasta'>
                       <label for=c_wira class=col-md-1 control-label>Wiraswasta</label>";   
                      }
                    ?>
                    </div>    
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_lain'] == "Lainnya"){
                       echo "
                       <input type='checkbox' id='c_lain' name='c_lain' value='Lainnya' checked>
                       <label for=c_lain class=col-md-1 control-label>Lainnya</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_lain' name='c_lain' value='Lainnya'>
                       <label for=c_lain class=col-md-1 control-label>Lainnya</label>";   
                      }
                    ?>
                    </div> 
                    </div>                    
                </div>
                
                <div class="section"><label>Kemampuan Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                    <label class="col-md-1 control-label">B. Arab</label>
                    <div class="col-md-2">
                    <?php
                      if($row['b_arab'] == "Pasif"){
                       echo "
                       <select class='select2 col-md-1' name='b_arab'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label' selected>Pasif</option>
                        </select>";
                      }
                      else if($row['b_arab'] == "Aktif"){
                       echo "
                       <select class='select2 col-md-1' name='b_arab'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label' selected>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>";
                      }
                      else if($row['b_arab'] == "Bisa"){
                       echo "
                       <select class='select2 col-md-1' name='b_arab'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label' selected>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='b_arab'>
                          <option value='Tidak Bisa' class='col-md-1 control-label' selected>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>"; 
                      }
                    ?>     
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">B. Inggris</label>
                    <div class="col-md-2">
                    <?php
                      if($row['b_inggris'] == "Pasif"){
                       echo "
                       <select class='select2 col-md-1' name='b_inggris'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label' selected>Pasif</option>
                        </select>";
                      }
                      else if($row['b_inggris'] == "Aktif"){
                       echo "
                       <select class='select2 col-md-1' name='b_inggris'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label' selected>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>";
                      }
                      else if($row['b_inggris'] == "Bisa"){
                       echo "
                       <select class='select2 col-md-1' name='b_inggris'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label' selected>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='b_inggris'>
                          <option value='Tidak Bisa' class='col-md-1 control-label' selected>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                          <option value='Aktif' class='col-md-1 control-label'>Aktif</option>
                          <option value='Pasif' class='col-md-1 control-label'>Pasif</option>
                        </select>"; 
                      }
                    ?>
                    </div>
                    
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Komputer</label>
                    <div class="col-md-2">
                    <?php
                      if($row['kom'] == "Bisa"){
                       echo "
                       <select class='select2 col-md-1' name='kom'>
                          <option value='Tidak Bisa' class='col-md-1 control-label'>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label' selected>Bisa</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='kom'>
                          <option value='Tidak Bisa' class='col-md-1 control-label' selected>Tidak Bisa</option>
                          <option value='Bisa' class='col-md-1 control-label'>Bisa</option>
                        </select>"; 
                      }
                    ?>
                    </div>
                    </div>
                </div>
                
                <div class="section"><label>Ke Madrasah</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                    <label class="col-md-1 control-label">Biaya Study</label>
                    <div class="col-md-2">                       
                    <?php
                      if($row['by_study'] == "Yayasan"){
                       echo "
                       <select class=select2 col-md-1' name='by_study'>
                          <option value='Orang Tua' class='col-md-1 control-label'>Orang Tua</option>
                          <option value='Wali' class='col-md-1 control-label'>Wali</option>
                          <option value='Yayasan' class='col-md-1 control-label' selected>Yayasan</option>
                        </select>";
                      }
                      else if($row['by_study'] == "Wali"){
                       echo "
                       <select class='select2 col-md-1' name='by_study'>
                          <option value='Orang Tua' class='col-md-1 control-label'>Orang Tua</option>
                          <option value='Wali' class='col-md-1 control-label' selected>Wali</option>
                          <option value='Yayasan' class='col-md-1 control-label'>Yayasan</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='by_study'>
                          <option value='Orang Tua' class='col-md-1 control-label' selected>Orang Tua</option>
                          <option value='Wali' class='col-md-1 control-label'>Wali</option>
                          <option value='Yayasan' class='col-md-1 control-label'>Yayasan</option>
                        </select>"; 
                      }
                    ?>
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Jarak</label>
                    <div class="col-md-2">
                    <?php
                      if($row['jarak'] == "> 10 KM"){
                       echo "
                       <select class='select2 col-md-1' name='jarak'>
                          <option value='< 1 KM' class='col-md-1 control-label'>< 1 KM</option>
                          <option value='1-3 KM' class='col-md-1 control-label'>1-3 KM</option>
                          <option value='3-5 KM' class='col-md-1 control-label'>3-5 KM</option>
                          <option value='5-10 KM' class='col-md-1 control-label'>5-10 KM</option>
                          <option value='> 10 KM' class='col-md-1 control-label' selected>> 10 KM</option>
                        </select>";
                      }
                      else if($row['jarak'] == "5-10 KM"){
                       echo "
                       <select class='select2 col-md-1' name='jarak'>
                          <option value='< 1 KM' class='col-md-1 control-label'>< 1 KM</option>
                          <option value='1-3 KM' class='col-md-1 control-label'>1-3 KM</option>
                          <option value='3-5 KM' class='col-md-1 control-label'>3-5 KM</option>
                          <option value='5-10 KM' class='col-md-1 control-label' selected>5-10 KM</option>
                          <option value='> 10 KM' class='col-md-1 control-label'>> 10 KM</option>
                        </select>";
                      }
                      else if($row['jarak'] == "3-5 KM"){
                       echo "
                       <select class='select2 col-md-1' name='jarak'>
                          <option value='< 1 KM' class='col-md-1 control-label'>< 1 KM</option>
                          <option value='1-3 KM' class='col-md-1 control-label'>1-3 KM</option>
                          <option value='3-5 KM' class='col-md-1 control-label' selected>3-5 KM</option>
                          <option value='5-10 KM' class='col-md-1 control-label'>5-10 KM</option>
                          <option value='> 10 KM' class='col-md-1 control-label'>> 10 KM</option>
                        </select>";
                      }
                      else if($row['jarak'] == "1-3 KM"){
                       echo "
                       <select class='select2 col-md-1' name='jarak'>
                          <option value='< 1 KM' class='col-md-1 control-label'>< 1 KM</option>
                          <option value='1-3 KM' class='col-md-1 control-label' selected>1-3 KM</option>
                          <option value='3-5 KM' class='col-md-1 control-label'>3-5 KM</option>
                          <option value='5-10 KM' class='col-md-1 control-label'>5-10 KM</option>
                          <option value='> 10 KM' class='col-md-1 control-label'>> 10 KM</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='jarak'>
                          <option value='< 1 KM' class='col-md-1 control-label' selected>< 1 KM</option>
                          <option value='1-3 KM' class='col-md-1 control-label'>1-3 KM</option>
                          <option value='3-5 KM' class='col-md-1 control-label'>3-5 KM</option>
                          <option value='5-10 KM' class='col-md-1 control-label'>5-10 KM</option>
                          <option value='> 10 KM' class='col-md-1 control-label'>> 10 KM</option>
                        </select>";
                      }
                    ?> 
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-1 control-label">Transportasi</label>
                    <div class="col-md-2">
                    <?php
                      if($row['trans'] == "Lainnya"){
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label'>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label'>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label'>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label'>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label'>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label' selected>Lainnya</option>
                        </select>";
                      }
                      else if($row['trans'] == "Angkutan Umum"){
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label'>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label'>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label'>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label'>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label' selected>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label'>Lainnya</option>
                        </select>";
                      }
                      else if($row['trans'] == "Mobil Pribadi"){
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label'>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label'>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label'>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label' selected>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label'>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label'>Lainnya</option>
                        </select>";
                      }
                      else if($row['trans'] == "Sepeda Motor"){
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label'>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label'>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label' selected>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label'>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label'>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label'>Lainnya</option>
                        </select>";
                      }
                      else if($row['trans'] == "Sepeda"){
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label'>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label' selected>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label'>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label'>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label'>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label'>Lainnya</option>
                        </select>";
                      }
                      else{
                       echo "
                       <select class='select2 col-md-1' name='trans'>
                          <option value='Jalan Kaki' class='col-md-1 control-label' selected>Jalan Kaki</option>
                          <option value='Sepeda' class='col-md-1 control-label'>Sepeda</option>
                          <option value='Sepeda Motor' class='col-md-1 control-label'>Sepeda Motor</option>
                          <option value='Mobil Pribadi' class='col-md-1 control-label'>Mobil Pribadi</option>
                          <option value='Angkutan Umum' class='col-md-1 control-label'>Angkutan Umum</option>
                          <option value='Lainnya' class='col-md-1 control-label'>Lainnya</option>
                        </select>";
                      }
                    ?> 
                    </div>
                    </div>
                </div>
        </div> 
        
        <div role="tabpanel" class="tab-pane" id="profile">
                <div class="section"><label>Identitas Orang Tua / Wali Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group has-warning">
                        <label class="col-md-2 control-label">No. Kartu Keluarga</label>
                        <div class="col-md-4">
                            <input type="text" name='no_keluarga' class="form-control" value="<?php echo $row['no_keluarga']?>">
                        </div>                    
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label">Ayah :</label>
                        <label class="col-md-1 control-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" name='nama_a' class="form-control" value="<?php echo $row['nama_a']?>">
                        </div> 
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik_a' class="form-control" value="<?php echo $row['nik_a']?>">
                        </div> 
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                        <div class="col-md-2">
                        <?php
                          if($row['pend_a'] == "<= SLTP"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label' selected><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "SLTA"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label' selected>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "D1"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label' selected>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "D2"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label' selected>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "D3"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label' selected>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "D4"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label' selected>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "S1"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label' selected>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_a'] == "S2"){
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label' selected>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else{
                           echo "
                           <select class='select2 col-md-1' name='pend_a'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label' selected>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                        ?> 
                        </div>
                       
                        <label class="col-md-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label>
                        <div class="col-md-2">
                        <?php
                          if($row['kerja_a'] == "Tidak Bekerja"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label' selected>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Pensiunan/Almarhum"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label' selected>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "PNS(Selain Guru/Dosen)"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label' selected>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Dokter/Bidan/Perawat"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label' selected>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "TNI/Polri"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label' selected>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Guru/Dosen"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label' selected>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Wiraswasta/Pengusaha"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label' selected>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Petani/Peternak"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label' selected>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_a'] == "Buruh Bangunan"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label' selected>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else{
                           echo "
                           <select class='select2 col-md-1' name='kerja_a'>
                              <<option value='Tidak Bekerja' class='col-md-1 control-label'>Tidak Bekerja</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label' selected>Sopir</option>
                            </select>";
                          }
                        ?>   
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label"></label>
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label">Ibu :</label>
                        <label class="col-md-1 control-label">Nama</label>
                        <div class="col-md-7">
                            <input type="text" name='nama_i' class="form-control" value="<?php echo $row['nama_i']?>">
                        </div> 
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label">NIK</label>
                        <div class="col-md-4">
                            <input type="text" name='nik_i' class="form-control" value="<?php echo $row['nik_i']?>">
                        </div> 
                    </div>
                    <div class="form-group has-success">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-2 control-label">Pendidikan Terakhir</label>
                        <div class="col-md-2">
                        <?php
                          if($row['pend_i'] == "<= SLTP"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label' selected><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "SLTA"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label' selected>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "D1"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label' selected>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "D2"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label' selected>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "D3"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label' selected>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "D4"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label' selected>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "S1"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label' selected>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else if($row['pend_i'] == "S2"){
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label' selected>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label'>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                          else{
                           echo "
                           <select class='select2 col-md-1' name='pend_i'>
                              <option value='<= SLTP' class='col-md-1 control-label'><= SLTP</option>
                              <option value='SLTA' class='col-md-1 control-label'>SLTA</option>
                              <option value='D1' class='col-md-1 control-label'>D1</option>
                              <option value='D2' class='col-md-1 control-label'>D2</option>
                              <option value='D3' class='col-md-1 control-label'>D3</option>
                              <option value='D4' class='col-md-1 control-label'>D4</option>
                              <option value='S1' class='col-md-1 control-label'>S1</option>
                              <option value='S2' class='col-md-1 control-label'>S2</option>
                              <option value='Tidak Berpendidikan Formal' class='col-md-1 control-label' selected>Tidak Berpendidikan Formal</option>
                            </select>";
                          }
                        ?> 
                        </div>
                       
                        <label class="col-md-2 control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pekerjaan</label>
                        <div class="col-md-2">
                         <?php
                          if($row['kerja_i'] == "IRT"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label' selected>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Pensiunan/Almarhum"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label' selected>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "PNS(Selain Guru/Dosen)"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label' selected>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Dokter/Bidan/Perawat"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label' selected>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "TNI/Polri"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label' selected>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Guru/Dosen"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label' selected>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Wiraswasta/Pengusaha"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label' selected>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Petani/Peternak"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label' selected>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else if($row['kerja_i'] == "Buruh Bangunan"){
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label' selected>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label'>Sopir</option>
                            </select>";
                          }
                          else{
                           echo "
                           <select class='select2 col-md-1' name='kerja_i'>
                              <<option value='IRT' class='col-md-1 control-label'>IRT</option>
                              <option value='Pensiunan/Almarhum' class='col-md-1 control-label'>Pensiunan/Almarhum</option>
                              <option value='PNS(Selain Guru/Dosen)' class='col-md-1 control-label'>PNS(Selain Guru/Dosen)</option>
                              <option value='Dokter/Bidan/Perawat' class='col-md-1 control-label'>Dokter/Bidan/Perawat</option>
                              <option value='TNI/Polri' class='col-md-1 control-label'>TNI/Polri</option>
                              <option value='Guru/Dosen' class='col-md-1 control-label'>Guru/Dosen</option>
                              <option value='Wiraswasta/Pengusaha' class='col-md-1 control-label'>Wiraswasta/Pengusaha</option>
                              <option value='Petani/Peternak' class='col-md-1 control-label'>Petani/Peternak</option>
                              <option value='Buruh Bangunan' class='col-md-1 control-label'>Buruh Bangunan</option>
                              <option value='Sopir' class='col-md-1 control-label' selected>Sopir</option>
                            </select>";
                          }
                        ?>   
                        </div>
                    </div>
                    <div class="form-group has-warning">
                        <label class="col-md-1 control-label"></label>
                        <label class="col-md-1 control-label"></label>
                    </div>
                    
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Alamat Orang Tua</label>
                    <div class="col-md-7">
                      <input type="text" name='alamat_o' class="form-control" value="<?php echo $row['alamat_o']?>">
                    </div>
                    </div>
                        
                    <div class="form-group has-success">
                    <label class="col-md-2 control-label">Kecamatan</label>
                    <div class="col-md-3">
                      <input type="text" name='kec_o' class="form-control" value="<?php echo $row['kec_o']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kabupaten/Kota</label>
                    <div class="col-md-3">
                      <input type="text" name='kab_o' class="form-control" value="<?php echo $row['kab_o']?>">
                    </div>
                    </div>
                    
                    <div class="form-group  has-warning">
                    <label class="col-md-2 control-label">Provinsi</label>
                    <div class="col-md-3">
                      <input type="text" name='prov_o' class="form-control" value="<?php echo $row['prov_o']?>">
                    </div>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-2 control-label">Kode POS</label>
                    <div class="col-md-3">
                      <input type="text" name='kodep_o' class="form-control" value="<?php echo $row['kodep_o']?>">
                    </div>
                    </div> 
                    
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. Telpon</label>
                    <div class="col-md-4">
                      <input type="text" name='telp_o' class="form-control" value="<?php echo $row['telp_o']?>">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-9 control-label">Penghasilan rata-rata/bulan&nbsp;
                    <?php
                          if($row['p_hasil'] == "<= Rp 500.000"){
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000' selected><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000'>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000'>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000'>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000'>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000'>> Rp 5.000.000</option>
                            </select>";
                          }
                          else if($row['p_hasil'] == "Rp 500.001 - Rp 1.000.000"){
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000'><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000' selected>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000'>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000'>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000'>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000'>> Rp 5.000.000</option>
                            </select>";
                          }
                          else if($row['p_hasil'] == "Rp 1.000.001 - Rp 2.000.000"){
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000'><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000'>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000' selected>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000'>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000'>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000'>> Rp 5.000.000</option>
                            </select>";
                          }
                          else if($row['p_hasil'] == "Rp 2.000.001 - Rp 3.000.000"){
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000'><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000'>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000'>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000' selected>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000'>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000'>> Rp 5.000.000</option>
                            </select>";
                          }
                          else if($row['p_hasil'] == "Rp 3.000.001 - Rp 5.000.000"){
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000'><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000'>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000'>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000'>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000' selected>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000'>> Rp 5.000.000</option>
                            </select>";
                          }
                          else{
                           echo "
                           <select class='select2 col-md-9' name='p_hasil'>
                              <option value='<= Rp 500.000'><= Rp 500.000</option>
                              <option value='Rp 500.001 - Rp 1.000.000'>Rp 500.001 s/d Rp 1.000.000</option>
                              <option value='Rp 1.000.001 - Rp 2.000.000'>Rp 1.000.001 s/d Rp 2.000.000</option>
                              <option value='Rp 2.000.001 - Rp 3.000.000'>Rp 2.000.001 s/d Rp 3.000.000</option>
                              <option value='Rp 3.000.001 - Rp 5.000.000'>Rp 3.000.001 s/d Rp 5.000.000</option>
                              <option value='> Rp 5.000.000' selected>> Rp 5.000.000</option>
                            </select>";
                          }
                        ?> 
                    </label>
                    </div>
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. KKS/KPS</label>
                    <div class="col-md-4">
                      <input type="text" name='no_kks' class="form-control" value="<?php echo $row['no_kks']?>">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. KIP</label>
                    <div class="col-md-4">
                      <input type="text" name='no_kip' class="form-control" value="<?php echo $row['no_kip']?>">
                    </div>
                    </div> 
                    <div class="form-group has-warning">
                    <label class="col-md-2 control-label">No. PKH</label>
                    <div class="col-md-4">
                      <input type="text" name='no_pkh' class="form-control" value="<?php echo $row['no_pkh']?>">
                    </div>
                    </div> 
                </div>
        </div>
    </div> 
    
    <div class="form-footer">
        <div class="form-group">
          <div class="col-md-3 col-md-offset-8">
            <label class="col-md-1 control-label"></label>
            <input type="submit" class="btn btn-primary" value='Ubah'>
            <input type="reset" class="btn btn-default" value='Batal'>
            <label class="col-md-1 control-label"></label>
          </div>
        </div>
    </div> 
    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
    <div class="section"></div>
   </form>   
   </div>
  </div>
 </div>
</div>       
<?php }} ?>

<!-- Info Santri -->
<?php
include 'dbo.php';
if($_GET['form-santri'] == 'info'){ 
    $id=$_GET['id'];
    $query = "SELECT * 
              FROM dataortu c 
              JOIN datasiswa s USING (nisn)
              WHERE nisn='".$id."'";
    $sql = mysqli_query($connect, $query)
               or die("Error query ".mysql_error());
    if($row = mysqli_fetch_array($sql)){            
?>
<div class="row">
  <div class="col-md-12">
   <div class="card card-tab card-mini">   
    <div role="tabpanel">
    <form class='form form-horizontal' name='frsantri' method='POST' action='index.php?page=santri'>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Santri</a></li>
        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Orang Tua</a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
                
                <div class="section"><label> </label> 
                    <div class="form-group">
                        <label class="col-md-3 control-label">
                            <span class="label label-danger col-md-9" >
                            <font size="3">Pilih Form Pendaftaran</font></span>
                        </label>
                        <label class="col-md-3 control-label">
                            <font size="3">: <?php echo $row['jenis_s']?> - <?php echo $row['jenis_a']?></font>
                        </label>
                        
                        
                        <label class="col-md-3 control-label">
                            <span class="label label-primary col-md-9" >
                            <font size="3">Tanggal Masuk</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo date('d-M-Y', strtotime($row['t_msk']))?></font>
                        </div>
                   </div>
                </div>
            
                <div class="section"><label>Identitas Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">No. Pendaftaran</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['no_daftar']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">NISN</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nisn']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">NIK</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nik']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nama Lengkap</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nama']?></font>
                        </div>                   
                    </div>   
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Jenis Kelamin</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['jk']?></font>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Anak Ke</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['anak_ke']?> dari <?php echo $row['j_saudara']?> orang Bersaudara</font>
                        </div>                  
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Tempat, Tanggal Lahir</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['tp_lahir'].', '.date('d-M-Y', strtotime($row['tg_lahir']))?></font>
                        </div>                  
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Alamat</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['alamat']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kecamatan</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kec']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kabupaten</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kab']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Provinsi</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['prov']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kode Pos</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kodep']?></font>
                        </div>                   
                    </div>
                    
                   
                </div> 
                
                <div class="section"><label>Sekolah Asal</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nama Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nama_s']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Alamat Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['alamat_s']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kecamatan Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kec_s']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kabupaten Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kab_s']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Provinsi Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['prov_s']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kode Pos Sekolah Asal</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kodep_s']?></font>
                        </div>                   
                    </div>
                </div>
                
                <div class="section"><label>Hobi</label> 
                    <div class="form-group"><font size="3">
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_olg'] == "Olahraga"){
                       echo "
                       <input type='checkbox' id='h_olg' name='h_olg' value='Olahraga' checked disabled>
                       <label for=h_olg class=col-md-1 control-label>Olahraga</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_olg' name='h_olg' value='Olahraga' disabled>
                       <label for=h_olg class=col-md-1 control-label>Olahraga</label>";    
                      }
                    ?>   
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_baca'] == "Mambaca"){
                       echo "
                       <input type='checkbox' id='h_baca' name='h_baca' value='Mambaca' checked disabled>
                       <label for=h_baca class=col-md-1 control-label>Mambaca</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_baca' name='h_baca' value='Mambaca' disabled>
                       <label for=h_baca class=col-md-1 control-label>Mambaca</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_tulis'] == "Menulis"){
                       echo "
                       <input type='checkbox' id='h_tulis' name='h_tulis' value='Menulis' checked disabled>
                       <label for=h_tulis class=col-md-1 control-label>Menulis</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_tulis' name='h_tulis' value='Menulis' disabled>
                       <label for=h_tulis class=col-md-1 control-label>Menulis</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_seni'] == "Kesenian"){
                       echo "
                       <input type='checkbox' id='h_seni' name='h_seni' value='Kesenian' checked disabled>
                       <label for=h_seni class=col-md-1 control-label>Kesenian</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_seni' name='h_seni' value='Kesenian' disabled>
                       <label for=h_seni class=col-md-1 control-label>Kesenian</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_travel'] == "Travelling"){
                       echo "
                       <input type='checkbox' id='h_travel' name='h_travel' value='Travelling' checked disabled>
                       <label for=h_travel class=col-md-1 control-label>Travelling</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_travel' name='h_travel' value='Travelling' disabled>
                       <label for=h_travel class=col-md-1 control-label>Travelling</label>";   
                      }
                    ?>
                    </div> 
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['h_lain'] == "Lainnya"){
                       echo "
                       <input type='checkbox' id='h_lain' name='h_lain' value='Lainnya' checked disabled>
                       <label for=h_lain class=col-md-1 control-label>Lainnya</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='h_lain' name='h_lain' value='Lainnya' disabled>
                       <label for=h_lain class=col-md-1 control-label>Lainnya</label>";    
                      }
                    ?>
                    </div></font> 
                    </div>                    
                </div>
           
                <div class="section"><label>Cita-Cita</label> 
                    <div class="form-group"><font size="3">
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_pns'] == "PNS"){
                       echo "
                       <input type='checkbox' id='c_pns' name='c_pns' value='PNS' checked disabled>
                       <label for=c_pns class=col-md-1 control-label>PNS</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_pns' name='c_pns' value='PNS' disabled>
                       <label for=c_pns class=col-md-1 control-label>PNS</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_guru'] == "Guru/Dosen"){
                       echo "
                       <input type='checkbox' id='c_guru' name='c_guru' value='Guru/Dosen' checked disabled>
                       <label for=c_guru class=col-md-1 control-label>Guru/Dosen</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_guru' name='c_guru' value='Guru/Dosen' disabled>
                       <label for=c_guru class=col-md-1 control-label>Guru/Dosen</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_politik'] == "Politikus"){
                       echo "
                       <input type='checkbox' id='c_politik' name='c_politik' value='Politikus' checked disabled>
                       <label for=c_politik class=col-md-1 control-label>Politikus</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_politik' name='c_politik' value='Politikus' disabled>
                       <label for=c_politik class=col-md-1 control-label>Politikus</label>";   
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_seni'] == "Seni/Artis/Sejenis"){
                       echo "
                       <input type='checkbox' id='c_seni' name='c_seni' value='Seni/Artis/Sejenis' checked disabled>
                       <label for=c_seni class=col-md-1 control-label>Seni/Artis/Sejenis</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_seni' name='c_seni' value='Seni/Artis/Sejenis' disabled>
                       <label for=c_seni class=col-md-1 control-label>Seni/Artis/Sejenis</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_tni'] == "TNI/Polri"){
                       echo "
                       <input type='checkbox' id='c_tni' name='c_tni' value='TNI/Polri' checked disabled>
                       <label for=c_tni class=col-md-1 control-label>TNI/Polri</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_tni' name='c_tni' value='TNI/Polri' disabled>
                       <label for=c_tni class=col-md-1 control-label>TNI/Polri</label>";    
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_dokter'] == "Dokter"){
                       echo "
                       <input type='checkbox' id='c_dokter' name='c_dokter' value='Dokter' checked disabled>
                       <label for=c_dokter class=col-md-1 control-label>Dokter</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_dokter' name='c_dokter' value='Dokter'>
                       <label for=c_dokter class=col-md-1 control-label>Dokter</label>";  
                      }
                    ?>
                    </div>
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_wira'] == "Wiraswasta"){
                       echo "
                       <input type='checkbox' id='c_wira' name='c_wira' value='Wiraswasta' checked disabled>
                       <label for=c_wira class=col-md-1 control-label>Wiraswasta</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_wira' name='c_wira' value='Wiraswasta' disabled>
                       <label for=c_wira class=col-md-1 control-label>Wiraswasta</label>";   
                      }
                    ?>
                    </div>    
                    <div class="checkbox col-md-2">
                    <?php
                      if($row['c_lain'] == "Lainnya"){
                       echo "
                       <input type='checkbox' id='c_lain' name='c_lain' value='Lainnya' checked disabled>
                       <label for=c_lain class=col-md-1 control-label>Lainnya</label>";
                      }else{
                       echo "
                       <input type='checkbox' id='c_lain' name='c_lain' value='Lainnya' disabled>
                       <label for=c_lain class=col-md-1 control-label>Lainnya</label>";   
                      }
                    ?>
                    </div></font>
                    </div>                    
                </div>
                
                <div class="section"><label>Kemampuan Santri</label><font size="3">
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                    <label class="col-md-3 control-label">B. Arab : <?php echo $row['b_arab']?></label>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-3 control-label">B. Inggris : <?php echo $row['b_inggris']?></label>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-3 control-label">Komputer : <?php echo $row['kom']?></label>
                    </div></font>
                </div
                
                <div class="section"><label>Ke Madrasah</label><font size="3">
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>  
                    <div class="form-group">
                    <label class="col-md-3 control-label">Biaya Study : <?php echo $row['by_study']?></label>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-3 control-label">Jarak : <?php echo $row['jarak']?></label>
                    <label class="col-md-1 control-label"></label>
                    <label class="col-md-3 control-label">Transportasi : <?php echo $row['trans']?></label>
                    </div></font>
                </div>
             <div> 

        </div> 
        
       <div role="tabpanel" class="tab-pane" id="profile">
                <div class="section"><label>Identitas Orang Tua / Wali Santri</label> 
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">No. Kartu Keluarga</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['no_keluarga']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3">Ayah:</font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nama </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nama_a']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">NIK </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nik_a']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Pendidikan Terakhir </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['pend_a']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Pekerjaan </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kerja_a']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3">Ibu:</font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nama </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nama_i']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">NIK </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['nik_i']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Pendidikan Terakhir </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['pend_i']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Pekerjaan </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kerja_i']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Alamat Orang Tua</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['alamat_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kecamatan </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kec_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kabupaten </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kab_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Provinsi </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['prov_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <div class="col-md-1 control-label" >
                            <span class="col-md-9" >
                            <font size="3"></font></span>
                        </div>
                        <label class="col-md-3 control-label">
                            <span class="col-md-9" >
                            <font size="3">Kode Pos </font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['kodep_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">No. Telpon Orang Tua</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['telp_o']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Penghasilan Orang Tua/bln</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['p_hasil']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nomor KKS/KPS</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['no_kks']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nomor KIP</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['no_kip']?></font>
                        </div>                   
                    </div>
                    <div class="form-group">
                        <label class="col-md-4 control-label">
                            <span class="col-md-9" >
                            <font size="3">Nomor PKH</font></span></label>
                        <div class="col-md-3 control-label" >
                            <font size="3">: <?php echo $row['no_pkh']?></font>
                        </div>                   
                    </div>
                     
                </div>
        </div>
    </div> 
    
    <div class="form-footer">
        <div class="form-group">
          <div class="col-md-9 col-md-offset-9">
            <label class="col-md-1 control-label"></label>
            <input type="submit" class="btn btn-primary" value='Kembali'>
           
          </div>
        </div>
        
    </div> 
   <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
    <div class="section"></div>
   </form>   
   </div>
  </div>
 </div>
</div>       
<?php }} ?>

<!-- Delete Santri -->
<?php
include 'dbo.php';
if($_GET['form-santri'] == 'delete'){ 
   $id=$_GET['id'];
    $query = "SELECT * 
              FROM dataortu c 
              JOIN datasiswa s USING (nisn)
              WHERE nisn='".$id."'";
    $sql = mysqli_query($connect, $query)
               or die("Error query ".mysql_error());
    if($row = mysqli_fetch_array($sql)){            
?> 
<div class="row">
  <div class="col-md-12">
   <div class="card card-mini">   
    <div role="tabpanel">
        <div class="card-header">
            <div class="card-title"><strong>Hapus Data Santri</strong></div>
          <ul class="card-action">
              
          </ul>
        </div>
        <form class='form form-horizontal' name='frsantri' method='POST' action="">
    <!-- Nav tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
                
                
                <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                <div class="section">
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                    <div class="form-group">
                        <label class="col-md-12 control-label">
                            <span class="col-md-9" >
                            <font size="3">Apakah anda yakin ingin menghapus Data Santri dengan Nama "<?php echo $row['nama']?>" dan NISN "<?php echo $row['nisn']?>"?</font></span></label>                   
                    </div>
                    
                </div> 
             <div> 
        </div> 
    </div> 
    </div>
    <div class="form-footer">
        <div class="form-group">
          <div class="col-md-4 col-md-offset-9">
            <label class="col-md-1 control-label"></label>
            <a href="_crud/santri/delete.php?id=<?php echo $row['nisn']?>" class="btn btn-danger btn-sm">
                <i class="fa fa-check" aria-hidden="true"></i> Iya
            </a>
            <a href="index.php?page=santri" class="btn btn-primary btn-sm">
                <i class="fa fa-times" aria-hidden="true"></i> Batal
            </a>
 
            <label class="col-md-1 control-label"></label>
          </div>
        </div>
    </div> 
    <div class="form-group">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
    <div class="section"></div>
  </div>
    </form>
</div>
</div>   
</div>
         
 <?php }}?>

<!-- Import Santri -->
<?php
include 'dbo.php';
if($_GET['form-santri'] == 'import'){           
?> 
<div class="row">
  <div class="col-md-12">
   <div class="card card-mini">   
    <div role="tabpanel">
        <div class="card-header">
            <div class="card-title"><strong>Import Data Santri</strong></div>
          <ul class="card-action">
              
          </ul>
        </div>
        <form class='form form-horizontal' name='frsantri' method='POST' action="_crud/santri/import.php" enctype="multipart/form-data">
    <!-- Nav tabs -->
    
    <!-- Tab panes -->
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="home">
                <div class="form-group ">
                        <label class="col-md-2 control-label"></label>                                            
                    </div>
                <div class="section">
                    <div class="form-group">
                        <label class="col-md-10 control-label">
                            <span class="col-md-12" >
                            <input type='file' name='file' id='file' class='form-control' required>
                            </span></label>
                        <div class="col-md-1 control-label" >
                            <input type='submit' name='import' value='import' class='btn btn-success'>
                        </div>
                        
                                    
                    </div>
                    
                </div> 
             <div> 
        </div> 
    </div> 
    </div>    
        </form>
  </div>
</div>
</div>   
</div>


         
 <?php }?>
