@extends('layouts.template')
@section('content')

<main id="main" class="main">


    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Formulaire de la famille</h5>

              <!-- General Form Elements -->
              <form action="{{ route('vehicule.update', $vehicule->id) }}" method = "PUT">

                @csrf
                @method('PUT')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Immatriculation</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="immat" value="{{ $vehicule->immat }}">
                  </div>
                </div>

                <div class="row mb-3">
                    <label for="inputText" class="col-sm-2 col-form-label">Marque</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="marque" value="{{ $vehicule->marque }}">
                    </div>
                  </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom de la famille</label>
                  <div class="col-sm-10">

                    <select name="famille_id" id="famille_id" class="form-control">
                            @foreach ($familles as $famille )
                            <option value="{{ $famille->id }} " {{ $famille->famille_id==$famille->id ? 'selected': '' }}>
                                {{ $famille->nom }}
                            </option>

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
