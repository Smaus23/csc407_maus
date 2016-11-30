@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">We Want To Sponsor YOU!</h1>
    <p style="text-align:center">
        Here at the One Stop Sports Shop we LOVE our local sports teams! By agreeing to sponsorship we get to use your team
        to help spread our name and you get to use our website as a personal game and statistics tracker!! <br>If you wish for
        to pre-register please click the ACCEPT button below!
    </p>

    <form style="padding-bottom: 1em;text-align: center" action="/register">
        <input type="submit" value="Accept" />
    </form>

    @stop

