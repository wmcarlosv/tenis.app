@extends('layouts.app')
@section('title','Ranking')
@section('css')
<style type="text/css">
	div.kode_benner1{
		margin-top: 185px;
	}

	img.club-image{
		width: 315px;
		height: 368px;
	}

	div.kode_detail_find_row{
		padding: 0px !important;
	}

	a.button-go-notice{
		padding-top:15px;
		color:red;
		font-weight: bold;
	}

	table.kode_ply_table tr td, table.kode_ply_table tr th{
		border:1px solid #2a2c2a;
	}

	table.kode_ply_table {
		border-right: 1px solid #2a2c2a;
	}

	tr.kode_ply_two td{
		background:white;
		color: black !important;
	}

	div.contact-form{
		padding: 10px 0px !important;
	}
	.ftb-tabs-wrap .nav-tabs li{
    margin:0px 5px 0px 0px !important;
  }
</style>
@stop
@section('content')
<!--// KODE BENNER1 START //-->
<div class="kode_benner1">
	<div class="kode_benner1_text">
		<h2>Ranking</h2>
	</div>
	<div class="kode_benner1_cols">
		<div class="container kf_container">
			<ul class="breadcrumb">
			  <li><a href="{{ url('/') }}">Home</a></li>
			  <li class="active">Ranking</li>
			</ul>
		</div>
	</div>
</div>
<!--// KODE BENNER1 END //-->
<div class="kode-content">
	<!--// KODE PLAYER WRAPER START //-->
	<div class="kode_ply_sidebar">
		<div class="kode_player_wraper wrp_3">
			@if($show_ranking)
				<!--Rankings -->
				<div class="container">
				  <div class="ftb-tabs-wrap">
				      <ul class="nav nav-tabs" role="tablist">
				      @foreach($player_categories as $index => $pc)
				        @if($index == 0)
				          <li role="presentation" class="active"><a  class="hire" href="#cat_{{ $pc->id }}" aria-controls="cat_{{ $pc->id }}" role="tab" data-toggle="tab">{{ $pc->name }}</a></li>
				        @else
				          <li role="presentation"><a  class="hire" href="#cat_{{ $pc->id }}" aria-controls="cat_{{ $pc->id }}" role="tab" data-toggle="tab">{{ $pc->name }}</a></li>
				        @endif
				      @endforeach
				      </ul>
				      <div class="tab-content">
				      @foreach($players_and_categories as $index => $player_and_category)
				        <div role="tabpanel" class="tab-pane @if($index == 1) active @endif" id="cat_{{ $index }}">
				          <ul class="kode_ticket_list list_2">
				            @foreach($player_and_category as $pac)
				              <li>
				                <span>{{ $loop->index + 1 }}<i>Pos</i></span>
				                <div class="kode_ticket_text">
				                  <h6>{{ $pac->user->club->name }}</h6>
				                  <div class="ticket_title">
				                    <h2>{{ $pac->user->name }}</h2>
				                    <!--<span>VS</span>
				                    <h2>Somalian Titans</h2>-->
				                  </div>
				                  <!--<p>15:30 PM, Soccer Stadium, Dubai</p>-->
				                </div>
				                <div class="ticket_btn">
				                  <a href="#">{{ $pac->points }} pts</a>
				                </div>
				              </li>
				            @endforeach
				          </ul> 
				        </div>
				      @endforeach
				      </div>
				  </div>
				</div>
				<!--Fin Rankings-->
				@endif
		</div>
	</div>
</div>
@stop