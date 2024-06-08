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
            <button type="button" class="btn btn-primary"><i class="bi bi-plus me-1" data-bs-toggle="modal" data-target="#AddData" data-bs-target="#AddData"></i> Add</button>
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

            <!-- Default Table -->
                    <table class="table" id="education">
                        <thead class="fill">
                        <tr class="fill">
                            <th style="padding-right:28px;" scope="col">#</th>
                            <th class="fill" scope="col" >Date</th>
                            <th class="fill" scope="col" >Username</th>
                            <th class="fill" scope="col" >Password</th>
                            <th class="fill" scope="col" >Email Address</th>
                            <th class="fill" scope="col" >Phone Number</th>
                            <th class="fill" scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr class="fill">
                                <th scope="row"><div class="description">{{ $user->id }}</div></th>
                                <td class="fill"  ><div class="description">{{ $user->date }}</div></td>
                                <td class="fill"  ><div class="description">{{ $user->username }}</div></td>
                                <td class="fill"  ><div class="description">{{ $user->password }}</div></td>
                                <td class="fill"  ><div class="description">{{ $user->email }}</div></td>
                                <td class="fill"  ><div class="description">{{ $user->phone }}</div></td>
                                <td class="fill" >
                                    <button type="button" class="btn btn-link" data-bs-toggle="modal"><a href="{{ route('user.edit', $user->id) }}">Edit</a></button>
                                    <span>    
                                        <a href="{{ route('user.distroy', $user->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                                    </span>
                                </td>
                            </tr>  
                            @endforeach                          
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
                    
        </div>
    </div><!-- End Tabel -->


<!-- Add Modal -->
 <div class="modal fade" id="AddData" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Form User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form class="row g-3" action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                    
                    {{ csrf_field() }}
                       
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Date :</label>
                            <input class="form-control" name="date" placeholder="Input Date" type="date" id="floatingInput">
                        </div>
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Username :</label>
                            <input class="form-control" name="username" placeholder="Input Username" type="input" id="floatingInput">
                        </div>                
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Password :</label>
                            <input class="form-control" name="password" placeholder="Input Password" type="input" id="floatingInput">
                        </div> 
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Email Address :</label>
                            <input class="form-control" name="email" placeholder="Input Email Address" type="input" id="floatingInput">
                        </div> 
                        <div class="col-md-6">
                            <label for="basic-url" class="form-label">Phone Number :</label>
                            <input class="form-control" name="phone" placeholder="Input Phone Number" type="input" id="floatingInput">
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