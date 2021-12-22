<form action="/users/store" method="post">
    @csrf
    <input type="text" placeholder="Nhập tên user" name="name">
    <input type="text" placeholder="Nhập email user" name="email">
    <input type="password" placeholder="Nhập pass user" name="password">
    <button type="submit">Add</button>
</form>
