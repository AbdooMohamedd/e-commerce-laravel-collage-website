<?php

// app/Models/UserDetail.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    protected $fillable = ['user_id', 'full_name', 'e_mail', 'address', 'gender', 'phone_number', 'birthdate'];

}
   