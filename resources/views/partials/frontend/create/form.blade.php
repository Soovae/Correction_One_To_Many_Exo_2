<section>
    <form action={{ route('cars.store') }} method="POST">
        @csrf
        <label for="">Marque : </label>
        <input type="text" name="marque" id="">
        <label for="">Année</label>
        <input type="number" name="year" id="">
        <select name="color_id" id="">
            @foreach ($colors as $color)
                <option value="{{ $color->id }}">{{ $color->color }}</option>
            @endforeach
        </select>
        <input class="btn btn-success" type="submit" value="Create">
    </form>
</section>