<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Instansi</h1>

    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">

                <div class="card-body">
                    <table class="table table-bordered" style="text-align:center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama Instansi</th>
                                <th>Telp.</th>
                                <th>Alamat</th>
                                <th>Logo</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            foreach ($hasil as $row) {

                            ?>
                                <tr style="text-align:center;">

                                    <td><?php echo $row->instansi; ?></td>
                                    <td><?php echo $row->telp; ?></td>
                                    <td><?php echo $row->alamat; ?></td>
                                    <td><img src="<?php echo base_url('media/' . $row->logo); ?>" class="img"></img>
                                    </td>
                                    <td>
                                        <a href="#<?php echo $row->id_instansi; ?>" data-toggle="modal" class="btn btn-success"><i class="fas fa-pencil-alt"></i></a>
                                    </td>
                                </tr>
                        </tbody>
                        <div id="<?php echo $row->id_instansi; ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Edit Karyawan</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="POST" action="<?php echo site_url('page/edit_instansi/' . $row->id_instansi); ?>" enctype="multipart/form-data">
                                            <div class="col-md-6">
                                                <label for="sel1">Nama Instansi</label>
                                                <input type="text" name="instansi" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="<?php echo $row->instansi; ?>" required="" maxlength="50">
                                                <label for="sel1">Alamat</label>
                                                <textarea name="alamat" class="form-control"><?php echo $row->alamat; ?></textarea>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sel1">Nomer Telp</label>
                                                <input type="text" name="telp" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="<?php echo $row->telp; ?>" required="" maxlength="50">
                                                <label for="sel1">Logo</label>
                                                <input type="file" name="logo" class="form-control">
                                                <input type="hidden" name="logo_lama" value="<?php echo $row->logo; ?>">
                                                <br>
                                            </div>
                                            <div class="col-md-12">
                                                <center>
                                                    <br>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <button type="reset" class="btn btn-danger">Reset</button>
                                                </center>
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

            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->