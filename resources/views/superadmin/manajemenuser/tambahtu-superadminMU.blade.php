@extends('layouts.main_superadmin')

@section('container')

    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Tambah  Pegawai Tata Usaha </h1>
    <div class="informasi py-3 px-5">    
        <form action="{{route('tambahtuPost')}}" method="POST">
          @csrf
            <table class="table mt-4">
              <div class="form-group">
                  <tr>
                 <th><label for="id">ID Pegawai:</label></th> 
                 <td><input type="text"  id="id" name="id" required></td> 
                  </tr>
              </div>
              <div class="form-group">
                <tr>
               <th><label for="nama">Nama:</label></th> 
               <td><input type="text"  id="nama" name="nama" required></td> 
                </tr>
            </div>
              <div class="form-group">
                  <tr>
                 <th><label for="jk">Jenis Kelamin:</label></th> 
                 <td><select name="jk" id="jk">
                     <option value="">-- Silahkan Pilih --</option>
                    <option value="L">Laki-Laki</option>
                    <option value="P">Perempuan</option>
                </select></td> 
                  </tr>
              </div>
              
              <div class="form-group" >
                  <tr>
                 <th><label for="tempat">Tempat Lahir:</label></th> 
                 <td><input type="text" id="tempat" name="tempat" required></td> 
                  </tr>
              </div>
              <div class="form-group" >
                  <tr>
                 <th><label for="tanggal">Tanggal Lahir:</label></th> 
                 <td><input type="date" id="tanggal" name="tanggal" required></td> 
                  </tr>
              </div>
              <div class="form-group">
                  <tr>
                 <th><label for="tmp_kerja">TMT Kerja:</label></th> 
                 <td><input type="date" id="tmp_kerja" name="tmp_kerja" required></td> 
                  </tr>
              </div>
              <div class="form-group">
                  <tr>
                 <th><label for="jp">Jenjang Pendidikan:</label></th> 
                 <td><input type="text" id="jp" name="jp" required></td> 
                  </tr>
              </div>
              <div class="form-group">
                  <tr>
                 <th><label for="status">Status:</label></th> 
                 <td><select name="status" id="status">
                      <option value="Aktif">Aktif</option>
                      <option value="Resign">Resign</option>
                      <option value="Diberhentikan">Diberhentikan</option>
                      <option value="Cuti">Cuti</option>
                  </select></td> 
                  </tr>
              </div>
              </table>
               <button type="submit" class="btn btn-warning">Tambah</button>
              </form>
          </div>
      </div>
@endsection