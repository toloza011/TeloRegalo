@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('update'))
                        <div class="alert alert-success" role="alert">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            {{ session('update') }}
                        </div>
                    @endif
                 Bienvenido a nuestra pagina
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
