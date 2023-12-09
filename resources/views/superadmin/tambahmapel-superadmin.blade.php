@extends('layouts.main_superadmin')

@section('container')
                  <!-- Page Heading -->
                  <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> TAMBAH MATA PELAJARAN</h1></div>
                  <br>
                  <div class="tablewali">
                     <form action="{{route('tambahmapelPost')}}" method="POST">
                        @csrf
                         <div class="form-group">
                             <label for="kode">Kode:</label>
                             <input type="text" class="form-control" id="kode" name="kode">
                         </div>
                         <div class="form-group">
                             <label for="name">Mapel:</label>
                             <input type="text" class="form-control" id="name" name="name">
                         </div>
                         <div class="form-group">
                             <label for="kkm">KKM:</label>
                             <input type="text" class="form-control" id="kkm" name="kkm">
                         </div>
                         <div class="form-group">
                             <label for="guru">Guru:</label>
                             <select name="guru" id="guru" class="form-control">
                                <option value="" disabled>-- Pilih Guru --</option>
                                @foreach ($hasil as $item)
                                <option value="{{$item->NUPTK}}">{{$item->Nama_Guru}}</option>
                                @endforeach
                             </select>
                         </div>
                         <button type="submit" class="btn btn-warning">Tambah Mapel</button>
                         </div>
                     </form>
                 </div> 
                                 </div>
                                 <!-- container-fluid -->    
                                 
                                  </div>
                                 <!-- <button type="button" class="btn btn-secondary mt-3 mb-3" >Print Jadwal</button> -->
                                                     </div>           
                                   
                                              </div>
                                          </div>
@endsection