@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

{!! Form::open(
    array('action' => 'AdminModifyController@update')
    )
!!}
    {!! csrf_field() !!}
    <div>
        Kode
        <input type="text" name="kode" value="{{ $arsip->kode }}" readonly="readonly">
    </div>
    <div>
        Judul
        <input type="text" name="judul" value="{{ $arsip->judul }}">
    </div>
    <div>
        Tahun
        <input type="text" name="tahun" value="{{ $arsip->tahun }}">
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
        <input type="text" name="rakbuku" value="{{ $arsip->rakbuku }}">
    </div>
    <div>
        Deskripsi
        <input type="text" name="deskripsi" value="{{ $arsip->deskripsi }}">
    </div>
    <div>
        <button type="submit">Update</button>
    </div>
{!! Form::close() !!}
