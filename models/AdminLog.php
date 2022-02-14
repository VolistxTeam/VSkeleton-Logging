<?php

use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    protected $table = 'admin_logs';

    const UPDATED_AT = null;

    public $timestamps = true;

    protected $fillable = [
        'access_token_id',
        'url',
        'method',
        'ip',
        'user_agent',
    ];

    protected $casts = [
    ];
}
