<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Volumesource Edit</h3>
            </div>
			<?php echo form_open('volumesource/edit/'.$volumesource['idVolumeSource']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="idIHS" class="control-label"><span class="text-danger">*</span>Ihs</label>
						<div class="form-group">
							<select name="idIHS" class="form-control">
								<option value="">select ihs</option>
								<?php 
								foreach($all_ihs as $ihs)
								{
									$selected = ($ihs['idIHS'] == $volumesource['idIHS']) ? ' selected="selected"' : "";

									echo '<option value="'.$ihs['idIHS'].'" '.$selected.'>'.$ihs['idIHS'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idIHS');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="userID" class="control-label"><span class="text-danger">*</span>Tbl User</label>
						<div class="form-group">
							<select name="userID" class="form-control">
								<option value="">select tbl_user</option>
								<?php 
								foreach($all_tbl_users as $tbl_user)
								{
									$selected = ($tbl_user['userId'] == $volumesource['userID']) ? ' selected="selected"' : "";

									echo '<option value="'.$tbl_user['userId'].'" '.$selected.'>'.$tbl_user['userId'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="active" class="control-label">Active</label>
						<div class="form-group">
							<input type="text" name="active" value="<?php echo ($this->input->post('active') ? $this->input->post('active') : $volumesource['active']); ?>" class="form-control" id="active" />
							<span class="text-danger"><?php echo form_error('active');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $volumesource['date']); ?>" class="form-control" id="date" />
							<span class="text-danger"><?php echo form_error('date');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="volumeName" class="control-label">VolumeName</label>
						<div class="form-group">
							<input type="text" name="volumeName" value="<?php echo ($this->input->post('volumeName') ? $this->input->post('volumeName') : $volumesource['volumeName']); ?>" class="form-control" id="volumeName" />
							<span class="text-danger"><?php echo form_error('volumeName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="source" class="control-label">Source</label>
						<div class="form-group">
							<input type="text" name="source" value="<?php echo ($this->input->post('source') ? $this->input->post('source') : $volumesource['source']); ?>" class="form-control" id="source" />
							<span class="text-danger"><?php echo form_error('source');?></span>
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