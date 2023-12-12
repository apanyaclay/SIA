@extends('layouts.main_siswa')


@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE
            &nbsp; LENGKAP</h1>
    </div>
    <div class="edit text-sm-end"><a href="{{ route('editprofile') }}" type="button" class="btn btn-secondary mt-3 mb-3"><i
                class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</a></div>
    <div class="informasi py-3 px-3">

        <table class="table  mt-4">
            @foreach ($siswa as $item)
                <tr>
                    <th>Nama</th>
                    <td>{{ $item->Nama_Siswa }}</td>
                </tr>
                <tr>
                    <th>NIS/NISN</th>
                    <td>{{ $item->NISN }}</td>
                </tr>
                <tr>
                    <th>Tempat Tanggal Lahir</th>
                    <td>{{ $item->Tempat_Lahir }}, {{ $item->Tanggal_Lahir }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>
                        @if ($item->Jenis_Kelamin == 'L')
                            Laki-Laki
                        @else
                            Perempuan
                        @endif
                    </td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td>{{ $item->Agama }}</td>
                </tr>
                <tr>
                    <th>Status dalam Keluarga</th>
                    <td>{{ $item->Status_dlm_Klrg }}</td>
                </tr>
                <tr>
                    <th>Anak Ke</th>
                    <td>{{ $item->Anak_Ke }}</td>
                </tr>
                <tr>
                    <th>Alamat Peserta Didik</th>
                    <td>{{ $item->Alamat }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon Rumah</th>
                    <td>{{ $item->No_hp }}</td>
                </tr>
                <tr>
                    <th>Sekolah Asal</th>
                    <td>{{ $item->Sekolah_Asal }}</td>
                </tr>
                <tr>
                    <th>Nama Orang Tua</th>
                    <td></td>
                </tr>
                <tr>
                    <th>a. Ayah</th>
                    <td>{{ $item->Nama_Ayah }}</td>
                </tr>
                <tr>
                    <th>b. Ibu</th>
                    <td>{{ $item->Nama_Ibu }}</td>
                </tr>
                <tr>
                    <th>Alamat Orang Tua</th>
                    <td>{{ $item->Alamat }}</td>
                </tr>
                <tr>
                    <th>Nomor Telepon Rumah</th>
                    <td>{{ $item->No_hp }}</td>
                </tr>
                <tr>
                    <th>Pekerjaan Orang Tua</th>
                    <td></td>
                </tr>
                <tr>
                    <th>a. Ayah</th>
                    <td>{{ $item->Pekerjaan_Ayah }}</td>
                </tr>
                <tr>
                    <th>b.Ibu</th>
                    <td>{{ $item->Pekerjaan_Ibu }}</td>
                </tr>
            @endforeach

        </table>
    </div>
    <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
    </div>
@endsection
