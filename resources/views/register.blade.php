<html>
<h1>Register</h1>

<form method="POST" action="{{ url('/register')  }}">
    <label>TEN</label><input type="text" name="name"><br>
    <label>EMAIL</label><input type="text" name="email"><br>
    <label>PASS</label><input type="text" name="password"><br>
    <input type="submit">
    @csrf
</form>

</html>