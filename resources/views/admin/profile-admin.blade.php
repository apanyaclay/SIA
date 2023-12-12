@extends('layouts.main_admin')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE
            &nbsp; LENGKAP</h1>
    </div>
    <div class="edit text-sm-end"><a href="{{ route('editprofileadmin') }}" type="button"
            class="btn btn-secondary mt-3 mb-3"><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</a>
    </div>
    <div class="informasi py-3 px-3">

        <table class="table  mt-4">
            @foreach ($data as $item)
                <tr>
                    <th>ID Pegawai</th>
                    <td>{{ $item->ID_Pegawai }}</td>
                </tr>
                <tr>
                    <th>Nama</th>
                    <td>{{ $item->Nama_Pegawai }}</td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td>@if ($item->Jenis_Kelamin == 'L')
                        Laki-Laki
                    @else
                        Perempuan
                    @endif</td>
                </tr>
                <tr>
                    <th>TMT Kerja</th>
                    <td>{{ $item->TMT_Kerja }}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{ $item->Tempat_Lahir }}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{ $item->Tanggal_Lahir }}</td>
                </tr>
                <tr>
                    <th>Jenjang Pendidikan</th>
                    <td>{{ $item->Jenjang_Pendidikan }}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{ $item->Status }}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
    </div>

    </div>
    </div>
@endsection
