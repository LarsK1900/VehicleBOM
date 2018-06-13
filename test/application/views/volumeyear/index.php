<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Volumeyears Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('volumeyear/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdVolumeYears</th>
						<th>IdVolumeSource</th>
						<th>Year</th>
						<th>Volume</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($volumeyears as $v){ ?>
                    <tr>
						<td><?php echo $v['idVolumeYears']; ?></td>
						<td><?php echo $v['idVolumeSource']; ?></td>
						<td><?php echo $v['year']; ?></td>
						<td><?php echo $v['volume']; ?></td>
						<td>
                            <a href="<?php echo site_url('volumeyear/edit/'.$v['idVolumeYears']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('volumeyear/remove/'.$v['idVolumeYears']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
