@extends('layouts.main_superadmin')

@section('container')
              <!-- Page Heading -->
              <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LIST SISWA {{$kelas[0]->Nama_Kelas}} </h1></div>
              <div class="tablewali">
                 <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
                   <thead style="background-color: #748E63; color: #000;" >
                     <tr>
                       <th scope="col">NISN</th>
                       <th scope="col">NAMA</th>
                       <th scope="col">DETAIL RAPOR</th>
                       <th scope="col">VALIDASI</th>
                     </tr>
                   </thead>
                   
                   <tbody >
                    @foreach ($hasil as $item)
                      <tr>
                        <th scope="row">{{$item->NISN}}</th>
                        <td>{{$item->Nama_Siswa}}</td>
                        <td><a type="button"  href="{{route('raporsiswasadmin')}}"  class="btn btn-warning"> Lihat Rapor</a></td>
                      <td>
                          <input type="radio" class="btn-check" name="options-outlined"  >
                          <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                          <input type="radio" class="btn-check" name="options-outlined"  >
                          <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>
                      </td>
                      </tr>
                    @endforeach
                   </tbody>
                 </table>
                 </div> 
             
@endsection