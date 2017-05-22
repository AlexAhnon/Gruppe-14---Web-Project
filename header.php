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
		<li><a href="om-siden.php">Om siden</a></li>
		<li><a href="kultur.php">Kultur</a></li>
		<li><a href="mat-og-drikke.php">Mat & drikke</a></li>
		<li><a href="helse.php">Helse</a></li>
		<li><a href="tjenester.php">Tjenester</a></li>
	</ul>
</div>

<!-- Header div -->
<a href="index.php">
	<div id="header">
		<h1>Nærmiljøet ved Campus Fjerdingen</h1>
	</div>
</a>