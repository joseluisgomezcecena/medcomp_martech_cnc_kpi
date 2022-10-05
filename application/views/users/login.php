<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Protected Area</h4>
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
				<h3 class="box-title">Please login to continue.</h3>

				<?php echo form_open(base_url() . 'users/login')?>



				<div class="row mt-5">
					<div class="col-3">
						<label for="">User Name</label>
						<input id="pph" name="username" type="text" class="form-control">
					</div>
					<div class="col-3">
						<label for="">Password</label>
						<input id="password" name="password" type="password" class="form-control">
					</div>

					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-outline-primary" value="Login">
					</div>

				</div>


				<?php echo form_close()?>

			</div>
		</div>



	</div>
</div>







<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

<script>


	function searchnow() {

		var plant_id = $("#pn").val();

		alert("works");
		// Ajax request
		$.ajax({
			url: '<?=base_url()?>index.php/ProductionForms/get_insert_details',
			method: 'post',
			data: {plant_id: plant_id},
			dataType: 'json',
			success: function (response) {
				$.each(response, function (index, data) {

					alert("Parts Per Hour: "+data['COL4']);
					$('#pph').val(data['COL4']);
				});
			}
		});
	}



	document.querySelector("#end-time").addEventListener("change", myFunction);

	function myFunction() {

		var pph = $('#pph').val();

		//value start
		var start = Date.parse($("input#start-time").val()); //get timestamp

		//value end
		var end = Date.parse($("input#end-time").val()); //get timestamp

		totalHours = NaN;
		goal = NaN;

		//miliseconds = end - start;
		//alert(miliseconds);
		if (start < end) {


			totalHours = Math.round((end - start) / 1000 / 60 / 60 ); //milliseconds: /1000 / 60 / 60
			goal = totalHours*pph;
		}else{
			alert("Start date must be before end date. Check your dates.");
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


