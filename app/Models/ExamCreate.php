<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamCreate extends Model
{
    use HasFactory;

    private static $examCreate;

    public static function addExam($request)
    {
        self::$examCreate = new ExamCreate();
        self::$examCreate->name = $request->exam_create;
        self::$examCreate->save();
    }
}
 