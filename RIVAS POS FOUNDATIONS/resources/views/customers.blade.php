@extends('layouts.app')

@section('content')
    <div class="section-head"><div><div class="eyebrow">Accounts</div><h1>Customer Accounts</h1><p>Sample records supplied by <code>CustomerController</code>.</p></div></div>
    <div class="table-wrap">
        <table>
            <thead><tr><th>#</th><th>Customer</th><th>Phone</th><th>Status</th></tr></thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer['id'] }}</td>
                        <td><span class="person">{{ $customer['name'] }}</span><span class="sub">{{ $customer['email'] }}</span></td>
                        <td>{{ $customer['phone'] }}</td>
                        <td><span class="pill {{ $customer['status'] === 'Inactive' ? 'inactive' : '' }}">{{ $customer['status'] }}</span></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
