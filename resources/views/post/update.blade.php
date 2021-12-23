<form action="{{route('posts.update')}}" method="post">
    @csrf
    <input type="hidden" placeholder="Nhập title" name="id" value="{{$post->id}}">
    <input type="text" placeholder="Nhập title" name="title" value="{{$post->title}}">
    <input type="text" placeholder="Nhập content" name="content" value="{{$post->content}}">
    <input type="number" placeholder="Nhập user_id" name="user_id" value="{{$post->user_id}}">


    <hr>
    <h3>Category</h3>
    @foreach($categories as $category)
        <input type="checkbox" {{$post->checkCategory($category->id)?"checked":""}} name="category[]"
               value="{{$category->id}}">{{$category->name}} <br>
    @endforeach
    <button type="submit">Thêm</button>
    <a href="{{route('posts.index')}}">Quay lại</a>
</form>
