@extends('master')
@section('content')

<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="card">
            <div class="panel-body">
            <!-- Formularz -->

            @if(count($errors)>0)
            <div  class="alert alert-danger">
                <ul>

                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>

            @endif



             {{Form::model($video,['method'=>'PATCH', 'class'=>'form-horizontal','action'=>['App\Http\Controllers\ItemsController@update',$video->id]]) }}


           @include ('items.form')
           @include('items.form_errors')



              {{ Form::close() }}

            </div>
        </div>
    </div>
</div>
@stop