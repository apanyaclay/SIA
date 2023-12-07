@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG DAFTAR ROLE</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Role_Assignment</th>
                    <th>ID_ROles</th>
                    <th>NISN</th>
                    <th>NUPTK</th>
                    <th>ID_Pegawai</th>
                    <th>ID_Kepsek</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_role_assignment as $logroleassign)
                 <td>{{ $logroleassign->ID_Role_Assignment}}</td>
                 <td>{{ $logroleassign->ID_ROles }}</td>
                 <td>{{ $logroleassign->NISN }}</td>
                 <td>{{ $logroleassign->NUPTK }}</td>
                 <td>{{ $logroleassign->ID_Pegawai }}</td>
                 <td>{{ $logroleassign->ID_Kepsek }}</td>
                 <td>{{ $logroleassign->Action }}</td>
                 <td>{{ $logroleassign->Username }}</td>
                 <td>{{ $logroleassign->Waktu }}</td>
                 
                </tr> 
                @endforeach
               </tbody>
           </table>
       </div>
   </div>
</div>
        
@endsection