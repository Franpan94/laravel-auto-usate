@extends('layouts.main')

@section('main-content')
    
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('cars.cars.store') }}" method="post">
                        @csrf
                        @method('post')
                        @include('cars.includes.form')
         
                    </form>
                </div>
            </div>
        </div>
    </main>

@endsection