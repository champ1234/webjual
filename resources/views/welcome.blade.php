<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<html lang="{{ app()->getLocale() }}">
    <head>    
        <title>Laravel</title>
	@include('includes.head')
    </head>
    <body>
	<div class="wrapper">
	@include('includes.sidebar')
	@include('includes.header')
	@yield('content')
	</div>
    	@include('includes.script')
				
	
       
     
    </body>
</html>
