@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR SISWA KELAS (X)</h1></div>
    <div class="tablewali">
       <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
         <thead style="background-color: #748E63; color: #000;" >
           <tr>
             <th scope="col">No.</th>
             <th scope="col">NAMA</th>
             <th scope="col">AKSI</th>
           </tr>
         </thead>
         
         <tbody >
           <tr>
             <th scope="row">1</th>
             <td>Kairi hbvibrevbi</td>
             <td><a type="button"  href="{{route('tambahnilai')}}"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>  Tambah Nilai</a>
           </td>
           </tr>
           <tr>
             <th scope="row">2</th>
             <td>Kiboy hbdiirrbiv </td>
             <td><a type="button" href="{{route('tambahnilai')}}"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>  Tambah Nilai</a></td>
           </tr>
           <tr>
             <th scope="row">2</th>
             <td>Calvin candrawinata</td>
             <th scope="row"><a type="button" href="{{route('tambahnilai')}}" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>  Tambah Nilai</a></th>
           </tr>
           <tr>
               <th scope="row">dst</th> <!--dengan looping-->
               <td>Calvin candrawinata</td>
               <th scope="row"><a type="button" href="{{route('tambahnilai')}}" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>  Tambah Nilai</a></th>
             </tr>
         </tbody>
       </table>
       </div> 

@endsection