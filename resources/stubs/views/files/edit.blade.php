@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('Edit File') }}</h1>

    <form action="{{ route('files.update', $file) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label required">{{ __('Name') }}</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $file->name) }}" required>
            @error('name')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="mb-3">
            <label class="form-label required">{{ __('Path') }}</label>
            <input type="text" name="path" class="form-control @error('path') is-invalid @enderror" value="{{ old('path', $file->path) }}" required>
            @error('path')<div class="invalid-feedback">{{ $message }}</div>@enderror
        </div>

        <button class="btn btn-primary">{{ __('Update') }}</button>
    </form>
</div>
@endsection
