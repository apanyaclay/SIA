@extends('layouts.main_admin')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> PROFILE
            &nbsp; LENGKAP</h1>
    </div>
    <div class="informasi py-3 px-3">

        <table class="table  mt-4">
            <tr>
                <th scope="col">NAMA</th>
                <th scope="col">NUPTK</th>
                <th scope="col">Jenis PTK</th>
                <th scope="col">NIP</th>
                <th scope="col">Jenis_Kelamin</th>
                <th scope="col">Tempat_Lahir</th>
                <th scope="col">Tanggal_Lahir</th>
                <th scope="col">Status_Kepegawaian</th>
                <th scope="col">Jenjang_Pendidikan</th>
                <th scope="col">TMT_Kerja</th>
                <th scope="col">JJM</th>
                <th scope="col">Status</th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($ptk as $ptklist)
                        <td>{{ $ptklist->Nama_Guru }}</td>
                        <td>{{ $ptklist->NUPTK }}</td>
                        <td>{{ $ptklist->Jenis_PTK }}</td>
                        <td>{{ $ptklist->NIP }}</td>
                        <td>{{ $ptklist->Jenis_Kelamin }}</td>
                        <td>{{ $ptklist->Tempat_Lahir }}</td>
                        <td>{{ $ptklist->Tanggal_Lahir }}</td>
                        <td>{{ $ptklist->Status_Kepegawaian }}</td>
                        <td>{{ $ptklist->Jenjang_Pendidikan }}</td>
                        <td>{{ $ptklist->TMT_Kerja }}</td>
                        <td>{{ $ptklist->JJM }}</td>
                        <td>{{ $ptklist->Status }}</td>

                </tr>
                @endforeach
        </table>
    </div>
@endsection
