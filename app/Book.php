<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T16:37:59+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-17T23:49:32+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function publishers() {
      return $this->belongsTo('App\Publisher','publisher_id');
    }
}
