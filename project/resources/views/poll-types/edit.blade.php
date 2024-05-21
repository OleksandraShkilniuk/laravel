<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
</head>
<body>
<a href="{{ route('poll-types.index') }}">List</a>
<h1>Edit Page</h1>

<form action="{{ route('poll-types.update', $pollType->id) }}" method="POST">
    @csrf

    <label for="name">Name</label>
    <input type="text" id="name" name="name" value="{{$pollType->name}}">

    <button type="submit">Submit</button>
</form>
</body>
</html>
