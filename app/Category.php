<?php

namespace App;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use Uuids, SoftDeletes;

    public $incrementing = false;
    public $timestamps = true;

    protected $dates = ['deleted_at'];
    protected $hidden = ['created_at', 'updated_at', 'deleted_at', 'created_by', 'updated_by'];

    protected $fillable = ['name', 'slug', 'description'];

}
