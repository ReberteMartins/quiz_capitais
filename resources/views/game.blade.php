<x-main-layout  pageTitle="Jogo de Capitais"> 
<div class="container">

    <x-question :country="$country" :currentQuestion="$currentQuestion" :totalQuestions="$totalQuestions" />

    <div class="row">

        @foreach ($answers as $capital)
            <x-answer :capital="$capital" />
        @endforeach

    </div>
    
</div>

<!-- cancel game -->
<div class="text-center mt-5">
    <a href="#" class="btn btn-outline-danger mt-3 px-5">CANCELAR JOGO</a>
</div>
</x-main-layout>