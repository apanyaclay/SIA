@extends('layouts.main_siswa')
@section('container')
  <!-- Page Heading -->
  <div class="isi">
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT  &nbsp;  PROFILE</h1></div>
                          
    <div class="informasi py-3 px-3">
      
       <form action="" method="">
           <table class="table  mt-4">
       
               <tr>
                   <th>Nama</th>
                   <td><input type="text" name="nama" value="Kairi rayosdelsol" disabled></td>
               </tr>
               <tr>
                   <th>NIS/NISN</th>
                   <td><input type="text" name="nis_nisn" value="123/1234567890" disabled></td>
               </tr>
               <tr>
                   <th>Tempat Tanggal Lahir</th>
                   <td><input type="text" name="ttl" value="Medan, 21 May 2010" disabled></td>
               </tr>
               <tr>
                   <th>Jenis Kelamin</th>
                   <td><input type="text" name="jenis_kelamin" value="Perempuan" disabled></td>
               </tr>
               <tr>
                   <th>Agama</th>
                   <td><input type="text" name="agama" value="ISLAM" disabled></td>
               </tr>
               <tr>
                   <th>Status dalam Keluarga</th>
                   <td><input type="text" name="status_keluarga" value="AK" disabled></td>
               </tr>
               <tr>
                   <th>Anak Ke</th>
                   <td><input type="text" name="anak_ke" value="2" disabled></td>
               </tr>
               <tr>
                   <th>Alamat Peserta Didik</th>
                   <td><input type="text" name="alamat_peserta" value="Filipina" disabled></td>
               </tr>
               <tr>
                   <th>Nomor Telepon Rumah</th>
                   <td><input type="text" name="telepon_rumah" value="-" disabled></td>
               </tr>
               <tr>
                   <th>Sekolah Asal</th>
                   <td><input type="text" name="sekolah_asal" value="SDN 067255" disabled></td>
               </tr>
               <tr>
                   <th>Diterima di sekolah ini</th>
                   <td><input type="text" name="diterima_sekolah" value="" disabled></td>
               </tr>
               <tr>
                   <th>Di Kelas</th>
                   <td><input type="text" name="di_kelas" value="VII" disabled></td>
               </tr>
               <tr>
                   <th>Pada Tanggal</th>
                   <td><input type="text" name="pada_tanggal" value="11 July 2022" disabled></td>
               </tr>
               <tr>
                   <th>Nama Orang Tua</th>
                   <td><input type="text" name="nama_orang_tua" value="-" disabled></td>
               </tr>
               <tr>
                   <th>a. Ayah</th>
                   <td><input type="text" name="nama_ayah" value="HENDRI SUSANTO" disabled></td>
               </tr>
               <tr>
                   <th>b. Ibu</th>
                   <td><input type="text" name="nama_ibu" value="MARLINA" disabled></td>
               </tr>
               <tr>
                   <th>Alamat Orang Tua</th>
                   <td><input type="text" name="alamat_orang_tua" value="jwnoj" disabled></td>
               </tr>
               <tr>
                   <th>Nomor Telepon Rumah</th>
                   <td><input type="text" name="telepon_orang_tua" value="-" disabled></td>
               </tr>
               <tr>
                   <th>Pekerjaan Orang Tua</th>
                   <td><input type="text" name="pekerjaan_orang_tua" value="" disabled></td>
               </tr>
               <tr>
                   <th>a. Ayah</th>
                   <td><input type="text" name="pekerjaan_ayah" value="ntahlah" disabled></td>
               </tr>
               <tr>
                   <th>b. Ibu</th>
                   <td><input type="text" name="pekerjaan_ibu" value="cknqlkcnl" disabled></td>
               </tr>
               <tr>
                   <th>Nama Wali Peserta Didik</th>
                   <td><input type="text" name="nama_wali" value="-"></td>
               </tr>
               <tr>
                   <th>Alamat Wali Peserta Didik</th>
                   <td><input type="text" name="alamat_wali" value="-"></td>
               </tr>
               <tr>
                   <th>Nomor Telepon Rumah</th>
                   <td><input type="text" name="telepon_wali" value="-"></td>
               </tr>
               <tr>
                   <th>Pekerja Wali Peserta Didik</th>
                   <td><input type="text" name="pekerjaan_wali" value="-"></td>
               </tr>
               
     </table>
     <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
       </form>
    </div>
</div>
@endsection