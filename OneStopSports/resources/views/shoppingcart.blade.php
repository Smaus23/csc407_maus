
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
        @foreach(Cart::content() as $row)

            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->qty }}</td>
                <td>{{ $row->price }}</td>
                <td>{{ $row->total }}</td>
            </tr>
        @endforeach
        <tr>
            <th colspan="3"><span class="pull-right">Sub Total</span></th>
            <th>$0.00</th>
        </tr>
        <tr>
            <th colspan="3"><span class="pull-right">Tax</span></th>
            <th>$0.00</th>
        </tr>
        <tr>
            <th colspan="3"><span class="pull-right">Total</span></th>
            <th>$0.00</th>
        </tr>
            <td><a href="/home" class="btn btn-primary">Continue Shopping</a></td>
            <td colspan="3"><a href="/checkout" class="pull-right btn btn-success">Checkout</a></td>
        </tr>
        </tbody>
    </table>

    </div>
    @stop
