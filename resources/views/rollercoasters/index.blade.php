@extends('layouts.master')

@section('content')
    <h2>Rollercoasters</h2>

    <div class="row">
        <div class="col">
            <div class="card">
                <img src="/images/rollercoaster-header.jpg" class="card-img-top" />
                @foreach($rollercoasters as $rollercoaster)
                    <div class="accordion-item">
                        <div class="card-header header">
                            {{ $rollercoaster->name }}
                        </div>
                        <div class="card-body content">
                            {{ $rollercoaster->description }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection