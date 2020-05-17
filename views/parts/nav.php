<?php
$page = $this->request['controller'];
?>
<nav>
    <div class="nav-wrapper">
        <a href="<?= Helpers::getBaseUrl(); ?>" class="brand-logo left">
            ShareBoard
        </a>
        <ul class="right hide-on-small-only">
            <?php if (Helpers::userLogged()): ?>
                <li class="welcome">
                    Welcome, <?= Helpers::getUserName(); ?>!
                </li>
            <?php endif; ?>
            <li<?= $page === '' ? ' class="active"' : ''; ?>>
                <a href="<?= Helpers::getBaseUrl(); ?>">
                    Home
                </a>
            </li>
            <li<?= $page === 'shares' ? ' class="active"' : ''; ?>>
                <a href="<?= Helpers::getBaseUrl('shares'); ?>">
                    Shares
                </a>
            </li>
            <?php if (Helpers::userLogged()): ?>
                <li>
                    <a href="<?= Helpers::getBaseUrl('users/logout'); ?>">
                        Logout
                    </a>
                </li>
            <?php else: ?>
                <li>
                    <a class="dropdown-trigger" href="<?= Helpers::getBaseUrl('users/login'); ?>"
                       data-target="account">
                        Account
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<?php if (Helpers::userNotLogged()): ?>
    <ul id="account" class="dropdown-content">
        <li>
            <a href="<?= Helpers::getBaseUrl('users/login'); ?>">
                Login
            </a>
        </li>
        <li>
            <a href="<?= Helpers::getBaseUrl('users/create'); ?>">
                Create
            </a>
        </li>
    </ul>
<?php endif; ?>