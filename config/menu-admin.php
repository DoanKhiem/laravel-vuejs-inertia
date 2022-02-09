<?php

return [
    [
        'label' => 'Trang chủ',
        'icon' => 'las la-home iq-arrow-left',
        'route' => 'admin.dashboard'
    ],
    [
        'label' => 'Sách',
        'icon' => 'ri-book-2-line',
        'items' => [
            [
                'label' => 'Danh sách sách',
                'icon' => 'fa fa-book',
                'route' => 'admin.book.index'
            ],
            [
                'label' => 'Thêm sách',
                'icon' => 'fa fa-plus-square-o',
                'route' => 'admin.book.create'
            ]
        ]
    ],
    [
        'label' => 'Thể loại',
        'icon' => 'fa fa-bookmark',
        'items' => [
            [
                'label' => 'Danh sách thể loại sách',
                'icon' => 'fa fa-bookmark-o',
                'route' => 'admin.category.index'
            ],
            [
                'label' => 'Thêm thể loại sách',
                'icon' => 'fa fa-plus-square-o',
                'route' => 'admin.category.create'
            ]
        ]
    ],
    [
        'label' => 'Kệ sách',
        'icon' => 'fa fa-align-justify',
        'items' => [
            [
                'label' => 'Danh sách kệ sách',
                'icon' => 'fa fa-list',
                'route' => 'admin.shelf.index'
            ],
            [
                'label' => 'Thêm kệ sách',
                'icon' => 'fa fa-plus-square-o',
                'route' => 'admin.shelf.create'
            ]
        ]
    ],
];
