<html>
<h1>
    trang create
</h1>
<form method="POST" action="{{ url('/create')  }}">
    <label>ten phim</label><input type="text" name="ten_phim"><br>
    <label>gia tien</label><input type="text" name="gia_tien"><br>
    <input type="submit">
    @csrf
</form>

</html>