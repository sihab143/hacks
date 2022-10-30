<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('/')}}website/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow">
        <div class="container">
            <a href="#" class="navbar-brand">JABA IT</a>
            <ul class="navbar-nav">
                <li><a href="{{route('home')}}" class="nav-link">Exam Creation</a></li>
                <li><a href="{{route('exam-config')}}" class="nav-link">Exam Configuration</a></li>
                <li><a href="{{route('mark-entry')}}" class="nav-link">Exam Marks Entry</a></li>
                <li><a href="" class="nav-link">Progress Card Generation</a></li>
            </ul>
        </div>
    </nav>

@yield('body')

</body>

<script src="{{asset('/')}}website/js/jquery-3.6.0.js"></script>
<script>


$(document).ready(function(){
        $("#class-name").on('change', function(){
            var classId = this.value;
            // console.log(classId);
            $("#section-name").html('');
            $.ajax({
                url: "{{url('/fetch-section')}}",
                type: "POST",
                data: {
                    class_id: classId,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'JSON',
                success: function (result){
                    // console.log(result);
                    $('#section-name').html('<option value="">Select</option>');
                    $.each(result, function (key, value){
                        $("#section-name").append('<option value="' + value
                                .id + '">' + value.section_name + '</option>');
                    });
                    
                }
            });
        });
    });


    
$(document).ready(function(){
        $("#class-group").on('change', function(){
            var groupId = this.value;
            // console.log(classId);
            $("#course-name").html('');
            $.ajax({
                url: "{{url('/fetch-course')}}",
                type: "POST",
                data: {
                    group_id: groupId,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'JSON',
                success: function (result){
                    // console.log(result);
                    $('#course-name').html('<option value="">Select</option>');
                    $.each(result, function (key, value){
                        $("#course-name").append('<option value="' + value
                                .id + '">' + value.course_name + '</option>');
                    });
                    
                }
            });
        });
    });

</script>



</html>