<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h4 class="page-title">Recepcion de Requisiciones</h4>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6  col-xs-12">
			<div class="d-md-flex">
				<ol class="breadcrumb ms-auto">
					<li><a href="<?php echo  base_url() ?>toolcrib/byplant/Planta1" class="btn btn-primary text-white">Planta 1</a></li>
				</ol>
				<ol class="breadcrumb ms-auto">
					<li><a href="<?php echo  base_url() ?>toolcrib/byplant/Planta2" class="btn btn-primary text-white">Planta 2</a></li>
				</ol>
				<ol class="breadcrumb ms-auto">
					<li><a href="<?php echo  base_url() ?>toolcrib/byplant/Planta3" class="btn btn-primary text-white">Planta 3</a></li>
				</ol>
			</div>
		</div>
	</div>
	<!-- /.col-lg-12 -->
</div>




<div class="container-fluid">
	<!-- ============================================================== -->
	<!-- Contenido -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">
		<div class="col-lg-12 col-md-12">


			<div class="gray-box analytics-info">

				<h3 class="box-title">RECEPCION TOOLING LIST PLUS E INSERTOS</h3>

				<div class="row">
						<div class="col-lg-12">
							<?php echo validation_errors(); ?>

							<div id="pendingdiv" class="row">

								<?php foreach ($requests as $request):  ?>

									<?php
									if($request['status']==0)
									{
										$status_text = "En espera";
										$status_color = "bg-danger";
										$button_text = "Atender";
										$link = "toolcrib/respond/{$request['request_id']}";
									}
									elseif($request['status']==1)
									{
										$status_text = "Armado";
										$status_color = "bg-warning";
										$button_text = "Entregar";
										$link = "toolcrib/deliver/{$request['request_id']}";
									}
									elseif($request['status']==2)
									{
										$status_text = "Entregado";
										$status_color = "bg-success";
										$button_text = "Done";
										$link = "#";
									}
									?>

								<div class=" col-lg-3">

									<div style="border-radius: 5%;" class="card border shadow ">
										<div class="card-header text-white <?php echo $status_color ?>">
											<?php echo $status_text; ?>
										</div>
										<div class="card-body">
											<h5 class="card-title"><?php echo $request['boy_sup'] ?> -REV. <?php echo $request['revision'] ?></h5>
											<p class="card-text font-bold"><?php echo $request['location']; ?></p>
											<p class="card-text"><?php echo $request['partno'] ?><br><?php echo $request['partno_descrip'] ?><br><?php echo $request['maquina'] ?></p>
											<div class="text-center">
												<a href="<?php echo base_url() ?><?php echo $link ?>" class="btn btn-primary "><?php echo $button_text; ?></a>
											</div>
										</div>
									</div>
								</div>

								<?php endforeach; ?>
							</div>
						</div>
					</div>
				</div> <!--end row-->
			</div>
		</div>
	</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type='text/javascript'>
	// baseURL variable
	var baseURL= "<?php echo base_url();?>";

	//Asistencia
	$(document).ready(function() {
		// Plant change
		$('#plant_id').change(function () {

			console.log("Cambio");

			var plant_id = $(this).val();

			// Ajax request
			$.ajax({
				url: '<?=base_url()?>index.php/Forms/get_sites',
				method: 'post',
				data: {plant_id: plant_id},
				dataType: 'json',
				success: function (response) {

					$('#linea_id').find('option').remove();
					// fill select
					$.each(response, function (index, data) {
						$('#linea_id').append('<option value="' + data['linea_id'] + '">' + data['linea_nombre'] + '</option>');
					});
				}
			});
		});
	});//end document ready.
</script>

<script>
	(function reloadfun() {
		$.ajax({
			url: '<?php echo base_url() ?>toolcrib/pending',
			success: function(data) {
				$("#pendingdiv").load(location.href+" #pendingdiv>*","");//logged_in
			},
			complete: function() {
				// Siguiente peticion de ajax cuando la actual este terminada
				setTimeout(reloadfun, 300000);

			}
		});
	})();
</script>


