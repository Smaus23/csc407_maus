<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1>Mens</h1>
    <p>
    Page is currently under construction
    </p>

    {{--}}
    <ul>
        @foreach($men as $man)
            <li>Apparel: {{$man['Apparel']}}</li>
        @endforeach
    </ul>
    --}}

    <form style="text-align: center" action="/mens2">
        <input type="submit" value="Check Array" />
    </form>

    @stop
