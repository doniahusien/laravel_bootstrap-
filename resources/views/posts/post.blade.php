@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body >
    <h1>{{$post->title}}</h1>
    <ul class="list-group">
    <li class="list-group-item"> {{$post->id}}</li>
        <li class="list-group-item">{{$post->body}}</li>
        <!--<li class="list-group-item">Created by: {{ $post['created_at'] }}</li>-->

    </ul>

    <br><br>
    <a href="/posts/create" class="btn btn-primary">Register</a>
    
</body>
</html>



@endsection