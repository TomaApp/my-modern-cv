<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="sass/style.css" />
        <link rel="icon" type="image/png" href="images/profil/doggo.png" />
        <title>NGUYEN-PAGES Minh Thanh</title>
    </head>

    <body>
        <header>
            <section class="block-header">
                <div class="block-header__image-profil">
                    <img src="images/profil/profil.png" alt="photo" width="150" height="150">
                </div><br>

                <h1 class="block-header__nom-prenom">
                    NGUYEN-PAGES Minh Thanh
                </h1><br>

                <h2 class="block-header__description">
                    Étudiant en Licence Informatique (L3)
                </h2>
            </section>
        </header>

        <nav>
            <ul class="menu">
                <a href="#a-propos"><li class="menu__link">À propos</li></a>
                <a href="#formation"><li class="menu__link">Ma formation</li></a>
                <a href="#experience"><li class="menu__link">Mes expériences</li></a>
                <a href="#competence"><li class="menu__link">Mes compétences</li></a>
                <a href="#contact"><li class="menu__link">Contact</li></a>
                <a href="#me-retrouver"><li class="menu__link">Me retrouver</li></a>
            </ul>
        </nav>
        <?php
echo 'okok';
?>

        <!-- block page entiere -->
        <section class="block-page">
            <!-- block a propos -->
            <section class="block-a-propos" id="a-propos">
                <h1 class="block-a-propos__titre">Mon histoire</h1>
                <div class="block-a-propos__content">
                    <p>
                        Mensarum enim voragines et varias voluptatum inlecebras, ne longius progrediar, praetermitto illuc transiturus quod 
                        quidam per ampla spatia urbis subversasque silices sine periculi metu properantes equos velut publicos signatis 
                        quod dicitur calceis agitant, familiarium agmina tamquam praedatorios globos post terga trahentes ne Sannione quidem,
                        ut ait comcus, domi relicto. quos imitatae matronae complures opertis capitibus et basternis per latera civitatis cuncta discurrunt.
                    </p>
                    <img src="images/a-propos/story-bg.jpg" alt="background histoire">
                </div>
            </section>

            <!-- block formation -->
            <section class="block-formation" id="formation">
                <h1 class="block-formation__title">Ma formation</h1>

                <section class="timeline">
                    <!-- bloc gauche -->
                    <div class="block-timeline-left">
                        <h2 class="block-timeline-left__annee">2020</h2>
                        <p class="block-timeline-left__school">
                            Université Paul Sabatier - Toulouse 3
                        </p>
                        <p class="block-timeline-left__content"> 
                            Master Informatique
                        </p>
                        <div class="block-timeline-left__logo">

                        </div>
                        <div class="block-timeline-left__branch">
                            <div class="block-timeline-left__branch-top"></div>
                            <div class="block-timeline-left__mid-branch"></div>
                            <div class="block-timeline-left__branch-bot"></div>
                        </div>
                    </div>
                    <!-- bloc droit -->
                    <div class="block-timeline-right">
                        <h2 class="block-timeline-right__annee">2019</h2>
                        <p class="block-timeline-right__school">
                            Université Paul Sabatier - Toulouse 3
                        </p>
                        <p class="block-timeline-right__content"> 
                            3eme année de Licence Informatique
                        </p>
                        <div class="block-timeline-right__logo">
                            
                        </div>
                        <div class="block-timeline-right__branch">
                            <div class="block-timeline-right__branch-top"></div>
                            <div class="block-timeline-right__mid-branch"></div>
                            <div class="block-timeline-right__branch-bot"></div>
                        </div>
                    </div>
                    <div class="block-timeline-left">
                        <h2 class="block-timeline-left__annee">2018</h2>
                        <p class="block-timeline-left__school">
                            Université Paul Sabatier - Toulouse 3
                        </p>
                        <p class="block-timeline-left__content"> 
                            2eme année de Licence Informatique
                        </p>
                        <div class="block-timeline-left__logo">

                        </div>
                        <div class="block-timeline-left__branch">
                            <div class="block-timeline-left__branch-top"></div>
                            <div class="block-timeline-left__mid-branch"></div>
                            <div class="block-timeline-left__branch-bot"></div>
                        </div>
                    </div>
                    <div class="block-timeline-right">
                        <h2 class="block-timeline-right__annee">2017</h2>
                        <p class="block-timeline-right__school">
                            Université Paul Sabatier - Toulouse 3
                        </p>
                        <p class="block-timeline-right__content"> 
                            1ere année de Licence Informatique
                        </p>
                        <div class="block-timeline-right__logo">
                            
                        </div>
                        <div class="block-timeline-right__branch">
                            <div class="block-timeline-right__branch-top"></div>
                            <div class="block-timeline-right__mid-branch"></div>
                            <div class="block-timeline-right__branch-bot"></div>
                        </div>
                    </div>
                    <div class="block-timeline-left">
                        <h2 class="block-timeline-left__annee">2014-2017</h2>
                        <p class="block-timeline-left__school">
                            Lycée Pierre Paul Riquet - Saint-Orens de Gameville
                        </p>
                        <p class="block-timeline-left__content"> 
                            Bac S Si, option ISN (Informatique Sciences Numériques)
                        </p>
                        <div class="block-timeline-left__logo">

                        </div>
                        <div class="block-timeline-left__branch">
                            <div class="block-timeline-left__branch-top"></div>
                            <div class="block-timeline-left__mid-branch"></div>
                            <div class="block-timeline-left__branch-bot"></div>
                        </div>
                    </div>
                </section>

            </section>

            <section class="block-competence" id="competence">
                <h1 class="block-competence__titre">
                    COMPÉTENCES
                </h1>

                <h2 class="block-competence__titre-langue">
                    Langues
                </h2>

                <section class="block-competence__block-langue">
                    <div>
                        <img src="images/competences/france-flag.png" alt="Français" />
                        <strong>Français</strong><br>
                        <span>Langue maternelle</span>
                    </div>
                    <div>
                        <img src="images/competences/vietnam-flag.png" alt="Vietnamien" />
                        <strong>Vietnamien</strong><br>
                        <span>Bilingue</span>
                    </div>
                    <div>
                        <img src="images/competences/uk-flag.png" alt="Anglais" />
                        <strong>Anglais</strong><br>
                        <span>Niveau B2</span>
                    </div>
                </section>
                
                <h2 class="block-competence__titre-technique">
                    Techniques
                </h2>

                <section class="block-competence__block-technique">
                    <div>
                        <img src="images/competences/c.png" alt="c" />
                        <strong>C</strong><br>
                        <span>★★★★★</span>
                    </div>
                    <div>
                        <img src="images/competences/java.png" alt="c" />
                        <strong>Java</strong><br>
                        <span>★★★★☆</span>
                    </div>
                    <div>
                        <img src="images/competences/html-css.png" alt="c" />
                        <strong>HTML/CSS</strong>
                        <br><span>★★★★★</span>
                    </div>
                    <div>
                        <img src="images/competences/php.png" alt="c" />
                        <strong>PHP</strong><br>
                        <span>★★★★☆</span>
                    </div>
                    <div>
                        <img src="images/competences/sql.png" alt="c" />
                        <strong>SQL</strong><br>
                        <span>★★★★☆</span>
                    </div>
                    <div>
                        <img src="images/competences/python.png" alt="c" />
                        <strong>Python</strong><br>
                        <span>★★★☆☆</span>
                    </div>
                    <div>
                        <img src="images/competences/ocaml.png" alt="c" />
                        <strong>Ocaml</strong><br>
                        <span>★★★☆☆</span>
                    </div>
                </section>
            </section>

            <section class="block-experience" id="experience">
                <h1 class="block-experience__title">Mes expériences</h1>
                <!-- <section class="timeline-experience">
                    <div class="panel-experience-left">
                        <div class="panel-experience-left__title">
                            Projet ISN “Guitar Hero”
                        </div>
                        <div class="panel-experience-left__content">
                            Développement du jeu de rythme “Guitar Hero”, avec
                            une interface interactive gérant l’appui des touches du
                            clavier et contenant le score, le combo et les notes à
                        </div>
                    </div>
                </section> -->
                <img src="images/preview.png">
            </section>

            <section class="block-contact" id="contact">
                <h1 class="block-contact__titre">Ecrivez moi ... pour plus d'informations</h1>
                <section class="block-contact__input">
                    <input type="text" name="input-nom" placeholder="Nom">
                    <input type="email" name="input-email" placeholder="Email">
                    <textarea name="input-message" placeholder="Message"></textarea>
                    <input type="submit" value="Envoyer">
                </section>
            </section>

            <section class="block-me-retrouver" id="me-retrouver">
                <h1 class="block-me-retrouver__titre">
                    Retrouvez moi aussi sur 
                </h1>
                <section class="block-me-retrouver__social-media">
                    <img src="images/me-retrouver/facebook.png" alt="facebook" onclick="window.location.href='https:\/\/www.facebook.com/minhthanh.nguyen.16/'">
                    <img src="images/me-retrouver/linkedin.png" alt="linkedin" onclick="window.location.href='https:\/\/fr.linkedin.com/in/minh-thanh-nguyen-1875b6194?trk=people-guest_people_search-card'">
                    <img src="images/me-retrouver/mail.png" alt="mail">
                </section>
            </section>
        </section>
    </body>

    <footer>
        <p>Site réalisé par NGUYEN-PAGES Minh Thanh.</p>
        <p>Tous droits réservés.</p>
    </footer>
</html>