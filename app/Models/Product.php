<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

class Product extends Model
{
    
	public $table = "products";
    

	public $fillable = [
	    "name",
		"description",
		"price",
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
		"thumbnail_id" => "integer"
    ];

	public static $rules = [
	    // "name" => "required"
	];

    public function recipes(){
        return $this->belongsToMany('App\Models\Recipe');
    }
}
