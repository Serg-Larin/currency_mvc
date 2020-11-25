<?php $__env->startSection('content'); ?>
<main role="main" class="container">

    <div class="starter-template text-center">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4" style="
    background-color: white;
    height: 300px;
    border-radius: 10px;
    -webkit-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.75);
    ">
                <h2><b>Обмен</b></h2>
                <div style="height: 50px;"><h3 id="result"></h3></div>
                <div class="row">
                    <!--                    <div class="form-group">-->
                    <div class="col-12" style="margin-bottom: 20px">
                        <input class="form-control" type="text" id="input_from" placeholder="Сумма" >
                    </div>
                    <!--                    </div>-->
                    <div class="col-6">
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Главная валюта</label>
                            <select class="form-control" id="from">
                            </select>
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Обменная валюта</label>
                            <select class="form-control" id="to">
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mb-2" id="exchange">Exchange</button>
            </div>
            <div class="col-4"></div>
        </div>
    </div>

</main>
<script src="/js/calc.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/currency_mvc_final/currency_mvc/views/calc.blade.php ENDPATH**/ ?>