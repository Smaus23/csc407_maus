<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Softball Apparel</h1>

    <ul>
        <?php
        foreach($softball as $soft)
        { ?>
        <li>Apparel: {{$soft['Apparel']}}</li>
            <li> {{$soft['Price']}}</li>
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
