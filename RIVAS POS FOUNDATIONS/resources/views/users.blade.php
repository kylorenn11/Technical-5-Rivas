@extends('layouts.app')

@section('content')
    <div class="section-head"><div><div class="eyebrow">Accounts</div><h1>User Accounts</h1><p>Sample records supplied by <code>UserController</code>.</p></div></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>#</th><th>User</th><th>Role</th><th>Status</th></tr></thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user['id'] }}</td>
                        <td><span class="person">{{ $user['name'] }}</span><span class="sub">{{ $user['email'] }}</span></td>
                        <td>{{ $user['role'] }}</td>
                        <td><span class="pill {{ $user['status'] === 'Inactive' ? 'inactive' : '' }}">{{ $user['status'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
