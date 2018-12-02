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
                            'url'  => 'admin/users/profile',
                            'icon' => 'user',
                        ]);
                    break;
                    case 'administrador':
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
                            'text' => 'Ubicación',
                            'icon' => 'map',
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
                            ]
                        ],
                        [
                            'text' => 'Configuración',
                            'icon' => 'cog',
                            'submenu' => [
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
