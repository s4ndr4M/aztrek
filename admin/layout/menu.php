<ul class="nav flex-column">
    <li class="nav-item">
        <a class="nav-link <?php echo (CURRENT_URL == ADMIN_URL) ? "active" : ""; ?>" href="<?php echo ADMIN_URL; ?>">
            <i class="fa fa-home"></i>
            Dashboard
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/user/">
            <i class="fa fa-users"></i>
            User
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/sejour/">
           <i class="fa fa-plane"></i>
            Sejour
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?php echo ADMIN_URL; ?>crud/pays/">
            <i class="fa fa-briefcase"></i>
            Pays
        </a>
    </li>
</ul>