<?php namespace WhSol\DList;

use System\Classes\PluginBase;
use Backend;
use Lang;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name' => Lang::get('whsol.dlist::lang.plugin.name'),
            'description' => Lang::get('whsol.dlist::lang.plugin.description'),
            'author' => 'WhSol',
            'icon' => 'icon-database'
        ];
    }

    public function registerComponents()
    {
        return [
            'WhSol\DList\Components\DownloadList' => 'downloadList',
        ];
    }

    public function registerNavigation()
    {
        return [
            'dlist' => [
                'label'       => Lang::get('whsol.dlist::lang.plugin.nav.label'),
                'url'         => Backend::url('whsol/dlist/filelist'),
                'icon'        => 'icon-database',
                'permissions' => ['user:*'],
                'order'       => 500,
                'sideMenu'    => [
                    'filelist'  => [
                        'label'       => Lang::get('whsol.dlist::lang.plugin.nav.files'),
                        'url'         => Backend::url('whsol/dlist/filelist'),
                        'icon'        => 'icon-database',
                        'permissions' => ['user:*'],
                    ],
                    'categories'  => [
                        'label'       => Lang::get('whsol.dlist::lang.plugin.nav.categories'),
                        'url'         => Backend::url('whsol/dlist/categories'),
                        'icon'        => 'icon-list-ul',
                        'permissions' => ['user:*'],
                    ],
                ]
            ]
        ];
    }

}