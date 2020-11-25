<?php $__env->startSection('content'); ?>

<h1><b>New tag</b></h1>
<hr>
<div class="col-4">
    <form action="" method="post" id="add_tag_form">
        <div class="form-group">
            <label for="formGroupExampleInput2">tag</label>
            <input type="text" name="tag" class="form-control" id="formGroupExampleInput2" >
        </div>
        <button type="submit" class="btn btn-primary" id="add_tag_button">Submit</button>
    </form>
</div>


<script>
    $('#add_tag_form').submit(function (e) {
        let form = new FormData(this);
        let button = $('#add_tag_button');
        button.attr('disabled',true);

        ajaxRequest( '/admin/tag/add',form).done(function (res) {
            console.log(res);
            callMessage(res) ?  setTimeout(function (){
                $(location).attr('href', '/admin/tags')
            },500) : button.removeAttr('disabled');
        });

        e.preventDefault();
    })
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/tag/add.blade.php ENDPATH**/ ?>