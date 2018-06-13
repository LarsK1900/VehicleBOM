<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Takerate Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('takerate/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdTakeRate</th>
						<th>IdBOM</th>
						<th>UserID</th>
						<th>Year</th>
						<th>TakeRate</th>
						<th>DeliveryQuote</th>
						<th>NumberPerCar</th>
						<th>Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($takerate as $t){ ?>
                    <tr>
						<td><?php echo $t['idTakeRate']; ?></td>
						<td><?php echo $t['idBOM']; ?></td>
						<td><?php echo $t['userID']; ?></td>
						<td><?php echo $t['year']; ?></td>
						<td><?php echo $t['takeRate']; ?></td>
						<td><?php echo $t['deliveryQuote']; ?></td>
						<td><?php echo $t['numberPerCar']; ?></td>
						<td><?php echo $t['date']; ?></td>
						<td>
                            <a href="<?php echo site_url('takerate/edit/'.$t['idTakeRate']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('takerate/remove/'.$t['idTakeRate']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
