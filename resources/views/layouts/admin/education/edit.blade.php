@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
     <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Edit Education</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/profile/education') }}">Profile</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    </div>
</section>

            <!-- Tabel -->
            <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ route('education.update', $profile_education->id) }}" method="POST">
                        @method('PUT')
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Start Date :</label>
                                <input class="form-control" value="{{ $profile_education->start_date }}" name="start_date" placeholder="Start Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">End Date :</label>
                                <input class="form-control" value="{{ $profile_education->end_date }}" name="end_date"placeholder="End Date" type="date" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Major :</label>
                                <input class="form-control" value="{{ $profile_education->major }}" name="major" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">School Name :</label>
                                <input class="form-control" value="{{ $profile_education->school_name }}" name="school_name" placeholder="Input Office Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control" value="{{ $profile_education->description }}"  name="description" placeholder="Input Description" type="input" id="floatingInput">
                            </div>               
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="{{ url('admin/profile/education') }}">Close</a></button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div><!-- End Tabel -->

    

</main>

@endsection