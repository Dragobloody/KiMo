<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except'=>['destroy','index','profile','addkid','addgroup']]);
    }

    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if(auth()->attempt(request(['email','password'])))
        {

            return redirect('/main');
        }
        else {

            return back()->withErrors([
                'message' => 'Wrong email or password.'
            ]);
        }

    }

    public function addkid(Request $req)
    {
        $name=$req->input('name');
        $age=$req->input('age');

        //$kid=DB::table('kids')->where('name', 'Dragos')->first();
        $userID=Auth::user()->id;
        echo $userID;
        //echo $kid->id_kid;

        $data=array('name'=>$name,'age'=>$age);
        DB::table('kids')->insert($data);
        $kid = DB::table('kids')->where('name',$name)->where('age',$age)->value('id_kid');


        $data=array('id_user'=>$userID,'id_kid'=>$kid);
        DB::table('user_kid')->insert($data);
        return redirect("/main");

    }

    public function addgroup()
    {
        $idUser=Auth::user()->id;
        $numeGrup= Input::get('name');
        if(DB::table('groups')->groupBy('name')->having('name','=',$numeGrup)->count()!=0)
        {
            return back()->with('error_code', 5)->withErrors([
                'message' => 'There is already a group with this name.'
            ]);
        }
        //echo $numeGrup;
        $kidNumber=Input::get('kidNumber');
        $checkedKidNumber=0;
            for($i=1;$i<=$kidNumber;$i++)
            {
                $kid="kid$i";
                if (Input::get($kid,'0')) {
                    $checkedKidNumber++;
                }
            }
        if($checkedKidNumber==0)
        {

            return back()->with('error_code', 5)->withErrors([
                'message' => 'No kid selected.'
            ]);
        }
        else
        {

            $data=array('name'=>$numeGrup);
            DB::table('groups')->insert($data);
            $idGrup=DB::table('groups')->where('name',$numeGrup)->value('id_group');

            $data=array('id_user'=>$idUser,'id_group'=>$idGrup);
            DB::table('user_group')->insert($data);
            for($i=1;$i<=$kidNumber;$i++)
            {
                $kid="kid$i";
                if ($kidID=Input::get($kid,'0')) {
                    $data=array('id_group'=>$idGrup,'id_kid'=>$kidID);
                    DB::table('group_kid')->insert($data);
                    $checkedKidNumber++;
                }
            }
            return redirect("/main");
        }

    }

    public function destroy()
    {
        auth()->logout();
        return redirect()->home();
    }

    public function index()
    {
        $kids=DB::table('kids')
            ->join('user_kid','kids.id_kid','=','user_kid.id_kid')
            ->where('user_kid.id_user',Auth::user()->id)
            ->select('kids.name','kids.age','kids.id_kid')
            ->get();

        $groups=DB::table('groups')
            ->join('user_group','groups.id_group','=','user_group.id_group')
            ->where('user_group.id_user',Auth::user()->id)
            ->select('groups.id_group','groups.name')
            ->get();


        return view('sessions.main')->with('kids',$kids)->with('groups',$groups);
    }


    public function profile()
    {
        return view('sessions.profile');
    }

}
