<?php

use ESolution\DBEncryption\Traits\EncryptedAttribute;
use Illuminate\Database\Eloquent\Model;

class AdminLog extends Model
{
    use EncryptedAttribute;

    protected $table = 'admin_logs';

    const UPDATED_AT = null;

    public $timestamps = true;

    protected $encryptable = [
        'url', 'method', 'ip'
    ];

    protected $fillable = [
        'logging_access_token_id',
        'access_token_id',
        'url',
        'method',
        'ip',
        'user_agent',
    ];

    protected $casts = [
    ];
}
