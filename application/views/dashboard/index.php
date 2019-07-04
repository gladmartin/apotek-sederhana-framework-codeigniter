<!-- Begin Page Content -->
<div class="container-fluid">

	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
	<div class="row">
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-primary shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Jumlah obat  
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($count['obat']); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-dark shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Jumlah admin  
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($count['admin']); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-3 col-md-6 mb-4">
			<div class="card border-left-info shadow h-100 py-2">
				<div class="card-body">
					<div class="row no-gutters align-items-center">
						<div class="col mr-2">
							<div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah supplier  
							</div>
							<div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo($count['supplier']); ?></div>
						</div>
						<div class="col-auto">
							<i class="fas fa-calendar fa-2x text-gray-300"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
