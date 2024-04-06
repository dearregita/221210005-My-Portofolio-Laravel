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
                        <a class="nav-link active" href="{{ route('tabelprofileeducation') }}">Education</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofileskill') }}">Skill</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofiletools') }}">Tools</a>
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
                            <tr class="fill">
                                <th scope="row"><div class="description">1</div></th>
                                <td class="fill" ><div class="description">2021</div></td>
                                <td class="fill" ><div class="description">Present</div></td>
                                <td class="fill" ><div class="description">Sistem Informasi</div></td>
                                    <td class="fill" ><div class="description">Universitas Mercubuana Yogyakarta</div></td>
                                    <td class="fill" ><div class="description">I took the information systems study program, for the reason that the study program is in accordance with my current field of work.</div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">2</div></th>
                                <td class="fill" ><div class="description">2018</div></td>
                                <td class="fill" ><div class="description">2021</div></td>
                                <td class="fill" ><div class="description">Rekayasa Perangkat Lunak</div></td>
                                    <td class="fill" ><div class="description">SMK Telkom Malang</div></td>
                                    <td class="fill" ><div class="description">I majored in RPL, where I learned a lot. Learning PHP programming language and focusing on using Laravel(BackEnd) and Vue.Js(FrontEnd) frameworks. </div></td>
                                    <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                        <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                    </td>
                            </tr>
                        
                        </tbody>
                    </table>
                    <!-- End Default Table Example education -->
                    
                    </div>
            </div><!-- End Tabel education -->
                   
        </div>
    </div><!-- End Tabel -->

    <!-- Modal-->
    <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Education</h5>
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