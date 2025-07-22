<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    //

    protected $table = 'task';

    protected $fillable = [
        'title',
        'description',
        'id_status',
        'id_user',
    ];


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
    public function status(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne('App\Models\StatusTaskModel', 'id', 'id_status');
    }
}
