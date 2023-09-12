@extends('layouts.app')

@section('content')

<div class="home_">
    <div class="home_background_container_ prlx_parent">
        <div class="home_background_ prlx" style="background-image:url( {{ asset ( 'assets/images/1.jpg')}} )"></div>
    </div>
    <div class="home_content_">
        <h1>Check Score</h1>
    </div>
</div>



@livewire('graduants')


@endsection