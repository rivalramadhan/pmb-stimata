<!DOCTYPE html>
<html>
<head>
    <title>Test Result List</title>
</head>
<body>
    <h1>Test Result</h1>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Full Name</th>
                <th>study program</th>
                <th>enrollment path</th>
                <th>status</th>
                <th>Notes</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($testresults as $test_result)
                <tr>
                    <td>{{ $test_result->id }}</td>
                    <td>{{ $test_result->fullname }}</td>
                    <td>{{ $test_result->study_program}}</td>
                    <td>{{ $test_result->test_date }}</td>
                    <td>{{ $test_result->test_score }}</td>
                    <td>{{ $test_result->status }}</td>
                    <td>{{ $test_result->notes }}</td>
                    <td>{{ $test_result->created_at }}</td>
                    <td>{{ $test_result->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>