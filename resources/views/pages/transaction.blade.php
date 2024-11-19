@extends('layouts.app') 
@section('content')
<form class ="container space-y-5m-auto flex flex-col" method="post" action="/transaction-store">
    @csrf
    <label class="grid"> name
    <input class="bg-grey-200 border border-sky-50" name="name" type="text">
    </label>
    <label class="grid"> Transaction number
    <input class="bg-grey-200 border border-sky-50" name="transaction_number" type="text">
    </label>
    <label class="grid"> artkode
    <input class="bg-grey-200 border border-sky-50" name="artkode" type="text">
    </label>
    <label class="grid"> price 
    <input class="bg-grey-200 border border-sky-50" name="price" type="text">
    </label>
    <label class="grid"> department 
    <select class="bg-grey-200 border border-sky-50" name="department">
    <option>IT</option>
    <option>FINANCE</option>
    <option>MARKETING</option>
    </select>
    </label>
    <button type="submit" class="bg-red-500">Submit </button>
</form>
@endsection
