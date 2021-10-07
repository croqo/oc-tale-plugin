<?php namespace Croqo\Tale\Components;

use Cms\Classes\ComponentBase;

/**
 * TaleDependencies Component
 */
class TaleDependencies extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'TaleDependencies Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }
    /**
     * @return void
     */
    public function onRun()
    {
        $this->addJs("assets/tale.js", [
            "build" => "Croqo.Tale",
            "defer" => true
        ]);
    }
}
