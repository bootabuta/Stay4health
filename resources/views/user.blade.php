@extends('userDataView.userData')

@section('userDataContent')

<h1>Welcome {{ Auth::user()->name }}</h1>

@endsection

