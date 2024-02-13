@php
$no = 1;
$judul = ['No', 'Nama', 'Alamat'];
@endphp
<h3 align="center">Daftar Mahasantri</h3>
<table border="1" align="center" cellpadding="10">
<thead>
        <tr>
            @foreach($judul as $jdl)
                <th>{{ $jdl }}</th>
            @Endforeach
        </tr>
    </thead>
<tbody>
   
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $mhs1 }}</td>
            <td>{{ $asal1 }}</td>
        </tr>
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $mhs2 }}</td>
            <td>{{ $asal2 }}</td>
        </tr>
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $mhs3 }}</td>
            <td>{{ $asal3 }}</td>
        </tr>
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $mhs4 }}</td>
            <td>{{ $asal4 }}</td>
        </tr>  
        <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $mhs5 }}</td>
            <td>{{ $asal5 }}</td>
        </tr>   
    </tbody>
</table>