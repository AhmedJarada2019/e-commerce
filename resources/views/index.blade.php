@extends('parent')
@section('content')
    <!-- BEGIN: Main Menu-->
    <div class="horizontal-menu-wrapper">
        <div class="header-navbar navbar-expand-sm navbar navbar-horizontal floating-nav navbar-light navbar-without-dd-arrow navbar-shadow menu-border"
            role="navigation" data-menu="menu-wrapper" style="width: 100%;">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mr-auto"><a class="navbar-brand" href="">
                            <div class="brand-logo"></div>
                            <h2 class="brand-text mb-0">Vuexy</h2>
                        </a></li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                            <i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i>
                            <i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary"
                                data-ticon="icon-disc"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Horizontal menu content-->
            <div class="navbar-container main-menu-content w-100" data-menu="menu-container" style="width: 100% !important">
                <ul class="nav navbar-nav" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="index.html"
                            data-toggle="dropdown"><i class="feather icon-home"></i><span
                                data-i18n="Dashboard">Dashboard</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="dashboard-analytics.html"
                                    data-toggle="dropdown" data-i18n="Analytics"><i
                                        class="feather icon-activity"></i>Analytics</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="dashboard-ecommerce.html"
                                    data-toggle="dropdown" data-i18n="eCommerce"><i
                                        class="feather icon-shopping-cart"></i>eCommerce</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link" href="#"
                            data-toggle="dropdown"><i class="feather icon-package"></i><span
                                data-i18n="Apps">Apps</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="app-email.html" data-toggle="dropdown"
                                    data-i18n="Email"><i class="feather icon-mail"></i>Email</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-chat.html" data-toggle="dropdown"
                                    data-i18n="Chat"><i class="feather icon-message-square"></i>Chat</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-todo.html" data-toggle="dropdown"
                                    data-i18n="Todo"><i class="feather icon-check-square"></i>Todo</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="app-calender.html" data-toggle="dropdown"
                                    data-i18n="Calender"><i class="feather icon-calendar"></i>Calender</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Ecommerce"><i class="feather icon-shopping-cart"></i>Ecommerce</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-shop.html"
                                            data-toggle="dropdown" data-i18n="Shop"><i
                                                class="feather icon-circle"></i>Shop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-details.html"
                                            data-toggle="dropdown" data-i18n="Details"><i
                                                class="feather icon-circle"></i>Details</a>
                                    </li>
                                    <li class="active" data-menu=""><a class="dropdown-item"
                                            href="app-ecommerce-wishlist.html" data-toggle="dropdown"
                                            data-i18n="Wish List"><i class="feather icon-circle"></i>Wish List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-ecommerce-checkout.html"
                                            data-toggle="dropdown" data-i18n="Checkout"><i
                                                class="feather icon-circle"></i>Checkout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="User"><i class="feather icon-user"></i>User</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="app-user-list.html"
                                            data-toggle="dropdown" data-i18n="List"><i
                                                class="feather icon-circle"></i>List</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-view.html"
                                            data-toggle="dropdown" data-i18n="View"><i
                                                class="feather icon-circle"></i>View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="app-user-edit.html"
                                            data-toggle="dropdown" data-i18n="Edit"><i
                                                class="feather icon-circle"></i>Edit</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="#" data-toggle="dropdown"><i class="feather icon-layers"></i><span
                                data-i18n="UI Elements">UI Elements</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Data List"><i class="feather icon-list"></i>Data List</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="data-list-view.html"
                                            data-toggle="dropdown" data-i18n="List View"><i
                                                class="feather icon-circle"></i>List View</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="data-thumb-view.html"
                                            data-toggle="dropdown" data-i18n="Thumb View"><i
                                                class="feather icon-circle"></i>Thumb View</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Content"><i class="feather icon-layout"></i>Content</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="content-grid.html"
                                            data-toggle="dropdown" data-i18n="Grid"><i
                                                class="feather icon-circle"></i>Grid</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-typography.html"
                                            data-toggle="dropdown" data-i18n="Typography"><i
                                                class="feather icon-circle"></i>Typography</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-text-utilities.html"
                                            data-toggle="dropdown" data-i18n="Text Utilities"><i
                                                class="feather icon-circle"></i>Text Utilities</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-syntax-highlighter.html"
                                            data-toggle="dropdown" data-i18n="Syntax Highlighter"><i
                                                class="feather icon-circle"></i>Syntax Highlighter</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="content-helper-classes.html"
                                            data-toggle="dropdown" data-i18n="Helper Classes"><i
                                                class="feather icon-circle"></i>Helper Classes</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="colors.html" data-toggle="dropdown"
                                    data-i18n="Colors"><i class="feather icon-droplet"></i>Colors</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Cards"><i class="feather icon-credit-card"></i>Cards</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="card-basic.html"
                                            data-toggle="dropdown" data-i18n="Basic"><i
                                                class="feather icon-circle"></i>Basic</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-advance.html"
                                            data-toggle="dropdown" data-i18n="Advance"><i
                                                class="feather icon-circle"></i>Advance</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-statistics.html"
                                            data-toggle="dropdown" data-i18n="Statistics"><i
                                                class="feather icon-circle"></i>Statistics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-analytics.html"
                                            data-toggle="dropdown" data-i18n="Analytics"><i
                                                class="feather icon-circle"></i>Analytics</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="card-actions.html"
                                            data-toggle="dropdown" data-i18n="Card Actions"><i
                                                class="feather icon-circle"></i>Card Actions</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Icons"><i class="feather icon-eye"></i>Icons</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="icons-feather.html"
                                            data-toggle="dropdown" data-i18n="Feather"><i
                                                class="feather icon-circle"></i>Feather</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="icons-font-awesome.html"
                                            data-toggle="dropdown" data-i18n="Font Awesome"><i
                                                class="feather icon-circle"></i>Font Awesome</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Components"><i class="feather icon-briefcase"></i>Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="component-alerts.html"
                                            data-toggle="dropdown" data-i18n="Alerts"><i
                                                class="feather icon-circle"></i>Alerts</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-buttons-basic.html"
                                            data-toggle="dropdown" data-i18n="Buttons"><i
                                                class="feather icon-circle"></i>Buttons</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-breadcrumbs.html"
                                            data-toggle="dropdown" data-i18n="Breadcrumbs"><i
                                                class="feather icon-circle"></i>Breadcrumbs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-carousel.html"
                                            data-toggle="dropdown" data-i18n="Carousel"><i
                                                class="feather icon-circle"></i>Carousel</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-collapse.html"
                                            data-toggle="dropdown" data-i18n="Collapse"><i
                                                class="feather icon-circle"></i>Collapse</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-dropdowns.html"
                                            data-toggle="dropdown" data-i18n="Dropdowns"><i
                                                class="feather icon-circle"></i>Dropdowns</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-list-group.html"
                                            data-toggle="dropdown" data-i18n="List Group"><i
                                                class="feather icon-circle"></i>List Group</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-modals.html"
                                            data-toggle="dropdown" data-i18n="Modals"><i
                                                class="feather icon-circle"></i>Modals</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pagination.html"
                                            data-toggle="dropdown" data-i18n="Pagination"><i
                                                class="feather icon-circle"></i>Pagination</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navs-component.html"
                                            data-toggle="dropdown" data-i18n="Navs Component"><i
                                                class="feather icon-circle"></i>Navs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-navbar.html"
                                            data-toggle="dropdown" data-i18n="Navbar"><i
                                                class="feather icon-circle"></i>Navbar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tabs-component.html"
                                            data-toggle="dropdown" data-i18n="Tabs Component"><i
                                                class="feather icon-circle"></i>Tabs Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pills-component.html"
                                            data-toggle="dropdown" data-i18n="Pills Component"><i
                                                class="feather icon-circle"></i>Pills Component</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-tooltips.html"
                                            data-toggle="dropdown" data-i18n="Tooltips"><i
                                                class="feather icon-circle"></i>Tooltips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-popovers.html"
                                            data-toggle="dropdown" data-i18n="Popovers"><i
                                                class="feather icon-circle"></i>Popovers</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-badges.html"
                                            data-toggle="dropdown" data-i18n="Badges"><i
                                                class="feather icon-circle"></i>Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-pill-badges.html"
                                            data-toggle="dropdown" data-i18n="Pill Badges"><i
                                                class="feather icon-circle"></i>Pill Badges</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-progress.html"
                                            data-toggle="dropdown" data-i18n="Progress"><i
                                                class="feather icon-circle"></i>Progress</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-media-objects.html"
                                            data-toggle="dropdown" data-i18n=""><i
                                                class="feather icon-circle"></i>Media Objects</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-spinner.html"
                                            data-toggle="dropdown" data-i18n="Spinner"><i
                                                class="feather icon-circle"></i>Spinner</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="component-bs-toast.html"
                                            data-toggle="dropdown" data-i18n="Toasts"><i
                                                class="feather icon-circle"></i>Toasts</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Extra Components"><i class="feather icon-box"></i>Extra Components</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-avatar.html"
                                            data-toggle="dropdown" data-i18n="Avatar"><i
                                                class="feather icon-circle"></i>Avatar</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-chips.html"
                                            data-toggle="dropdown" data-i18n="Chips"><i
                                                class="feather icon-circle"></i>Chips</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ex-component-divider.html"
                                            data-toggle="dropdown" data-i18n="Divider"><i
                                                class="feather icon-circle"></i>Divider</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Extensions"><i class="feather icon-box"></i>Extensions</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-sweet-alerts.html"
                                            data-toggle="dropdown" data-i18n="Sweet Alert"><i
                                                class="feather icon-circle"></i>Sweet Alert</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-toastr.html"
                                            data-toggle="dropdown" data-i18n="Toastr"><i
                                                class="feather icon-circle"></i>Toastr</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-noui-slider.html"
                                            data-toggle="dropdown" data-i18n="NoUi Slider"><i
                                                class="feather icon-circle"></i>NoUi Slider</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-file-uploader.html"
                                            data-toggle="dropdown" data-i18n="File Uploader"><i
                                                class="feather icon-circle"></i>File Uploader</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-quill-editor.html"
                                            data-toggle="dropdown" data-i18n="Quill Editor"><i
                                                class="feather icon-circle"></i>Quill Editor</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-drag-drop.html"
                                            data-toggle="dropdown" data-i18n="Drag &amp; Drop"><i
                                                class="feather icon-circle"></i>Drag &amp; Drop</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-tour.html"
                                            data-toggle="dropdown" data-i18n="Tour"><i
                                                class="feather icon-circle"></i>Tour</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-clipboard.html"
                                            data-toggle="dropdown" data-i18n="Clipboard"><i
                                                class="feather icon-circle"></i>Clipboard</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-plyr.html"
                                            data-toggle="dropdown" data-i18n="Media Player"><i
                                                class="feather icon-circle"></i>Media Player</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-context-menu.html"
                                            data-toggle="dropdown" data-i18n="Context Menu"><i
                                                class="feather icon-circle"></i>Context Menu</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-swiper.html"
                                            data-toggle="dropdown" data-i18n="swiper"><i
                                                class="feather icon-smartphone"></i>swiper</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="ext-component-i18n.html"
                                            data-toggle="dropdown" data-i18n="l18n"><i
                                                class="feather icon-circle"></i>l18n</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="#" data-toggle="dropdown"><i class="feather icon-edit-2"></i><span
                                data-i18n="Forms &amp; Tables">Forms &amp; Tables</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Form Elements"><i class="feather icon-copy"></i>Form Elements</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="form-select.html"
                                            data-toggle="dropdown" data-i18n="Select"><i
                                                class="feather icon-circle"></i>Select</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-switch.html"
                                            data-toggle="dropdown" data-i18n="Switch"><i
                                                class="feather icon-circle"></i>Switch</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-checkbox.html"
                                            data-toggle="dropdown" data-i18n="Checkbox"><i
                                                class="feather icon-circle"></i>Checkbox</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-radio.html"
                                            data-toggle="dropdown" data-i18n="Radio"><i
                                                class="feather icon-circle"></i>Radio</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-inputs.html"
                                            data-toggle="dropdown" data-i18n="Input"><i
                                                class="feather icon-circle"></i>Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-input-groups.html"
                                            data-toggle="dropdown" data-i18n="Input Groups"><i
                                                class="feather icon-circle"></i>Input Groups</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-number-input.html"
                                            data-toggle="dropdown" data-i18n="Number Input"><i
                                                class="feather icon-circle"></i>Number Input</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-textarea.html"
                                            data-toggle="dropdown" data-i18n="Textarea"><i
                                                class="feather icon-circle"></i>Textarea</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="form-date-time-picker.html"
                                            data-toggle="dropdown" data-i18n="Date &amp; Time Picker"><i
                                                class="feather icon-circle"></i>Date &amp; Time Picker</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-layout.html" data-toggle="dropdown"
                                    data-i18n="Form Layout"><i class="feather icon-box"></i>Form Layout</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-wizard.html" data-toggle="dropdown"
                                    data-i18n="Form Wizard"><i class="feather icon-package"></i>Form Wizard</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="form-validation.html"
                                    data-toggle="dropdown" data-i18n="Form Validation"><i
                                        class="feather icon-check-circle"></i>Form Validation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table.html" data-toggle="dropdown"
                                    data-i18n="Table"><i class="feather icon-server"></i>Table</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-datatable.html"
                                    data-toggle="dropdown" data-i18n="Datatable"><i
                                        class="feather icon-grid"></i>Datatable</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="table-ag-grid.html" data-toggle="dropdown"
                                    data-i18n="agGrid Table"><i class="feather icon-grid"></i>agGrid Table</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="#" data-toggle="dropdown"><i class="feather icon-file"></i><span
                                data-i18n="Pages">Pages</span></a>
                        <ul class="dropdown-menu">
                            <li data-menu=""><a class="dropdown-item" href="page-user-profile.html"
                                    data-toggle="dropdown" data-i18n="Profile"><i
                                        class="feather icon-user"></i>Profile</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-account-settings.html"
                                    data-toggle="dropdown" data-i18n="Account Settings"><i
                                        class="feather icon-settings"></i>Account Settings</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-faq.html" data-toggle="dropdown"
                                    data-i18n="FAQ"><i class="feather icon-help-circle"></i>FAQ</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-knowledge-base.html"
                                    data-toggle="dropdown" data-i18n="Knowledge Base"><i
                                        class="feather icon-info"></i>Knowledge Base</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-search.html" data-toggle="dropdown"
                                    data-i18n="Search"><i class="feather icon-search"></i>Search</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="page-invoice.html" data-toggle="dropdown"
                                    data-i18n="Invoice"><i class="feather icon-file"></i>Invoice</a>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Authentication"><i class="feather icon-unlock"></i>Authentication</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="auth-login.html"
                                            data-toggle="dropdown" data-i18n="Login"><i
                                                class="feather icon-circle"></i>Login</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-register.html"
                                            data-toggle="dropdown" data-i18n="Register"><i
                                                class="feather icon-circle"></i>Register</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-forgot-password.html"
                                            data-toggle="dropdown" data-i18n="Forgot Password"><i
                                                class="feather icon-circle"></i>Forgot Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-reset-password.html"
                                            data-toggle="dropdown" data-i18n="Reset Password"><i
                                                class="feather icon-circle"></i>Reset Password</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="auth-lock-screen.html"
                                            data-toggle="dropdown" data-i18n="Lock Screen"><i
                                                class="feather icon-circle"></i>Lock Screen</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Miscellaneous"><i class="feather icon-file-text"></i>Miscellaneous</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="page-coming-soon.html"
                                            data-toggle="dropdown" data-i18n="Coming Soon"><i
                                                class="feather icon-circle"></i>Coming Soon</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-404.html"
                                            data-toggle="dropdown" data-i18n="404"><i
                                                class="feather icon-circle"></i>Error 404</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="error-500.html"
                                            data-toggle="dropdown" data-i18n="500"><i
                                                class="feather icon-circle"></i>Error 500</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-not-authorized.html"
                                            data-toggle="dropdown" data-i18n="Not Authorized"><i
                                                class="feather icon-circle"></i>Not Authorized</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="page-maintenance.html"
                                            data-toggle="dropdown" data-i18n="Maintenance"><i
                                                class="feather icon-circle"></i>Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="#" data-toggle="dropdown"><i class="feather icon-bar-chart-2"></i><span
                                data-i18n="Charts &amp; Maps">Charts &amp; Maps</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Charts"><i class="feather icon-pie-chart"></i>Charts</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="chart-apex.html"
                                            data-toggle="dropdown" data-i18n="Apex"><i
                                                class="feather icon-circle"></i>Apex</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-chartjs.html"
                                            data-toggle="dropdown" data-i18n="Chartjs"><i
                                                class="feather icon-circle"></i>Chartjs</a>
                                    </li>
                                    <li data-menu=""><a class="dropdown-item" href="chart-echarts.html"
                                            data-toggle="dropdown" data-i18n="Echarts"><i
                                                class="feather icon-circle"></i>Echarts</a>
                                    </li>
                                </ul>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="maps-google.html" data-toggle="dropdown"
                                    data-i18n="Google Maps"><i class="feather icon-map"></i>Google Maps</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown nav-item" data-menu="dropdown"><a class="dropdown-toggle nav-link"
                            href="#" data-toggle="dropdown"><i class="feather icon-more-horizontal"></i><span
                                data-i18n="Others">Others</span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                    class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                    data-i18n="Menu Levels"><i class="feather icon-menu"></i>Menu Levels</a>
                                <ul class="dropdown-menu">
                                    <li data-menu=""><a class="dropdown-item" href="#" data-toggle="dropdown"
                                            data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                    </li>
                                    <li class="dropdown dropdown-submenu" data-menu="dropdown-submenu"><a
                                            class="dropdown-item dropdown-toggle" href="#" data-toggle="dropdown"
                                            data-i18n="Second Level"><i class="feather icon-circle"></i>Second Level</a>
                                        <ul class="dropdown-menu">
                                            <li data-menu=""><a class="dropdown-item" href="#"
                                                    data-toggle="dropdown" data-i18n="Third Level"><i
                                                        class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                            <li data-menu=""><a class="dropdown-item" href="#"
                                                    data-toggle="dropdown" data-i18n="Third Level"><i
                                                        class="feather icon-circle"></i>Third Level</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="disabled" data-menu=""><a class="dropdown-item" href=""
                                    data-toggle="dropdown" data-i18n="Disabled Menu"><i
                                        class="feather icon-eye-off"></i>Disabled Menu</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item"
                                    href="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/documentation"
                                    data-toggle="dropdown" data-i18n="Documentation"><i
                                        class="feather icon-folder"></i>Documentation</a>
                            </li>
                            <li data-menu=""><a class="dropdown-item" href="https://pixinvent.ticksy.com/"
                                    data-toggle="dropdown" data-i18n="Raise Support"><i
                                        class="feather icon-life-buoy"></i>Raise Support</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Main Menu-->
    <div class="w-100" style="">
        <div id="carouselExampleFade" class="carousel slide carousel-fade w-100" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item">
                    <img src="{{ asset('app-assets/images/slider/06.jpg') }}" class="img-fluid d-block w-100"
                        alt="cf-img-1" style="height: 80vh">
                </div>
                <div class="carousel-item active">
                    <img src="{{ asset('app-assets/images/slider/02.jpg') }}" class="img-fluid d-block w-100"
                        alt="cf-img-2" style="height: 80vh">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('app-assets/images/slider/05.jpg') }}" class="img-fluid d-block w-100"
                        alt="cf-img-3" style="height: 80vh">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- BEGIN: Content-->
    <div class="app-content content p-0">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">WishList</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('show more') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Wishlist Starts -->
                <section id="wishlist" class="grid-view wishlist-items">
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/1.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            4 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div style="text-align: right">
                                        <del class="text-right" style="font-size: 1.2rem;font-weight: 500">25$</del>
                                        <h6 class="item-price">
                                            $19.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Sony - ZX Series On-Ear Headphones - Black
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        These Sony ZX Series MDRZX110/BLK headphones feature neodymium magnets and 30mm
                                        drivers for powerful,
                                        reinforced sound. Enjoy your favorite songs with lush bass response thanks to the
                                        Acoustic Bass Booster
                                        technology.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <button class="btn btn-success"
                                    style="width: 33.33%;border-radius: 0;border:none;height: 41px;">close</button>
                                <button class="btn btn-info"
                                    style="width: 33.33%;border-radius: 0;border:none;height: 41px;">close</button>
                                <button class="btn btn-primary"
                                    style="width: 33.33%;border-radius: 0;border:none;height: 41px;">close</button>
                            </div>
                        </div>
                    </div>

                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Wishlist Ends -->

            </div>
        </div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">WishList</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('show more') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Wishlist Starts -->
                <section id="wishlist" class="grid-view wishlist-items">
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/1.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            4 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $19.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Sony - ZX Series On-Ear Headphones - Black
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        These Sony ZX Series MDRZX110/BLK headphones feature neodymium magnets and 30mm
                                        drivers for powerful,
                                        reinforced sound. Enjoy your favorite songs with lush bass response thanks to the
                                        Acoustic Bass Booster
                                        technology.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Wishlist Ends -->

            </div>
        </div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">WishList</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrum-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-sm dropdown-toggle" type="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{ __('show more') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Wishlist Starts -->
                <section id="wishlist" class="grid-view wishlist-items">
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/1.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            4 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $19.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Sony - ZX Series On-Ear Headphones - Black
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        These Sony ZX Series MDRZX110/BLK headphones feature neodymium magnets and 30mm
                                        drivers for powerful,
                                        reinforced sound. Enjoy your favorite songs with lush bass response thanks to the
                                        Acoustic Bass Booster
                                        technology.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card ecommerce-card">
                        <div class="card-content">
                            <div class="item-img text-center">
                                <a href="app-ecommerce-details.html">
                                    <img src="{{ asset('app-assets/images/pages/eCommerce/2.png') }}" class="img-fluid"
                                        alt="img-placeholder">
                                </a>
                            </div>
                            <div class="card-body">
                                <div class="item-wrapper">
                                    <div class="item-rating">
                                        <div class="badge badge-primary badge-md">
                                            1 <i class="feather icon-star ml-25"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <h6 class="item-price">
                                            $4999.99
                                        </h6>
                                    </div>
                                </div>
                                <div class="item-name">
                                    <a href="app-ecommerce-details.html">
                                        Asus - ROG Desktop - Intel Core i7 - 16GB Memory - Double NVIDIA GeForce GTX1080 -
                                        1TB Hard Drive +
                                        2x512GB Solid State Drive - Gray
                                    </a>
                                </div>
                                <div>
                                    <p class="item-description">
                                        Place the sleek form of this ASUS desktop computer tower on your desk, and take your
                                        gaming to the next
                                        level. With Intel Core i7 processing inside, this speedy desktop keeps up with even
                                        multilayered action
                                        games. Nvidia graphics on this ASUS desktop computer help eliminate ghosting and
                                        stutter so you see
                                        every move your enemy makes.
                                    </p>
                                </div>
                            </div>
                            <div class="item-options text-center">
                                <div class="wishlist remove-wishlist">
                                    <i class="feather icon-x align-middle"></i> Remove
                                </div>
                                <div class="cart move-cart">
                                    <i class="feather icon-shopping-cart"></i> <span class="add-to-cart">Move to
                                        cart</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Wishlist Ends -->

            </div>
        </div>
    </div>
@endsection
