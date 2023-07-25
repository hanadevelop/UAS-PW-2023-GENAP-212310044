<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('post') ? 'text-dark' : ''}}"  href="/post">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  {{ Request::is('post/create') ? 'text-dark' : ''}}" href="/post/create">
            <span data-feather="file"></span>
            Create
          </a>
        </li>
       

      </ul>   
    </div>
  </nav>