<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h4 class="page-title"><?= $title ?></span></h4>
		</div>
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="#" class="fw-normal text-primary"><?= $title ?></a></li>
				</ol>
			</div>
		</div>
	</div>

</div>



<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12">
			<div class="greay-box-1 analytics-info">
				<h3 class="box-title">Menu de reportes</h3>

				<div class="row">
					<div class="col-lg-12">

						<div class="row">
							<div class="col-lg-3">
								<div style="border-radius: 5px;" class="card shadow">
									<h5 class="card-header">Entregas</h5>
									<div class="card-body">
										<h5 class="card-title">Reporte de entregas de SUP</h5>
										<p class="card-text">Este reporte contiene tiempos entrega de insertos de SUP.</p>
										<a href="<?php echo base_url() ?>reports/deliveries" class="btn btn-primary">Ver Reporte</a>
									</div>
								</div>
							</div>

							<div class="col-lg-3">
								<div style="border-radius: 5px;" class="card shadow">
									<h5 class="card-header">Versiones o Revisiones</h5>
									<div class="card-body">
										<h5 class="card-title">Reporte de revision de SUP</h5>
										<p class="card-text">Este reporte contiene todas las revisiones por tooling list de SUP.</p>
										<a href="<?php echo base_url() ?>reports/revisions" class="btn btn-primary">Ver Reporte</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
