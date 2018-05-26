@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mahasiswa</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD

=======
>>>>>>> 22298ae68225c65f6684138a5cadd7c6f781d116
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 22298ae68225c65f6684138a5cadd7c6f781d116
