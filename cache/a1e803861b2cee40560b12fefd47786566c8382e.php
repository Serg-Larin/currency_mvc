<?php $__env->startSection('content'); ?>

    <h1><b>Edit comment</b></h1>
    <hr>
    <form action="" method="post" enctype="multipart/form-data" id="edit_comments_form">
        <div style="text-align: center; display: flex; align-items: center;flex-direction: column;">

            <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <div style="width: 700px">
                <h3><?php echo e($comment->id); ?></h3>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="text" name="email<?php echo e($comment->id); ?>" value="<?php echo e($comment->email); ?>" class="form-control" id="formGroupExampleInput2" >
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Content</label>
                    <textarea name="content<?php echo e($comment->id); ?>" class="form-control" rows="10" id="exampleFormControlTextarea1" rows="3"><?php echo e($comment->content); ?></textarea>
                </div>

            </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <button class="btn btn-success"
                        type="submit"
                        id="edit_comments_button"
                        style=" width: 120px; margin-bottom:20px; "
                        name="edit" value="true">
                    Отправить
                </button>
            </div>

    </form>
    <script>
        $('#edit_comments_form').submit(function (e) {
            let form = new FormData(this);
            let button = $('#edit_comments_button');
            console.log(form);
            button.attr('disabled',true);
            ajaxRequest('/admin/comment/edit',form).done(function (res) {
                console.log(res);
                callMessage(res) ?  setTimeout(function (){
                    $(location).attr('href', '/admin/comments')
                },500) : button.removeAttr('disabled');
            });
            e.preventDefault();
        })
    </script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/admin/comment/edit.blade.php ENDPATH**/ ?>