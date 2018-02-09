@extends('layouts.standard')

@section('title', 'Page Title')

@section('flash_title', "Welcome to RDC")
@section('flash_text', "Hi, this is the flash text. This can be changes on every route on your command.")


@section('content')
    <p class="text-danger">This is the <strong>home</strong> page. Edited</p>
@endsection
