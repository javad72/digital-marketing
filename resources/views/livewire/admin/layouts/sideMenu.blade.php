
<?php
if(!function_exists('isOpen')){
    function isOpen($secondSegment):bool
    {
        // گرفتن URI درخواست فعلی
        $requestUri = $_SERVER['REQUEST_URI'];
        $uriArray = explode('/',$requestUri) ;
        if(in_array($secondSegment ,$uriArray )){
            return true;
        }else{
            return false ;
        }
    }
}
if(!function_exists('isOpen2')){
    function isOpen2($secondSegment):bool
    {
        // گرفتن URI درخواست فعلی
        $requestUri = $_SERVER['REQUEST_URI'];
//        return true;
        if(strpos($requestUri , $secondSegment)){
            return true;
        }else{
            return false ;
        }
    }
}
$menus = [
    [
        "title" => 'داشبورد',
        "icon" => 'fas fa-chart-pie',
        "class" => '',
        "slug" => 'dashboard',
        "href" => '#',
        "subMenu" => [
            [
                "title" => 'داشبورد',
                "class" => '',
                "slug" => 'dashboard',
                "href" => 'dashboard',
            ]
        ]
    ],
    [
        "title" => 'مدیریت نمونه کارها',
        "icon" => 'far fa-images',
        "class" => '',
        "slug" => 'portfolio',
        "href" => '#',
        "subMenu" => [
            [
                "title" => 'نمونه کار ها',
                "class" => '',
                "slug" => 'portfolio',
                "href" => 'portfolio',
            ],
            [
                "title" => 'افزودن',
                "class" => '',
                "slug" => 'new-portfolio',
                "href" => 'new-portfolio',
            ]
        ]
    ]
];


?>

