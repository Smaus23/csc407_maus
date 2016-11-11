<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Track Apparel</h1>

    <ul>
        <?php
        foreach($track as $tra)
        { ?>
        <li>Apparel: {{$tra['Apparel']}}</li>
            <li> {{$tra['Price']}}</li>
            <form action="/shoppingcart">
                <input type="submit" value="Add to Cart" />
            </form>
            </br>
        <?php
        }
        ?>
    </ul>

    @stop
    </html>
