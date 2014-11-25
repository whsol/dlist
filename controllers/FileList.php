<?php namespace WhSol\DList\Controllers;

use Lang;
use BackendMenu;
use Backend\Classes\Controller;
use System\Classes\ApplicationException;

class FileList extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('WhSol.DList', 'dlist', 'filelist');
    }

}