@extends('layouts.app')
@section('content')
<div class="container">
 <div class="row justify-content-center">
 <div class="col-md-8">
 <div class="card">
 <div class="card-header">{{ __('PLACE REGISTER YOUR PRODUCT') }}</div>
 <div class="card-body">
 <form method="POST" action="{{ route('product/register') }}"
>
 @csrf
 <div class="form-group row">
 <label for="name" class="col-md-4 col-formlabel text-md-right">{{ __('name') }}</label>
 <div class="col-md-6">
 <input id="name" type="text" class="formcontrol @error('name') isinvalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="
name" autofocus>
 @error('name')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 @csrf
 <div class="form-group row">
 <label for="unit" class="col-md-4 col-formlabel text-md-right">{{ __('unit') }}</label>
 <div class="col-md-6">
 <input id="unit" type="text" class="formcontrol @error('unit') isinvalid @enderror" name="unit" value="{{ old('unit') }}" required autocomplete
="unit">
 @error('unit')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="price" class="col-md-4 col-formlabel text-md-right">{{ __('price') }}</label>
 <div class="col-md-6">
 <input id="price" type="text" class="formcontrol @error('price') isinvalid @enderror" name="price" value="{{ old('price') }}" required autocomplete
="price">
 @error('price')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row">
 <label for="quantity" class="col-md-4 col-formlabel text-md-right">{{ __('quantity') }}</label>
 <div class="col-md-6">
 <input id="quantity" type="text" class="formcontrol @error('quantity') isinvalid @enderror" name="quantity" value="{{ old('quantity') }}" required autocomplete
="quantity">
 @error('quantity')
 <span class="invalid-feedback" role="alert">
 <strong>{{ $message }}</strong>
 </span>
 @enderror
 </div>
 </div>
 <div class="form-group row mb-0">
 <div class="col-md-6 offset-md-4">
 <button type="submit" class="btn btn-primary">
 {{ __('Register') }}
 </button>
 </div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </div>
</div>
@endsection