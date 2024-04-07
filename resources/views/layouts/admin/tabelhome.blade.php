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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bi bi-plus me-1"></i> Add</button>
        </div>
    </div>
</section>

    <div class="card">
            <div class="card-body">
              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Work</th>
                    <th scope="col">Description</th>
                    <th scope="col">Social Media</th>
                    <th scope="col">Photo</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer</td>
                    <td>Lorem ipsum dolor sit amet consectetur.</td>
                    <td>Instagram, LinkedIn</td>
                    <td>photo.jpg</td>
                    <td><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
    </div>

     <!-- Modal-->
     <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Home</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Start Date :</label>
                                <input class="form-control" placeholder="Start Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">End Date :</label>
                                <input class="form-control" placeholder="End Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Major :</label>
                                <input class="form-control" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">School Name :</label>
                                <input class="form-control" placeholder="Input School Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control" placeholder="Input Description" type="input" id="floatingInput">
                            </div>                 
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div>
        </div><!-- End Vertically centered Modal-->
    </div> <!-- Edit Modal-->

</main>

@endsection