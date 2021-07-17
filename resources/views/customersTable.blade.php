@extends('ttemplate')
@section('titre')
    Basic Banking System
@endsection
@section('contenu')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>



    <h2 align="center">Customers table</h2>


    @if (session()->has('message'))
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            </div>
        </div>
    @endif


    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }

    </style>
    <table border=1 align="center">
        <tr>
            <th style="text-align: center" width="200px">Name</th>
            <th style="text-align: center" width="200px">Email</th>
            <th style="text-align: center" width="200px">Current balance</th>

        </tr>
        @foreach ($Customers as $Customers)
            <tr>
                <td style="text-align: center" width="200px" height="30px">{{ $Customers->name }}</td>
                <td style="text-align: center" width="200px" height="30px">{{ $Customers->mail }}</td>
                <td style="text-align: center" width="200px" height="30px">{{ $Customers->balance }}</td>
                <td style="text-align: center" width="250px" height="30px">
                    <form action="{{ url('index', $Customers->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('home.show', $Customers->id) }}">View Customer</a>

                        @csrf

                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
@endsection
