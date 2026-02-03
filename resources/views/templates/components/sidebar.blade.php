<?php

use Livewire\Component;

new class extends Component {
    //
};
?>

<div>
    <aside id="layout-menu" class="layout-menu menu-vertical menu">
        <div class="app-brand demo ">
            <a href="index.html" class="app-brand-link">
                <span class="app-brand-logo demo">
                    <span class="text-primary">
                        <img src="../assets/img/altekno.png" alt="altekno" width="32" height="22"
                            viewBox="0 0 32 22" fill="none">
                    </span>
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-3">ALTEKNO</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
                <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
                <i class="icon-base ti tabler-x d-block d-xl-none"></i>
            </a>
        </div>

        <div class="menu-inner-shadow"></div>

        <ul class="menu-inner py-1">
            <!-- Label -->
            <li class="menu-header small">
                <span class="menu-header-text">Home</span>
            </li>
            <li class="menu-item">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <i class="menu-icon icon-base ti tabler-smart-home"></i>
                    <div>Dashboard</div>
                </a>
            </li>
            <li class="menu-header small">
                <span class="menu-header-text">Pages</span>
            </li>
            <!-- Dashboards -->
            <li class="menu-item">
                <a href="{{ route('data.jurusan') }}" class="menu-link">
                    <i class="menu-icon icon-base ti tabler-smart-home"></i>
                    <div>Jurusan</div>
                </a>
            </li>
        </ul>
    </aside>
    <div class="menu-mobile-toggler d-xl-none rounded-1">
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
            <i class="ti tabler-menu icon-base"></i>
            <i class="ti tabler-chevron-right icon-base"></i>
        </a>
    </div>
</div>
