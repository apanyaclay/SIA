@extends('layouts.main_admin')

@section('container')
<!-- Page Heading -->
   <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH SISWA </h1></div>
            
   <div class="informasi py-3 px-5">    
          <form action="" method="">
              <table class="table mt-4">
                  <div class="form-group">
                      <tr>
                     <th><label for="nama">Nama</label></th> 
                     <td><input type="text"  id="nama" name="nama" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="NIS">NIS/NISN</label></th> 
                     <td><input type="text" id="NIS" name="nis_nisn" required></td> 
                      </tr>
                  </div>
                  <div class="form-group" >
                      <tr>
                     <th><label for="ttl">Tempat Tanggal Lahir</label></th> 
                     <td><input type="text" id="ttl" name="ttl" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="jk">Jenis Kelamin</label></th> 
                     <td><input type="text" id="jk" name="jenis_kelamin" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="agama">Agama</label></th> 
                     <td><input type="text" id="agama" name="agama" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="sk">Status dalam Keluarga</label></th> 
                     <td><input type="text" id="sk" name="status_keluarga" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ak">Anak Ke</label></th> 
                     <td><input type="text" id="ak" name="anak_ke" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ap">Alamat Peserta Didik</label></th> 
                     <td><input type="text" id="ap" name="alamat_peserta" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="tl">Nomor Telepon Rumah</label></th> 
                     <td><input type="text" id="tl" name="telepon_rumah" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="sa">Sekolah Asal</label></th> 
                     <td><input type="text" id="sa" name="sekolah_asal" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ddsi">Diterima di sekolah ini</label></th> 
                     <td><input type="text" id="ddsi" name="diterima_sekolah" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="dkls">Di Kelas</label></th> 
                     <td><input type="text" id="dkls" name="di_kelas" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ptgl">Pada Tanggal</label></th> 
                     <td><input type="text" id="ptgl" name="pada_tanggal" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="not">Nama Orang Tua</label></th> 
                     <td><input type="text" id="not" name="nama_orang_tua" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="nay">a. Ayah</label></th> 
                     <td><input type="text" id="nay" name="nama_ayah" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="nib">b. Ibu</label></th> 
                     <td><input type="text" id="nib" name="nama_ibu" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="aot">Alamat Orang Tua</label></th> 
                     <td><input type="text" id="aot" name="alamat_orang_tua" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ntr">Nomor Telepon Rumah</label></th> 
                     <td><input type="text" id="ntr" name="telepon_orang_tua" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="pot">Pekerjaan Orang Tua</label></th> 
                     <td><input type="text" id="pot" name="pekerjaan_orang_tua" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="payah">a. Ayah</label></th> 
                     <td><input type="text" id="payah" name="pekerjaan_ayah" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="pibuh">b. Ibu</label></th> 
                     <td><input type="text" id="pibuh" name="pekerjaan_ibu" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="nwps">Nama Wali Peserta Didik</label></th> 
                     <td><input type="text" id="nwps" name="nama_wali" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="awpd">Alamat Wali Peserta Didik</label></th> 
                     <td><input type="text" id="awpd" name="alamat_wali" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="ntr2">Nomor Telepon Rumah</label></th> 
                     <td><input type="text" id="ntr2" name="telepon_wali" required></td> 
                      </tr>
                  </div>
                  <div class="form-group">
                      <tr>
                     <th><label for="pwpd">Pekerja Wali Peserta Didik</label></th> 
                     <td><input type="text" id="pwpd" name="pekerjaan_wali" required></td> 
                      </tr>
        </table>
        <button type="submit" class="btn btn-warning">Tambah</button>
          </form>

       </div>
            </div>
@endsection