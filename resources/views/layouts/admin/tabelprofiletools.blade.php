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
                <a class="nav-link" href="{{ url('admin/profile/education') }}">Education</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('admin/profile/skill') }}">Skill</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" href="{{ url('admin/profile/tools') }}">Tools</a>
                </li>
            </ul>
    </div><!-- End Tab Link -->


             <!-- Default Table tools -->
             <table class="table">
                        <thead class="fill">
                        <tr class="fill">
                            <th style="padding-right:28px;" scope="col">#</th>
                            <th class="fill" scope="col" >Tools Name</th>
                            <th class="fill" scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($profile_tool as $tools)
                            <tr class="fill">
                                <th scope="row"><div class="description">{{ $tools->id }}</div></th>
                                <td class="fill" ><div class="description">{{ $tools->tools_name }}</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal"><a href="{{ route('tools.edit', $tools->id) }}">Edit</a></button>
                                    <span>
                                        <a href="{{ route('tools.distroy', $tools->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                                    </span></td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <!-- End Default Table Example tools -->
                    
                    </div>
            </div><!-- End Tabel tools -->

        </div>
    </div><!-- End Tabel -->

    <!-- Add Modal -->
 <div class="modal fade" id="AddData" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form Tools</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form class="row g-3" action="{{ route('tools.store') }}" method="POST" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                       
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Tools Name :</label>
                            <input class="form-control" name="tools_name" placeholder="Input Tools Name" type="input" id="floatingInput">
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