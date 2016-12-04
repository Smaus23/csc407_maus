
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Soccer Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($soccer as $socc)
            { ?>
            <tr>
                <td>{{$socc['Apparel']}}</td>
                <td>{{$socc['Price']}}</td>
                <td>
                    <form action="/sportsspecific-soccer/addtocart/{{$socc['ItemID']}}">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    @stop

