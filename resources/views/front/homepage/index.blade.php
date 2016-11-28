@extends('front.layout.layout')

@section('content')
    <div class="Middle">
        <header>
            <div class="TopNav">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="TopNavText">
                                Wybierz<br />swoje hobby
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="AuthNav">
                                <ul class="AuthNav__list">
                                    @if (Auth::guest())
                                        <li><a href="#" class="AuthNav--biznes">Dla biznesu</a></li>
                                        <li><a href="{{ url('/login') }}">Logowanie</a></li>
                                        <li><a href="{{ url('/register') }}">Rejestracja</a></li>
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
                                    <div class="PromotedOffers__offer__imageWrapper__tag">FITNESS</div>
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
                                            <div class="Stars">
                                                <span class="Stars__star Stars__star--full"></span>
                                                <span class="Stars__star Stars__star--full"></span>
                                                <span class="Stars__star Stars__star--full"></span>
                                                <span class="Stars__star Stars__star--half"></span>
                                                <span class="Stars__star Stars__star--none"></span>
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
