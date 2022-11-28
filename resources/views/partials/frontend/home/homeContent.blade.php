<section class="container">
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
            <tr>
                <th scope="row">{{ $car->id }}</th>
                <td>{{ $car->marque }}</td>
                <td>{{ $car->year }}</td>
                <td>{{ $car->color->color }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</section>
