@extends('layouts.app', ['title' => 'Show a user'])

@section('content')

    <div class="row pt-5 pb-1 justify-content-center">

        <div class="col-md-10">

            <div class="d-flex justify-content-start">

                <a class="btn btn-primary rounded-0" href="{{ route('user.index') }}">

                    <i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Back

                </a>

            </div>

        </div>

    </div>

    <div class="row justify-content-center">

        <div class="col-md-10">

            <div class="table-responsive">

                <table class="table table-hover table-bordered">

                    <thead>

                        <tr>

                            <th>Key</th>

                            <th>Value</th>

                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>First Name</td>
                            <td>{{ $user->first_name }}</td>
                        </tr>

                        <tr>
                            <td>Last Name</td>
                            <td>{{ $user->last_name }}</td>
                        </tr>

                        <tr>
                            <td>Creation date</td>
                            <td>{{ $user->created_at->format('Y-m-d') }}</td>
                        </tr>

                        <tr>

                            <td>Action</td>

                            <td>

                                <a class="badge bg-warning" href="{{ route('user.edit', $user) }}">

                                    <i class="fas fa-edit" aria-hidden="true"></i>

                                </a>

                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

@endsection
