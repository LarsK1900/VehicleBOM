<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Volumemonth Edit</h3>
            </div>
			<?php echo form_open('volumemonth/edit/'.$volumemonth['idVolumeMonth']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idVolumeYears" class="control-label"><span class="text-danger">*</span>Volumeyear</label>
						<div class="form-group">
							<select name="idVolumeYears" class="form-control">
								<option value="">select volumeyear</option>
								<?php 
								foreach($all_volumeyears as $volumeyear)
								{
									$selected = ($volumeyear['idVolumeYears'] == $volumemonth['idVolumeYears']) ? ' selected="selected"' : "";

									echo '<option value="'.$volumeyear['idVolumeYears'].'" '.$selected.'>'.$volumeyear['idVolumeYears'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idVolumeYears');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="Month" class="control-label">Month</label>
						<div class="form-group">
							<input type="text" name="Month" value="<?php echo ($this->input->post('Month') ? $this->input->post('Month') : $volumemonth['Month']); ?>" class="form-control" id="Month" />
							<span class="text-danger"><?php echo form_error('Month');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label">Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $volumemonth['year']); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>