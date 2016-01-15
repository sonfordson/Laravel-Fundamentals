<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model {

	protected $fillable = [

        'title',
        'body',
        'updated_at'

    ];

    public function scopePublished($query)
    {
      $query->where('published_at', '<=', Carbon::now());
    }

 public function  setPublishedAtAtrribute($date)
     {
        $this->attributes['published_at']= Carbon::parse($date);
     }

}
