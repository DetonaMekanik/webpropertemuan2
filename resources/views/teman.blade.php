<div class="container">

<a href="./">Home</a>
<a href="{{route('Ambadre') }}">Teman</a>

<div>
<div class="container">
    <h3>Data Teman/<h3>

    @if(empty($dt))
        <p>tidak ada data</p>

    @else
   <table border = "1" >
            <tr>
                <td>ID Nama</td>
                <td>Nama Teman</td>
                <td>Alamat</td>
                <td>Kota</td>
                <td>Telp</td>
            </tr>
        
        @foreach($dt as $d)
            <tr>
                <td>{{$d['idteman']}}</td>
                <td>{{$d['namateman']}}</td>
                <td>Alice</td>
                <td>Jl. Mawar No. 10</td>
                <td>Bandung</td>
                <td>08123456789</td>
</tr>       
@endforeach
</table>
@endif
</div>
