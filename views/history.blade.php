@extends('layouts')
@section('content')
    <main role="main" class="container">
        <div class="starter-template text-center">
            @if(count($historyOrders)<=0)
                <h1>Записей нет</h1>
            @else
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
            @endif
        </div>
    </main>
@endsection
