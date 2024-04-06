@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Table User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">User</li>
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

            <!-- Default Table -->
                    <table class="table" id="education">
                        <thead class="fill">
                        <tr class="fill">
                            <th style="padding-right:28px;" scope="col">#</th>
                            <th class="fill" scope="col" >Date Created</th>
                            <th class="fill" scope="col" >Username</th>
                            <th class="fill" scope="col" >Password</th>
                            <th class="fill" scope="col" >Email Address</th>
                            <th class="fill" scope="col" >Phone Number</th>
                            <th class="fill" scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="fill">
                                <th scope="row"><div class="description">1</div></th>
                                <td class="fill" ><div class="description">12 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Dwiyana Abitya</div></td>
                                <td class="fill" ><div class="description">@si120KU</div></td>
                                <td class="fill" ><div class="description">dwi@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890011</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">2</div></th>
                                <td class="fill" ><div class="description">11 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Esther Howard</div></td>
                                <td class="fill" ><div class="description">@sikAjasih</div></td>
                                <td class="fill" ><div class="description">es@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890000</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">3</div></th>
                                <td class="fill" ><div class="description">10 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Robert Fox</div></td>
                                <td class="fill" ><div class="description">@sikAjasih</div></td>
                                <td class="fill" ><div class="description">rob@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890888</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">4</div></th>
                                <td class="fill" ><div class="description">09 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Albert Flores</div></td>
                                <td class="fill" ><div class="description">@sikAjasih</div></td>
                                <td class="fill" ><div class="description">al@gmail.com</div></td>
                                <td class="fill" ><div class="description">0821998909999</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">5</div></th>
                                <td class="fill" ><div class="description">08 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Jones</div></td>
                                <td class="fill" ><div class="description">Imuet123</div></td>
                                <td class="fill" ><div class="description">jo@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890033</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">6</div></th>
                                <td class="fill" ><div class="description">07 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Jacob Jones</div></td>
                                <td class="fill" ><div class="description">@sikAjasih</div></td>
                                <td class="fill" ><div class="description">ja@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890666</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">7</div></th>
                                <td class="fill" ><div class="description">06 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Arlene McCoy</div></td>
                                <td class="fill" ><div class="description">Imuet123</div></td>
                                <td class="fill" ><div class="description">arb@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890821</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">8</div></th>
                                <td class="fill" ><div class="description">05 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Theresa Webb</div></td>
                                <td class="fill" ><div class="description">Imuet123</div></td>
                                <td class="fill" ><div class="description">the@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890809</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">9</div></th>
                                <td class="fill" ><div class="description">04 Sep 2021</div></td>                         
                                <td class="fill" ><div class="description">Darlene Robertson</div></td>
                                <td class="fill" ><div class="description">Imuet123</div></td>
                                <td class="fill" ><div class="description">dar@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890888</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>
                            <tr class="fill">
                                <th scope="row"><div class="description">10</div></th>
                                <td class="fill" ><div class="description">03 Sep 2021</div></td>
                                <td class="fill" ><div class="description">Courtney Henry</div></td>
                                <td class="fill" ><div class="description">Imuet123</div></td>
                                <td class="fill" ><div class="description">c0@gmail.com</div></td>
                                <td class="fill" ><div class="description">082199890888</div></td>
                                <td class="fill"><button type="button" class="btn btn-link" data-bs-toggle="modal" data-bs-target="#largeModal">Edit</button>
                                    <span><button type="button" class="btn btn-link" style="color:#dc3545;" onclick="alert('Apakah Anda Yakin Menghapus Data ini?')">Delete</button></span>
                                </td>    
                            </tr>                            
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                    

                    <section class="section">
                        <div class="row" style="display: flex;justify-content: space-between; align-items: center;">
                            <div class="col-lg-6">
                                <h6>Showing 10 of 30 Data</h6>
                            </div><!-- End Page Title -->
                                
                            <div class="col-lg-6">

                                <!-- Disabled and active states -->
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                    </ul>
                                </nav><!-- End Disabled and active states -->
                            </div>
                        </div>
                    </section>
                    
        </div>
    </div><!-- End Tabel -->


    <!-- Modal-->
    <div class="modal fade" id="largeModal" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Form User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3">
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Date Created :</label>
                                <input class="form-control" placeholder="Input Date Created" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Username :</label>
                                <input class="form-control" placeholder="Input Username" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Password :</label>
                                <input class="form-control" placeholder="Input Password" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Email Address :</label>
                                <input class="form-control" placeholder="Input Email Address" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Phone Number :</label>
                                <input class="form-control" placeholder="Input Phone Number" type="input" id="floatingInput">
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