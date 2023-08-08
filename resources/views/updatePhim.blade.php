<html>
<h1>
    Update phim
</h1>
<form name="update" method="POST" action="{{ url('updatePhim/'.$phim->id)}}">
    @csrf
    @method('PUT')
    <label>
        Ten phim
    </label>
    <input type="text" name="ten_phim" value="{{ $phim->ten_phim }}"><br>
    <label>
        Gia tien
    </label>
    <input type="text" name="gia_tien" value="{{ $phim->gia_tien }}"><br>
    <input type="submit" name="update3">
</form>

</html>