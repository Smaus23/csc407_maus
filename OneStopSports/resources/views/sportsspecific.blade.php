<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Pick Your Sport</h1>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th></th>
            <th></th>
            <th></th>
        </tr>
        <tr>
            <td>
                <form style="text-align: center; display: inline; padding-right: 20em;" action="/sportsspecific-baseball">
                    <img src="img/baseball.jpg" style=" text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Baseball" />
                </form>
            </td>
            <td>
                <form style="text-align: center; display: inline;padding-right: 20em;" action="/sportsspecific-basketball">
                    <img src="img/basketball.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Basketball" />
                </form>
            </td>
            <td>
                <form style="text-align: center; display: inline;" action="/sportsspecific-cheerleading">
                    <img src="img/cheering.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Cheerleading" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style="text-align: center; display: inline; padding-right: 20em;" action="/sportsspecific-football">
                    <img src="img/football.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Football" />
                </form>
            </td>
            <td>
                <form style="text-align: center; display: inline; padding-right: 20em;" action="/sportsspecific-soccer">
                    <img src="img/soccer.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Soccer" />
                </form>
            </td>
            <td>
                <form style="text-align: right; display: inline;" action="/sportsspecific-softball">
                    <img src="img/softball.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Softball" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <form style="text-align: center; display: inline; padding-right: 20em;"action="/sportsspecific-track">
                    <img src="img/track.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Track" />
                </form>
            </td>
            <td>

            </td>
            <td>
                <form style="text-align: center; display: inline;" action="/sportsspecific-volleyball">
                    <img src="img/volleyball.jpg" style="text-align: center;width:50px;height:50px;"/>
                    <input type="submit" value="Volleyball" />
                </form>
            </td>
        </tr>
        </table>
    @stop
</html>
