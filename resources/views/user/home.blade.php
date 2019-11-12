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
                    You are logged in as a user!
                    <br/>
                    Check out the <a href="{{ route('user.books.index') }}"> Books</a>!

                    <br/>
                    <br/>
                    Account Details: <br/>
                    Email: {{Auth::user()->email}} <br/>
                    Address: {{Auth::user()->customer->address}}<br/>
                    Address: {{Auth::user()->customer->phone}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
