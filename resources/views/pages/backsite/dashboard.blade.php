@extends('layouts.backsite')

@section('content')
<!-- MAIN CONTENT -->
<div class="main-content">
    <div class="container-fluid">
        <!-- OVERVIEW -->
        <div class="panel panel-headline">
            <div class="panel-heading">
                <h3 class="panel-title">Dashboard</h3>
                <p class="panel-subtitle">Selamat datang, {{ auth()->user()->name }}</p>
            </div>
        </div>
    </div>
</div>
<!-- END MAIN CONTENT -->
@endsection
