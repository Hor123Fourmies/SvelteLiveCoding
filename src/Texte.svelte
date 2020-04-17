<script>
    import Texte2 from'./Texte2.svelte';

    let count = 0;

    $:doubled = count * 4;

    function buttonClick()
    {
        alert(1);
        count+=1
    }
</script>

<button on:click="{buttonClick}">
    Cliquez-moi | Vous avez cliqué {doubled} fois
</button>;

<Texte2 />