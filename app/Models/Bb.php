<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;

class Bb extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'content', 'price'];

    //Обратная» связь также объявляется с помощью метода (у нас - user () ).
    //
    //Метод
    //belongsTo () класса модели принимает имя класса связываемой первичной модели
    // и возвращает объект созданной связи, который следует вернуть из метода,
    //объявляющего связь.
    public function user(){
        return $this->belongsTo(User::class);

    }
}
