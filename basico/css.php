<div class="titulo">integração html</div>
<h1 center>
    <?php
    echo 'olá';
    echo'<small>';
    echo'mundo';
    echo'</small>';
    ?>
</h1>
<?= "<div center azul> Outra forma de me 'expressar'!</div> "?>
<br>
<div center><button dobro><?= "legal" ?> </button></div>
    
<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: 2rem;
    }
</style>