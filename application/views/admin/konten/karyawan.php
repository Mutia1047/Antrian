<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Karyawan</h1>
    <a href="#add" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-plus fa-sm text-white-50"></i> Tambah Karyawan</a>
  </div>
  <?php
  echo $this->session->flashdata('pesan');
  ?>
  <!-- Content Row -->
  <div class="row">

    <div class="col-xl-12 col-lg-7">
      <div class="card shadow mb-4">

        <div class="card-body">
          <table class="table table-bordered" style="text-align:center" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th width="3px">No.</th>
                <th>Nama Karyawan</th>
                <th>Telp</th>
                <th>Alamat</th>
                <th>Username</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              $no = 0;
              foreach ($hasil as $row) {
                $no++;
              ?>
                <tr style="text-align:center;">

                  <td><?php echo $no; ?></td>
                  <td><?php echo $row->nama; ?></td>
                  <td><?php echo $row->telp; ?></td>
                  <td><?php echo $row->alamat; ?></td>
                  <td><?php echo $row->username; ?></td>
                  <td>
                    <a href="#<?php echo $row->username; ?>" class="btn btn-success" data-toggle="modal"><i class="fas fa-pencil-alt"></i></a>&nbsp;
                    <a href="<?php echo site_url('page/del_karyawan/' . $row->username); ?>" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>
                  </td>
                </tr>
            </tbody>

            <div id="<?php echo $row->username; ?>" class="modal fade" role="dialog">
              <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">Edit Karyawan</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <div class="modal-body">
                    <form method="POST" action="<?php echo site_url('page/edit_karyawan/'); ?>" enctype="multipart/form-data">
                      <div class="col-md-12">
                        <label for="sel1"><strong>Username</label>
                        <input type="text" name="username" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="<?php echo $row->username; ?>" readonly>
                        <label for="sel1">Nama</label>
                        <input type="text" name="nama" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" value="<?php echo $row->nama; ?>">
                        <label for="sel1">Nomer Telp</label>
                        <input type="text" name="telp" class="form-control" pattern="[0-9]{0,50}" required="" maxlength="50" value="<?php echo $row->telp; ?>">
                        <label for="sel1">Alamat</label>
                        <textarea name="alamat" class="form-control"><?php echo $row->alamat; ?></textarea>
                      </div>
                      <div class="col-md-12">
                        <label for="sel1">Level</label>
                        <?php
                        if ($row->level == 'Admin') {
                          $selected = "selected";
                          $selected1 = "";
                        } else {
                          $selected = "";
                          $selected1 = "selected";
                        }
                        ?>
                        <select name="level" class="form-control" required="" onchange="cek()" id="lev">
                          <option value="">--Pilih Level--</option>
                          <option <?php echo $selected; ?>>Admin</option>
                          <option value="Penjaga" <?php echo $selected1; ?>>Penjaga Loket</option>
                        </select>
                        <label for="sel1" id="l">Loket</label>
                        <?php $el = $this->M_crud->get_id('loket', array('id_loket' => $row->id_loket))->row(); ?>
                        <select name="id_loket" class="form-control" id="id_loket">
                          <option value="<?php echo $el->id_loket; ?>"><?php echo $el->loket; ?></option>
                          <?php
                          $loketnot = $this->M_crud->get_id('loket', array('id_loket <>' => $row->id_loket));
                          foreach ($loketnot->result() as $lo) { ?>
                            <option value="<?php echo $lo->id_loket; ?>"><?php echo $lo->loket; ?></option>
                          <?php } ?>
                        </select>
                        <label for="sel1">Password</strong></label>
                        <input type="password" name="password" class="form-control">
                        <p>*Kosongkan bila tidak ingin mengganti password</p>
                        <label for="sel1"><strong>Retype Password</strong></label>
                        <input type="password" name="password" class="form-control">
                        <input type="hidden" name="password_lama" value="<?php echo $row->password; ?>">
                        <br><br>
                      </div>
                      <div class="col-md-12">
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <!--   <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
                  </div>
                </div>

              </div>
            </div>
          <?php } ?>
          </table>
        </div>
        <?php echo $halaman; ?>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->

<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Karyawan</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST" action="<?php echo site_url('page/add_karyawan/'); ?>" enctype="multipart/form-data">
          <div class="col-md-12">
            <label for="sel1"><strong>Username</label>
            <input type="text" name="username" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" placeholder="Masukan Username">
            <label for="sel1">Nama</label>
            <input type="text" name="nama" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" required="" maxlength="50" placeholder="Masukan Nama">
            <label for="sel1">Nomer Telp</label>
            <input type="text" name="telp" class="form-control" pattern="[0-9]{0,50}" required="" maxlength="50" placeholder="Masukan Nomer Telp">
            <label for="sel1">Alamat</label>
            <textarea name="alamat" class="form-control" placeholder="Masukan Nama"></textarea>
          </div>
          <div class="col-md-12">
            <label for="sel1">Level</label>
            <select name="level" class="form-control" required="" onchange="cek1()" id="lev1">
              <option value="">--Pilih Level--</option>
              <option>Admin</option>
              <option value="Penjaga">Penjaga Loket</option>
            </select>
            <label for="sel1" id="l1">Loket</label>
            <select name="id_loket" class="form-control" id="id_loket1">
              <option value="0">--Pilih Loket--</option>
              <?php
              foreach ($loket->result() as $lo) { ?>
                <option value="<?php echo $lo->id_loket; ?>"><?php echo $lo->loket; ?></option>
              <?php } ?>
            </select>
            <label for="sel1">Password</label>
            <input type="password" name="password" class="form-control" placeholder="Masukan Password" id="p" onkeyup="pass()">
            <label for="sel1">Retype Password</label></strong>
            <input type="password" name="re_password" class="form-control" placeholder="Ketik Ulang Password" id="up" onkeyup="pass();">
            <p id="pesan"></p>

            <br>
          </div>

          <button type="submit" class="btn btn-primary" id="simpan">Simpan</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
      </div>
      <div class="modal-footer">
        <!--   <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
      </div>
    </div>

  </div>
</div>

<script type="text/javascript">
  function pass() {
    var p = document.getElementById('p').value;
    var up = document.getElementById('up').value;
    var pesan = document.getElementById('pesan');
    var simpan = document.getElementById('simpan');
    if (p.length < 3) {
      pesan.innerHTML = "Password terlalu singkat";
      simpan.setAttribute('disiabled', '');
    } else if (p != up) {
      pesan.innerHTML = "Password tidak sama";
      simpan.setAttribute('disiabled', '');
    } else {
      pesan.innerHTML = "OK";
      simpan.removeAttribute('disiabled', '');
    }
  }

  $(function() {
    cek();
    cek1();
  })

  function cek() {
    lev = document.getElementById('lev').value;
    if (lev == 'Penjaga') {
      $("#id_loket").show();
      $("#l").show();
    } else {
      $("#id_loket").hide();
      $("#l").hide();
    }
  }

  function cek1() {
    lev = document.getElementById('lev1').value;
    if (lev == 'Penjaga') {
      $("#id_loket1").show();
      $("#l1").show();
    } else {
      $("#id_loket1").hide();
      $("#l1").hide();
    }
  }
</script>