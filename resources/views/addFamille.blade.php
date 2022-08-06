@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

        <form action="{{url('familles')}}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
            <label for="">Famille</label>
            <input type="text" name="nom" class="form-control">
            </div>
       
       

            <div class="form-group">
           <input type="submit" class="form-control btn btn-primary" value="enregistrer">
           </div>

        </form>  

        </div>
    </div>
</div>

@endsection