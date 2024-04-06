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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#largeModal"><i class="bi bi-plus me-1"></i> Add</button>
        </div>
    </div>
</section>




<!-- Tabel -->
    <div class="card">
        <div class="card-body">

            <!-- Tab Link -->
            <div class="card-header">
                    <ul class="nav nav-pills card-header-pills">
                        <li class="nav-item">
                        <a class="nav-link " href="{{ route('tabelprofileexperience') }}">Experience</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofileeducation') }}">Education</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofileskill') }}">Skill</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link active" href="{{ route('tabelprofiletools') }}">Tools</a>
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
                            <tr class="fill">
                                <th scope="row"><div class="description">1</div></th>
                                <td class="fill" ><div class="description">Figma</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">2</div></th>
                                <td class="fill" ><div class="description">Adobe XD</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">3</div></th>
                                <td class="fill" ><div class="description">LottieFiles<</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">4</div></th>
                                <td class="fill" ><div class="description">Marvel</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">5</div></th>
                                <td class="fill" ><div class="description">Adobe Illustration</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">6</div></th>
                                <td class="fill" ><div class="description">Adobe After Effect</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>

                        </tbody>
                    </table>
                    <!-- End Default Table Example skill -->
                    
                    </div>
            </div><!-- End Tabel tools -->

        </div>
    </div><!-- End Tabel -->

    <!-- Modal-->
    <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tools</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Tools Name :</label>
                                <input class="form-control" placeholder="Input Tools Name" type="input" id="floatingInput">  
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