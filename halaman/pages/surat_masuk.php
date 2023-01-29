 
<!-- Modal edit barang -->
<div class="modal fade" id="input_suratmasuk" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h5 class="modal-title">
          <span class="fw-mediumbold">
          Tambah</span> 
          <span class="fw-light">
            Data Surat Masuk
          </span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <form action="pages/uploadsurat.php" method="POST" enctype="multipart/form-data">
    <table width="600" border="0">
      <tr>
        <td width="100">No</td>
        <td><input type="text" name="nosurat" id="id" required></td>
      </tr>

      <tr>
        <td width="100">jenis surat</td>
        <td><input type="text" name="jenissurat" id="jensu" required></td> 

        <tr>
          <td width="100">Nomor Surat</td>
          <td><input type="text" name="diterima" id="nosu" required></td>
        </tr>

        <tr>
          <td width="100">Tanggal Diterima</td>
          <td><input type="date" name="tujuan" id="tadite"  required></td>
        </tr>

        <tr>
          <td width="100">Tujuan</td>
          <td><input type="text" name="isi" id="tujuan" required></td>
        </tr>

        <tr>
          <td width="100">Isi Surat</td>
          <td><input type="text" name="keterangan" id="issu" required></td> 

         </tr>

          <tr>
            <td width="100">File</td>
            <td><input type="file" name="file" id="nama_file" required></td>
          </tr>
          
          <tr>
            <td width="100"></td>
            <td><input type="submit" name="simpan" id="simpan" value="Upload File"></td>
          </tr>
        </table>
      </form>
        <!-- <form action="uploadsurat.php">

         <div class="row">
          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nomor Surat :</label>
              <input id="nosurat" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Jenis Surat :</label>
              <select id="jenissurat" class="form-control" type="text">
                <option disabled selected ></option>
                <option>SURAT PRIBADI</option>
                <option>SURAT DINAS</option>
                <option>SURAT NIAGA</option>
              </select> 
            </div>
          </div> 

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Tanggal Diterima :</label>
              <input id="diterima" class="form-control" type="date" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Tujuan :</label>
              <input id="tujuan" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Isi Surat :</label>
              <input id="isi" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Keterangan :</label>
              <input id="keterangan" class="form-control" type="text" >
            </div>
          </div>

           <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>File :</label>
              <input id="file" type="file" required>
            </div>
          </div>

        </div>
      </form> -->
    </div>
    <div class="modal-footer no-bd">
      <button type="button"  class="btn btn-primary" onclick="simpan_data()">Simpan</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
    </div>
  </div>
</div>
</div>
 
<!-- Modal edit barang -->
<!-- <div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h5 class="modal-title">
          <span class="fw-mediumbold">
          Edit</span> 
          <span class="fw-light">
            Data
          </span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal_data">
        <form>

         <div class="row">
          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>ID :</label>
              <input id="aid_pengguna" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Pengguna :</label>
              <input id="apengguna" class="form-control" type="text" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Username :</label>
              <input id="ausername" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Password :</label>
              <input id="apassword" class="form-control" type="text" >
            </div>
          </div>
          

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Level :</label>
              <select id="alevel" class="form-control" type="text">
                <option>--</option>
                <option>petugas TU</option>
                <option>kepala TU</option>
                <option>pimpinan</option>
              </select> 
            </div>
          </div> 

        </div>
      </form>
    </div>
    <div class="modal-footer no-bd">
      <button type="button"  class="btn btn-primary" onclick="simpan_edit()">Edit</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
    </div>
  </div>
</div>
</div> -->


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-black">Data Surat Masuk</h6>
      <hr>                    
      <a  class="btn btn-success btn-block"  data-toggle="modal" data-target="#input_suratmasuk"></i>+ Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>

                    <tr>
                      <th width="100">Nomor Surat</th>
                      <th width="100">Jenis Surat</th>
                      <th width="100">Tanggal Diterima</th>
                      <th width="100">Tujuan</th>
                      <th width="10">Isi Surat</th>                                   
                      <th width="10">Keterangan</th>                    
                      <th width="10">File</th>                    
                      <th width="10">Action</th>                    
                    </tr>
          
                      </thead>




                      <?php
                      include "../../koneksi/koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM surat_masuk");

                      while ($row = mysqli_fetch_array($sql)) {
                      # code...
                        ?>
                        <tr>
                          <td><?= $row['nomor_surat'];?></td>
                          <td><?= $row['jenis_surat'];?></td>
                          <td><?= $row['tanggal_diterima'];?></td>                                                          
                          <td><?= $row['tujuan'];?></td>                                                          
                          <td><?= $row['isi_surat'];?></td>
                          <td><?= $row['keterangan'];?></td>
                          <td><?= $row['file'];?></td>
                         
                          <td>

                            <div class="form-button-action">

                              <button title="Edit Data" type="button" class="btn btn-primary btn-circle btn-sm" id="EditFile" data-toggle="modal" data-target="#edit_data" data-id="<?= $row['id_pengguna'] ?>" data-nama="<?= $row['nama_pengguna'] ?>" data-user="<?= $row['username'] ?>" data-pass="<?= $row['password'] ?>" data-lev="<?= $row['level'] ?>"><i class="fa fa-edit"></i></button>

                                <button title="Hapus" class="btn btn-danger btn-circle btn-sm hapus"  id="<?= $row['id_pengguna'] ?>"  data-original-title="Remove"><i class="fas fa-trash"></i></i></button>

                                </div>                                                        

                              </tr>
                              <?php

                              $no ++;

                            }
                            ?>

                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>

                </div>
                <!-- /.container-fluid -->

    

<script src="../halaman/js/suratmasuk.js"></script>