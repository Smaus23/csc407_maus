
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Childrens Apparel</h1>

    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($children as $child)
            { ?>
            <tr>
                <td>{{$child['Apparel']}}</td>
                <td>{{$child['Price']}}</td>
                <td>
                    <form action="/children/addtocart/{{$child['ItemID']}}">
                        <input type="submit" value="Add to Cart" />
                    </form>
                </td>
            </tr>

        <?php
        }
        ?>
    </table>

    @stop

