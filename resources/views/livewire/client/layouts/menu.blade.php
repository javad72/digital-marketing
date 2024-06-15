<?php
$menus = [
    [
        "title" => 'صفحه نخست',
        "href" => '/',
        "subMenus" => []
    ],
    [
        "title" => 'خدمات سایت',
        "href" => 'dfdfsf',
        "subMenus" => [
            [
                "title" => 'طراحی سایت ارزان',
                "href" => '/fdfdd',
                "subMenus" => []
            ],
            [
                "title" => 'طراحی سایت اختصاصی',
                "href" => 'sdfdfsd',
                "subMenus" => []
            ],
            [
                "title" => 'طراحی نرم افزار تحت وب و موبایل',
                "href" => 'dsfsdfs',
                "subMenus" => []
            ],
            [
                "title" => 'سئو و تولید محتوا',
                "href" => 'sdfsdsd',
                "subMenus" => []
            ],
            [
                "title" => 'طراحی قالب و افزونه وردپرس اختصاصی',
                "href" => 'sdfdsfsdf',
                "subMenus" => []
            ],
        ]
    ],
    [
        "title" => 'ادمین اینستاگرام',
        "href" => '',
        "subMenus" => [
            [
                "title" => 'مدیریت کامل پیج',
                "href" => '',
                "subMenus" => []
            ],
            [
                "title" => 'طراحی محصول',
                "href" => '',
                "subMenus" => []
            ],
            [
                "title" => 'کامنت مارکتینگ',
                "href" => '',
                "subMenus" => []
            ],
            [
                "title" => 'فروش و کمپین',
                "href" => '',
                "subMenus" => []
            ],
            [
                "title" => 'آنالیز پیج و مشاوره',
                "href" => '',
                "subMenus" => []
            ],
        ]
    ],
    [
        "title" => 'گرافیک و تدوین',
        "href" => '',
        "subMenus" => [
            [
                "title" => 'ادیت ویدئو',
                "href" => '',
                "subMenus" => []
            ],
            [
                "title" => 'طراحی لوگو',
                "href" => '',
                "subMenus" => []
            ],
        ]
    ],
    [
        "title" => 'همکاری',
        "href" => '',
        "subMenus" => []
    ],
    [
        "title" => 'تماس با ما',
        "href" => '',
        "subMenus" => []
    ],
];
?>

<ul class="mainmenu">
    @foreach($menus as $menu)
        <li class="{{ sizeof($menu['subMenus']) > 0 ? 'menu-item-has-children' : '' }}">
            <a href="{{ sizeof($menu['subMenus'])==0 ? $menu['href'] : 'javascript:void(0);' }} ">{{$menu['title']}}</a>
            @if(sizeof($menu['subMenus']) > 0)
                <ul class="axil-submenu">
                    @foreach($menu['subMenus'] as $subMenu)
                        <li>
                            <a href="{{$subMenu['href']}}">{{$subMenu['title']}}</a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>
