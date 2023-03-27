 <!-- Sidebar Menu -->
 <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Dashboard
              </p>
            </a>
               
          <li class="nav-item">
            <a href="{{ route('authors') }}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Authors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('publishers') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Publishers
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('categories') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('books') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Books
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('students') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Reg Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('book_issued') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Book Issue
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('reports') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('settings') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Settings
              </p>
            </a>
          </li>
          
      </nav>
      <!-- /.sidebar-menu -->
    </div>