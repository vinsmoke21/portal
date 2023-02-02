@extends('crud.layout')
@section('content')
<div class="card">
  <div class="card-header">Contact us Page</div>
  <div class="card-body">

        <div class="card-body">
        <?=dd($crud) ?>
        <h5 class="card-title">Name : {{ $crud->name }}</h5>
        <p class="card-text">Address : {{ $crud->address }}</p>
        <p class="card-text">Phone : {{ $crud->mobile }}</p>
  </div>

    </hr>

  </div>
</div>
