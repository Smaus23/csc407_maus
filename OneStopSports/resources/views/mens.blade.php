
@extends('layouts.master')

@section ('content')
    <h1 style="text-align:center">Mens Apparel</h1>

        <table class="table table-striped table-hover table-bordered">
            <tr>
                <th>Apparel</th>
                <th>Cost</th>
                <th></th>
            </tr>
            <ul>
        <?php
        foreach($mens as $man)
        { ?>
                <tr>
                    <td>{{$man['Apparel']}}</td>
                    <td>{{$man['Price']}}</td>
                    <td>
                        <form action="/mens/addtocart/{{$man['ItemID']}}">
                            <input type="submit" value="Add to Cart" />
                        </form>
                    </td>
                </tr>
            <?php
        }
            ?>
</table>
    </ul>
    @stop
