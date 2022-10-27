<h1>create product</h1>

<form action="/products" method="POST">
    @csrf
    NAME: <input type="text" name="name"> <br>
    PRICE: <input type="number" name="price"> <br>
    DESC: <input type="text" name="description"> <br>
    IMG: <input type="text" name="image_url"> <br>
    <input type="submit" value="save">
</form>
