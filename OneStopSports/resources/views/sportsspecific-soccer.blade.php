<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Soccer Apparel</h1>

    <ul>
        <?php
        foreach($soccer as $socc)
        { ?>
        <li>Apparel: {{$socc['Apparel']}}</li>
            <li> {{$socc['Price']}}</li>
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
