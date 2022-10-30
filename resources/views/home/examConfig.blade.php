@extends('master')

@section('body')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Exam Configure</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{route('set-exam')}}" method="post">
                            @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Academic Year</label>
                                <div class="col-md-8">
                                    <select name="Ay_ID" id="" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($acdemicYear as $academic)
                                            <option value="{{$academic->id}}">{{$academic->academic_year}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Class</label>
                                <div class="col-md-8">
                                    <select name="Class_ID" id="class-name" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($className as $class)
                                            <option value="{{$class->id}}">{{$class->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Section</label>
                                <div class="col-md-8">
                                    <select name="Section_ID" id="section-name" class="form-select">
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Exam Type</label>
                                <div class="col-md-8">
                                    <select name="Exam_Name_ID" id="" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($examType as $exam)
                                            <option value="{{$exam->id}}">{{$exam->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Class Group</label>
                                <div class="col-md-8">
                                    <select name="" id="class-group" class="form-select">
                                        <option value="">Select</option>
                                        @foreach($groups as $group)
                                            <option value="{{$group->id}}">{{$group->class_group}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Course Name</label>
                                <div class="col-md-8">
                                    <select name="Subject_ID" id="course-name" class="form-select">
                                        
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5>Marks Configuration</h5>
                                </div>
                                <div class="col-md-8">
                                    <div class="row mb-2">
                                        <div class="col-md">
                                            <input type="checkbox" name="Subjective_Status" id="" value="1">
                                            <label for="">Subjective</label>
                                            <input type="number" name="Subjective_Mark" id="" class="">
                                        </div>
                                        <div class="col-md">
                                            <label for="">Pass Marks</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md">
                                            <input type="checkbox" name="Objective_Status" id="" value="1">
                                            <label for="">Objective</label>
                                            <input type="number" name="Objective_Mark" id="" class="">
                                        </div>
                                        <div class="col-md">
                                            <label for="">Pass Marks</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md">
                                            <input type="checkbox" name="Practical_Status" id="" value="1">
                                            <label for="">Practical</label>
                                            <input type="number" name="Practical_Mark" id="" class="">
                                        </div>
                                        <div class="col-md">
                                            <label for="">Pass Marks</label>
                                            <input type="number" name="" id="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Exam Marks</label>
                                <div class="col-md-8">
                                    <input type="number" name="Weighted_Mark" id="" class="form-control">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Attendence</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="" id="" value="">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Status</label>
                                <div class="col-md-8">
                                    <input type="checkbox" name="Status" id="" value="1">
                                </div>
                            </div>
                            <hr>
                            <div class="text-center">
                                <a href="{{route('exam-config')}}" class="btn btn-danger">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
