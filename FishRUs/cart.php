<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cart</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<!--- navbar --->
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="index.php">Fish R US</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="aboutus.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopfish.php">Shop Fish</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shopsupplies.php">Shop Supplies</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customerlogin.php">Customer Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="distributorlogin.php">Distributor Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cart.php">Cart</a>
            </li>
        </ul>
    </div>
</nav>
<!--- Content enter body here --->
<div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
        <h1>Cart</h1>
    </div>
</div>
<div class="shopping-cart">
    <!-- Title -->
    <div class="title">
        Shopping Cart
    </div>
    <!-- Product #1 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>

        <div class="image">
            <img src="static/img/DenBarb.jpg" alt="" />
        </div>

        <div class="description">
            <span>Denison Barb</span>
            <span>Tropical</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button" font='20px'>
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$6</div>
    </div>

    <!-- Product #2 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>
        <div class="image">
            <img src="static/img/YellowCic.jpg" alt=""/>
        </div>

        <div class="description">
            <span>African Cichlid</span>
            <span>Yellow Lab</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button">
                <img src="minus.svg" alt="" />
            </button>
        </div>

        <div class="total-price">$60</div>
    </div>

    <!-- Product #3 -->
    <div class="item">
        <div class="buttons">
            <span class="delete-btn"></span>
            <span class="like-btn"></span>
        </div>
        <div class="image">
            <img src="static/img/betta.jpg" alt="" />
        </div>

        <div class="description">
            <span>MALE Elephant Ear Betta</span>
            <span>Light Orange</span>
        </div>

        <div class="quantity">
            <button class="plus-btn" type="button" name="button">
                <img src="plus.svg" alt="" />
            </button>
            <input type="text" name="name" value="1">
            <button class="minus-btn" type="button" name="button" width="1">
                <img src="minus.svg" alt=""/>
            </button>
        </div>

        <div class="total-price">$25</div>
    </div>
</div>
<style>
    {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        background-color: #7EC855;
        font-family: 'Roboto', sans-serif;
    }
    .shopping-cart {
        width: 750px;
        height: 423px;
        margin: 80px auto;
        background: #FFFFFF;
        box-shadow: 1px 2px 3px 0px rgba(0,0,0,0.10);
        border-radius: 6px;

        display: flex;
        flex-direction: column;
    }
    .title {
        height: 60px;
        border-bottom: 1px solid #E1E8EE;
        padding: 20px 30px;
        color: #5E6977;
        font-size: 18px;
        font-weight: 400;
    }

    .item {
        padding: 20px 30px;
        height: 120px;
        display: flex;
    }

    .item:nth-child(3) {
        border-top:  1px solid #E1E8EE;
        border-bottom:  1px solid #E1E8EE;
    }
    .buttons {
        position: relative;
        padding-top: 30px;
        margin-right: 60px;
    }
    .delete-btn,
    .like-btn {
        display: inline-block;
        Cursor: pointer;
    }
    .delete-btn {
        width: 18px;
        height: 17px;
        background: url(&quot;delete-icn.svg&quot;) no-repeat center;
    }

    .like-btn {
        position: absolute;
        top: 9px;
        left: 15px;
        background: url('twitter-heart.png');
        width: 60px;
        height: 60px;
        background-size: 2900%;
        background-repeat: no-repeat;
    }
    .is-active {
        animation-name: animate;
        animation-duration: .8s;
        animation-iteration-count: 1;
        animation-timing-function: steps(28);
        animation-fill-mode: forwards;
    }

    @keyframes animate {
        0%   { background-position: left;  }
        50%  { background-position: right; }
        100% { background-position: right; }
    }
    .image {
        margin-right: 50px;
    }

    Let’s add some basic style to  product name and description.
    .description {
        padding-top: 10px;
        margin-right: 60px;
        width: 115px;
    }

    .description span {
        display: block;
        font-size: 14px;
        color: #43484D;
        font-weight: 400;
    }

    .description span:first-child {
        margin-bottom: 5px;
    }
    .description span:last-child {
        font-weight: 300;
        margin-top: 8px;
        color: #86939E;
    }
    .quantity {
        padding-top: 20px;
        margin-right: 60px;
    }
    .quantity input {
        -webkit-appearance: none;
        border: none;
        text-align: center;
        width: 32px;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }

    button[class*=btn] {
        width: 30px;
        height: 30px;
        background-color: #E1E8EE;
        border-radius: 6px;
        border: none;
        cursor: pointer;
    }
    .minus-btn img {
        margin-bottom: 3px;
    }
    .plus-btn img {
        margin-top: 2px;
    }

    button:focus,
    input:focus {
        outline:0;
    }
    .total-price {
        width: 83px;
        padding-top: 27px;
        text-align: center;
        font-size: 16px;
        color: #43484D;
        font-weight: 300;
    }
    @media (max-width: 800px) {
        .shopping-cart {
            width: 100%;
            height: auto;
            overflow: hidden;
        }
        .item {
            height: auto;
            flex-wrap: wrap;
            justify-content: center;
        }
        .image img {
            width: 50%;
        }
        .image,
        .quantity,
        .description {
            width: 100%;
            text-align: center;
            margin: 6px 0;
        }
        .buttons {
            margin-right: 20px;
        }
    }
</style>
<!--- Scripting --->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>