@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">

<section class="section">
    <div class="row">
        <div class="pagetitle col-12">
            <h1>Table Contact Us</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item">Tables</li>
                    <li class="breadcrumb-item active">Contact Us</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->
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
                            <th class="fill" scope="col" >Full Name</th>
                            <th class="fill" scope="col" >Email Address</th>
                            <th class="fill" scope="col" >Phone Number</th>
                            <th class="fill" scope="col" >Message</th>
                            <th class="fill" scope="col" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($contactus as $c)
                            <tr class="fill">
                                <th scope="row"><div class="description">{{ $c->id }}</div></th>
                                <td class="fill" ><div class="description">{{ $c->name }}</div></td>
                                <td class="fill" ><div class="description">{{ $c->email }}</div></td>
                                <td class="fill" ><div class="description">{{ $c->phone }}</div></td>
                                <td class="fill" ><div class="description">{{ $c->message }}</div></td>
                                <td class="fill">
                                    {{-- <button type="button" class="btn btn-link"> --}}
                                        <a href="{{ route('contactus.distroy', $c->id) }}" class="btn btn-link" style="color:#dc3545;" onclick="return confirm('Apakah Anda Yakin Menghapus Data ini?')">Delete</a>
                                    {{-- </button> --}}
                                </td>
                            </tr>
                            @endforeach
                       
                        </tbody>
                    </table>
                    <!-- End Default Table Example -->
        </div>
    </div><!-- End Tabel -->

</main>

@endsection