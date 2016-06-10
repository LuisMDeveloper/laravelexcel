<table>
    <tr>
        <td>Order No.</td>
        <td>Order Item Name</td>
        <td>Order Item Price</td>
        <td>User</td>
        <td>User Email</td>
    </tr>
    @foreach($orderItems as $orderItem )
        <tr>
            <td>{{ $orderItem->id }}</td>
            <td>{{ $orderItem->name }}</td>
            <td>${{ number_format($orderItem->price, 2) }}</td>
            <td>{{ $orderItem->user->name }}</td>
            <td>{{ $orderItem->user->email }}</td>
        </tr>
    @endforeach
</table>

