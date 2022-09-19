<!-- Navbar -->
<nav class="navbar-custom">    
    <ul class="list-unstyled topbar-nav float-end mb-0">  
        <li class="dropdown">
            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-bs-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                <span class="ms-1 nav-user-name hidden-sm"><?php echo $session_username; ?></span>
                <img src="assets/images/users/user-5.jpg" alt="profile-user" class="rounded-circle thumb-xs" />                                 
            </a>
            <div class="dropdown-menu dropdown-menu-end">
                <a class="dropdown-item" href="logout.php"><i data-feather="power" class="align-self-center icon-xs icon-dual me-1"></i> Logout</a>
            </div>
        </li>
    </ul><!--end topbar-nav-->
</nav>
<!-- end navbar-->