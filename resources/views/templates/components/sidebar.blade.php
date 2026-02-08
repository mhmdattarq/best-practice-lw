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
                        <img src="{{ asset('assets/img/icons/medina-no-bg.png') }}" alt="medina" style="height: 70px;">
                    </span>
                </span>
                <span class="app-brand-text demo menu-text fw-bold ms-2" style="font-size:17px;">Admin
                    <span style="color:#0249b4;">Master</span>
                </span>
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
            <li class="menu-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a href="{{ route('dashboard') }}" class="menu-link">
                    <i class="menu-icon icon-base ti tabler-smart-home"></i>
                    <div>Dashboard</div>
                </a>
            </li>
            <li class="menu-header small">
                <span class="menu-header-text">Pages</span>
            </li>
            <li class="menu-item {{ request()->routeIs('jurusan.*') ? 'open' : '' }}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon icon-base ti tabler-building"></i>
                    <div>Jurusan</div>
                </a>
                <ul class="menu-sub">
                    <li class="menu-item {{ request()->routeIs('jurusan.data') ? 'active' : '' }}">
                        <a href="{{ route('jurusan.data') }}" class="menu-link">
                            <div>Data Jurusan</div>
                        </a>
                    </li>
                    {{-- <li class="menu-item {{ request()->routeIs('kawasan.create') ? 'active' : '' }}">
                        <a href="{{ route('kawasan.create') }}" class="menu-link">
                            <div>Kawasan Baru</div>
                        </a>
                    </li> --}}
                </ul>
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
