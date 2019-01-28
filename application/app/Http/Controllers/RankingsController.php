<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ranking;
use App\Championship;
use App\ChampionshipPlayer;
use App\PlayerCategory;

class RankingsController extends Controller
{
    public function index(){
    	$championships = Championship::all();
    	$player_categories = PlayerCategory::all();
    	return view('admin.rankings.home',['championships' => $championships, 'player_categories' => $player_categories]);
    }

    public function store(Request $request){

    	$championship_id = $request->input('championship_id');
    	$player_category_id = $request->input('player_category_id');
    	$players = $request->input('users_ids');
    	$points = $request->input('points');

    	for($i = 0; $i < count($players); $i++){

    		$ranking = Ranking::where([
    			['championship_id','=',$championship_id],
    			['player_category_id','=',$player_category_id],
    			['user_id','=',$players[$i]],
    		])->first();

    		if(isset($ranking->id) and !empty($ranking->id)){
    			$rupdate = Ranking::findOrFail($ranking->id);
    			$rupdate->championship_id = $championship_id;
    			$rupdate->player_category_id = $player_category_id;
    			$rupdate->user_id = $players[$i];
    			$rupdate->points = $points[$i];
    			$rupdate->update();
    		}else{
    			$ranking = New Ranking();
    			$ranking->championship_id = $championship_id;
    			$ranking->player_category_id = $player_category_id;
    			$ranking->user_id = $players[$i];
    			$ranking->points = $points[$i];
    			$ranking->save();
    		}
    	}

    	flash()->overlay('Ranking cargado con exito!!', 'Alerta!!');

    	return redirect()->route("rankings.index");
    }

    public function playersbycategory($championship_id = NULL, $player_category_id = NULL){

    	if( (isset($championship_id) and !empty($championship_id)) and (isset($player_category_id) and !empty($player_category_id)) ){

    		$players = ChampionshipPlayer::where([
    			['championship_id','=',$championship_id],
    			['player_category_id','=',$player_category_id]
    		])->get();

    		if(count($players) <= 0){
    			$data = [];
    		}else{
    			$cont = 0;
    			foreach ($players as $player) {
    				if($player->user->role == "player"){
	    				$data[$cont]['id'] = $player->user_id;
	    				$data[$cont]['name'] = $player->user->name;
	    				$data[$cont]['club'] = $player->user->club->name;
	    				$ranking = Ranking::where([
	    					['championship_id','=',$championship_id],
	    					['player_category_id','=',$player_category_id],
	    					['user_id','=',$player->user_id]
	    				])->first();
	    				if(isset($ranking->id) and !empty($ranking->id)){
	    					$data[$cont]['points'] = $ranking->points;
	    				}else{
	    					$data[$cont]['points'] = 0;
	    				}
	    				$cont++;	
    				}
    			}
    		}

    		print json_encode($data);
    	}
    }
}
