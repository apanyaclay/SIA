@extends('layouts.main_admin')

@section('container')
    <div class="edit text-sm-end"><a type="button" class="btn btn-secondary mt-3 mb-3" href="{{ route('tambahkelas') }}"><i
                class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah Kelas</a></div>

    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR KELAS
    </h1>
    </div>

    <div class="tablewali">
        <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
            <thead style="background-color: #748E63; color: #000;" >
              <tr>
                <th scope="col">KODE KELAS</th>
                <th scope="col">NAMA KELAS</th>
                <th scope="col">DETAIL</th>
              </tr>
            </thead>
            <tbody >
             @foreach ($hasil as $item)
             <tr>
               <th scope="row">{{$item->ID_Kelas}}</th>
               <td>{{$item->Nama_Kelas}}</td>
               <td><a type="button"  href="{{url('admin/listsiswa', $item->ID_Kelas)}}"  class="btn btn-warning">Lihat Jadwal</a></td>
             </tr>
           @endforeach
            </tbody>
          </table>
    </div>
@endsection
