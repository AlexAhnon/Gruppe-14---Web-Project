<!-- Navigasjons menu div og lenker -->
<script>
	function myFunction(x) {
		x.classList.toggle("change");
		document.getElementById("myDropdown").classList.toggle("show");
	}
</script>

<div class="dropdown" onclick="myFunction (this)">
	<div class="stripes">
		<div class="bar1"></div>
		<div class="bar2"></div>
		<div class="bar3"></div>
	</div>
	<button>MENY</button>
	<ul id ="myDropdown" class="dropdown-menu">
		<li><a href="index.php">Hjem</a></li>
		<li><a href="#">Kontakt oss</a></li>
		<li><a href="http://westerdals.no/">Westerdals</a></li>
		<li><a href="kultur.php">Nærområder: Kultur</a></li>
		<li><a href="Nærområder: Kultur">Nærområder: Butikker</a></li>
		<li><a href="#">Nærområder: Helse</a></li>
		<li><a href="#">Nærområder: Tjenester</a></li>
	</ul>
</div>

<!-- Header div -->
<a href="index.php">
	<div id="header"></div>
</a>