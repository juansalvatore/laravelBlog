@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <p class="quotes">{{ $post['title'] }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p>{{ $post['content'] }}</p>
        </div>
    </div>
@endsection