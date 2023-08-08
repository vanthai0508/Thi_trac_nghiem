<html>
<h1> WELCOME</h1><a href="returnCreate"></a>
<table>
    <thead>
        <tr>
            <th>STT</th>
            <th>Ten phim</th>
            <th>Gia tien</th>
            <!-- <th>Update</th>
            <th>Delete</th> -->
        </tr>
    </thead>
    <tbody>
        @foreach($list as $key => $phim)
        <tr>
            <td>{{ $key }}</td>
            <td>{{ $phim->ten_phim }}</td>
            <td>{{ $phim->gia_tien }}</td>
            <!-- <td>
                <a href="findPhim/{{ $phim->id }}">Update</a>
            </td>
            <td>
                <a href="deletePhim/{{ $phim->id }}">Delete</a>
            </td> -->
        </tr>
        @endforeach

    </tbody>

</html>