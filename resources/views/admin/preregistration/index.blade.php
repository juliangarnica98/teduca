@extends('admin.layouts.master')
{{-- @section('title', $title) --}}
<style>
    .container .iframe-responsive{
        width:"100%"; height:"500px";
    }
   
</style>
@section('content')

<div class="container">
    <iframe class="iframe-responsive"  width="100%" height="515px" src="https://dev.teduca.co/preinscripcion/form-preinscripcion/">
    </iframe>
</div>


@endsection