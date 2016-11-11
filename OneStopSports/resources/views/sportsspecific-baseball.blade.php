<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Baseball Apparel</h1>

    <ul>
        <?php
        foreach($baseball as $base)
        { ?>
        <li>Apparel: {{$base['Apparel']}}</li>
            <li> {{$base['Price']}}</li>
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
