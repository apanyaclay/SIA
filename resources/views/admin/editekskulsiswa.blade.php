@extends('layouts.main_admin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800"
    style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT
    EKSTRAKURIKULER</h1>
</div>
<br>
<div class="tablewali">
    <form action="{{ route('editekskulersiswaPost') }}" method="POST">
        @csrf
        @foreach ($hasil as $item)
            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode"
                    value="{{ $item->ID_Ekskul_Siswa }}" readonly>
            </div>
            <div class="form-group">
                <label for="nama">NAMA</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $item->Nama_Siswa }}"
                    readonly>
            </div>
            <div class="form-group">
                <label for="ekskul">Ekstrakurikuler</label>
                <select class="form-control" name="ekskul" id="ekskul">
                    <option value="" disabled selected>Silahkan Pilih</option>
                    @foreach ($data as $item)
                        <option value="{{ $item->Kode_Ekskul }}">{{ $item->Nama_Ekskul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="tahun">Tahun Ajaran - Semester</label>
                <select name="tahun" id="tahun" class="form-control">
                    <option value="" disabled selected>Silahkan Pilih</option>
                    @foreach ($tahun as $items)
                        <option value="{{ $items->ID_Thn_Ajaran }}">{{ $items->Thn_Ajaran }} - {{ $items->Semester }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-warning">Edit</button>
</div>
@endforeach
</form>
</div>
@endsection
