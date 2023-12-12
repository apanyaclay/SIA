@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->

    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT RAPOR
    </h1>
    </div>

    <div class="tablewali">
        <form action="{{ route('editraporsiswaPost') }}" method="POST">
            @csrf
            @foreach ($rapor as $item)
            <div class="form-group">
                <label for="id" hidden>ID</label>
                <input type="text" class="form-control" id="id" name="id" value="{{ $item->ID_Rapor }}" hidden>
            </div>
            <div class="form-group">
              <label for="nis">NISN:</label>
              <input type="text" class="form-control" id="nis" name="nis" value="{{ $kode }}" readonly>
          </div>
            <div class="form-group">
                <label for="sk_spr">SIKAP SPIRITUAL:</label>
                <input type="text" class="form-control" id="sk_spr" name="sk_spr" required value="{{ $item->Sikap_Spiritual }}">
            </div>
            <div class="form-group">
                <label for="des_spr">DESKRIPSI SPIRITUAL:</label>
                <input type="text" class="form-control" id="des_spr" name="des_spr" required value="{{ $item->Deskrip_Spiritual }}">
            </div>
            <div class="form-group">
                <label for="sk_sos">SIKAP SOSIAL:</label>
                <input type="text" class="form-control" id="sk_sos" name="sk_sos" required value="{{ $item->Sikap_Sosial }}">
            </div>
            <div class="form-group">
              <label for="des_sos">DESKRIPSI SOSIAL:</label>
              <input type="text" class="form-control" id="des_sos" name="des_sos" required value="{{ $item->Deskrip_Sosial }}">
          </div>
            @endforeach
            <button type="submit" class="btn btn-warning">Edit Rapor</button>
        </form>
    </div>
@endsection
