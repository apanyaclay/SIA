@extends('layouts.main_superadmin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> Daftar Ekstrakurikuler yang Diambil  </h1></div>
 <div class="tablewali">
    <table  class="table text-center table-bordered  mt-4"style="width:900px ;" >
      <thead style="background-color: #748E63; color: #000;" >
        <tr>
          <th scope="col">No.</th>
          <th scope="col">NAMA</th>
          <th scope="col">EKSTRAKURIKULER</th>
          <th scope="col">AKSI</th>
        </tr>
      </thead>
      
      <tbody >
        <tr>
          <th scope="row">1</th>
          <td>Maya Sari</td>
          <td>Menari</td>
          <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
            <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>defef</td>
          <td>dfeweewx</td>
          <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
            <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>hjyht</td>
          <td>eewwokd</td>
          <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
            <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
        </tr>
        <tr>
            <th scope="row">4</th> <!--dengan looping-->
            <td>rfytrutr</td>
            <td>deryrygr</td>
            <td><a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-file-pen" style="color: #ffffff;"></i></a>
                <a type="button" href="" class="btn btn-warning" ><i class="fa-solid fa-delete-left" style="color: #ffffff;"></i></a></td>
        </tr>
      </tbody>
    </table>
    </div> 
            


@endsection