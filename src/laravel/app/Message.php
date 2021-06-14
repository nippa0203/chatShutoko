<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //データ追加の際にエラーが発生するので、Messageモデルに$guardedを追加
    protected $guarded = ['id'];
}
