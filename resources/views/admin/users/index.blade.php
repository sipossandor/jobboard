@extends('layouts.admin')
@section('title', $viewData["title"])
@section('content')

    <div class="card">
        <div class="card-header">
            Manage Users
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Created At</th>
                    <th scope="col">Updated At</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($viewData["users"] as $user)
                    <tr>
                        <td>{{ $user->getId() }}</td>
                        <td>{{ $user->getName() }}</td>
                        <td>{{ $user->getEmail() }}</td>
                        <td>{{ $user->getRole() }}</td>
                        <td>{{ $user->getCreatedAt() }}</td>
                        <td>{{ $user->getUpdatedAt() }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{route('admin.users.edit', ['id'=> $user->getId()])}}">
                                <i class="bi-pencil-fill"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

