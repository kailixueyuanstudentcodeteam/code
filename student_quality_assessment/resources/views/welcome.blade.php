<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>大数据工程学院学生综合测评系统</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 8.5vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .background1{
                background:#A52A2A;
            }
        </style>
        <script type="text/javascript">
            window.onload=init;
            var n=1; //图片标记数
            var dingshi; //让图片动的定时器
            function init(){
            dingshi=window.setInterval("tupian()",1000);
            }
            //更换图片
            function tupian(){
            var obj=document.getElementById("img1");
            n++;
            if(n>=4){
            n=1;
            }
            obj.src="http://localhost:8081/laravel001/laravel002/public/img/kaili_pic_"+n+".png";
            }
            //鼠标放上图片停止
            function stoptupian(){
            window.clearInterval(dingshi);
            }
            //鼠标离开图片动起来
            function dongqilai(){
            dingshi=window.setInterval("tupian()",1000);
            }
        </script>
    </head>
    <body>
        <div class="position-ref background1 full-height">
            <img src="http://localhost:8081/laravel001/laravel002/public/img/kaili.png" width="200" height="70">
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" style="color:#FFFFFF;Font-size:22px">Login</a>

<!--                         @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif
        </div>
        <!-- <img src="http://localhost:8081/laravel001/laravel002/public/img/kaili_pic_1.png" width="420" height="420"> -->
        <img src="http://localhost:8081/laravel001/laravel002/public/img/kaili_pic_1.png" onmouseover="stoptupian()" onmouseout="dongqilai()" id="img1" height="400" width="1687">
            <div class="content">
                <div class="title m-b-md">
                    大数据工程学院学生综合测评系统
                </div>
            </div>
            <div class="card">
                <div class="card-header content"><strong>大数据工程学院大学生综合素质测评实施细则</strong></div>
                    <div class="card-body col-md-8">
                        <strong>一、总　则</strong><br>
                        第一条  为全面贯彻党的教育方针，坚持教育为社会主义现代化建设服务，为人民服务，落实立德树人的教育根本任务，培养德智体美全面发展的社会主义建设者和接班人，大力弘扬“立德树人、自强奋进”的校训，培养学生的社会责任感、创新精神和实践能力，使学生思想教育和管理工作制度化、规范化、科学化，根据《凯里学院大学生综合素质测评实施办法》，结合大数据工程学院实际，特制定本实施细则。<br>
                        第二条  综合素质测评适用对象为全日制本（专）科在校学生，每学期或学年评价一次，评价内容包括品德素质评价、学业水平评价、身体素质评价和综合能力评价四个方面。<br>
                        第三条   综合素质测评成绩（100分）=品德素质评价20%+学业水平评价50%+身体素质评价10%+综合能力评价20%。<br>
                        第四条  实施综合素质测评坚持客观、公正、民主、公开的原则。<br>
                        二、品德素质评价<br>
                        第五条  评价依据<br>
                        对学生的思想政治、遵纪守法、集体观念、品行表现等方面的表现进行评价，考察学生政治思想道德法制等方面的综合表现。<br>
                        第六条  评价内容及计分方法<br>
                        品德素质评价=基本分80分+记实加减分。记实指根据第五条评价依据中的相关内容，制定相应的加减分标准，对学生的行为表现进行评价，给予相应的加减分。品德素质评价上限100分，超过100分的，按100分计。品德素质评价等级：成绩90分以上为优秀,80—89分为良好，60—79为合格，59分以下为不合格。<br>
                        思想政治方面：坚持四项基本原则，热爱祖国，拥护党的领导，自觉践行社会主义核心价值观，始终与党中央保持高度一致，积极参加校、院（系）、班级组织的各项政治活动。<br>
                        遵纪守法方面：自觉遵守国家的法律、法规和学校的各项规章制度，遵守党纪团规，自觉维护正常的教育教学和生活秩序；做到学习期间不迟到，不早退，不旷课，不缺席，自觉抵制各种无组织、无纪律的现象。<br>
                        集体观念方面：集体荣誉感强，积极参加院校和班级组织各项集体活动，为集体发展主动出谋划策，维护集体团结，具有良好的团队意识和协作精神；热心社会公益事业，积极参加各项公益活动。<br>
                        品行表现方面：主动维护并遵守社会公德，作风正派，自觉参加校园文明建设，言谈举止大方得体，仪表端正，礼貌待人，尊敬师长，乐于助人，团结同学，诚实守信。<br>
                        第七条  记实加减分标准<br>
                        1.积极参加各项集体活动，包括班团、社团、学生会、学院、学校等组织的各项活动，包括思想政治学习、教学实践（创作）、学科竞赛、学术讲座、社会实践、青年志愿者活动、文化艺术比赛、体育比赛等，分院根据活动时间及任务强度等确定每次具体加分，总分不能超过5分。无故缺席规定必须参加的集体活动相应减1-5分。<br>
                        2.在文明寝室日常卫生检查中评定为校级、分院级优秀的，全体成员相应加1-5分，被通报批评的全体成员减1-5分，寝室内存在违规使用电器、赌博行为和未经请假夜不归宿，根据实际情形相应减2-5分。 <br>
                        3.学生在见义勇为、助人为乐、奉献爱心等方面有突出表现，获得市州级及以上荣誉称号的，每获一项至少加5分。<br>
                        4.受学校通报批评、警告、严重警告、记过、留校察看等处分，实行减分处罚。<br>
                        （1）受到通报批评的一次扣4分；<br>
                        （2）受到警告处分的一次扣6分；<br>
                        （3）受到严重警告处分的一次扣8分；<br>
                        （4）受到记过处分的一次扣10分；<br>
                        （5）受到留校察看处分的一次扣20分。<br>
                        5.诱骗、胁迫他人参与宗教活动的，在校园中传教的，在未经有关部门批准的、非正规的场所组织参与宗教活动的，在校园内组织、参与宗教活动的，经查实，传教者、组织者按照情节情况相应减3-10分。<br>
                        6．打架斗殴、赌博、酗酒等违纪行为但未构成处分或通报批评的，经查实相应减1-2分。<br>
                        7.在校内饲养猫、狗等宠物影响他人生活的，经查实，相应减2-5分。<br>
                        8.不讲社会公德、故意损坏公物或破坏环境、乱贴乱画的，经查实相应减1-5分。<br>
                        9.无故旷课或上课迟到、早退的，经查实，分别相应减1-5分。<br>
                        10.在网络上造谣、传谣，给学校造成一定负面影响，视情节轻重相应减2-5分。<br>
                        11.违反社会公序良俗，经查实，相应减3-10分。<br>
                        12.学校认定的记实减分的其它适用条件及标准。<br>
                        三、学业水平评价<br>
                        第八条  学业水平评价主要依据学生每学年的公共课及专业课的考试成绩，考察学生学习的勤奋努力程度、学习质量和水平。<br>
                        第九条   评价内容与方式。<br>
                        计算公式：学业水平＝[∑本学年课程总学分绩点 /( 本学年课程总学分×4)]×100<br>
                        说明：<br>
                        （1）成绩以同年级、同专业为一个评定单位。<br>
                        （2）学年课程中含体育课。<br>
                </div>
            </div>
    </body>
</html>
