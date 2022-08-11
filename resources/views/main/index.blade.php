<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="{{route('create')}}">Create</a>

    <table>
        <thead>
            <tr>
                <th>Executor</th>
                <th>Status</th>
                <th>Category</th>
                <th>Description</th>
                <th>Decision Date</th>
            </tr>
        </thead>
        <tbody>
{{--            @foreach($applications as $application)--}}
            <tr>
{{--                <td>{{$applications}}</td>--}}
{{--                <td>{{$application->status_id}}</td>--}}
{{--                <td>{{$application->category_id}}</td>--}}
{{--                <td>{{$application->description}}</td>--}}
{{--                <td>{{$application->decision_date}}</td>--}}
            </tr>
{{--            @endforeach--}}
        </tbody>
    </table>
</body>
</html>
