<?php $__env->startSection('content'); ?>
    <h1><b>Users</b></h1>

    <hr>

    <div ><a href="/admin/user/add" style="text-decoration: none;"><i class="fas fa-plus-square fa-3x"  title="New Post"></i></a></div>
    <div><table class="col-12 table table-bordered" id="table">
            <thead>
            <tr style="max-height: 30px">
                <th style="width: 5px">#</th>
                <th style="width: 5px; min-width: 200px;">User</th>
                <th >email</th>
                <th>type</th>
                <th colspan="2" ></th>

            </tr>
            </thead>
            <tbody>
            <div >
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>


                    <th><?php echo e($user->id); ?></th>
                    <td><?php echo e($user->login); ?></td>

                    <td style="max-height: 10px"><div class="box" style="max-height: 40px; "><?php echo e($user->email); ?></div></td>
                    <td><?php echo e($types[$user->type]); ?></td>
                    <td><div ><a href="/admin/user/edit/<?php echo e($user->id); ?>"><i class="fa fa-edit fa-2x edit" title="edit"></i></a></div></td>
                    <td><div ><a href="/admin/user/delete/<?php echo e($user->id); ?>"><i class="fas fa-trash fa-2x remove" title="remove"></i></a></div></td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            </tbody>
        </table></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/user/display.blade.php ENDPATH**/ ?>