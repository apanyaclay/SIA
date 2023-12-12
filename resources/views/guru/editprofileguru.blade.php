@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT &nbsp;
            PROFILE</h1>
    </div>

    <div class="informasi py-3 px-3">
        <form action="{{ route('editprofileguruPost') }}" method="POST">
            @csrf
            <table class="table  mt-4">
                @foreach ($data as $item)
                    <tr>
                        <th>Nama</th>
                        <td><input type="text" name="nama" id="nama" required value="{{ $item->Nama_Guru }}"></td>
                    </tr>
                    <tr>
                        <th>NUPTK</th>
                        <td><input type="text" name="nuptk" id="nuptk" required value="{{ $item->NUPTK }}" readonly></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td><input type="text" name="tempat_lahir" id="tempat_lahir" required value="{{ $item->Tempat_Lahir }}"></td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td><input type="date" name="tanggal_lahir" id="tanggal_lahir" required value="{{ $item->Tanggal_Lahir }}"></td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><select name="jk" id="jk">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="L">Laki-Laki</option>
                                <option value="P">Perempuan</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>NIP</th>
                        <td><input type="text" name="nip" id="nip" required value="{{ $item->NIP }}" readonly></td>
                    </tr>
                    <tr>
                        <th>Status Kepegawaian</th>
                        <td><select name="sk" id="sk">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="GTY/PTY">GTY/PTY</option>
                                <option value="Guru Honor">Guru Honor</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Jenis PTK</th>
                        <td><select name="ptk" id="ptk">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="Guru Mapel">Guru Mapel</option>
                                <option value="Guru Wali Kelas">Guru Wali Kelas</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Jenjang Pendidikan</th>
                        <td><input type="text" name="jenjang" id="jenjang" required value="{{ $item->Jenjang_Pendidikan }}"></td>
                    </tr>
                    <tr>
                        <th>TMT Kerja</th>
                        <td><input type="date" name="tmt_kerja" id="tmt_kerja" required value="{{ $item->TMT_Kerja }}"></td>
                    </tr>
                    <tr>
                        <th>JJM</th>
                        <td><input type="number" name="jjm" id="jjm" required value="{{ $item->JJM }}"></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><select name="status" id="status">
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="Aktif">Aktif</option>
                                <option value="Resign">Resign</option>
                                <option value="Diberhentikan">Diberhentikan</option>
                                <option value="Cuti">Cuti</option>
                            </select></td>
                    </tr>
                @endforeach
            </table>
            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
        </form>
    </div>
@endsection
