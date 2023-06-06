<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin | halo selamat datang didashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
    <link rel="stylesheet" href="../assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="../assets/css/backend.css?v=1.0.2">
    <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">
    <link rel="stylesheet" href="../assets/vendor/remixicon/fonts/remixicon.css">
    <link rel="stylesheet" href="../assets/vendor/@icon/dripicons/dripicons.css">
</head>

<body class="email-chimp ">
    <!-- loader Start -->
    <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">

        <div class="iq-sidebar  sidebar-default ">
            <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
                <a href="../backend/index.html" class="header-logo">
                    <img src="../assets/images/logo.png" class="img-fluid  light-logo" alt="logo">
                    <h5 class="logo-title text-white ml-3 mt-1">EmailCHIMP</h5>
                </a>
                <div class="iq-menu-bt-sidebar ">
                    <svg class="svg-icon feather feather-repeat wrapper-menu animated rotation" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="17 1 21 5 17 9"></polyline>
                        <path d="M3 11V9a4 4 0 0 1 4-4h14"></path>
                        <polyline points="7 23 3 19 7 15"></polyline>
                        <path d="M21 13v2a4 4 0 0 1-4 4H3"></path>
                    </svg>
                </div>
            </div>
            <div class="data-scrollbar" data-scroll="1">
                <nav class="iq-sidebar-menu">
                    <ul id="iq-sidebar-toggle" class="iq-menu">
                        <li class="active">
                            <a href="../backend/index.html" class="svg-icon">
                                <svg class="svg-icon feather feather-home" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span class="ml-3">Dashboards</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="../backend/page-campaigns.html" class="">
                                <svg class="svg-icon feather feather feather-send" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                <span class="ml-3">Campaigns</span>
                            </a>
                            <ul id="campaigns" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/page-contacts.html" class="">
                                <svg class="svg-icon feather feather feather-users" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span class="ml-3">Contacts</span>
                            </a>
                            <ul id="contacts" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/page-forms.html" class="">
                                <svg class="svg-icon feather feather-file-minus" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                                    <polyline points="14 2 14 8 20 8"></polyline>
                                    <line x1="9" y1="15" x2="15" y2="15"></line>
                                </svg>
                                <span class="ml-3">Forms</span>
                            </a>
                            <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/page-templates.html" class="">
                                <svg class="svg-icon feather feather-file" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path>
                                    <polyline points="13 2 13 9 20 9"></polyline>
                                </svg>

                                <span class="ml-3">Templates</span>
                            </a>
                            <ul id="templates" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/page-activity.html" class="">
                                <svg class="feather feather-activity" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                                </svg>
                                <span class="ml-3">Activity</span>
                            </a>
                            <ul id="activity" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="../backend/page-integration.html" class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span class="ml-3">Integration</span>
                            </a>
                            <ul id="integration" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            </ul>
                        </li>
                        <li class="">
                            <a href="#otherpage" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <i>
                                    <svg width="20" class="svg-icon" id="iq-main-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 20l4-16m2 16l4-16M6 9h14M4 15h14" />
                                    </svg>
                                </i>
                                <span>other page</span>
                                <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                            </a>


                            <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">



                                <li class=" ">
                                    <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-user-cog"></i><span>User Details</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../app/user-profile.html">
                                                <i class="las la-id-card"></i><span>User Profile</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../app/user-add.html">
                                                <i class="las la-user-plus"></i><span>User Add</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../app/user-list.html">
                                                <i class="las la-list-alt"></i><span>User List</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="lab la-uikit iq-arrow-left"></i><span>UI Elements</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../backend/ui-avatars.html">
                                                <i class="las la-user-tie"></i><span>Avatars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-alerts.html">
                                                <i class="las la-exclamation-triangle"></i><span>Alerts</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-badges.html">
                                                <i class="las la-id-badge"></i><span>Badges</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-breadcrumb.html">
                                                <i class="las la-ellipsis-h"></i><span>Breadcrumb</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-buttons.html">
                                                <i class="las la-ticket-alt"></i><span>Buttons</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-buttons-group.html">
                                                <i class="las la-object-group"></i><span>Buttons Group</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-boxshadow.html">
                                                <i class="las la-boxes"></i><span>Box Shadow</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-colors.html">
                                                <i class="las la-brush"></i><span>Colors</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-cards.html">
                                                <i class="las la-credit-card"></i><span>Cards</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-carousel.html">
                                                <i class="las la-sliders-h"></i><span>Carousel</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-grid.html">
                                                <i class="las la-th-large"></i><span>Grid</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-helper-classes.html">
                                                <i class="las la-hands-helping"></i><span>Helper classes</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-images.html">
                                                <i class="las la-image"></i><span>Images</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-list-group.html">
                                                <i class="las la-list-alt"></i><span>list Group</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-media-object.html">
                                                <i class="las la-photo-video"></i><span>Media</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-modal.html">
                                                <i class="las la-columns"></i><span>Modal</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-notifications.html">
                                                <i class="las la-bell"></i><span>Notifications</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-pagination.html">
                                                <i class="las la-ellipsis-h"></i><span>Pagination</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-popovers.html">
                                                <i class="las la-spinner"></i><span>Popovers</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-progressbars.html">
                                                <i class="las la-heading"></i><span>Progressbars</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-typography.html">
                                                <i class="las la-tablet"></i><span>Typography</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-tabs.html">
                                                <i class="las la-tablet"></i><span>Tabs</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-tooltips.html">
                                                <i class="las la-magnet"></i><span>Tooltips</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/ui-embed-video.html">
                                                <i class="las la-play-circle"></i><span>Video</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class=" ">
                                    <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-table iq-arrow-left"></i><span>Table</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../backend/tables-basic.html">
                                                <i class="las la-border-all"></i><span>Basic Tables</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/table-data.html">
                                                <i class="lab la-microsoft"></i><span>Data Table</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/table-editable.html">
                                                <i class="lab la-buromobelexperte"></i><span>Editable Table</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/table-tree.html">
                                                <i class="las la-tree"></i><span>Table Tree</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>


                                <li class=" ">
                                    <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-torah iq-arrow-left"></i><span>Authentication</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../backend/auth-sign-in.html">
                                                <i class="las la-sign-in-alt"></i><span>Login</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/auth-sign-up.html">
                                                <i class="las la-registered"></i><span>Register</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/auth-recoverpw.html">
                                                <i class="las la-unlock-alt"></i><span>Recover Password</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/auth-confirm-mail.html">
                                                <i class="las la-envelope-square"></i><span>Confirm Mail</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/auth-lock-screen.html">
                                                <i class="las la-lock"></i><span>Lock Screen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-coins"></i><span>Pricing</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../backend/pricing.html">
                                                <i class="las la-weight"></i><span>Pricing 1</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/pricing-1.html">
                                                <i class="las la-crutch"></i><span>Pricing 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class=" ">
                                    <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                        <i class="las la-exclamation-triangle"></i><span>Error</span>
                                        <i class="las la-angle-right iq-arrow-right arrow-active"></i>
                                        <i class="las la-angle-down iq-arrow-right arrow-hover"></i>
                                    </a>
                                    <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                        <li class="">
                                            <a href="../backend/pages-error.html">
                                                <i class="las la-bomb"></i><span>Error 404</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="../backend/pages-error-500.html">
                                                <i class="las la-exclamation-circle"></i><span>Error 500</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="../backend/pages-invoice.html" class="">
                                        <i class="las la-receipt"></i><span>Invoice</span>
                                    </a>
                                    <ul id="pages-invoice" class="iq-submenu collapse" data-parent="#otherpage">
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="../backend/pages-blank-page.html" class="">
                                        <i class="las la-pager"></i><span>Blank Page</span>
                                    </a>
                                    <ul id="pages-blank-page" class="iq-submenu collapse" data-parent="#otherpage">
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="../backend/pages-maintenance.html" class="">
                                        <i class="las la-cubes"></i><span>Maintenance</span>
                                    </a>
                                    <ul id="pages-maintenance" class="iq-submenu collapse" data-parent="#otherpage">
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <div class="p-3"></div>
            </div>
        </div>
        <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
                <nav class="navbar navbar-expand-lg navbar-light">

                    <div class="iq-navbar-logo d-flex align-items-center justify-content-between">
                        <i class="ri-menu-line wrapper-menu"></i>
                        <a href="index.html" class="header-logo">
                            <img src="assets/images/logo.png" class="img-fluid  light-logo" alt="logo">
                            <h5 class="logo-title ml-3 mt-1">EmailCHIMP</h5>

                        </a>
                        <div class="navbar-breadcrumb">
                            <h4>Dashboard</h4>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="iq-search-bar device-search">
                            <form action="#" class="searchbox">
                                <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                                <input type="text" class="text search-input" placeholder="Search for your document , people,...">
                            </form>
                        </div>
                        <div class="d-flex align-items-center">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                                <i class="ri-menu-3-line"></i>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto navbar-list align-items-center">
                                    <li class="nav-item nav-icon search-content">
                                        <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-search-line"></i>
                                        </a>
                                        <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                            <form action="#" class="searchbox p-2">
                                                <div class="form-group mb-0 position-relative">
                                                    <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                                    <a href="#" class="search-link"><i class="las la-search"></i></a>
                                                </div>
                                            </form>
                                        </div>
                                    </li>
                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButtontwo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="ri-notification-line"></i>
                                            <span class="bg-primary dots"></span>
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButtontwo">
                                            <div class="card shadow-none m-0">
                                                <div class="card-body p-0 ">
                                                    <div class="p-4">
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card pb-4">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                                                </div>
                                                                <div class="media-body ml-4">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Emma Watson</h5>
                                                                        <small class="text-dark"><b>12 : 47 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                                                </div>
                                                                <div class="media-body ml-4">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Ashlynn Franci</h5>
                                                                        <small class="text-dark"><b>11 : 30 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <a href="#" class="iq-sub-card">
                                                            <div class="media align-items-center cust-card pt-3">
                                                                <div class="">
                                                                    <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                                                </div>
                                                                <div class="media-body ml-4">
                                                                    <div class="d-flex align-items-center justify-content-between">
                                                                        <h5 class="mb-0">Kianna Carder</h5>
                                                                        <small class="text-dark"><b>11 : 21 pm</b></small>
                                                                    </div>
                                                                    <small class="mb-0 font-size-14">Lorem ipsum dolor sit amet</small>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <a class="right-ic btn btn-primary btn-block position-relative iq-logout" href="#" role="button">
                                                        View All
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="nav-item nav-icon dropdown">
                                        <a href="#" class="search-toggle iq-user-toggle dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="assets/images/user/one.png" class="img-fluid rounded-small" alt="user">
                                        </a>
                                        <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <div class="card mb-0">

                                                <div class="card-body p-0">
                                                    <div class="profile-header">
                                                        <div class="profile-details">
                                                            <a href="../app/user-profile.html" class="iq-sub-card">
                                                                <div class="rounded bg-info iq-card-icon-small">
                                                                    <i class="ri-file-user-line"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-0">My Profile</h5>
                                                                    <p class="mb-0 font-size-14">View personal profile details</p>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="profile-details">
                                                            <a href="../app/user-profile-edit.html" class="iq-sub-card">
                                                                <div class="rounded bg-success iq-card-icon-small">
                                                                    <i class="ri-profile-line"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-0">Edit Profile</h5>
                                                                    <p class="mb-0 font-size-14">Modify Your details</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                        <div class="profile-details">
                                                            <a href="../app/user-account-setting.html" class="iq-sub-card">
                                                                <div class="rounded bg-danger iq-card-icon-small">
                                                                    <i class="ri-account-box-line"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-0">Account</h5>
                                                                    <p class="mb-0 font-size-14">Manage your account parameters.</p>
                                                                </div>
                                                            </a>
                                                        </div>


                                                        <div class="profile-details">
                                                            <a href="../app/user-privacy-setting.html" class="iq-sub-card border-none">
                                                                <div class="rounded bg-warning iq-card-icon-small">
                                                                    <i class="ri-lock-line"></i>
                                                                </div>
                                                                <div class="media-body">
                                                                    <h5 class="mb-0">Settings</h5>
                                                                    <p class="mb-0 font-size-14">Control your privacy parameters.</p>
                                                                </div>
                                                            </a>
                                                        </div>

                                                    </div>

                                                    <a class="right-ic btn btn-primary btn-block   position-relative iq-logout" href="../backend/auth-sign-up.html" role="button">

                                                        Log Out
                                                    </a>


                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="content-page">
            <div class="container-fluid">
                <div class="d-grid grid-cols-2 custom-grid-media">
                    <div class="">
                        <div class="card border subs-card">
                            <div class="card-body">
                                <div class="">
                                    <div class="">
                                        <h2 class="mb-2">Hi , Wilma Mumduya</h2>
                                        <p class="pb-3">Welcome all your new subscribers. It’s good to have you here!</p>
                                    </div>
                                    <div class="d-flex flex-wrap align-items-center mt-4">
                                        <a class="btn btn-lg btn-primary mr-3" href="../backend/page-create-templates.html">Create E-mail</a>
                                        <a class="btn btn-lg btn-transparent explore" href="../backend/page-templates.html">Explore All<i class="ri-arrow-right-line ml-2 mt-1"></i></a>
                                    </div>
                                </div>
                                <div class="subs-image">
                                    <img src="../assets/images/layouts/banner.png" alt="user-image" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-list index-list-scrollbar">
                        <a href="page-contacts.html" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-success-light rounded p-4">
                                    <img src="../assets/images/options/01.png" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Upload Contacts</h4>
                                    <p class="mb-0">Upload all your records from your current system, and import them into EmailCHIMP.</p>
                                </div>
                            </div>
                        </a>
                        <a href="page-create-templates.html" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-danger-light rounded p-4">
                                    <img src="../assets/images/options/02.png" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Create Template</h4>
                                    <p class="mb-0">Create a page, design it as you like, save it as a template and use for further work.</p>
                                </div>
                            </div>
                        </a>
                        <a href="page-campaigns.html" title="">
                            <div class="media iq-option active border align-items-center p-3">
                                <div class="bg-success-light rounded p-4">
                                    <img src="../assets/images/options/03.png" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Send campaign</h4>
                                    <p class="mb-0">Create and send your email campaign in literally minutes with a few quick steps.</p>
                                </div>
                            </div>
                        </a>
                        <a href="page-integration.html" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-info-light rounded p-4">
                                    <img src="../assets/images/options/04.png" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Verify domain</h4>
                                    <p class="mb-0">Verify your company's domain to prove that you own all user accounts with that domain.</p>
                                </div>
                            </div>
                        </a>
                        <a href="page-activity.html" title="">
                            <div class="media iq-option border align-items-center p-3">
                                <div class="bg-warning-light rounded p-4">
                                    <img src="../assets/images/options/08.png" class="img-fluid avatar-50" alt="image">
                                </div>
                                <div class="media-body">
                                    <h4 class="mb-2">Get advice</h4>
                                    <p class="mb-0">Boost your sales and level up your business with our expert overview options.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Page end  -->
            </div>
        </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="../backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="../backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    Copyright 2021 <a href="#">EmailCHIMP</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/backend-bundle.min.js"></script>

    <!-- Table Treeview JavaScript -->
    <script src="../assets/js/table-treeview.js"></script>

    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>

    <!-- Vectoe Map JavaScript -->
    <script src="../assets/js/vector-map-custom.js"></script>

    <!-- Chart Custom JavaScript -->
    <script src="../assets/js/chart-custom.js"></script>

    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>

    <!-- app JavaScript -->
    <script src="../assets/js/app.js"></script>
</body>

</html>