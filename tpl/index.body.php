<div data-role="page">

	<div data-role="header" id="home">
		<h1><?php
		echo APP_NAME ,' ', VERSION;
		?></h1>
	</div><!-- /header -->

	<div data-role="content">

   <h2>Buttons</h2>
				<a href="#one" data-role="button" data-theme="a">Slider</a>
				<a href="#two" data-role="button" data-theme="b" data-icon="star">Filter</a>
				<a href="#three" data-role="button" data-theme="c" data-icon="home">ListView</a>
				<a href="#four" data-role="button" data-theme="d" data-icon="arrow-l">Swatch D</a>
				<a href="#five" data-role="button" data-theme="e" data-icon="plus">Swatch E</a>
				<a href="#six" data-role="button" data-theme="f" data-icon="grid">Swatch F</a>

</div><!-- /content -->

	<div data-role="footer">
		<h4><a href="mailto:madra@zalsy.com">Madra David</a> </h4>
	</div><!-- /footer -->

</div><!-- /page -->



<!-- Start of first page: #one -->
<div data-role="page" id="one">
<p>
<form>
   <label for="slider-0">Input slider:</label>
   <input type="range" name="slider" id="slider-0" value="25" min="0" max="100" data-theme="a" />
</form>
</p>
</div><!-- /page one -->


<!-- Start of first page: #one -->
<div data-role="page" id="two">
<p>
<ul data-role="listview" data-inset="true" data-filter="true">
	<li><a href="#">Acura</a></li>
	<li><a href="#">Audi</a></li>
	<li><a href="#">BMW</a></li>
	<li><a href="#">Cadillac</a></li>
	<li><a href="#">Ferrari</a></li>
</ul>
</p>
</div><!-- /page one -->







<!-- Start of first page: #one -->
<div data-role="page" id="three">
				<h2>Listviews</h2>

				<ul data-role="listview" data-inset="true" data-divider-theme="a">
					<li data-role="list-divider">Swatch A</li>
					<li data-theme="a"><a href="">Swatch A</a></li>
				</ul>

				<ul data-role="listview" data-inset="true" data-divider-theme="b">
					<li data-role="list-divider">Swatch B</li>
					<li data-theme="b"><a href="">Swatch A</a></li>
				</ul>

				<ul data-role="listview" data-inset="true" data-divider-theme="c">
					<li data-role="list-divider">Swatch C</li>
					<li data-theme="c"><a href="">Swatch A</a></li>
				</ul>

				<ul data-role="listview" data-inset="true" data-divider-theme="d">
					<li data-role="list-divider">Swatch D</li>
					<li data-theme="d"><a href="">Swatch A</a></li>
				</ul>

				<ul data-role="listview" data-inset="true" data-divider-theme="e">
					<li data-role="list-divider">Swatch E</li>
					<li data-theme="e"><a href="">Swatch A</a></li>
				</ul>

				<ul data-role="listview" data-inset="true" data-divider-theme="f">
					<li data-role="list-divider">Swatch F</li>
					<li data-theme="f"><a href="">Swatch A</a></li>
				</ul>
</div>

