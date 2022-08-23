<?php
$uri = Request::segment(1);
?>
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/home">
                <div class="sidebar-brand-icon rotate-n-15">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <i class="far fa-address-book"></i>
                </div>
                <div class="sidebar-brand-text mx-3">E-ARSIP <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <?php if($uri == 'home' || $uri == '') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/home">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Register
            </div>

            <!-- Nav Item - Charts -->
            <?php if($uri == 'ktp') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/ktp">
                    <i class="fas fa-fw fa-id-card"></i>
                    <span>KTP</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <?php if($uri == 'kia') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/kia">
                    <i class="fas fa-fw fa-id-card-alt"></i>
                    <span>KIA</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <?php if($uri == 'kk') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/kk">
                    <i class="fas fa-fw fa-credit-card"></i>
                    <span>KK</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <?php if($uri == 'akta-kelahiran') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/akta-kelahiran">
                    <i class="fas fa-fw fa-file-alt"></i>
                    <span>Akte Kelahiran</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <?php if($uri == 'akta-kematian') : ?>
                <li class="nav-item active">
            <?php else : ?>
            <li class="nav-item">
            <?php endif; ?>
                <a class="nav-link" href="/akta-kematian">
                    <i class="fas fa-fw fa-book-dead"></i>
                    <span>Akta Kematian</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </ul>