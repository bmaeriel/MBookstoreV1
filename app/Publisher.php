<?php
# @Author: maerielbenedicto
# @Date:   2019-11-17T17:10:32+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-17T17:12:08+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    public function books() {
      return $this->hasMany('App\Book');
    }
}
