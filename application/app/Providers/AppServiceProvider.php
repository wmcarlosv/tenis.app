<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {
        Schema::defaultStringLength(191);

        $events->Listen(BuildingMenu::class, function(BuildingMenu $event){
                
                $event->menu->add('MENU DE NAVEGACION');

                switch (Auth::user()->role) {

                    
                    case 'player':

                        $event->menu->add(
                        [
                            'text' => 'Sitio',
                            'url' => '/site',
                            'icon' => 'home'
                        ],[
                            'text' => 'dashboard',
                            'url' => 'home',
                            'icon' => 'dashboard'
                        ],[
                            'text' => 'Pagos',
                            'url'  => 'admin/payments/my_payments/'.Auth::user()->id,
                            'icon' => 'money',
                        ],[
                            'text' => 'Perfil',
                            'url'  => 'admin/users/user_profile/'.Auth::user()->id,
                            'icon' => 'user',
                        ]);

                    break;


                    case 'administrator':

                        $event->menu->add(
                        [
                            'text' => 'Sitio',
                            'url' => '/site',
                            'icon' => 'home'
                        ],
                        [
                            'text'        => 'Dashboard',
                            'url'         => 'home',
                            'icon'        => 'dashboard',
                        ],
                        [
                            'text' => 'Configuración',
                            'icon' => 'cog',
                            'submenu' => [
                                [
                                    'text' => 'Regiones',
                                    'url'  => 'admin/regions',
                                    'icon' => 'globe',
                                ],
                                [
                                    'text' => 'Ciudades',
                                    'url'  => 'admin/cities',
                                    'icon' => 'map-marker',
                                ],
                                [
                                    'text' => 'Tags',
                                    'url'  => 'admin/tags',
                                    'icon' => 'tags',
                                ],
                                [
                                    'text' => 'Metodos de Pago',
                                    'url'  => 'admin/payment_methods',
                                    'icon' => 'credit-card',
                                ],
                                [
                                    'text' => 'Categorias de Jugador',
                                    'url'  => 'admin/player_categories',
                                    'icon' => 'list-ol',
                                ],
                                [
                                    'text' => 'Categoria de Noticias',
                                    'url'  => 'admin/notice_categories',
                                    'icon' => 'list-ul',
                                ],
                                [
                                    'text' => 'Servicios de Club',
                                    'url'  => 'admin/services',
                                    'icon' => 'list-ul',
                                ],
                                [
                                    'text' => 'Personal del Club',
                                    'url'  => 'admin/staffs',
                                    'icon' => 'users',
                                ],
                            ]
                        ],
                        [
                            'text' => 'Clubes',
                            'url'  => 'admin/clubes',
                            'icon' => 'users',
                        ],
                        [
                            'text' => 'Productos',
                            'url'  => 'admin/products',
                            'icon' => 'archive',
                        ],
                        [
                            'text' => 'Noticias',
                            'url'  => 'admin/notices',
                            'icon' => 'newspaper-o',
                        ],
                        'MENU DE CAMPENATOS',
                        [
                            'text' => 'Campeonatos',
                            'url'  => 'admin/championships',
                            'icon' => 'trophy',
                        ],
                        [
                            'text' => 'Juegos',
                            'url'  => 'admin/games',
                            'icon' => 'play-circle',
                        ],
                        [
                            'text' => 'Galeria',
                            'url'  => 'admin/galleries',
                            'icon' => 'photo',
                        ],
                        'LISTADOS',
                        [
                            'text' => 'Pagos',
                            'url'  => 'admin/payments',
                            'icon' => 'money',
                        ],
                        [
                            'text' => 'Calificaciones',
                            'url'  => 'admin/qualifications',
                            'icon' => 'star',
                        ],
                        'SEGURIDAD',
                        [
                            'text' => 'Usuarios',
                            'url'  => 'admin/users',
                            'icon' => 'user',
                        ],
                        [
                            'text' => 'Configuracion de sitio',
                            'url'  => 'admin/sites/edit',
                            'icon' => 'home',
                        ],[
                            'text' => 'Perfil',
                            'url'  => 'admin/users/user_profile/'.Auth::user()->id,
                            'icon' => 'user',
                        ]);

                    break;


                    case 'club_manager':

                        $event->menu->add(
                        [
                            'text' => 'Sitio',
                            'url' => '/site',
                            'icon' => 'home'
                        ],
                        [
                            'text' => 'dashboard',
                            'url' => 'home',
                            'icon' => 'dashboard'
                        ],
                        [
                            'text' => 'Club',
                            'url'  => 'admin/clubes/'.Auth::user()->club_id."/edit",
                            'icon' => 'users',
                        ],
                        [
                            'text' => 'Personal del Club',
                            'url'  => 'admin/staffs',
                            'icon' => 'users',
                        ],
                        [
                            'text' => 'Noticias',
                            'url'  => 'admin/notices',
                            'icon' => 'newspaper-o',
                        ],
                        [
                            'text' => 'Galeria',
                            'url'  => 'admin/galleries',
                            'icon' => 'photo',
                        ],[
                            'text' => 'Perfil',
                            'url'  => 'admin/users/user_profile/'.Auth::user()->id,
                            'icon' => 'user',
                        ]);
                        
                    break;


                }

            });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
