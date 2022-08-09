<div class="page-breadcrumb bg-danger text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Select Machine</h4>
		</div>
		<!--
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="#" class="fw-normal">Status de pedidos.</a></li>
				</ol>
				<a href="<?php echo base_url() ?>request_mold" target=""
				   class="btn btn-danger  d-none d-md-block pull-right ms-3 hidden-xs hidden-sm waves-effect waves-light text-white">
					Pedir Insertos
				</a>
			</div>
		</div>
		-->
	</div>
	<!-- /.col-lg-12 -->
</div>




<div id="pendingdiv" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">
				<h3 class="box-title">CNC Downtime Registry</h3>


				<?php if($this->session->flashdata('created')): ?>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong class="uppercase"><bdi>Success!</bdi></strong>
						Your data has been saved, thank you.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

					</div>

				<?php endif; ?>


				<div class="row mt-5">

					<?php
					foreach ($machines as $machine):
					?>

						<div class="col-lg-4">
							<div class="col-lg-12 card shadow border">
								<div class="card-body">
									<h3 class="card-title text-center"><?php echo $machine['machine_name'] ?></h3>
									<p class="mt-5 mb-5">Click on the button to register downtime for this machine.</p>
									<a class="btn btn-outline-danger text-center" href="<?php echo base_url() ?>downtime_form/<?php echo $machine['machine_name'] ?>">Register Downtime</a>
								</div>
							</div>
						</div>

					<?php endforeach; ?>

				</div>


			</div>
		</div>



	</div>
</div>





