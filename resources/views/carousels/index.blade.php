@extends('layouts.master')

@section('content')
    <h2>Carousels</h2>

    @forelse($carousels as $key => $carousel)
        <div class="row">
            <div class="col">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="media">
                            <img
                                class="mr-3"
                                src="/images/carousels/carousel-{{ $key + 1 <= 4 ? $key + 1 : rand(1,4) }}.jpg"
                                alt="Carousel {{ $key + 1 }}"
                            />
                            <div class="media-body">
                                <h5 class="mt-0">Carousel {{ $carousel->seat_type }}</h5>
                                <p>
                                    {{ $carousel->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @empty
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <p class="mb-0">
                            Oops, looks like we have no active carousels at this time! Check back later.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
@endsection