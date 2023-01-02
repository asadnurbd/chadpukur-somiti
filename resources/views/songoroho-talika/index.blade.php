<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <title></title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="" />
    <meta name="keywords" content="">
    <meta name="author" content="Phoenixcoded" />
   <!-- Favicon icon -->
   <link rel="icon" href="{{ asset('assets') }}/images/small-logo.png" type="image/x-icon">

   <link rel="stylesheet" href="{{ asset('assets') }}/css/plugins/dataTables.bootstrap4.min.css">
    <!-- vendor css -->
   <link rel="stylesheet" href="{{ asset('assets') }}/css/style.css">




</head>

<body class="">
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->
    <!-- [ navigation menu ] start -->
    <nav class="pcoded-navbar menu-light ">
        <div class="navbar-wrapper  ">
            <div class="navbar-content scroll-div ">

                <div class="">
                    <div class="main-menu-header">
                       <a href="/home">
                        <img class="img-radius" src="{{ asset('assets') }}/images/small-logo.png" alt="User-Profile-Image">
                        </a>
                        <div class="user-details">
                            <div id="more-details">চাঁদপুকুর খ্রীষ্টান সমবায় সমিতি লিঃ<i class="fa fa-caret-down"></i></div>
                        </div>
                    </div>
                    <div class="collapse" id="nav-user-link">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
                            <li class="list-inline-item"><a href="email_inbox.html"><i class="feather icon-mail" data-toggle="tooltip" title="Messages"></i><small class="badge badge-pill badge-primary">5</small></a></li>
                            <li class="list-inline-item"><a href="auth-signin.html" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
                        </ul>
                    </div>
                </div>

                <ul class="nav pcoded-inner-navbar ">
                <li class="nav-item pcoded-menu-caption">

</li>
<li class="nav-item pcoded-hasmenu">
    <a href="/home" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">হোম</span></a>

</li>
<li class="nav-item pcoded-hasmenu">
    <a href="/all-user-information" class="nav-link "><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">সকল সদস্যের তথ্য</span></a>

</li>
<li class="nav-item pcoded-hasmenu">
    <a href="/songoroho-talika" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">সংগ্রহ তালিকা</span></a>

</li>

<li class="nav-item pcoded-hasmenu">
    <a href="/abbhantorin-check" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">অভ্যন্তরীন চেক বই</span></a>

</li>
<li class="nav-item pcoded-hasmenu">
    <a href="/khroch-talika" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">খরচের তালিকা</span></a>

</li>
<li class="nav-item pcoded-hasmenu">
    <a href="/total-income-expenditure" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">মোট আয় ব্যয়</span></a>

