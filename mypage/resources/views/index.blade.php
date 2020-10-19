@extends('base')

@section('forlanding')
    <section class="main">
        <div class="main-bg"></div>
        @endsection
        @section('content')
            <div class="main-content">
                <div class="container">
                    <div class="main-block">
                        <div class="main-block__text">
                            <div class="text-wrapper">
                                <div class="main-block__title title-color">
                                    <p class="title-over">
                                        Украина, Киевская область
                                    </p>
                                    <h1>Iz Vladeniya Akelo</h1>
                                </div>
                                <div class="text-info main-block__info">
                                    Американская акита - это сила и грация, беззаветная преданность и независимость, надежная защита и самый верный друг. В нашем питомнике вы найдете достойных представителей этой породы.
                                </div>
                                <div class="main-block__buttons">
                                    <a href="puppies" class="button but-puppy">
                                        Посмотреть щенков
                                    </a>
                                    <a href="about" class="button but-moreabout">
                                        Подробнее о породе
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="phone phone-vistablet">
                                    +380 93 310 51 95
                                    <br>+380 95 083 23 85
                                </div>
                                <div class="folowUs">
                                    <div class="folowUs__text">
                                        Следите за нами
                                    </div>
                                    <div class="socials folowUs__socials">
                                        <a href="https://www.facebook.com/profile.php?id=100007025417042" target="_blank" >
                                            <svg class="social" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path d="M16.9643 1.375H2.03571C1.49581 1.375 0.978017 1.5923 0.596247 1.97909C0.214476 2.36589 0 2.89049 0 3.4375L0 18.5625C0 19.1095 0.214476 19.6341 0.596247 20.0209C0.978017 20.4077 1.49581 20.625 2.03571 20.625H7.85658V14.0804H5.18471V11H7.85658V8.65219C7.85658 5.98168 9.42578 4.50656 11.8292 4.50656C12.9802 4.50656 14.1838 4.71453 14.1838 4.71453V7.33563H12.8577C11.551 7.33563 11.1434 8.15719 11.1434 8.9998V11H14.0604L13.5939 14.0804H11.1434V20.625H16.9643C17.5042 20.625 18.022 20.4077 18.4038 20.0209C18.7855 19.6341 19 19.1095 19 18.5625V3.4375C19 2.89049 18.7855 2.36589 18.4038 1.97909C18.022 1.5923 17.5042 1.375 16.9643 1.375Z" fill="#121E30"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="19" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                        <a href="https://www.youtube.com/channel/UC3kQoM1j52HinM1C-9uyxjQ" target="_blank">
                                            <svg class="social" width="25" height="22" viewBox="0 0 25 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M23.8566 5.33169C23.584 4.31548 22.7808 3.51514 21.761 3.24354C19.9124 2.75 12.5001 2.75 12.5001 2.75C12.5001 2.75 5.08773 2.75 3.23917 3.24354C2.21933 3.51519 1.41612 4.31548 1.14351 5.33169C0.648193 7.17363 0.648193 11.0167 0.648193 11.0167C0.648193 11.0167 0.648193 14.8597 1.14351 16.7017C1.41612 17.7179 2.21933 18.4849 3.23917 18.7565C5.08773 19.25 12.5001 19.25 12.5001 19.25C12.5001 19.25 19.9124 19.25 21.761 18.7565C22.7808 18.4849 23.584 17.7179 23.8566 16.7017C24.3519 14.8597 24.3519 11.0167 24.3519 11.0167C24.3519 11.0167 24.3519 7.17363 23.8566 5.33169ZM10.0758 14.5059V7.52748L16.2711 11.0168L10.0758 14.5059Z" fill="#121E30"/>
                                            </svg>
                                        </a>

                                        <a href="https://www.instagram.com/yuliaakita" target="_blank">
                                            <svg class="social" width="19" height="22" viewBox="0 0 19 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path d="M9.5 8.70805C9.05262 8.70822 8.61533 8.84278 8.24343 9.09473C7.87152 9.34667 7.58171 9.70469 7.41062 10.1235C7.23953 10.5423 7.19485 11.0031 7.28223 11.4477C7.36961 11.8922 7.58513 12.3005 7.90154 12.621C8.21795 12.9414 8.62103 13.1596 9.05983 13.248C9.49863 13.3363 9.95343 13.2909 10.3667 13.1174C10.7801 12.9439 11.1333 12.6501 11.3818 12.2733C11.6304 11.8964 11.763 11.4533 11.763 11C11.7626 10.3921 11.524 9.80929 11.0997 9.37954C10.6753 8.94979 10.1 8.70827 9.5 8.70805ZM14.789 6.94633C14.6739 6.65064 14.5 6.38207 14.2781 6.1573C14.0563 5.93252 13.7912 5.75633 13.4993 5.63965C12.6087 5.28344 10.4882 5.36336 9.5 5.36336C8.51183 5.36336 6.39341 5.28043 5.50025 5.63965C5.20839 5.75633 4.94332 5.93252 4.72146 6.1573C4.4996 6.38207 4.3257 6.65064 4.21054 6.94633C3.85937 7.84867 3.93783 9.99926 3.93783 10.9996C3.93783 11.9999 3.85937 14.1479 4.21223 15.0532C4.3274 15.3489 4.5013 15.6175 4.72316 15.8423C4.94501 16.0671 5.21009 16.2432 5.50194 16.3599C6.39257 16.7161 8.5131 16.6362 9.5017 16.6362C10.4903 16.6362 12.6079 16.7191 13.501 16.3599C13.7929 16.2432 14.058 16.0671 14.2798 15.8423C14.5017 15.6175 14.6756 15.3489 14.7907 15.0532C15.1449 14.1509 15.0634 12.0003 15.0634 11C15.0634 9.99969 15.1449 7.85211 14.7907 6.94676L14.789 6.94633ZM9.5 14.5234C8.81218 14.5234 8.13981 14.3168 7.5679 13.9296C6.996 13.5425 6.55026 12.9922 6.28704 12.3484C6.02383 11.7045 5.95496 10.9961 6.08914 10.3126C6.22333 9.62913 6.55455 9.00132 7.04091 8.50855C7.52727 8.01579 8.14693 7.68022 8.82154 7.54426C9.49614 7.40831 10.1954 7.47809 10.8308 7.74477C11.4663 8.01145 12.0095 8.46306 12.3916 9.04248C12.7737 9.62191 12.9777 10.3031 12.9777 11C12.9782 11.4629 12.8887 11.9213 12.7141 12.349C12.5395 12.7768 12.2834 13.1654 11.9603 13.4927C11.6373 13.82 11.2537 14.0795 10.8315 14.2564C10.4093 14.4333 9.95685 14.524 9.5 14.5234ZM13.121 8.15117C12.9605 8.15126 12.8035 8.10309 12.6699 8.01278C12.5364 7.92246 12.4323 7.79405 12.3708 7.64377C12.3093 7.4935 12.2931 7.32813 12.3244 7.16857C12.3557 7.009 12.433 6.86242 12.5465 6.74736C12.66 6.6323 12.8046 6.55393 12.9621 6.52216C13.1196 6.49039 13.2828 6.50666 13.4311 6.56889C13.5795 6.63112 13.7063 6.73654 13.7955 6.87179C13.8847 7.00705 13.9323 7.16607 13.9323 7.32875C13.9328 7.43678 13.9122 7.54383 13.8717 7.64378C13.8312 7.74372 13.7717 7.83458 13.6964 7.91115C13.6212 7.98771 13.5318 8.04848 13.4334 8.08997C13.3349 8.13145 13.2294 8.15284 13.1227 8.15289L13.121 8.15117ZM16.9643 1.375H2.03571C1.49581 1.375 0.978017 1.5923 0.596247 1.97909C0.214476 2.36589 0 2.89049 0 3.4375L0 18.5625C0 19.1095 0.214476 19.6341 0.596247 20.0209C0.978017 20.4077 1.49581 20.625 2.03571 20.625H16.9643C17.5042 20.625 18.022 20.4077 18.4038 20.0209C18.7855 19.6341 19 19.1095 19 18.5625V3.4375C19 2.89049 18.7855 2.36589 18.4038 1.97909C18.022 1.5923 17.5042 1.375 16.9643 1.375ZM16.2382 13.8359C16.1835 14.9372 15.9354 15.913 15.1419 16.7148C14.3484 17.5166 13.3861 17.7732 12.3004 17.8256C11.1803 17.8896 7.82223 17.8896 6.70216 17.8256C5.61518 17.7702 4.65542 17.5184 3.86065 16.7148C3.06587 15.9113 2.81607 14.9351 2.76433 13.8359C2.70114 12.7007 2.70114 9.29801 2.76433 8.16406C2.81904 7.06277 3.06417 6.08695 3.86065 5.28516C4.65712 4.48336 5.61942 4.22984 6.70216 4.17742C7.82223 4.1134 11.1803 4.1134 12.3004 4.17742C13.3874 4.23285 14.3501 4.48465 15.1419 5.28816C15.9337 6.09168 16.1865 7.06793 16.2382 8.16922C16.3014 9.30016 16.3014 12.6998 16.2382 13.8359Z" fill="#121E30"/>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="19" height="22" fill="white"/>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="main-block__image">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <section class="features">
        <h2 class="section__title  features__title container">
            Почему мы
        </h2>
        <div class="feature container work">
            <div class="feature__videoes tabs">
                <ul class="feature__video-main work__video-main " >
                    <li class="video-content tab-content active" data-youtube="KlWma7EWQYc">
                        <img class="play" src="{{asset('img/play.svg')}}" alt="play">
                    </li>
                    <li class="video-content tab-content" data-youtube="fO3fybJqjv0">
                        <img class="play" src="{{asset('img/play.svg')}}" alt="play">
                    </li>
                </ul>
                <div class="feature__bg"></div>
                <ul class="work__video-sub sub-pic tabs-caption">
                    <li class="active">
                        <img src="{{asset('img/work-sub1.jpg')}}" alt="Video-sub">
                    </li>
                    <li>
                        <img src="{{asset('img/work-sub2.jpg')}}" class="worksub2" alt="Video-sub">
                    </li>
                </ul>
            </div>
            <div class="feature__description work__description">
                <div class="feature__heading">
                    <div class="heading__bg"></div>
                    <h3 class="feature__title">
                        Наши собаки легко поддаются дрессировке
                    </h3>
                </div>
                <p class="feature__text work__text">
                    В нашей породе нет понятия “рабочее разведение”, но все же при воспитании наших собак мы делаем акцент на их готовности сотрудничать с человеком. С нашими племенными собаками и подростками мы проходим обязательный курс послушания, в процессе работы развиваем рабочие качества присущие породе. Мы также много работаем с нашими щенками и рассчитываем на то, что уровень интеллекта щенков и их способность воспринимать команды генетически передаётся от предков и развивается грамотной дрессировкой.
                </p>
            </div>
        </div>
        <div class="feature defense indent-left">
            <div class="feature__description">
                <div class="feature__heading">
                    <div class="heading__bg"></div>
                    <h3 class="feature__title">
                        Надежные охранники и защитники
                    </h3>
                </div>
                <p class="feature__text">
                    Историей развития породы обусловленно то, что есть акиты, которые не обладают охранными и защитными качествами. Как правило, эти собаки прекрасные охотники и компаньоны. В то же время есть породные линии, которые в разные периоды развития породы применялись для охраны. Наши собаки являются представителями именно этих породных линий и обладают охранными и защитными качествами на генетическом уровне.  Мы развиваем в наших собаках их породные качества.
                </p>
            </div>
            <div class="feature__videoes defense__video ">
                <div class="feature__video-main video-content" data-youtube="-XO4h7sl6Xc" >
                    <img class="play" src="{{asset('img/play.svg')}}'" alt="play">
                </div>
            </div>
        </div>
        <div class="feature simple-grow">
            <div class="simple-grow__pic">
                <div class="simple-grow__photo"></div>
            </div>
            <div class="feature__description simple-grow__description ">
                <div class="feature__heading">
                    <div class="heading__bg"></div>
                    <h3 class="feature__title simple-grow__title">
                        Наши акиты просты в выращивании
                    </h3>
                </div>
                <p class="feature__text simple-grow__text"  >
                    В последнее время наблюдается тенденция на укрупнение породы, излишнюю массивность. Чрезмерная массивность и стремительный рост негативно влияют на формирование костяка щенка. Особенно в таких случаях подвержены заболеванию суставы. Вес и рост наших собак колеблется в рамках стандарта, но не превышают его. Отчасти, благодаря этому, за 15 лет работы с нашими породными линиями не было ни одного случая заболевания дисплазией или других паталогий суставов.
                </p>
            </div>
        </div>

        <div class="feature we-white indent-left">
            <div class="feature__description">
                <div class="feature__heading we-white__heading">

                    <div class="heading__bg"></div>

                    <h3 class="feature__title simple-grow__title">
                        Мы белые
                    </h3>
                    <img class="we-white__smile" src="{{asset('img/smile.svg')}}" alt="Smile">
                </div>
                <div class="text-info feature__text we-white__info">
                    Белый - редкий окрас для акит. Хотя данный цвет считается стандартным для этой породы. Традиционно в каждом помете из нашего питомника рождается два или три белых щенка.
                </div>
            </div>
            <div class="simple-grow__pic">
                <div class="we-white__photo"></div>
            </div>
        </div>
    </section>

    <section class="our-dogs">
        <div class="container">
            <h2 class="section__title">
                <!-- Собаки которые принадлежат<br> нашему питомнику  -->
                Собаки нашего питомника
            </h2>
            <div class="parents">
                <h4 class="our-dogs__title">Племенные собаки</h4>
                <div class="slider-parents">
                    <img src="{{asset('img/Alellopedigree.jpg')}}" alt="AkeloPedigree">
                    <img src="{{asset('img/GeraPedigree.jpg')}}" alt="GeraPedigree">
                </div>
            </div>

            <div class="growingup-dogs">
                <h4 class="our-dogs__title growingup-dogs-title ">Подрастающее поколение
                </h4>
                <div class="growingup-dogs__block">
                    <div class="growingup-dogs__dog nika">
                        <img src="{{asset('img/nika.jpg')}}" alt="Nika">
                        <div class="dog__description">
                            <h5 class="dog__name">
                                NIAGARA <span class="name-break">IZ VLADENIYA AKELO</span>
                            </h5>
                            <div class="dog__info">
                                <div class="info__dob">
                                    Date of birth:<span class="break-date"> 25.10.18</span>
                                </div>
                                <div class="info__sex">
                                    female
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="growingup-dogs__dog nura">
                        <img src="{{asset('img/nura.jpg')}}" alt="Nura">
                        <div class="dog__description">
                            <h5 class="dog__name">
                                NUAR-DI <span class="name-break">IZ VLADENIYA AKELO</span>
                            </h5>
                            <div class="dog__info">
                                <div class="info__dob">
                                    Date of birth:<span class="break-date"> 25.10.18</span>
                                </div>
                                <div class="info__sex">
                                    female
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex-break break-dog"></div>
                    <div class="growingup-dogs__dog nezhna">
                        <img src="{{asset('img/nezhna.jpg')}}" alt="Nezhna">
                        <div class="dog__description">
                            <h5 class="dog__name">
                                NEZHNA <span class="name-break">IZ VLADENIYA AKELO</span>
                            </h5>
                            <div class="dog__info">
                                <div class="info__dob">
                                    Date of birth:<span class="break-date"> 25.10.18</span>
                                </div>
                                <div class="info__sex">
                                    female
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="our-dogs__button">
                <a href="#" class="button but-puppy">
                    Посмотреть щенков
                </a>
            </div>

        </div>
    </section>

    <section class="contacts" id="contacts">
        <div class="container">
            <h2 class="section__title contacts__title">
                Контакты
            </h2>
            <div class="contacts-wrapper">
                <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10220.299287220065!2d30.10517540549279!3d50.178437357582624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4ac168cac870f%3A0x15d1c4efa907090c!2z0JHQvtGA0L7QstCw0Y8sINCa0LjQtdCy0YHQutCw0Y8g0L7QsdC70LDRgdGC0YwsIDA4NTIx!5e0!3m2!1sru!2sua!4v1587461636601!5m2!1sru!2sua" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contacts__text">
                    <div class="contacts__inscription">
                        Свяжитесь с нами:
                    </div>
                    <div class="contacts__string">
                        <div class="phone contacts__phone">
                            +380 63 602 24 82
                            <br>+380 67 680 39 53
                        </div>
                        <div class="phone-name">
                            Юлия
                        </div>
                    </div>
                    <div class="contacts__string socials">
                        <a href="viber://chat?number=%2B380636022482" target="_blank">
                            <img class="social" src="{{asset('img/viber.svg')}}" alt="ICON">
                        </a>
                        <a href="tg://resolve?domain=yuliaakita" target="_blank">
                            <img class="social" src="{{asset('img/telegram.svg')}}" alt="ICON">
                        </a>
                    </div>
                    <div class="contacts__string socials">
                        <a href="mailto:jjj888iij@gmail.com" >
                            <img class="social" src="{{asset('img/email.svg')}}" alt="ICON">
                        </a>
                        <div class="email-name">
                            jjj888iij@gmail.com
                        </div>


                    </div>
                    <div class="contacts__string socials">
                        <a href="https://www.facebook.com/profile.php?id=100007025417042" target="_blank" >
                            <img class="social" src="{{asset('img/facebook-white.svg')}}" alt="ICON">
                        </a>
                        <a href="https://www.youtube.com/channel/UC3kQoM1j52HinM1C-9uyxjQ" target="_blank">
                            <img class="social" src="{{asset('img/youtube-white.svg')}}" alt="ICON">
                        </a>
                        <a href="https://www.instagram.com/yuliaakita" target="_blank">
                            <img class="social" src="{{asset('img/instagram-white.svg')}}" alt="ICON">
                        </a>
                    </div>
                    <div class="contacts__distination">
                        Мы находимся в пгт. Боровая, Киевская область <br>
                        (50км. по одесской трассе от Киева)
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection



