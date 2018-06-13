<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Volumesource Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('volumesource/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdVolumeSource</th>
						<th>IdIHS</th>
						<th>UserID</th>
						<th>Active</th>
						<th>Date</th>
						<th>VolumeName</th>
						<th>Source</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($volumesource as $v){ ?>
                    <tr>
						<td><?php echo $v['idVolumeSource']; ?></td>
						<td><?php echo $v['idIHS']; ?></td>
						<td><?php echo $v['userID']; ?></td>
						<td><?php echo $v['active']; ?></td>
						<td><?php echo $v['date']; ?></td>
						<td><?php echo $v['volumeName']; ?></td>
						<td><?php echo $v['source']; ?></td>
						<td>
                            <a href="<?php echo site_url('volumesource/edit/'.$v['idVolumeSource']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('volumesource/remove/'.$v['idVolumeSource']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
