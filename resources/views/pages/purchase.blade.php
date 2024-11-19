@extends('layouts.app') 
@section('content')
<form class ="container space-y-5m-auto flex flex-col" method="post" action="/purchase-store">
    @csrf
    <label class="grid"> Invoice number 
    <input class="bg-grey-200 border border-sky-50" name="invoice_number" type="text">
    </label>
    <label class="grid"> Transactiom number
    <input class="bg-grey-200 border border-sky-50" name="transaction_number" type="text">
    </label>
    <label class="grid"> Product name
    <input class="bg-grey-200 border border-sky-50" name="product_name" type="text">
    </label>
    <label class="grid"> Currency 
    <input class="bg-grey-200 border border-sky-50" name="currency" type="text">
    </label>
    <label class="grid"> Amount 
    <input class="bg-grey-200 border border-sky-50" name="amount" type="number">
    </label>
    <button type="submit" class="bg-red-500">Submit </button>
</form>
@endsection
