<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Womens Apparel</h1>

    <ul>
        <?php
        foreach($women as $wom)
        { ?>
        <li>Apparel: {{$wom['Apparel']}}</li>
            <li> {{$wom['Price']}}</li>
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
