@extends('layouts.app')

@section('content')
<div class="container form-inline">
     <div class="row justify-content-center" style="width:800px">
        <div class="col-md-8">

            <form action="{{url('/baseinfo_F4')}}" method="post">
                {{csrf_field()}}
                <table class="table">
                    <thead>
                        <tr>
                            <th>比赛名称</th>
                            <th>比赛等级</th>
                            <th>作品名称</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <select class="form-control" name="gamename">
                                    <option value ="省级互联网+">省级互联网+</option>
                                    <option value ="校级互联网+">校级互联网+</option>
                                </select>
                            </td>
                            <td>
                                <select class="form-control" name="gamelevel">
                                    <option value ="特等奖">特等奖</option>
                                    <option value ="一等奖">一等奖</option>
                                    <option value ="二等奖">二等奖</option>
                                    <option value ="三等奖">三等奖</option>
                                    <option value ="优秀奖">优秀奖</option>
                                </select>
                            </td>
                            <td>
                                <input type="text" name="productionname">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <button id="but-add" class="btn btn-primary" type="submit"> 增加奖项</button>
            </form>
        </div>
    </div>
    <div class="card" style="width:200px">
    <strong>综合能力评价</strong>
    第十二条  综合能力评价考察学生在学校教育和成长中体现出来个性化的能力，包括研究创新、学业提升、专业（职业）技能、社会工作（实践）、校园文化活动等五个方面。 <br>
    第十三条  评价方式为基本分60分+各项加分，超过100分的，按100分计。<br>
    第十四条  研究创新主要指学生参与科学研究、学科竞赛和创新创业等方面的情况。学生所获得科研课题、研究成果和获奖等及参加的各类学科竞赛。研究创新需要根据教务处、科研处有有关规定予以认定，认定时间以获得和批准时间为准，集体合作的成果（获奖）依据“突出贡献，分开档次”的原则按照参与者次序依次递减计分。<br>
    第十五条  学业提升指学生在学习过程中态度认真，刻苦努力，成绩优秀；积极参加出国（境）访学、第二学历、辅修、学术讲座等文化学术交流科研训练活动。根据学生学业提升活动具体情形，实行激励加分。<br>
    第十六条  专业（职业）技能指学生获得大学英语四、六级、计算机水平等级等各类专业（职业）技能（水平）资格证书等。根据学生专业技能提升活动具体情形，实行激励加分。<br>
    第十七条  社会工作（实践）主要依据学生参加各种社会（工作）实践活动的具体情况考查，主要指学生担任班级、学院、学校等各类学生干部、各类社团主要干部，在工作中表现出良好的工作责任心、组织能力、领导能力。学生利用课余时间积极参加社会实践活动和公益志愿服务，被评为校级及以上先进个人或具有相应评价成果的。根据学生社会实践活动具体情形，实行激励加分。<br>
    第十八条  校园文化活动指学生参加校级以上（含校级）校园科技文化活动，如文艺、体育、科技活动和其它相关活动的奖励或表彰。根据学生活动具体情形，主要考察学生参加活动的积极性和活动效果，实行奖励和激励并重加分。<br>
    </div>
</div>
<div class="container form-inline">
     <div class="row justify-content-center" style="width:800px">
        <div class="col-md-8">
            <form action="{{url('/submitinfo')}}" method="post">
                {{csrf_field()}}
                <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit_allinfo">确认提交</button>
            </form>
        </div>
    </div>
</div>
@endsection