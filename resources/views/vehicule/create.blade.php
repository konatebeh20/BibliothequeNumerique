@extends('layouts.template')
@section('content')

<main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulaire de la famille</h5>
              <div class="row mb-3">
                @if (session('success_message'))
                    <div class="alert alert-success text-center m-2" role="alert">
                        {{ session('success_message') }}
                    </div>
                @endif
            </div>

              <!-- General Form Elements -->
              <form action="{{ route('vehicule.store') }}" method = "POST">

                @csrf
                @method('post')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Immatriculation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="immat">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Marque</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="marque">
                    </div>
                  </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom de la famille</label>
                  <div class="col-sm-10">

                    <select name="famille_id" id="famille_id" class="form-control">
                        <option value=""></option>

                        @foreach ($familles as $famille )
                        <option value="{{ $famille->id }} ">{{ $famille->nom }}</option>

                        @endforeach
                    </select>
                </div>
            </div>


                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Valider</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>

        </div>


      </div>
    </section>

  </main><!-- End #main -->

@endsection
