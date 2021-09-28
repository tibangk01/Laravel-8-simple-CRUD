@extends('layouts.app', ['title' => 'Edit a user'])

@section('content')

<div class="row pb-2 justify-content-center">

    <div class="col-md-10">

        <div class="d-flex justify-content-start">

            <a class="btn btn-primary rounded-0" href="{{ route('user.index') }}">

                <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back

            </a>

        </div>

    </div>

</div>


    <div class="row pt-2 pb-1 justify-content-center">

        <div class="col-md-10">

            @if ($errors->any())

                <div class="alert alert-danger rounded-0 alert-dismissible fade show" role="alert">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>

                </div>

            @endif

        </div>

    </div>


    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="card">

                <h5 class="card-header">User</h5>

                <div class="card-body">

                    <form action="{{ route('user.update', $user) }}" method="POST">

                        @csrf

                        @method('PUT')

                        <div class="mb-3">

                            <label for="first_name" class="form-label">First Name</label>

                            <input class="form-control rounded-0" type="text" name="first_name"
                            value="{{ $user->first_name }}" placeholder="Enter user first name" autofocus>

                        </div>

                        <div class="mb-3">

                            <label for="last_name" class="form-label">Last Name</label>

                            <input class="form-control rounded-0" type="text" name="last_name"
                                value="{{ $user->last_name }}" placeholder="Enter user last name">

                        </div>

                        <button type="submit" class="btn btn-primary rounded-0">Edit</button>

                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
