<?php $__env->startSection('content'); ?>
    <h1><b>Categories</b></h1>

    <hr>
    <div ><a href="/admin/category/add" style="text-decoration: none;"><i class="fas fa-plus-square fa-3x"  title="New Post"></i></a></div>
    <div style="text-align: center; "><table class="col-6 table table-bordered" id="table">
            <thead>
            <tr style="max-height: 30px">
                <th style="width: 5px">#</th>
                <th style="width: 5px">Category name</th>
                <th >Created_at</th>
                <th >Updated_at</th>

                <th colspan="2" ></th>

            </tr>
            </thead>
            <tbody>
            <div>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e($category->id); ?></th>
                    <td><?php echo e($category->name); ?></td>
                    <td><?php echo e($category->created_at); ?></td>
                    <td><?php echo e($category->updated_at); ?></td>
                    <td><div ><a href="/admin/category/edit/<?php echo e($category->id); ?>"><i class="fa fa-edit fa-2x edit" title="edit"></i></a></div></td>
                    <td><div ><a href="/admin/category/delete/<?php echo e($category->id); ?>"><i class="fas fa-trash fa-2x remove" title="remove"></i></a></div></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </tbody>
        </table></div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/category/display.blade.php ENDPATH**/ ?>