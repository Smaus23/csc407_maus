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
                <img src="img/baseball.jpg" style=" text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-baseball">
                    <input type="submit" value="Baseball" />
                </form>
            </td>
            <td>
                <img src="img/basketball.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-basketball">
                    <input type="submit" value="Basketball" />
                </form>
            </td>
            <td>
                <img src="img/cheering.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-cheerleading">
                    <input type="submit" value="Cheerleading" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="img/football.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-football">
                    <input type="submit" value="Football" />
                </form>
            </td>
            <td>
                <img src="img/soccer.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-soccer">
                    <input type="submit" value="Soccer" />
                </form>
            </td>
            <td>
                <img src="img/softball.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: right; display: inline;" action="/sportsspecific-softball">
                    <input type="submit" value="Softball" />
                </form>
            </td>
        </tr>
        <tr>
            <td>
                <img src="img/track.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;"action="/sportsspecific-track">
                    <input type="submit" value="Track" />
                </form>
            </td>
            <td>

            </td>
            <td>
                <img src="img/volleyball.jpg" style="text-align: center;width:50px;height:50px;"/>
                <br>
                <form style="text-align: center; display: inline;" action="/sportsspecific-volleyball">
                    <input type="submit" value="Volleyball" />
                </form>
            </td>
        </tr>
        </table>
    @stop

