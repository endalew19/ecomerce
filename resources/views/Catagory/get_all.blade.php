@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('Catagory/register') }}" role="button"> {{ __('New CATAGORY') }}
</a>
</div>
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('ENDALEW THIS IS YOUR PRODUCT LIST') }}
 </div>
 <div class="card-body">
 <table class="table table-striped table-bordered ">
 <thead class="thead-inverse">
 <tr>
 <th>
 ID
 </th>
<th>
 name
 </th>
 </tr>
 </thead>
 <tbody>
 @foreach($Catagory as $Catagory)
 <tr>
 <td> {{ $Catagory->id }}</td>
 <td> {{ $Catagory->name }}</td>
 </tr>
@endforeach
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection

