@extends('master')

@section('body')


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h5>Search For Mark Entry</h5>
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
                            <div class="text-center">
                                <input type="submit" value="Search" class="btn btn-primary">
                            </div>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
