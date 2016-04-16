@extends('layouts.mainlayout')
@section('content')
    <div id="showList">
ID: {{$list->id}}
Name: {{$list->name}}
Des: {{$list->description}}
    </div>
    @endsection