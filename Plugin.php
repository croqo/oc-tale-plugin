<?php namespace Croqo\Tale;

use Backend;
use System\Classes\PluginBase;

/**
 * Tale Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'Tale',
            'description' => 'No description provided yet...',
            'author'      => 'Croqo',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return []; // Remove this line to activate

        return [
            'Croqo\Tale\Components\MyComponent' => 'myComponent',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'croqo.tale.some_permission' => [
                'tab' => 'Tale',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'tale' => [
                'label'       => 'Tale',
                'url'         => Backend::url('croqo/tale/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['croqo.tale.*'],
                'order'       => 500,
            ],
        ];
    }
}
