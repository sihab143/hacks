<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamConfig extends Model
{
    use HasFactory;

    private static $setExam;

    public static function examSet($request)
    {
        self::$setExam = new ExamConfig();
        self::$setExam->Ay_ID = $request->Ay_ID;
        self::$setExam->Exam_Name_ID = $request->Exam_Name_ID;
        self::$setExam->Class_ID	 = $request->Class_ID	;
        self::$setExam->Section_ID	 = $request->Section_ID	;
        self::$setExam->Subject_ID	 = $request->Subject_ID	;
        self::$setExam->Subjective_Status	 = $request->Subjective_Status	;
        self::$setExam->Objective_Status	 = $request->Objective_Status	;
        self::$setExam->Practical_Status	 = $request->Practical_Status	;
        self::$setExam->Subjective_Mark	 = $request->Subjective_Mark	;
        self::$setExam->Objective_Mark	 = $request->Objective_Mark	;
        self::$setExam->Practical_Mark	 = $request->Practical_Mark	;
        self::$setExam->Weighted_Mark		 = $request->Weighted_Mark		;
        self::$setExam->Status		 = $request->Status		;
        self::$setExam->save();
    }
}
