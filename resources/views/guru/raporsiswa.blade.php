@extends('layouts.main_guru')

@section('container')
    <!-- Page Heading -->
    <div class="isi ">

        <h1 class="jadwal h3 mb-0 text-gray-800"
            style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Hasil
            Belajar</h1>
    </div>

    <!-- Isi Rapor Siswa -->

    <!-- SIKAP -->
    <div class="judulrapor px-3 py-3">
        <div class="poin"> A. SIKAP</div>
        <div class="poin">1. Sikap Spiritual</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Predikat</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapor as $item)
                <tr>
                    <th>{{ $item->Sikap_Spiritual }}</th>
                    <td style="text-align: justify;">{{ $item->Deskrip_Spiritual }}.</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>

    <!-- SOSIAL -->
    <div class="judulrapor px-3 py-3">
        <div class="poin">2. Sikap Sosial</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">Predikat</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rapor as $item)
                <tr>
                    <th>{{ $item->Sikap_Sosial }}</th>
                    <td style="text-align: justify;">{{ $item->Deskrip_Sosial }}.</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </table>

    <!-- PENGETAHUAN -->
    <div class="judulrapor px-3 py-3">
        <div class="poin"> B. PENGETAHUAN</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Mata Pelajaran </th>
                <th scope="col">Nilai</th>
                <th scope="col">Predikat</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($nilai); $i++)
                <tr>
                    <th>{{ $i + 1 }}</th>
                    <td>{{ $nilai[$i]->Nama_Mapel }}</td>
                    <th scope="row">{{ $nilai[$i]->Nilai_Keterampilan }}</th>
                    <th scope="row">
                        @if ($nilai[$i]->Nilai_Keterampilan >= 88)
                            A
                        @elseif ($nilai[$i]->Nilai_Keterampilan >= 70)
                            B
                        @elseif ($nilai[$i]->Nilai_Keterampilan >= 55)
                            C
                        @else
                            D
                        @endif
                    </th>
                    <td style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more.</td>
                </tr>
            @endfor

        </tbody>
    </table>
    </table>

    <!-- KETERAMPILAN -->
    <div class="judulrapor px-3 py-3">
        <div class="poin"> C. KETERAMPILAN</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Mata Pelajaran </th>
                <th scope="col">Nilai</th>
                <th scope="col">Predikat</th>
                <th scope="col">Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($nilai); $i++)
                <tr>
                    <th>{{ $i + 1 }}</th>
                    <td>{{ $nilai[$i]->Nama_Mapel }}</td>
                    <th scope="row">{{ $nilai[$i]->Nilai_Pengetahuan }}</th>
                    <th scope="row">
                        @if ($nilai[$i]->Nilai_Pengetahuan >= 88)
                            A
                        @elseif ($nilai[$i]->Nilai_Pengetahuan >= 70)
                            B
                        @elseif ($nilai[$i]->Nilai_Pengetahuan >= 55)
                            C
                        @else
                            D
                        @endif
                    </th>
                    <td style="text-align: justify;">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived
                        not only five centuries, but also the leap into electronic typesetting, remaining essentially
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                        Ipsum passages, and more.</td>
                </tr>
            @endfor
        </tbody>
    </table>
    </table>

    <!--EKSTRAKURIKULER -->
    <div class="judulrapor px-3 py-3">
        <div class="poin">D . EKSTRAKURIKULER</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Kegiatan Ekstrakurikuler</th>
                <th scope="col">Nilai</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($ekskul); $i++)
                <tr>
                    <th>{{ $i + 1 }}</th>
                    <td>{{ $ekskul[$i]->Nama_Ekskul }}</td>
                    <th scope="row">{{ $ekskul[$i]->Nilai }}</th>
                    <td>{{ $ekskul[$i]->Keterangan }}</td>
                </tr>
            @endfor
        </tbody>
    </table>


    <!--PRESTASI -->
    <div class="judulrapor px-3 py-3">
        <div class="poin">E. PRESTASI</div>
    </div>
    <table class="table text-center table-bordered">
        <thead class="table-secondary">
            <tr>
                <th scope="col">NO</th>
                <th scope="col">Jenis Prestasi</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 0; $i < count($prestasi); $i++)
                <tr>
                    <th>{{ $i + 1 }}</th>
                    <td>{{ $prestasi[$i]->Jenis_Prestasi }}</td>
                    <td>{{ $prestasi[$i]->Deskripsi }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
    </div>
@endsection
