<!DOCTYPE html>
<html>
<head>
    <title>Payment Report List</title>
</head>
<body>
    <h1>Payment List</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>Ammount</th>
                <th>Image</th>
                <th>Status</th>
                <th>Notes</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($payments as $payment)
                <tr>
                    <td>{{ $payment->id }}</td>
                    <td>{{ $payment->fullname }}</td>
                    <td>{{ $payment->amount}}</td>
                    <td>{{ $payment->image_path }}</td>
                    <td>{{ $payment->status }}</td>
                    <td>{{ $payment->notes }}</td>
                    <td>{{ $payment->created_at }}</td>
                    <td>{{ $payment->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>