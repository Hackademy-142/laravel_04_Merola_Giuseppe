<x-layout>


    <div class="container">
        <div class="row">
            <div class="col-12 my-5">
                <h1 class="text-center">Contattaci</h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('contatti.submit')}}">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome completo</label>
                      <input name="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input name="mail" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                      <div class="mb-3">
                        <label for="Textarea" class="form-label">Messaggio</label>
                        <textarea name="message" class="form-control" id="Textarea" style="height: 100px"></textarea>
                      </div>
                    
                    <button type="submit" class="btn btn-secondary">Invia</button>
                  </form>
            </div>
            
        </div>
    </div>


</x-layout>