<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800">Tambah Data obat</h1> -->
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Form ubah data obat</h6>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="foto_lama" value="<?php echo $obat->foto ?>">
                        <?php if ($this->session->flashdata('info')) : ?>
                        <div class="alert alert-danger">
                            <?php echo $this->session->flashdata('info'); ?>
                        </div>
                        <?php endif; ?>
                        <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
                        <div class="form-group">
                            <label for="kode-obat">Kode Obat</label>
                            <input type="text" disabled name="kode_obat" value="<?php echo set_value('kode_obat', $obat->kode) ?>" id="kode-obat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="supplier">Supplier</label>
                            <?php echo form_dropdown('supplier', $supplier, set_value('supplier'), ['class' => 'form-control', 'id' => 'supllier']) ?>
                        </div>
                        <div class="form-group">
                            <label for="nama-obat">Nama Obat</label>
                            <input type="text" value="<?php echo set_value('nama', $obat->nama_obat) ?>" name="nama" id="nama-obat" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="produsen">Prodsen</label>
                            <input type="text" value="<?php echo set_value('produsen', $obat->produsen) ?>" name="produsen" id="produsen" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga</label>
                            <input type="number"  value="<?php echo set_value('harga', $obat->harga) ?>" name="harga" id="harga" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="stok">Jumlah stok</label>
                            <input type="number"  value="<?php echo set_value('stok', $obat->stok) ?>" name="stok" id="stok" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="foto">Foto obat</label>
                            <input type="file" name="foto" id="foto" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-success">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
        <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Foto</h6>
                </div>
                <div class="card-body">
                <img src="<?php echo base_url('assets/img/') . $obat->foto; ?>" width="100%" class="img-thumbnail">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
