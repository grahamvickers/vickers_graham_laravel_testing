@extends('layouts.master')

@section('content')
    <h2>Clowns</h2>

    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{ route('clowns.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input
                                class="form-control {{ $errors->has('name') ? 'is-invalid' :'' }}"
                                name="name"
                                id="name"
                            />
                            {!! $errors->first('name','<span class="invalid-feedback">:message</span>') !!}
                        </div>
                        <button type="submit" class="btn btn-primary">Create Clown</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="row">
                @forelse($clowns as $clown)
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body text-center">
                                <img src="/images/clowns/clown-{{ rand(1,7) }}.jpg" alt="{{ $clown->name }} Icon" />
                                <br />
                                <p class="lead">
                                    {{ $clown->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <p>
                                    Oops, looks like we have no clowns at this time! Check back later for a new roster.
                                </p>
                            </div>
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection