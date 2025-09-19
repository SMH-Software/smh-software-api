<?php

namespace App\Models;

use App\HasUuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Account extends Model
{
    use HasUuid;

    protected $fillable = [
        'title', 'username', 'password', 'website', 'user_token'
    ];
    
    /*  // Indiquer que la clé primaire est un UUID et non un auto-incrément
    protected $keyType = 'string';
    public $incrementing = false;

    protected static function booted()
    {
        static::creating(function ($model) {
            if (empty($model->{$model->getKeyName()})) {
                $model->{$model->getKeyName()} = (string) Str::uuid();
            }
        });
    } */
}
