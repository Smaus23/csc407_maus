<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <form style="text-align: left; display: inline; padding-right: 20em;" action="/sportsspecific-baseball">
        <img src="img/baseball.jpg" style=" text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Baseball" />
    </form>

    <form style="text-align: center; display: inline;padding-right: 20em;" action="/sportsspecific-basketball">
        <img src="img/basketball.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Basketball" />
    </form>

    <form style="text-align: right; display: inline;padding-left: 1em;" action="/sportsspecific-cheerleading">
        <img src="img/cheering.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Cheerleading" />
    </form>

    </br>
    </br>

    <form style="text-align: left; display: inline; padding-right: 20em;" action="/sportsspecific-football">
        <img src="img/football.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Football" />
    </form>

    <form style="text-align: center; display: inline; padding-right: 20em;" action="/sportsspecific-soccer">
        <img src="img/soccer.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Soccer" />
    </form>

    <form style="text-align: right; display: inline; padding-left: 3em;" action="/sportsspecific-softball">
        <img src="img/softball.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Softball" />
    </form>

    </br>
    </br>

    <form style="text-align: left; display: inline; padding-right: 20em;"action="/sportsspecific-track">
        <img src="img/track.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Track" />
    </form>

    <form style="text-align: right; display: inline; padding-left: 29em;" action="/sportsspecific-volleyball">
        <img src="img/volleyball.jpg" style="text-align: center;width:50px;height:50px;"/>
        <input type="submit" value="Volleyball" />
    </form>
    @stop
</html>
