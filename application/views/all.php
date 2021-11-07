
        <header class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-10">
                    <h3><?php echo site_name();?></h3>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo site_url('/create');?>" class="btn btn-outline-primary pull-right">Add Post</a>
                </div>
            </div>
        </header>
        <!-- <pre><?php //print_r($posts); exit;?>  -->
        <div id="content" class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-stripped table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Body</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                             <?php foreach($posts as $post):?>   
                                <tr>
                                    <td><?php echo $post->id?></td>
                                    <td><?php echo $post->title?></td>
                                    <td><?php echo substr($post->body, 0,80)?></td>
                                    <td>
                                        <a href="<?php echo site_url('/view/'.$post->id);?>" class="btn btn-outline-primary" title="View"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="<?php echo site_url('/edit/'.$post->id);?>" class="btn btn-outline-success" title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                        <a href="<?php echo site_url('/delete/'.$post->id);?>" class="btn btn-outline-danger" onclick="return confirm_delete()"><i class="fa fa-trash-o" aria-hidden="true" title="Delete"></i></a>
                                    </td>
                                </tr>                       
                             <?php endforeach;?>   
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
