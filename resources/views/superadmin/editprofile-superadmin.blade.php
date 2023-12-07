@extends('layouts.main_superadmin')

@section('container')
          <!-- Page Heading -->
          <div class="isi ">
            <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT  &nbsp;  PROFILE</h1></div>
                           
            <div class="informasi py-3 px-3">
              
               <form action="" method="">
                   <table class="table  mt-4">      
                  <tr>
                               <th>Nama</th>
                               <td><input type="text" name="nama" value="Kairi rayosdelsol"></td>
                           </tr>                 
                           <tr>
                               <th>NUPTK</th>
                               <td><input type="text" name="NUPTK" value="Perempuan"></td>
                           </tr>
                           <tr>
                               <th>Jenis Kelamin</th>
                               <td><input type="text" name="jenis_kelamin" value="Laki-laki"></td>
                           </tr>               
                           <tr>
                               <th>TMT Kerja</th>
                               <td><input type="text" name="tmt_kerja" value="jreihnwnlg"></td>
                           </tr>
                           <tr>
                               <th>Tempat Lahir</th>
                               <td><input type="text" name="tempat_kerja" value="jreihnwnlg"></td>
                           </tr>
                           <tr>
                               <th>Tanggal Lahir</th>
                               <td><input type="date" name="tanggal_lahir" value="12-12-1995"></td>
                           </tr>
                           <tr>
                               <th>Jenjang Pendidikan</th>
                               <td><input type="text" name="tmt_kerja" value="S-1"></td>
                           </tr><tr>
                               <th>Status</th>
                               <td><input type="text" name="tmt_kerja" value="aktif"></td>
                           </tr>
             </table>
             <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
               </form>
           
              
               

       </div>
@endsection