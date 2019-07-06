<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Tambah transaksi</h1>
    <div class="col-lg-5">
        <div class="card shadow mb-4">
            <div class="card-body">
                <table class="table table-borderless">
                    <tr>
                        <th>Admin</th>
                        <td> : <?php echo($this->session->userdata('nama')); ?></td>
                    </tr>
                    <tr>
                        <th>Tanggal penjualan</th>
                        <td> : <?php echo date('Y-m-d h:i:s'); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card shadow mb-4" id="card-transaksi">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Form transaksi</h6>
            </div>
            <div class="card-body">
                <div class="error-form"></div>
                <form action="" method="post" class="form-obat">
                    <input type="hidden" name="data_obat" id="data_obat">
                    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                    <div class="form-group">
                        <label for="nama-pembeli">Nama Pembeli</label>
                        <input type="text" value="<?php echo set_value('nama_pembeli') ?>" required name="nama_pembeli" id="nama-pembeli" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <div class="input-group">
                            <select id="obat" class="form-control">
                                <option disabled selected>Pilih obat</option>
                                <?php foreach($obat->result() as $ob) : ?>
                                <option value="<?php echo $ob->kode; ?>"><?php echo $ob->nama_obat; ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="input-group-append">
                                <button class="btn btn-primary add-item-obat" type="button" id="button-addon1">Tambah</button>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table">
                        <thead class="thead-success">
                            <tr class="bg-success text-white">
                                <th scope="col" width="50">
                                    <button title="hapus semua item" class="btn btn-sm btn-circle btn-danger btn-remove-item" type="button"><i class="fa fa-trash"></i></button>
                                </th>
                                <th scope="col">Kode Obat</th>
                                <th scope="col">Obat</th>
                                <th scope="col">Foto</th>
                                <th scope="col">Harga @</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Total harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="7" class="item-kosong small" align="center">Belum ada item obat yang ditambahkan.</td>
                            </tr>
                        </tbody>
                        <tfoot style="display:none">
                            <tr class="bg-light">
                                <th colspan="6" class="text-center">Grand Total</th>
                                <th class="grand-total"></th>
                            </tr>
                        </tfoot>
                    </table>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
