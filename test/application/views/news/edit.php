<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">News Edit</h3>
            </div>
			<?php echo form_open('news/edit/'.$news['idNews']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="header" class="control-label">Header</label>
						<div class="form-group">
							<input type="text" name="header" value="<?php echo ($this->input->post('header') ? $this->input->post('header') : $news['header']); ?>" class="form-control" id="header" />
							<span class="text-danger"><?php echo form_error('header');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="news" class="control-label">News</label>
						<div class="form-group">
							<input type="text" name="news" value="<?php echo ($this->input->post('news') ? $this->input->post('news') : $news['news']); ?>" class="form-control" id="news" />
							<span class="text-danger"><?php echo form_error('news');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="date" class="control-label">Date</label>
						<div class="form-group">
							<input type="text" name="date" value="<?php echo ($this->input->post('date') ? $this->input->post('date') : $news['date']); ?>" class="form-control" id="date" />
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