@extends('layouts.main_admin')

@section('container')
<h1 class="jadwal h3 mb-0 text-gray-800 mb-5" style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; text-align: center;"> HISTORY &nbsp;  LOG</h1>
                    
                <!-- Content Row -->
                <div class="row">

                    <!-- Log Aktivitas -->
                    
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <a href="{{route('log_aktivitas')}}"> <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                            Log Aktivitas</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-pen-to-square fa-xl" style="color: gray"></i>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>


                     <!-- Log Role -->
                    
                     <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <a href="{{route('log_role')}}"> <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                            Log Role</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-user fa-xl" style="color: gray;"></i>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                                 <!-- Log Permision -->
                    
                    <div class="col-xl-4 col-md-6 mb-4">
                        <div class="card border-left-warning shadow h-100 py-2">
                           <a href="{{route('log_permission')}}"> <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                            Log Permission</div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fa-solid fa-key fa-xl" style="color: gray;"></i>
                                    </div>
                                </div>
                            </div></a>
                        </div>
                    </div>
                    
                </div>

            <!-- kedua -->
            <div class="row">

                <!-- Log User -->
                    
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-warning shadow h-100 py-2">
                       <a href="{{route('log_user')}}"> <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                        Log User</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa-regular fa-user fa-xl" style="color: gray;"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

               <!-- Log Profile -->
                    
               <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                   <a href="{{route('log_profile')}}"> <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                    Log Profile</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-id-card fa-xl" style="color: gray;"></i>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>

             <!-- Log Guru -->
                    
             <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                   <a href="{{route('log_guru')}}"> <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text font-weight-bold text-primary text-uppercase mb-1">
                                    Log Guru</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa-solid fa-chalkboard-user fa-xl" style="color: gray;"></i>
                            </div>
                        </div>
                    </div></a>
                </div>
            </div>
        </div>
           


@endsection