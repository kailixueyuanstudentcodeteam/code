@extends('layouts.app')

@section('content')
<div class="container form-inline">
     <div class="row justify-content-center" style="width:1200px">
        <div class="col-md-8">
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
                        @if($row->ClassName != "sportself")
                        <tr>
                        <td>{{$row->ClassName}}</td>
                        <td>{{$row->ClassScore}}</td>
                        <td>{{$row->ClassXueFen}}</td>
                        </tr>
                    @endif
                    @endforeach
                </tbody>
            </table>
            <label class="col-sm-4 col-form-label text-md-right">学业水平F2：{{$sumF2}}</label>
            <table class="table">
                <thead>
                    <tr>
                        <th>体育课得分</th>
                        <th>体育自评分</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach ($user as $row)
                            @if($row->ClassName == "sport" )
                                <td>{{$row->ClassScore}}</td>
                            @endif
                            @if($row->ClassName == "sportself")
                                <td>{{$row->ClassScore}}</td>
                            @endif
                        @endforeach
                    </tr>
                </tbody>
            </table>
            <label class="col-sm-4 col-form-label text-md-right">学业水平F3：{{$sumF3}}</label>
            <table class="table">
                <thead>
                     <tr>
                        <th>比赛名称</th>
                        <th>比赛等级</th>
                        <th>作品奖励得分</th>
                        <th>作品名称</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($userF4 as $row)
                        <tr>
                        <td>{{$row->gamename}}</td>
                        <td>{{$row->gamelevel}}</td>
                        <td>{{$row->gamescore}}</td>
                        <td>{{$row->productionname}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <label class="col-sm-4 col-form-label text-md-right">学业水平F4：{{$sumF4}}</label>
            <strong style="font-size:45px;font-family:宋体;"><label class="col-sm-8 col-form-label text-md-right">学生综合素质总评分为：{{$sumall}}</label></strong>
        </div>
    </div>
</div>
@endsection