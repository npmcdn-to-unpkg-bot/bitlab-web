@extends('layouts.master')

@section('content')

	<div class="content">
		<div class="row">
            <div class="col-lg-12">
                <h1>
                    <div class="text-primary">2016.04.21</div>
                    <div>Starting off easy</div>
                </h1>
                <p class="lead">A very basic first look at building a website. Installing a text editor and using a bootstrap template as the starting point.</p>
                
                <hr>
                <p>Welcome!</p>
                <p>
                    To start off easy building this website, I've downloaded from <a href="http://startbootstrap.com" target="_blank">StartBootstrap</a> the <a href="http://startbootstrap.com/template-overviews/bare/" target="_blank">Bare Template</a>.<br>
                    It comes already with a simple navbar, including a few navigation links and a place for your logo, we'll look into that soon.
                </p>
                <p>
                    I'm writing these lines using <a href="https://atom.io/">Atom</a>, a free and open source code editor developed by the github team. It is cross-platform, supports many diferent languages and it's pretty powerfull in many aspects. It also offers a simple interface and is quite beautiful to look at!
                </p>
                <p>
                    Open the index.html file with Atom - Don't be intimidated by all the stuff in the file, we'll ignore most of it for now. Scroll down to where you see <code>&lt;!-- Page Content --&gt;</code>, we only need to change this bit now to start adding our own contents to the webpage.
                </p>
                <br>
<pre class="prettyprint linenums:68">
&lt;!-- Page Content --&gt;
&lt;div class="container"&gt;

    &lt;div class="row"&gt;
        &lt;div class="col-lg-12 text-center"&gt;
            &lt;h1&gt;A Bootstrap Starter Template&lt;/h1&gt;
            &lt;p class="lead"&gt;Complete with pre-defined file paths that you won't have to change!&lt;/p&gt;

            &lt;ul class="list-unstyled"&gt;
                &lt;li&gt;Bootstrap v3.3.6&lt;/li&gt;
                &lt;li&gt;jQuery v1.11.1&lt;/li&gt;
            &lt;/ul&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- /.row --&gt;

&lt;/div&gt;
&lt;!-- /.container --&gt;
</pre>

			<br>
			<p>
                So go ahead and right your own text, and note the tags <code>&lt;p&gt;Some text&lt;/p&gt;</code>, <code>&lt;h1&gt;Some text&lt;/h1&gt;</code>, as well as the <code>div</code>, <code>ul</code>, <code>li</code>, ...<br>
                These are called html tags and they help you style your document. The <code>&lt;p&gt;</code> denotes a standard paragraph and <code>&lt;h1&gt;</code> is the largest standard heading available.
                Look in <a href="http://www.w3schools.com/tags/" target="blank">W3Schools</a> for a list of this tags and some examples on how they can be used. 
            </p>
            </div>
        </div>
        <!-- /.row -->
	</div>

@stop