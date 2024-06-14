<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>top</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="flex justify-between items-center py-4 px-6 bg-white border-b-4 border-indigo-600">
        <div class="flex items-center">
            TO_CAMP
        </div>
        <form class="flex">
            <input class="border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none" type="search" name="search" placeholder="Search">
            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ml-2" type="submit">
                Search
            </button>
        </form>
    </header>
    <div class="flex justify-end py-4 px-6">
        <button class="bg-gray-500 hover:bg-gray-100 rounded px-4 py-2">新規登録</button>
        <button class="bg-gray-500 hover:bg-gray-100 rounded px-4 py-2">ログイン</button>
    </div>
    <img src="top-img.jpg" alt="top image">

    <div class="flex justify-center my-5">
        <h2>
            <span class="page-title">C</span>
            <span class="page-title">A</span>
            <span class="page-title">M</span>
            <span class="page-title">P</span>
            <span class="page-title">-</span>
            <span class="page-title">R</span>
            <span class="page-title">A</span>
            <span class="page-title">N</span>
            <span class="page-title">K</span>
            <span class="page-title">I</span>
            <span class="page-title">N</span>
            <span class="page-title">G</span>
        </h2>
    </div>
    <p class="text-center my-5">口コミ人気ランキング</p>

    <section>
        <div class="relative px-4 py-12 sm:px-6 lg:py-16 lg:px-8">
            <div class="relative mx-auto max-w-7xl">
                <div class="grid max-w-lg gap-5 mx-auto lg:grid-cols-3 lg:max-w-none">
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1561654791-00316c79efa8?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE5fHx8ZW58MHx8fHw%3D&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">Boost your conversion rate</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto accusantium praesentium eius, ut atque fuga culpa, similique sequi cum eos quis dolorum.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="https://twitter.com/Mike_Andreuzza">
                                        <span class="sr-only">Michael Andreuzza</span>
                                        <img class="w-10 h-10 rounded-full" src="https://d33wubrfki0l68.cloudfront.net/2f76102fd18a4e095eaed7a836a3f2183a982a4d/91dd4/images/avatar.jpg" alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="https://twitter.com/Mike_Andreuzza" class="hover:underline"> Michaerl Andreuzza</a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-16"> Mar 16, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 6 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1510166089176-b57564a542b1?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&amp;auto=format&amp;fit=crop&amp;w=2024&amp;q=80" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="https://twitter.com/g_perales" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">How to use search engine optimization to drive sales</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit facilis asperiores porro quaerat doloribus, eveniet dolore. Adipisci tempora aut inventore optio animi., tempore temporibus quo laudantium.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="https://twitter.com/g_perales">
                                        <span class="sr-only">Gabriel Perales</span>
                                        <img class="w-10 h-10 rounded-full" src="https://pbs.twimg.com/profile_images/1442898475218194432/61p-BNsg_400x400.jpg" alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="#" class="hover:underline"> Gabriel Perales </a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-03-10"> Mar 10, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 4 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col overflow-hidden rounded-lg shadow-lg">
                        <div class="flex-shrink-0">
                            <img class="object-cover w-full h-48" src="https://images.unsplash.com/photo-1516245556508-7d60d4ff0f39?ixlib=rb-1.2.1&amp;ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDN8fHxlbnwwfHx8fA%3D%3D&amp;auto=format&amp;fit=crop&amp;w=900&amp;q=60" alt="">
                        </div>
                        <div class="flex flex-col justify-between flex-1 p-6 bg-white">
                            <div class="flex-1">
                                <a href="#" class="block mt-2">
                                    <p class="text-xl font-semibold text-neutral-600">Improve your customer experience</p>
                                    <p class="mt-3 text-base text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint harum rerum voluptatem quo recusandae magni placeat saepe molestiae, sed excepturi cumque corporis perferendis hic.</p>
                                </a>
                            </div>
                            <div class="flex items-center mt-6">
                                <div class="flex-shrink-0">
                                    <a href="https://twitter.com/wickedlabsHQ">
                                        <span class="sr-only">Wicked Labs</span>
                                        <img class="w-10 h-10 rounded-full" src="https://d33wubrfki0l68.cloudfront.net/2f76102fd18a4e095eaed7a836a3f2183a982a4d/91dd4/images/avatar.jpg" alt="">
                                    </a>
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium text-neutral-600">
                                        <a href="https://twitter.com/wickedlabsHQ" class="hover:underline"> Wicked Labs </a>
                                    </p>
                                    <div class="flex space-x-1 text-sm text-gray-500">
                                        <time datetime="2020-02-12"> Feb 12, 2020 </time>
                                        <span aria-hidden="true"> · </span>
                                        <span> 11 min read </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <h2 class="text-center my-5">
        <span class="page-title">C</span>
        <span class="page-title">A</span>
        <span class="page-title">M</span>
        <span class="page-title">P</span>
        <span class="page-title">-</span>
        <span class="page-title">P</span>
        <span class="page-title">L</span>
        <span class="page-title">A</span>
        <span class="page-title">C</span>
        <span class="page-title">E</span>
    </h2>
    <p class="text-center my-5">地図でキャンプ場を探す</p>
    <div class="flex justify-center">
        <img class="" src="japan-map-search.png" alt="日本地図検索">
    </div>

    <h2 class="text-center my-5">
        <span class="page-title">C</span>
        <span class="page-title">A</span>
        <span class="page-title">M</span>
        <span class="page-title">P</span>
        <span class="page-title">-</span>
        <span class="page-title">C</span>
        <span class="page-title">O</span>
        <span class="page-title">M</span>
        <span class="page-title">M</span>
        <span class="page-title">I</span>
        <span class="page-title">T</span>
    </h2>
    <p class="text-center my-5">こだわり条件でキャンプ場を探す</p>
    <div class="flex justify-center">
        <form class="field_search" id="field_search" action="/fields/search" accept-charset="UTF-8" method="get">
            <select name="q[address_cont]" id="q_address_cont">
                <option value="">都道府県を選んでください</option>
                <option value="鳥取県">鳥取県</option>
                <option value="岡山県">岡山県</option>
                <option value="広島県">広島県</option>
            </select>
            <div class="mt-3">
                <p class="d-inline p-2 select-genre">
                    <i class="far fa-circle fa-fw"></i>営業条件
                </p>
                <div class="form-check form-switch my-2">
                    <input name="q[all_season_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-all-season" type="checkbox" value="true" name="q[all_season_eq_any]" />
                    <label class="form-check-label" for="switch-all-season">通年営業</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[early_in_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-early-in" type="checkbox" value="true" name="q[early_in_eq_any]" />
                    <label class="form-check-label" for="switch-early-in">アーリーチェックイン可</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[late_out_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-late-out" type="checkbox" value="true" name="q[late_out_eq_any]" />
                    <label class="form-check-label" for="switch-late-out">レイトチェックアウト可</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[day_camp_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-day-camp" type="checkbox" value="true" name="q[day_camp_eq_any]" />
                    <label class="form-check-label" for="switch-day-camp">デイキャンプ可</label>
                </div>
            </div>
            <div class="mt-3">
                <p class="d-inline p-2 select-genre">
                    <i class="far fa-circle fa-fw"></i>立地条件
                </p>
                <div class="form-check form-switch my-2">
                    <input name="q[sea_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-sea" type="checkbox" value="true" name="q[sea_eq_any]" />
                    <label class="form-check-label" for="switch-sea">海</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[lake_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-lake" type="checkbox" value="true" name="q[lake_eq_any]" />
                    <label class="form-check-label" for="switch-lake">湖</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[river_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-river" type="checkbox" value="true" name="q[river_eq_any]" />
                    <label class="form-check-label" for="switch-river">川</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[mountain_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-mountain" type="checkbox" value="true" name="q[mountain_eq_any]" />
                    <label class="form-check-label" for="switch-mountain">山</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[woods_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-woods" type="checkbox" value="true" name="q[woods_eq_any]" />
                    <label class="form-check-label" for="switch-woods">林間</label>
                </div>
            </div>
            <div class="mt-3">
                <p class="d-inline p-2 select-genre">
                    <i class="far fa-circle fa-fw"></i>サイト条件
                </p>
                <div class="form-check form-switch my-2">
                    <input name="q[section_site_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-section-site" type="checkbox" value="true" name="q[section_site_eq_any]" />
                    <label class="form-check-label" for="switch-section-site">区画サイト有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[free_site_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-free-site" type="checkbox" value="true" name="q[free_site_eq_any]" />
                    <label class="form-check-label" for="switch-free-site">フリーサイト有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[ground_turf_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-ground-turf" type="checkbox" value="true" name="q[ground_turf_eq_any]" />
                    <label class="form-check-label" for="switch-ground-turf">芝</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[ground_soil_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-ground-soil" type="checkbox" value="true" name="q[ground_soil_eq_any]" />
                    <label class="form-check-label" for="switch-ground-soil">土</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[ground_wood_deck_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-ground-wood-deck" type="checkbox" value="true" name="q[ground_wood_deck_eq_any]" />
                    <label class="form-check-label" for="switch-ground-wood-deck">ウッドデッキ</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[ground_sand_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-ground-sand" type="checkbox" value="true" name="q[ground_sand_eq_any]" />
                    <label class="form-check-label" for="switch-ground-sand">砂</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[bonfire_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-bonfire" type="checkbox" value="true" name="q[bonfire_eq_any]" />
                    <label class="form-check-label" for="switch-bonfire">焚き火可</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[direct_fire_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-direct-fire" type="checkbox" value="true" name="q[direct_fire_eq_any]" />
                    <label class="form-check-label" for="switch-direct-fire">直火可</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[car_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-car" type="checkbox" value="true" name="q[car_eq_any]" />
                    <label class="form-check-label" for="switch-car">車の横付け可</label>
                </div>
            </div>
            <div class="mt-3">
                <p class="d-inline p-2 select-genre">
                    <i class="far fa-circle fa-fw"></i>施設条件
                </p>
                <div class="form-check form-switch my-2">
                    <input name="q[gate_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-gate" type="checkbox" value="true" name="q[gate_eq_any]" />
                    <label class="form-check-label" for="switch-gate">キャンプ場ゲート有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[manager_resident_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-manager-resident" type="checkbox" value="true" name="q[manager_resident_eq_any]" />
                    <label class="form-check-label" for="switch-manager-resident">24時間管理人常駐</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[trash_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-trash" type="checkbox" value="true" name="q[trash_eq_any]" />
                    <label class="form-check-label" for="switch-trash">ゴミ捨て場有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[coin_shower_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-coin-shower" type="checkbox" value="true" name="q[coin_shower_eq_any]" />
                    <label class="form-check-label" for="switch-coin-shower">コインシャワー有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[free_shower_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-free-shower" type="checkbox" value="true" name="q[free_shower_eq_any]" />
                    <label class="form-check-label" for="switch-free-shower">無料シャワー有</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[washlet_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-washlet" type="checkbox" value="true" name="q[washlet_eq_any]" />
                    <label class="form-check-label" for="switch-washlet">ウォシュレット式トイレ</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[flush_toilet_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-flush-toilet" type="checkbox" value="true" name="q[flush_toilet_eq_any]" />
                    <label class="form-check-label" for="switch-flush-toilet">水洗式トイレ</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[pets_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-pets" type="checkbox" value="true" name="q[pets_eq_any]" />
                    <label class="form-check-label" for="switch-pets">ペット可</label>
                </div>
                <div class="form-check form-switch my-2">
                    <input name="q[cancel_eq_any]" type="hidden" value="" /><input class="form-check-input" id="switch-cancel" type="checkbox" value="false" name="q[cancel_eq_any]" />
                    <label class="form-check-label" for="switch-cancel">キャンセル料無</label>
                </div>
            </div>
            <input type="submit" name="commit" value="検索" class="camp-commit btn btn-outline-light search-btn mt-3" data-disable-with="検索" />
        </form>
    </div>

    <h2 class="text-center my-5">
        <span class="page-title">C</span>
        <span class="page-title">A</span>
        <span class="page-title">M</span>
        <span class="page-title">P</span>
        <span class="page-title">-</span>
        <span class="page-title">S</span>
        <span class="page-title">T</span>
        <span class="page-title">Y</span>
        <span class="page-title">L</span>
        <span class="page-title">E</span>
    </h2>
    <p class="text-center my-5">スタイルごとにキャンプ場を探す</p>
    <div class="row text-center">
        <div class="col-md-4 my-5">
            <form class="field_search" id="field_search" action="/fields/search" accept-charset="UTF-8" method="get">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-mountain fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="elevation_search my-3">標高で探す</h4>
                <p class="elevation_text">標高を選んでキャンプ場を探そう</p>
                <input required="required" placeholder="MIN" class="form-control" type="number" name="q[elevation_gteq]" id="q_elevation_gteq" />
                <div>〜</div>
                <input placeholder="MAX" class="form-control" type="number" name="q[elevation_lteq]" id="q_elevation_lteq" />
                <div>
                    <input type="submit" name="commit" value="検索" class="camp-style btn btn-outline-light search-btn mt-4 w-100" data-disable-with="検索" />
                </div>
            </form>
        </div>
        <div class="under-main-link col-md-4 my-5">
            <a href="/fields/search?q%5Bdirect_fire_eq%5D=true">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-burn fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">直火ができるキャンプ場</h4>
                <p class="text-muted">直火を楽しめるキャンプ場で<br>自然を味わおう</p>
            </a>
        </div>
        <div class="under-main-link col-md-4 my-5">
            <a href="/fields/search?q%5Bwashlet_eq%5D=true">
                <span class="fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x text-primary"></i>
                    <i class="fas fa-toilet fa-stack-1x fa-inverse"></i>
                </span>
                <h4 class="my-3">ウォシュレット検索</h4>
                <p class="text-muted">ウォシュレット式トイレ完備の<br>キャンパーに優しいキャンプ場</p>
            </a>
        </div>
    </div>
    <div class="page-section">
        <div class="container">
            <div class="row text-center">
                <div class="under-main-link col-md-4 my-5">
                    <a href="/fields/search?q%5Bnear_station_km_lteq%5D=1">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-hiking fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">徒歩で行けるキャンプ場まとめ</h4>
                        <p class="text-muted">車が無くたってキャンプに行ける！<br>最寄り駅から1km以内の<br>キャンプ場を集めました</p>
                    </a>
                </div>
                <div class="under-main-link col-md-4 my-5">
                    <a href="/fields/search?q%5Blaid_back_camp_eq%5D=true">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-book-reader fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">ゆるキャン△聖地(キャンプ場)巡礼</h4>
                        <p class="text-muted">人気漫画ゆるキャンに登場する<br>キャンプ場をまとめました</p>
                    </a>
                </div>
                <div class="under-main-link col-md-4 my-5">
                    <a href="/fields/search?q%j5Btwo_people_solo_camp_eq%5D=true">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-book-open fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">ふたりソロキャンプ検索</h4>
                        <p class="text-muted">ふたりソロキャンプ地に出掛けよう！</p>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-center">
        <img src="top-under-img.jpg" alt="">
    </div>

    <footer>
        <div class="d-flex align-items-center justify-content-end my-4 me-1">
            <a class="btn btn-outline-light me-3" href="/users/sign_in">ログイン</a>
            <a class="create-btn btn btn-light me-3" href="/users/sign_up">新規登録</a>
        </div>
        <ul>
            <li><a class="footer-link" href="/contacts/new">お問い合わせ(キャンプ場追加希望もこちら)</a></li>
            <li><a class="footer-link" href="/static_pages/terms">利用規約</a></li>
            <li><a class="footer-link" href="/static_pages/privacy_policy">プライバシーポリシー</a></li>
        </ul>
        <div class="text-center my-5">
            ©2023 TO_CAMP All Rights Reserved.
        </div>
    </footer>

</body>

</html>