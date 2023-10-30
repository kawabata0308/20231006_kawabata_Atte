<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisteredUser extends Model
{
    use HasFactory;

    protected $fillable=['id','account_name','account_email','account_password','account_password-confirmation'];// カラム名の入力

    protected $table = 'register';

    protected $primaryKey = 'id';
     //主きーが必要なので登録（後で消す文） 
}
