@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>
                    <a href="{{route('add_activity')}}">Tambah Aktiviti</a> | <a href="{{route('submit_activity')}}">Borang Penyertaan Aktiviti</a> | <a href="{{route('Homepageadmin')}}">Laman Utama - Admin</a> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
