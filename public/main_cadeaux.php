<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.17.5/dist/css/uikit.min.css">
    <link rel="stylesheet" href="/css/style.css"/>
    <title>Envoi liste de cadeaux</title>
</head>
<body class="lw-body-cadeaux">

<main>
    
    <h1 class="uk-heading-small uk-text-center h1-goddies"><span class="title-goddies">Envoies ta liste de cadeaux pour le Père Noël</span></h1>

    <div class="lw-card-container">
        <div class="uk-card uk-card-default uk-child-width-1-2@s uk-margin lw-card-div">
            <div class="uk-card-media-left uk-cover-container">
                <img src="images/santa_list.jpg" alt="" class="lw-card-img" uk-cover>
                <canvas width="400" height="400"></canvas>
            </div>
            <div>
                
                <div class="uk-card-body">
                    <h3 class="uk-card-title lw-card-title">Envoie de ta liste</h3>
                    <p class="lw-card-p">Le Père Noël attend ta liste, ne fait pas le timide! <br> De toute façon il y a très peu de chance qu'il la lise. </p>
                    <p class="lw-card-p">Pour être sûr, n'hésite surtout pas à cocher l'option ci-dessous, sans l'accord de tes parents. Evidemment. </p>
                    <form method="post">   
                        <label class="container">Option lecture garantie: + 200€
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    
                        <input type="file" id="actual-btn"/>
                        <br>
                        <div class="lw-div-submit-button">
                            <input type="submit" class="lw-submit-button"/>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>

    <div class="lw-button-div">
        <a><button type="submit" id="myLink">Fun fact!</button></a>
        <br>
        <div id="result"></div>
    </div>

    

</main>




    <script>
    
    const myLink = document.getElementById('myLink');
    const result = document.getElementById('result');

    myLink.addEventListener('click', () => {
        fetch("https://api.chucknorris.io/jokes/random")
        .then(response => response.json())
        .then(data => result.innerHTML = data.value)
        .catch(err => console.error(err))
    
        //result.innerHTML = '<p>Bien-sûr</p>';

    });

   
    

</script>
</body>
</html>