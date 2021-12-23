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
<a href="{{route('posts.index')}}">Quay lại</a>
<h1>{{$post->title}}</h1>
<p>{{$post->user['name']}}</p>
<p>{{$post->content}}</p>
<hr>
<h3>Thông tin user</h3>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>email</th>
        <th>password</th>
        <th>Thể loại </th>
    </tr>
    </thead>

        <tr>
            <td>{{$post->user['id']}} </td>
            <td>{{$post->user['name']}}</td>
            <td>{{$post->user['email']}}</td>
            <td>{{$post->user['password']}}</td>
            <td>
                @foreach($post->categories as $category)
                    {{$category->name}},
                @endforeach
            </td>
        </tr>

    </tbody>
</table>
</body>
</html>
