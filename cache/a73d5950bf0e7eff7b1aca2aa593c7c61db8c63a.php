<?php $__env->startSection('content'); ?>
    <main role="main" class="container">
        <div class="starter-template text-center">
            <?php if(count($historyOrders)<=0): ?>
                <h1>Записей нет</h1>
            <?php else: ?>
            <h1>Последние 5 записей</h1>
            <div class="table-responsive">
                <table class="table table-striped table-sm">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Главная валюта</th>
                        <th>Валюта обмена</th>
                        <th>Главная сумма</th>
                        <th>Сумма обмена</th>
                        <th>Дата</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $historyOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($order->id); ?></td>
                        <td><?php echo e($order->from_currency); ?></td>
                        <td><?php echo e($order->to_currency); ?></td>
                        <td><?php echo e($order->exchange_sum); ?></td>
                        <td><?php echo e($order->final_sum); ?></td>
                        <td><?php echo e($order->created_at); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/currency_mvc_final/currency_mvc/views/history.blade.php ENDPATH**/ ?>