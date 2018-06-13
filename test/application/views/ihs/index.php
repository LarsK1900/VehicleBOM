<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ihs Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('ihs/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdIHS</th>
						<th>MnemonikCode</th>
						<th>OemGroup</th>
						<th>Oem</th>
						<th>Customerplant</th>
						<th>Vehicle</th>
						<th>Program</th>
						<th>Platform</th>
						<th>Region</th>
						<th>Sop</th>
						<th>Eop</th>
						<th>Bodystyle</th>
						<th>Bodytype</th>
						<th>ProductionNameplate</th>
						<th>ProductionBrand</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($ihs as $i){ ?>
                    <tr>
						<td><?php echo $i['idIHS']; ?></td>
						<td><?php echo $i['mnemonikCode']; ?></td>
						<td><?php echo $i['oemGroup']; ?></td>
						<td><?php echo $i['oem']; ?></td>
						<td><?php echo $i['customerplant']; ?></td>
						<td><?php echo $i['vehicle']; ?></td>
						<td><?php echo $i['program']; ?></td>
						<td><?php echo $i['platform']; ?></td>
						<td><?php echo $i['region']; ?></td>
						<td><?php echo $i['sop']; ?></td>
						<td><?php echo $i['eop']; ?></td>
						<td><?php echo $i['bodystyle']; ?></td>
						<td><?php echo $i['bodytype']; ?></td>
						<td><?php echo $i['productionNameplate']; ?></td>
						<td><?php echo $i['productionBrand']; ?></td>
						<td>
                            <a href="<?php echo site_url('ihs/edit/'.$i['idIHS']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('ihs/remove/'.$i['idIHS']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
