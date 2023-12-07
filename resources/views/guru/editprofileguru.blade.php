@extends('layouts.main_guru')

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
                       <td><input type="text" name="nuptk" value="13534674347"></td>
                   </tr>
                   <tr>
                       <th>Tempat Lahir</th>
                       <td><input type="text" name="tempat_lahir" value="Medan"></td>
                   </tr>
                   <tr>
                       <th>Tanggal Lahir</th>
                       <td><input type="text" name="tanggal_lahir" value="21 May 1995"></td>
                   </tr>
                   <tr>
                       <th>Jenis Kelamin</th>
                       <td><input type="text" name="jenis_kelamin" value="Perempuan"></td>
                   </tr>
                   <tr>
                       <th>NIP</th>
                       <td><input type="text" name="nip" value="-"></td>
                   </tr>
                   <tr>
                       <th>Status Kepegawaian</th>
                       <td><input type="text" name="status_kepegawaian" value="ejfwu"></td>
                   </tr>
                   <tr>
                       <th>Jenis PTK</th>
                       <td><input type="text" name="jenis_ptk" value="wjfig"></td>
                   </tr>
                   <tr>
                       <th>Jenjang</th>
                       <td><input type="text" name="jenjang" value="S-1"></td>
                   </tr>
                   <tr>
                       <th>TMT Kerja</th>
                       <td><input type="text" name="tmt_kerja" value="jreihnwnlg"></td>
                   </tr>
                   <tr>
                       <th>JJM</th>
                       <td><input type="text" name="jjm" value="-"></td>
                   </tr>
                   <tr>
                       <th>Status</th>
                       <td><input type="text" name="total_jjm" value="aktif"></td>
                   </tr>
     </table>
     <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
       </form>
   
      
    </div>
   <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                       </div>           
     
                </div>
            </div>

@endsection