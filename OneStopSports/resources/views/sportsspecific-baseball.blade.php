
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Baseball Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($baseball as $base)
            { ?>
            <tr>
                <td>{{$base['Apparel']}}</td>
                <td>{{$base['Price']}}</td>
                <td>
                    <form action="/shoppingcart">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    @stop

