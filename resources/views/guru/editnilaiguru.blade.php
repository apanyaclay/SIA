@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->

    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT NILAI
    </h1>
    </div>

    <div class="tablewali">
        <form action="{{route('editnilaiPost')}}" method="POST">
          @csrf
          @foreach ($nilai as $item)
          <div class="form-group">
              <label for="id">NILAI ID:</label>
              <input type="text" class="form-control" id="id" name="id" value="{{$kode}}" readonly>
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
        <input type="number" class="form-control" id="np" name="np" required value="{{$item->Nilai_Pengetahuan}}">
      </div>
      <div class="form-group">
        <label for="nk">NILAI KETERAMPILAN:</label>
        <input type="number" class="form-control" id="nk" name="nk" required value="{{$item->Nilai_Keterampilan}}">
      </div>
      <button type="submit" class="btn btn-warning">Edit Nilai</button>
      @endforeach
        </form>
    </div>
@endsection
