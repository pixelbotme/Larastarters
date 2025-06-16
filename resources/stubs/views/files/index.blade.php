@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between mb-3">
        <h1>{{ __('Files') }}</h1>
        <a href="{{ route('files.create') }}" class="btn btn-primary">{{ __('Add File') }}</a>
    </div>

    @if ($message = session('success'))
        <div class="alert alert-success">{{ $message }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Path') }}</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach($files as $file)
            <tr>
                <td>{{ $file->name }}</td>
                <td>{{ $file->path }}</td>
                <td class="text-end">
                    <a href="{{ route('files.show', $file) }}" class="btn btn-sm btn-info">{{ __('View') }}</a>
                    <a href="{{ route('files.edit', $file) }}" class="btn btn-sm btn-secondary">{{ __('Edit') }}</a>
                    <form action="{{ route('files.destroy', $file) }}" method="POST" class="d-inline-block" onsubmit="return confirm('{{ __('Are you sure?') }}')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    {{ $files->links() }}
</div>
@endsection
