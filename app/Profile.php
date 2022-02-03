<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );

    // 以下を追記
    // Profile Modelに関連付けを行う(Laravel17課題)
    public function profileupdates()
    {
        return $this->hasMany('App\Profileupdate');

    }
}