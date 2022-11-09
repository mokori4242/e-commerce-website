<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            商品の詳細
            <?php var_dump($product->secondary_category_id);?>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="md:flex md:justify-around">
                        <div class="md:w-1/2">
                            <!-- Slider main container -->
                            <div class="swiper-container">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        @if ($product->imageFirst->filename !== null)
                                        <img src="{{ asset('storage/products/' . $product->imageFirst->filename) }}">
                                        @else 
                                        <img src="">
                                        @endif
                                    </div>
                                    <div class="swiper-slide">
                                        @if ($product->imageSecond->filename !== null)
                                        <img src="{{ asset('storage/products/' . $product->imageSecond->filename) }}">
                                        @else 
                                        <img src="">
                                        @endif
                                    </div>
                                    <div class="swiper-slide">
                                        @if ($product->imageThird->filename !== null)
                                        <img src="{{ asset('storage/products/' . $product->imageThird->filename) }}">
                                        @else 
                                        <img src="">
                                        @endif
                                    </div>
                                    <div class="swiper-slide">
                                        @if ($product->imageFourth->filename !== null)
                                        <img src="{{ asset('storage/products/' . $product->imageFourth->filename) }}">
                                        @else 
                                        <img src="">
                                        @endif
                                    </div>
                                </div>
                                <!-- If we need pagination -->
                                <div class="swiper-pagination"></div>

                                <!-- If we need navigation buttons -->
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>

                                <!-- If we need scrollbar -->
                                <div class="swiper-scrollbar"></div>
                            </div>                        
                        </div>
                        <div class="md:w-1/2 ml-4">
                            <h2 class="mb-4 text-sm title-font text-gray-500 tracking-widest">{{ $product->category->name }}</h2>
                            <h1 class="mb-4 text-gray-900 text-3xl title-font font-medium">{{ $product->name }}</h1>
                            <p class="mb-4 leading-relaxed">{!! $product->infomation !!} </p>
                            <div class="flex justify-around items-center">
                                <div>
                                    <span class="title-font font-medium text-2xl text-gray-900">{{ number_format($product->price) }}</span><span class="text-sm text-gray-700">円(税込)</span>
                                </div>
                                @if ($product->secondary_category_id !== 5)
                                    <span class="inline-flex mb-2">
                                        <a href="https://github.com/mokori4242?tab=repositories" class="ml-4 text-gray-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="10" class="w-100 h-100" viewBox="0 0 45 16">
                                            <path d="M18.53 12.03h-.02c.009 0 .015.01.024.011h.006l-.01-.01zm.004.011c-.093.001-.327.05-.574.05-.78 0-1.05-.36-1.05-.83V8.13h1.59c.09 0 .16-.08.16-.19v-1.7c0-.09-.08-.17-.16-.17h-1.59V3.96c0-.08-.05-.13-.14-.13h-2.16c-.09 0-.14.05-.14.13v2.17s-1.09.27-1.16.28c-.08.02-.13.09-.13.17v1.36c0 .11.08.19.17.19h1.11v3.28c0 2.44 1.7 2.69 2.86 2.69.53 0 1.17-.17 1.27-.22.06-.02.09-.09.09-.16v-1.5a.177.177 0 00-.146-.18zM42.23 9.84c0-1.81-.73-2.05-1.5-1.97-.6.04-1.08.34-1.08.34v3.52s.49.34 1.22.36c1.03.03 1.36-.34 1.36-2.25zm2.43-.16c0 3.43-1.11 4.41-3.05 4.41-1.64 0-2.52-.83-2.52-.83s-.04.46-.09.52c-.03.06-.08.08-.14.08h-1.48c-.1 0-.19-.08-.19-.17l.02-11.11c0-.09.08-.17.17-.17h2.13c.09 0 .17.08.17.17v3.77s.82-.53 2.02-.53l-.01-.02c1.2 0 2.97.45 2.97 3.88zm-8.72-3.61h-2.1c-.11 0-.17.08-.17.19v5.44s-.55.39-1.3.39-.97-.34-.97-1.09V6.25c0-.09-.08-.17-.17-.17h-2.14c-.09 0-.17.08-.17.17v5.11c0 2.2 1.23 2.75 2.92 2.75 1.39 0 2.52-.77 2.52-.77s.05.39.08.45c.02.05.09.09.16.09h1.34c.11 0 .17-.08.17-.17l.02-7.47c0-.09-.08-.17-.19-.17zm-23.7-.01h-2.13c-.09 0-.17.09-.17.2v7.34c0 .2.13.27.3.27h1.92c.2 0 .25-.09.25-.27V6.23c0-.09-.08-.17-.17-.17zm-1.05-3.38c-.77 0-1.38.61-1.38 1.38 0 .77.61 1.38 1.38 1.38.75 0 1.36-.61 1.36-1.38 0-.77-.61-1.38-1.36-1.38zm16.49-.25h-2.11c-.09 0-.17.08-.17.17v4.09h-3.31V2.6c0-.09-.08-.17-.17-.17h-2.13c-.09 0-.17.08-.17.17v11.11c0 .09.09.17.17.17h2.13c.09 0 .17-.08.17-.17V8.96h3.31l-.02 4.75c0 .09.08.17.17.17h2.13c.09 0 .17-.08.17-.17V2.6c0-.09-.08-.17-.17-.17zM8.81 7.35v5.74c0 .04-.01.11-.06.13 0 0-1.25.89-3.31.89-2.49 0-5.44-.78-5.44-5.92S2.58 1.99 5.1 2c2.18 0 3.06.49 3.2.58.04.05.06.09.06.14L7.94 4.5c0 .09-.09.2-.2.17-.36-.11-.9-.33-2.17-.33-1.47 0-3.05.42-3.05 3.73s1.5 3.7 2.58 3.7c.92 0 1.25-.11 1.25-.11v-2.3H4.88c-.11 0-.19-.08-.19-.17V7.35c0-.09.08-.17.19-.17h3.74c.11 0 .19.08.19.17z"></path>
                                        </svg>
                                        </a>
                                    </span>
                                    @elseif($product->secondary_category_id === 5)
                                    <span class="flex justify-center mb-2 items-center bg-white-500 border-2 border-gray-600 py-2 px-6 focus:outline-none hover:bg-gray-700 rounded">
                                            <a href="https://www.youtube.com/playlist?list=PL-VCCJXNWdjsnw1Wt_zCu-HctXDJKh5eZ" target="_blank" class="ml-4 text-gray-500 ">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-45 h-16" viewBox="0 0 45 16">
                                                    <path fill-rule="evenodd" d="M1.75 3.5a.25.25 0 00-.25.25v8.5c0 .138.112.25.25.25h12.5a.25.25 0 00.25-.25v-8.5a.25.25 0 00-.25-.25H1.75zM0 3.75C0 2.784.784 2 1.75 2h12.5c.966 0 1.75.784 1.75 1.75v8.5A1.75 1.75 0 0114.25 14H1.75A1.75 1.75 0 010 12.25v-8.5z"></path><path d="M6 10.559V5.442a.25.25 0 01.379-.215l4.264 2.559a.25.25 0 010 .428l-4.264 2.559A.25.25 0 016 10.559z"></path></svg>                                          
                                            </a>
                                    </span>                              @endif
                                <form method="post" action="{{ route('user.cart.add') }}">
                                 @csrf
                                    <div class="flex items-center"> 
                                        <span class="mr-3">数量</span>
                                            <div class="relative">
                                                <select name="quantity" class="rounded border appearance-none border-gray-300 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-200 focus:border-indigo-500 text-base pl-3 pr-10">
                                                    @for ($i = 1; $i <= $quantity; $i++)
                                                        <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                    </div>
                                    <button class="flex ml-auto text-gray bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">カートに入れる</button>
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                </form>
                            </div>
                        </div>
                    </div>
                        <div class="border-t border-gray-400 my-8"></div>
                        <div class="mb-4 text-center">この商品を販売しているショップ</div>
                        <div class="mb-4 text-center">{{ $product->shop->name }}</div>
                        <div class="mb-4 text-center">
                            @if ($product->shop->filename !== null)
                                <img class="mx-auto w-40 h-40 object-cover rounded-full" src="{{ asset('storage/shops/' . $product->shop->filename) }}">
                            @else 
                                <img src="">
                            @endif
                        </div>
                        <div class="mb-4 text-center">
                            <button data-micromodal-trigger="modal-1" href='javascript:;' type="button" class="text-gray bg-gray-500 border-0 py-2 px-6 focus:outline-none hover:bg-gray-600 rounded">ショップの詳細を見る</button>                        
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal micromodal-slide" id="modal-1" aria-hidden="true">
        <div class="modal__overlay z-10" tabindex="-1" data-micromodal-close>
            <div class="modal__container z-50" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
                <header class="modal__header">
                <h2 class="text-xl text-gray-700" id="modal-1-title">
                    {{ $product->shop->name }}
                </h2>
                <button type="button" class="modal__close" aria-label="Close modal" data-micromodal-close></button>
                </header>
                <main class="modal__content" id="modal-1-content">
                <p>
                    {{ $product->shop->infomation }}
                </p>
                </main>
                <footer class="modal__footer">
                <button type="button" class="modal__btn" data-micromodal-close aria-label="Close this dialog window">閉じる</button>
                </footer>
            </div>
        </div>
    </div>
    <script src="{{ mix('js/swiper.js') }}"></script>
</x-app-layout>
