<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{asset('storage/'.SiteInformation::getSiteInformation()->favicon)}}" type="image/x-icon">

        <x-layouts.styles-admin/>

        <title>{{SiteInformation::getSiteInformation()->site_name}}</title>


    </head>

    <body >
        {{$slot}}

        <x-layouts.scripts-admin/>
    </body>
</html>
