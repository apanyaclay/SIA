@extends('layouts.main_admin')

@section('container')
    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH PTK</h1>
    <div class="informasi py-3 px-5">
        <form action="{{ route('tambahptksPost') }}" method="POST">
            @csrf
            <table class="table mt-4">
                <div class="form-group">
                    <tr>
                        <th><label for="id">NUPTK</label></th>
                        <td><input type="text" id="id" name="id" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="ids">NIP</label></th>
                        <td><input type="text" id="ids" name="ids" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="nama">Nama</label></th>
                        <td><input type="text" id="nama" name="nama" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="jk">Jenis Kelamin</label></th>
                        <td><select name="jk" id="jk">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select></td>
                    </tr>
                </div>

                <div class="form-group">
                    <tr>
                        <th><label for="tempat">Tempat Lahir</label></th>
                        <td><input type="text" id="tempat" name="tempat" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="tanggal">Tanggal Lahir</label></th>
                        <td><input type="date" id="tanggal" name="tanggal" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="tmp_kerja">TMT Kerja</label></th>
                        <td><input type="date" id="tmp_kerja" name="tmp_kerja" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="jp">Jenjang Pendidikan</label></th>
                        <td><input type="text" id="jp" name="jp" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="jns_ptk">Jenis_PTK</label></th>
                        <td><select name="jns_ptk" id="jns_ptk">
                                <option value="Guru Mapel">Guru Mapel</option>
                                <option value="Guru Wali Kelas">Guru Wali Kelas</option>
                            </select></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="statusK">Status Kepegawaian</label></th>
                        <td><select name="statusK" id="statusK">
                                <option value="GTY/PTY">GTY/PTY</option>
                                <option value="Guru Honor">Guru Honor</option>
                            </select></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="jjm">Jumlah Jam Mengajar</label></th>
                        <td><input type="number" id="jjm" name="jjm" required></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <th><label for="status">Status</label></th>
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
