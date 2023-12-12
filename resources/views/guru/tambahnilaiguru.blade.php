@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->

    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH NILAI
    </h1>
    </div>

    <div class="tablewali">
        <form action="{{route('tambahnilaiPost')}}" method="POST">
          @csrf
            <div class="form-group">
                <label for="nis">NISN:</label>
                <input type="text" class="form-control" id="nis" name="nis" value="{{$kode}}" readonly>
            </div>
            <div class="form-group">
                <label for="kode">KODE MAPEL:</label>
                <input type="text" class="form-control" id="kode" name="kode" value="{{$mapel[0]->Kode_Mapel}}" readonly>
            </div>
            <div class="form-group">
              <label for="ta">TAHUN AJARAN:</label>
              <select name="ta" id="ta" class="form-control">
                <option value="">-- Silahkan Pilih --</option>
                @foreach ($ta as $item)
                    <option value="{{$item->ID_Thn_Ajaran}}">{{$item->Thn_Ajaran}} - {{$item->Semester}}</option>
                @endforeach
              </select>
          </div>
          <div class="form-group">
            <label for="jenis">JENIS:</label>
            <select name="jenis" id="jenis" class="form-control">
              <option value="">-- Silahkan Pilih --</option>
              <option value="F1">F1</option>
              <option value="F2">F2</option>
              <option value="F3">F3</option>
              <option value="UTS">UTS</option>
              <option value="UAS">UAS</option>
            </select>
        </div>
        <div class="form-group">
          <label for="np">NILAI PENGETAHUAN:</label>
          <input type="number" class="form-control" id="np" name="np" required>
        </div>
        <div class="form-group">
          <label for="nk">NILAI KETERAMPILAN:</label>
          <input type="number" class="form-control" id="nk" name="nk" required>
        </div>
            <button type="submit" class="btn btn-warning">Tambah Nilai</button>
        </form>
    </div>
@endsection