</li>

                    <!-- <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layers"></i></span><span class="pcoded-mtext">Widget</span><span class="pcoded-badge badge badge-success">100+</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="widget-statistic.html">Statistic</a></li>
                            <li><a href="widget-data.html">Data</a></li>
                            <li><a href="widget-chart.html">Chart</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-users"></i></span><span class="pcoded-mtext">User</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="user-profile.html">Profile</a></li>
                            <li><a href="user-card.html">User Card</a></li>
                            <li><a href="user-list.html">User List</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Admin Panel <span class="pcoded-badge badge badge-danger">NEW</span><span class="pcoded-badge badge badge-warning">HOT</span></label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-activity"></i></span><span class="pcoded-mtext">Hospital</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="hospital-dashboard.html">Dashboard</a></li>
                            <li><a href="hospital-department.html">Department</a></li>
                            <li><a href="hospital-doctor.html">Doctor</a></li>
                            <li><a href="hospital-patient.html">Patient</a></li>
                            <li><a href="hospital-nurse.html">Nurse</a></li>
                            <li><a href="hospital-pharmacist.html">Pharmacist</a></li>
                            <li><a href="hospital-laboratorie.html">Laboratorie</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user-check"></i></span><span class="pcoded-mtext">Membership</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="member-dashboard.html">Dashboard</a></li>
                            <li><a href="member-mail-template.html">Email templates</a></li>
                            <li><a href="member-countries.html">Country</a></li>
                            <li><a href="member-coupons.html">Coupons</a></li>
                            <li><a href="member-newsletter.html">Newsletter</a></li>
                            <li><a href="member-user.html">User</a></li>
                            <li><a href="member-membership.html">Membership</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-life-buoy"></i></span><span class="pcoded-mtext">Helpdesk</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="help-dashboard.html">Helpdesk dashboard</a></li>
                            <li><a href="help-create-ticket.html">Create ticket</a></li>
                            <li><a href="help-ticket.html">ticket list</a></li>
                            <li><a href="help-ticket-details.html">ticket Details</a></li>
                            <li><a href="help-customer.html">Customer</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-book"></i></span><span class="pcoded-mtext">School</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="school-dashboard.html">Dashboard</a></li>
                            <li><a href="school-student.html">Student</a></li>
                            <li><a href="school-parents.html">Parents</a></li>
                            <li><a href="school-teacher.html">Teacher</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link" data-toggle="tooltip" title="Student Information System"><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">SIS</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="sis-dashboard.html">Dashboard</a></li>
                            <li><a href="sis-leave.html">Leave</a></li>
                            <li><a href="sis-evaluation.html">Evaluation</a></li>
                            <li><a href="sis-event.html">Event</a></li>
                            <li><a href="sis-circular.html">Circular</a></li>
                            <li><a href="sis-course.html">Course</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-target"></i></span><span class="pcoded-mtext">Crypto</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="crypto-dashboard.html">Dashboard</a></li>
                            <li><a href="crypto-exchange.html">Exchange</a></li>
                            <li><a href="crypto-wallet.html">Wallet</a></li>
                            <li><a href="crypto-transactions.html">Transactions</a></li>
                            <li><a href="crypto-history.html">History</a></li>
                            <li><a href="crypto-trading.html">Trading</a></li>
                            <li><a href="crypto-initial-coin.html">Initial coin</a></li>
                            <li><a href="crypto-ico-listing.html">Ico listing</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link"><span class="pcoded-micon"><i class="feather icon-shopping-cart"></i></span><span class="pcoded-mtext">E-Commerce</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="ecom-product.html">Product</a></li>
                            <li><a href="ecom-product-details.html">Product details</a></li>
                            <li><a href="ecom-order.html">Order</a></li>
                            <li><a href="ecom-checkout.html">Checkout</a></li>
                            <li><a href="ecom-cart.html">Shopping Cart</a></li>
                            <li><a href="ecom-customers.html">Customers</a></li>
                            <li><a href="ecom-sellers.html">Sellers</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>UI Element</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Basic</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="bc_alert.html">Alert</a></li>
                            <li><a href="bc_button.html">Button</a></li>
                            <li><a href="bc_badges.html">Badges</a></li>
                            <li><a href="bc_breadcrumb-pagination.html">Breadcrumb & paggination</a></li>
                            <li><a href="bc_card.html">Cards</a></li>
                            <li><a href="bc_collapse.html">Collapse</a></li>
                            <li><a href="bc_carousel.html">Carousel</a></li>
                            <li><a href="bc_grid.html">Grid system</a></li>
                            <li><a href="bc_progress.html">Progress</a></li>
                            <li><a href="bc_modal.html">Modal</a></li>
                            <li><a href="bc_spinner.html">Spinner</a></li>
                            <li><a href="bc_tabs.html">Tabs & pills</a></li>
                            <li><a href="bc_typography.html">Typography</a></li>
                            <li><a href="bc_tooltip-popover.html">Tooltip & popovers</a></li>
                            <li><a href="bc_toasts.html">Toasts</a></li>
                            <li><a href="bc_extra.html">Other</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-gitlab"></i></span><span class="pcoded-mtext">Advance</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="ac_alert.html">Sweet alert</a></li>
                            <li><a href="ac-datepicker-componant.html">Datepicker</a></li>
                            <li><a href="ac_lightbox.html">Lightbox</a></li>
                            <li><a href="ac_notification.html">Notification</a></li>
                            <li><a href="ac_pnotify.html">Pnotify</a></li>
                            <li><a href="ac_rating.html">Rating</a></li>
                            <li><a href="ac_rangeslider.html">Rangeslider</a></li>
                            <li><a href="ac_syntax_highlighter.html">Syntax highlighter</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="animation.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-aperture"></i></span><span class="pcoded-mtext">Animations</span></a></li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-feather"></i></span><span class="pcoded-mtext">Icons</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="icon-feather.html">Feather<span class="pcoded-badge badge badge-danger">NEW</span></a></li>
                            <li><a href="icon-fontawsome.html">Font Awesome 5<span class="pcoded-badge badge badge-primary">1000+</span></a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Forms</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-text"></i></span><span class="pcoded-mtext">Forms</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="form_elements.html">Form elements</a></li>
                            <li><a href="form-elements-advance.html">Form advance</a></li>
                            <li><a href="form-validation.html">Form validation</a></li>
                            <li><a href="form-masking.html">Form masking</a></li>
                            <li><a href="form-wizard.html">Form wizard</a></li>
                            <li><a href="form-picker.html">Form picker</a></li>
                            <li><a href="form-select.html">Form select</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>table</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-align-justify"></i></span><span class="pcoded-mtext">Bootstrap table</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="tbl_bootstrap.html">Basic table</a></li>
                            <li><a href="tbl_sizing.html">Sizing table</a></li>
                            <li><a href="tbl_border.html">Border table</a></li>
                            <li><a href="tbl_styling.html">Styling table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-package"></i></span><span class="pcoded-mtext">Data table</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="dt_basic.html">Basic initialization</a></li>
                            <li><a href="dt_advance.html">Advance initialization</a></li>
                            <li><a href="dt_styling.html">Styling</a></li>
                            <li><a href="dt_api.html">API</a></li>
                            <li><a href="dt_plugin.html">Plug-in</a></li>
                            <li><a href="dt_sources.html">Data sources</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-server"></i></span><span class="pcoded-mtext">DT extensions</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="dt_ext_autofill.html">Autofill</a></li>
                            <li class="nav-item pcoded-hasmenu">
                                <a href="#!" class="nav-link "><span class="pcoded-mtext">Button</span></a>
                                <ul class="pcoded-submenu">
                                    <li><a href="dt_ext_basic_buttons.html">Basic button</a></li>
                                    <li><a href="dt_ext_export_buttons.html">Data export</a></li>
                                </ul>
                            </li>
                            <li><a href="dt_ext_col_reorder.html">Col reorder</a></li>
                            <li><a href="dt_ext_fixed_columns.html">Fixed columns</a></li>
                            <li><a href="dt_ext_fixed_header.html">Fixed header</a></li>
                            <li><a href="dt_ext_key_table.html">Key table</a></li>
                            <li><a href="dt_ext_responsive.html">Responsive</a></li>
                            <li><a href="dt_ext_row_reorder.html">Row reorder</a></li>
                            <li><a href="dt_ext_scroller.html">Scroller</a></li>
                            <li><a href="dt_ext_select.html">Select table</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Chart & Maps</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-pie-chart"></i></span><span class="pcoded-mtext">Chart</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="chart-apex.html">Apex Chart</a></li>
                            <li><a href="chart-chartjs.html">Chart js</a></li>
                            <li><a href="chart-highchart.html">Highchart</a></li>
                            <li><a href="chart-knob.html">Knob</a></li>
                            <li><a href="chart-peity.html">Peity</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-map"></i></span><span class="pcoded-mtext">Maps</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="map-google.html">Google</a></li>
                            <li><a href="map-api.html">Gmap search API</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Pages</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-lock"></i></span><span class="pcoded-mtext">Authentication</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="auth-signup.html" target="_blank">Sign up</a></li>
                            <li><a href="auth-signup-img-side.html" target="_blank">Sign up v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
                            <li><a href="auth-signin.html" target="_blank">Sign in</a></li>
                            <li><a href="auth-signin-img-side.html" target="_blank">Sign in v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
                            <li><a href="auth-reset-password.html" target="_blank">Reset password</a></li>
                            <li><a href="auth-reset-password-img-side.html" target="_blank">Reset password v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
                            <li><a href="auth-change-password.html" target="_blank">Change password</a></li>
                            <li><a href="auth-change-password-img-side.html" target="_blank">Change password v2 <span class="pcoded-badge badge badge-light-danger">NEW</span></a></li>
                            <li><a href="auth-profile-settings.html" target="_blank">Profile settings</a></li>
                            <li><a href="auth-tabs.html" target="_blank">Tabs Authentication</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sliders"></i></span><span class="pcoded-mtext">Maintenance</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="maint-error.html">Error</a></li>
                            <li><a href="maint-offline-ui.html" target="_blank">Offline UI</a></li>
                            <li><a href="maint-maintance.html" target="_blank">Maintenance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>App</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-mail"></i></span><span class="pcoded-mtext">Email</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="email_inbox.html">Inbox</a></li>
                            <li><a href="email_read.html">Read mail</a></li>
                            <li><a href="email_compose.html">Compose mail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-clipboard"></i></span><span class="pcoded-mtext">Task</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="task-list.html">List</a></li>
                            <li><a href="task-board.html">Board</a></li>
                            <li><a href="task-detail.html">Detail</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="todo.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-check-square"></i></span><span class="pcoded-mtext">To-Do</span></a>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-image"></i></span><span class="pcoded-mtext">Gallery</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="gallery-grid.html">Grid</a></li>
                            <li><a href="gallery-masonry.html">Masonry</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Extension</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-plus"></i></span><span class="pcoded-mtext">Editor</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="editor-classic.html">CK editor</a></li>
                            <li><a href="editor-trumbowyg.html">Trumbowyg editor</a></li>
                        </ul>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-file-minus"></i></span><span class="pcoded-mtext">Invoice</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="invoice.html">Invoice</a></li>
                            <li><a href="invoice-summary.html">Invoice summary</a></li>
                            <li><a href="invoice-list.html">Invoice list</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a href="full-calendar.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-calendar"></i></span><span class="pcoded-mtext">Full calendar</span></a></li>
                    <li class="nav-item"><a href="file-upload.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-upload-cloud"></i></span><span class="pcoded-mtext">File upload</span></a></li>
                    <li class="nav-item"><a href="image_crop.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-scissors"></i></span><span class="pcoded-mtext">Image cropper</span></a></li>
                    <li class="nav-item pcoded-menu-caption">
                        <label>Other</label>
                    </li>
                    <li class="nav-item pcoded-hasmenu">
                        <a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-menu"></i></span><span class="pcoded-mtext">Menu levels</span></a>
                        <ul class="pcoded-submenu">
                            <li><a href="#!">Menu Level 2.1</a></li>
                            <li class="pcoded-hasmenu">
                                <a href="#!">Menu level 2.2</a>
                                <ul class="pcoded-submenu">
                                    <li><a href="#!">Menu level 3.1</a></li>
                                    <li class="pcoded-hasmenu">
                                        <a href="#!">Menu level 3.2</a>
                                        <ul class="pcoded-submenu">
                                            <li><a href="#!">Menu level 4.1</a></li>
                                            <li><a href="#!">Menu level 4.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item disabled"><a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-power"></i></span><span class="pcoded-mtext">Disabled menu</span></a></li>
                    <li class="nav-item"><a href="sample-page.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-sidebar"></i></span><span class="pcoded-mtext">Sample page</span></a></li> -->

                </ul>

             

            </div>
        </div>
    </nav>
    <!-- [ navigation menu ] end -->

    <!-- [ Header ] start -->
    <header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">


        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>

            <a href="#!" class="mob-toggler">
                <i class="feather icon-more-vertical"></i>
            </a>
        </div>



    </header>
    <!-- [ Header ] end -->

    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">

            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- customar project  start -->
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="table-responsive">
                                <table id="report-table" class="table table-bordered table-striped mb-0">
                                    <thead>
                                        <tr>
                                            <th>তারিখ</th>
                                            <th>সদস্য নং</th>
                                            <th>রশিদ নং</th>
                                            <th>নাম</th>
                                            <th>শেয়ার </th>
                                            <th>সঞ্চয় </th>
                                            <th>ঋণ </th>
                                            <th>সুদ </th>
                                            <th>জরিমানা </th>
                                            <th>ভর্তি ফি </th>
                                            <th>বিক্রয় </th>
                                            <th>হিসাব খরচ </th>
                                            <th>বিশেষ সঞ্চয় </th>

                                            <th>মোট টাকা</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            <?php 
                                              $sum=0;
                                              $total_sum=0;
                                              $total_share=0;
                                              $total_Saving=0;
                                              $total_loan_return=0;
                                              $total_interest=0;
                                              $total_fine=0;
                                              $total_admission_fee=0;
                                              $total_sale=0;
                                              $total_accounting_cost=0;
                                              $total_special_saving=0;
                                            ?>
                                     @foreach($user_all_infos as $user_all_info)  
                                        <tr>
                                          
                                            <td>{{ Carbon\Carbon::parse($user_all_info->created_at)->format('Y/m/d') }}</td>
                                            <td>{{$user_all_info->সদস্য_নং}}</td>
                                            <td>{{$user_all_info->রশিদ_নং}}</td>
                                            <td>{{$user_all_info->সদস্য_নাম_মি_মিসেস_মিস}}</td>
                                            <td>{{$user_all_info->শেয়ার}}</td>
                                            <td>{{$user_all_info->সঞ্চয়}}</td>
                                            <td>{{$user_all_info->ঋণ_ফেরৎ}}</td>
                                            <td>{{$user_all_info->সুদ}}</td>
                                            <td>{{$user_all_info->জরিমানা}}</td>
                                            <td>{{$user_all_info->ভর্তি_ফি}}</td>
                                            <td>{{$user_all_info->বিক্রয়}}</td>
                                            <td>{{$user_all_info->হিসাব_খরচ}}</td>
                                            <td>{{$user_all_info->বিশেষ_সঞ্চয়}}</td>
                                            <?php 
                                              $sum=$user_all_info->শেয়ার+$user_all_info->সঞ্চয়+$user_all_info->ঋণ_ফেরৎ+$user_all_info->সুদ+$user_all_info->জরিমানা+$user_all_info->ভর্তি_ফি+$user_all_info->বিক্রয়+$user_all_info->হিসাব_খরচ+$user_all_info->বিশেষ_সঞ্চয়;
                                              $total_share+=$user_all_info->শেয়ার;
                                              $total_Saving+=$user_all_info->সঞ্চয়;
                                              $total_loan_return+=$user_all_info->ঋণ_ফেরৎ;
                                              $total_interest+=$user_all_info->সুদ;
                                              $total_fine+=$user_all_info->জরিমানা;
                                              $total_admission_fee+=$user_all_info->ভর্তি_ফি;
                                              $total_sale+=$user_all_info->বিক্রয়;
                                              $total_accounting_cost+=$user_all_info->হিসাব_খরচ;
                                              $total_special_saving+=$user_all_info->বিশেষ_সঞ্চয়;
                                              $total_sum+=$sum;
                                            ?>
                                            <td><?php echo $sum;?></td>
                                       
                                        </tr>
                                    @endforeach    

                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th colspan="4" style="text-align:right" >
                                        মোট :
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_share; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_Saving; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_loan_return; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_interest; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_fine; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_admission_fee; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_sale; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_accounting_cost; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo $total_special_saving; @endphp
                                        </th>
                                        <th  colspan="1">
                                        @php echo  $total_sum; @endphp
                                        </th>
                                    </tr>
                                </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- customar project  end -->
            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <div class="modal fade" id="রশিদ" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">শেয়ার ও সঞ্চয় আদায় রশিদ </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col-sm-12">
                                <h5 class="mt-3" style="color:#4680ff;">শেয়ার ও সঞ্চয় বিবরণ </h5>
                                <hr>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Name">শেয়ার </label>
                                    <input type="text" class="form-control" id="Name" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">সঞ্চয় </label>
                                    <input type="text" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">ঋণ ফেরৎ </label>
                                    <input type="text" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Email">সুদ  </label>
                                    <input type="text" class="form-control" id="Email" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">জরিমানা</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">ভর্তি ফি</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">বিক্রয়</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">হিসাব খরচ</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="floating-label" for="Phone">বিশেষ সঞ্চয়</label>
                                    <input type="text" class="form-control" id="Phone" placeholder="">
                                </div>
                            </div>


                            <div class="col-sm-6">
                                <div class="form-group fill">
                                    <label class="floating-label" for="Icon">আদায়কারীর স্বাক্ষর</label>
                                    <input type="file" class="form-control" id="Icon" placeholder="sdf">
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <button class="btn btn-primary">জমা দিন</button>
                                <button class="btn btn-danger">মুছে ফেলুন</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
    <!-- Warning Section start -->
    <!-- Older IE warning message -->
    <!--[if lt IE 11]>
        <div class="ie-warning">
            <h1>Warning!!</h1>
            <p>You are using an outdated version of Internet Explorer, please upgrade
               <br/>to any of the following web browsers to access this website.
            </p>
            <div class="iew-container">
                <ul class="iew-download">
                    <li>
                        <a href="http://www.google.com/chrome/">
                            <img src="assets/images/browser/chrome.png" alt="Chrome">
                            <div>Chrome</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.mozilla.org/en-US/firefox/new/">
                            <img src="assets/images/browser/firefox.png" alt="Firefox">
                            <div>Firefox</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://www.opera.com">
                            <img src="assets/images/browser/opera.png" alt="Opera">
                            <div>Opera</div>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.apple.com/safari/">
                            <img src="assets/images/browser/safari.png" alt="Safari">
                            <div>Safari</div>
                        </a>
                    </li>
                    <li>
                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="assets/images/browser/ie.png" alt="">
                            <div>IE (11 & above)</div>
                        </a>
                    </li>
                </ul>
            </div>
            <p>Sorry for the inconvenience!</p>
        </div>
    <![endif]-->
    <!-- Warning Section Ends -->

  <!-- Required Js -->
  <script src="{{ asset('assets') }}/js/vendor-all.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/bootstrap.min.js"></script>
    <script src="{{ asset('assets') }}/js/ripple.js"></script>
    <script src="{{ asset('assets') }}/js/pcoded.min.js"></script>
    <script src="{{ asset('assets') }}/js/menu-setting.min.js"></script>

    <script src="{{ asset('assets') }}/js/plugins/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets') }}/js/plugins/dataTables.bootstrap4.min.js"></script>
    <!-- Apex Chart -->
    <script src="{{ asset('assets') }}/js/plugins/apexcharts.min.js"></script>
    <script src="{{ asset('assets') }}/js/pages/data-advance-custom.js"></script>
    <script>
        // DataTable start
        $('#report-table').DataTable();
        // DataTable end
    </script>

</body>


<!-- Mirrored from ableproadmin.com/bootstrap/default/hospital-doctor.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Dec 2020 00:43:02 GMT -->

</html>