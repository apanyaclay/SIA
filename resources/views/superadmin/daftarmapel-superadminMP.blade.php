@extends('layouts.main_superadmin')

@section('container')
    <div class="edit text-sm-end"><a type="button" class="btn btn-secondary mt-3 mb-3" href="{{ route('tambahmapel') }}"><i
                class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah Mata Pelajaran</a></div>

    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR MATA
        PELAJARAN KELAS (XA) </h1>
    </div>
    <div class="tablewali">
        <table class="table text-center table-bordered  mt-4"style="width:900px ;">
            <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th scope="col">No.</th>
                    <th scope="col">KODE</th>
                    <th scope="col">MATA PELAJARAN</th>
                    <th scope="col">KKM</th>
                    <th scope="col">GURU</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>

            <tbody>
                @for ($i = 0; $i < count($hasil); $i++)
                    <tr>
                        <th scope="row">{{ $i+1 }}</th>
                        <td>{{ $hasil[$i]->Kode_Mapel }}</td>
                        <td>{{ $hasil[$i]->Nama_Mapel }}</td>
                        <td>{{ $hasil[$i]->KKM }}</td>
                        <td>{{ $hasil[$i]->Nama_Guru }}</td>
                        <td><a type="button" href="" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-ekskulid="{{ $hasil[$i]->Kode_Mapel }}"><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>

                    </tr>
                @endfor
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus Daftar Ekstrakurikuler</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Apakah Anda Yakin Ingin Menghapus ?</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning" id="hapusButton" data-bs-dismiss="modal">Hapus</button>
            </div>
          </div>
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  
      <script>
          $(document).ready(function() {
              // Menangkap ID ekstrakurikuler saat tombol hapus diklik
              $('.btn-warning[data-bs-target="#exampleModal"]').click(function() {
                  var ekskulId = $(this).data('ekskulid');
                  $('#hapusButton').attr('data-ekskulid', ekskulId);
              });
      
              // Mengirimkan permintaan hapus ketika tombol Hapus diklik di dalam modal
              $('#hapusButton').click(function() {
                  var ekskulId = $(this).data('ekskulid');
                  window.location.href = '/superadmin/deletemapel/' + ekskulId;
              });
          });
      </script>
@endsection
