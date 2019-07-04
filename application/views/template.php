<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Apotek Sederhana | <?php echo $title; ?></title>

	<!-- Custom fonts for this template-->
	<link href="<?php echo base_url('assets/admin/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet"
		type="text/css">
	<link
		href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
		rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="<?php echo base_url('assets/admin/') ?>css/sb-admin-2.min.css" rel="stylesheet">
	<link href="<?php echo base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('assets/icon.png') ?>" type="image/x-icon">
</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<!-- Sidebar -->
		<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

			<!-- Sidebar - Brand -->
			<a class="sidebar-brand d-flex align-items-center justify-content-center"
				href="<?php echo site_url('dashboard'); ?>">
				<div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    AS
				</div>
				<div class="sidebar-brand-text mx-3">Administrator</div>
			</a>

			<!-- Divider -->
			<hr class="sidebar-divider my-0">

			<!-- Nav Item - Dashboard -->
			<li class="nav-item <?php echo active_link('dashboard') ?>">
				<a class="nav-link" href="<?php echo site_url('dashboard'); ?>">
					<i class="fas fa-fw fa-tachometer-alt"></i>
					<span>Dashboard</span></a>
			</li>

			<!-- Nav Item - Pages Collapse Menu -->
			<li class="nav-item <?php echo active_link(['obat', 'obat/tambah']) ?>">
				<a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
					aria-controls="collapseTwo">
					<i class="fas fa-fw fa-medkit"></i>
					<span>Obat</span>
				</a>
				<div id="collapseTwo" class="collapse <?php echo active_link(['obat', 'obat/tambah'], 'show') ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item <?php echo active_link('obat') ?>" href="<?php echo site_url('obat'); ?>">Data obat</a>
						<a class="collapse-item <?php echo active_link('obat/tambah') ?>" href="<?php echo site_url('obat/tambah'); ?>">Tambah obat</a>
					</div>
				</div>
			</li>
			<!-- Nav Item - Charts -->
			<li class="nav-item <?php echo active_link('supplier') ?>">
				<a class="nav-link" href="<?php echo site_url('supplier'); ?>">
					<i class="fas fa-fw fa-users"></i>
					<span>Data Supplier</span></a>
			</li>

			<!-- Nav Item - Tables -->
			<li class="nav-item <?php echo active_link('admin') ?>">
				<a class="nav-link" href="<?php echo site_url('admin'); ?>">
					<i class="fas fa-fw fa-user"></i>
					<span>Data Admin</span></a>
			</li>

			<li class="nav-item <?php echo active_link(['transaksi', 'transaksi/tambah']) ?>">
				<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true"
					aria-controls="collapseThree">
					<i class="fas fa-fw fa-cog"></i>
					<span>Transaksi</span>
				</a>
				<div id="collapseThree" class="collapse <?php echo active_link(['transaksi', 'transaksi/tambah'], 'show') ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
					<div class="bg-white py-2 collapse-inner rounded">
						<a class="collapse-item <?php echo active_link('transaksi') ?>" href="<?php echo site_url('transaksi'); ?>">Data transaksi</a>
						<a class="collapse-item <?php echo active_link('transaksi/tambah') ?>" href="<?php echo site_url('transaksi/tambah'); ?>">Tambah transaksi</a>
					</div>
				</div>
			</li>

			<!-- Divider -->
			<hr class="sidebar-divider d-none d-md-block">

			<!-- Sidebar Toggler (Sidebar) -->
			<div class="text-center d-none d-md-inline">
				<button class="rounded-circle border-0" id="sidebarToggle"></button>
			</div>

		</ul>
		<!-- End of Sidebar -->

		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

				<!-- Topbar -->
				<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

					<!-- Sidebar Toggle (Topbar) -->
					<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
						<i class="fa fa-bars"></i>
					</button>

					<!-- Topbar Navbar -->
					<ul class="navbar-nav ml-auto">

						<div class="topbar-divider d-none d-sm-block"></div>

						<!-- Nav Item - User Information -->
						<li class="nav-item dropdown no-arrow">
							<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
								aria-haspopup="true" aria-expanded="false">
								<span
									class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('nama') ?></span>
								<!-- <img class="img-profile rounded-circle" src="<?php echo base_url('assets/img/profil.jpg'); ?>"> -->
							</a>
							<!-- Dropdown - User Information -->
							<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
								<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
									<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
									Logout
								</a>
							</div>
						</li>

					</ul>

				</nav>
				<!-- End of Topbar -->

				<?php $this->load->view($main_view); ?>

			</div>
			<!-- End of Main Content -->

			<!-- Footer -->
			<footer class="sticky-footer bg-white">
				<div class="container my-auto">
					<div class="copyright text-center my-auto">
						<span>Copyright &copy; Apotek Sederhana 2019</span>
					</div>
				</div>
			</footer>
			<!-- End of Footer -->

		</div>
		<!-- End of Content Wrapper -->

	</div>
	<!-- End of Page Wrapper -->

	<!-- Scroll to Top Button-->
	<a class="scroll-to-top rounded" href="#page-top">
		<i class="fas fa-angle-up"></i>
	</a>

	<!-- Logout Modal-->
	<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Yakin ingin keluar?</h5>
					<button class="close" type="button" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>
				<div class="modal-body">Pilih tombol "logout", jika anda ingin menyelesaikan sesi ini.</div>
				<div class="modal-footer">
					<button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
					<a class="btn btn-primary" href="<?php echo site_url('auth/logout') ?>">Logout</a>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap core JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/admin/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- Core plugin JavaScript-->
	<script src="<?php echo base_url('assets/admin/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>

	<!-- Custom scripts for all pages-->
	<script src="<?php echo base_url('assets/admin/') ?>js/sb-admin-2.min.js"></script>
	<script>
        let arrayObat = [];
        $('.form-obat table .btn-remove-item').on('click', function() {
            if (arrayObat.length == 0) return alert('Belum ada item obat dipilih!');
            arrayObat = [];
            $('.form-obat table tbody').html('');
            $('.form-obat #data_obat').val('');
            countGrandTotal();
        })
		$('.btn-ubah-sup').on('click', function (e) {
			e.preventDefault();
			let id = $(this).data('id');
			$('#ubahModal').modal('show');
			$.ajax({
				url: `supplier/getAjax/${id}`,
				method: 'POST',
				dataType: 'JSON',
				success: function (data) {
                    const {id, nama, alamat, kota, telp} = data;
                    $('#ubahModal #id').val(id);
                    $('#ubahModal #nama').val(nama);
                    $('#ubahModal #alamat').val(alamat);
                    $('#ubahModal #kota').val(kota);
                    $('#ubahModal #telp').val(telp);
				}
			})
		})
		$('.btn-ubah-adm').on('click', function (e) {
			e.preventDefault();
			let id = $(this).data('id');
			$('#ubahModal').modal('show');
			$.getJSON(`admin/getAjax/${id}`, function(data, status, xhr) {
                const {username, nama, id} = data;
                $('#ubahModal #id').val(id);
                $('#ubahModal #username').val(username);
                $('#ubahModal #nama-admin').val(nama);
            })
		})
        $('.form-obat #obat').on('change', function(e) {
            let kode = $(this).val();
            if (arrayObat.filter(item => item.kode == kode).length > 0) return alert('Data Obat Sudah Dipilih');
            $.getJSON(`../obat/getAjax/${kode}`, function(data, status, xhr) {
                let html = `
                <tr id="${data.kode}">
                    <td><button data-kode="${data.kode}" type="button" class="btn-remove-obat btn btn-circle btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                    <td>${data.kode}</td>
                    <td>${data.nama_obat}</td>
                    <td><img src="${data.foto}" width="50"/></td>
                    <td>Rp.${data.harga}</td>
                    <td width="100"><input data-harga="${data.harga}" data-kode="${data.kode}" type="number" class="form-control jumlah" value="1" min="1" /></td>
                    <td>Rp.${data.harga}</td>
                </tr>
                `;
                arrayObat.push({
                    kode: data.kode,
                    jumlah: 1,
                    total: data.harga
                });
                let grand_total = 0;
                arrayObat.forEach(val => grand_total = grand_total + parseInt(val.total));
                $('.form-obat table tbody').append(html)
                $('.form-obat table tfoot').show();
                $('.form-obat .grand-total').html(`<h4>Rp.${grand_total}</h4>`)
                $('.form-obat #data_obat').val(JSON.stringify(arrayObat));
            })
        })
        $('.form-obat table').on('click', '.btn-remove-obat', function() {
            $(this).parent().parent().remove();
            let kode = $(this).data('kode');
            arrayObat = arrayObat.filter(e => e.kode != kode);
            $('.form-obat #data_obat').val(JSON.stringify(arrayObat));
            countGrandTotal();
        })
        $('.form-obat table').on('change', '.jumlah', function() {
            let kode = $(this).data('kode');
            let jumlah = $(this).val();
            let harga = $(this).data('harga');
            let total = harga * jumlah;
            $(`.form-obat #${kode} td:last`).html(`Rp.${total}`)
            objIndex = arrayObat.findIndex((obj => obj.kode == kode));
            arrayObat[objIndex].jumlah = jumlah;
            arrayObat[objIndex].total = total;
            countGrandTotal();
            $('.form-obat #data_obat').val(JSON.stringify(arrayObat));
        })
        function countGrandTotal() {
            let grand_total = 0;
            arrayObat.forEach(val => grand_total = grand_total + parseInt(val.total));
            if (grand_total <= 0) {
                $('.form-obat table tfoot').hide();
            }
            $('.form-obat .grand-total').html(`<h4>Rp.${grand_total}</h4>`)
        }
    </script>
    <script src="<?php echo base_url('assets/admin/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url('assets/admin/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</body>
</html>
