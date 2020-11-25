@extends('layouts')
@section('content')
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

                                    @foreach($currencies as $currency)
                                        <tr>
                                            <td>{{$currency->id}}</td>
                                            <td>{{$currency->name}}</td>
                                            <td><input type="checkbox" name="{{$currency->name}}" @if($currency->available) checked @endif></td>
                                        </tr>
                                    @endforeach
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
                @foreach($historyOrders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->from_currency}}</td>
                        <td>{{$order->to_currency}}</td>
                        <td>{{$order->exchange_sum}}</td>
                        <td>{{$order->final_sum}}</td>
                        <td>{{$order->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </main>

    <script src="/js/settings.js"></script>
@endsection
