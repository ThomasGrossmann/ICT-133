<?php
/*
 * Programme : Exo Php
 * Auteur : Thomas Grossmann
 * Date : 31.01.2020
 */

ob_start();
$title = "SchoolBook2Sell - Login";

?>
    <div class="container">
        <form class="form" method="POST" action="index.php?action=connect">
            <div class="row">
                <div class="service">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="text-center">
                            <h2>Login</h2>
                            <p>Connectez-vous pour accéder à vos données</p>
                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
                                    <h4>Login</h4>
                                    <div class="icon">
                                        <i class="fa fa-user fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input class="form-control" placeholder="login" type="text" name="username">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <h4>Mot de passe</h4>
                                    <div class="icon">
                                        <i class="fa fa-ellipsis-h fa-3x"></i>
                                    </div>
                                    <div class="ficon">
                                        <input class="form-control" placeholder="mot de passe" type="password" name="password">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.4s">
                                    <h4>Avatar</h4>
                                    <div class="ficon">
                                        <input type="radio" name="avatar"><img src="avatar/gerard_menfin_avatar.png">
                                        <input type="radio" name="avatar"><img src="avatar/lea_ricoverd_avatar.png">
                                        <input type="radio" name="avatar"><img src="avatar/norma_leman_avatar.png">
                                        <input type="radio" name="avatar"><img src="avatar/paul_hauchon_avatar.png">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
                                    <div class="ficon">
                                        <input type="submit" class="btn btn-primary" value="Connexion">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
<?php
$content = ob_get_clean();
require "gabarit.php";
?>