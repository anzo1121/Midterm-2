<form method="post" action="{{route("post.login")}}">
    @csrf

        <label>Username</label><br>
        <input type="text" name="name"><br><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <button type="submit">Login</button>
    </div>
</form>
