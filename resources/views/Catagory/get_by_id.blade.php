@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">
 {{ __('Catagory Detail') }}
 </div>
 <div class="card-body">
 id : {{ $Catagory->id }}
 <br>
 Catagory : {{ $Catagory->name }}
 <br>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container ">
 <div class="col-md-8">
 <a class="btn btnsuccess" href="{{ route('Catagory/get_all') }}" role="button"> {{ __('Back') }}</a>
 </div>
</div>
@endsection