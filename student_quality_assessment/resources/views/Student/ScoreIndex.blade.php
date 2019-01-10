@extends('layouts.app')

@section('content')
<div class="container form-inline">
    <div class="row justify-content-center" style="width:800px">
        <div class="col-md-8">
            <!-- <div class="card"> -->
                <!-- <div class="card-header">Dashboard</div> -->

                <!-- <div class="card-body"> -->
<!--                     @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->
                    <label class="col-sm-4 col-form-label text-md-right">学号：{{$user[0]->NO}}</label>

                    <table class="table">
                       <thead>
                            <tr>
                                <th>课程名称</th>
                                <th>课程得分</th>
                                <th>课程学分</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $row)
                                <tr>
                                <td>{{$row->ClassName}}</td>
                                <td>{{$row->ClassScore}}</td>
                                <td>{{$row->ClassXueFen}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <label class="col-sm-4 col-form-label text-md-right">学业水平F2：{{$sum}}</label>
                <!-- </div> -->
            <!-- </div> -->
        </div>
    </div>
    <div class="card" style="width:200px">
        三、学业水平评价<br>
        第八条  学业水平评价主要依据学生每学年的公共课及专业课的考试成绩，考察学生学习的勤奋努力程度、学习质量和水平。<br>
        第九条   评价内容与方式。<br>
        计算公式：学业水平＝[∑本学年课程总学分绩点 /( 本学年课程总学分×4)]×100<br>
        说明：<br>
       （1）成绩以同年级、同专业为一个评定单位。<br>
       （2）学年课程中含体育课。<br>
    </div>
</div>
<div class="container form-inline">
    <div class="row justify-content-center" style="width:800px">
        <div class="col-md-8">
            <table class="table">
                <thead>
                    <tr>
                        <th>体育课得分</th>
                        <th>体育自评分</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $row)
                        @if($row->ClassName == "sport")
                        <tr>
                            <td>{{$row->ClassScore}}</td>
                            <td>
                                <form action="{{url('/baseinfo')}}" method="post">
                                {{csrf_field()}}
                                    <input id="sportself" type="text" class="form-control{{ $errors->has('sportself') ? ' is-invalid' : '' }}" name="sportself" required autofocus>
                                    @if ($errors->has('sportself'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('sportself') }}</strong>
                                        </span>
                                    @endif
                                    <button type="submit" name="submit_sportself">确认</button>
                                </form>
                            </td>
                        </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
<!--             <label class="col-sm-4 col-form-label text-md-right">学业水平F3：</label> -->
        </div>
    </div>
    <div class="card" style="width:200px">
        四、身体素质评价 <br>
        第十条  身体素质评价主要依据《学生体质健康标准》进行评价，考察学生的身体素质和健康水平。<br>
        第十一条  身体素质评价由体育学院负责组织学生进行体育达标测试，根据《学生体质健康标准》评定学生成绩后将达标测试成绩计入。<br>
        一、二年级学生的体育考核分＝体育课考核分（体育课考核分*5%）＋教师对学生参加课外体育活动评分（1-5分）。<br>
        三、四年级学生的体育考核分为教师对学生参加课外体育活动评分（1-10分）。<br>
    </div>
<!--     <div class="row justify-content-center col-md-12">
        <a class="btn btn-primary mx-3 mb-2" href="{{url('/baseinfo')}}">确认</a>
    </div> -->
</div>
@endsection
