<div class="page-breadcrumb bg-warning text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Select Configuration</h4>
		</div>
	</div>
</div>




<div id="pendingdiv" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<div class="col-lg-12">
			<div class="white-box analytics-info">
				<h3 class="box-title">App Configuration</h3>


				<?php if($this->session->flashdata('created')): ?>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong class="uppercase"><bdi>Success!</bdi></strong>
						Your data has been saved, thank you.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

					</div>

				<?php endif; ?>


				<div class="row mt-5">



						<div class="col-lg-4">
							<div class="col-lg-12 card shadow border">
								<div class="card-body">
									<h3 class="card-title text-center">Downtimes</h3>
									<p class="mt-5 mb-5">Click on the button to configure downtimes.</p>
									<a class="btn btn-outline-warning text-center" href="<?php echo base_url() ?>config/downtimes">Configure Downtimes</a>
								</div>
							</div>
						</div>



						<div class="col-lg-4">
							<div class="col-lg-12 card shadow border">
								<div class="card-body">
									<h3 class="card-title text-center">Machines</h3>
									<p class="mt-5 mb-5">Click on the button to configure machines.</p>
									<a class="btn btn-outline-warning text-center" href="<?php echo base_url() ?>config/machines">Configure Machines</a>
								</div>
							</div>
						</div>


				</div>


			</div>
		</div>



	</div>
</div>





