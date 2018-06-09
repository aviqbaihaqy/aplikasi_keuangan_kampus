<<<<<<< HEAD
@extends('layout.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
<div class="col-md-8">
<div class="card">
<div class="card-header">Mahasiswa</div>

<div class="card-body"
@if (session('status'))
<div class="alert alert-success">
{{session ('status')}}
</div>
@endif

You are logged in!
</div>
</div>
</div>
</div>
</div>
@endsection
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">Dashboard</div>
=======
                <div class="card-header">Mahasiswa</div>
>>>>>>> 2c8eeb53200754872485e40d4fe7d4906c9057e7

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD

=======
>>>>>>> 2c8eeb53200754872485e40d4fe7d4906c9057e7
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
