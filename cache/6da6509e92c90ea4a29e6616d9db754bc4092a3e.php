<?php $__env->startSection('content'); ?>
    <h1><b>Tags</b></h1>

    <hr>

    <div ><a href="/admin/tag/add" style="text-decoration: none;"><i class="fas fa-plus-square fa-3x"  title="New Post"></i></a></div>
    <div style="text-align: center; "><table class="col-6 table table-bordered" id="table">
            <thead>
            <tr style="max-height: 30px">
                <th style="width: 5px">#</th>
                <th style="width: 5px">Tag</th>
                <th>created_at</th>
                <th>updated_at</th>

                <th colspan="2" ></th>

            </tr>
            </thead>
            <tbody>
            <div>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($tag->id); ?></th>
                    <td><?php echo e($tag->name); ?></td>
                    <td><?php echo e($tag->created_at); ?></td>
                    <td><?php echo e($tag->updated_at); ?></td>
                    <td><div ><a href="/admin/tag/edit/<?php echo e($tag->id); ?>"><i class="fa fa-edit fa-2x edit" title="edit"></i></a></div></td>
                    <td><div ><a href="/admin/tag/delete/<?php echo e($tag->id); ?>"><i class="fas fa-trash fa-2x remove" title="remove"></i></a></div></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </tbody>
        </table></div>
    <script>
        import {toastr} from 'toastr';
        toastr.info('qwe');
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/tag/display.blade.php ENDPATH**/ ?>