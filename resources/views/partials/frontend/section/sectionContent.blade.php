<section class="container">
    <table class="table">
        <h1 class="text-center py-3">Voiture Rouge</h1>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Année</th>
                <th scope="col">Couleur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                @if ($car->color->color == 'Rouge')
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->marque }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color->color }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <hr>
    <h1 class="text-center py-3">Voiture Bleu</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Année</th>
                <th scope="col">Couleur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                @if ($car->color->color == 'Bleu')
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->marque }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color->color }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <hr>
    <h1 class="text-center py-3">Voiture Jaune</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Année</th>
                <th scope="col">Couleur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                @if ($car->color->color == 'Jaune')
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->marque }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color->color }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
    <hr>
    <h1 class="text-center py-3">Voiture Noir</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Marque</th>
                <th scope="col">Année</th>
                <th scope="col">Couleur</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cars as $car)
                @if ($car->color->color == 'Noir')
                    <tr>
                        <th scope="row">{{ $car->id }}</th>
                        <td>{{ $car->marque }}</td>
                        <td>{{ $car->year }}</td>
                        <td>{{ $car->color->color }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</section>
