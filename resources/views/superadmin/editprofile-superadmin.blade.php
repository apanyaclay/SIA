@extends('layouts.main_superadmin')
@include('sweetalert::alert')
@section('container')
          <!-- Page Heading -->
          <div class="isi ">
            <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT  &nbsp;  PROFILE</h1></div>
                           
            <div class="informasi py-3 px-3">
              
               <form action="{{route('editprofilePost')}}" method="POST">
                @csrf
                   <table class="table  mt-4">
                            @foreach ($kepala_sekolah as $item)
                            <tr>
                                <th>NUPTK</th>
                                <td><input type="text" name="nuptk" value="{{$item->ID_Kepsek}}" readonly></td>
                            </tr>
                            <tr>
                               <th>Nama</th>
                               <td><input type="text" name="nama" value="{{$item->Nama_Kepsek}}"></td>
                           </tr>                 
                           <tr>
                               <th>Jenis Kelamin</th>
                               <td><input type="text" name="jenis_kelamin" value="{{$item->Jenis_Kelamin}}"></td>
                           </tr>               
                           <tr>
                               <th>TMT Kerja</th>
                               <td><input type="text" name="tmt_kerja" value="{{$item->TMT_Kerja}}"></td>
                           </tr>
                           <tr>
                               <th>Tempat Lahir</th>
                               <td><input type="text" name="tempat_lahir" value="{{$item->Tempat_Lahir}}"></td>
                           </tr>
                           <tr>
                               <th>Tanggal Lahir</th>
                               <td><input type="date" name="tanggal_lahir" value="{{$item->Tanggal_Lahir}}"></td>
                           </tr>
                           <tr>
                               <th>Jenjang Pendidikan</th>
                               <td><input type="text" name="jenjang_pendidikan" value="{{$item->Jenjang_Pendidikan}}"></td>
                           </tr><tr>
                               <th>Status</th>
                               <td><input type="text" name="status" value="{{$item->Status}}"></td>
                           </tr>
                            @endforeach
                    </table>
                    <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
               </form>
           
              
               

       </div>
@endsection