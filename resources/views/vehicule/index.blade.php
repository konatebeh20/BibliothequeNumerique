@extends('layouts.template')
@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste</h5>

              <div class="row mb-3">
                @if (session('success_message'))
                    <div class="alert alert-success text-center m-2" role="alert">
                        {{ session('success_message') }}
                    </div>
                @endif
            </div>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Immatriculation</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Nom de famille</th>
                    <th scope="col">Actions</th>


                  </tr>
                </thead>

                <tbody>
                   @forelse ($vehicules as $vehicule)

                            <tr>
                                <td>{{ $vehicule->id }}</td>
                                <td>{{ $vehicule->immat }}</td>
                                <td>{{ $vehicule->marque }}</td>

                                <td>{{ $vehicule->famille->nom }}</td>

                                <td>
                                    <a href="{{route('vehicule.edit',$vehicule->id)}}"><input type='button' class="btn btn-success" value="Modifier"></a>

                                    <a href="{{route('vehicule.delete',$vehicule->id)}}"><input type='button' class="btn btn-danger" value="Supprimer"></a>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                </tbody>
              </table>

              <div>
                {{ $vehicules->links() }}
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
