@extends('layouts.master')
@section ('content')
    <form id='register' action='/thanks' method='post' accept-charset='UTF-8' style="text-align:center">
        <fieldset >
            <legend>Register</legend>
            <input type='hidden' name='submitted' id='submitted' value='1'/>
            <label for='name' >First Name*: </label>
            <input type='text' name='name' id='name' maxlength="50" />
            </br>
            <label for='name' >Last Name*: </label>
            <input type='text' name='name' id='name' maxlength="50" />
            </br>
            <label for='email' >Email Address*:</label>
            <input type='text' name='email' id='email' maxlength="50" />
            </br>
            <label for='username' >Username*:</label>
            <input type='text' name='username' id='username' maxlength="50" />
            </br>
            <label for='password' >Password*:</label>
            <input type='password' name='password' id='password' maxlength="50" />
        </fieldset>
    </form>
    <form style="padding-bottom: 1em; text-align: center;"  action="/thanks">
        <input type="submit" value="Submit" />
    </form>
    @stop
