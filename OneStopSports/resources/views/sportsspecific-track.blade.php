<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Track Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($track as $tra)
            { ?>
            <tr>
                <td>{{$tra['Apparel']}}</td>
                <td>{{$tra['Price']}}</td>
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
    </html>
