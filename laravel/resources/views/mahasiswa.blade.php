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
                <div class="card-header">Mahasiswa</div>
=======
<<<<<<< HEAD
                <div class="card-header">Dashboard</div>
=======
                <div class="card-header">Mahasiswa</div>
>>>>>>> 2c8eeb53200754872485e40d4fe7d4906c9057e7
<<<<<<< HEAD
>>>>>>> f2cb4b3df7b49436242f26309659f6ad440e32cc
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
>>>>>>> 3478376f421014261027730e029fbcad3b8de29e

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
<<<<<<< HEAD
				
				You are logged in!
=======
=======

=======
<<<<<<< HEAD

=======
>>>>>>> 2c8eeb53200754872485e40d4fe7d4906c9057e7
<<<<<<< HEAD
>>>>>>> f2cb4b3df7b49436242f26309659f6ad440e32cc
=======
>>>>>>> e97ebe228fa8ec8b7b8aa7cf40913bc46db8def3
<<<<<<< HEAD
>>>>>>> 3478376f421014261027730e029fbcad3b8de29e
=======
>>>>>>> 791636a6da7eff654ad877289b22430c48dfa560
>>>>>>> 52f8885ce33c4996eaefc605f0be0c036c2cbd85
                    You are logged in!
>>>>>>> 22298ae68225c65f6684138a5cadd7c6f781d116
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
<<<<<<< HEAD
=======
@endsection
<<<<<<< HEAD
>>>>>>> f2cb4b3df7b49436242f26309659f6ad440e32cc
=======
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
>>>>>>> 3478376f421014261027730e029fbcad3b8de29e
=======
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 22298ae68225c65f6684138a5cadd7c6f781d116
=======
>>>>>>> 7bd1b8541fc7737ead37155eca430eb70e2e350a
>>>>>>> 791636a6da7eff654ad877289b22430c48dfa560
>>>>>>> 52f8885ce33c4996eaefc605f0be0c036c2cbd85
