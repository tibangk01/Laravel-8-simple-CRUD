@extends('layouts.app', ['title' => 'Users'])

@section('content')

    <div class="row pb-3 justify-content-center">

        <div class="col-md-10">

            <div class="d-flex justify-content-end">

                <a class="btn btn-primary rounded-0" href="{{ route('user.create') }}">

                    <i class="fa fa-plus" aria-hidden="true"></i> Add

                </a>

            </div>

        </div>

    </div>

    <div class="row pt-2 pb-1 justify-content-center">

        <div class="col-md-10">

            @if ($message = Session::get('success'))

                <div class="alert alert-success rounded-0 alert-dismissible fade show" role="alert">

                    <p>{{ $message }}</p>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

            @endif

        </div>

    </div>

    <div class="row justify-content-center text-center">

        <div class="col-md-10">

            <div class="table-responsive">

                <table class="table table-hover table-bordered">

                    <thead>

                        <tr>

                            <th>First Name</th>

                            <th>Last Name</th>

                            <th>Creation Date</th>

                            <th>Actions</th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse ( $users as $user )

                            <tr>

                                <td>{{ $user->first_name }}</td>

                                <td>{{ $user->last_name }}</td>

                                <td>{{ $user->created_at->format('Y-m-d') }}</td>

                                <td>

                                    <a class="badge bg-primary" href="{{ route('user.show', $user) }}">

                                        <i class="fa fa-eye" aria-hidden="true"></i>

                                    </a>

                                    &nbsp;

                                    <a class="badge bg-warning" href="{{ route('user.edit', $user) }}">

                                        <i class="fas fa-edit" aria-hidden="true"></i>

                                    </a>

                                    &nbsp;

                                    <form onsubmit="return confirm('Are you sure you want to delete?')"
                                        action="{{ route('user.destroy', $user) }}" method="post"
                                        style="display: inline;">

                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="badge bg-warning border-0">

                                            <i class="fas fa-trash" aria-hidden="true"></i>

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="4">

                                    No user

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection
