@extends('layouts.backsite')

@section('content')
    <!-- OVERVIEW -->
    <div class="panel panel-headline">
        <div class="panel-heading">
            <h3 class="panel-title">Tambah Pengguna</h3>
        </div>
    </div>
    
    <div class="panel">
        <div class="panel-body">
            <form action="{{route('pengguna.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Username</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" name="username" maxlength="16" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password" minlength="6" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-4">
                                <label>Konfirmasi Password</label>
                            </div>
                            <div class="col-md-8">
                                <input type="password" name="password1" minlength="6" class="form-control" required>
                            </div>
                        </div>
                        <button type="submit" class="pull-right btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('username').on('keypress', function(e) {
                if (e.which == 32){
                    // console.log('No SPACE');
                    return false;
                }
            });
        });
    </script>
@endsection