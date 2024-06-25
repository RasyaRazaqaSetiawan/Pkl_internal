@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Add Data Brand</div>
                    <div class="card-body">
                        <form action="{{route('brand.store')}}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="text" class="form-control @error('name_brand') is-invalid @enderror" name="name_brand" required>
                                @error('name_brand')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success">Tambah</button>
                            <a href="{{ url('brand') }}" class="btn btn-primary">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
