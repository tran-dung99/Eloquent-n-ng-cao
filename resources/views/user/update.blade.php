<form action="{{route('users.update')}}" method="post">
    @csrf
    <input type="hidden" placeholder="Nhập tên user" name="id" value="{{$user->id}}">
    <input type="text" placeholder="Nhập tên user" name="name" value="{{$user->name}}">
    <input type="text" placeholder="Nhập email user" name="email" value="{{$user->email}}">
    <input type="password" placeholder="Nhập pass user" name="password" value="{{$user->password}}">
    <button type="submit">update</button>
</form>
