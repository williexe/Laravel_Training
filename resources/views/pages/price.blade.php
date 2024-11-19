@extends('layouts.app') 
@section('content')
<form class ="container space-y-5m-auto flex flex-col" method="post" action="/price-store">
    @csrf
    <label class="grid"> currency
    <select class="bg-grey-200 border border-sky-50" name="currency">
    <option>ZAR</option>
    <option>USD</option>
    <option>EUR</option>
</select>
    </label>
    <label class="grid"> value
    <input class="bg-grey-200 border border-sky-50" name="value" type="text">
    </label>
    <label class="grid"> amount
    <input class="bg-grey-200 border border-sky-50" name="amount" type="text">
    </label>
    <button type="submit" class="bg-red-500">Submit </button>
</form>
@endsection
