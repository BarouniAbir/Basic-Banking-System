@extends('template')
@section('titre')
The sparks foundation
@endsection
@section('contenu')

     <h2>Customers</h2>
  

@if($message=Session::get('success'))
	<div class="alert alert-success">
       <p>{{$message}}</p>
     </div>
@endif
<table border=1>
 <tr>
 <th style="text-align: center" width="200px">Nom</th>
 <th style="text-align: center" width="200px">mail</th>
 <th style="text-align: center" width="200px">Balance</th>

 </tr>
 @foreach ($Customers as $Customers)
 <tr>
 <td style="text-align: center" width="200px" height="30px">{{$Customers->name}}</td>
  <td style="text-align: center" width="200px" height="30px">{{$Customers->mail}}</td>
   <td style="text-align: center" width="200px" height="30px">{{$Customers->balance}}</td>
	 <form action="{{url('index',$Customers->id)}}" method="POST">
	@csrf
	</form>
	</td>
 </tr>
@endforeach
</table>
@endsection




















