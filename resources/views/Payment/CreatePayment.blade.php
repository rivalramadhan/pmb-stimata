<!DOCTYPE html>
<html>
<head>
    <title>Create Payment</title>
</head>
<body>
    <h1>Create Payment</h1>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('payments.store') }}" method="POST">
        @csrf
        <div>
            <label for="fullname">Full Name:</label>
            <input type="text" id="fullname" name="fullname" value="{{ old('fullname') }}" required>
        </div>
        <div>
            <label for="amount">Amount:</label>
            <input type="number" id="amount" name="amount" value="{{ old('amount') }}" required>
        </div>
        <div>
            <label for="status">Status:</label>
            <input type="text" id="status" name="status" value="{{ old('status') }}">
        </div>
        <div>
            <label for="notes">Notes:</label>
            <input type="notes" id="notes" name="notes" required>
        </div>
        <div>
            <label for="image_path">Image path</label>
            <input type="image_path" id="image_path" name="image_path" required>
        </div>
        <div>
            <button type="submit">Create data</button>
        </div>
    </form>
</body>
</html>