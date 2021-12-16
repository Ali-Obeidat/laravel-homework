@extends('layout.app')
@section('content')
<div class="container">
    <div class="table-responsive table-responsive-data2">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">name</th>

                </tr>
            </thead>
            <tbody>
                
                @foreach($product as $value)
                <tr>
                    <th>{{$value}}</th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@stop