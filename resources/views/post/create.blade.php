<form action="{{route('posts.store')}}" method="post">
    @csrf
    <input type="text" placeholder="Nhập title" name="title">
    <input type="text" placeholder="Nhập content" name="content">
    <input type="number" placeholder="Nhập user_id" name="user_id" value="1">


<hr>
<h3>Category</h3>
@foreach($categories as $category)
    <input type="checkbox" name="category[]" value="{{$category->id}}">{{$category->name}} <br>
@endforeach
<button type="submit">Thêm</button>
<a href="{{route('posts.index')}}">Quay lại</a>
</form>
