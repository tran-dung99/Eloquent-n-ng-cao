<a href="{{route('posts.create')}}">Create new Post</a>

<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>User</th>
        <th>Category</th>
        <th colspan=3">action</th>
    </tr>
    </thead>
    <tbody>

    @foreach($posts as $post)
        <tr>
{{--            {{dd($post->user)}}--}}
            <td>{{$post->id}} </td>
            <td>{{$post->title}}</td>
            <td>{{isset($post->user['name'])?$post->user['name']:"chua xac dinh"}}</td>
            <td>
                @foreach($post->categories as $category)
                    {{$category->name}},
                @endforeach
            </td>

            <td><a href="{{route('posts.detail',$post->id)}}">detail</a></td>
            <td><a href="{{route('posts.delete',$post->id)}}">delete</a></td>
            <td><a href="{{route('posts.formUpdate',$post->id)}}">update</a></td>
        </tr>
    @endforeach;
    </tbody>
</table>

