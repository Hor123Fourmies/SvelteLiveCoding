<script>

	import {onMount} from "svelte";
	import CourseItem from "./CourseItem.svelte";
	import CourseItemCreate from "./CourseItemCreate.svelte";


	const apiURL = "http://localhost:63342/SvelteJsTemplate-master/api/courses.php";
	const apiBaseURI = "http://localhost:63342/SvelteJsTemplate-master/api";

	let data = [];

	onMount(async function () {
		const response = await fetch(`${apiBaseURI}/courses.php`,
				{
					credentials: "include"
				});
		data = await response.json();
		alert(data[0]);
	});

	function handleClick(event) {
		fetch(`${apiBaseURI}/update.php`, {
			method: 'POST',
			credentials: "include",
			body: JSON.stringify({
				index: event.detail.index,
				purchased: event.detail.purchased
			})
		})
	}

	function createNewArticle(event)
	{
	    alert(event.detail.name);

		var newItem = {name:event.detail.name,purchased:false};
	    data.push(newItem);
	    data = data;

		fetch(`${apiBaseURI}/create.php`, {
			method: 'POST',
			credentials: "include",
			body: JSON.stringify({
				name: event.detail.name
			})
		})
	}

</script>

<main>

	<div id="app">

		<h1>Ma liste de courses</h1>

		<ul>
			{#if data.length == 0}
				<li>Chargement...</li>
			{:else}
				{#each data as item, i}
					<CourseItem index={i} {...item} on:handleClick={handleClick}/>
				{/each}
			{/if}
		</ul>


		<CourseItemCreate on:createNewArticle={createNewArticle} />


	</div>

</main>

<style>

	#app
	{
		margin: auto;
		width: 80%;
		text-align: center;
	}

</style>