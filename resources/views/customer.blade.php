@extends('index')

@section('content')

<div class="title m-b-md">
    @foreach($customers as $customer)
        {{ $customer->name }} <br>
    @endforeach
</div>

@endsection