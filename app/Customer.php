<?php
# @Author: maerielbenedicto
# @Date:   2019-11-12T00:17:54+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-12T00:39:31+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    //
    public function user(){
      return $this->belongsTo('App\User');
    }
}
