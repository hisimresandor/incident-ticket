@extends('layout')

@section('title', 'Hibajegy hozzáadása')

@section('content')
    <div class="border rounded p-5 pt-4 pb-4 bg-white">
        <h3>Hibajegy beküldése</h3>
        <form method="post" action="{{route('tickets.store')}}">
            @csrf
            <div class="pt-4">
                <label for="name" class="form-label">Név:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                @error('name')
                    <p class="text-danger">*Adjon meg egy nevet!</p>
                @enderror
            </div>

            <div class="pt-4">
                <label for="email" class="form-label">E-mail cím:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}">
                @error('email')
                <p class="text-danger">*Adjon meg egy email-címet!</p>
                @enderror
            </div>

            <div class="pt-4">
                <label for="subject" class="form-label">Tárgy:</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{old('subject')}}">
                @error('subject')
                <p class="text-danger">*Adja meg a hibajegy tárgyát!</p>
                @enderror
            </div>

            <div class="pt-4">
                <label for="content" class="form-label">Tartalom:</label>
                <textarea class="form-control" id="content" rows="5" name="content">{{old('content')}}</textarea>
                @error('content')
                <p class="text-danger">*Adja meg a hibajegy tartalmát!</p>
                @enderror
            </div>

            <div class="pt-4">
                <input type="submit" class="btn btn-primary" value="Hibajegy beküldése">
            </div>

        </form>
    </div>
@endsection
