<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class PuppyPage extends Model
{
    use HasFactory;


    public function explodeImages() {
      $this->images_small = explode(";", $this->images_small);
      $this->images_big = explode(";", $this->images_big);
    }


}