<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" data-double-top-nav="data-double-top-nav"
     style="display: none;">
    <div class="w-100">
        <div class="d-flex flex-between-center">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
                    data-bs-toggle="collapse" data-bs-target="#navbarDoubleTop" aria-controls="navbarDoubleTop"
                    aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
                {{--                        <div class="d-flex align-items-center"><img class="me-2" src="{{asset('assets/admin/img/icons/spot-illustrations/falcon.png')}}" alt="" width="40" /><span class="font-sans-serif text-primary">falcon</span></div>--}}
                <div class="d-flex align-items-center"><img class="me-2"
                                                            src="{{asset('assets/admin/img/icons/spot-illustrations/falcon.png')}}"
                                                            alt="" width="40"/><span
                        class="font-sans-serif text-primary">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
                <li class="nav-item">
                    <div class="search-box" data-list='{"valueNames":["title"]}'>
                        <form class="position-relative" data-bs-toggle="search" data-bs-display="static"><input
                                class="form-control search-input fuzzy-search" type="search" placeholder="Search3..."
                                aria-label="Search"/>
                            <span class="fas fa-search search-box-icon"></span>
                        </form>
                        <div
                            class="btn-close-falcon-container position-absolute end-0 top-50 translate-middle shadow-none"
                            data-bs-dismiss="search">
                            <button class="btn btn-link btn-close-falcon p-0" aria-label="Close"></button>
                        </div>
                        <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                            <div class="scrollbar list py-3" style="max-height: 24rem;">
                                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Recently
                                    Browsed</h6><a class="dropdown-item fs-10 px-x1 py-1 hover-primary"
                                                   href="app/events/event-detail.html">
                                    <div class="d-flex align-items-center">
                                        <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                        <div class="fw-normal title">Pages <span
                                                class="fas fa-chevron-right mx-1 text-500 fs-11"
                                                data-fa-transform="shrink-2"></span> Events
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item fs-10 px-x1 py-1 hover-primary"
                                   href="app/e-commerce/customers.html">
                                    <div class="d-flex align-items-center">
                                        <span class="fas fa-circle me-2 text-300 fs-11"></span>
                                        <div class="fw-normal title">E-commerce <span
                                                class="fas fa-chevron-right mx-1 text-500 fs-11"
                                                data-fa-transform="shrink-2"></span> Customers
                                        </div>
                                    </div>
                                </a>
                                <hr class="text-200 dark__text-900"/>
                                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Suggested
                                    Filter</h6><a class="dropdown-item px-x1 py-1 fs-9"
                                                  href="app/e-commerce/customers.html">
                                    <div class="d-flex align-items-center"><span
                                            class="badge fw-medium text-decoration-none me-2 badge-subtle-warning">customers:</span>
                                        <div class="flex-1 fs-10 title">All customers list</div>
                                    </div>
                                </a>
                                <a class="dropdown-item px-x1 py-1 fs-9" href="app/events/event-detail.html">
                                    <div class="d-flex align-items-center"><span
                                            class="badge fw-medium text-decoration-none me-2 badge-subtle-success">events:</span>
                                        <div class="flex-1 fs-10 title">Latest events in current month</div>
                                    </div>
                                </a>
                                <a class="dropdown-item px-x1 py-1 fs-9"
                                   href="app/e-commerce/product/product-grid.html">
                                    <div class="d-flex align-items-center"><span
                                            class="badge fw-medium text-decoration-none me-2 badge-subtle-info">products:</span>
                                        <div class="flex-1 fs-10 title">Most popular products</div>
                                    </div>
                                </a>
                                <hr class="text-200 dark__text-900"/>
                                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Files</h6><a
                                    class="dropdown-item px-x1 py-2" href="#!">
                                    <div class="d-flex align-items-center">
                                        <div class="file-thumbnail me-2"><img
                                                class="border h-100 w-100 object-fit-cover rounded-3"
                                                src="{{asset('assets/admin/img/products/3-thumb.png')}}" alt=""/></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 title">iPhone</h6>
                                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">Antony</span><span
                                                    class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item px-x1 py-2" href="#!">
                                    <div class="d-flex align-items-center">
                                        <div class="file-thumbnail me-2"><img class="img-fluid"
                                                                              src="{{asset('assets/admin/img/icons/zip.png')}}"
                                                                              alt=""/></div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                                            <p class="fs-11 mb-0 d-flex"><span class="fw-semi-bold">John</span><span
                                                    class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                                        </div>
                                    </div>
                                </a>
                                <hr class="text-200 dark__text-900"/>
                                <h6 class="dropdown-header fw-medium text-uppercase px-x1 fs-11 pt-0 pb-2">Members</h6>
                                <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-l status-online me-2">
                                            <img class="rounded-circle" src="{{asset('assets/admin/img/team/1.jpg')}}"
                                                 alt=""/>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 title">Anna Karinina</h6>
                                            <p class="fs-11 mb-0 d-flex">Technext Limited</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-l me-2">
                                            <img class="rounded-circle" src="{{asset('assets/admin/img/team/2.jpg')}}"
                                                 alt=""/>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 title">Antony Hopkins</h6>
                                            <p class="fs-11 mb-0 d-flex">Brain Trust</p>
                                        </div>
                                    </div>
                                </a>
                                <a class="dropdown-item px-x1 py-2" href="pages/user/profile.html">
                                    <div class="d-flex align-items-center">
                                        <div class="avatar avatar-l me-2">
                                            <img class="rounded-circle" src="{{asset('assets/admin/img/team/3.jpg')}}"
                                                 alt=""/>
                                        </div>
                                        <div class="flex-1">
                                            <h6 class="mb-0 title">Emma Watson</h6>
                                            <p class="fs-11 mb-0 d-flex">Google</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="text-center mt-n3">
                                <p class="fallback fw-bold fs-8 d-none">No Result Found.</p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
                <li class="nav-item ps-2 pe-0">
                    <div class="dropdown theme-control-dropdown"><a
                            class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0"
                            href="#" role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><span class="fas fa-sun fs-7"
                                                                             data-fa-transform="shrink-2"
                                                                             data-theme-dropdown-toggle-icon="light"></span><span
                                class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                                data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                                                                                    data-fa-transform="shrink-2"
                                                                                    data-theme-dropdown-toggle-icon="auto"></span></a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                             aria-labelledby="themeSwitchDropdown">
                            <div class="bg-white dark__bg-1000 rounded-2 py-2">
                                <button class="dropdown-item d-flex align-items-center gap-2" type="button"
                                        value="light" data-theme-control="theme"><span
                                        class="fas fa-sun"></span>Light<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark"
                                        data-theme-control="theme"><span class="fas fa-moon"
                                                                         data-fa-transform=""></span>Dark<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                                <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto"
                                        data-theme-control="theme"><span class="fas fa-adjust"
                                                                         data-fa-transform=""></span>Auto<span
                                        class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <hr class="my-2 d-none d-lg-block"/>
        <div class="collapse navbar-collapse scrollbar py-lg-2" id="navbarDoubleTop">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                @foreach($menus as $menu)

                    <li class="nav-item dropdown">
                        <a class="nav-link @if(is_array($menu['subMenu'])) dropdown-toggle @endif @if(isOpen2($menu['slug'])) text-white @endif" href="#"
                           role="button"
                           data-bs-toggle="dropdown" aria-haspopup="true"
                           aria-expanded="{{isOpen2($menu['slug']) ? 'true' : 'false'}}"
                           id="{{$menu['slug']}}">{{$menu['title']}}</a>
                        @if(is_array($menu['subMenu']))
                            <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                                 aria-labelledby="{{$menu['slug']}}">
                                <div class="bg-white dark__bg-1000 rounded-3 py-2">
                                    @foreach($menu['subMenu'] as $subMenu)
                                        <a class="dropdown-item link-600 fw-medium"
                                           href="{{$subMenu['href']}}">{{$subMenu['title']}}</a>
                                    @endforeach

                                </div>
                            </div>
                        @endif
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                    data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                                                             src="{{asset('assets/admin/img/icons/spot-illustrations/falcon.png')}}"
                                                             alt="" width="40"/><span
                    class="font-sans-serif text-primary">falcon</span></div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                @foreach($menus as $menu)
                    <li class="nav-item"><!-- parent pages-->
                        <a class="nav-link @if(is_array($menu['subMenu'])) dropdown-indicator @endif {{$menu['class']}} @if(isOpen2($menu['slug'])) text-white @endif"
                           href="#{{$menu['slug']}}"
                           role="button" data-bs-toggle="collapse" aria-expanded="{{isOpen2($menu['slug']) ? 'true' : 'false'}}"
                           aria-controls="{{$menu['slug']}}">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    @class($menu['icon'])></span></span><span
                                    class="nav-link-text ps-1">{{$menu['title']}}</span></div>
                        </a>
                        @if(is_array($menu['subMenu']))
                            <ul class="nav collapse {{isOpen2($menu['slug']) ? 'show' : ''}}" id="{{$menu['slug']}}">
                                @foreach($menu['subMenu'] as $subMenu)
                                    <li class="nav-item "><a class="nav-link {{$subMenu['class']}} {{isOpen($subMenu['slug']) ? 'text-white' : ''}}"
                                                             href="{{$subMenu['href']}}">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">{{$subMenu['title']}}</span>
                                            </div>
                                        </a><!-- more inner pages--></li>
                                @endforeach


                            </ul>
                        @endif
                    </li>
                @endforeach
            </ul>

        </div>
    </div>
