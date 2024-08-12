<?php

namespace App\Models;
use App\Models\Employer;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => strtolower($name)]);

        $this->tags()->attach($tag);
    }
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}