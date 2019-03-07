@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="full-height">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p>Din sida info...</p>
                        <p>Dina uthyrda möbler</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
