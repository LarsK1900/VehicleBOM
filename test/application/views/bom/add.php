<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bom Add</h3>
            </div>
            <?php echo form_open('bom/add'); ?>
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
									$selected = ($ihs['idIHS'] == $this->input->post('idIHS')) ? ' selected="selected"' : "";

									echo '<option value="'.$ihs['idIHS'].'" '.$selected.'>'.$ihs['idIHS'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idIHS');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="idSAP" class="control-label"><span class="text-danger">*</span>Sap</label>
						<div class="form-group">
							<select name="idSAP" class="form-control">
								<option value="">select sap</option>
								<?php 
								foreach($all_sap as $sap)
								{
									$selected = ($sap['idSAP'] == $this->input->post('idSAP')) ? ' selected="selected"' : "";

									echo '<option value="'.$sap['idSAP'].'" '.$selected.'>'.$sap['idSAP'].'</option>';
								} 
								?>
							</select>
							<span class="text-danger"><?php echo form_error('idSAP');?></span>
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