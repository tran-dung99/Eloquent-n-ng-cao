<a href="{{route('users.create')}}">Create new User</a>
<table border="1px">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th colspan="3">action</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
   @foreach($users as $user)
        <tr>
            <td>{{$user->id}} </td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><a href="{{route('users.detail',$user->id)}}">detail</a></td>
            <td><a href="{{route('users.delete',$user->id)}}">delete</a></td>
            <td><a href="{{route('users.formUpdate',$user->id)}}">update</a></td>
        </tr>
        @endforeach;
    </tbody>
</table>
