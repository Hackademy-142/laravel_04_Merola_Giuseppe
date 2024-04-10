<x-layout>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12">
                <h1 class="text-center my-3">Grazie {{$name}} per averci contattato</h1>
                <h5 class="text-center my-5
                ">I tuoi dati sono stati inviati con successo!</h5>
                <button class="btn btn-secondary d-block mx-auto">
                    <a class="text-decoration-none text-white" href="{{route('welcome')}}">Torna alla Home</a>
                </button>
            </div>
        </div>
    </div>

    
</x-layout>