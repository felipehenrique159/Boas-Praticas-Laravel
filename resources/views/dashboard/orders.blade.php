@extends('layouts.app')


@section('content')
 <div class="container">

    <div>
    <a class="btn btn-warning" href="{{route('orders.index' , ['status' => 'pending'])}}">Pedidos pendentes</a>
    <a class="btn btn-primary" href="{{route('orders.index', ['status' => 'delivered'])}}">Pedidos enviados</a>
    <a class="btn btn-success" href="{{route('orders.index' , ['paid' => '1'])}}">Pedidos pagos</a>
    <a class="btn btn-light" href="{{route('orders.index')}}">Limpar Filtros</a>

    </div>

     <table class="table table-bordered table-striped my-3">
         <thead>
             <th>#</th>
             <th>Status</th>
             <th>Paga</th>
             <th>Código de entrega</th>
         </thead>

         <tbody>
           @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->status == 'delivered' ? 'Enviado' : 'Envio Pendente'}}</td>
                    <td>{{ $order->paid == true ? 'Pago' : 'Em aberto' }}</td>
                    <td>{{ $order->track_code }}</td>
                </tr>
           @endforeach
         </tbody>

     </table>
 </div>
@endsection
