<html>

<body>
    <table>
        <thead>
            <tr>
                <th>
                    ten phim
                </th>
                <th>
                    gia tien
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($thai as $phim)
            <tr>
                <td>{{$phim->ten_phim }}</td>
                <td>{{$phim->gia_tien }}</td>
                <!-- <td>{{ $phim->gia_tien }}</td> -->
                <!-- <td>
                <a href="findPhim/{{ $phim->id }}">Update</a>
            </td>
            <td>
                <a href="deletePhim/{{ $phim->id }}">Delete</a>
            </td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>