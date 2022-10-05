<div class="page-breadcrumb bg-danger text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Update Downtime</h4>
		</div>

	</div>
	<!-- /.col-lg-12 -->
</div>




<div id="pendingdiv" class="container-fluid">
	<!-- ============================================================== -->
	<!-- Three charts -->
	<!-- ============================================================== -->
	<div class="row justify-content-center">

		<?php if($this->session->flashdata('updated')): ?>

			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong class="uppercase"><bdi>Success!</bdi></strong>
				Your data has been saved, thank you.
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

			</div>

		<?php endif; ?>


		<div class="col-lg-12">
			<div class="white-box analytics-info">
				<h3 class="box-title">CNC Downtime Registry</h3>

				<?php echo form_open( base_url() . 'register_downtime/delete/' . $cnc)?>

				<input type="hidden" name="machine" value="<?= $cnc ?>">

				<div class="row mt-5">


					<div class="col-3">
						<label for="">From</label>
						<input id="start-time" name="start" type="datetime-local" value="<?php echo $downtime['downtime_start'] ?>" class="form-control" required>
					</div>
					<div class="col-3">
						<label for="">To</label>
						<input id="end-time"  name="end" type="datetime-local" class="form-control" value="<?php echo $downtime['downtime_end'] ?>" required>
					</div>

					<div class="col-6">
						<label for="">Reason for downtime</label>
						<select name="reason" class="form-control" required>
							<option value="">Select a reason</option>
							<?php foreach ($downtimes as $dt): ?>
								<option <?php if($downtime['downtime_reason'] == $dt['dt_reason']){echo "selected";}else{echo "";} ?> ><?= $dt['dt_reason'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>


					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-danger text-white" value="Delete Downtime">
					</div>

				</div>
				<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

