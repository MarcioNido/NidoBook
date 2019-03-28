@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notebooks</div>

                    <div class="card-body">
                        @foreach ($notebooks as $notebook)
                            <h6>{{ $notebook->name }} - {{ $notebook->id }}</h6>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection