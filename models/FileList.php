<?php namespace WhSol\DList\Models;

use Model;

class FileList extends Model
{

    public $table = 'whsol_download_list';

    protected $guarded = [];

    public $attachMany = [
        'download_files' => ['System\Models\File']
    ];

    public function scopeIsPublished($query)
    {
        return $query
            ->whereNotNull('published')
            ->where('published', '=', 1)
            ;
    }

}