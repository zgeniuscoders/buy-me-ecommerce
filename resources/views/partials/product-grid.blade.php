{{--            products listing --}}
<div class="grid lg:grid-cols-4 gap-4 mt-8">

    @forelse ($products as $product)
        @include('partials.product-item', $product)
    @empty
        <div class="alert alert-info dark:text-white w-full col-span-4 text-center">
            <p class="text-xl">Aucuns articles n'ont été trouvés pour votre recherche. Veuillez essayer avec d'autres mots-clés.</p>
        </div>
    @endforelse

</div>
