<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">News Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('news/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>IdNews</th>
						<th>Header</th>
						<th>News</th>
						<th>Date</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($news as $n){ ?>
                    <tr>
						<td><?php echo $n['idNews']; ?></td>
						<td><?php echo $n['header']; ?></td>
						<td><?php echo $n['news']; ?></td>
						<td><?php echo $n['date']; ?></td>
						<td>
                            <a href="<?php echo site_url('news/edit/'.$n['idNews']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('news/remove/'.$n['idNews']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
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
