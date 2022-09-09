@extends('agenciafmd/frontend::html/master', [
'bodyClass' => 'index',
'critical' => 'index.css',
])

@section('title', 'Home')
@section('description', 'Descrição da página')

@section('content')
<main>

  <section class="overflow-hidden banner">
    <x-frontend::picture image="/images/img-banner.jpg"
                         title="Onde viver é mais que existir"
                         alt="Foto panorâmica do empreendimento Haia Boa Vista"
                         class="img-bg"
                         hasBreakpoints
                         breakpointDesktopWidth="1400px"
                         breakpointDesktopSuffix="xl"
                         breakpointNotebookWidth="768px"
                         breakpointNotebookSuffix="lg" />

    <div class="container">
      <div class="row gap-lg-12 gap-xl-20 justify-content-between">
        <div class="col-lg-4 align-self-center">
          <svg role="img"
               class="ms-sm-0 mx-auto d-block ic-logo-haia">
            <use xlink:href="/svg/sprite.svg#logo-haia"></use>
          </svg>
        </div>
        <div class="col-md-3">
          <div class="row gx-lg-10 justify-md-content-center">
            <div class="col-7 col-sm-4 col-md-9">
              <h1 class="mt-1 mb-20 mb-sm-0 h6 fs-xl-4 lh-1hq font-regular fw-bold ls-4 text-white">
                <span class="visually-hidden">
                  Haia Boa Vista</span> Onde viver é mais que existir
              </h1>
            </div>
          </div>
        </div>
        <div class="col-12">
          <svg role="img"
               class="mt-5 mt-md-0 me-sm-0 img-sanitize ic-logo-karvas-grm">
            <use xlink:href="/svg/sprite.svg#logo-karvas-e-grm"></use>
          </svg>
        </div>
      </div>
    </div>
  </section>

  <section class="form">
    <div class="row gx-0">
      <div class="col-md-4">
        @livewire('frontend::contact')
      </div>
      <div class="col-md-8">
        <div class="bg-light hstack text-primary flex-grow-1 h-100 p-block-small p-lg-block p-xl-block-large">
          <div class="mb-md-3 mb-xl-0 mt-auto mb-md-auto">
            <div class="row g-0 g-xl-2">
              <div class="col-12">
                <h2 class="fs-base fs-xl-large ls-1">
                  Apartamentos de</h2>
              </div>
              <div class="col-md-auto">
                <h3 class="lh-1">
                  <span class="text-squared d-block font-display text-lowercase  display-1">
                    116m</span>
                  <span class="d-block fs-base fs-xl-large ls-1">
                    com depósito privativo</span>
                  <strong class="fs-base fs-xl-large ls-1">
                    3 dormitórios</strong>
                </h3>
              </div>
              <div class="col align-self-center">
                <svg role="img"
                     class="my-2 d-block mx-md-auto ic ic-div">
                  <use xlink:href="/svg/sprite.svg#ic-div"></use>
                </svg>
              </div>
              <div class="col-md-auto">
                <h3 class="lh-1">
                  <span class="text-squared d-block font-display text-lowercase display-1">
                    151m</span>
                  <span class="d-block fs-base fs-xl-large ls-1">
                    com depósito privativo</span>
                  <strong class="fs-base fs-xl-large ls-1">
                    4 dormitórios</strong>
                </h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-dark p-md-block p-xl-block-large place">
    <div class="row gx-0 gx-md-5 gx-xl-8 align-items-center">
      <div class="col-md-7 order-2 order-lg-1">
        <picture>
          <x-frontend::single-source image="/images/img-room-photo.png"
                                     class="img-cover"
                                     alt="Vista panorâmica de sala com cozinha ao lado"
                                     title="Um lugar onde tudo acontece"
                                     width="744"
                                     height="461" />
        </picture>
      </div>
      <div class="col-md-5 order-1 order-lg-2">
        <div class="p-block-small p-md-0">
          <h2 class="h3 text-primary ls-2">
            Um lugar onde <strong class="d-block">tudo acontece</strong></h2>
          <span class="mb-2 fs-5 fw-bold d-block">
            Aprecie esta obra de arte</span>
          <p class="mb-2 fs-xl-large">
            Morar no Haia Boa Vista é viver repleto de possibilidades ao seu
            redor.<br>
            Estar imerso no desenvolvimento da cidade, onde estão as principais
            conexões que são essenciais para se viver bem.<br>
          </p>
          <p class="mb-2 fs-xl-large">
            Escolha o bem-estar daqueles que você mais ama.
            Apaixone-se por esse empreendimento.
          </p>
          <a href="#contact"
             class="btn btn-sm btn-light js-scroll-top"
             aria-label="Ir para formulário">
            Fale com nossos especialistas
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="position-relative location">
    <div class="mt-md-3 position-md-absolute start-0 end-0 location-title-body">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="p-block-small p-md-block-0 text-center">
              <h2 class="text-light text-md-primary h3 ls-2 fw-bold">
                Alto da boa vista</h2>
              <p class="text-light text-md-black fs-large">
                Um novo marco para você viver próximo de tudo <br>
                o que precisa,
                <strong>em um terreno de mais de 10.000m²</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-frontend::picture image="/images/img-location.jpg"
                         alt="Mapa da cidade onde tem um pin que será construído o empreendimento"
                         title=""
                         class="img-cover"
                         hasBreakpoints
                         breakpointDesktopWidth="1400px"
                         breakpointDesktopSuffix="xl"
                         breakpointNotebookWidth="768px"
                         breakpointNotebookSuffix="lg" />
    <div class="position-md-absolute start-0 bottom-0 end-0">
      <div class="row gx-0">
        <div class="col-12 col-md-5 col-xl-4">
          <div class="ms-md-5 p-block-small p-md-block-0 bg-primary">
            <p class="text-light fs-large">
              O bairro que une as maiores e mais importantes marcas dos
              universos da gastronomia, mercados, lojas, farmácias e
              praticidades.
            </p>
            <p class="text-light fs-large">
              Elegância, sofisticação e infraestrutura para estar conectado
              com o melhor que a cidade oferece.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="leisures">
    <div class="row g-0">
      <div class="col-md-6">
        <div class="p-block-small p-lg-block p-xl-block-large">
          <h2 class="mb-2 text-primary font-display text-capitalize">
            Lazer completo</h2>

          @php
          $leisures = [
          'ic-beach-tennis' => 'Quadra de beach tennis',
          'ic-tennis' => 'Quadra de tênis',
          'ic-pool-house' => 'Pool house',
          'ic-delivery' => 'Espaço delivery',
          'ic-adult-pool' => 'Piscina adulto',
          'ic-kid-pool' => 'Piscina infantil',
          'ic-pool-bar' => 'Bar da piscina',
          'ic-deck' => 'Deck molhado',
          'ic-bike' => 'Bicicletário',
          'ic-party-room' => 'Salões de festas gourmet',
          'ic-market' => 'Infraestrutura para mini-mercado',
          'ic-barbecue' => 'Churrasqueira',
          'ic-wine-bar' => 'Wine bar',
          'ic-fitness' => 'Fitness',
          'ic-pet-place' => 'Pet place',
          'ic-pet-shower' => 'Pet shower',
          'ic-mult-sport' => 'Quadra poliesportiva',
          'ic-dance-room' => 'Sala de dança',
          'ic-beauty-care' => 'Beauty care',
          'ic-massage' => 'Espaço massagem',
          'ic-adult-game-room' => 'Sala de jogos adulto',
          'ic-teen-game-room' => 'Sala de jogos teen',
          'ic-toy-room' => 'Brinquedoteca',
          'ic-playground' => 'Playground',
          'ic-coworking' => 'Coworking',
          'ic-steam-room' => 'Sauna',
          'ic-walk' => 'Pista de caminhada',
          ];
          @endphp
          <div class="row">
            @foreach($leisures as $icon => $title)
            <div class="col-12 col-md-6">
              <div class="hstack gap-0h">
                <div class="">
                  <svg role="img"
                       class="ic-lg {{ $icon }} text-primary">
                    <use xlink:href="/svg/sprite.svg#{{ $icon }}"></use>
                  </svg>
                </div>
                <div class="">
                  <h3 class="fs-base text-light text-transform-none">
                    {{ $title }}
                  </h3>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="vstack h-md-50 overflow-hidden justify-content-end p-block-small px-lg-block-large bg-light position-relative">
          <h2 class="mb-2 pt-10 pe-xl-20 text-primary font-display h1 lh-1 text-transform-none">
            +30 ambientes de lazer</h2>
          <p class="pe-4 pe-sm-14 pe-md-0 pe-xl-20 text-dark fs-4 ls-0h">
            distribuídos ao longo dos mais
            de <strong>7.000m²</strong> de área comum
          </p>
          <svg role="img"
               class="text-primary ic-graphics position-absolute top-0 end-0">
            <use xlink:href="/svg/sprite.svg#ic-graphics"></use>
          </svg>
        </div>
        <div class="vstack h-md-50 gap-2 justify-content-center p-block-small px-lg-block-large bg-primary text-light">
          <h2 class="mb-1 pe-xl-10 h3 ls-2">
            O maior Pool House
            da cidade com <strong>348m²</strong></h2>
          <p class="fs-large ls-0h">
            Distribuído em 2 ambientes integrados, esse espaço apresenta um
            conceito inovador de lazer premium: um salão de festas gourmet
            privativo, com churrasqueira e ampla piscina para
            confraternizações com sua família e convidados.
          </p>
          <div>
            <a href="#contact"
               title="Ir para formulário"
               aria-label="Ir para formulário"
               class="btn btn-dark btn-lg ls-1 js-scroll-top">
              Descubra mais detalhes
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-block-small py-lg-block py-xl-block-large bg-light gallery">
    <div class="container">
      <h2 class="mb-3 h3 text-dark text-center fw-bold">
        onde viver é mais que existir</h2>
      <div class="row justify-content-center gap-2">
        <div class="col-12">
          <div class="swiper text-dark swiper-gallery js-slider-gallery">
            <div class="swiper-wrapper">
              @php
              $gallery = [
              'gallery-01' => 'Wine bar',
              'gallery-02' => 'Quadra de tênis',
              'gallery-03' => 'Quadra poliesportiva',
              'gallery-04' => 'Quadra beach tênis',
              'gallery-05' => 'Piscinas adulto e infantil',
              'gallery-06' => 'Pet shower',
              'gallery-07' => 'Wine bar',
              'gallery-08' => 'Sala de massagem',
              'gallery-09' => 'Hall de entrada',
              'gallery-10' => 'Sala de jogos teen',
              'gallery-11' => 'Sala de jogos',
              'gallery-12' => 'Fitness',
              'gallery-13' => 'Salão de festas gourmet',
              'gallery-14' => 'Salão de festas gourmet',
              'gallery-15' => 'Salão de festas externo',
              'gallery-16' => 'Fachada',
              'gallery-17' => 'Sala de dança',
              'gallery-18' => 'Bar da piscina',
              'gallery-19' => 'Beauty care',
              'gallery-20' => 'Coworking',
              'gallery-21' => 'Casa de campo interna',
              'gallery-22' => 'Pool house externa',
              'gallery-23' => 'Suíte master',
              'gallery-24' => 'Cozinha e sala de jantar',
              'gallery-25' => 'Living integrado',
              'gallery-26' => 'Living integrado',
              'gallery-27' => 'Living integrado',
              ];
              @endphp
              @foreach($gallery as $img => $title)
              <div class="swiper-slide">
                <div class="position-relative">
                  <div class="row justify-content-center">
                    <div class="col-md-11">
                      <x-frontend::fancybox link="/images/img-{{ $img }}-lg@2x.jpg"
                                            gallery="gallery"
                                            title="{{ $title }}"
                                            class="d-block">
                        <x-frontend::picture image="/images/img-{{ $img }}.jpg"
                                             title="{{ $title }}"
                                             hasBreakpoints
                                             breakpointDesktopWidth="1400px"
                                             breakpointDesktopSuffix="xl"
                                             breakpointNotebookWidth="768px"
                                             breakpointNotebookSuffix="lg"
                                             pictureClass=""
                                             class="img-sanitize img-cover swiper-lazy" />
                      </x-frontend::fancybox>
                      <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
            <div class="swiper-button-prev text-primary">
              <svg role="img"
                   class="ic ic-arrow">
                <use xlink:href="/svg/sprite.svg#ic-arrow"></use>
              </svg>
            </div>
            <div class="swiper-button-next text-primary">
              <svg role="img"
                   class="ic ic-arrow">
                <use xlink:href="/svg/sprite.svg#ic-arrow"></use>
              </svg>
            </div>
          </div>
          <div class="mt-1">
            <div class="position-relative swiper-gallery-thumb">
              <div class="row justify-content-center">
                <div class="col-md-11">
                  <div class="swiper text-dark js-slider-gallery-thumb">
                    <div class="swiper-wrapper">
                      @foreach($gallery as $img => $title)
                      <div class="swiper-slide">
                        <picture class="d-flex">
                          <x-frontend::single-source image="/images/img-{{ $img }}-thumb.jpg"
                                                     title="{{ $title }}"
                                                     class="img-sanitize swiper-lazy"
                                                     alt="{{ $title }}" />
                        </picture>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-auto">
          <div class="d-grid">
            <a href="#contact"
               class="btn btn-dark btn-lg ls-1 js-scroll-top">
              saiba mais
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="plants py-block-small py-lg-block py-xl-block-large overflow-hidden">
    <div class="row g-0 gap-1 align-items-center">
      <div class="col-auto">
        <svg role="img"
             class="fill-primary text-dark ic-stripe-sm">
          <use xlink:href="/svg/sprite.svg#ic-stripe-small"></use>
        </svg>
      </div>
      <div class="col-auto">
        <h2 class="fw-bold h3 text-primary">plantas</h2>
      </div>
    </div>
    <div class="py-block">
      <div class="container">
        <div class="swiper swiper-plants js-slider-plants">
          <div class="swiper-wrapper">
            @php
            $plants = [
            [
            'meters' => '116',
            'dorms' => '3 dormitórios',
            'detail-1' => 'com depósito privativo',
            'image' => 'img-plan116-3dorm.png',
            'image@2x' => 'img-plan116-3dorm-lg@2x.png'
            ],
            [
            'meters' => '151',
            'dorms' => '4 dormitórios',
            'detail-1' => 'com depósito privativo',
            'image' => 'img-plan151-4dorm.png',
            'image@2x' => 'img-plan151-4dorm-lg@2x.png'
            ],
            ];
            @endphp
            @foreach($plants as $plant)
            <div class="swiper-slide overflow-hidden">
              <div class="position-relative z-index-1"
                   data-swiper-parallax="-100%">
                <div class="row align-items-center justify-content-center">
                  <div class="col-11">
                    <div class="row align-items-center">
                      <div class="col-md-4">
                        <h3 class="mb-block-small mb-md-0 lh-1 text-primary">
                          <span class="text-squared d-block font-display text-lowercase display-1">
                            {{ $plant['meters'] }}m</span>
                          <span class="d-block fs-base fs-xl-large ls-1">
                            {{ $plant['detail-1'] }}</span>
                          <strong class="fs-base fs-xl-large ls-1">
                            {{ $plant['dorms'] }}</strong>
                        </h3>
                      </div>
                      <div class="col-md-8">
                        <x-frontend::fancybox link="/images/{{ $plant['image@2x'] }}"
                                              gallery="plants"
                                              title="Planta de {{ $plant['meters'] }}m² com {{ $plant['dorms'] }}"
                                              data-swiper-parallax="-50%"
                                              data-swiper-parallax-scale=".25"
                                              class="d-flex">
                          <x-frontend::picture image="/images/{{ $plant['image'] }}"
                                               title="Planta de {{ $plant['meters'] }}m² com {{ $plant['dorms'] }}"
                                               hasBreakpoints
                                               pictureClass="d-block ratio ratio-16x9"
                                               class="img-cover swiper-lazy" />
                        </x-frontend::fancybox>
                        <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <div class="swiper-button-prev text-primary">
            <svg role="img"
                 class="ic ic-arrow">
              <use xlink:href="/svg/sprite.svg#ic-arrow"></use>
            </svg>
          </div>
          <div class="swiper-button-next text-primary">
            <svg role="img"
                 class="ic ic-arrow">
              <use xlink:href="/svg/sprite.svg#ic-arrow"></use>
            </svg>
          </div>
        </div>
        <div class="mt-block-small">
          <div class="row justify-content-center">
            <div class="col-11">
              <div class="row">
                <div class="col-md-5 col-lg-4">
                  <div class="hstack">
                    <div class="p-1 hstack bg-primary">
                      <svg role="img"
                           class="ic ic-md">
                        <use xlink:href="/svg/sprite.svg#ic-plant"></use>
                      </svg>
                    </div>
                    <div class="py-0hq px-1h flex-fill text-dark bg-light">
                      <span class="d-block">Conheça todas as opções</span>
                      de plantas em nosso stand
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-primary pt-block-small pt-block pt-xl-block-large tour">
    <div class="row g-0 gap-1 align-items-center">
      <div class="col-auto">
        <svg role="img"
             class="fill-light text-primary ic-stripe-sm">
          <use xlink:href="/svg/sprite.svg#ic-stripe-small"></use>
        </svg>
      </div>
      <div class="col col-md-4">
        <h2 class="fw-bold h3 text-light">
          tour virtual</h2>
      </div>
      <div class="col-md-6 order-md-4">
        <p class="px-block-small pe-md-0 ps-md-9hq text-center text-md-start fs-xl-large">
          Selecione a planta desejada e conheça o apartamento
        </p>
      </div>
      <div class="ms-auto col-md-4 col-lg-6 order-md-3">
        <div class="pe-md-block pe-md-block-large tour-button-body">
          <ul class="nav nav-pills gap-2 gap-xl-3 justify-content-center justify-content-md-end"
              id="pills-tab"
              role="tablist">
            <li class="nav-item"
                role="presentation">
              <button class="px-2 nav-link btn btn-lg btn-dark active"
                      id="tour-1-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#tour-1"
                      type="button"
                      role="tab"
                      aria-controls="tour-1"
                      aria-selected="true">
                Planta 116m²
              </button>
            </li>
            <li class="nav-item"
                role="presentation">
              <button class="px-2 nav-link btn btn-lg btn-dark"
                      id="tour-2-tab"
                      data-bs-toggle="pill"
                      data-bs-target="#tour-2"
                      type="button"
                      role="tab"
                      aria-controls="tour-2"
                      aria-selected="false">
                Planta 151m²
              </button>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="p-block-small p-md-block pb-md-block-large px-md-block-large">
      <div class="tab-content"
           id="pills-tabContent">
        <div class="tab-pane fade show active"
             id="tour-1"
             role="tabpanel"
             aria-labelledby="tour-1-tab">
          <iframe src="https://portal.iteleport.com.br/tour3d/karvas-grm-116-m2/fullscreen/"
                  width="100%"
                  height="600"
                  class="tour-virtual-iframe"
                  title="Visite o decorado por meio do Tour Virtual 360º"
                  loading="lazy"></iframe>
        </div>
        <div class="tab-pane fade"
             id="tour-2"
             role="tabpanel"
             aria-labelledby="tour-2-tab">
          <iframe src="https://portal.iteleport.com.br/tour3d/karvas-grm-151-m2/fullscreen/"
                  width="100%"
                  height="600"
                  class="tour-virtual-iframe"
                  title="Visite o decorado por meio do Tour Virtual 360º"
                  loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </section>

  <section class="bg-light project">
    <div class="row g-0">
      <div class="col-2 col-md-1">
        <picture>
          <x-frontend::single-source image="/images/img-graph.png"
                                     alt="Imagem mostrando um grafismo com cores azul e verde"
                                     class="img-cover-width"
                                     title="" />
        </picture>
      </div>
      <div class="col-10 col-md-11">
        <div class="m-block-small m-md-block m-xl-block-large">
          <h2 class="text-primary font-title-regular h3 mb-3">
            projeto assinado
            <span class="d-block"> por <strong>
              grandes referências</strong></span></h2>
          <div class="row gx-0 gx-lg-3">
            <div class="col-sm-6 col-md-3">
              <div class="card bg-light">
                <div class="card-body ps-0 vstack">
                  <div class="row gx-0">
                    <div class="col-11">
                      <picture class="d-block">
                        <x-frontend::single-source image="/images/picture-1.png"
                                                   alt="Bia Hajnal"
                                                   title="Bia Hajnal"
                                                   class="img-cover" />
                      </picture>
                    </div>
                  </div>
                  <h3 class="mb-0q pt-1 fw-bold fs-xlarge fs-xl-6 text-primary">
                    Bia Hajnal</h3>
                  <ul class="list-unstyled">
                    <li>
                      <span class="pb-1h fs-small fs-xl-base text-primary d-block ls-1 text-uppercase">
                        Interiores das <br>Unidades Decoradas</span>
                      <p class="text-dark fs-xl-large">
                        “O conceito deste apartamento trabalha uma linguagem com
                        um clima mais natural, com
                        formas orgânicas, texturas e acabamentos que remetem
                        ao bem-estar e à natureza.”
                      </p>
                    </li>
                  </ul>
                  <div class="mt-auto d-grid">
                    <a class="py-0h py-xl-1q btn btn-dark text-light hstack text-start"
                       href="https://www.youtube.com/watch?v=lNOEskXg364&list=PL5C90tCk1y_B83UzD7ft9dg2t6j-8XTcF&index=4"
                       data-fancybox="video"
                       aria-label="Clique aqui e assista o vídeo">
                      <span>
                        <svg width="35px"
                             height="35px"
                             role="img"
                             class="d-inline me-1 ic-play">
                          <use xlink:href="/svg/sprite.svg#ic-play"></use>
                        </svg>
                      </span>
                      <span class="fs-base fs-sm-large fs-xl-xlarge text-transform-none">
                        <span class="d-block d-xl-inline-block">Clique aqui
                                                                e</span> assista
                                                                         o vídeo</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card bg-light">
                <div class="card-body ps-0 vstack">
                  <div class="row g-0">
                    <div class="col-11">
                      <picture class="d-block">
                        <x-frontend::single-source image="/images/picture-2.png"
                                                   alt="Márcia Leitão"
                                                   title="Márcia Leitão"
                                                   class="img-cover" />
                      </picture>
                    </div>
                  </div>
                  <h3 class="mb-0q pt-1 fw-bold fs-xlarge fs-xl-6 text-primary">
                    Márcia Leitão</h3>
                  <ul class="list-unstyled">
                    <li>
                      <span class="pb-1h fs-small fs-xl-base text-primary d-block ls-1 text-uppercase">
                        Interiores <br> das Áreas Comuns</span>
                      <p class="text-dark fs-xl-large">
                        “O conceito das áreas comuns considerou o perfil
                        contemporâneo do Haia.
                        O uso de materiais nobres, oferecendo ambientes
                        exclusivos com conforto
                        visual e com muita sofisticação.”
                      </p>
                    </li>
                  </ul>
                  <div class="mt-auto d-grid">
                    <a class="py-0h py-xl-1q btn btn-dark text-light hstack text-start"
                       href="https://www.youtube.com/watch?v=sqwGPeDG9EE&list=PL5C90tCk1y_B83UzD7ft9dg2t6j-8XTcF&index=2"
                       data-fancybox="video"
                       aria-label="Clique aqui e assista o vídeo">
                      <span>
                        <svg width="35px"
                             height="35px"
                             role="img"
                             class="d-inline me-1 ic-play">
                          <use xlink:href="/svg/sprite.svg#ic-play"></use>
                        </svg>
                      </span>
                      <span class="fs-base fs-sm-large fs-xl-xlarge text-transform-none">
                        <span class="d-block d-xl-inline-block">Clique aqui
                                                                e</span> assista
                                                                         o vídeo</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card bg-light">
                <div class="card-body ps-0 vstack">
                  <div class="row g-0">
                    <div class="col-11">
                      <picture class="d-block">
                        <x-frontend::single-source image="/images/picture-3.png"
                                                   alt="Ricardo Bandeira"
                                                   title="Ricardo Bandeira"
                                                   class="img-cover" />
                      </picture>
                    </div>
                  </div>
                  <h3 class="mb-0q pt-1 fw-bold fs-xlarge fs-xl-6 text-primary">
                    Ricardo Bandeira</h3>
                  <ul class="list-unstyled pb-2">
                    <li>
                      <span class="pb-1h fs-small fs-xl-base text-primary d-block ls-1 text-uppercase">
                        Projeto <br>Arquitetônico</span>
                      <p class="text-dark fs-xl-large">
                        “O Haia Boa Vista é um empreendimento com localização
                        especial.
                        Um projeto com elegância, com uma volumetria incrível.
                        Esse produto das
                        incorporadoras Karvas e GRM será um marco arquitetônico
                        em Sorocaba.”
                      </p>
                    </li>
                  </ul>
                  <div class="mt-auto d-grid">
                    <a class="py-0h py-xl-1q btn btn-dark text-light hstack text-start"
                       href="https://www.youtube.com/watch?v=4ZlVSVswZ6o&list=PL5C90tCk1y_B83UzD7ft9dg2t6j-8XTcF&index=3"
                       data-fancybox="video"
                       aria-label="Clique aqui e assista o vídeo">
                      <span>
                        <svg width="35px"
                             height="35px"
                             role="img"
                             class="d-inline me-1 ic-play">
                          <use xlink:href="/svg/sprite.svg#ic-play"></use>
                        </svg>
                      </span>
                      <span class="fs-base fs-sm-large fs-xl-xlarge text-transform-none">
                        <span class="d-block d-xl-inline-block">Clique aqui
                                                                e</span> assista
                                                                         o vídeo</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="card bg-light">
                <div class="card-body ps-0 vstack">
                  <div class="row g-0">
                    <div class="col-11">
                      <picture class="d-block">
                        <x-frontend::single-source image="/images/picture-4.png"
                                                   alt="Sérgio Santana"
                                                   title="Sérgio Santana"
                                                   class="img-cover" />
                      </picture>
                    </div>
                  </div>
                  <h3 class="mb-0q pt-1 fw-bold fs-xlarge fs-xl-6 text-primary">
                    Sérgio Santana</h3>
                  <ul class="list-unstyled">
                    <li>
                      <span class="pb-1h fs-small fs-xl-base text-primary d-block ls-1 text-uppercase">
                        Projeto <br>Paisagístico</span>
                      <p class="text-dark fs-xl-large">
                        “Através do projeto procuramos expressar uma consciência
                        ambiental com
                        o propósito dos moradores estarem conectados a uma área
                        verde de +
                        7.000m². Tudo pensado, para criar ambientes que promovam
                        o bem-estar
                        físico e emocional.”
                      </p>
                    </li>
                  </ul>
                  <div class="mt-auto d-grid">
                    <a class="py-0h py-xl-1q btn btn-dark text-light hstack text-start"
                       href="https://www.youtube.com/watch?v=uWUCbGclsi0&list=PL5C90tCk1y_B83UzD7ft9dg2t6j-8XTcF&index=2"
                       data-fancybox="video"
                       aria-label="Clique aqui e assista o vídeo">
                      <span>
                        <svg width="35px"
                             height="35px"
                             role="img"
                             class="d-inline me-1 ic-play">
                          <use xlink:href="/svg/sprite.svg#ic-play"></use>
                        </svg>
                      </span>
                      <span class="fs-base fs-sm-large fs-xl-xlarge text-transform-none">
                        <span class="d-block d-xl-inline-block">Clique aqui
                                                                e</span> assista
                                                                         o vídeo</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
@endsection

@push('scripts')
<script type="text/javascript">
  createSlider({
    container: '.js-slider-plants',
    speed: 1000,
    lazy: true,
    parallax: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  const swiperGalleryThumb = createSlider({
    container: '.js-slider-gallery-thumb',
    lazy: true,
    spaceBetween: 16,
    slidesPerView: 3,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      [getThemeVariables().breakpoints.sm]: {
        slidesPerView: 5,
      },
      [getThemeVariables().breakpoints.md]: {
        slidesPerView: 7,
      },
      [getThemeVariables().breakpoints.lg]: {
        slidesPerView: 9,
      },
      [getThemeVariables().breakpoints.xl]: {
        slidesPerView: 11,
      },
    },
  });
  createSlider({
    container: '.js-slider-gallery',
    lazy: true,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    thumbs: {
      swiper: swiperGalleryThumb,
    },
  });
</script>
@endpush
