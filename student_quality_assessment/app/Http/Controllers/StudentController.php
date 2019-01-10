<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function ScoreCal()
    {
        $user = Auth::user();
        // if ($user->Smonitor == "true" ){
        //     return view('Student/MonitorIndex');
        // } else {
        //     return view('Student/ScoreIndex');
        // }
        $users = DB::table('score')->where('NO', '=', $user->NO)->get();
        return ($users);
    }

    public function ScoreF4()
    {
        $user = Auth::user();
        // if ($user->Smonitor == "true" ){
        //     return view('Student/MonitorIndex');
        // } else {
        //     return view('Student/ScoreIndex');
        // }
//         dd(11);
        $users = DB::table('game_record')->where('NO', '=', $user->NO)->get();
        return ($users);
    }

    public function ScoreLevel(Request $request)
    {
        //$user = Auth::user();
        // if ($user->Smonitor == "true" ){
        //     return view('Student/MonitorIndex');
        // } else {
        //     return view('Student/ScoreIndex');
        // }
        $game_level = DB::table('game_level')->get();
//         dd($request->input('gamename'),$request->input('gamelevel'));
        $users_level = DB::table('game_level')->where('gamename', '=', $request->input('gamename'))->where('gamelevel', '=', $request->input('gamelevel'))->get();
//         dd($users_level);
        return ($users_level);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function ScoreIndex()
    {
        $user = Auth::user();
        $sum = 0;
        $flag = 0;
        //dd($user);
        $users=$this->ScoreCal();
        if ($user->Smonitor == "true" ){
            return view('Student/MonitorIndex',[
                'user'=>$users
            ]);
        } else {
            for($i=0;$i<count($users);$i++){
                if ($users[$i]->ClassName == "sportself"){
                    $flag = 1;
                } else {
                    $sum += $users[$i]->ClassScore * $users[$i]->ClassXueFen;
                }
            }
            if($flag == 0){
                return view('Student/ScoreIndex',[
                   'user'=>$users,
                    'sum' =>$sum
                ]);
            }else{
                return view('Student/ScoreIndex_F4');
            }
        }
    }
    public function baseinfo_stu_option(Request $request)
    {
//         dd("baseinfo_stu_option");
        // dd($user);
        if ($request->isMethod('POST')){
            $validator = \Validator::make($request->input(),[
                //主体部分
                'sportself'=>'required|integer|max:100|min:0',
            ],[
                'required'=>':attribute 为必填项',
                'min'=>':attribute 长度过短',
                'max'=>':attribute 长度过长',
            ],[
                'sportself'=>'体育自评分',
            ]);

            if ($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = Auth::user();
dd($user);
            $bool=DB::insert("insert into score(id,No,ClassName,ClassScore,ClassXueFen) values(?,?,?,?,?)",[NULL,$user->NO,'sportself',$request->input('sportself'),0]);
            return view('Student/ScoreIndex_F4',[
                'flag'=>0,
                'sumF4' =>0
            ]);
        }
    }
    public function baseinfo_stu_option_F4(Request $request)
    {
        $sumF4 = 0;
        $flag = 0;
        if ($request->isMethod('POST')){
            $user = Auth::user();
              dd($user);
            $userscore=$this->ScoreLevel($request);
//                          dd($user->NO);
            $bool=DB::insert("insert into game_record(id,No,gamename,gamelevel,gamescore,productionname) values(?,?,?,?,?,?)",[NULL,$user->NO,$request->input('gamename'),$request->input('gamelevel'),$userscore[0]->gamescore,$request->input('productionname')]);
            $userF4=$this->ScoreF4();
//              dd($flag);
            if ($userF4 != NULL){
                for($i=0;$i<count($userF4);$i++){
                    $sumF4 += $userF4[$i]->gamescore;
                }
                return view('Student/ScoreIndex_F4',[
                    'userF4'=>$userF4,
                    'sumF4' =>$sumF4,
                    'flag' => $flag
                    ]);
            } else{
                return view('Student/ScoreIndex_F4',[
                    'flag'=> $flag
                ]);
            }

        }
    }

    public function allinfo_stu(Request $request)
    {
        $sum = 0;
        $sumF4 = 0;
        $sumF2 = 0;
        $sumF3 = 0;
        $sumall = 0;
        if ($request->isMethod('POST')){
            $user = Auth::user();
            //              dd($user);
            $score=$this->ScoreCal();
            $userF4=$this->ScoreF4();
            if ($userF4 != NULL){
                for($i=0;$i<count($userF4);$i++){
                    $sumF4 += $userF4[$i]->gamescore;
                }
            }
            if ($score != NULL){
                for($i=0;$i<count($score);$i++){
                    if ($score[$i]->ClassName != "sportself")
                        $sumF2 += $score[$i]->ClassScore * $score[$i]->ClassXueFen;
                    if ($score[$i]->ClassName == "sportself" || $score[$i]->ClassName == "sport")
                        $sumF3 += $score[$i]->ClassScore * $score[$i]->ClassXueFen;
                }
            }
            $sumall = $sumF2 + $sumF3 + $sumF4;
            return view('Student/ScoreIndex_ALL',[
                'user'=>$score,
                'userF4'=>$userF4,
                'sumF4' =>$sumF4,
                'sumF2' =>$sumF2,
                'sumF3' =>$sumF3,
                'sumall' =>$sumall
            ]);
        }
    }
}
