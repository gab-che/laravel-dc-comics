<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$comic->title}}</title>
    @vite('resources/js/app.js')
</head>

@extends('layouts.comic')

@section('comic_img')
    {{$comic->thumb}}
@endsection

@section('comic_title')
    {{$comic->title}}
@endsection

@section('comic_price')
    {{$comic->price}}
@endsection

@section('comic_description')
    {{$comic->description}}
@endsection