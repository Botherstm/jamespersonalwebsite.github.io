<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="assets/css/styles.css">

        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <title>Portfolio website James Pieter Loro</title>
    </head>
    <body>
        <!--===== HEADER =====-->
        <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Personal Website</a>
                </div>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">Tentang</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Skills</a></li>
                        <li class="nav__item"><a href="#work" class="nav__link">Hoby</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
            </nav>
        </header>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home bd-grid" id="home">
                <div class="home__data">
                    <h1 class="home__title">Hello,<br>Saya <span class="home__title-color">James</span><br> Mahasiswa PTI</h1>

                    <a href="#contact" class="button">Hubungi Saya</a>
                </div>

                <div class="home__social">
                    <a href="https://www.facebook.com/bothers12012002/" class="home__social-icon"><i class='bx bxl-facebook'></i></a>
                    <a href="https://www.instagram.com/bothers_tm/" class="home__social-icon"><i class='bx bxl-instagram' ></i></a>
                    <a href="https://github.com/Botherstm/Botherstm" class="home__social-icon"><i class='bx bxl-github' ></i></a>
                </div>

                <div class="home__img">
                    <svg class="home__blob" viewBox="0 0 479 467" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <mask id="mask0" mask-type="alpha">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                        </mask>
                        <g mask="url(#mask0)">
                            <path d="M9.19024 145.964C34.0253 76.5814 114.865 54.7299 184.111 29.4823C245.804 6.98884 311.86 -14.9503 370.735 14.143C431.207 44.026 467.948 107.508 477.191 174.311C485.897 237.229 454.931 294.377 416.506 344.954C373.74 401.245 326.068 462.801 255.442 466.189C179.416 469.835 111.552 422.137 65.1576 361.805C17.4835 299.81 -17.1617 219.583 9.19024 145.964Z"/>
                            <image class="home__blob-img" x="50" y="60" href="assets/img/perfil.png"/>
                        </g>
                    </svg>
                </div>
            </section>

            <!--===== ABOUT =====-->
            <section class="about section " id="about">
                <h2 class="section-title">Tentang</h2>

                <div class="about__container bd-grid">
                    <div class="about__img">
                        <img src="assets/img/about.jpg" alt="">
                    </div>
                    
                    <div>
                        <h2 class="about__subtitle">saya James Pieter Loro</h2>
                        <p class="about__text">Saya mahasiswa UNDIKSHA (Universitas Pendidikan Ganesha), jurusan PTI (Pendidikan Teknik Informatika). Asal saya dari Waikabubak, Sumba Barat, Nusa Tengara Timur </p>           
                    </div>                                   
                </div>
            </section>

            <!--===== SKILLS =====-->
            <section class="skills section" id="skills">
                <h2 class="section-title">Kemampuan</h2>

                <div class="skills__container bd-grid">          
                    <div>
                        <h2 class="skills__subtitle">Kemampuan dalam ngoding:)</h2>
                        <p class="skills__text">saya belum banyak memiliki pengalaman :(, masih dalam tahap belajar</p>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">HTML</span>
                            </div>
                            <div class="skills__bar ">

                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-html5 skills__icon'></i>
                                <span class="skills__name">PHP</span>
                            </div>
                            <div class="skills__bar ">

                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-css3 skills__icon'></i>
                                <span class="skills__name">CSS</span>
                            </div>
                            <div class="skills__bar ">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">55%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxl-javascript skills__icon' ></i>
                                <span class="skills__name">JAVASCRIPT</span>
                            </div>
                            <div class="skills__bar ">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-chart skills__icon'></i>
                                <span class="skills__name">LARAVEL</span>
                            </div>
                            <div class="skills__bar ">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">65%</span>
                            </div>
                        </div>
                        <div class="skills__data">
                            <div class="skills__names">
                                <i class='bx bxs-mobile skills__icon'></i>
                                <span class="skills__name">FLUTTER</span>
                            </div>
                            <div class="skills__bar ">
                                
                            </div>
                            <div>
                                <span class="skills__percentage">70%</span>
                            </div>
                        </div>
                    </div>
                    
                    <div>              
                        <img src="assets/img/work3.jpg" alt="" class="skills__img">
                    </div>
                </div>
            </section>

            <!--===== WORK =====-->
            <section class="work section" id="work">
                <h2 class="section-title">Hobi</h2>

                <div class="work__container bd-grid">
                    <a href="" class="work__img">
                        <img src="assets/img/work1.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work2.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work3.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work4.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work5.jpg" alt="">
                    </a>
                    <a href="" class="work__img">
                        <img src="assets/img/work6.jpg" alt="">
                    </a>
                </div>
            </section>

            <!--===== CONTACT =====-->
            <section class="contact section" id="contact">
                <h2 class="section-title">Hubungi Saya</h2>

                <div class="contact__container bd-grid">
                    <form action="https://formspree.io/f/mzbqagqb" method="POST" class="contact__form">
                        <input type="email" name="email" placeholder="Email" class="contact__input">
                        <textarea name="message" id="" cols="0" rows="10" placeholder="isi pesan" class="contact__input"></textarea>
                        <input type="submit" value="Kirim" class="contact__button button">
                    </form>
                </div>
            </section>
        </main>

        <!--===== FOOTER =====-->
        <footer class="footer">
            <p class="footer__title">James Pieter Loro</p>
            <div class="footer__social">
                <a href="https://www.facebook.com/bothers12012002/" class="footer__icon"><i class='bx bxl-facebook' ></i></a>
                <a href="https://www.instagram.com/bothers_tm/" class="footer__icon"><i class='bx bxl-instagram' ></i></a>
                <a href="https://github.com/Botherstm/Botherstm" target="blank" class="footer__icon"><i class='bx bxl-github' ></i></a>
            </div>
            <p class="footer__copy">&#169; All rigths reserved</p>
        </footer>


        <!--===== SCROLL REVEAL =====-->
        <script src="https://unpkg.com/scrollreveal"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
