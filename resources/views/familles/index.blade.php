@extends('layouts.template')
@section('content')

<main id="main" class="main">

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Liste</h5>


              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Nom user</th>
                    <th scope="col">Actions</th>


                  </tr>
                </thead>

                <tbody>
                   @forelse ($familles as $famille)

                            <tr>
                                <td>{{ $famille->id }}</td>
                                <td>{{ $famille->nom }}</td>
                                <td>{{ $famille->user->nom }}</td>

                                <td>
                                    <a href="{{route('familles.edit',$famille->id)}}"><input type='button' class="btn btn-success" value="Modifier"></a>

                                    <a href="{{route('familles.delete',$famille->id)}}"><input type='button' class="btn btn-danger" value="Supprimer"></a>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                </tbody>
              </table>

              <div>
                {{ $familles->links() }}
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
