 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Tableau de bord
              </p>
            </a>
               
          <li class="nav-item">
            <a href="{{ route('authors') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Auteurs
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('publishers') }}" class="nav-link">
            <i class="nav-icon fab fa-readme "></i>
              <p>
                Editions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link">
            <i class="nav-icon fab fa-readme "></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('books') }}" class="nav-link">
              <i class="nav-icon fab fa-readme "></i>
              <p>
                Livres
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('students') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Les Abonnés
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="{{ route('book_issued') }}" class="nav-link">
            <i class="nav-icon fab fa-readme "></i>
              <p>
                Emprunte
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reports') }}" class="nav-link">
            <i class="nav-icon fab fa-readme "></i>
              <p>
                Rapports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('settings') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Paramétres
              </p>
            </a>
          </li>
         
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>