<html>
<a href="returnCreate">Create</a>
<table>
    <thead>
        <tr>
            <th>
                ten phim
            </th>
            <th>
                gia tien
            </th>
            <th>
                action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach($thai as $phim)
        <tr>
            <td>{{$phim->ten_phim }}</td>
            <td>{{$phim->gia_tien }}</td>
            <!-- <td>{{ $phim->gia_tien }}</td> -->
            <td>
                <a href="returnViewUpdate/{{$phim->id}}">Update</a>
            </td>
            <td>
                <a href="delete/{{$phim->id}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</body>

</html>