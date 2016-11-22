<!DOCTYPE html>
@extends('layouts.master')
@section ('content')
    <h1 style="text-align:center">Shopping Cart</h1><hr>
    <table class="table table-striped table-hover table-bordered">
        <tbody>
        <tr>
            <th>Item</th>
            <th>QTY</th>
            <th>Unit Price</th>
            <th>Total Price</th>
        </tr>
        <tr>
            <td>Football Jersey</td>
            <td>1 <a href="#"></a></td>
            <td>$15.50</td>
            <td>$15.50</td>
        </tr>
        <tr>
            <td>Football Shorts</td>
            <td>1 <a href="#"></a></td>
            <td>$7.50</td>
            <td>$7.50</td>
        </tr>
        <tr>
            <td>Mens Shirt</td>
            <td>1 <a href="#"></a></td>
            <td>$10.50</td>
            <td>$10.50</td>
        </tr>
        <tr>
            <th colspan="3"><span class="pull-right">Sub Total</span></th>
            <th>$33.50</th>
        </tr>
        <tr>
            <th colspan="3"><span class="pull-right">Tax</span></th>
            <th>$6.50</th>
        </tr>
        <tr>
            <th colspan="3"><span class="pull-right">Total</span></th>
            <th>$40.00</th>
        </tr>
        <tr>
            <td><a href="/home" class="btn btn-primary">Continue Shopping</a></td>
            <td colspan="3"><a href="/checkout" class="pull-right btn btn-success">Checkout</a></td>
        </tr>
        </tbody>
    </table>

    </div>
    @stop
</html>
