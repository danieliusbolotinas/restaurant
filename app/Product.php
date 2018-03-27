<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

   protected $fillable =  ['id', 'name', 'description', 'nettprice',  'imageurl', 'category_id'];

   public function category()
	{
		return $this->belongsTo('App\Category');
	}


   public function getPrice()
   {
       return $this->nettprice * 1.21;
   }



}
