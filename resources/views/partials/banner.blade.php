<div class="banner">

    <div class="container">

        <div class="slider-container has-scrollbar">

            @forelse($ads as $ad)
                <div class="slider-item">

                    <img src="{{$ad->image}}" alt="women's latest fashion sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">{{$ad->sub_title}}</p>

                        <h2 class="banner-title">{{$ad->title}}</h2>

                        <p class="banner-text">
                            {{$ad->description}}
                        </p>

                        <a href="{{$ad->url}}" class="banner-btn">{{$ad->button_text}}</a>

                    </div>

                </div>
            @empty
                <div class="slider-item">

                    <img src="/banner-1.jpg" alt="women's latest fashion sale" class="banner-img">

                    <div class="banner-content">

                        <p class="banner-subtitle">Boostez Votre Visibilité</p>

                        <h2 class="banner-title">Publiez Votre Annonce Aujourd'hui !</h2>

                        <a href="" class="banner-btn">Contactez-nous</a>

                    </div>

                </div>
            @endforelse

        </div>

    </div>

</div>
