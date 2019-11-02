<?php
# @Author: maerielbenedicto
# @Date:   2019-11-02T15:05:22+00:00
# @Last modified by:   maerielbenedicto
# @Last modified time: 2019-11-02T15:16:05+00:00




namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function users() {
      return $this->belongsToMany('App\User');
    }
}
