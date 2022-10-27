<h1>edit product</h1>

<form action="/products/{{ $product->id }}" method="POST">
    @method('PUT')
    @csrf
    NAME: <input type="text" name="name" value="{{ $product->name }}"> <br>
    PRICE: <input type="number" name="price" value="{{ $product->price }}"> <br>
    DESC: <input type="text" name="description" value="{{ $product->description }}"> <br>
    IMG: <input type="text" name="image_url" value="{{ $product->image_url }}"> <br>
    <input type="submit" value="save">
</form>
