@extends('layouts.master')
@section ('content')
        <p style="text-align:center">You have successfully purchased the items! Thank you for shopping at One Stop Sports Shop! </p>
        <form action="/home" style="padding-bottom: 1em; text-align:center">
            <input type="submit" value="Return to Homepage" />
        </form>
@stop
