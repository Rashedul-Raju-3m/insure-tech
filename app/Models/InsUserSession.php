<?php

namespace App\Models;

use App\Traits\MultiTenant;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class InsUserSession extends Model {

    protected $table = 'ins_user_session';

    protected $fillable = [
        'mobile', 'otp', 'code', 'ins_slug'
    ];

}
