{{--

--}}

@extends('default')

@section('content')

    <div class="flex-container">

        <div class="flex-container-column" id="home_page">
            <h1 class="page-title" id="home_title_1">Venez découvrir</h1>
            <h1 class="page-title" id="home_title_2">le plus vieux quartier de Lyon</h1>
            <h2 id="button_parcours">Organisez votre propre visite du quartier <img src="img\map-icon-white.svg" id="map_icon"/></h2>
        </div>

        <div id="home_history">
            <div id="home_history_triangle"></div>
            <div id="home_history_square"></div>
            <div class="flex-container">
                <div class="container-text">
                    <h2>Un peu d'histoire...</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="container-map">
                    <div class="overlay" onClick="style.pointerEvents='none'"></div>
                    <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11133.988129538877!2d4.8169921898783965!3d45.76122843568518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebaaef7e7f5f%3A0x2d9cc97768f72426!2sVieux+Lyon%2C+69005+Lyon%2C+France!5e0!3m2!1sfr!2sfr!4v1478164165338" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe></div>
                </div>
            </div>
        </div>

        <div id="event_container">
            <?php foreach (['oui'] as $oui){/* ?>
            <div class="event">
                <div class="event-header">
                    <div class="event-title"><?= $event['name'] ?></div>
                    <div class="event-place">@ <?=$event['place'] ?></div>
                    <div class="event-hour">
                        <?php
                        $date = date_create($event['date']);
                        echo $date->format('M d')
                        ?>
                        @ <?= $date->format('H\hi') ?>
                    </div>
                </div>
                <div class="event-date">
                    <div class="month">
                        <?= $date->format('M') ?>
                    </div>
                    <div class="day">
                        <?= $date->format('d') ?>
                    </div>
                    <div class="dayWeek">
                        <?= $date->format('D') ?>
                    </div>
                </div>
            </div>
            <?php */} ?>
        </div>
        <div id="datavision_container" class="flex-container">
            <div class="home-datavision">
                <div class="home-datavision-number">352</div>
                <div class="home-datavision-description">monuments culturels</div>
            </div>
            <div class="home-datavision">
                <div class="home-datavision-number">15</div>
                <div class="home-datavision-description">traboules</div>
            </div>
            <div class="home-datavision">
                <div class="home-datavision-number">100%</div>
                <div class="home-datavision-description">des habitants se disent heureux dans ce quartier :)</div>
            </div>
        </div>


    </div>


@endsection



@section('script')

    {{-- Mettre le jQuery ici --}}

@endsection