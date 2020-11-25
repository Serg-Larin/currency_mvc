<?php $__env->startSection('content'); ?>
    <main role="main" class="container text-center">
        <div class="row" style="margin-bottom: 50px">
            <div class="col-4"></div>
        <div id="accordion" class="col-4">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Настройки
                        </button>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <div class="table-responsive">
                            <form id="update_settings_form">
                                <table class="table table-striped table-sm">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Валюта</th>
                                        <th>Наличие</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $__currentLoopData = $currencies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $currency): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($currency->id); ?></td>
                                            <td><?php echo e($currency->name); ?></td>
                                            <td><input type="checkbox" name="<?php echo e($currency->name); ?>" <?php if($currency->available): ?> checked <?php endif; ?>></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary" id="update_settings_button">Сохранить</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="col-4"></div>
        </div>



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
    </main>

    <script src="/js/settings.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/currency_mvc/views/settings.blade.php ENDPATH**/ ?>