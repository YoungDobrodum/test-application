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
ttt
<form action="{{route('store')}}" method="GET">
    @csrf
    <select name="executor">
        @foreach($applications as $application)
            <option value="{{$application->id}}"
                {{$application->id == old('executor') ? 'selected' : ''}}
            >{{$state->title}}</option>
        @endforeach
    </select>
    <select name="category_id">
        @foreach($categories as $category)
            <option value="{{$category->id}}"
                {{$category->id == old('category_id') ? 'selected' : ''}}
            >{{$category->title}}</option>
        @endforeach
    </select>
    <select name="status_id">
        @foreach($states as $state)
            <option value="{{$state->id}}"
                {{$state->id == old('status_id') ? 'selected' : ''}}
            >{{$state->title}}</option>
        @endforeach
    </select>
    <input type="text" name="description" placeholder="description">
    <button type="submit"></button>
</form>
</body>
</html>
