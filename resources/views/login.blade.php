<h1>Login</h1>
<div>
    <form action="{{route('login')}}" method="post">
    @csrf
    <input type="radio" name="role" value="admin"> admin <br>
    <input type="radio" name="role" value="user"> user <br>
    <button type="submit">Login</button>
    </form>
</div>
