<?php $__env->startSection('content'); ?>
<h1><b>Edit category</b></h1>
<hr>
<div class="col-4">
<form action="" method="post" id="edit_category_form">
<div class="form-group">
    <label for="formGroupExampleInput2">category</label>
    <input type="text" class="form-control" name="category" value="<?php echo e($category->name); ?>" id="formGroupExampleInput2" >
    <input type="text" name="id" value="<?php echo e($category->id); ?>" hidden="hidden">
</div>
    <button type="submit" class="btn btn-primary" id="edit_category">Submit</button>
</form>
    </div>

<script>
    $('#edit_category_form').submit(function (e) {
        let form = new FormData(this);
        let button = $('#edit_category');
        button.attr('disabled',true);
        ajaxRequest( '/admin/category/edit/<?php echo e($category->id); ?>',form).done(function (res) {
                console.log(res);
                callMessage(res) ?  setTimeout(function (){
                    $(location).attr('href', '/admin/categories')
                },500) : button.removeAttr('disabled');
            });
        e.preventDefault();
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/category/edit.blade.php ENDPATH**/ ?>