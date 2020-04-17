<script>

	import Texte from'./Texte.svelte';
	import { onMount } from "svelte";

	let test = "Bonjour";
	let test2 = "TEST2";
	let test3 = {name:"Hortense"};
</script>

<main>
	<h1 id="{test}">Hello {test}!</h1> {test2} {test3.name}
	<Texte />



	<script>

	</script>

	<div id="app">
		<h1>Ma liste de course</h1>
		<ul>

		</ul>
	</div>










</main>

<style>
	#app
	{
		margin: auto;
		width:80%;
		text-align: center;
	}



	main {
		text-align: center;
		padding: 1em;
		max-width: 240px;
		margin: 0 auto;
	}

	h1 {
		color: #ff3e00;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
	}

	@media (min-width: 640px) {
		main {
			max-width: none;
		}
	}
</style>