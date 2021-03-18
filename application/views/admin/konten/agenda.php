
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Agenda</h1>
                        <a href="#add" data-toggle="modal" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-plus fa-sm text-white-50"></i> Tambah Agenda</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">

                                <div class="card-body">
                                        <table class="table table-bordered" style="text-align:center" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th width="3px">No</th>
                                                    <th>Nama Agenda</th>
                                                    <th width="130px">Gambar</th>
                                                    <th width="110px">Aksi</th>
                                                </tr>
	
                                            </thead>
                                            <tbody>          
	
                                                <tr>
                                                    <td>1</td>
                                                    <td>Pembagian Dana Desa Bagian 1</td>
                                                    <td></td>
                                                    <td><a href="#id_agenda" data-toggle="modal" class="btn btn-success btn-sm"><i class="fas fa-pencil-alt"></i></a> <a href="" data-toggle="modal" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></a></td>
                                                </tr>
                                            </tbody>

                                            <!-- Modal -->
                                            <div id="id_agenda" class="modal fade" role="dialog">
                                                <div class="modal-dialog">

                                                    <!-- Modal content-->
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Tambah Agenda</h4>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="" enctype="multipart/form-data">
                                                        <div class="col-md-12">
                                                                <label for="sel1"><strong>Agenda</label>
                                                                <input type="hidden" name="id_agenda" value="">
                                                                <textarea name="agenda" class="form-control" required="" placeholder="Masukan Nama Agenda"></textarea>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <label for="sel1">Gambar</label>
                                                            <input type="file" name="media" class="form-control">
                                                            <input type="hidden" name="media_lama" value="">
                                                                <br>
                                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                                            <button type="reset" class="btn btn-danger">Reset</button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                                    </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </table>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

<!-- Modal -->
<div id="add" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Agenda</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
        <form method="POST" action="" enctype="multipart/form-data">
          <div class="col-md-12">
	            <label for="sel1"><strong>Agenda</label>
	              <textarea class="form-control" name="agenda" required="" placeholder="Masukan Nama Agenda"></textarea>
          </div>
          <div class="col-md-12">
             <label for="sel1">Gambar</label>
              <input type="file" name="media" class="form-control" readonly="">
            	<br>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <button type="reset" class="btn btn-danger">Reset</button>
           </div>
        </form>
      </div>
      <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

