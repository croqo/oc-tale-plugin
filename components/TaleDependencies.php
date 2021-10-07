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
            "name" => "croqo.tale::lang.components.main.name",
            "description" => "croqo.tale::lang.components.main.description"
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
        $this->addJs("assets/main.js", [
            "build" => "Croqo.Tale",
            "defer" => true
        ]);
    }
}
