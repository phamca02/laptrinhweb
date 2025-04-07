@extends('dashboard')

@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>tkgit</th>
                        <th>sothich</th>
                        <th>Email</th>
                        <th>Avatar</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <th>{{ $user->id }}</th>
                        <th>{{ $user->name }}</th>
                        <th>{{ $user->tkgit }}</th>
                        <th>{{ $user->sothich }}</th>
                        <th>{{ $user->email }}</th>
                        <th>
                            @if($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                            @else
                            <img src="{{ asset('path/to/default-avatar.png') }}" alt="Default Avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                            @endif
                        </th>
                        <th>
                            <a href="{{ route('user.readUser', ['id' => $user->id]) }}">View</a> |
                            <a href="{{ route('user.updateUser', ['id' => $user->id]) }}">Edit</a> |
                            <a href="{{ route('user.deleteUser', ['id' => $user->id]) }}">Delete</a>
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@endsection