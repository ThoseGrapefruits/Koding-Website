<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Logan Moore</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="style.css">
<!--[if IE]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Ubuntu+Mono' rel='stylesheet' type='text/css'>
</head>
<body class="php">
<div id="container">
	<div id="main" role="main" class="hellobox">
		<header style="position:absolute"><a href="http://koding.com">Koding.com</a></header>
		<h1><?php echo 'About Me'; ?></h1>
	</div>
	<nav>
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a class="active" href="about-me.php">About Me</a></li>
	</ul>
	</nav>
	<br>
	<p>I saw a play very recently called <b>The Who & The What</b>. Besides being a fantastic play, and among the many things I learned from it, the most valuable lesson for me was the separation of the "who" and the "what" in the judgement of a person.
	<br><br>
	The "what" are the tangible items, which are listed in the <code>Logan</code> Java class below. They can be described, quantified, and encapsulated on their own away from the person.
	<br><br>
	The "who" is a deeper aspect of the person, one that can't be described with words. The way the play described it was that it was what was left of a person when you take away all of their achievements and tangible values, and this piece cannot be separated from the person as the former can.
	<br><br>
	It is essentially a quantitative vs. qualitative judgement of a person. The quantitative assessment shows where they have been, while the qualitative shows where they will go. </p>
	<br><hr>
	<pre class="prettyprint">
class Logan extends Human
{
    final String name = "Logan Moore";
    
    String location = "San Diego, CA";
    
    HashMap < String, String > otherAccounts
    {{
        put( "GitHub", "<a target="_blank" href="https://github.com/ThoseGrapefruits/">ThoseGrapefruits</a>" );
    }}
    
    URL website = new URL("<a href="http://loganmoore.me">http://loganmoore.me</a>")
    
    ArrayList < String > experience = new ArrayList < String >()
    {{
        add("Python");
        add("Java");
        add("Objective-C");
        add("Server hosting");
        add("Wordpress");
        add("Networking");
        add("Web design");
    }};
    
    ArrayList < String > hobbies = new ArrayList < String >()
    {{
        add("Videogames");
        add("Photography");
        add("Graphic Design");
        add("Programming");
        add("Learning");
    }};
}
	</pre>
	<footer>
	<h6>Made by <a href="http://loganmoore.me">Logan Moore</a>.</h2>
	</footer>
</div>
<script type="text/javascript" src="/js/retina.js"></script>
<script src="/js/prettify/run_prettify.js?skin=sons-of-obsidian"></script>
</body>
</html>
