<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">

        <div class="col-xl-12 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Laporan Pengunjung</h6>
                </div>
                <div class="card-body">
                    <table class="table table-bordered" style="text-align:center" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th width="3px">No.</th>
                                <th>Waktu</th>
                                <th>Jumlah Antrian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $bulan = array(
                                "01" => "Januari", "02" => "Februari", "03" => "Maret",
                                "04" => "April", "05" => "Mei", "06" => "Juni",
                                "07" => "Juli", "08" => "Agustus", "09" => "September",
                                "10" => "Oktober", "11" => "November", "12" => "Desember"
                            );
                            $no = 0;
                            foreach ($hasil as $row) {
                                $no++;
                                $b = $bulan[substr($row->tgl, 2, 2)];
                                $waktu = substr($row->tgl, 0, 2) . " " . $b . " " . substr($row->tgl, -4);
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $waktu; ?></td>
                                    <td style="text-align: center;">
                                        <?php echo $this->M_crud->get_id('transaksi', array('tgl' => $row->tgl))->num_rows(); ?>

                                    </td>
                                    <!-- <td><a href="<?php echo site_url('page/'); ?>" class="btn btn-info <?php echo $a; ?>">Hapus</a></td> -->
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <?php echo $halaman; ?>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

<script type="text/javascript" src="<?php echo base_url('assets/js/Chart.min.js'); ?>"></script>
<script type="text/javascript">
    // Bar chart
    var ctx = document.getElementById("mybarChart");
    var mybarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July", "Agustus", "September", "Oktober", "November", "Desember"],
            datasets: [{
                label: 'Pengantri',
                backgroundColor: "#26B99A",
                data: [51, 30, 40, 28, 92, 50, 250]
                // }, {
                //   label: '# of Votes',
                //   backgroundColor: "#03586A",
                //   data: [41, 56, 25, 48, 72, 34, 12]
            }]
        },

        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
</script>