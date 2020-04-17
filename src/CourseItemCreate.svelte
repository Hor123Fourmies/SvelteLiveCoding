<script>

    import { createEventDispatcher } from 'svelte';

    let inputValue = "";

    function sendForm()
    {
        dispatch('createNewArticle',{
            name : inputValue
        })
    }

</script>

<input type="text" bind:value="{inputValue}">
<button on:click={sendForm}>Envoyer</button>