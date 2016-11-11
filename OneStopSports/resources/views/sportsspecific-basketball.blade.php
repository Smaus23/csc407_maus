<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Basketball Apparel</h1>

    <ul>
        <?php
        foreach($basketball as $basket)
        { ?>
        <li>Apparel: {{$basket['Apparel']}}</li>
            <li> {{$basket['Price']}}</li>
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
