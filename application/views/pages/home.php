<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Register Production</h4>
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
				<h3 class="box-title">CNC Production Registry Menu</h3>

				<div class="row mt-5">

					<div class="col-lg-4">
						<div class="col-lg-12 card shadow border">
							<div class="card-body">
								<h3 class="card-title text-center">Production</h3>
								<p class="mt-5 mb-5">Click on the button to register production for a machine.</p>
								<a class="btn btn-outline-primary text-center" href="<?php echo base_url() ?>register_production">Register Production</a>
							</div>
						</div>
					</div>


					<div class="col-lg-4">
						<div class="col-lg-12 card shadow border">
							<div class="card-body">
								<h3 class="card-title text-center">Downtimes</h3>
								<p class="mt-5 mb-5">Click on the button to register downtime for a machine.</p>
								<a class="btn btn-outline-danger text-center" href="<?php echo base_url() ?>register_downtime">Register Downtime</a>
							</div>
						</div>
					</div>



					<div class="col-lg-4">
						<div class="col-lg-12 card shadow border">
							<div class="card-body">
								<h3 class="card-title text-center">Reports</h3>
								<p class="mt-5 mb-5">Click on the button to generate reports.</p>
								<a class="btn btn-outline-success text-center" href="<?php echo base_url() ?>reports">Register Downtime</a>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>



	</div>
</div>







<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>
	document.querySelector("#end-time").addEventListener("change", myFunction);

	function myFunction() {

		//value start
		var start = Date.parse($("input#start-time").val()); //get timestamp

		//value end
		var end = Date.parse($("input#end-time").val()); //get timestamp

		totalHours = NaN;
		goal = NaN;
		if (start < end) {
			totalHours = Math.floor((end - start) / 1000 / 60 / 60 ); //milliseconds: /1000 / 60 / 60
			goal = totalHours*22;
		}

		$("#total-hours").val(totalHours);
		$("#goal").val(goal);

	}
</script>

<script>
	$('#entries-list').DataTable({
		'scrollX': true,
		"oLanguage": {
			"sEmptyTable": "No se encontro... <a href='<?php echo base_url() ?>request/new' class='btn btn-primary'>Agregar Aqui</a>",
			"sZeroRecords": "No se encontro... <a href='<?php echo base_url() ?>request/new' class='btn btn-primary'>Agregar Aqui</a>"
		}
		//'bSort': false,
		//'scrollCollapse': true,
	});
	/*karen bora alexc rox luigi carlos pollo
	$('#entries-list').DataTable({
		'scrollX': true,
		//'bSort': false,
		//'scrollCollapse': true,

		'processing': true,
		'serverSide': true,
		'serverMethod': 'post',
		'ajax': {
		'url': '<?php echo base_url() ?>datatables/home_calidad.php'
		},
		'columns': [
			{ data: 'id' },
			{ data: 'part_no' },
			{ data: 'lot_no' },
			{ data: 'qty' },
			{ data: 'planta' },
			{ data: 'progress' },
			{ data: 'btn_id' },
		]
	});
	*/
</script>


