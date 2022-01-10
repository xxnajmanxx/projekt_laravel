@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->

           @include('items.form_errors')



             {{Form::open(['url'=>'videos', 'class'=>'form-horizontal']) }}


           @include('items.form', ['buttonText'=>'Dodaj film'])



              {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
@stop