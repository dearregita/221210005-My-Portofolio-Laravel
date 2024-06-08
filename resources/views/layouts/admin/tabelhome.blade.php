@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Table Home</h1>
            <nav>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active">Home</li>
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

    <div class="card">
            <div class="card-body">
              <!-- Default Table -->
              <table class="table">
                <thead class="fill">
                  <tr class="fill">
                    <th style="padding-right:28px;" scope="col">#</th>
                    <th class="fill" scope="col">Name</th>
                    <th class="fill" scope="col">Work</th>
                    <th class="fill" scope="col">Description</th>
                    <th class="fill" scope="col">Social Media</th>
                    <th class="fill" scope="col">Photo</th>
                    <th class="fill" scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($home as $h)
                    <tr class="fill">
                        <th scope="row"><div class="description">{{ $h->id }}</div></th>
                        <td class="fill" ><div class="description">{{ $h->name }}</div></td>
                        <td class="fill" ><div class="description">{{ $h->work }}</div></td>
                        <td class="fill" ><div class="description">{{ $h->description }}</div></td>
                        <td class="fill" ><div class="description">{{ $h->social_media }}</div></td>
                        <td class="fill" ><div class="description"><a href="{{ $h->photo }}" target="_blank">Lihat Dokumen</a></div></td>
                        <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-target="#EditData" data-bs-target="#EditData"><a href="{{ route('home.edit', $h->id) }}">Edit</a></button>
                        <span>
                            <a href="{{ route('home.distroy', $h->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                        </span></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
    </div>

     <!-- Add Modal -->
     <div class="modal fade" id="AddData" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Experience</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form class="row g-3" action="{{ route('home.store') }}" method="POST" enctype="multipart/form-data">
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Name :</label>
                                <input class="form-control" name="name" placeholder="Input Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Work :</label>
                                <input class="form-control" name="work" placeholder="Input Work" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control" name="description" placeholder="Input Description" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Social Media :</label>
                                <input class="form-control" name="social_media" placeholder="Input Social Media" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Photo :</label>
                                <input class="form-control"  name="photo" placeholder="Upload Photo" type="file" id="floatingInput">
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