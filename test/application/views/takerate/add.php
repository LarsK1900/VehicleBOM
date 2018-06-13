<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Takerate Add</h3>
            </div>
            <?php echo form_open('takerate/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="idBOM" class="control-label"><span class="text-danger">*</span>Bom</label>
						<div class="form-group">
							<select name="idBOM" class="form-control">
								<option value="">select bom</option>
								<?php 
								foreach($all_bom as $bom)
								{
									$selected = ($bom['idBOM'] == $this->input->post('idBOM')) ? ' selected="selected"' : "";

									echo '<option value="'.$bom['idBOM'].'" '.$selected.'>'.$bom['idBOM'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idBOM');?></span>
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
									$selected = ($tbl_user['userId'] == $this->input->post('userID')) ? ' selected="selected"' : "";

									echo '<option value="'.$tbl_user['userId'].'" '.$selected.'>'.$tbl_user['userId'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('userID');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="year" class="control-label">Year</label>
						<div class="form-group">
							<input type="text" name="year" value="<?php echo $this->input->post('year'); ?>" class="form-control" id="year" />
							<span class="text-danger"><?php echo form_error('year');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="takeRate" class="control-label">TakeRate</label>
						<div class="form-group">
							<input type="text" name="takeRate" value="<?php echo $this->input->post('takeRate'); ?>" class="form-control" id="takeRate" />
							<span class="text-danger"><?php echo form_error('takeRate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="deliveryQuote" class="control-label">DeliveryQuote</label>
						<div class="form-group">
							<input type="text" name="deliveryQuote" value="<?php echo $this->input->post('deliveryQuote'); ?>" class="form-control" id="deliveryQuote" />
							<span class="text-danger"><?php echo form_error('deliveryQuote');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="numberPerCar" class="control-label">NumberPerCar</label>
						<div class="form-group">
							<input type="text" name="numberPerCar" value="<?php echo $this->input->post('numberPerCar'); ?>" class="form-control" id="numberPerCar" />
							<span class="text-danger"><?php echo form_error('numberPerCar');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo $this->input->post('date'); ?>" class="form-control" id="date" />
							<span class="text-danger"><?php echo form_error('date');?></span>
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