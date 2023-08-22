<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{


	public function sender()
	{
		return $this->belongsTo(User::class, 'sender_id');
	}

	public function admin()
	{
		return $this->belongsTo(Admin::class, 'admin_id');
	}
}