@section('content')
@extends('layouts.giveaway')

    <div class="giveaway__container">
        <header class="navigation">
            <div class="navigation-container">
                <img src="{{asset('img/logo_white.svg')}}" alt class="navigation-logo">

                <a href="{{route('vk.index')}}" class="navigation-participate">Участвовать</a>
            </div>
        </header>
        <main class="main">
            <section class="top" id="giveaway">
                <div class="top-container">
                    <div class="top-text">
                        <div class="top-bage">
                            <img src="{{asset('img/bage.png')}}" alt>
                            <p>Официальное мероприятие</p>
                        </div>
                        <h1 class="top-title">Binance совместно с <span>ВКонтакте</span> проводит розыгрыш <span>Bitcoin</span></h1>
                        <p class="top-subtitle">Призовой фонд <span>2 BTC</span> будет разыгран между 200 победителей
                            1 место <span>0,5 BTC</span>
                            2 и 3 место по <span>0,25 BTC</span>
                            Оставшийся <span>1 BTC</span> разделят между собой остальные победители</p>
                        <div class="top-buttons">
                            <a class="top-button participate" href="{{route('vk.index')}}">Участвовать →</a>

                        </div>
                    </div>
                    <img src="{{asset('img/musk.png')}}" class="participate-creator durov" alt>
                </div>
            </section>
            <section class="instruction" id="rules">
                <h4 class="section-title">Инструкция <span>для</span> участия</h4>
                <div class="instruction-container">
                    <div class="instruction-row" style="width: 100%;">
                        <div class="instruction-item">
                            <div class="flex justify-center">
                                <img src="{{asset('img/bonus.png')}}" alt class="bonus flex ">
                            </div>
                            <p>Для участия в розыгрыше авторизуйся в своей учетной записи ВК , получи уникальный номер и сделай репост поста с розыгрышем из нашей группы. Пост должен быть закреплен на Вашей стене до конца проведения акции.</p>
                            <div class="top-buttons part__btn">
                                <a class="top-button participate" href="{{route('vk.index')}}">Участвовать</a>

                            </div>
                        </div>

                    </div>

                </div>
            </section>



        </main>
        <footer class="navigation ">
            <div class="navigation-container">
                <img src="{{asset('img/logo_white.svg')}}" alt class="navigation-logo">
                <a href="{{route('vk.index')}}" class="navigation-participate">Участвовать</a>
            </div>
        </footer>
    </div>

@endsection
