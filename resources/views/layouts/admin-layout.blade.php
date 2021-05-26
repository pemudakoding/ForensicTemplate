<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <x-layouts.styles-admin/>

        <title>{{SiteInformation::getSiteInformation()->site_name}} | @yield('title')</title>

        @stack('test')
    </head>

    <body >
        <div id="app">
            <div class="main-wrapper">
                <x-layouts.navbar-admin/>
                <x-layouts.sidebar-admin/>
                <div class="main-content">
                    <section class="section">
                        <div class="section-header">
                          <h1>@yield('title')</h1>
                        </div>

                        <div class="section-body">
                        </div>
                    </section>
                    {{$slot}}
                </div>
            </div>
        </div>

        <x-layouts.scripts-admin/>

    </body>
</html>
