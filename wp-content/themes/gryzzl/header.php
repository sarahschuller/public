<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header__nav-container">
            <nav>
                <ul class="nav__link-list">
                    <li class="nav__link"><a href="<?php echo site_url('') ?>">Home</a></li>
                    <li class="nav__link"><a href="<?php echo site_url('/about') ?>">About</a></li>
                    <li class="nav__link"><a href="#">Pages</a>
                        <ul class="dropdown">
                            <li><a href="<?php echo site_url('/partials') ?>">
                                    Partials
                                </a></li>
                            <li><a href="<?php echo site_url('/blocks') ?>">
                                    Blocks
                                </a></li>
                            <li><a href="<?php echo site_url('/miscellaneous') ?>">
                                    Miscellaneous
                                </a></li>
                        </ul>
                    </li>
                    <li class="nav__link"><a href="<?php echo site_url('/contact') ?>">Contact</a></li>
                </ul>

            </nav>
        </div>
    </header>