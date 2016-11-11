<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Football Apparel</h1>

    <ul>
        <?php
        foreach($football as $foot)
        { ?>
        <li>Apparel: {{$foot['Apparel']}}</li>
            <li> {{$foot['Price']}}</li>
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
