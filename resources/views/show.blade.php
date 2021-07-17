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
    <h2 align="center" style="font-size:35px; color:powderblue; font-family: 'Pacifico', cursive;">Viewing Customer
        Details</h2><br>




    <table align="center">
        <tr>
            <td><strong>Name:</strong>
                {{ $Customers->name }}</td>
        </tr>

        <tr>
            <td><strong>Email:</strong>
                {{ $Customers->mail }}</td>
        </tr>

        <tr>
            <td><strong>Current balance:</strong>
                {{ $Customers->balance }}</td>
        </tr>


    </table>

    <br><br>
    <h3 align="center" style="color:blue;">Send Money</h3><br>

    <form action="{{ route('money.sending') }}" method="post" align="center">
        @csrf
        <input type="hidden" name="sender" value="{{ $Customers->id }}">
        <label for="reciever">Email</label>
        <input type="text" id="send" name="email">
        <label for="amount">Amount</label>
        <input type="number" id="amount" name="amount">
        <button type="submit">send</button>
    </form>

    @if (session()->has('error'))
        <div class="row justify-content-center mt-2">
            <div class="col-6">
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            </div>
        </div>
    @endif
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <br><br>
    <div align="center">
        <a class="btn btn-primary" href="{{ url('customersTable') }}">Return</a></br>
    </div>
@endsection('contenu')
