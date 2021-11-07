<header class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-10">
                    <h3>View</h3>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo site_url('/'); ?>" class="btn btn-outline-primary pull-right">All Posts</a>
                </div>
            </div>
        </header>

        <div id="content" class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12">


                    <form method="post" action="">


                        <div class="form-group">
                            <label for="title">Title</label>
                            <p><?php echo $the_record->title?></p>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <p><?php echo $the_record->body?></p>
                        </div>

                        <!-- <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                        <!-- <a href="javascript:window.history.go(-1);" class="btn btn-primary">
                            <i class="fa fa-backward" aria-hidden="true"></i>
                            Back</a> -->
                        <a href="<?php echo site_url();?>" class="btn btn-primary">
                            <i class="fa fa-backward" aria-hidden="true"></i>
                            Back</a>

                    </form>


                </div>
            </div>
        </div>