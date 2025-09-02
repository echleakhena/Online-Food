
@extends('Backend.Layout.App')
@section('content')
<div class="main-content">
    <div class="header">
        <div class="card-body">
            <h4 class="mb-4">Update Order</h4>
            <form action="{{ route('order.update', $order->id) }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label for="user_id" class="form-label">Staff/User</label>
                    <select class="form-control" id="user_id" name="user_id" required>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}" {{ $order->user_id == $user->id ? 'selected' : '' }}>
                                {{ $user->username }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="food_id" class="form-label">Food Item</label>
                    <select class="form-control" id="food_id" name="food_id" required>
                        @foreach($foods as $food)
                            <option value="{{ $food->id }}" {{ $order->food_id == $food->id ? 'selected' : '' }}>
                                {{ $food->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="customer_id" class="form-label">Customer</label>
                    <select class="form-control" id="customer_id" name="customer_id" required>
                        @foreach($customers as $customer)
                            <option value="{{ $customer->id }}" {{ $order->customer_id == $customer->id ? 'selected' : '' }}>
                                {{ $customer->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="qty" class="form-label">Quantity</label>
                    <input type="number" class="form-control" id="qty" name="qty" value="{{ $order->qty }}" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="subtotal" class="form-label">Subtotal</label>
                    <input type="number" class="form-control" id="subtotal" name="subtotal" value="{{ $order->subtotal }}" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="total" class="form-label">Total</label>
                    <input type="number" class="form-control" id="total" name="total" value="{{ $order->total }}" step="0.01" required>
                </div>
                <div class="mb-3">
                    <label for="location" class="form-label">Location</label>
                    <input type="text" class="form-control" id="location" name="location" value="{{ $order->location }}">
                </div>
                <div class="mb-3">
                    <label for="note" class="form-label">Note</label>
                    <input type="text" class="form-control" id="note" name="note" value="{{ $order->note }}">
                </div>
                <div class="d-flex justify-content-between">
                    <a href="{{ route('order.list') }}" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update Order</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection