@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Welcome, {{ Auth::user()->name }}!</p>
                    <p>{{ __('You are logged in!') }}</p>

                    <!-- Button to go to the index page -->
                    <a href="{{ route('index') }}" class="btn btn-primary">{{ __('Go to Home Page') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
