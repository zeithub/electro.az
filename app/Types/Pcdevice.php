<?php

namespace App\Types;

use Illuminate\Database\Eloquent\Model;

class Pcdevice extends Model
{
    protected $fillable = ['comision','deposit','id','img','price','type','name','brand','category','tags','waranty','kredit','percentkredit','video','status','material','color','uncablableconnection'];
}
