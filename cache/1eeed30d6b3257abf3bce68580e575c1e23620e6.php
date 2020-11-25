<?php $__env->startSection('content'); ?>

<h1><b>Edit tag</b></h1>
<hr>
<div class="col-4">
    <form action="" method="post" id="edit_tag_form">
        <div class="form-group">
            <label for="formGroupExampleInput2">tag</label>
            <input type="text" name="tag" class="form-control" id="formGroupExampleInput2" value="<?php echo e($tag->name); ?>">
            <input type="text" name="id" value="<?php echo e($tag->id); ?>" hidden="hidden">
        </div>
        <button type="submit" class="btn btn-primary" id="edit_tag_button">Submit</button>
    </form>
</div>

<script>
    $('#edit_tag_form').submit(function (e) {
        let form = new FormData(this);
        let button = $('#edit_tag_button');
        button.attr('disabled',true);

        ajaxRequest( '/admin/tag/edit/<?php echo e($tag->id); ?>',form).done(function (res) {
            console.log(res);
            callMessage(res) ?  setTimeout(function (){
                $(location).attr('href', '/admin/tags')
            },500) : button.removeAttr('disabled');
        });
        
        e.preventDefault();
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/tag/edit.blade.php ENDPATH**/ ?>