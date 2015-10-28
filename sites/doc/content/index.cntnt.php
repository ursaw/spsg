<h1>The Simple PHP Site Generator</h1>
<p>
Using PHP (generateSite.php, resp. generateAll.php) to generate static pages.
</p>
<p>
Each <code>content/XX.cntnt.php</code> will generate an <code>html/XX.html</code>.
Additional pages can be stored to folder <code>html</code> of each site.
</p>

<h2>File layout
</h2>

<div class="highlight"><pre><code class="language-bash" data-lang="bash">SPSG/
+-- generateAll.php
+-- generateSite.php
+-- config.inc.php
+-- sites/
¦   +-- example01
¦   ¦   +-- content
¦   ¦   ¦   +-- HEADER.tmpl.php
¦   ¦   ¦   +-- FOOTER.tmpl.php
¦   ¦   ¦   +-- index.cntnt.php
¦   ¦   +-- html
¦   +-- doc
¦   ¦   +-- content
¦   ¦   ¦   +-- HEADER.tmpl.php
¦   ¦   ¦   +-- FOOTER.tmpl.php
¦   ¦   ¦   +-- index.cntnt.php
¦   ¦   ¦   +-- why.cntnt.php
¦   ¦   +-- html
¦   ¦   ¦   +-- css
¦   ¦   ¦   +-- fonts
¦   ¦   ¦   +-- js
¦   +-- myProject
¦   ¦   +-- content
¦   ¦   ¦   +-- HEADER.tmpl.php
¦   ¦   ¦   +-- FOOTER.tmpl.php
¦   ¦   ¦   +-- index.cntnt.php
¦   ¦   ¦   +-- XXX
¦   ¦   +-- html
¦   ¦   ¦   +-- XXX
</code></pre></div>

<h2>Meaning of files</h2>
<h3>Header / Footer</h3>
Rough template of all pages of the site. An Menu is typically located as last part of header.

<h2>more Aspects</h2>
<ul>
<li>it make sense to write same php-code in the <code>tmpl.php</code> or <code>cntnt.php</code> pages.</li>
<li>links to differnt pages can be direct written</li>
<li>you need at least the files <code>FOOTER.tmpl.php</code>, <code>HEADER.tmpl.php</code> and <code>index.cntnt.php</code>. Dont forget the index.cntnt.php which will be the index.html</li>


</ul>


<h2>PHP- Properties</h2>
<dl class="dl-horizontal">
	<dt><code>$page</code></dt>
	<dd>actual page to generate, without the extension .HTML. Can be used only readable
	</dd>
	
	<dt><code>$site</code></dt>
	<dd>Which webpage under directory sites should be geneartes
	</dd>
	
	<dt><code>$b_tidyhtml</code></dt>
	<dd>Tidy (if accesseble) you html code. you can apply the <code>$tidyconfig</code>.<br>
	This doc wasn't tidyed, because bootstrao got problem with the tidy..
	</dd>

</dl>
