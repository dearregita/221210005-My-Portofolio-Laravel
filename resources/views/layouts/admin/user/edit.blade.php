@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
     <div class="row">
        <div class="pagetitle col-lg-6">
            <h1>Edit User</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="../tabeluser">Profile</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
    </div>
</section>

            <!-- Tabel -->
            <div class="card">
                <div class="card-body">
                <form class="row g-3" action="{{ route('user.update', $users->id) }}" method="POST">
                        @method('PUT')
                        
                        {{ csrf_field() }}
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Date :</label>
                                <input class="form-control" value="{{ $users->date }}" name="date" placeholder="Input Major" type="date" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Username :</label>
                                <input class="form-control" value="{{ $users->username }}" name="username" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Password :</label>
                                <input class="form-control" value="{{ $users->password }}" name="password" placeholder="Input Major" type="input" id="floatingInput">
                            </div>
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Email Address :</label>
                                <input class="form-control" value="{{ $users->email }}" name="email" placeholder="Input Major" type="input" id="floatingInput">
                            </div> 
                            <div class="col-md-6">
                                <label for="basic-url" class="form-label">Phone Number :</label>
                                <input class="form-control" value="{{ $users->phone }}" name="phone" placeholder="Input Major" type="input" id="floatingInput">
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