<div class="page-breadcrumb bg-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Register Production</h4>
		</div>

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
				<h3 class="box-title">CNC Production Registry</h3>

				<?php echo form_open(base_url() . 'entry_form/' . $cnc)?>

				<input type="hidden" name="machine" value="<?= $cnc ?>">

				<div class="row mt-5">

					<div class="col-3">
						<label for="">Part Number for <?= $cnc ?></label>
						<select name="pn" id="pn" class="form-control" onchange="searchnow()" required>
							<option value="">Select Part Number</option>
							<?php foreach ($parts as $part): ?>
								<option value="<?php echo $part['COL1'] ?>"><?php echo $part['COL1'] . " | " . $part['COL2'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-3">
						<label for="">PPH</label>
						<input id="pph" type="text" class="form-control" value="0" readonly>
					</div>
					<div class="col-3">
						<label for="">From</label>
						<input id="start-time" name="start" type="datetime-local" class="form-control">
					</div>
					<div class="col-3">
						<label for="">To</label>
						<input id="end-time"  name="end" type="datetime-local" class="form-control">
					</div>

					<input type="hidden" id="total-hours" class="form-control">

					<div class="col-3 mt-5">
						<label for="">Produced Parts</label>
						<input type="number" min="0" name="quantity" class="form-control">
					</div>

					<div class="col-3 mt-5">
						<label for="">Optimum Value</label>
						<input type="number" id="goal" name="goal" min="0" class="form-control" readonly>
					</div>

					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-outline-primary" value="Save Production">
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


