<?php

namespace App\Http\Controllers;

use App\GuildMember;
use App\Guilds;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;

class GuildMembersController extends Controller
{

    public function index()
    {

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

    /*Ищем список согильдийцев на сохраненной странице*/
    public function parse(Request $request)
    {

        if ($request->hasFile('file')) {
            $added = [];
            $file = Input::file('file');
            $page = file_get_contents($file->path());

            preg_match_all("/<a href=\x22\/gods(.+?)\x22>(.+?)<\/a>/", $page, $god_names); // save all links \x22 = "
            preg_match_all("/<h1>(.+?)<\/h1>/", $page, $guild_name);


            if($guild_name[1][0] !== env("GUILD_NAME")){
                flash('Данная гильдия нам не интересна, дайте другую')->error();
                return view('guild-members.parse');
            }
            foreach ($god_names[2] as $god){
                if( GuildMember::where('name',$god)->first() === null){
                    GuildMember::create(['name' => $god]);
                    $added[] = $god;
                }
            }
            flash('Пользователи добавлены')->success();
            return view('guild-members.parse',compact('added'));
        }

        return view('guild-members.parse',compact('added'));

    }
}
