@extends('layouts.main_superadmin')

@section('container')
  <!-- Page Heading -->
  <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR SISWA KELAS (X-Y)</h1></div>
  <div class="tablewali">
     <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
       <thead style="background-color: #748E63; color: #000;" >
         <tr>
           <th scope="col">No.</th>
           <th scope="col">NAMA</th>
           <th scope="col">NISN</th>
           <th scope="col">AKSI</th>
         </tr>
       </thead>     
       <tbody >
         <tr>
           <th scope="row">1</th>
           <td>Kairi hbvibrevbi</td>
           <td>21123356</td>
         <td><a type="button" href="/editraporsiswa-superadmin"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>Edit Rapor </a></td>       
  </tr>
  
  <!-- baris kedua -->
  <tr>
     <th scope="row">2, dst</th>
     <td>Kairi hbvibrevbi</td>
     <td>21123356</td>
     <td><a type="button" href="/editraporsiswa-superadmin"  class="btn btn-warning"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>Edit Rapor </a></td>        
  </tr>    
  
       </tbody>
     </table>
     </div> 

@endsection