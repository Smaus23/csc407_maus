
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Softball Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($softball as $soft)
            { ?>
            <tr>
                <td>{{$soft['Apparel']}}</td>
                <td>{{$soft['Price']}}</td>
                <td>
                    <form action="/sportsspecific-softball/addtocart/{{$soft['ItemID']}}">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    @stop
