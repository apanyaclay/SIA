@extends('layouts.main_guru')

@section('container')

<!-- Page Heading -->
<div class="isi ">
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> JADWAL MENGAJAR TAHUN AJARAN (X)</h1></div>
                           
    <table class="table text-center table-bordered  mt-4">
           <thead style="background-color: #748E63; color: #000;">
             <tr>
               <th scope="col">HARI</th>
               <th scope="col">KELAS</th>
               <th scope="col">JAM</th>
               <th scope="col">RUANGAN</th>      
             </tr>
           </thead>
           <tbody class="table-group-divider table-warning">
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
             <tr>
               <th>SENIN</th>
               <td>MATEMATIKA</td>
               <td>09.00 - 11.00</td>
               <td>101</td>
             </tr>
            
           </tbody>
   </table>
   
   <button type="button" class="btn btn-secondary mt-3 mb-3" ><i  class="fas fa-download fa-sm text-white-50"></i> Print Jadwal </button>
                       </div>      

@endsection