@extends('layouts.master')

@section ('content')
    <h1 style="text-align:center">Mens Apparel</h1>

    <ul>
        <?php
        foreach($mens as $man)
        { ?>
            <li>Apparel: {{$man['Apparel']}}</li>
            <li> {{$man['Price']}}</li>
            <form action="/shoppingcart">
                <input type="submit" value="Add to Cart" />
            </form>
            </br>
            <?php
        }
            ?>
    </ul>

    @stop
