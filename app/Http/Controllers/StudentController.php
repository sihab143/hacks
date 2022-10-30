<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AcademicYear;
use App\Models\ClassName;
use App\Models\Section;
use App\Models\ExamCreate;
use App\Models\Group;
use App\Models\Course;

class StudentController extends Controller
{
    private $academicYear;
    private $className;
    private $section;
    private $examType;
    private $group;
    private $course;
    private $students;

    public function index()
    {
        $this->acdemicYear = AcademicYear::orderBy('academic_year', 'asc')->get();
        $this->className = ClassName::orderBy('name', 'asc')->get();
        $this->examType = ExamCreate::orderBy('name', 'asc')->get();
        $this->group = Group::orderBy('class_group', 'asc')->get();

        return view('home.markEntry',['acdemicYear' => $this->acdemicYear, 'className' => $this->className, 'examType' => $this->examType, 'groups' => $this->group]);
    }

    public function fetchSection(Request $request)
    {
        $this->section = Section::where('class_id', $request->class_id)->get(['section_name','id']);
        return response()->json($this->section);
    }

    public function fetchCourse(Request $request)
    {
        $this->course = Course::where('group_id', $request->group_id)->get(['course_name','id']);
        return response()->json($this->course);
    }

    public function marksEntry()
    {
        // $this->students = ;
    }
}
