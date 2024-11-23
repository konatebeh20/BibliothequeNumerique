 <!-- ======= Sidebar ======= -->
 <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{route('dashboard')}}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('index.users')}}">
          <i class="bi bi-file-earmark"></i>
          <span>Utilisateur</span>
        </a>
      </li><!-- End Blank Page Nav -->


      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Familles</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('familles.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter</span>
            </a>
          </li>
          <li>
            <a href="{{route('familles.index')}}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Véhicules</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('vehicule.create')}}">
              <i class="bi bi-circle"></i><span>Ajouter</span>
            </a>
          </li>
          <li>
            <a href="{{route('vehicule.index')}}">
              <i class="bi bi-circle"></i><span>Liste</span>
            </a>
          </li>

        </ul>
      </li><!-- End Forms Nav -->


    </ul>

  </aside><!-- End Sidebar-->
