@extends('layout.main')



@section('body')

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <img src="/images/PIZZA-COVER-JPEG.jpg" class="img-fluid w-100" alt="Pizza">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-red-pizza">
        <div class="container">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="jumbotron bg-red-pizza mb-0">
                        <h1 class="display-4 text-uppercase text-white text-center">¡Crea tu pizza a tu gusto!</h1>
                        <hr>
                        <p class="lead w-100 w-lg-50 text-white text-center">Diviértete creando tu pizza perfecta, elige los ingredientes que más te gustan.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 dv-ingredientes">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">¿Qué salsa deseas?</h2>
                <hr class="mb-5">
            </div>
            <div class="col-md-4">
                <div class="form-check mb-4 mb-sm-5">
                    <input class="form-check-input" type="radio" name="radioSalsa" id="exampleRadios1" value="option1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Salsa de Tomate
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check mb-4 mb-sm-5">
                    <input class="form-check-input" type="radio" name="radioSalsa" id="exampleRadios2" value="option2">
                    <label class="form-check-label" for="exampleRadios2">
                        Crema Fresca
                    </label>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-check mb-4 mb-sm-5">
                    <input class="form-check-input" type="radio" name="radioSalsa" id="exampleRadios3" value="option2">
                    <label class="form-check-label" for="exampleRadios3">
                        Crema BBQ
                    </label>
                </div>
            </div>

            <div class="col-12">
                <h2 class="text-center mt-5">¿Qué ingredientes deseas?</h2>
                <hr class="mb-5">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/bacon.png" class="img-fluid d-block mx-auto" alt="Bacon">
                  <div class="card-body">
                    <h5 class="card-title">Bacon</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/jamon.png" class="img-fluid d-block mx-auto" alt="Jamón">
                  <div class="card-body">
                    <h5 class="card-title">Jamón</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/pollo.png" class="img-fluid d-block mx-auto" alt="Pollo">
                  <div class="card-body">
                    <h5 class="card-title">Pollo</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/pepperoni.png" class="img-fluid d-block mx-auto" alt="Pepperoni">
                  <div class="card-body">
                    <h5 class="card-title">Pepperoni</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/champinon.png" class="img-fluid d-block mx-auto" alt="Champiñón">
                  <div class="card-body">
                    <h5 class="card-title">Champiñón</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/aceitunas.png" class="img-fluid d-block mx-auto" alt="Aceitunas">
                  <div class="card-body">
                    <h5 class="card-title">Aceitunas</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/cebolla.png" class="img-fluid d-block mx-auto" alt="Cebolla">
                  <div class="card-body">
                    <h5 class="card-title">Cebolla</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/tomate.png" class="img-fluid d-block mx-auto" alt="Tomate">
                  <div class="card-body">
                    <h5 class="card-title">Tomate</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card border-0 text-center mb-4">
                  <img src="/images/pimiento.png" class="img-fluid d-block mx-auto" alt="Pimiento">
                  <div class="card-body">
                    <h5 class="card-title">Pimiento</h5>
                    <a href="#" class="btn bg-red-pizza text-white">Agregar</a>
                  </div>
                </div>
            </div>
        </div>
        <img src="/images/pizza-en-blanco-y-negro.png" class="img-back">
    </div>


@endsection