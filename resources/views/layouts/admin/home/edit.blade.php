@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
     <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Edit Home</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../tabelhome">Home</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    </div>
</section>

            <!-- Tabel -->
            <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ route('home.update', $home->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Name :</label>
                                <input class="form-control" value="{{ $home->name }}" name="name" placeholder="Start Date" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Work :</label>
                                <input class="form-control" value="{{ $home->work }}" name="work"placeholder="End Date" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Description :</label>
                                <input class="form-control" value="{{ $home->description }}" name="description" placeholder="Input Role" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Social Media :</label>
                                <input class="form-control" value="{{ $home->social_media }}" name="social_media" placeholder="Input Office Name" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Photo :</label>
                                <input class="form-control" name="photo" placeholder="Input photo" type="file" id="floatingInput">
                                <a href="{{ $home->photo }}" target="_blank">Lihat Dokumen</a>
                            </div>                  
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                    </form>
                </div>
            </div><!-- End Tabel -->

    

</main>

@endsection