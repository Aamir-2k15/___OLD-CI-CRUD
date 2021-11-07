<header class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-10">
                    <h3>Update Post</h3>
                </div>
                <div class="col-md-2">
                    <a href="<?php echo site_url('/'); ?>" class="btn btn-outline-primary pull-right">All Posts</a>
                </div>
            </div>
        </header>

        <div id="content" class="container pt-4 pb-4">
            <div class="row">
                <div class="col-md-12">


                    <form method="post" action="<?php echo site_url('/update'); ?>">


                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" name="title" id="title" value="<?php echo $the_record->title ?>"
                                placeholder="Title">
                            <small id="helpId" class="form-text text-muted">Help text</small>
                        </div>

                        <div class="form-group">
                            <label for="body">Body</label>
                            <textarea class="form-control" name="body" id="body" rows="3" placeholder="Body"><?php echo $the_record->body ?></textarea>
                        </div>
<input type="hidden" name="id" value="<?php echo $the_record->id ?>">
                        <!-- <button type="reset" class="btn btn-secondary" data-dismiss="modal">Cancel</button> -->
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save"></i>
                            Update</button>

                    </form>


                </div>
            </div>
        </div>