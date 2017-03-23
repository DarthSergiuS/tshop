
@extends('layouts.main')
@section('content')

    <form action="/order_final/">
        <div>
            <input class="form-control" type="text" name="customer_name"/>
        </div>
        <div>
            <input class="form-control" type="text" name="phone"/>
        </div>
        <div>
            <input class="form-control" type="text" name="city"/>
        </div>
        <div>
            <textarea class="form-control">Comment</textarea>
        </div>
        <div>
            <input class="form-control" type="number" name="amount"/>
        </div>
        <input type="hidden" value="{{$goods_id}}" name="product_id"/>
        <input type="submit" value="Order" class="btn btn-success"/>
    </form>

@endsection