@extends('layouts.app')

@section('content')
<center>

    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>

    <body>

        <table class="table table-light table-striped">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>body</th>
                <th>addded by</th>
                
                <th colspan="3"></th>
            </tr>
            @foreach ($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->body }}</td>
                <td>{{ $post->user->name }}</td>
                <!--<td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>-->
                <td><a href="/posts/{{$post['id']}}" class="btn btn-primary">View</a></td>
                <td><a href="/posts/{{$post['id']}}/edit" class="btn btn-success">edit</a></td>
                
                <td>
                    <form action="/posts/{{$post['id']}}" method="post">
                        @method("delete")
                        @csrf
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                </td>
            </tr>

            @endforeach
        </table>
       
        <a href="/posts/create" class="btn btn-dark">create post</a>
</center>



</body>
@endsection