@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Data Brand') }}</div>

                    <div class="card-body">
                        <a href="{{ route('brand.create') }}" class="btn btn-primary">Add data</a>
                        <table class="table">
                            @if (session('success'))
                                <div class="alert alert-success fade show" role="alert">
                                    {{ session('success') }}
                                </div>
                            @endif
                            <thead class="table-secondary">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Name Brand</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no=1 @endphp

                                @foreach ($brand as $data)
                                    <tr>
                                        <th scope="row">{{ $no++ }}</th>
                                        <td>{{ $data->name_brand }}</td>
                                        <form action="{{ route('brand.destroy', $data->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td>
                                                <a href="{{ route('brand.edit', $data->id) }}"
                                                    class="btn btn-success">Edit</a>
                                                <a href="{{ route('brand.show', $data->id) }}"
                                                    class="btn btn-warning">Show</a>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
