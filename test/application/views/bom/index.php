<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bom Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('bom/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdBOM</th>
						<th>IdIHS</th>
						<th>IdSAP</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($bom as $b){ ?>
                    <tr>
						<td><?php echo $b['idBOM']; ?></td>
						<td><?php echo $b['idIHS']; ?></td>
						<td><?php echo $b['idSAP']; ?></td>
						<td>
                            <a href="<?php echo site_url('bom/edit/'.$b['idBOM']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('bom/remove/'.$b['idBOM']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
