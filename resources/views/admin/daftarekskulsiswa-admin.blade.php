@extends('layouts.main_admin')

@section('container')
    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Daftar
        Ekstrakurikuler yang Diambil </h1>
    </div>
    <div class="tablewali">
      <table class="table text-center table-bordered  mt-4"style="width:900px ;">
          <thead style="background-color: #748E63; color: #000;">
              <tr>
                  <th scope="col">No.</th>
                  <th scope="col">NAMA</th>
                  <th scope="col">EKSTRAKURIKULER</th>
                  <th scope="col">TAHUN AJARAN</th>
                  <th scope="col">SEMESTER</th>
                  <th scope="col">AKSI</th>
              </tr>
          </thead>

          <tbody>
              @foreach ($hasil as $item)
                  <tr>
                      <th scope="row">{{ $item->ID_Ekskul_Siswa }}</th>
                      <td>{{ $item->Nama_Siswa }}</td>
                      <td>{{ $item->Nama_Ekskul }}</td>
                      <td>{{ $item->Thn_Ajaran }}</td>
                      <td>{{ $item->Semester }}</td>
                      <td><a type="button" href="{{ url('admin/editekskulersiswa', $item->ID_Ekskul_Siswa) }}"
                              class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
@endsection
