<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DutchGroceries</title>

        {{-- Compiled assets --}}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body>
        {{-- Navigation bar --}}
        <nav class="navbar is-primary  has-text-white" >
            <div class="container">
                <div class="navbar-brand">
                    <a href="/" class="navbar-item">
                        <strong>DutchGroceries</strong>
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start">
                        {{--
                            <a href="{{ route('home') }}"
                            class="navbar-item {{ request()->route()->getName() === 'home' ? "is-active" : "" }}">
                                Home
                            </a>
                            <a href="{{ route('articles.index') }}"
                            class="navbar-item {{ request()->route()->getName() === 'articles.index' ? "is-active" : "" }}">
                                News
                            </a>
                            <a href="{{ route('products.index') }}"
                            class="navbar-item {{ request()->route()->getName() === 'products.index' ? "is-active" : "" }}">
                                Products
                            </a>
                            <a href="{{ route('orders.index') }}"
                            class="navbar-item {{ request()->route()->getName() === 'orders.index' ? "is-active" : "" }}">
                                Orders
                            </a>
                        --}}
                        <a href="{{ route('categories.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'categories.index' ? "is-active" : "" }}">
                            Categories
                        </a>
                    </div>
                </div>
            </div>
        </nav>

        {{-- resources/views/categories/index.blade.php --}}
        @extends('layouts.app')

        @section('content')
            <div class="p-6">
                <h1 class="text-2xl font-bold mb-4">Categories</h1>

                {{-- Main content --}}
                {{ $slot }}

            </div>
        @endsection


        {{-- Footer --}}
        <footer class="footer">
            <div class="container">
                <div class="columns is-multiline">

                    <div class="column has-text-centered">
                        <div>
                            <a href="/" class="link">Home</a>
                        </div>
                    </div>

                    <div class="column has-text-centered">
                        <div>
                            <a href="https://opensource.org/licenses/MIT" class="link">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                            </a>
                        </div>
                    </div>

                </div>

                <div class="content is-small has-text-centered">
                    <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
                    <p>PROJECT FOOTER HERE</p>
                </div>
            </div>
        </footer>

    </body>
</html>
