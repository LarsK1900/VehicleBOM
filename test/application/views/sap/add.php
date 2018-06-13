<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Sap Add</h3>
            </div>
            <?php echo form_open('sap/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<label for="materialNumber" class="control-label">MaterialNumber</label>
						<div class="form-group">
							<input type="text" name="materialNumber" value="<?php echo $this->input->post('materialNumber'); ?>" class="form-control" id="materialNumber" />
							<span class="text-danger"><?php echo form_error('materialNumber');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="debitor" class="control-label">Debitor</label>
						<div class="form-group">
							<input type="text" name="debitor" value="<?php echo $this->input->post('debitor'); ?>" class="form-control" id="debitor" />
							<span class="text-danger"><?php echo form_error('debitor');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="debitorName" class="control-label">DebitorName</label>
						<div class="form-group">
							<input type="text" name="debitorName" value="<?php echo $this->input->post('debitorName'); ?>" class="form-control" id="debitorName" />
							<span class="text-danger"><?php echo form_error('debitorName');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vkorg" class="control-label">Vkorg</label>
						<div class="form-group">
							<input type="text" name="vkorg" value="<?php echo $this->input->post('vkorg'); ?>" class="form-control" id="vkorg" />
							<span class="text-danger"><?php echo form_error('vkorg');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="werk" class="control-label">Werk</label>
						<div class="form-group">
							<input type="text" name="werk" value="<?php echo $this->input->post('werk'); ?>" class="form-control" id="werk" />
							<span class="text-danger"><?php echo form_error('werk');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vtrwg" class="control-label">Vtrwg</label>
						<div class="form-group">
							<input type="text" name="vtrwg" value="<?php echo $this->input->post('vtrwg'); ?>" class="form-control" id="vtrwg" />
							<span class="text-danger"><?php echo form_error('vtrwg');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="productGroup" class="control-label">ProductGroup</label>
						<div class="form-group">
							<input type="text" name="productGroup" value="<?php echo $this->input->post('productGroup'); ?>" class="form-control" id="productGroup" />
							<span class="text-danger"><?php echo form_error('productGroup');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="shortnumber" class="control-label">Shortnumber</label>
						<div class="form-group">
							<input type="text" name="shortnumber" value="<?php echo $this->input->post('shortnumber'); ?>" class="form-control" id="shortnumber" />
							<span class="text-danger"><?php echo form_error('shortnumber');?></span>
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