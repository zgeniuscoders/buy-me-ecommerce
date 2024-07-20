@extends('layouts.default')

@section('title')
    Page d'accueil
@endsection

@section('content')
    <main class="container mx-auto lg:px-0 px-4">

        <table class="w-full text-sm text-left rtl:text-right text-gray-500 my-8">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Qty
                </th>
                <th scope="col" class="px-6 py-3">
                    Subtotal
                </th>
            </tr>
            </thead>
            <tbody>

            <tr class="bg-white hover:bg-gray-50">
                <th scope="row"
                    class="flex items-center px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                    <img class="w-10 h-10 rounded-md"
                         src="https://unsplash.com/photos/ai-generated-portrait-of-a-dark-haired-model-wearing-a-pink-shirt-nT57h53Dq3c"
                         alt="Jese image">
                </th>
                <td class="px-6 py-4">
                    $100
                </td>
                <td class="px-6 py-4">

                    <input type="number" class="bg-transparent text-center p-2 border rounded-md w-[20px]"
                           placeholder="2">

                </td>
                <td class="px-6 py-4">
                    $100
                </td>
            </tr>
            </tbody>
        </table>

        <section>
            <div>

            </div>


            
        </section>
    </main>
@endsection

