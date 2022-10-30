@extends('master')

@section('body')

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <h4>Exam Name Creation</h4>
                    </div>
                    <div class="card-body">
                    @if($message = Session::get('message'))
                            <span class="text-success">{{$message}} </span> 
                    @endif
                       <form action="{{route('exam-create')}}" method="post">
                        @csrf
                            <div class="row mb-3">
                                <label for="" class="col-md-4">Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="exam_create" id="" class="form-control">
                                </div>
                            </div>
                            <input type="submit" value="Save" class="btn btn-primary float-end px-4">
                       </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection