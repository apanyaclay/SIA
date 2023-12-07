@extends('layouts.main_guru')

@section('container')

    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE &nbsp;  LENGKAP</h1></div>
<div class="edit text-sm-end"><a href="{{route('editprofileguru')}}"  type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</a></div>                       
        <div class="informasi py-3 px-3">
          
           <table class="table  mt-4">
           
                 <tr>
                   <th>Nama</th>
                   <td>Kairi rayosdelsol</td>
                 </tr>    
                 <tr>
                   <th>NUPTK</th>
                   <td>123/1234567890</td>
                 </tr>
                 <tr>
                   <th>Tempat Lahir</th>
                   <td>Medan</td>
                 </tr>
                 <tr>
                    <th>Tanggal Lahir</th>
                    <td> 21 May 1995</td>
                  </tr>
                 <tr>
                   <th>Jenis Kelamin</th>
                   <td>Perempuan</td>
                 </tr>
                 <tr>
                   <th>NIP</th>
                   <td>-</td>
                 </tr>
                 <tr>
                   <th>Status Kepegawaian</th>
                   <td>ejfwu</td>
                 </tr>
                 <tr>
                   <th>Jenis PTK</th>
                   <td>wjfig</td>
                 </tr>
                 <tr>
                   <th>Jenjang</th>
                   <td>S-1</td>
                 </tr>
                   <th>TMT Kerja</th>
                   <td>jreihnwnlg</td>
                 </tr>
                 <tr>
                   <th>JJM</th>
                   <td>-</td>
                 </tr>
                 <tr>
                   <th>Status</th>
                   <td>Aktif</td>
                 </tr>
       </table>
        </div>
       <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                           </div>           
         
                    </div>
                </div>

@endsection