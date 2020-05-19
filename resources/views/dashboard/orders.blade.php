@extends('layouts.app')


@section('content')
 <div class="container">
     <table class="table table-bordered table-striped">
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
                    <td>{{ $order->status }}</td>
                    <td>{{ $order->paid }}</td>
                    <td>{{ $order->track_code }}</td>
                </tr>
           @endforeach
         </tbody>

     </table>
 </div>
@endsection
