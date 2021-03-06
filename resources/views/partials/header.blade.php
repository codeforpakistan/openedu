<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        @if (isset($description))
        <meta name="description" content="{{$description}}">
        @endif
        @if (isset($title))
        <title>{{$title}} - {{env('APP_NAME')}}</title>
        @else
        <title>{{env('APP_NAME')}}</title>
        @endif
        <link rel="shortcut icon" href="/favicon.ico">
        <script src="/assets/scripts/jquery.min.js"></script>
        <script src="/assets/scripts/bootstrap.min.js" defer></script>
        <script src="/assets/scripts/app.js" defer></script>
        <link href="/assets/styles/bootstrap.min.css" rel="stylesheet">
        <link href="/assets/styles/font-awesome.min.css" rel="stylesheet">
        <link href="/assets/styles/app.css" rel="stylesheet">
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header>
            <nav class="navbar navbar-static-top navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/">Avaaz</a>
                    </div>
                    
                    <div class="collapse navbar-collapse navbar-right">
                        <form action="/search" class="navbar-form navbar-left" role="search">
                            <input type="search" name="q" class="form-control typeahead" placeholder="Search&hellip;" required>
                            <button type="submit" class="form-control">Go</button> 
                        </form>
                        <ul class="nav navbar-nav">
                            <li><a href="/random"><i class="fa fa-random"></i></a></li>
                            <li><a href="/profile"><i class="fa fa-lg fa-user"></i></a></li>
                            <li><a href="/settings"><i class="fa fa-lg fa-cog"></i></a></li>
                            <li><a href="/auth/logout"><i class="fa fa-lg fa-sign-out"></i></a></li>
                        </ul>

                        <a href="/auth" class="btn btn-success navbar-btn">Log in</a>
                    </div>
                </div>
            </nav>
        </header>