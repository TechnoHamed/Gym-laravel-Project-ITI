<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrainingPackage extends Model
{
    use HasFactory, SoftDeletes;
    #=======================================================================================#
    #			                    To allow insert in table                              	#
    #=======================================================================================#
    protected $fillable = [
        'name',
        'price',
        'sessions_number',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
