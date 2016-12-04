
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Volleyball Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($volleyball as $volley)
            { ?>
            <tr>
                <td>{{$volley['Apparel']}}</td>
                <td>{{$volley['Price']}}</td>
                <td>
                    <form action="/sportsspecific-volleyball/addtocart/{{$volley['ItemID']}}">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    @stop

