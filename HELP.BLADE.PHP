<!DOCTYPE html>
<html>
<head>
    <title>Help Center</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/help.css') }}">
</head>
<body>


@extends('layouts.app')

@section('content')
    <div class="help-center-header">
        <h1>How can we help?</h1>
        <input type="text" class="help-center-search" placeholder="Search">
    </div>

    <div class="container">
        <div class="topic">
            <h3>Getting Started</h3>
            <p>Learn how to quickly get the most out of Overflow.</p>
            <a href="#">See all 12 articles &rarr;</a>
        </div>
        <div class="topic">
            <h3>Desktop App</h3>
            <p>Get to know the basics of using the Overflow desktop app for creating.</p>
            <a href="#">See all 22 articles &rarr;</a>
        </div>
        <div class="topic">
            <h3>Overflow Dashboard</h3>
            <p>Manage Shares, folders, People, and your Overflow user account, online from your dashboard.</p>
            <a href="#">See all 6 articles &rarr;</a>
        </div>
        <div class="topic">
            <h3>Overflow Releases</h3>
            <p>Learn what’s new, improved or fixed in Overflow.</p>
            <a href="#">See all updates &rarr;</a>
        </div>
        <div class="topic">
            <h3>FAQs</h3>
            <p>Answers to the most commonly asked questions. What is Overflow, what can you do with it?</p>
            <a href="#">Read FAQs &rarr;</a>
        </div>
        <div class="topic">
            <h3>How To</h3>
            <p>Find various tips on how to do things in Overflow.</p>
            <a href="#">Learn more &rarr;</a>
        </div>
    </div>
@endsection



</body>
</html>
