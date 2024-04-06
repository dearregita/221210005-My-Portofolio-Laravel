@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Table Link Footer</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Link Footer</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
            
        <div class="col-lg-6" style="text-align:right; align-items:center">
            <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1" data-bs-toggle="modal" data-bs-target="#largeModal"></i> Add</button>
        </div>
    </div>
</section>




<!-- Tabel -->
    <div class="card">
        <div class="card-body">
            
            <!-- Default Table Skill -->
                <table class="table">
                        <thead class="fill">
                            <tr class="fill">
                                <th scope="col" style="padding-right:28px;">#</th>
                                <th class="fill" scope="col" >Footer Name</th>
                                <th class="fill" scope="col" >Link</th>
                                <th class="fill" scope="col" >Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr class="fill">
                                <th scope="row"><div class="description">1</div></th>
                                <td class="fill" ><div class="description">Contact</div></td>
                                <td class="fill" ><div class="description">wa.me/6282177371875</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">2</div></th>
                                <td class="fill" ><div class="description">Help</div></td>
                                <td class="fill" ><div class="description">behance.net/dearregita?log_shim_removal=1</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                        
                        </tbody>
                </table>
            <!-- End Default Table Example skill -->
                    
        </div>
    </div><!-- End Tabel -->

     <!-- Modal-->
     <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Link Footer</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Footer Name :</label>
                                <input class="form-control" placeholder="Input Footer Name" type="input" id="floatingInput">  
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Link :</label>
                                <input class="form-control" placeholder="Input Link" type="input" id="floatingInput">  
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