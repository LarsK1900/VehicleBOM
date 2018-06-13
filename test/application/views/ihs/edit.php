<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Ihs Edit</h3>
            </div>
			<?php echo form_open('ihs/edit/'.$ihs['idIHS']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="mnemonikCode" class="control-label">MnemonikCode</label>
						<div class="form-group">
							<input type="text" name="mnemonikCode" value="<?php echo ($this->input->post('mnemonikCode') ? $this->input->post('mnemonikCode') : $ihs['mnemonikCode']); ?>" class="form-control" id="mnemonikCode" />
							<span class="text-danger"><?php echo form_error('mnemonikCode');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="oemGroup" class="control-label">OemGroup</label>
						<div class="form-group">
							<input type="text" name="oemGroup" value="<?php echo ($this->input->post('oemGroup') ? $this->input->post('oemGroup') : $ihs['oemGroup']); ?>" class="form-control" id="oemGroup" />
							<span class="text-danger"><?php echo form_error('oemGroup');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="oem" class="control-label">Oem</label>
						<div class="form-group">
							<input type="text" name="oem" value="<?php echo ($this->input->post('oem') ? $this->input->post('oem') : $ihs['oem']); ?>" class="form-control" id="oem" />
							<span class="text-danger"><?php echo form_error('oem');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="customerplant" class="control-label">Customerplant</label>
						<div class="form-group">
							<input type="text" name="customerplant" value="<?php echo ($this->input->post('customerplant') ? $this->input->post('customerplant') : $ihs['customerplant']); ?>" class="form-control" id="customerplant" />
							<span class="text-danger"><?php echo form_error('customerplant');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="vehicle" class="control-label">Vehicle</label>
						<div class="form-group">
							<input type="text" name="vehicle" value="<?php echo ($this->input->post('vehicle') ? $this->input->post('vehicle') : $ihs['vehicle']); ?>" class="form-control" id="vehicle" />
							<span class="text-danger"><?php echo form_error('vehicle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="program" class="control-label">Program</label>
						<div class="form-group">
							<input type="text" name="program" value="<?php echo ($this->input->post('program') ? $this->input->post('program') : $ihs['program']); ?>" class="form-control" id="program" />
							<span class="text-danger"><?php echo form_error('program');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="platform" class="control-label">Platform</label>
						<div class="form-group">
							<input type="text" name="platform" value="<?php echo ($this->input->post('platform') ? $this->input->post('platform') : $ihs['platform']); ?>" class="form-control" id="platform" />
							<span class="text-danger"><?php echo form_error('platform');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="region" class="control-label">Region</label>
						<div class="form-group">
							<input type="text" name="region" value="<?php echo ($this->input->post('region') ? $this->input->post('region') : $ihs['region']); ?>" class="form-control" id="region" />
							<span class="text-danger"><?php echo form_error('region');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="sop" class="control-label">Sop</label>
						<div class="form-group">
							<input type="text" name="sop" value="<?php echo ($this->input->post('sop') ? $this->input->post('sop') : $ihs['sop']); ?>" class="form-control" id="sop" />
							<span class="text-danger"><?php echo form_error('sop');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="eop" class="control-label">Eop</label>
						<div class="form-group">
							<input type="text" name="eop" value="<?php echo ($this->input->post('eop') ? $this->input->post('eop') : $ihs['eop']); ?>" class="form-control" id="eop" />
							<span class="text-danger"><?php echo form_error('eop');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bodystyle" class="control-label">Bodystyle</label>
						<div class="form-group">
							<input type="text" name="bodystyle" value="<?php echo ($this->input->post('bodystyle') ? $this->input->post('bodystyle') : $ihs['bodystyle']); ?>" class="form-control" id="bodystyle" />
							<span class="text-danger"><?php echo form_error('bodystyle');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="bodytype" class="control-label">Bodytype</label>
						<div class="form-group">
							<input type="text" name="bodytype" value="<?php echo ($this->input->post('bodytype') ? $this->input->post('bodytype') : $ihs['bodytype']); ?>" class="form-control" id="bodytype" />
							<span class="text-danger"><?php echo form_error('bodytype');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="productionNameplate" class="control-label">ProductionNameplate</label>
						<div class="form-group">
							<input type="text" name="productionNameplate" value="<?php echo ($this->input->post('productionNameplate') ? $this->input->post('productionNameplate') : $ihs['productionNameplate']); ?>" class="form-control" id="productionNameplate" />
							<span class="text-danger"><?php echo form_error('productionNameplate');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="productionBrand" class="control-label">ProductionBrand</label>
						<div class="form-group">
							<input type="text" name="productionBrand" value="<?php echo ($this->input->post('productionBrand') ? $this->input->post('productionBrand') : $ihs['productionBrand']); ?>" class="form-control" id="productionBrand" />
							<span class="text-danger"><?php echo form_error('productionBrand');?></span>
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