<div class="page-breadcrumb bg-warning text-white">
	<div class="row align-items-center">
		<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
			<h4 class="page-title">Update A Validated Part.</h4>
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

				<?php if($this->session->flashdata('created')): ?>

					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong class="uppercase"><bdi>Success!</bdi></strong>
						Your data has been saved, thank you.
						<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

					</div>

				<?php endif; ?>

				<h3 class="box-title">Updating Part  <?php echo $part['COL1'] ?> | <?php echo $part['COL2'] ?></h3>

				<?php echo form_open( base_url() . 'config/parts/edit/' . $part['id'])?>
				<input type="hidden" name="id" value="<?php echo $part['id'] ?>">
				<div class="row mt-5">
					<div class="col-3">
						<label for="">Part Number</label>
						<input id="reason-downtime" name="part_no" type="text" class="form-control" value="<?php echo $part['COL1'] ?>" required>
					</div>
					<div class="col-3">
						<label for="">Part Description</label>
						<input id="reason-downtime" name="description" type="text" class="form-control" value="<?php echo $part['COL2'] ?>" required>
					</div>
					<div class="col-3">
						<label for="">Machine</label>
						<select name="machine" class="form-control" required>
							<option value="">Select Machine</option>
							<?php foreach($machines as $machine): ?>
								<option <?php if( $part['COL9'] == $machine['machine_name']){echo "selected";}else{ echo "";} ?> value="<?php echo $machine['machine_name'] ?>"><?php echo $machine['machine_name'] ?></option>
							<?php endforeach; ?>
						</select>
					</div>
					<div class="col-3">
						<label for="">PPH (Parts Per Hour)</label>
						<input  name="pph" type="number" step="1"  min="1"  class="form-control" value="<?php echo $part['COL4'] ?>" required>
					</div>
					<div class="col-12 mt-5">
						<input type="submit" class="btn btn-outline-primary" value="Save Part.">
					</div>
				</div>
				<?php echo form_close()?>
			</div>
		</div>
	</div>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>

