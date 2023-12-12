@extends('layouts.main_siswa')


@section('container')
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; font-weight: bolder;">Dashboard
        </h1>
    </div>

    <div class="box">
        <div class="col-lg-6 mb-4" style="text-align: left; align-self: center;">
            <!-- Profil Sekilas Guru -->
            <div class="card-guru mb-3">
                <h5 class="card-header" style="text-align: center; color: #ffc527;">Profil Siswa</h5>
                <div class="row g-0 px-4 py-4" style="width: 600px;">
                    <div class="col-md-3">
                        <img src="https://i.pinimg.com/originals/ce/8f/20/ce8f20768089a0002e64739a9458dc45.jpg"
                            class="img-fluid rounded" alt="...">
                    </div>
                    <div class="col-md-9">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-4" style="font-weight: bolder;">
                                    <div>NAMA</div>
                                    <div>NISN</div>
                                    <div>JENIS KELAMIN </div>
                                </div>
                                <div class="col-8">
                                    @foreach ($data as $item)
                                        <div>{{ $item->Nama_Siswa }}</div>
                                        <div>{{ $item->NISN }}</div>
                                        <div>
                                            @if ($item->Jenis_Kelamin == 'L')
                                                Laki-Laki
                                            @else
                                                Perempuan
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div> <!-- tag Penutup Kotak Profil-->
    </div>
    </div>
@endsection
