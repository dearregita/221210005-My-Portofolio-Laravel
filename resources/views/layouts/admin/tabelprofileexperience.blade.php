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
                        <a class="nav-link active" href="{{ route('tabelprofileexperience') }}">Experience</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofileeducation') }}">Education</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofileskill') }}">Skill</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="{{ route('tabelprofiletools') }}">Tools</a>
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
                        <th class="fill" scope="col" >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr class="fill">
                            <th scope="row"><div class="description">1</div></th>
                            <td class="fill" ><div class="description">Agus 2021</div></td>
                            <td class="fill" ><div class="description">Present</div></td>
                            <td class="fill" ><div class="description">UI/UX Designer</div></td>
                                <td class="fill" ><div class="description">PT Infosys Solusi Terpadu, Yogyakarta</div></td>
                                <td class="fill" ><div class="description">I am responsible for improving the user experience. IST collaborated with Bank Tabungan Negara, Mandiri, BRI and others to design a high-fidelity design that would provide an intuitive user experience while meeting all their needs. I am also responsible for developing design systems for mobile and web platforms as well as icon creation, illustration as needed.</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>
                        </tr>
                        <tr class="fill">
                            <th scope="row"><div class="description">2</div></th>
                            <td class="fill" ><div class="description">Feb 2021</div></td>
                            <td class="fill" ><div class="description">Mar 2021</div></td>
                            <td class="fill" ><div class="description">Tim Desain (Magang)</div></td>
                                <td class="fill" ><div class="description">Griya Website, Yogyakarta</div></td>
                                <td class="fill" ><div class="description">Worked on many projects involving various design tools, including Adobe Photoshop, CorelDraw, and Adobe Illustrator. I have worked on many projects for companies, where the designs will be sold on several platforms.</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>
                        </tr>
                        <tr class="fill">
                            <th scope="row"><div class="description">3</div></th>
                            <td class="fill" ><div class="description">Des 2020</div></td>
                            <td class="fill" ><div class="description">Jan 2021</div></td>
                            <td class="fill" ><div class="description">Tim IT (Magang)</div></td>
                                <td class="fill" ><div class="description">Griya Website, Yogyakarta</div></td>
                                <td class="fill" ><div class="description">Worked on many projects involving various design tools, including Adobe Photoshop, CorelDraw, and Adobe Illustrator. I have worked on many projects for companies, where the designs will be sold on several platforms.</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" data-bs-toggle="modal" data-bs-target="#verticalycentered">Delete</button></span>
                                </td>
                        </tr>
                        <tr class="fill">
                            <th scope="row"><div class="description">4</div></th>
                            <td class="fill" ><div class="description">Sep 2020</div></td>
                            <td class="fill" ><div class="description">Nov 2020</div></td>
                            <td class="fill" ><div class="description">Web Desain (Magang)</div></td>
                                <td class="fill" ><div class="description">Kominfo Banyuwangi, Banyuwangi</div></td>
                                <td class="fill" ><div class="description">Worked on many projects involving various design tools, including Adobe Photoshop, CorelDraw, and Adobe Illustrator. I have worked on many projects for companies, where the designs will be sold on several platforms.</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>
                        </tr>
                    </tbody>
                </table>
              <!-- End Default Table Example Experience -->

        </div>
    </div><!-- End Tabel -->

    <!-- Upload file -->
    <div class="card">
            <div class="card-body">

                <div class="row mb-3">
                    <div class="col-lg-6">
                    <h5 class="card-title">Resume</h5>
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

            </div>
    </div><!-- End Upload file -->

    <!-- Modal-->
    <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form Experience</h5>
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
                                <label for="basic-url" class="form-label">Role :</label>
                                <input class="form-control" placeholder="Input Role" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Office Name :</label>
                                <input class="form-control" placeholder="Input Office Name" type="input" id="floatingInput">
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