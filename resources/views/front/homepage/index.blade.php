@extends('front.layout.layout')

@section('content')
    <div class="Middle">
        <header>
            <div class="top-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="top-nav__text">
                                Wybierz<br />swoje hobby
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="auth-nav">
                                <ul class="auth-nav__list">
                                    @if (Auth::guest())
                                        <li class="auth-nav__item">
                                            <a href="#" class="auth-nav__link auth-nav__link--business">Dla biznesu</a>
                                        </li>
                                        <li class="auth-nav__item">
                                            <a href="{{ url('/login') }}" class="auth-nav__link">Logowanie</a>
                                        </li>
                                        <li class="auth-nav__item">
                                            <a href="{{ url('/register') }}" class="auth-nav__link">Rejestracja</a>
                                        </li>
                                    @else
                                        <li>
                                            <form action="{{ url('/logout') }}" method="POST">
                                                <button type="submit">Rejestracja</button>
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="FrontPageSearchForm">
                <div class="FrontPageSearchForm__positioner">
                    <div class="EncourageText">
                        <p class="EncourageText__header">Porównaj oferty, Zapisz się online</p>
                        <p class="EncourageText__bottom">Podziel się swoją opinią</p>
                    </div>
                    <search></search>
                </div>
            </div>
        </header>
        <main>
            <section class="PromotedOffers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="PromotedOffers__sectionTitle">Oferty promowane</h3>
                        </div>
                        <div class="col-md-6">
                            <div class="PromotedOffers__scrollDown">
                                Przewijaj, aby zobaczyć dalszą<br />część strony
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="PromotedOffers__offer">
                                <div class="PromotedOffers__offer__imageWrapper">
                                    <img src="/img/elements/promoted-offer1.jpg" alt="">
                                    <div class="PromotedOffers__offer__imageWrapper__cover"></div>
                                    <div class="PromotedOffers__offer__imageWrapper__tag">Fitness</div>
                                </div>
                                <div class="PromotedOffers__offer__companyLogoWrapper">
                                    <div class="PromotedOffers__offer__companyLogo__background PromotedOffers__offer__companyLogo__background--black">
                                        <img src="/img/elements/fitfabric.png" alt="">
                                    </div>
                                </div>
                                <div class="PromotedOffers__offer__title">
                                    Fit Fabric Fitness Club
                                </div>
                                <div class="PromotedOffers__offer__address">
                                    al. 1 Maja 119/121
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="PromotedOffers__offer__calendar">
                                            Grafik zajęć
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="PromotedOffers__offer__reviews">
                                            <div class="stars">
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--half"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                            </div>
                                            <p>(30 opinii)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="PromotedOffers__offer">
                                <div class="PromotedOffers__offer__imageWrapper">
                                    <img src="/img/elements/promoted-offer2.jpg" alt="">
                                    <div class="PromotedOffers__offer__imageWrapper__cover"></div>
                                    <div class="PromotedOffers__offer__imageWrapper__tag">Sport</div>
                                </div>
                                <div class="PromotedOffers__offer__companyLogoWrapper">
                                    <div class="PromotedOffers__offer__companyLogo__background PromotedOffers__offer__companyLogo__background--white">
                                        <img src="/img/elements/evergym.png" alt="">
                                    </div>
                                </div>
                                <div class="PromotedOffers__offer__title">
                                    Fit Fabric Fitness Club
                                </div>
                                <div class="PromotedOffers__offer__address">
                                    al. 1 Maja 119/121
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="PromotedOffers__offer__calendar">
                                            Grafik zajęć
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="PromotedOffers__offer__reviews">
                                            <div class="stars">
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--half"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                            </div>
                                            <p>(30 opinii)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="PromotedOffers__offer">
                                <div class="PromotedOffers__offer__imageWrapper">
                                    <img src="/img/elements/promoted-offer3.jpg" alt="">
                                    <div class="PromotedOffers__offer__imageWrapper__cover"></div>
                                    <div class="PromotedOffers__offer__imageWrapper__tag">Rekreacja</div>
                                </div>
                                <div class="PromotedOffers__offer__companyLogoWrapper">
                                    <div class="PromotedOffers__offer__companyLogo__background PromotedOffers__offer__companyLogo__background--red">
                                        <img src="/img/elements/jatomi.png" alt="">
                                    </div>
                                </div>
                                <div class="PromotedOffers__offer__title">
                                    Fit Fabric Fitness Club
                                </div>
                                <div class="PromotedOffers__offer__address">
                                    al. 1 Maja 119/121
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="PromotedOffers__offer__calendar">
                                            Grafik zajęć
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="PromotedOffers__offer__reviews">
                                            <div class="stars">
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                            </div>
                                            <p>(30 opinii)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="PromotedOffers__offer">
                                <div class="PromotedOffers__offer__imageWrapper">
                                    <img src="/img/elements/promoted-offer4.jpg" alt="">
                                    <div class="PromotedOffers__offer__imageWrapper__cover"></div>
                                    <div class="PromotedOffers__offer__imageWrapper__tag">Taniec</div>
                                </div>
                                <div class="PromotedOffers__offer__companyLogoWrapper">
                                    <div class="PromotedOffers__offer__companyLogo__background PromotedOffers__offer__companyLogo__background--white">
                                        <img src="/img/elements/sportera.png" alt="">
                                    </div>
                                </div>
                                <div class="PromotedOffers__offer__title">
                                    Fit Fabric Fitness Club
                                </div>
                                <div class="PromotedOffers__offer__address">
                                    al. 1 Maja 119/121
                                </div>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="PromotedOffers__offer__calendar">
                                            Grafik zajęć
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="PromotedOffers__offer__reviews">
                                            <div class="stars">
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--full"></span>
                                                <span class="stars__star stars__star--empty"></span>
                                            </div>
                                            <p>(30 opinii)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>
@endsection