</nav>
<nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;">
    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard"
            aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span
                class="toggle-line"></span></span></button>
    <a class="navbar-brand me-1 me-sm-3" href="index.html">
        <div class="d-flex align-items-center"><img class="me-2"
                                                    src="{{asset('assets/admin/img/icons/spot-illustrations/falcon.png')}}"
                                                    alt="" width="40"/><span
                class="font-sans-serif text-primary">falcon</span></div>
    </a>
    <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
        <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
            @foreach($menus as $menu)

                <li class="nav-item dropdown">
                    <a class="nav-link @if(is_array($menu['subMenu'])) dropdown-toggle @endif @if(isOpen2($menu['slug'])) text-white @endif"
                       href="#{{$menu['slug']}}" role="button"
                       data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="{{isOpen2($menu['slug']) ? 'true' : 'false'}}"
                       id="{{$menu['slug']}}">{{$menu['title']}}</a>
                    <div class="dropdown-menu dropdown-caret dropdown-menu-card border-0 mt-0"
                         aria-labelledby="{{$menu['slug']}}">
                        <div class="bg-white dark__bg-1000 rounded-3 py-2">
                            @if(is_array($menu['subMenu']))
                                @foreach($menu['subMenu'] as $subMenu)
                                    <a class="dropdown-item link-600 fw-medium"
                                       href="{{$subMenu['href']}}">{{$subMenu['title']}}</a>
                                @endforeach

                            @endif


                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
    <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
        <li class="nav-item ps-2 pe-0">
            <div class="dropdown theme-control-dropdown"><a
                    class="nav-link d-flex align-items-center dropdown-toggle fa-icon-wait fs-9 pe-1 py-0" href="#"
                    role="button" id="themeSwitchDropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false"><span class="fas fa-sun fs-7" data-fa-transform="shrink-2"
                                                data-theme-dropdown-toggle-icon="light"></span><span
                        class="fas fa-moon fs-7" data-fa-transform="shrink-3"
                        data-theme-dropdown-toggle-icon="dark"></span><span class="fas fa-adjust fs-7"
                                                                            data-fa-transform="shrink-2"
                                                                            data-theme-dropdown-toggle-icon="auto"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-caret border py-0 mt-3"
                     aria-labelledby="themeSwitchDropdown">
                    <div class="bg-white dark__bg-1000 rounded-2 py-2">
                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="light"
                                data-theme-control="theme"><span class="fas fa-sun"></span>Light<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="dark"
                                data-theme-control="theme"><span class="fas fa-moon"
                                                                 data-fa-transform=""></span>Dark<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                        <button class="dropdown-item d-flex align-items-center gap-2" type="button" value="auto"
                                data-theme-control="theme"><span class="fas fa-adjust"
                                                                 data-fa-transform=""></span>Auto<span
                                class="fas fa-check dropdown-check-icon ms-auto text-600"></span></button>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item d-none d-sm-block">
            <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill fa-icon-wait"
               href="app/e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7"
                                                              style="font-size: 33px;"></span><span
                    class="notification-indicator-number">1</span></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link notification-indicator notification-indicator-primary px-0 fa-icon-wait"
               id="navbarDropdownNotification" role="button" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false" data-hide-on-body-scroll="data-hide-on-body-scroll"><span class="fas fa-bell"
                                                                                               data-fa-transform="shrink-6"
                                                                                               style="font-size: 33px;"></span></a>
            <div
                class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-menu-notification dropdown-caret-bg"
                aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                    <div class="card-header">
                        <div class="row justify-content-between align-items-center">
                            <div class="col-auto">
                                <h6 class="card-header-title mb-0">Notifications</h6>
                            </div>
                            <div class="col-auto ps-0 ps-sm-3"><a class="card-link fw-normal" href="#">Mark all as
                                    read</a></div>
                        </div>
                    </div>
                    <div class="scrollbar-overlay" style="max-height:19rem">
                        <div class="list-group list-group-flush fw-normal fs-10">
                            <div class="list-group-title border-bottom">NEW</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle"
                                                 src="{{asset('assets/admin/img/team/1-thumb.png')}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello
                                            world ðŸ˜"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                                              aria-label="Emoji">ðŸ’¬</span>Just now</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="notification notification-flush notification-unread" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia
                                                Khalifa's</strong> status</p>
                                        <span class="notification-time"><span
                                                class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-title border-bottom">EARLIER</div>
                            <div class="list-group-item">
                                <a class="notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-2xl me-3">
                                            <img class="rounded-circle"
                                                 src="{{asset('assets/admin/img/icons/weather-sm.jpg')}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See
                                            today's weather.</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                                              aria-label="Emoji">ðŸŒ¤ï¸</span>1d</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification-unread  notification notification-flush"
                                   href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle"
                                                 src="{{asset('assets/admin/img/logos/oxford.png')}}" alt=""/>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>University of Oxford</strong> created an event : "Causal
                                            Inference Hilary 2019"</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                                              aria-label="Emoji">âœŒï¸</span>1w</span>
                                    </div>
                                </a>
                            </div>
                            <div class="list-group-item">
                                <a class="border-bottom-0 notification notification-flush" href="#!">
                                    <div class="notification-avatar">
                                        <div class="avatar avatar-xl me-3">
                                            <img class="rounded-circle" src="{{asset('assets/admin/img/team/10.jpg')}}"
                                                 alt=""/>
                                        </div>
                                    </div>
                                    <div class="notification-body">
                                        <p class="mb-1"><strong>James Cameron</strong> invited to join the group: United
                                            Nations International Children's Fund</p>
                                        <span class="notification-time"><span class="me-2" role="img"
                                                                              aria-label="Emoji">ðŸ™‹â€</span>2d</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block"
                                                                       href="app/social/notifications.html">View all</a>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown px-1">
            <a class="nav-link fa-icon-wait nine-dots p-1" id="navbarDropdownMenu" role="button"
               data-hide-on-body-scroll="data-hide-on-body-scroll" data-bs-toggle="dropdown" aria-haspopup="true"
               aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="43" viewBox="0 0 16 16" fill="none">
                    <circle cx="2" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="2" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="8" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="14" r="2" fill="#6C6E71"></circle>
                    <circle cx="8" cy="2" r="2" fill="#6C6E71"></circle>
                    <circle cx="14" cy="2" r="2" fill="#6C6E71"></circle>
                </svg>
            </a>
            <div
                class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end dropdown-menu-card dropdown-caret-bg"
                aria-labelledby="navbarDropdownMenu">
                <div class="card shadow-none">
                    <div class="scrollbar-overlay nine-dots-dropdown">
                        <div class="card-body px-3">
                            <div class="row text-center gx-0 gy-0">
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="pages/user/profile.html" target="_blank">
                                        <div class="avatar avatar-2xl"><img class="rounded-circle"
                                                                            src="{{asset('assets/admin/img/team/3.jpg')}}"
                                                                            alt=""/></div>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Account</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="https://themewagon.com/" target="_blank"><img class="rounded"
                                                                                            src="{{asset('assets/admin/img/nav-icons/themewagon.png')}}"
                                                                                            alt="" width="40"
                                                                                            height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Themewagon</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="https://mailbluster.com/" target="_blank"><img class="rounded"
                                                                                             src="{{asset('assets/admin/img/nav-icons/mailbluster.png')}}"
                                                                                             alt="" width="40"
                                                                                             height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Mailbluster</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/google.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Google</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/spotify.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Spotify</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/steam.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Steam</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/github-light.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Github</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/discord.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Discord</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/xbox.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">xbox</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/trello.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Kanban</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/hp.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Hp</p>
                                    </a></div>
                                <div class="col-12">
                                    <hr class="my-3 mx-n3 bg-200"/>
                                </div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/linkedin.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Linkedin</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/twitter.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Twitter</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/facebook.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Facebook</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/instagram.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Instagram</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/pinterest.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Pinterest</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/slack.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Slack</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="#!" target="_blank"><img class="rounded"
                                                                       src="{{asset('assets/admin/img/nav-icons/deviantart.png')}}"
                                                                       alt="" width="40" height="40"/>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11 pt-1">Deviantart</p>
                                    </a></div>
                                <div class="col-4"><a
                                        class="d-block hover-bg-200 px-2 py-3 rounded-3 text-center text-decoration-none"
                                        href="app/events/event-detail.html" target="_blank">
                                        <div class="avatar avatar-2xl">
                                            <div class="avatar-name rounded-circle bg-primary-subtle text-primary"><span
                                                    class="fs-7">E</span></div>
                                        </div>
                                        <p class="mb-0 fw-medium text-800 text-truncate fs-11">Events</p>
                                    </a></div>
                                <div class="col-12"><a class="btn btn-outline-primary btn-sm mt-4" href="#!">Show
                                        more</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown"><a class="nav-link pe-0 ps-2" id="navbarDropdownUser" role="button"
                                         data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="{{asset('assets/admin/img/team/3-thumb.png')}}" alt=""/>
                </div>
            </a>
            <div class="dropdown-menu dropdown-caret dropdown-caret dropdown-menu-end py-0"
                 aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span
                            class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/user/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/user/settings.html">Settings</a>
                    <a class="dropdown-item" href="pages/authentication/card/logout.html">Logout</a>
                </div>
            </div>
        </li>
    </ul>
</nav>

@include('livewire.admin.layouts.topMenu')
