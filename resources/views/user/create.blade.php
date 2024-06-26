@extends('layouts.backend')

@section('content')
    <div class="col-12 col-xl-12">
        <div class="card">
            <div class="card-body p-4">
                <h5 class="mb-4">Add User</h5>
                <form class="row g-3" method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <div class="col-md-12">
                        <label for="name" class="form-label">Full name</label>
                        <div class="position-relative input-icon">
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Full name">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">person_outline</i></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="email" class="form-label">Email</label>
                        <div class="position-relative input-icon">
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                value="{{ old('email') }}" required autocomplete="email" placeholder="example@user.com">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">email</i></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="password" class="form-label">Password</label>
                        <div class="position-relative input-icon">
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder="Password" required>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">lock_open</i></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <div class="position-relative input-icon">
                            <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" id="password_confirmation" placeholder="Confirm Password"
                                required>
                            @error('password_confirmation')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="position-absolute top-50 translate-middle-y"><i
                                    class="material-icons-outlined fs-5">lock_open</i></span>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="is_admin" class="form-label">Is Admin</label>
                        <select id="is_admin" name="is_admin" class="form-select">
                            <option selected>Choose...</option>
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="check_me_out">
                            <label class="form-check-label" for="check_me_out">Check me out</label>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-grd-primary px-4">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection    