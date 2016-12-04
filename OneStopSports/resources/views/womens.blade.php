
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Womens Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($women as $wom)
            { ?>
            <tr>
                <td>{{$wom['Apparel']}}</td>
                <td>{{$wom['Price']}}</td>
                <td>
                    <form action="/womens/addtocart/{{$wom['ItemID']}}">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>
    @stop

