<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown
                </a>
                <ul class="dropdown-menu">
                <?php
                    if($_SESSION == true){ ?>
                        <li>
                            <a class="dropdown-item" href="dispdata">Students</a>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    <?php } 
                    else { ?>
                        <a class="dropdown-item" href="#">Login</a>
                <?php } ?>

                </ul>
            </li>
        </ul>
    </div>
</nav>