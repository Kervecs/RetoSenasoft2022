<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
     <section class="col-12 d-flex flex-column flex-wrap">
             <div class="w-100 d-flex p-2 ">
                     <div class="w-100 border p-4 d-flex flex-row shadow-lg rounded-4 justify-content-between bg-success">
                          <div class="w-25 d-flex justify-content-center">
                              <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                   <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                   <p class="d-flex text-white">Mendez</p>
                              </section>
                              <section class="" style="width:15%">
                                <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                    <p class="fs-3">8</p>
                                </section>
                              </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                <p class="d-flex text-white">Mendez</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">Mendez</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">Mendez</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                     </div>
             </div>


             <section class="w-100 d-flex h-auto p-5 justify-content-center gap-5 flex-wrap flex-row "  >
               @foreach($cartas as $c)
              
                        <article class="col-2 border p-2 border-5 rounded-4 shadow-lg " >
                            <div class="w-100 d-flex ">
                                <p>{{$c->carta}}</p>
                            </div>
                            <div class="w-100 d-flex h-50">
                                <img src="{{$c->img_carta}}" alt="" class="img-fluid rounded-4">
                            </div>
                            <div class="w-100 d-flex mt-3">
                                <p>{{$c->modelo}}</p>
                            </div>
                            <div class="w-100 d-flex  bg-black-50 p-2 flex-column ">
                                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="" style="font-size:8pt ">
                                    <option selected>Seleccione la opcion a comparar</option>
                                    <option value="1" class="">
                                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                        <p>Cilingraje:</p>
                                        <p>{{$c->cilindraje}} cc</p>
                                    </div>
                                    </option>
                                    <option value="2">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>cilindros :</p>
                                            <p>{{$c->cilindros}} cc</p>
                                        </div>
                                    </option>
                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>Potencias:</p>
                                            <p>{{$c->potencia}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>revoluciones:</p>
                                            <p>{{$c->revoluciones}}cc</p>
                                        </div>
                                    </option>

                                    <option value="3">
                                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                                            <p>peso:</p>
                                            <p>{{$c->peso}}cc</p>
                                        </div>
                                    </option>


                                </select>
                            </div>
                        </article>
               @endforeach
                
                 
             </section>
            
         </section>
     </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
     <script src="{{asset('js/logica.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>