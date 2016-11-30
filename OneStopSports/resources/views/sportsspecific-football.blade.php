
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Football Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($football as $foot)
            { ?>
            <tr>
                <td>{{$foot['Apparel']}}</td>
                <td>{{$foot['Price']}}</td>
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

