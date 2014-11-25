<?php namespace WhSol\Dlist\Components;

use Lang;
use Cms\Classes\ComponentBase;
use WhSol\Dlist\Models\FileList;

class DownloadList extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => Lang::get('whsol.dlist::lang.component.name'),
            'description' => Lang::get('whsol.dlist::lang.component.description')
        ];
    }

    public function onRun()
    {
        $this->page['dlist'] = FileList::all();
    }

}