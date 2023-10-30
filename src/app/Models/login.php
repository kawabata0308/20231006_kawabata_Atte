<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    use HasFactory;

    protected $fillable=['id','email','password'];// カラム名の入力

    protected $table = 'login';

    protected $primaryKey = 'id';
    //主きーが必要なので登録（後で消す文） 
}
