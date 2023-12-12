@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE
            &nbsp; LENGKAP</h1>
    </div>
    <div class="edit text-sm-end"><a href="{{ route('editprofileguru') }}" type="button" class="btn btn-secondary mt-3 mb-3"><i
                class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Edit Profil</a></div>
    <div class="informasi py-3 px-3">

        <table class="table  mt-4">
            @foreach ($data as $item)
                <tr>
                    <th>Nama</th>
                    <td>{{$item->Nama_Guru}}</td>
                </tr>
                <tr>
                    <th>NUPTK</th>
                    <td>{{$item->NUPTK}}</td>
                </tr>
                <tr>
                    <th>Tempat Lahir</th>
                    <td>{{$item->Tempat_Lahir}}</td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td>{{$item->Tanggal_Lahir}}</td>
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
                    <th>NIP</th>
                    <td>{{$item->NIP}}</td>
                </tr>
                <tr>
                    <th>Status Kepegawaian</th>
                    <td>{{$item->Status_Kepegawaian}}</td>
                </tr>
                <tr>
                    <th>Jenis PTK</th>
                    <td>{{$item->Jenis_PTK}}</td>
                </tr>
                <tr>
                    <th>Jenjang</th>
                    <td>{{$item->Jenjang_Pendidikan}}</td>
                </tr>
                <th>TMT Kerja</th>
                <td>{{$item->TMT_Kerja}}</td>
                </tr>
                <tr>
                    <th>Jumlah Jam Mengajar</th>
                    <td>{{$item->JJM}}</td>
                </tr>
                <tr>
                    <th>Status</th>
                    <td>{{$item->Status}}</td>
                </tr>
            @endforeach
        </table>
    </div>
    <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
    </div>

    </div>
    </div>
@endsection
