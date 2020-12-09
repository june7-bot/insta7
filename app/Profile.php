<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{   
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
  
    public function profileImage(){
        $imagePath = ($this->image) ? $this->image : 'profile/No-image-available.png';

        return '/storage/' . $imagePath;
    }
}
