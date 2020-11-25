<?php $__env->startSection('content'); ?>
    <h1><b>Posts</b></h1>

    <hr>

    <div style="text-align: center;"><a href="/admin/posts/add" style="text-decoration: none;"><i class="fas fa-plus-square fa-3x"  title="New Post"></i></a></div>
    <div style="text-align: center; ">
        <table class="col-12 table table-bordered" id="table">
            <thead>
            <tr style="max-height: 30px">
                <th style="width: 5px">#</th>
                <th style="width: 5px">public</th>
                <th style="width: 5px">edited</th>
                <th style="width: 5px">Author</th>
                <th>title</th>
                <th>Short description</th>
                <th>created_at</th>
                <th>updated_at</th>

                <th colspan="2" ></th>

            </tr>
            </thead>
            <tbody>
            <div class="admin_pagination">
            </div>
            <div >
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <th><?php echo e($post->id); ?></th>
                <th><?php echo $post->check_public(); ?></th>
                <th><?php echo $post->check_redact(); ?></th>
                <td><?php echo e($post->user()->first()->login); ?></td>
                <td><?php echo e($post->title); ?></td>
                <td style="max-height: 10px"><div class="box" style="max-height: 40px; "><p style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo e($post->short_description); ?></p></div></td>
                <td><?php echo e($post->created_at); ?></td>
                <td><?php echo e($post->updated_at); ?></td>
                <td><div ><a href="/admin/posts/edit/<?php echo e($post->id); ?>"><i class="fa fa-edit fa-2x edit" title="edit"></i></a></div></td>
                <td><div ><a href="/admin/posts/delete/<?php echo e($post->id); ?>"><i class="fas fa-trash fa-2x remove" title="remove"></i></a></div></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
            </tbody>
        </table>
        <div class="admin_pagination">

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminLayouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/first_mvc/views/post/display.blade.php ENDPATH**/ ?>