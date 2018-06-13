<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Volumeyear Edit</h3>
            </div>
			<?php echo form_open('volumeyear/edit/'.$volumeyear['idVolumeYears']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idVolumeSource" class="control-label"><span class="text-danger">*</span>Volumesource</label>
						<div class="form-group">
							<select name="idVolumeSource" class="form-control">
								<option value="">select volumesource</option>
								<?php 
								foreach($all_volumesource as $volumesource)
								{
									$selected = ($volumesource['idVolumeSource'] == $volumeyear['idVolumeSource']) ? ' selected="selected"' : "";

									echo '<option value="'.$volumesource['idVolumeSource'].'" '.$selected.'>'.$volumesource['idVolumeSource'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idVolumeSource');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label">Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo ($this->input->post('year') ? $this->input->post('year') : $volumeyear['year']); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="volume" class="control-label">Volume</label>
						<div class="form-group">
							<input type="text" name="volume" value="<?php echo ($this->input->post('volume') ? $this->input->post('volume') : $volumeyear['volume']); ?>" class="form-control" id="volume" />
							<span class="text-danger"><?php echo form_error('volume');?></span>
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