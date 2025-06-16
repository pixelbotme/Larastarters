@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ __('File details') }}</h1>

    <div class="mb-3">
        <strong>{{ __('Name') }}:</strong> {{ $file->name }}
    </div>
    <div class="mb-3">
        <strong>{{ __('Path') }}:</strong> {{ $file->path }}
    </div>

    <a href="{{ route('files.edit', $file) }}" class="btn btn-secondary">{{ __('Edit') }}</a>
    <a href="{{ route('files.index') }}" class="btn btn-link">{{ __('Back') }}</a>
</div>
@endsection
