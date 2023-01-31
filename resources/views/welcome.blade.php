
@extends('layouts.web')

@section('body')

<div>
    <img src="{{ URL::to('/') }}/img/banner.jpg" alt="">
</div>
<div class="flex">
    <div class="px-6 py-4 text-center items-center justify-center flex flex-col w-1/2">
        <h1 class="text-4xl pb-8">School Brew</h1>
        <p class="text-l">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam pariatur hic quasi tenetur cupiditate nesciunt numquam nihil accusantium culpa quas consequuntur ratione commodi asperiores voluptates maxime, iure non ipsam beatae.</p>
    </div>
    <div class="w-1/2">
        <img src="https://source.unsplash.com/1920x1024/?beer" alt="">
    </div>
    
</div>
<div class="flex">    
    <div class="w-1/2">
        <img src="https://source.unsplash.com/1920x1024/?beer" alt="">
    </div>
    <div class=" w-1/2 px-6 py-4 text-center items-center justify-center flex flex-col">
        <h2 class="text-2xl pb-8">¿Que buscamos?</h1>
        <p class="text-l">Buscamos compartir conocimientos, recetas, consejos y otras ideas que te hayan ayudado a ti y que puedan ayudar a otros homebrewers</p>
    </div>
</div>

@endsection