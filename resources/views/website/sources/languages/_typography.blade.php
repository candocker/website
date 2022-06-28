@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
		<main id="uix-maincontent">
		   <!-- Content  
			====================================================== -->
			<section class="uix-spacing--s">
				<div class="container uix-entry__content uix-list uix-list--normal uix-table uix-table--bordered">
						<div class="row">
							<div class="col-12">
									<h1>Header one</h1>
									<h2>Header two</h2>
									<h3>Header three</h3>
									<h4>Header four</h4>
									<h5>Header five</h5>
									<h6>Header six</h6>
									<hr>
									<h1 class="uix-spacing--no">Header one ( no spacing )</h1>
									<h1 class="uix-typo--style-normal">Header one ( normal )</h1>         
									<h1 class="uix-typo--style-uppercase">Header one ( uppercase )</h1>
									<h1 class="uix-typo--style-bold">Header one ( bold )</h1>                           
									<h1 class="uix-typo--style-italic">Header one ( italic )</h1>
									<h1 class="uix-typo--style-noitalic">Header one ( no italic )</h1> 
									<h1 class="uix-typo--style-underline">Header one ( underline )</h1> 
									<h1 class="uix-typo--style-tiny">Header one ( tiny )</h1>
									<h1 class="uix-typo--color-primary">Header one ( color primary )</h1>
									<h1 class="uix-typo--color-highlight">Header one ( color highlight )</h1>
									<h1 class="uix-typo--color-sub">Header one ( color sub )</h1>
									<h1 class="uix-typo--color-white">Header one ( color white )</h1>
									<p class="uix-typo--h5 uix-typo--style-normal">Super/Duper/Long/NonBreaking/Path/Name/To/A/File/That/Is/Way/Deep/Down/In/Some/Mysterious/Remote/Desolate/Part/Of/The/Operating/System/To/A/File/That/Just/So/Happens/To/Be/Strangely/Named/Supercalifragilisticexpialidocious.txt</p>
									<blockquote>
										<p>Stay hungry. Stay foolish.</p>
									</blockquote>
									<p>Multi line blockquote with a cite reference:</p>
									<blockquote>
										<p>People think focus means saying yes to the thing you&#8217;ve got to focus on. But that&#8217;s not what it means at all. It means saying no to the hundred other good ideas that there are. You have to pick carefully. I&#8217;m actually as proud of the things we haven&#8217;t done as the things I have done. Innovation is saying no to 1,000 things. <cite>Steve Jobs &#8211; Apple Worldwide Developers&#8217; Conference, 1997</cite></p>
									</blockquote>
									<h2>Tables</h2>
									<table>
										<tbody>
											<tr>
												<th>Employee</th>
												<th class="views">Salary</th>
												<th></th>
											</tr>
											<tr class="odd">
												<td><a href="http://john.do/">John Saddington</a></td>
												<td>$1</td>
												<td>Because that&#8217;s all Steve Job&#8217; needed for a salary.</td>
											</tr>
											<tr class="even">
												<td><a href="http://tommcfarlin.com/">Tom McFarlin</a></td>
												<td>$100K</td>
												<td>For all the blogging he does.</td>
											</tr>
											<tr class="odd">
												<td><a href="http://jarederickson.com/">Jared Erickson</a></td>
												<td>$100M</td>
												<td>Pictures are worth a thousand words, right? So Tom x 1,000.</td>
											</tr>
											<tr class="even">
												<td><a href="http://chrisam.es/">Chris Ames</a></td>
												<td>$100B</td>
												<td>With hair like that?! Enough said&#8230;</td>
											</tr>
										</tbody>
									</table>      
								<ul>
									<li>Above the comments</li>
									<li>Below the comments</li>
									<li>Included within the normal flow of comments</li>
									<ul>
										<li>Above the comments</li>
										<li>Below the comments</li>
										<li>Included within the normal flow of comments</li>
									</ul>      
								</ul>    
								<ol>
									<li>Above the comments</li>
									<li>Below the comments</li>
									<li>Included within the normal flow of comments</li>
									<ol>
										<li>Above the comments</li>
										<li>Below the comments</li>
										<li>Included within the normal flow of comments</li>
									</ol>   
								</ol>
								<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. <a href="#">This is link.</a></p>
								<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Cras mattis consectetur purus sit amet fermentum. Donec id elit non mi porta gravida at eget metus.</p>
								<p class="uix-typo--dropcap">Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nullam quis risus eget urna mollis ornare vel eu leo. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
<pre>
$: > Booting systems...
$: > Total memory found: 256kb
$: > Scanning for bootable media    ------------ 100%
$: > No media found. Booting from network address 3E:40:9C:75
$: > Loading BIOS 2.3               ------------ 100%
$: > Reticulating splines           ------------ 100%
$: > Booting console                ------------ 100%
</pre>						
<pre class="uix-precode"><label>CSS</label><code>#wrapper {
  padding:5%;
  margin:0 auto;
}</code>
</pre>		                 
<pre class="uix-precode uix-precode--nolebel"><code>#wrapper {
  padding:5%;
  margin:0 auto;
}</code>
</pre>									
							</div>
						</div>
						<!-- .row end -->
				</div>
				<!-- .container end -->
			</section>   
		</main>
@endsection