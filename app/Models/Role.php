<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const ROLE_ADMIN = 'admin';
    const ROLE_EDITOR = 'editor';
    const ROLE_CLIENT = 'client';
    const RECEIVES_CONTACT_EMAIL_NOTIFICATIONS = 'receives_contact_email_notifications'; // sends emails to such users when a new contact is created

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
}
