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

                    Hi {{ Auth::user()->name }}!
                    <br/>
                    You are now logged in as an Admin. </br>
                    <a href="{{ route('admin.books.index')}}"> Books</a>!</br>
                </div>
            </div> 
        </div>
    </div>
</div>
@endsection
