@extends('layouts.main_admin')

@section('container')
    <!-- Page Heading -->
    <h1 class="jadwal h3 mb-0 text-gray-800"
        style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH SISWA
    </h1>
    </div>

    <div class="informasi py-3 px-5">
        <form action="{{ route('editsiswasPost') }}" method="POST">
            @csrf
            <table class="table mt-4">
                @foreach ($data as $item)
                    <div class="form-group">
                        <tr>
                            <th><label for="nama">Nama</label></th>
                            <td><input type="text" id="nama" name="nama" required value="{{ $item->Nama_Siswa }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="nis">NIS/NISN</label></th>
                            <td><input type="text" id="nis" name="nis" required value="{{ $item->NISN }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="tempat">Tempat Lahir</label></th>
                            <td><input type="text" id="tempat" name="tempat" required
                                    value="{{ $item->Tempat_Lahir }}"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="tanggal">Tanggal Lahir</label></th>
                            <td><input type="date" id="tanggal" name="tanggal" required
                                    value="{{ $item->Tanggal_Lahir }}"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="jk">Jenis Kelamin</label></th>
                            <td><select name="jk" id="jk" required>
                                    <option value="">-- Silahkan Pilih --</option>
                                    <option value="L">LAKI-LAKI</option>
                                    <option value="P">PEREMPUAN</option>
                                </select></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="agama">Agama</label></th>
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
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="sk">Status dalam Keluarga</label></th>
                            <td><select name="sk" id="sk" required>
                                    <option value="">-- Silahkan Pilih --</option>
                                    <option value="Anak Kandung">Anak Kandung</option>
                                    <option value="Anak Tiri">Anak Tiri</option>
                                </select></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="ak">Anak Ke</label></th>
                            <td><input type="number" id="ak" name="ak" required value="{{ $item->Anak_Ke }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="ap">Alamat Peserta Didik</label></th>
                            <td><input type="text" id="ap" name="ap" required value="{{ $item->Alamat }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="tl">Nomor Telepon Rumah</label></th>
                            <td><input type="text" id="tl" name="tl" required value="{{ $item->No_hp }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="sa">Sekolah Asal</label></th>
                            <td><input type="text" id="sa" name="sa" required
                                    value="{{ $item->Sekolah_Asal }}"></td>
                        </tr>
                    </div>

                    <div class="form-group">
                        <tr>
                            <th><label for="not">Nama Orang Tua</label></th>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="nay">a. Ayah</label></th>
                            <td><input type="text" id="nay" name="nay" required value="{{ $item->Nama_Ayah }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="nib">b. Ibu</label></th>
                            <td><input type="text" id="nib" name="nib" required value="{{ $item->Nama_Ibu }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="aot">Alamat Orang Tua</label></th>
                            <td><input type="text" id="aot" name="aot" required value="{{ $item->Alamat }}">
                            </td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="ntr">Nomor Telepon Rumah</label></th>
                            <td><input type="text" id="ntr" name="ntr" required
                                    value="{{ $item->No_hp }}"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="pot">Pekerjaan Orang Tua</label></th>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="payah">a. Ayah</label></th>
                            <td><input type="text" id="payah" name="payah" required
                                    value="{{ $item->Pekerjaan_Ayah }}"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="pibuh">b. Ibu</label></th>
                            <td><input type="text" id="pibuh" name="pibuh" required
                                    value="{{ $item->Pekerjaan_Ibu }}"></td>
                        </tr>
                    </div>
                    <div class="form-group">
                        <tr>
                            <th><label for="status">Status Siswa</label></th>
                            <td><select name="status" id="status">
                                    @if ($item->Status_Siswa == 'Aktif')
                                        <option value="Aktif">Aktif</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Pindah">Pindah</option>
                                        <option value="Dropout">Dropout</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    @endif
                                    @if ($item->Status_Siswa == 'Lulus')
                                        <option value="Lulus">Lulus</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Pindah">Pindah</option>
                                        <option value="Dropout">Dropout</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    @endif
                                    @if ($item->Status_Siswa == 'Pindah')
                                        <option value="Pindah">Pindah</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Dropout">Dropout</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    @endif
                                    @if ($item->Status_Siswa == 'Dropout')
                                        <option value="Dropout">Dropout</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Pindah">Pindah</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    @endif
                                    @if ($item->Status_Siswa == 'Tidak Aktif')
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                        <option value="Dropout">Dropout</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Lulus">Lulus</option>
                                        <option value="Pindah">Pindah</option>
                                    @endif
                                </select></td>
                        </tr>
                    </div>
            </table>
            <button type="submit" class="btn btn-warning">Edit</button>
        </form>
    </div>
    @endforeach
    </div>
@endsection
