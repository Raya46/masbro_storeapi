<h1>list produk</h1>

<table>
    <thead>
        <tr>
            <th>name</th>
            <th>desc</th>
            <th>price</th>
            <th>img</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($produks as $produk)
        <tr>
            <td>{{ $produk->name }}</td>
            <td>{{ $produk->description }}</td>
            <td>{{ $produk->price }}</td>
            <td>{{ $produk->image_url }}</td>
            <td>
                <a href="/products/{{ $produk->id }}/edit">edit</a>
                <form action="/products/{{$produk->id}}" method="POST">
                @method("DELETE")
                @csrf
                <input type="submit" value="delete">
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
    <a href="/products/create">create</a>
</table>
