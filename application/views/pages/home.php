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
				<h3 class="box-title">CNC Production Registry</h3>

				<?php echo form_open()?>

				<div class="row mt-5">
					<div class="col-3">
						<label for="">CNC Machine</label>
						<select name="machine" id="machine" class="form-control">
							<option value="">Select Machine</option>
							<?php foreach ($machines as $machine): ?>
								<option value="<?php echo $machine['machine_id'] ?>"><?php echo $machine['machine_name'] ?></option>
							<?php endforeach ?>
						</select>
					</div>
					<div class="col-3">
						<label for="">Part Number</label>
						<select name="pn" id="pn" class="form-control">
							<option value="">Select Part Number</option>
							<option value="">MP0050</option>
							<option value="">MP0051</option>
							<option value="">MP0066</option>
						</select>
					</div>
					<div class="col-3">
						<label for="">From</label>
						<input id="start-time" type="datetime-local" class="form-control">
					</div>
					<div class="col-3">
						<label for="">To</label>
						<input id="end-time" type="datetime-local" class="form-control">
					</div>

					<input type="hidden" id="total-hours" class="form-control">

					<div class="col-3 mt-5">
						<label for="">Produced Parts</label>
						<input type="number" min="0" class="form-control">
					</div>

					<div class="col-3 mt-5">
						<label for="">Optimum Value</label>
						<input type="number" id="goal" min="0" class="form-control" readonly>
					</div>

				</div>


				<?php echo form_close()?>
				<!--
				<div  class="table-responsive">
					<table style="width: 100%;" id="status-list" class="table">
						<thead>
						<tr>
							<th>ID</th>
							<th>Sup</th>
							<th>Revision</th>
							<th>Ubicacion</th>
							<th>Maquina</th>
							<th>Parte</th>
							<th>Status</th>
							<th>Tiempo de espera</th>
						</tr>
						</thead>
						<tbody>
						<?php
						foreach ($requests as $request):
							?>

							<tr>
								<td><?php echo $request['request_id'] ?></td>
								<td><?php echo $request['boy_sup'] ?></td>
								<td><?php echo $request['revision'] ?></td>
								<td><?php echo $request['location'] ?></td>
								<td><?php echo $request['maquina'] ?></td>
								<td><?php echo $request['partno'] ?><br><?php echo $request['partno_descrip'] ?></td>
								<td>
									<?php

									if($request['status']==0)
									{
										$status_text = "En espera";
										$status_color = "text-danger";
									}
									elseif($request['status']==1)
									{
										$status_text = "Armado";
										$status_color = "text-warning";
									}
									elseif($request['status']==2)
									{
										$status_text = "Entregado";
										$status_color = "text-success";
									}
									?>
									<b class="<?php echo $status_color ?>"><?php echo $status_text ?></b>
								</td>
								<th>
									<?php
									$t1 = strtotime($request['created_at']);
									$t2 = strtotime(date("Y-m-d H:i:s"));
									$diff = $t2 - $t1;
									$hours = $diff / ( 60 * 60 );
									echo round($hours,2);
									?>
									 Hr(s)
								</th>
							</tr>

						<?php endforeach; ?>
						</tbody>

					</table>
				</div>
				-->

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


