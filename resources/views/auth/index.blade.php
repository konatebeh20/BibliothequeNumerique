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
                    <th scope="col">Image</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenom</th>
                    <th scope="col">Fonction</th>
                    <th scope="col">email</th>
                    <th scope="col">Actions</th>


                  </tr>
                </thead>

                <tbody>
                   @forelse ($users as $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td><img src="/imgs/{{ $user->image }}" height="50" width="50"> </td>
                                <td>{{ $user->nom }}</td>
                                <td>{{ $user->prenom }}</td>
                                <td>{{ $user->fonction }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{route('user.edit',$user->id)}}"><input type='button' class="btn btn-success" value="Modifier"></a>

                                    <a href="{{route('delete.users',$user->id)}}"><input type='button' class="btn btn-danger" value="Supprimer"></a>
                                </td>
                            </tr>

                            @empty

                            @endforelse
                </tbody>
              </table>

              <div>
                {{ $users->links() }}
              </div>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection
