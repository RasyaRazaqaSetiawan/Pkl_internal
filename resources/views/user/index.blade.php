@extends('layouts.backend')

@section('content')
    <h6 class="mb-0 text-uppercase">ACCESS CONTROL LIST</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="col-lg-2">
                <a href="{{ route('user.create') }}" type="button" class="btn btn-success px-4 raised d-flex gap-2">
                    <i class="material-icons-outlined">account_circle</i>Account</a>
            </div>
            <table class="table mb-0 table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $item)
                        <tr>
                            <th scope="row">{{ $loop->index + 1 }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->is_admin ? 'Admin' : 'user' }}</td>
                            <td>
                                <a href="{{ route('user.show', $item->id) }}" type="button"
                                    class="btn btn-primary raised gap-2">
                                    <i class="material-icons-outlined">search</i></a>
                                <a href="{{ route('user.edit', $item->id) }}" type="button"
                                    class="btn btn-warning px-5">EDIT</a>
                                <a class="btn ripple btn-danger px-5" href=""
                                    onclick="event.preventDefault(); document.getElementById('destroy-form').submit();">
                                    {{ __('Hapus') }}
                                </a>

                                <form id="destroy-form" action="{{ route('user.destroy', $item->id) }}" 
                                    method="POST" class="d-none">
                                    @method('DELETE')
                                    @csrf
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
