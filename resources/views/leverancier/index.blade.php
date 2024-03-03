<x-app-layout>
<script src="https://kit.fontawesome.com/344423929d.js" crossorigin="anonymous"></script>
    <div class=" flex justify-center flex-col items-center">
        <h1 class="text-center text-4xl m-20">Overzicht Magazijn Jamin</h1>
            <table class="text-center flex justify-center">
                <tr class="text-xl">
                    <th class="border-solid border-2 border-sky-400">Naam</th>
                    <th class="border-solid border-2 border-sky-400">ContactPersoon</th>
                    <th class="border-solid border-2 border-sky-400">LeverancierNummer</th>
                    <th class="border-solid border-2 border-sky-400">Mobiel</th>
                    <th class="border-solid border-2 border-sky-400">AantalVerschillendeProducten</th>
                </tr> 
                @foreach ($leveranciers as $leverancier)
                    <tr>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Naam }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->ContactPersoon }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->LeverancierNummer }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->Mobiel }}</td>
                        <td class="border-solid border-2 border-sky-400">{{ $leverancier->productPerLeverancier->count() }}</td>
                    </tr>
                @endforeach
            </table>
    </div>
</x-app-layout>