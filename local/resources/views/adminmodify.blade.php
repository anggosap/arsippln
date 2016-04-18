<a href="{{ action('AdminCreateController@index') }}">Create Arsip</a>
<a href="{{ action('AdminModifyController@index') }}">Modify Arsip</a>
<!-- ------------------------------------------------------------------------------------ -->

<h1>TABLE ARSIP PLN</h1>

<table border="1">
    <tr>
        <td><b>Kode</b></td>
        <td><b>Judul</b></td>
        <td><b>Tahun</b></td>
        <td><b>Kategori</b></td>
        <td><b>Rak Buku</b></td>
        <td><b>Deskripsi</b></td>
        <td><b>Action</b></td>
    </tr>
    @if (count($arsips))
        @foreach($arsips as $arsip)
            <tr>
                <td>{{ $arsip->kode }}</td>
                <td>{{ $arsip->judul }}</td>
                <td>{{ $arsip->tahun }}</td>
                <td>{{ $arsip->kategori }}</td>
                <td>{{ $arsip->rakbuku }}</td>
                <td>{{ $arsip->deskripsi }}</td>
                <td>
                	<a href="{{ action('AdminModifyController@show', $arsip->kode) }}">Update</a>
                	<a href="{{ action('AdminModifyController@delete', $arsip->kode) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
</table>

<!-- ------------------------------------------------------------------------------------ -->

<h1>TABLE KATEGORI PLN</h1>

<table border="1">
    <tr>
        <td><b>Kategori</b></td>
        <td><b>Action</b></td>
    </tr>
    @if (count($kategoris))
        @foreach($kategoris as $kategori)
            <tr>
                <td>{{ $kategori->nama_kategori }}</td>
                <td>
                	<a href="{{ action('AdminModifyController@deletekategori', $kategori->id_kategori) }}">Delete</a>
                </td>
            </tr>
        @endforeach
    @endif
</table>


