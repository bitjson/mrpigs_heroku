<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>mrpigs | the monocled, Capitalist pig. </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="styles/c4c38922.main.css">
    <link href="http://fonts.googleapis.com/css?family=Changa+One" rel="stylesheet" type="text/css">
  </head>
  <body ng-app="mrpigsApp">
    <!--[if lt IE 7]>
      <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="components/es5-shim/es5-shim.js"></script>
      <script src="components/json3/lib/json3.min.js"></script>
    <![endif]-->

    <!-- Add your site or application content here -->
    <div class="container">
        <div class="navbar">
            <div class="navbar-inner" ng-controller="NavCtrl">
                <a class="brand" href="#/"><img src="/images/c11cac5c.mrpigslogo.png" width="90px"></a>
                <ul class="nav">
                    <li ng-repeat="route in nav" ng-class="isActiveNav(route.href)"><a href="{{route.href}}">{{route.name}}</a></li>
                </ul>
            </div>
        </div>
        <div ng-view=""></div>
        <small class="mrpigs-footer">(ɔ) 2013 - mrpigs is <a href="http://wiki.mises.org/wiki/Anarcho-capitalism">ancap</a> and doesn't believe in intellectual <em>property</em></small>
    </div>

    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular-resource.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular-cookies.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.0.6/angular-sanitize.min.js"></script>

    <script src="scripts/a4b9e3d7.scripts.js"></script>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      var _gaq=[['_setAccount','UA-40362814-1'],['_trackPageview']];
      (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
      g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
      s.parentNode.insertBefore(g,s)}(document,'script'));
    </script>
  </body>
</html>