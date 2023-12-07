@extends('layouts.main_superadmin')

@section('container')
              <!-- Page Heading -->
              <h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> LIST SISWA KELAS XX </h1></div>
              <div class="tablewali">
                 <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
                   <thead style="background-color: #748E63; color: #000;" >
                     <tr>
                       <th scope="col">No.</th>
                       <th scope="col">NAMA</th>
                       <th scope="col">DETAIL RAPOR</th>
                       <th scope="col">VALIDASI</th>
                     </tr>
                   </thead>
                   
                   <tbody >
                     <tr>
                       <th scope="row">1</th>
                       <td>YOHANA</td>
                       <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                     <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>
                     </td>
                     </tr>
             
                     <tr>
                       <th scope="row">2</th>
                       <td>KEISYA</td>
                       <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                     <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>      
                     </td>
                     </tr>
             
                     <tr>
                       <th scope="row">3</th>
                       <td>SAKIFA</td>
                       <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                     <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>
                     </td>
                     </tr>
             
                     <tr>
                         <th scope="row">4</th> <!--dengan looping-->
                         <td>DIVA</td>
                         <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                     <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>
                     </td>
                     </tr>
             
                     <tr>
                       <th scope="row">5</th> <!--dengan looping-->
                       <td>NAUFAL</td>
                       <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                     <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>           
                     </td>
                     </tr>
                     <tr>
                         <th scope="row">6</th> <!--dengan looping-->
                         <td>DAGUL</td>
                         <td><a type="button"  href="/raporsiswa-superadmin"  class="btn btn-warning"> Lihat Rapor</a></td>
                       <td>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-success" for="success-outlined">CONFIRM</label>
                         <input type="radio" class="btn-check" name="options-outlined"  >
                         <label class="btn btn-outline-danger" for="danger-outlined">REJECT</label>       
                     </td>
                     </tr>
                   </tbody>
                 </table>
                 </div> 
             
@endsection