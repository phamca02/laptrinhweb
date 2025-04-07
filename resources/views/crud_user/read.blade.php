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
                            <th>Email</th>
                            <th>tài khoản git </th>
                            <th>sở thích</th>
                            <th>avatar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$messi->id}}</td>
                            <td>{{$messi->name}}</td>
                            <td>{{$messi->email}}</td>
                            <td>{{$messi->tkgit}}</td>
                            <td>{{$messi->sothich}}</td>
                            <td><img src="{{ asset('storage/' . $messi->avatar) }}" alt="Avatar" style="width: 50px; height: 50px; border-radius: 50%;">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
