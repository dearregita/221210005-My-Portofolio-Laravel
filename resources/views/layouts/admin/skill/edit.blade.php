@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
     <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Edit skill</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item"><a href="{{ url('admin/profile/skill') }}">Profile</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    </div>
</section>

            <!-- Tabel -->
            <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ route('skill.update', $profile_skill->id) }}" method="POST">
                        @method('PUT')
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Skill Name :</label>
                                <input class="form-control" value="{{ $profile_skill->skill_name }}" name="skill_name" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
            
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><a href="{{ url('admin/profile/skill') }}">Close</a></button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div><!-- End Tabel -->

    

</main>

@endsection