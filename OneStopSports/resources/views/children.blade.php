<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Childrens Apparel</h1>

    <ul>
        <?php
        foreach($children as $child)
        { ?>
        <li>Apparel: {{$child['Apparel']}}</li>
            <li> {{$child['Price']}}</li>
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

