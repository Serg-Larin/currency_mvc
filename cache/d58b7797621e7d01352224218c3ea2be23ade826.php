<?php $__env->startSection('content'); ?>
    <h1><b>Comments</b></h1>

    <hr>
    <form action="/admin/comment/edit" method="post">
    <div style="height: 25px">
        <div class="redact_panel" style="display: none;">
            <button type="submit" class="btn btn-danger">Редактировать</button>
            <button type="submit" class="btn btn-warning">Удалить</button>
        </div>
    </div>
    <div style="text-align: center; "><table class="col-6 table table-bordered" id="table">
            <thead>
            <tr style="max-height: 30px">
                <th style="width: 5px"></th>
                <th style="width: 5px">#</th>
                <th style="width: 5px">Email</th>
                <th >Content</th>
                <th >Created_at</th>
                <th >Updated_at</th>

                <th colspan="2" ></th>

            </tr>
            </thead>
            <tbody>
            <div>
                <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><input type="checkbox" name="check<?php echo e($comment->id); ?>" value="<?php echo e($comment->id); ?>" class="check"></th>
                        <th><?php echo e($comment->id); ?></th>
                        <td><?php echo e($comment->email); ?></td>
                        <td><?php echo e($comment->content); ?></td>
                        <td><?php echo e($comment->created_at); ?></td>
                        <td><?php echo e($comment->updated_at); ?></td>
                        <td><div ><a href="/admin/comment/edit/<?php echo e($comment->id); ?>"><i class="fa fa-edit fa-2x edit" title="edit"></i></a></div></td>
                        <td><div ><a href="/admin/comment/delete/<?php echo e($comment->id); ?>"><i class="fas fa-trash fa-2x remove" title="remove"></i></a></div></td>
                        </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            </tbody>
        </table></div>
    </form>
    <script>
        $('.check').on('click', function () {
            let data = [];
            let checked = $('input:checkbox:checked');
            if(checked.length>0){
                $('.redact_panel').css('display', 'block');
                // checked.each(function (index){
                //     data.push($(this).val());
                // })

            } else {
                $('.redact_panel').css('display', 'none');
            }


        })

    </script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/admin/comment/display.blade.php ENDPATH**/ ?>