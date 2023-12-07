@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 " style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LOG LIST USER</h1></div><br>
                                       
<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-body">
       <div class="table-responsive">
           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
               <thead style="background-color: #748E63; color: #000;">
                <tr>
                    <th>ID_Roles</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Nama_Role</th>
                    <th>Action</th>
                    <th>Username</th>
                    <th>Waktu</th>
                    
                    
                </tr>
            </thead>
           <tbody>
                <tr>
                 @foreach($log_roles as $logroles)
                 <td>{{ $logroleassign->ID_Roles}}</td>
                 <td>{{ $logroleassign->Email }}</td>
                 <td>{{ $logroleassign->Password }}</td>
                 <td>{{ $logroleassign->Nama_Role }}</td>
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