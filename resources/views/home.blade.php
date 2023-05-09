@extends('layouts.mainlayout')
@section('tittle', 'Home')

@section('content')
    <h2> Selamat datang, {{ $name }} kamu sekarang sebagai {{ $role }} </h2>
    @if ($role == 'Admin')
        <a href="server"> Maintenance</a>
    @elseif ($role == 'Staff')
        <a href="gudang"> Gudang </a>
    @else
        <h2> Selamat menikmati fitur website kami </h2>
    @endif

    {{-- table --}}
    <table class="table">
        <tr>
            <th>No.</th>
            <th>Nama</th>
        </tr>
        @foreach ($biodata as $data)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $data }}</td>
            </tr>
        @endforeach

    </table>
@endsection
