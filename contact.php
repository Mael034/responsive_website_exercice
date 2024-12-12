<?php 
    require_once "_header.php";
?>
    <main class="container flex">
        <article>
            
            <div id="form" class="articleContent ">
                <h1>Contact</h1>
                <HR>
                <div class="flex contactPage spaceBetween">
                    <div class="contactInfo">
                        <ul>
                            <ul>
                                <li><h4>Adresse :</h4></li>
                                <li>25 rue des fougères</li>
                                <li>89000 Ardèche</li>
                            </ul>
                            <ul>
                                <li><h4>Téléphone :</h4></li>
                                <li>03 56 07 56 67</li>
                            </ul>
                            <ul>
                                <li><h4>Email :</h4></li>
                                <li><a class="mailLink" href="#">contact@contact.fr</a></li>
                            </ul>
                        </ul>
                    </div>
                    <div  class="formContainer">
                        <h3>Nous contacter :</h3>
                        <form action="contact.php#form" method="post">
                            <label for="nom">Votre nom :</label>
                            <input class="input" name ="nom" type="text" id="nom" placeholder="Nom">
                            <label for="prenom">Votre prenom :</label>
                            <input class="input" name ="prenom" type="text" id="prenom" placeholder="Prenom">
                            <label for="nom">Votre email :</label>
                            <input class="input" name ="email" type="text" id="email" placeholder="Email">
                            <label for="message">Votre message :</label>
                            <textarea class="input" rows="4" name="message"cols="15" id="message" placeholder="Message" ></textarea>
                            <input class="formBtn btnContainer flex" name="envoyer" type="submit">
                            <?php
                                if(isset($_POST["envoyer"])){
                                    $nom = $_POST["nom"];
                                    $prenom = $_POST["prenom"];
                                    $email = $_POST["email"];
                                    $message = $_POST["message"];
                                    
                                    if(!empty($email) && !empty($message)){
                                        echo "Merci $prenom pour votre message.";
                                    }else{
                                        echo "Veuillez remplir les champs obligatoire.";
                                    }
                                }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </article>
    <?php 
        require_once "_aside.php";
    ?>
    </main>
<?php 
    require_once "_footer.php";
?>