<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeClock extends Model
{
    use HasFactory;

    protected $fillable=['id','start_date_time','end_date_time','start_break_time','end_break_time',];// カラム名の入力
    

    protected $table ='attendance';

    protected $primaryKey = 'id';
     //主きーが必要なので登録（後で消す文） 
}
