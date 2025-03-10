<!doctype html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Dashboard - Cassava</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="title" content="Dashboard - Cassava" />
    <meta name="author" content="Krispachi" />
    <meta name="description" content="Website Sistem Informasi Kegiatan UKM dan TAK." />
    <meta name="keywords" content="cassava, poin tak, tak, ukm, aktivitas" />
    <link rel="shortcut icon" href="{{ asset("images/Logo Cassava Rounded.png") }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fontsource/source-sans-3@5.0.12/index.css" integrity="sha256-tXJfXfp6Ewt1ilPzLDtQnJV4hclT9XuaZUKyUvmyr+Q=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/styles/overlayscrollbars.min.css" integrity="sha256-tZHrRjVqNSRyWg2wbppGnT833E/Ys0DHWGwT04GiqQg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset("AdminLTE4/dist/css/adminlte.css") }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.css" integrity="sha256-4MX+61mt9NVvvuPjUWdUdyfZfxSB1/Rf9WtqRHgG5S0=" crossorigin="anonymous" />
</head>

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
    <div class="app-wrapper">
        <nav class="app-header navbar navbar-expand bg-body">
            <div class="container-fluid">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                            <i class="bi bi-list"></i>
                        </a>
                    </li>
                    <li class="nav-item d-none d-md-block"><a href="{{ route("home.index") }}" class="nav-link">Home</a></li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-bs-toggle="dropdown" href="#">
                            <i class="bi bi-bell-fill"></i>
                            <span class="navbar-badge badge text-bg-warning">15</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <span class="dropdown-item dropdown-header">15 Notifications</span>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-envelope me-2"></i> 4 new messages
                                <span class="float-end text-secondary fs-7">3 mins</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-people-fill me-2"></i> 8 friend requests
                                <span class="float-end text-secondary fs-7">12 hours</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item">
                                <i class="bi bi-file-earmark-fill me-2"></i> 3 new reports
                                <span class="float-end text-secondary fs-7">2 days</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item dropdown-footer"> See All Notifications </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                            <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                            <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none"></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown user-menu">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img src="{{ asset("AdminLTE4/dist/assets/img/user2-160x160.jpg") }}" class="user-image rounded-circle shadow" alt="User Image" />
                            <span class="d-none d-md-inline">Angrisude</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
                            <li class="user-header text-bg-primary">
                                <img src="{{ asset("AdminLTE4/dist/assets/img/user2-160x160.jpg") }}" class="rounded-circle shadow" alt="User Image" />
                                <p>
                                    Krisna Ariwidnyana
                                    <small>2400000001</small>
                                    <small>Member since Nov. 2023</small>
                                </p>
                            </li>
                            <li class="user-body">
                                <div class="row">
                                    <div class="col-4 text-center"><a href="#">Followers</a></div>
                                    <div class="col-4 text-center"><a href="#">Sales</a></div>
                                    <div class="col-4 text-center"><a href="#">Friends</a></div>
                                </div>
                            </li>
                            <li class="user-footer">
                                <a href="#" class="btn btn-default btn-flat">Profile</a>
                                <a href="#" class="btn btn-default btn-flat float-end">Sign out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
            <div class="sidebar-brand">
                <a href="{{ route("home.index") }}" class="brand-link">
                    <img src="{{ asset("images/Logo Cassava Rounded.png") }}" alt="AdminLTE Logo" class="brand-image shadow" />
                    <span class="brand-text fw-light">Cassava</span>
                </a>
            </div>
            <div class="sidebar-wrapper">
                <nav class="mt-2">
                    <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                        <li class="nav-header">BERANDA</li>
                        <li class="nav-item">
                            <a href="{{ route("dashboard.index") }}" class="nav-link active">
                                <i class="nav-icon bi bi-speedometer"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-header">MENU</li>
                        <li class="nav-item">
                            <a href="{{ route("tak.index") }}" class="nav-link">
                                <i class="nav-icon bi bi-clipboard-data"></i>
                                <p>Poin TAK</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("kegiatan-ukm.index") }}" class="nav-link">
                                <i class="nav-icon bi bi-people"></i>
                                <p>Kegiatan UKM</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("kegiatan-ukm.riwayat.index") }}" class="nav-link">
                                <i class="nav-icon bi bi-clock-history"></i>
                                <p>Riwayat Kegiatan</p>
                            </a>
                        </li>
                        <li class="nav-header">BANTUAN</li>
                        <li class="nav-item">
                            <a href="{{ route("pusat-informasi.index") }}" class="nav-link">
                                <i class="nav-icon bi bi-info-circle"></i>
                                <p>Pusat Informasi</p>
                            </a>
                        </li>
                        <li class="nav-header">AKUN</li>
                        <li class="nav-item">
                            <a href="{{ route("user.profile") }}" class="nav-link">
                                <i class="nav-icon bi bi-person-badge"></i>
                                <p>Profil</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route("auth.logout") }}" class="nav-link">
                                <i class="nav-icon bi bi-door-closed"></i>
                                <p>Log Out</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <main class="app-main">
            <div class="app-content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3 class="mb-0">Dashboard</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-end">
                                <li class="breadcrumb-item"><a href="{{ route("home.index") }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="app-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-primary shadow-sm">
                                    <i class="bi bi-clipboard-data"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Poin TAK</span>
                                    <span class="info-box-number">
                                        10
                                        <small>Poin</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-warning shadow-sm">
                                    <i class="bi bi-bullseye"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Target TAK</span>
                                    <span class="info-box-number">
                                        110
                                        <small>(10/120)</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-success shadow-sm">
                                    <i class="bi bi-clipboard-check"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kegiatan Diikuti</span>
                                    <span class="info-box-number">
                                        41
                                        <small>Kali</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-info shadow-sm">
                                    <i class="bi bi-capslock"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Peringkat TAK</span>
                                    <span class="info-box-number">
                                        8
                                        <small>dari</small>
                                        300
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-primary shadow-sm">
                                    <i class="bi bi-clipboard-pulse"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kegiatan Berlangsung</span>
                                    <span class="info-box-number">
                                        2
                                        <small>Kegiatan</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-warning shadow-sm">
                                    <i class="bi bi-person-heart"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Anggota</span>
                                    <span class="info-box-number">
                                        2,000
                                        <small>Orang</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-success shadow-sm">
                                    <i class="bi bi-card-checklist"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Kegiatan Diadakan</span>
                                    <span class="info-box-number">
                                        760
                                        <small>Kali</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-info shadow-sm">
                                    <i class="bi bi-clipboard-plus"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Target Kegiatan</span>
                                    <span class="info-box-number">
                                        40
                                        <small>Kegiatan</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-primary shadow-sm">
                                    <i class="bi bi-people"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Pengguna</span>
                                    <span class="info-box-number">
                                        340
                                        <small>Orang</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-warning shadow-sm">
                                    <i class="bi bi-person-vcard"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Jumlah Mahasiswa</span>
                                    <span class="info-box-number">
                                        300
                                        <small>Orang</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-success shadow-sm">
                                    <i class="bi bi-building"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total UKM</span>
                                    <span class="info-box-number">
                                        42
                                        <small>UKM</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon text-bg-info shadow-sm">
                                    <i class="bi bi-card-checklist"></i>
                                </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Kegiatan</span>
                                    <span class="info-box-number">
                                        24,800
                                        <small>Kegiatan</small>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h5 class="card-title">Monthly Recap Report</h5>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-tool dropdown-toggle"
                                                data-bs-toggle="dropdown">
                                                <i class="bi bi-wrench"></i>
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end" role="menu">
                                                <a href="#" class="dropdown-item">Action</a>
                                                <a href="#" class="dropdown-item">Another action</a>
                                                <a href="#" class="dropdown-item"> Something else here </a>
                                                <a class="dropdown-divider"></a>
                                                <a href="#" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <p class="text-center">
                                                <strong>Sales: 1 Jan, 2023 - 30 Jul, 2023</strong>
                                            </p>
                                            <div id="sales-chart"></div>
                                        </div>
                                        <div class="col-md-4">
                                            <p class="text-center"><strong>Goal Completion</strong></p>
                                            <div class="progress-group">
                                                Add Products to Cart
                                                <span class="float-end"><b>160</b>/200</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-primary" style="width: 80%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                Complete Purchase
                                                <span class="float-end"><b>310</b>/400</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-danger" style="width: 75%"></div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                <span class="progress-text">Visit Premium Page</span>
                                                <span class="float-end"><b>480</b>/800</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-success" style="width: 60%">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="progress-group">
                                                Send Inquiries
                                                <span class="float-end"><b>250</b>/500</span>
                                                <div class="progress progress-sm">
                                                    <div class="progress-bar text-bg-warning" style="width: 50%">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end">
                                                <span class="text-success">
                                                    <i class="bi bi-caret-up-fill"></i> 17%
                                                </span>
                                                <h5 class="fw-bold mb-0">$35,210.43</h5>
                                                <span class="text-uppercase">TOTAL REVENUE</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end">
                                                <span class="text-info"> <i class="bi bi-caret-left-fill"></i> 0%
                                                </span>
                                                <h5 class="fw-bold mb-0">$10,390.90</h5>
                                                <span class="text-uppercase">TOTAL COST</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="text-center border-end">
                                                <span class="text-success">
                                                    <i class="bi bi-caret-up-fill"></i> 20%
                                                </span>
                                                <h5 class="fw-bold mb-0">$24,813.53</h5>
                                                <span class="text-uppercase">TOTAL PROFIT</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <div class="text-center">
                                                <span class="text-danger">
                                                    <i class="bi bi-caret-down-fill"></i> 18%
                                                </span>
                                                <h5 class="fw-bold mb-0">1200</h5>
                                                <span class="text-uppercase">GOAL COMPLETIONS</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="row g-4 mb-4">
                                <div class="col-md-6">
                                    <div class="card direct-chat direct-chat-warning">
                                        <div class="card-header">
                                            <h3 class="card-title">Direct Chat</h3>
                                            <div class="card-tools">
                                                <span title="3 New Messages" class="badge text-bg-warning"> 3 </span>
                                                <button type="button" class="btn btn-tool"
                                                    data-lte-toggle="card-collapse">
                                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool" title="Contacts"
                                                    data-lte-toggle="chat-pane">
                                                    <i class="bi bi-chat-text-fill"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool"
                                                    data-lte-toggle="card-remove">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="direct-chat-messages">
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-start"> Alexander Pierce
                                                        </span>
                                                        <span class="direct-chat-timestamp float-end"> 23 Jan 2:00 pm
                                                        </span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user1-128x128.jpg") }}"
                                                        alt="message user image" />
                                                    <div class="direct-chat-text">
                                                        Is this template really for free? That's unbelievable!
                                                    </div>
                                                </div>
                                                <div class="direct-chat-msg end">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                                        <span class="direct-chat-timestamp float-start">
                                                            23 Jan 2:05 pm
                                                        </span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user3-128x128.jpg") }}"
                                                        alt="message user image" />
                                                    <div class="direct-chat-text">You better believe it!</div>
                                                </div>
                                                <div class="direct-chat-msg">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-start"> Alexander Pierce
                                                        </span>
                                                        <span class="direct-chat-timestamp float-end"> 23 Jan 5:37 pm
                                                        </span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user1-128x128.jpg") }}"
                                                        alt="message user image" />
                                                    <div class="direct-chat-text">
                                                        Working with AdminLTE on a great new app! Wanna join?
                                                    </div>
                                                </div>
                                                <div class="direct-chat-msg end">
                                                    <div class="direct-chat-infos clearfix">
                                                        <span class="direct-chat-name float-end"> Sarah Bullock </span>
                                                        <span class="direct-chat-timestamp float-start">
                                                            23 Jan 6:10 pm
                                                        </span>
                                                    </div>
                                                    <img class="direct-chat-img"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user3-128x128.jpg") }}"
                                                        alt="message user image" />
                                                    <div class="direct-chat-text">I would love to.</div>
                                                </div>
                                            </div>
                                            <div class="direct-chat-contacts">
                                                <ul class="contacts-list">
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user1-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Count Dracula
                                                                    <small class="contacts-list-date float-end">
                                                                        2/28/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg">
                                                                    How have you been? I was...
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user7-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Sarah Doe
                                                                    <small class="contacts-list-date float-end">
                                                                        2/23/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg"> I will be waiting
                                                                    for... </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user3-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nadia Jolie
                                                                    <small class="contacts-list-date float-end">
                                                                        2/20/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg"> I'll call you back
                                                                    at... </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user5-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Nora S. Vans
                                                                    <small class="contacts-list-date float-end">
                                                                        2/10/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg"> Where is your new...
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user6-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    John K.
                                                                    <small class="contacts-list-date float-end">
                                                                        1/27/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg"> Can I take a look
                                                                    at... </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <img class="contacts-list-img"
                                                                src="{{ asset("AdminLTE4/dist/assets/img/user8-128x128.jpg") }}"
                                                                alt="User Avatar" />
                                                            <div class="contacts-list-info">
                                                                <span class="contacts-list-name">
                                                                    Kenneth M.
                                                                    <small class="contacts-list-date float-end">
                                                                        1/4/2023 </small>
                                                                </span>
                                                                <span class="contacts-list-msg"> Never mind I found...
                                                                </span>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-footer">
                                            <form action="#" method="post">
                                                <div class="input-group">
                                                    <input type="text" name="message"
                                                        placeholder="Type Message ..." class="form-control" />
                                                    <span class="input-group-append">
                                                        <button type="button" class="btn btn-warning">Send</button>
                                                    </span>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Latest Members</h3>
                                            <div class="card-tools">
                                                <span class="badge text-bg-danger"> 8 New Members </span>
                                                <button type="button" class="btn btn-tool"
                                                    data-lte-toggle="card-collapse">
                                                    <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                                    <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                                </button>
                                                <button type="button" class="btn btn-tool"
                                                    data-lte-toggle="card-remove">
                                                    <i class="bi bi-x-lg"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="card-body p-0">
                                            <div class="row text-center m-1">
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user1-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Alexander Pierce
                                                    </a>
                                                    <div class="fs-8">Today</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user1-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Norman
                                                    </a>
                                                    <div class="fs-8">Yesterday</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user7-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Jane
                                                    </a>
                                                    <div class="fs-8">12 Jan</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user6-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        John
                                                    </a>
                                                    <div class="fs-8">12 Jan</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user2-160x160.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Alexander
                                                    </a>
                                                    <div class="fs-8">13 Jan</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user5-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Sarah
                                                    </a>
                                                    <div class="fs-8">14 Jan</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user4-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Nora
                                                    </a>
                                                    <div class="fs-8">15 Jan</div>
                                                </div>
                                                <div class="col-3 p-2">
                                                    <img class="img-fluid rounded-circle"
                                                        src="{{ asset("AdminLTE4/dist/assets/img/user3-128x128.jpg") }}"
                                                        alt="User Image" />
                                                    <a class="btn fw-bold fs-7 text-secondary text-truncate w-100 p-0"
                                                        href="#">
                                                        Nadia
                                                    </a>
                                                    <div class="fs-8">15 Jan</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer text-center">
                                            <a href="javascript:"
                                                class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View
                                                All Users</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Latest Orders</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body p-0">
                                    <div class="table-responsive">
                                        <table class="table m-0">
                                            <thead>
                                                <tr>
                                                    <th>Order ID</th>
                                                    <th>Item</th>
                                                    <th>Status</th>
                                                    <th>Popularity</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                                                    </td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class="badge text-bg-success"> Shipped </span></td>
                                                    <td>
                                                        <div id="table-sparkline-1"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                                                    </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge text-bg-warning">Pending</span></td>
                                                    <td>
                                                        <div id="table-sparkline-2"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                                    </td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class="badge text-bg-danger"> Delivered </span></td>
                                                    <td>
                                                        <div id="table-sparkline-3"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                                    </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge text-bg-info">Processing</span></td>
                                                    <td>
                                                        <div id="table-sparkline-4"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR1848</a>
                                                    </td>
                                                    <td>Samsung Smart TV</td>
                                                    <td><span class="badge text-bg-warning">Pending</span></td>
                                                    <td>
                                                        <div id="table-sparkline-5"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR7429</a>
                                                    </td>
                                                    <td>iPhone 6 Plus</td>
                                                    <td><span class="badge text-bg-danger"> Delivered </span></td>
                                                    <td>
                                                        <div id="table-sparkline-6"></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <a href="pages/examples/invoice.html"
                                                            class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">OR9842</a>
                                                    </td>
                                                    <td>Call of Duty IV</td>
                                                    <td><span class="badge text-bg-success">Shipped</span></td>
                                                    <td>
                                                        <div id="table-sparkline-7"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="card-footer clearfix">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-primary float-start">
                                        Place New Order
                                    </a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-end">
                                        View All Orders
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mb-3 text-bg-warning">
                                <span class="info-box-icon"> <i class="bi bi-tag-fill"></i> </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Inventory</span>
                                    <span class="info-box-number">5,200</span>
                                </div>
                            </div>
                            <div class="info-box mb-3 text-bg-success">
                                <span class="info-box-icon"> <i class="bi bi-heart-fill"></i> </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Mentions</span>
                                    <span class="info-box-number">92,050</span>
                                </div>
                            </div>
                            <div class="info-box mb-3 text-bg-danger">
                                <span class="info-box-icon"> <i class="bi bi-cloud-download"></i> </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Downloads</span>
                                    <span class="info-box-number">114,381</span>
                                </div>
                            </div>
                            <div class="info-box mb-3 text-bg-info">
                                <span class="info-box-icon"> <i class="bi bi-chat-fill"></i> </span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Direct Messages</span>
                                    <span class="info-box-number">163,921</span>
                                </div>
                            </div>
                            <div class="card mb-4">
                                <div class="card-header">
                                    <h3 class="card-title">Browser Usage</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse">
                                            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
                                            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
                                        </button>
                                        <button type="button" class="btn btn-tool" data-lte-toggle="card-remove">
                                            <i class="bi bi-x-lg"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div id="pie-chart"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer p-0">
                                    <ul class="nav nav-pills flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                United States of America
                                                <span class="float-end text-danger">
                                                    <i class="bi bi-arrow-down fs-7"></i>
                                                    12%
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                India
                                                <span class="float-end text-success">
                                                    <i class="bi bi-arrow-up fs-7"></i> 4%
                                                </span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                China
                                                <span class="float-end text-info">
                                                    <i class="bi bi-arrow-left fs-7"></i> 0%
                                                </span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <footer class="app-footer">
            <div class="float-end d-none d-sm-inline">From Cassava to Ashvattha.</div>
            <strong>
                Copyright &copy; 2025&nbsp;
                <a href="https://github.com/krispachi/wildcard-sda" class="text-decoration-none">Cassava</a>.
            </strong>
            All rights reserved.
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@2.10.1/browser/overlayscrollbars.browser.es6.min.js" integrity="sha256-dghWARbRe2eLlIJ56wNB+b760ywulqK3DzZYEpsg2fQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script src="{{ asset("AdminLTE4/dist/js/adminlte.js") }}"></script>
    <script>
        const SELECTOR_SIDEBAR_WRAPPER = '.sidebar-wrapper';
        const Default = {
            scrollbarTheme: 'os-theme-light',
            scrollbarAutoHide: 'leave',
            scrollbarClickScroll: true,
        };
        document.addEventListener('DOMContentLoaded', function() {
            const sidebarWrapper = document.querySelector(SELECTOR_SIDEBAR_WRAPPER);
            if (sidebarWrapper && typeof OverlayScrollbarsGlobal?.OverlayScrollbars !== 'undefined') {
                OverlayScrollbarsGlobal.OverlayScrollbars(sidebarWrapper, {
                    scrollbars: {
                        theme: Default.scrollbarTheme,
                        autoHide: Default.scrollbarAutoHide,
                        clickScroll: Default.scrollbarClickScroll,
                    },
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.37.1/dist/apexcharts.min.js" integrity="sha256-+vh8GkaU7C9/wbSLIcwq82tQ2wTf44aOHA8HlBMwRI8=" crossorigin="anonymous"></script>
    <script>
        // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
        // IT'S ALL JUST JUNK FOR DEMO
        // ++++++++++++++++++++++++++++++++++++++++++

        /* apexcharts
         * -------
         * Here we will create a few charts using apexcharts
         */

        //-----------------------
        // - MONTHLY SALES CHART -
        //-----------------------

        const sales_chart_options = {
            series: [{
                    name: 'Digital Goods',
                    data: [28, 48, 40, 19, 86, 27, 90],
                },
                {
                    name: 'Electronics',
                    data: [65, 59, 80, 81, 56, 55, 40],
                },
            ],
            chart: {
                height: 180,
                type: 'area',
                toolbar: {
                    show: false,
                },
            },
            legend: {
                show: false,
            },
            colors: ['#0d6efd', '#20c997'],
            dataLabels: {
                enabled: false,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                type: 'datetime',
                categories: [
                    '2023-01-01',
                    '2023-02-01',
                    '2023-03-01',
                    '2023-04-01',
                    '2023-05-01',
                    '2023-06-01',
                    '2023-07-01',
                ],
            },
            tooltip: {
                x: {
                    format: 'MMMM yyyy',
                },
            },
        };

        const sales_chart = new ApexCharts(
            document.querySelector('#sales-chart'),
            sales_chart_options,
        );
        sales_chart.render();

        //---------------------------
        // - END MONTHLY SALES CHART -
        //---------------------------

        function createSparklineChart(selector, data) {
            const options = {
                series: [{
                    data
                }],
                chart: {
                    type: 'line',
                    width: 150,
                    height: 30,
                    sparkline: {
                        enabled: true,
                    },
                },
                colors: ['var(--bs-primary)'],
                stroke: {
                    width: 2,
                },
                tooltip: {
                    fixed: {
                        enabled: false,
                    },
                    x: {
                        show: false,
                    },
                    y: {
                        title: {
                            formatter: function(seriesName) {
                                return '';
                            },
                        },
                    },
                    marker: {
                        show: false,
                    },
                },
            };

            const chart = new ApexCharts(document.querySelector(selector), options);
            chart.render();
        }

        const table_sparkline_1_data = [25, 66, 41, 89, 63, 25, 44, 12, 36, 9, 54];
        const table_sparkline_2_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 44];
        const table_sparkline_3_data = [15, 46, 21, 59, 33, 15, 34, 42, 56, 19, 64];
        const table_sparkline_4_data = [30, 56, 31, 69, 43, 35, 24, 32, 46, 29, 64];
        const table_sparkline_5_data = [20, 76, 51, 79, 53, 35, 54, 22, 36, 49, 64];
        const table_sparkline_6_data = [5, 36, 11, 69, 23, 15, 14, 42, 26, 19, 44];
        const table_sparkline_7_data = [12, 56, 21, 39, 73, 45, 64, 52, 36, 59, 74];

        createSparklineChart('#table-sparkline-1', table_sparkline_1_data);
        createSparklineChart('#table-sparkline-2', table_sparkline_2_data);
        createSparklineChart('#table-sparkline-3', table_sparkline_3_data);
        createSparklineChart('#table-sparkline-4', table_sparkline_4_data);
        createSparklineChart('#table-sparkline-5', table_sparkline_5_data);
        createSparklineChart('#table-sparkline-6', table_sparkline_6_data);
        createSparklineChart('#table-sparkline-7', table_sparkline_7_data);

        //-------------
        // - PIE CHART -
        //-------------

        const pie_chart_options = {
            series: [700, 500, 400, 600, 300, 100],
            chart: {
                type: 'donut',
            },
            labels: ['Chrome', 'Edge', 'FireFox', 'Safari', 'Opera', 'IE'],
            dataLabels: {
                enabled: false,
            },
            colors: ['#0d6efd', '#20c997', '#ffc107', '#d63384', '#6f42c1', '#adb5bd'],
        };

        const pie_chart = new ApexCharts(document.querySelector('#pie-chart'), pie_chart_options);
        pie_chart.render();

        //-----------------
        // - END PIE CHART -
        //-----------------
    </script>
</body>

</html>
