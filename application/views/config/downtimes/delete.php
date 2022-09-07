<div class="page-breadcrumb bg-warning text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Delete Reason For Downtime</h4>
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

				<h3 class="box-title">CNC Downtime Reasons</h3>

				<?php echo form_open( base_url() . 'config/downtimes/delete/' . $downtime['dt_id'] )?>
				<input type="hidden" name="dt_id" value="<?php echo $downtime['dt_id'] ?>">
				<div class="row mt-5">
					<div class="col-3">
						<label for="">Downtime Reason</label>
						<input id="reason-downtime" name="dt_reason" type="text" class="form-control" value="<?php echo $downtime['dt_reason']; ?>" readonly>
					</div>
					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-outline-danger" value="Delete Downtime">
					</div>
				</div>
				<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

