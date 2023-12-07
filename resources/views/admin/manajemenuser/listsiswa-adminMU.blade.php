@extends('layouts.main_admin')

@section('container')

<div class="edit text-sm-end"><a href="{{route('tambahsiswa')}}" type="button" class="btn btn-secondary mt-3 mb-3" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i> Tambah  Siswa</a></div>
                

<!-- Page Heading -->
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> DAFTAR SISWA KELAS (X-Y)</h1></div>
<div class="tablewali">
   <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
     <thead style="background-color: #748E63; color: #000;" >
       <tr>
         <th scope="col">No.</th>
         <th scope="col">NAMA</th>
         <th scope="col">NISN</th>
         <th scope="col">Status Keaktifan</th>
         <th scope="col">Detail  Siswa</th>
         <th scope="col">AKSI</th>
       </tr>
     </thead>
     
     <tbody >
       <tr>
         <th scope="row">1</th>
         <td>Kairi hbvibrevbi</td>
         <td>21123356</td>
         <td>Aktif</td>
         <td><a type="button"  href="{{route('detailsiswa')}}"  class="btn btn-warning">Lihat Detail</a></td>
         <td>
          <!-- Button trigger modal -->
   <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
       <i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>
    </button>
 
    <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Status Keaktifan Siswa</h1>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
               <label class="form-check-label" for="inlineRadio1">Aktif</label>
             </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
               <label class="form-check-label" for="inlineRadio2">Pindah</label>
             </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
               <label class="form-check-label" for="inlineRadio3">Tidak Aktif</label>
             </div>
             <div class="form-check form-check-inline">
               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" >
               <label class="form-check-label" for="inlineRadio3">Drop-out</label>
             </div>
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
         <button type="button" class="btn btn-warning">Simpan</button>
       </div>
     </div>
   </div>
 </div>
</td>
</tr>

<!-- baris kedua -->
<tr>
   <th scope="row">2, dst</th>
   <td>Kairi hbvibrevbi</td>
   <td>21123356</td>
   <td>Aktif</td>
   <td><a type="button"  href="{{route('detailsiswa')}}"  class="btn btn-warning">Lihat Detail</a></td>
   <td>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
 <i class="fa-solid fa-file-pen" style="color: #ffffff;"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
 <div class="modal-header">
   <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Status Keaktifan Siswa</h1>
   <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
 </div>
 <div class="modal-body">
     <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
         <label class="form-check-label" for="inlineRadio1">Aktif</label>
       </div>
       <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
         <label class="form-check-label" for="inlineRadio2">Pindah</label>
       </div>
       <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" >
         <label class="form-check-label" for="inlineRadio3">Tidak Aktif</label>
       </div>
       <div class="form-check form-check-inline">
         <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" >
         <label class="form-check-label" for="inlineRadio3">Drop-out</label>
       </div>
 </div>
 <div class="modal-footer">
   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
   <button type="button" class="btn btn-warning">Simpan</button>
 </div>
</div>
</div>
</div>
</td>
</tr>    

     </tbody>
   </table>
   </div> 
@endsection