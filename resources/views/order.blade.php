<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url('css/order.css')}}">
    <title>Make Order</title>
</head>
<body>

    <header> <!----------------------HEADER------------------------>
        <a href="/" class="logo_admin">PCB Store</a>
        <div class="cust_data">
        <a href="/cart">My Cart</a>
        </div>
    </header><!---------------------------------------------------->
    <section>
        <form action="/order" method="POST" enctype="multipart/form-data">
            @csrf
                            <section class="progress-area"></section>
                            <section class="uploaded-area"></section>
                            <section class="uploaded-area"></section>
                            <section class="uploaded-area"></section>

                        <!--SIZE ELEMENT-->
            <label for="one">Size (single):</label>
            <input type="number" name ="sizex" id="size" placeholder="               x in cm" required>
            <input type="number" name ="sizey" id="size" placeholder="               y in cm"required><br>

                        <!--QUANTITY ELEMENT-->
            <label for="o">Quantity (single):</label>
            <input type="number" name ="quantity" id="quantity" required><br>

                            <!--LAYERS ELEMENT-->
            <div class="container" id="checkbox">
            <label for="checkbox">Layers:</label>
                <label class="option_item" >
                    <input type="radio" name="layers" id="layers" class="checkbox" value="1" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name"><h24>1 layer</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="2" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">2 layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="4" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">4 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="6" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">6 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="8" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">8 Layers</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="layers" id="layers" class="checkbox" value="10" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">10 Layers</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Min Track/Spacing:</label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="4/4mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">4/4mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="5/5mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">5/5mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="6/6mil" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">6/6mil</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="min_track" id="min_track" class="checkbox" value="8/8" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">8/8</div>
                    </div>
                </label>
            </div>

            <div class="container" id="checkbox">
            <label for="checkbox">Silkscreen:</label>
                <label class="option_item">
                    <input type="radio" name="silkscreen" id="silkscreen" class="checkbox" value="white" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">White</div>
                    </div>
                </label>
                <label class="option_item">
                    <input type="radio" name="silkscreen" id="silkscreen" class="checkbox" value="black" required>
                    <div class="option_inner">
                        <div class="tickmark"></div>
                        <div class="name">Black</div>
                    </div>
                </label>
            </div>

            <button type="submit" class="btn btn-success">add to cart</button>

        </form>
    </section>

</body>
</html>
