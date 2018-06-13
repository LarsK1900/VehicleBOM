<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Sap Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('sap/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdSAP</th>
						<th>MaterialNumber</th>
						<th>Debitor</th>
						<th>DebitorName</th>
						<th>Vkorg</th>
						<th>Werk</th>
						<th>Vtrwg</th>
						<th>ProductGroup</th>
						<th>Shortnumber</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($sap as $s){ ?>
                    <tr>
						<td><?php echo $s['idSAP']; ?></td>
						<td><?php echo $s['materialNumber']; ?></td>
						<td><?php echo $s['debitor']; ?></td>
						<td><?php echo $s['debitorName']; ?></td>
						<td><?php echo $s['vkorg']; ?></td>
						<td><?php echo $s['werk']; ?></td>
						<td><?php echo $s['vtrwg']; ?></td>
						<td><?php echo $s['productGroup']; ?></td>
						<td><?php echo $s['shortnumber']; ?></td>
						<td>
                            <a href="<?php echo site_url('sap/edit/'.$s['idSAP']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('sap/remove/'.$s['idSAP']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
