@extends('layout')

@section('content')
    <h1>Test</h1>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">All Order Items</h3>
        </div>
        <div class="panel-body">
            <table class="table table-striped">
                <thead>
                <th>Order No.</th>
                <th>Order Item Name</th>
                <th>Order Item Price</th>
                <th>User</th>
                <th>User Email</th>
                </thead>
                <tbody>
                @foreach($orderItems as $orderItem )
                    <tr>
                        <td>{{ $orderItem->id }}</td>
                        <td>{{ $orderItem->name }}</td>
                        <td>${{ number_format($orderItem->price, 2) }}</td>
                        <td>{{ $orderItem->user->name }}</td>
                        <td>{{ $orderItem->user->email }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{ $orderItems->links() }}
            </div>
        </div>
        <div class="panel-footer">
            <a class="btn btn-primary" href="{{ URL::to('download') }}" role="button">
                <span class="glyphicon glyphicon-download-alt" aria-hidden="true"></span> Download
            </a>
        </div>
    </div>
@stop
