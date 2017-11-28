<?php

use Spatie\Menu\Laravel\Menu;
use Spatie\Menu\Laravel\Html;
use Spatie\Menu\Laravel\Link;

//Menu::macro('fullsubmenuexample', function () {
//    return Menu::new()->prepend('<a href="#"><span> Multilevel PROVA </span> <i class="fa fa-angle-left pull-right"></i></a>')
//        ->addParentClass('treeview')
//        ->add(Link::to('/link1prova', 'Link1 prova'))->addClass('treeview-menu')
//        ->add(Link::to('/link2prova', 'Link2 prova'))->addClass('treeview-menu')
//        ->url('http://www.google.com', 'Google');
//});

Menu::macro('adminlteSubmenu', function ($submenuName) {
    return Menu::new()->prepend('<a href="#"><span> ' . $submenuName . '</span> <i class="fa fa-angle-left pull-right"></i></a>')
        ->addParentClass('treeview')->addClass('treeview-menu');
});
Menu::macro('adminlteMenu', function () {
    return Menu::new()
        ->addClass('sidebar-menu');
});
Menu::macro('adminlteSeparator', function ($title) {
    return Html::raw($title)->addParentClass('header');
});

Menu::macro('adminlteDefaultMenu', function ($content) {
    return Html::raw('<i class="fa fa-link"></i><span>' . $content . '</span>')->html();
});

Menu::macro('sidebar', function () {
    return Menu::adminlteMenu()
//        ->action('HomeController@index', '<i class="fa fa-home"></i><span>Home</span>')
        ->add(Link::to('/home', 'Home'))
        ->add(Html::raw('Servers')->addParentClass('header'))
        ->add(Link::to('/servers', 'Your servers'))
        ->add(Html::raw('Sites')->addParentClass('header'))
        ->add(Link::to('/sites', 'Your sites'))
        ->add(Link::to('/all_sites', 'All sites'))
        ->add(Html::raw('Settings')->addParentClass('header'))
        ->add(Link::to('/passport-tokens', 'Passport Tokens'))
        ->add(Html::raw('External links')->addParentClass('header'))
        ->link('https://forge.laravel.com/servers', Menu::adminlteDefaultMenu('Laravel Forge'))
        ->link('https://github.com/acacha/forge', Menu::adminlteDefaultMenu('Acacha Forge Github'))
        ->link('https://github.com/acacha/forge-test', Menu::adminlteDefaultMenu('This website source code'))
        ->link('https://github.com/acacha/forge-publish', Menu::adminlteDefaultMenu('Client (forge-publish) Github'))
        ->link('https://github.com/acacha/forge-publish-test', Menu::adminlteDefaultMenu('Test Forge Publish Github'))
//        ->url('http://www.google.com', 'Google')
//        ->add(Menu::adminlteSeparator('Acacha Adminlte'))
//        #adminlte_menu
//        ->add(Menu::adminlteSeparator('SECONDARY MENU'))
//        ->add(Menu::new()->prepend('<a href="#"><i class="fa fa-share"></i><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>')
//            ->addParentClass('treeview')
//            ->add(Link::to('/link1', 'Link1'))->addClass('treeview-menu')
//            ->add(Link::to('/link2', 'Link2'))
//            ->url('http://www.google.com', 'Google')
//            ->add(Menu::new()->prepend('<a href="#"><span>Multilevel 2</span> <i class="fa fa-angle-left pull-right"></i></a>')
//                ->addParentClass('treeview')
//                ->add(Link::to('/link21', 'Link21'))->addClass('treeview-menu')
//                ->add(Link::to('/link22', 'Link22'))
//                ->url('http://www.google.com', 'Google')
//            )
//        )
//        ->add(
//            Menu::fullsubmenuexample()
//        )
//        ->add(
//            Menu::adminlteSubmenu('Best menu')
//                ->add(Link::to('/acacha', 'acacha'))
//                ->add(Link::to('/profile', 'Profile'))
//                ->url('http://www.google.com', 'Google')
//        )
        ->setActiveFromRequest();
});
