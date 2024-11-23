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
              <form action ="{{ route('familles.update', $famille->id) }}" method = "put">

                @csrf
                @method('put')

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom de la famille</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nom" value="{{ $famille->nom }}">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nom user</label>
                  <div class="col-sm-10">

                    <select name="user_id" id="user_id" class="form-control">

                        @foreach ($users as $user )
                        <option value="{{ $user->id }} " {{ $famille->user_id==$user->id ? 'selected': '' }}>
                            {{ $user->nom }}
                        </option>

                        @endforeach
                    </select>
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
