@extends('layouts.creation')

@section('page-title', 'New Sponsorship')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-12">
                <div class="text-end pb-5">
                    <a href="{{ route('admin.sponsorship.index') }}" class="textLink me-2">
                        <i class="fa-solid fa-arrow-left pe-2"></i>
                        <span class="nodisplay">Back to accommodations</span> 
                    </a>
                </div>
            </div>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                Errori di validazione:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('admin.sponsorship.store') }}" method="post" enctype="multipart/form-data">

            @csrf

            <h5 class="mt-5 mb-4">Which accommodation you want to sponsor?</h5>

            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="accommodation_id" required="required">
                

                @foreach ($accommodations as $item)

                    <option class="{{ $errors->has('accommodation_id') ? 'is-invalid' : '' }}" 
                        value="{{ $item->id }}">{{ $item->title }} - {{ $item->address }}</option>
                @endforeach
            </select>
            <div class="row">
                @error('accommodation_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="row row-cols-lg-2 row-cols-sm-1 sponsortime">
                <div class="col-6">
                    <h5 class="mt-5 mb-4">Start date</h5>
                    <input type="datetime-local" id="startTime" name="startTime" required="required">
                </div>
                <div class="col-6">
                    <h5 class="mt-5 mb-4">Duration</h5>

                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="sponsorship_id" required="required">

                        @foreach ($sponsorships as $item)
                            <option class="{{ $errors->has('sponsorship_id') ? 'is-invalid' : '' }}" 
                                value="{{ $item->id }}">{{ $item->name }} - {{ $item->period }}h</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <button type="submit" class="basicBtn bigBtn primaryBtn mt-5">Create</button>

        </form>


    </div>
@endsection
