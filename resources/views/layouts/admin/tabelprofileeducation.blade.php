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
                    <a class="nav-link" href="{{ url('admin/profile') }}">Experience</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link active" href="{{ url('admin/profile/education') }}">Education</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/profile/skill') }}">Skill</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ url('admin/profile/tools') }}">Tools</a>
                    </li>
                </ul>
        </div><!-- End Tab Link -->

            <!-- Default Table education -->
                    <table class="table" id="education">
                        <thead class="fill">
                        <tr class="fill">
                            <th style="padding-right:28px;" scope="col">#</th>
                            <th class="fill" scope="col" >Start Date</th>
                            <th class="fill" scope="col" >End Date</th>
                            <th class="fill" scope="col" >Major</th>
                            <th class="fill" scope="col" >School Name</th>
                            <th class="fill" scope="col" >Description</th>
                            <th class="fill" scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($profile_education as $education)

                            <tr class="fill">
                                <th scope="row"><div class="description">{{ $education->id }}</div></th>
                                <td class="fill" ><div class="description">{{ $education->start_date }}</div></td>
                                <td class="fill" ><div class="description">{{ $education->end_date }}</div></td>
                                <td class="fill" ><div class="description">{{ $education->major }}</div></td>
                                    <td class="fill" ><div class="description">{{ $education->school_name }}</div></td>
                                    <td class="fill" ><div class="description">{{ $education->description }}</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal"><a href="{{ route('education.edit', $education->id) }}">Edit</a></button>
                                        <span>
                                            <a href="{{ route('education.distroy', $education->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                                        </span></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Default Table Example education -->
                    
                    </div>
            </div><!-- End Tabel education -->
                   
        </div>
    </div><!-- End Tabel -->

    <!-- Add Modal -->
    <div class="modal fade" id="AddData" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Education</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" action="{{ route('education.store') }}" method="POST" enctype="multipart/form-data">
                        
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
                                <label for="basic-url" class="form-label">Major :</label>
                                <input class="form-control" name="major" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">School Name :</label>
                                <input class="form-control" name="school_name" placeholder="Input School Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control"  name="description" placeholder="Input Description" type="input" id="floatingInput">
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