@extends('layouts.main_superadmin')

@section('container')

         <!-- Page Heading -->
         <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH PTK</h1>
         <div class="row">
            <div class="col-6">
                <form action="">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" id="nama" name="nama" >
                    </div>
                    <div class="form-group">
                        <label for="noNUPTK">NUPTK:</label>
                        <input type="text" class="form-control" id="noNUPTK" name="noNUPTK">
                    </div>
                    <div class="form-group">
                        <label for="jeniskelamin">Jenis Kelamin:</label>
                        <input type="text" class="form-control" id="jeniskelamin" name="jeniskelamin">
                    </div>
                    <div class="form-group">
                        <label for="tmtkerja">TMT Kerja:</label>
                        <input type="text" class="form-control" id="tmtkerja" name="tmtkerja">
                    </div>
                </form>
            </div>
            <div class="col-6">
                <form action="">
                <div class="form-group">
                    <label for="tmptlahir">Tempat Lahir:</label>
                    <input type="text" class="form-control" id="tmptlahir" name="tmptlahir">
                </div>
                <div class="form-group">
                    <label for="tgllahir">Tanggal Lahir:</label>
                    <input type="date" class="form-control" id="tgllahir" name="tgllahir">
                </div>
                <div class="form-group">
                    <label for="jenjangpend">Jenjang Pendidikan:</label>
                    <input type="text" class="form-control" id="jenjangpend" name="jenjangpend">
                </div>
                <div class="form-group">
                    <label for="status">Status:</label>
                    <input type="text" class="form-control" id="status" name="status">
                </div>
            </form>
            </div>
        </div>

        <button type="submit" class="btn btn-warning">Tambah PTK</button>
       
@endsection