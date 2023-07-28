@extends('layout')

@section('title', 'Kezdőlap')

@section('content')
    <div class="row">
        <div class="col-6">
            <a href="{{route('tickets.create')}}" class="link-underline link-underline-opacity-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Hibajegy küldése</h5>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-6">
            <a href="#" class="link-underline link-underline-opacity-0">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Admin belépés</h5>
                    </div>
                </div>
            </a>
        </div>
    </div>
@endsection
