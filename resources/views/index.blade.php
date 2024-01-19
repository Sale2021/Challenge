@extends('layouts.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid header-carousel px-0 mb-5">
    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7 text-start">
                                <h1 class="display-5 text-white animated slideInRight mb-3">Votre Santé, Notre Priorité,
                                    Une Connexion Numérique pour un Bien-être Total! </h1>
                                <p class="mb-5 animated slideInRight">Soyez aux commandes de votre santé avec
                                    KénéyaYiri! Une plateforme numérique complète intégrant la gestion des dossiers
                                    médicaux, la planification des rendez-vous, le suivi des signes vitaux, et bien plus
                                    encore. Connectez-vous à votre bien-être dès aujourd'hui!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-lg-7 text-end">
                                <h1 class="display-6 text-white animated slideInLeft mb-2">KénéyaYiri: : Où la Science
                                    et la Compassion se Rencontrent. Votre Santé, Notre Engagement, Ensemble vers un
                                    Futur en Pleine Santé!</h1>
                                <p class="mb-5 animated slideInLeft">Découvrez une nouvelle ère de soins de santé
                                    personnalisés avec KénéyaYiri. Notre équipe de médecins dévoués et d'assistants de
                                    laboratoire hautement qualifiés s'engage à vous offrir une expérience
                                    exceptionnelle. Grâce à une technologie de pointe et une approche humaine, nous
                                    mettons en œuvre une prise en charge complète, de la consultation médicale à
                                    l'analyse de laboratoire.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
</div>
<!-- Carousel End -->


<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="row g-0">
                    <div class="col-6">
                        <img class="img-fluid" src="img/about-1.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="img/about-2.jpg">
                    </div>
                    <div class="col-6">
                        <img class="img-fluid" src="img/about-3.jpg">
                    </div>
                    <div class="col-6">
                        <div
                            class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center">
                            <div class="icon-box-light">
                                <i class="bi bi-award text-dark"></i>
                            </div>
                            <h1 class="display-1 text-white mb-0" data-toggle="counter-up">2</h1>
                            <small class="fs-5 text-white">ans d'expérience</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-4">Docteurs Dévoués, Pharmaciens Experts, Technologies de Laboratoire de Pointe
                    : Une Expérience de Santé Inégalée</h1>
                <div class="row g-4 g-sm-5 justify-content-center">
                    <div class="col-sm-6">
                        <div class="about-fact btn-square flex-column rounded-circle bg-primary ms-sm-auto">
                            <p class="text-white mb-0">Awards Winning</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                    <div class="col-sm-6 text-start">
                        <div class="about-fact btn-square flex-column rounded-circle bg-secondary me-sm-auto">
                            <p class="text-white mb-0">Cas Complétés </p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="about-fact mt-n130 btn-square flex-column rounded-circle bg-dark mx-sm-auto">
                            <p class="text-white mb-0">Clients Satisfait</p>
                            <h1 class="text-white mb-0" data-toggle="counter-up">9999</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Features Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-0 feature-row">
            <!-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-award text-dark"></i>
                        </div>
                        <h5 class="mb-3">Award Winning</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div> -->
            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people text-dark"></i>
                    </div>
                    <h5 class="mb-3">Personnels Dévoués</h5>
                    <p class="mb-0">Ils travaillent ensemble pour vous offrir des soins personnalisés et une expérience
                        de santé exceptionnelle.</p>
                </div>
            </div>
            <!-- <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                    <div class="feature-item border h-100 p-5">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-cash-coin text-dark"></i>
                        </div>
                        <h5 class="mb-3">Fair Prices</h5>
                        <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>
                    </div>
                </div> -->
            <div class="col-md-6 col-lg-6 wow fadeIn" data-wow-delay="0.7s">
                <div class="feature-item border h-100 p-5">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-headphones text-dark"></i>
                    </div>
                    <h5 class="mb-3">24/7 Support</h5>
                    <p class="mb-0">KénéyaYiri vous assure un soutien ininterrompu 24/7</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Features Start -->
<div class="container-fluid feature mt-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-0">
            <div class="col-lg-6 pt-lg-5">
                <div class="bg-white p-5 mt-lg-5">
                    <h1 class="display-6 mb-4 wow fadeIn" data-wow-delay="0.3s">L'innovation et la technologie au
                        service de l'amélioration de la santé de tout le monde.</h1>
                    <p class="mb-4 wow fadeIn" data-wow-delay="0.4s">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Curabitur tellus augue, iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem
                        porttitor, malesuada arcu quis, fringilla risus. Pellentesque eu consequat augue.</p>
                    <div class="row g-5 pt-2 mb-5">
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-plus text-dark"></i>
                            </div>
                            <h5 class="mb-3">Docteurs Expérimentés</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-check-all text-dark"></i>
                            </div>
                            <h5 class="mb-3">Examens Médicaux</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.3s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-p-square text-dark"></i>
                            </div>
                            <h5 class="mb-3">Phamarcie de confiance</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="col-sm-3 wow fadeIn" data-wow-delay="0.4s">
                            <div class="icon-box-primary mb-4">
                                <i class="bi bi-person-hearts text-dark"></i>
                            </div>
                            <h5 class="mb-3">Conseils et Suivi</h5>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 wow fadeIn" data-wow-delay="0.5s" href="">Explore More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row h-100 align-items-end">
                    <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                        <div class="d-flex align-items-center justify-content-center" style="min-height: 300px;">
                            <button type="button" class="btn-play" data-bs-toggle="modal"
                                data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Features End -->


<!-- Video Modal Start -->
<div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- 16:9 aspect ratio -->
                <div class="ratio ratio-16x9">
                    <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video Modal End -->


<!-- Service Start -->
<div class="container-fluid container-service py-5">
    <div class="container pt-5">
        <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="display-6 mb-3">Service de Santé Fiable et de Haute Qualité</h1>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue, iaculis id
                elit eget, ultrices pulvinar tortor.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-book-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Carnet de consultation & vaccination électronique</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-chat-dots-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Echange en privé avec le medecin</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-people-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Conseils sur la santé</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-bandaid-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Consultaion et prise de rdv</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-chat-dots-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Rappel de RDV par sms</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
            <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-prescription2 text-dark"></i>
                        </div>
                        <h5 class="mb-3">Blood Tests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>

                    </div>
                </div> -->
            <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="bi bi-clipboard2-pulse text-dark"></i>
                        </div>
                        <h5 class="mb-3">Fever Tests</h4>
                            <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.</p>

                    </div>
                </div> -->
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item">
                    <div class="icon-box-primary mb-4">
                        <i class="bi bi-map-fill text-dark"></i>
                    </div>
                    <h5 class="mb-3">Géolocalisation des pharmacies</h4>
                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue.
                        </p>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Appoinment Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-6 mb-4">Nous garantissons que vous obtiendrez toujours le meilleur résultat</h1>

                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.3s">
                    <div class="icon-box-primary">
                        <i class="bi bi-geo-alt text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Office Address</h5>
                        <span>Bamako, Mali</span>
                    </div>
                </div>
                <hr>
                <div class="d-flex align-items-start wow fadeIn" data-wow-delay="0.4s">
                    <div class="icon-box-primary">
                        <i class="bi bi-clock text-dark fs-1"></i>
                    </div>
                    <div class="ms-3">
                        <h5>Office Time</h5>
                        <span>Lundi-Vendredi, 08h00-17h00</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                <h2 class="mb-4">Contactez-nous</h2>
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="name" placeholder="Your Name">
                            <label for="name">Votre nom</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="mail" placeholder="Your Email">
                            <label for="mail">Votre Email</label>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="mobile" placeholder="Your Mobile">
                            <label for="mobile">Votre Numero</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a message here" id="message"
                                style="height: 130px"></textarea>
                            <label for="message">Message</label>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary w-100 py-3" type="submit">Envoyé</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Appoinment Start -->


<!-- Team Start -->
<div class="container-fluid container-team py-5">
    <div class="container pb-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
            </div>
            <div class="col-md-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-6 mb-3">Kénéya Yiri</h1>

                <!-- <h3 class="mb-3">Biography</h3> -->
                <p class="mb-4">Chez Kénéya Yiri, nous sommes plus qu'une plateforme de soins de santé numérique - nous
                    sommes votre partenaire dévoué pour un bien-être optimal. Fondée sur le principe fondamental de
                    placer la santé des individus au premier plan, Kénéya Yiri réunit une équipe diversifiée de médecins
                    compétents, de pharmaciens expérimentés et d'experts de laboratoire innovants.

                    Notre mission est de fournir une expérience de soins complète et personnalisée, mettant en œuvre les
                    dernières avancées technologiques pour rendre la gestion de la santé accessible, pratique et
                    efficace. Des consultations médicales aux conseils pharmaceutiques, en passant par des analyses de
                    laboratoire de pointe, Kénéya Yiri offre une gamme complète de services pour répondre à vos besoins
                    de santé.

                    Ce qui nous distingue, c'est notre engagement envers l'excellence, la fiabilité et la compassion.
                    Nous sommes ici pour accompagner chaque individu dans son parcours vers une vie plus saine et
                    épanouissante. Chez Kénéya Yiri, votre bien-être est notre priorité, et nous sommes honorés de faire
                    partie intégrante de votre voyage vers une santé optimale.</p>

                <div class="d-flex">
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href=""><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Sallé Diallo</h5>
                        <span>Backend</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Adama Traoré</h5>
                        <span>Finances</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Sayon Coulibay</h5>
                        <span>Frontend</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-5.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-square btn-light mx-1" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-1">Sounkalo Kassoum Diarra</h5>
                        <span>Marketing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->


<!-- Testimonial Start -->
<div class="container-fluid testimonial py-5">
    <div class="container pt-5">

    </div>
</div>
<!-- Testimonial End -->
@endsection