<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Cheerleading Apparel</h1>

    <ul>
        <?php
        foreach($cheerleading as $cheer)
        { ?>
        <li>Apparel: {{$cheer['Apparel']}}</li>
            <li> {{$cheer['Price']}}</li>
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
