@extends('layouts.app')
@section('content')
<div class="container pb-2">
 <a class="btn btn-success" href="{{ route('product/register') }}" role="button"> {{ __('New PRODUCT') }}
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
<th>
 unit
 </th>
 <th>price</th>
 <th>quantity</th>
 </tr>
 </thead>
 <tbody>
 @foreach($product as $product)
 <tr>
 <td> {{ $product->id }}</td>
 <td> {{ $product->name }}</td>
 <td> {{ $product->unit }}</td>
 <td> {{ $product->price }}</td>
 <td> {{ $product->quantity }}</td>
 <td>
 <a class="btn btn-xs btn-info" title="Detail" href="/product/search/{{ $product->id }}">Details</a>
 <a class="btn btn-xs btn-success" title="Edit" href="/product/edit/{{$product->id }}">Edit</a>
 <a class="btn btn-xs btn-danger" title="Delete" href="/product/delete/{{ $product->id }}">Delete</a>
 </td>
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

