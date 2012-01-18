<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Adds and Cuts Tax Impact Calculator</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link href='http://fonts.googleapis.com/css?family=Concert+One|Alfa+Slab+One' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>

  <div id="container">
    <h1>Adds &amp; Cuts Tax Impact Calculator</h1>
    <div id="main" role="main">
		<p>Check out the <a class='checkout' href="http://london.ca/d.aspx?s=/Budget/Budget_2012/adds_and_cuts.htm" target="_blank">2012 proposed Adds &amp; Cuts</a><span class='hidden'> or check out a <a>random proposal</a></span>.</p>
		<p>
			<label for="percent">Impact on 2012 property tax levy:</label>
			%<input id="percent" value="0.02" />
		</p>
		<p id="result">
			Increase to each Londoner's Annual Tax: <span class='increase'>$0.56</span><br />
			<small>That's less than <em class='num'>4</em> <span class="type">timbits</span> per year!</small>
		</p>
		<h2>How do you feel about this?</h2>
		<p>
			<a href="mailto:budget@london.ca?subject=Adds and Cuts Public Feedback">Email the city</a><br />
			<a href="http://twitter.com/#!/londoncomms">Tweet at the city</a><br />
			<a href="tel:5196614638">Call at the city: (519) 661-4638</a><br />
			<br />
			&nbsp;
			<br />
			<a id="tweet" href="http://www.twitter.com/intent/tweet?hashtags=ldnont&text=Adds+and+Cuts+Tax+Impact+Calculator">Tweet This</a><br />
			<a id="code" href="https://github.com/gavinblair/Adds-and-Cuts">Fork This</a>
		</p>
		<p id="fineprint">
			We're using an average property owner tax of $2799. Also, <span class="type">timbits</span> are $<span class="cost">0.15</span> each.
		</p>
    </div>
    <footer>
		
    </footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
