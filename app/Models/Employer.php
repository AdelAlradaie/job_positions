<?php

namespace App\Models;
use App\Models\User;
use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class);
    }
    public function jobs(){
        return $this->hasMany(Job::class);
    }
   
}
