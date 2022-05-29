@extends('layouts.front')
@section('title')
    My Order
@endsection
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-primary text-light ">
                    <h4>Order View
                    <a href="{{url('my-order')}}"><button class="btn btn-warning float-end">Back</button></a>
                </h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 order-detail">
                            <h4>Shipping Details</h4>
                            <label for="">First Name</label>
                            <div class="border pt-2">{{$order->fname}}</div>
                            <label for="">Last Name</label>
                            <div class="border pt-2">{{$order->lname}}</div>
                            <label for="">Email</label>
                            <div class="border pt-2">{{$order->email}}</div>
                            <label for="">Phone Number</label>
                            <div class="border pt-2">{{$order->phone}}</div>
                            <label for="">Address</label>
                            <div class="border pt-2">{{$order->address}}</div>
                        </div>
                        <div class="col-md-6">
                            <h4>Order Details</h4>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Image</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order->order_items as $item)
                                    <tr>
                                        <td>{{$item->product->name}}</td>
                                        <td>{{$item->quantity}}</td>
                                        <td>{{$item->price}}</td>
                                        <td><img id="cart-img" src="{{ asset('images/'.$item->product->image) }}" width="75" alt=""></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <h4>Total Price: {{$order->total_price}} $</h4>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection