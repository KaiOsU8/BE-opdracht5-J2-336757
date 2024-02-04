<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Overzicht Magazijn Jamin</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Barcode</th>
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">VerpakkingsEenheid</th>
                    <th class="border-solid border-2 border-sky-400">AantalAanwezig</th>
                </tr>
                @foreach ($products as $product)
                    @foreach ($product->magazijn as $magazijn)
                        <tr>
                            <td class="border-solid border-2 border-sky-400">{{ $product->Barcode }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $product->Naam }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $magazijn->VerpakkingsEenheid }}</td>
                            <td class="border-solid border-2 border-sky-400">{{ $magazijn->AantalAanwezig }}</td>
                        </tr>
                    @endforeach
                @endforeach
            </table>
    </div>
</x-app-layout>