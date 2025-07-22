<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StatusTaskModel extends Model
{
    //
    protected $fillable = [
        "completed",
    ];






    public function Task(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\StatusTaskModel', 'id', 'id_status');
    }
}
