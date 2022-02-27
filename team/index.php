<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Watch Dev Is It?</title>
    <?php include("../includes/_head.php"); ?>
</head>

<body class="team">
    <?php /* Start Header */ ?>
    <?php include("../includes/_header.php"); ?>
    <!-- Start Main Content -->
    <main>
         <section class="section-redacteur">
            <h1>Notre équipe de Rédacteurs</h1>

            <div class="div-redacteur">
                <div>
                    <figure>
                        <img src="/images/kevin.jpg" alt="rédacteur, Kévin">
                    </figure>
                    <h2>Kévin</h2>
                    <p>Campus Remote<br>Wild Code School</p>
                </div>  
                <div>
                    <figure>
                        <img src="/images/oceane.jpg" alt="rédacteur, Océane">
                    </figure>
                    <h2>Océane</h2>
                    <p>Campus Remote<br>Wild Code School</p>
                </div>  
                <div>
                    <figure>
                        <img src="/images/kelly.jpg" alt="rédacteur, Kelly">
                    </figure>
                    <h2>Kelly</h2>
                    <p>Campus Remote<br>Wild Code School</p>
                </div>  
                <div>
                    <figure>
                        <img src="/images/julien.jpg" alt="rédacteur, Julien">
                    </figure>
                    <h2>Julien</h2>
                    <p>Campus Remote<br>Wild Code School</p>
                </div>    
            </div>  
        </section>

        <section class='contact-team'>
                <div class="div-h2-paragraphe">
                    <h3>Contactez-nous</h3>
                    <p>Pour contacter notre équipe et nous partager vos artcles préferés c'est par ici.</p>
                </div>

                <div class="div-form">
                    <form id="form-contact" name="form-contact">
                        <label for="form-email">Adresse email:</label>
                        <input type="email" id="form-email" name="form-email" placeholder="email">
                        <button id="button-contact-team">Soumettre</button>
                    </form>
                </div>
        </section>

    </main>
    <!-- Start Footer -->
    <?php include("../includes/_footer.php"); ?>
</body>
</html>