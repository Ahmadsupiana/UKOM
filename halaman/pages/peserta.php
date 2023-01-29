 
<!-- Modal edit barang -->
<div class="modal fade" id="registrasi_user" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h5 class="modal-title">
          <span class="fw-mediumbold">
          Tambah</span> 
          <span class="fw-light">
            Data Peserta
          </span>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>

         <div class="row">
          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>ID Peserta:</label>
              <input id="id_pengguna" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Sekolah :</label>
              <input id="pengguna" class="form-control" type="text" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Gugus :</label>
              <input id="username" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Kordinator :</label>
              <input id="password" class="form-control" type="text" >
            </div>
          </div>

              <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Kontak Person :</label>
              <input id="level" class="form-control" type="text" >
            </div>
          </div>

        </div>
      </form>
    </div>
    <div class="modal-footer no-bd">
      <button type="button"  class="btn btn-primary" onclick="simpan_registrasi()">Simpan</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
    </div>
  </div>
</div>
</div>
 
<!-- Modal edit barang -->
<div class="modal fade" id="edit_data" tabindex="-1" role="dialog" aria-hidden="true">
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
              <label>ID Peserta :</label>
              <input id="aid_pengguna" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Sekolah :</label>
              <input id="apengguna" class="form-control" type="text" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Gugus :</label>
              <input id="ausername" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Nama Kordinator :</label>
              <input id="apassword" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Kontak Person :</label>
              <input id="alevel" class="form-control" type="text" >
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
</div>


<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-black">Data Peserta</h6>
      <hr>                    
      <a  class="btn btn-success btn-block"  data-toggle="modal" data-target="#registrasi_user"></i>+ Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>

                    <tr>
                      <th width="100">ID Peserta</th>
                      <th width="100">Nama Sekolah</th>
                      <th width="100">Nama Gugus</th>
                      <th width="100">Nama Kordinator</th>
                      <th width="10">Kontak Person</th>                    
                      <th width="10">Action</th>                    
                    </tr>
          
                      </thead>




                      <?php
                      include "../../koneksi/koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM peserta");

                      while ($row = mysqli_fetch_array($sql)) {
                      # code...
                        ?>
                        <tr>
                          <td><?= $row['ID_Peserta'];?></td>
                          <td><?= $row['Nama_Sekolah'];?></td>
                          <td><?= $row['Nama_Gugus'];?></td>                                                          
                          <td><?= $row['Nama_Kordinator'];?></td>                                                          
                          <td><?= $row['Kontak_Person'];?></td>
                          <td>

                            <div class="form-button-action">

                              <button title="Edit Data" type="button" class="btn btn-primary btn-circle btn-sm" id="EditFile" data-toggle="modal" data-target="#edit_data" data-id="<?= $row['ID_Peserta'] ?>" data-nama="<?= $row['Nama_Sekolah'] ?>" data-user="<?= $row['Nama_Gugus'] ?>" data-pass="<?= $row['Nama_Kordinator'] ?>" data-level="<?= $row['Kontak_Person'] ?>"><i class="fa fa-edit"></i></button>

                                <button title="Hapus" class="btn btn-danger btn-circle btn-sm hapus"  id="<?= $row['ID_Peserta'] ?>"  data-original-title="Remove"><i class="fas fa-trash"></i></i></button>

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

    

<script src="../halaman/js/peserta.js"></script>