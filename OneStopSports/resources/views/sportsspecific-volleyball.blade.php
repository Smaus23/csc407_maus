<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Volleyball Apparel</h1>

    <ul>
        <?php
        foreach($volleyball as $volley)
        { ?>
        <li>Apparel: {{$volley['Apparel']['Price']}}</li>
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
