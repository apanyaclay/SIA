@extends('layouts.main_siswa')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">
        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> JADWAL
            {{ $kelas[0]->Nama_Kelas }}</h1>
    </div>

    <table class="table text-center table-bordered  mt-4">
        <thead style="background-color: #748E63; color: #000;">
            <tr>
                <th scope="col">J A M</th>
                <th scope="col">SENIN</th>
                <th scope="col">SELASA</th>
                <th scope="col">RABU</th>
                <th scope="col">KAMIS</th>
                <th scope="col">JUMAT</th>
                <th scope="col">SABTU</th>
            </tr>
        </thead>
        <tbody class="table-group-divider table-warning">
            @for ($i = 0; $i < count($senin); $i++)
                <tr>
                    <th>{{ $jam[$i]->Waktu_Mulai }} - {{ $jam[$i]->Waktu_Selesai }}</th>
                    <td>{{ $senin[$i]->Nama_Mapel }}</td>
                    <td>{{ $selasa[$i]->Nama_Mapel }}</td>
                    <td>{{ $rabu[$i]->Nama_Mapel }}</td>
                    <td>{{ $kamis[$i]->Nama_Mapel }}</td>
                    <td>{{ $jumat[$i]->Nama_Mapel }}</td>
                    <td>{{ $sabtu[$i]->Nama_Mapel }}</td>
                </tr>
            @endfor
        </tbody>
    </table>

    <button type="button" class="btn btn-secondary mt-3 mb-3"><i class="fas fa-download fa-sm text-white-50"></i> Print
        Jadwal </button>
    </div>
@endsection
