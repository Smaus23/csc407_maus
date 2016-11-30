
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Cheerleading Apparel</h1>
    <table class="table table-striped table-hover table-bordered">
        <tr>
            <th>Apparel</th>
            <th>Cost</th>
            <th></th>
        </tr>
        <ul>
            <?php
            foreach($cheerleading as $cheer)
            { ?>
            <tr>
                <td>{{$cheer['Apparel']}}</td>
                <td>{{$cheer['Price']}}</td>
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

