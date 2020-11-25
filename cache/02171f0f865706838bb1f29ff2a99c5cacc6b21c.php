<?php $__env->startSection('content'); ?>
    <script>
        $(function(){
            $("select").bsMultiSelect();
        });
    </script>
    <h1><b>Edit post</b></h1>
    <hr>
    <form enctype="multipart/form-data" id="edit_post_form" action="" method="post">
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label for="categories">Categories</label>
                    <select id="categories" name="categories[]"  class="form-control"  multiple="multiple" >
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"
                                    <?php $__currentLoopData = $postCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(isset($postCategory)&&$postCategory->id===$category->id): ?>
                                            selected
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                >
                                <?php echo e($category->name); ?></option>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="tags" >Tags</label>
                    <select id="tags"  name="tags[]" class="form-control"  multiple="multiple" >
                        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tag->id); ?>"
                            <?php $__currentLoopData = $postTags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $postTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(isset($postTag)&&$postTag->id===$tag->id): ?>
                                            selected
                                    <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            ><?php echo e($tag->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Title</label>
                    <input type="text" name="title" class="form-control" id="formGroupExampleInput2" value="<?php echo e($editedPost->title); ?>" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="3" ><?php echo e($editedPost->content); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="short_description">Short Description</label>
                    <textarea name="short_description" class="form-control" id="short_description" rows="3" ><?php echo e($editedPost->short_description); ?></textarea>
                </div>
                <input type="text" value="<?php echo e($editedPost->id); ?>" name="id" hidden>
                <button type="submit" id="postEdit" class="btn btn-primary">Submit</button>
            </div>
            <div class="col-4">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Post image</label>
                    <input type="file" name="image" class="form-control-file" id="image" >
                </div>
                <div class="form-check">
                    <input type="checkbox" name="is_public" class="form-check-input" <?php if($editedPost->is_public): ?> checked <?php endif; ?> id="is_public">
                    <label class="form-check-label" for="is_public">Public</label>
                </div>
                <div class="form-check">
                    <div>
                        <img src="<?php echo e($editedPost->getImage()); ?>" alt="Картинка не добавлена" height="300" width="250">
                    </div>
                </div>
            </div>

            </div>
    </form>
    <script>
        // $(document).ready(function () {
        //     $('#tags').find('option').attr('selected','');
        $('#edit_post_form').submit(function (e) {
            let form = new FormData(this);
            let button = $('#postEdit');
            button.attr('disabled',true);

            ajaxRequest( '/admin/posts/edit/<?php echo e($editedPost->id); ?>',form).done(function (res) {
                console.log(res);
                callMessage(res) ?  setTimeout(function (){
                    $(location).attr('href', '/admin/posts')
                },500) : button.removeAttr('disabled');
            });
            e.preventDefault();
        })
        // })
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/post/edit.blade.php ENDPATH**/ ?>