<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<a href="{{route('poll-types.create')}}">Create</a>

<p>PollTypes</p>

<table>
    <tbody>
    <tr>
        <td><strong>Id</strong></td>
        <td>Name</td>
        <td>Description</td>
        <td>Status</td>
    </tr
    @foreach($pollTypes as $pollType)
        <tr>
            <td>{{$pollType->id}}</td>
            <td>{{$pollType->name}}</td>
            <td>{{$pollType->description}}</td>
            <td>{{$pollType->status}}</td>
            <td>
                <a href="{{route('poll-types.edit', ['id'=> $pollType->id,]
)}}">{{route('poll-types.edit', ['id'=> $pollType->id,])}}
                </a></td>
        </tr>
    @endforeach
    </tbody>
</table>

</body>
</html>
