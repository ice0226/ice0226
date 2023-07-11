<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

public function up()
{
    Schema::create('categories', function (Blueprint $table) {
        $table->id();
        $table->string('name', 50);
        $table->timestamps();
    });
}
public function category()
{
    return $this->belongsTo(Category::class);
}
