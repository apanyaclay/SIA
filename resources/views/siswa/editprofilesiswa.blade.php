@extends('layouts.main_siswa')
@section('container')
    <!-- Page Heading -->
    <div class="isi">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> EDIT &nbsp;
            PROFILE</h1>
    </div>

    <div class="informasi py-3 px-3">

        <form action="{{ route('editprofilePost') }}" method="POST">
            @csrf
            <table class="table  mt-4"s>
                @foreach ($data as $item)
                    <tr>
                        <th>Nama</th>
                        <td><input type="text" id="nama" name="nama" required value="{{ $item->Nama_Siswa }}"></td>
                    </tr>
                    <tr>
                        <th>NIS/NISN</th>
                        <td><input type="text" id="nis" name="nis" required value="{{ $item->NISN }}"
                                readonly></td>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <td><input type="text" id="tempat" name="tempat" required value="{{ $item->Tempat_Lahir }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Tanggal Lahir</th>
                        <td><input type="date" id="tanggal" name="tanggal" required value="{{ $item->Tanggal_Lahir }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td><select name="jk" id="jk" required>
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="L">LAKI-LAKI</option>
                                <option value="P">PEREMPUAN</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Agama</th>
                        <td><select name="agama" id="agama" required>
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Katholik">Katholik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Konghucu">Konghucu</option>
                                <option value="Islam">Islam</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Status dalam Keluarga</th>
                        <td><select name="sk" id="sk" required>
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="Anak Kandung">Anak Kandung</option>
                                <option value="Anak Tiri">Anak Tiri</option>
                            </select></td>
                    </tr>
                    <tr>
                        <th>Anak Ke</th>
                        <td><input type="number" id="ak" name="ak" required value="{{ $item->Anak_Ke }}"></td>
                    </tr>
                    <tr>
                        <th>Alamat Peserta Didik</th>
                        <td><input type="text" id="ap" name="ap" required value="{{ $item->Alamat }}"></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon Rumah</th>
                        <td><input type="text" id="tl" name="tl" required value="{{ $item->No_hp }}"></td>
                    </tr>
                    <tr>
                        <th>Sekolah Asal</th>
                        <td><input type="text" id="sa" name="sa" required value="{{ $item->Sekolah_Asal }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Nama Orang Tua</th>
                    </tr>
                    <tr>
                        <th>a. Ayah</th>
                        <td><input type="text" id="nay" name="nay" required value="{{ $item->Nama_Ayah }}">
                        </td>
                    </tr>
                    <tr>
                        <th>b. Ibu</th>
                        <td><input type="text" id="nib" name="nib" required value="{{ $item->Nama_Ibu }}">
                        </td>
                    </tr>
                    <tr>
                        <th>Alamat Orang Tua</th>
                        <td><input type="text" id="aot" name="aot" required value="{{ $item->Alamat }}"></td>
                    </tr>
                    <tr>
                        <th>Nomor Telepon Rumah</th>
                        <td><input type="text" id="ntr" name="ntr" required value="{{ $item->No_hp }}"></td>
                    </tr>
                    <tr>
                        <th>Pekerjaan Orang Tua</th>
                    </tr>
                    <tr>
                        <th>a. Ayah</th>
                        <td><input type="text" id="payah" name="payah" required
                                value="{{ $item->Pekerjaan_Ayah }}"></td>
                    </tr>
                    <tr>
                        <th>b. Ibu</th>
                        <td><input type="text" id="pibuh" name="pibuh" required
                                value="{{ $item->Pekerjaan_Ibu }}"></td>
                    </tr>
                @endforeach

            </table>
            <button type="submit" class="btn btn-warning">Simpan Perubahan</button>
        </form>
    </div>
    </div>
@endsection
