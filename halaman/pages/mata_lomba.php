 
<!-- Modal edit barang -->
<div class="modal fade" id="registrasi_user" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header no-bd">
        <h5 class="modal-title">
          <span class="fw-mediumbold">
          Tambah</span> 
          <span class="fw-light">
            Nilai Mata Lomba
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
              <label>LKKBT:</label>
              <input id="L" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Pioneering:</label>
              <input id="P" class="form-control" type="text" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Semaphore Slide :</label>
              <input id="SS" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Semaphore Dance :</label>
              <input id="SD" class="form-control" type="text" >
            </div>
          </div>

              <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Puzzle Flag:</label>
              <input id="PF" class="form-control" type="text" >
            </div>
          </div>   

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Hasta Karya:</label>
              <input id="HK" class="form-control" type="text" >
            </div>
          </div>   

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Guest The Hero:</label>
              <input id="GTH" class="form-control" type="text" >
            </div>
          </div>

        </div>
      </form>
    </div>
    <div class="modal-footer no-bd">
      <button type="button"  class="btn btn-primary" onclick="simpan_MataLomba()">Simpan</button>
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
              <label>LKBBT :</label>
              <input id="La" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Pioneering :</label>
              <input id="Pa" class="form-control" type="text" >
            </div>
          </div>                  

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Semaphore Slide :</label>
              <input id="SSa" class="form-control" type="text" >
            </div>
          </div>                      

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Semaphore Dance :</label>
              <input id="SDa" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Puzzle Flag :</label>
              <input id="PFa" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Hasta Karya :</label>
              <input id="HK" class="form-control" type="text" >
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group form-group-default">
              <label>Guest The Hero :</label>
              <input id="GTH" class="form-control" type="text" >
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
      <h6 class="m-0 font-weight-bold text-black">Mata Lomba</h6>
      <hr>                    
      <a  class="btn btn-success btn-block"  data-toggle="modal" data-target="#registrasi_user"></i>+ Tambah Data</a>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>

                    <tr>
                      <th width="100">LKBBT</th>
                      <th width="100">Pioneering</th>
                      <th width="100">Semaphore Slide</th>
                      <th width="100">Semaphore Dance</th>
                      <th width="10">Puzzle Flag</th>                    
                      <th width="10">Hasta Karya</th>                    
                      <th width="10">Guest The Hero</th>                                       
                      <th width="10">Action</th>                    
                    </tr>
          
                      </thead>




                      <?php
                      include "../../koneksi/koneksi.php";
                      $sql = mysqli_query($koneksi, "SELECT * FROM Mata_Lomba");

                      while ($row = mysqli_fetch_array($sql)) {
                      # code...
                        ?>
                        <tr>
                          <td><?= $row['LKBBT'];?></td>
                          <td><?= $row['Pioneering'];?></td>
                          <td><?= $row['Semaphore_Slide'];?></td>                                                          
                          <td><?= $row['Semaphore_Dance'];?></td>                                                          
                          <td><?= $row['Puzzle_Flag'];?></td>
                          <td><?= $row['Hasta_Karya'];?></td>
                          <td><?= $row['Guest_The_Hero'];?></td>
                          <td>

                            <div class="form-button-action">

                              <button title="Edit Data" type="button" class="btn btn-primary btn-circle btn-sm" id="EditFile" data-toggle="modal" data-target="#edit_data" data-id="<?= $row['LKBBT'] ?>" data-nama="<?= $row['Pioneering'] ?>" data-user="<?= $row['Semaphore_Slide'] ?>" data-pass="<?= $row['Semaphore_Dance'] ?>" data-level="<?= $row['Puzzle_Flag'] ?>" data-HK="<?= $row['Hasta_Karya'] ?>" data-GTH="<?= $row['Guest_The_Hero'] ?>"><i class="fa fa-edit"></i></button>

                                <button title="Hapus" class="btn btn-danger btn-circle btn-sm hapus"  id="<?= $row['LKBBT'] ?>"  data-original-title="Remove"><i class="fas fa-trash"></i></i></button>

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

    

<script src="../halaman/js/mata_lomba.js"></script>