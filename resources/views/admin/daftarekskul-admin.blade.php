@extends('layouts.main_admin')

@section('container')

      <!-- Page Heading -->
<div class="edit text-sm-end"><a href="{{route('tambahekskul')}}" type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah  Ekstrakurikuler</a></div>
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR EKSTRAKURIKULER </h1></div>
<div class="tablewali">
   <table  class="table text-center table-bordered  mt-4"style="width:950px ;" >
     <thead style="background-color: #748E63; color: #000;" >
       <tr>
         <th scope="col">KODE EKSKUL</th>
         <th scope="col">NAMA EKSKUL</th>
         <th scope="col">GURU EKSKUL</th>
         <th scope="col">HARI</th>
         <th scope="col">WAKTU MULAI</th>
         <th scope="col">WAKTU SELESAI</th>
         <th scope="col">AKSI</th>
       </tr>
     </thead>
     
     <tbody >
       <tr>
         <th scope="row">PST</th>
         <td>Pencak Silat</td>
         <td>Syahputra Efendi</td>
         <td>Selasa</td>
         <td>14:30:00</td>
         <td>17:00:00</td>
         <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
           <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>         
       </tr>
       <tr>
           <th scope="row">PRK</th>
           <td>Pramuka</td>
           <td>Siti Aminah</td>
           <td>Jumat</td>
           <td>15:00:00</td>
           <td>17:00:00</td>
           <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
               <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
       </tr>
       <tr>
           <th scope="row">FSL</th>
           <td>Futsal</td>
           <td>Muhammad Haris</td>
           <td>Sabtu</td>
           <td>15:30:00</td>
           <td>17:00:00</td>
               <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
                   <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
       </tr>
       <tr>
           <th scope="row">MNR</th>
           <td>Menari</td>
           <td>Herlia Puspita Dewi</td>
           <td>Rabu</td>
           <td>15:00:00</td>
           <td>16:00:00</td>
               <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
                   <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
       </tr>
     </tbody>
   </table>
   </div> 
           


@endsection