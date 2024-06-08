@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
     <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Table Profile</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Profile</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
            
        <div class="col-lg-6" style="text-align:right; align-items:center">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-target="#AddData" data-bs-target="#AddData"><i class="bi bi-plus me-1"></i> Add</button>
        </div>
    </div>
</section>

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Berhasil!</strong> {{ Session::get("success") }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

    
    <!-- Tabel -->
    <div class="card">
        <div class="card-body">

            <!-- Tab Link -->
            <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                        <a class="nav-link active" href="{{ url('admin/profile') }}">Experience</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/profile/education') }}">Education</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/profile/skill') }}">Skill</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/profile/tools') }}">Tools</a>
                        </li>
                    </ul>
            </div><!-- End Tab Link -->

            <!-- Default Table Experience -->
                <table class="table" id="experience">
                    <thead class="fill">
                    <tr class="fill">
                        <th style="padding-right:28px;" scope="col">#</th>
                        <th class="fill" scope="col" >Start Date</th>
                        <th class="fill" scope="col" >End Date</th>
                        <th class="fill" scope="col" >Role</th>
                        <th class="fill" scope="col" >Office Name</th>
                        <th class="fill" scope="col" >Description</th>
                        <th class="fill" scope="col" >Resume</th>
                        <th class="fill" scope="col" >Action</th>
                    </tr>
                    </thead>

                    <tbody>
                        @foreach($profiles as $profile)
                        <tr class="fill">
                            <th scope="row"><div class="description">{{ $profile->id }}</div></th>
                            <td class="fill" ><div class="description">{{ $profile->start_date }}</div></td>
                            <td class="fill" ><div class="description">{{ $profile->end_date }}</div></td>
                            <td class="fill" ><div class="description">{{ $profile->role }}</div></td>
                            <td class="fill" ><div class="description">{{ $profile->office_name }}</div></td>
                            <td class="fill" ><div class="description">{{ $profile->description }}</div></td>
                            <td class="fill" ><div class="description"><a href="{{ $profile->resume }}" target="_blank">Lihat Dokumen</a></div></td>
                            <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-target="#EditData" data-bs-target="#EditData"><a href="{{ route('profile.edit', $profile->id) }}">Edit</a></button>
                            <span>
                                <a href="{{ route('profile.distroy', $profile->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                            </span></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <!-- End Default Table Example Experience -->
        </div>
    </div><!-- End Tabel -->


    
    <!-- Add Modal -->
    <div class="modal fade" id="AddData" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Start Date :</label>
                                <input class="form-control" name="start_date" placeholder="Start Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">End Date :</label>
                                <input class="form-control" name="end_date"placeholder="End Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Role :</label>
                                <input class="form-control" name="role" placeholder="Input Role" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Office Name :</label>
                                <input class="form-control" name="office_name" placeholder="Input Office Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control"  name="description" placeholder="Input Description" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Resume :</label>
                                <input class="form-control"  name="resume" placeholder="Input Resume" type="file" id="floatingInput">
                            </div>                  
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- End Vertically centered Modal-->
    </div> <!-- Add Modal -->

</main>

@endsection