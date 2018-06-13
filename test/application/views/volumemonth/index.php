<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Volumemonth Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('volumemonth/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdVolumeMonth</th>
						<th>IdVolumeYears</th>
						<th>Month</th>
						<th>Year</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($volumemonth as $v){ ?>
                    <tr>
						<td><?php echo $v['idVolumeMonth']; ?></td>
						<td><?php echo $v['idVolumeYears']; ?></td>
						<td><?php echo $v['Month']; ?></td>
						<td><?php echo $v['year']; ?></td>
						<td>
                            <a href="<?php echo site_url('volumemonth/edit/'.$v['idVolumeMonth']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('volumemonth/remove/'.$v['idVolumeMonth']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                <div class="pull-right">
                    <?php echo $this->pagination->create_links(); ?>                    
                </div>                
            </div>
        </div>
    </div>
</div>
