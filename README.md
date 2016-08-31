<h1>Website with CMS to learn Symfony</h1>

<ul>
	<li>Symfony 2.8 (annotation, Doctrine, Twig, FOSUser...)</li>
	<li>HTML, CSS, Bootstrap</li>
	<li>PHPUnit</li>
	<li>MySQL</li>
</ul>

<h3>Download</h3>
<pre>
	<code>$ git clone git://github.com/TonyFenton/restaurant.git</code>
</pre>
<h3>Configure</h3>
<p>Configure your database (/app/config/parameters.yml)</p>

<h3>Create database and tables</h3>
<pre>
	<code>$ php app/console doctrine:database:create 
	$ php app/console doctrine:schema:create</code>
</pre>

<h3>Load data fixtures</h3>
<pre>
	<code>$ php app/console doctrine:fixtures:load</code>
</pre>

<h3>Tests</h3>
<pre>
	<code>$ phpunit -c app/ src/AppBundle/Tests/</code>
</pre>

<h3>Enjoy</h3>
<pre>
	<code>$ php app/console server:run</code>
</pre>
<p>http://localhost:8000/admin</p>
<p>Login: krzysztof</p>
<p>Password: jarzyna</p>

<h3>Send me your opinion</h3>
<p>tony.fenton3@gmail.com</p>
