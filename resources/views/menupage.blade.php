<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu card page</title>
    <link rel="stylesheet" href="style/style.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <section class="menu">
     
        <div class="cardlist">
            <div class="resto">
                <div class="resto_header">
                    <div class="resto_pic">
                        <img src="https://i.gojekapi.com/darkroom/gofood-indonesia/v2/images/uploads/8ceb09b1-2ff8-4e92-9e84-ae9eb8c70dd2_brand-image_1733091199022.jpg?auto=format" alt="McDonald's, Sentul City">
                    </div>
                    <div class="resto_desc">
                        <div class="resto_name">McDonald's, Sentul City</div>
                        <div class="resto_category">Sweets, Snacks, Fast Food</div>
                    </div>
                </div>
                <div class="resto_rate" >
                    <div class="review" >
                        <span class="fa fa-star checked"></span>
                        <p>4.7</p>
                    </div>
                    <div class="price" >
                        <div class="label">
                            <p1>$</p1>
                            <p1>$</p1>
                            <p1>$</p1>
                            <p2>$</p2>
                        </div>
                        <p>40k - 100k</p>
                    </div>
                </div>
            </div>
           

            <div class="cardlistnye" > 
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
            <div class="card"></div>
        </div>
          
            <button onclick="buttonmenu()">cart</button>
        </div>


        <div class="cart" >
            <div class="headercart" style="position: sticky;">
                <div class="backtolist" >
                    <button onclick="backbuttonmenu()">X</button>
                    </div>
                <div class="carttitle">
                    <h1>CART</h1>
                    <h2>McDonald's, Sentul City</h2>
                </div>
            </div>

            <div class="cartmid" >
                <div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div>

                <div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1 >Double Cheeseburger</h1>
                        <h2 >Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div>
                <div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div> 
                </div><div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div><div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div><div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div><div class="cartmenulist">
                    <div class="quantity" >
                        <button onclick="increment()">+</button>
                        <input type="text" id="number" value="1" readonly>
                        <button onclick="decrement()">−</button>
                    </div>
                    <div class="picturemenu">
                    </div>
                    <div class="descmenu">
                        <h1>Double Cheeseburger</h1>
                        <h2>Rp. 42,000</h2>
                        <p>Tidak pakai keju, tidak pake acar</p>
                    </div>
                </div>

            </div>

            <div class="totalmenu">
                <div class="totallist">
                    <h1>Total</h1>
                    <h1>Rp. 50,000</h1>
                </div>
                <button>PAYMENT</button>
            </div>
           
        </div>
        <div class="optionallist"></div>
    </section>
</body>
</html>

<script>
     function increment() {
      const input = document.getElementById('number');
      input.value = parseInt(input.value) + 1;
    }

    function decrement() {
      const input = document.getElementById('number');
      if (parseInt(input.value) > 0) {
        input.value = parseInt(input.value) - 1;
      }
    }

    function buttonmenu(){
        const menucard = document.querySelector('.cardlist');
        const menucart = document.querySelector('.cart');
        
        menucard.style.width ='72%';
        menucart.style.width='28%';
        menucart.style.display ='flex';
        document.body.style.overflow='hidden';
    }

    function backbuttonmenu(){
        const menucard = document.querySelector('.cardlist');
        const menucart = document.querySelector('.cart');
        
        menucard.style.width ='100%';
        menucart.style.width='0%';
        menucart.style.display ='none';
        document.body.style.overflow='auto';
    }

</script>