@extends('layouts.app')
@extends('layouts.master')

@section ('title')
Service
@endsection

@section ('content')
<div id="list-of-user"></div>
<script src="{{ asset('/js/app.js') }}"></script>
@endsection
