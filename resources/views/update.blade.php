<html>
<h1>
    view update
</h1>
<form method="POST" action="{{ url('update/'. $phim->id)}}">
    @csrf
    @method('PUT')
    <label>Ten phim</label> <input name="ten_phim" value=" {{ $phim->ten_phim }}"><br>
    <label>Gia tien</label> <input name="gia_tien" value="{{ $phim->gia_tien }}"><br>
    <input type="submit">

</form>

</html>