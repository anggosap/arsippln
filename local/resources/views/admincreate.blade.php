<a href="{{ action('AdminCreateController@index') }}">Create Arsip</a>
<a href="{{ action('AdminModifyController@index') }}">Modify Arsip</a>

@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<!-- ------------------------------------------------------------------------------------ -->

<h1>INSERT BUKU</h1>
{!! Form::open(
    array('action' => 'AdminCreateController@createbuku')
    )
!!}
    {!! csrf_field() !!}
    <div>
        Kode
        <input type="text" name="kode" value="">
    </div>
    <div>
        Judul
        <input type="text" name="judul" value="">
    </div>
    <div>
        Tahun
        <input type="text" name="tahun" value="">
    </div>
    <div>
        Kategori
        <select name="kategori">
            @if (count($kategoris))
                @foreach($kategoris as $kategori)
                <option value="{{ $kategori->nama_kategori }}">{{ $kategori->nama_kategori }}</option>
                @endforeach
            @endif
        </select>
    </div>
    <div>
        Rak Buku
        <input type="text" name="rakbuku" value="">
    </div>
    <div>
        Deskripsi
        <input type="text" name="deskripsi" value="">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
{!! Form::close() !!}

<!-- ------------------------------------------------------------------------------------ -->

<h1>INSERT KATEGORI</h1>
{!! Form::open(
    array('action' => 'AdminCreateController@createkategori')
    )
!!}
    {!! csrf_field() !!}
    <div>
        Kategori
        <input type="text" name="nama_kategori" value="">
    </div>
    <div>
        <button type="submit">Submit</button>
    </div>
{!! Form::close() !!}

<!-- ------------------------------------------------------------------------------------ -->