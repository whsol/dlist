<?php namespace WhSol\DList\Models;

use Str;
use Model;
use RainLab\Blog\Models\Post;

class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $table = 'whsol_download_list_categories';

    /*
     * Validation
     */
    public $rules = [
        'name' => 'required'
    ];

    protected $guarded = [];

//    public function posts()
//    {
//        // @todo: declare this relationship as the class field when the conditions option is implemented
//        return $this->belongsToMany('RainLab\Blog\Models\Post', 'rainlab_blog_posts_categories')->isPublished()->orderBy('published_at', 'desc');
//    }

}