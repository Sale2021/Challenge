@extends('layouts.app')
@section('content')
<style>
    /* HTML: <div class="loader"></div> */
    .loader {
        width: 60px;
        aspect-ratio: 4;
        background: radial-gradient(circle closest-side, #0d6efd 90%, #0000) 0/calc(100%/3) 100% space;
        clip-path: inset(0 100% 0 0);
        animation: l1 1s steps(4) infinite;
    }

    @keyframes l1 {
        to {
            clip-path: inset(0 -34% 0 0)
        }
    }
</style>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5 mt-4">
        <h1 class="display-2 text-white mb-3 animated slideInDown">Chat Médical</h1>
    </div>
</div>
<!-- Page Header End -->
<!-- Service Start -->
<div class="container-fluid container-service py-5">

    <div class="container pt-5">
        <h3 class="my-3">Notre Chatbot Médical est conçu pour vous fournir des réponses précises et pertinentes dans le
            domaine de la
            santé.</h3>
        @livewire('medical-chat')
    </div>
</div>
<!-- Service End -->
@endsection