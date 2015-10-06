<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Recipe extends Model
{
    
	public $table = "recipes";
    

	public $fillable = [
	    "name",
		"description",
		"method",
		"thumbnail_id"
	];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        "name" => "string",
		"description" => "string",
		"method" => "string",
		"thumbnail_id" => "integer"
    ];

	public static $rules = [
	    "name" => "required"
	];

}
