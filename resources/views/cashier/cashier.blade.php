@php
$products = [
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
[
'name' => 'Cappuccino',
'category' => 'Minuman',
'price' => 'Rp50.000',
'stock' => 20,
'sold' => 8
],
// Tambahkan produk lain di sini jika diperlukan
];
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rize Coffe</title>
    <!-- Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.bunny.net"> -->
    <!-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->
</head>

<body>
    <div class="container">
        <div class="navbar">
            <div class="nav-items">
                <a href="" class="nav-item">Cashier</a>
                <a href="{!! url('/transactions'); !!}" class="nav-item"> transactions and table</a>
            </div>
            <div class="profile">
            <div class="profile" style="justify-content:center; display:flex; align-items:center; flex-direction:row;"  >
            <img src="{{ asset('img/profil.jpg') }}" alt="Profil Picture" class="picture" style="padding-right:20px;">
                <div class="username">Azar</div>
            </div>
        </div>
        <div class="main">
            <div class="main-left">
                <div class="toolbar">
                    <div class="search-input">
                        <input type="text" placeholder="Search here....">
                    </div>
                    <div class="filter-icon">
                        ||
                    </div>
                    <div class="filter-action">

                        <div class="drop-menu">
                            <select class="theme-orange">
                                <option>Minuman</option>
                                <option selected>Makanan</option>
                            </select>
                        </div>
                        <div class="drop-menu">
                            <select class="theme-orange">
                                <option>Favorit</option>
                                <option selected>Underrated</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="wrapper-card">
                    @foreach ($products as $product)
                    <div class="card-container">
                        <!-- <div class="card-action">...</div> -->
                        <div class="card-info">
                            <div class="card-title">
                                {{ $product['name'] }}
                            </div>
                            <div class="card-category">
                                {{ $product['category'] }}
                            </div>
                        </div>
                        <div class="card-price">
                            {{ $product['price'] }}
                        </div>
                        <div class="card-stock">
                            <div class="stock">
                                <!-- Stok {{ $product['stock'] }} -->
                            </div>
                            <div class="sold">
                                Terjual {{ $product['sold'] }}
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- mainrigthgcc -->
            <div class="main-right">
                <hr>
                <div class="ordered-info">
                    <div class="name-ordered">
                        <input type="text" name="" id="" placeholder="Input Customer">
                    </div>
                    <div class="table-ordered">
                        <div class="title">Table in - </div>
                        <select class="select-table">
                            <option>01</option>
                            <option selected>02</option>
                        </select>
                    </div>
                    <div class="order-info">
                        <div class="date-order">
                            Selasa, 17 Maret 2024
                        </div>
                        <div class="invoice-order">
                            #0000001
                        </div>
                    </div>
                </div>


                <div class="order-list-container">
                    <!-- card -->
                    <div class="card-order">
                        <div class="info-menu">
                            <div class="name">Caphuchino</div>
                            <div class="price">Rp470.000</div>
                        </div>
                        <div class="qty-order">
                            <div class="qty">Jumlah 1</div>
                            <button class="button-min">-</button>
                            <button class="button-plus">+</button>
                        </div>
                    </div>
                    <!-- endcard -->
                    <!-- card -->
                    <div class="card-order">
                        <div class="info-menu">
                            <div class="name">Katsu Devia</div>
                            <div class="price">Rp470.000</div>
                        </div>
                        <div class="qty-order">
                            <div class="qty">Jumlah 1</div>
                            <button class="button-min">-</button>
                            <button class="button-plus">+</button>
                        </div>
                    </div>
                    <!-- endcard -->
                    <!-- card -->
                    <div class="card-order">
                        <div class="info-menu">
                            <div class="name">Italiano Expresso</div>
                            <div class="price">Rp470.000</div>
                        </div>
                        <div class="qty-order">
                            <div class="qty">Jumlah 1</div>
                            <button class="button-min">-</button>
                            <button class="button-plus">+</button>
                        </div>
                    </div>
                    <!-- endcard -->
                    <!-- card -->
                    <div class="card-order">
                        <div class="info-menu">
                            <div class="name">Coffe Latte Black</div>
                            <div class="price">Rp470.000</div>
                        </div>
                        <div class="qty-order">
                            <div class="qty">Jumlah 1</div>
                            <button class="button-min">-</button>
                            <button class="button-plus">+</button>
                        </div>
                    </div>
                    <!-- endcard -->
                </div>
                <hr>
                <div class="total-transactions">
                    <div class="total"> Total</div>
                    <div class="total-price">Rp170.000</div>
                </div>
                <div class="pay">
                    <div class="pay-title">Pay</div>
                    <input type="text">
                </div>
                <div class="return">
                    <div class="return-title">Return</div>
                    <div class="return-amount">Rp4.000</div>
                </div>
                <div class="pay-action">
                    <button class="pay-button">Proses</button>
                    <button class="cencel-button">Batal</button>
                </div>
            </div>
            <!-- main -->

        </div>
    </div>
</body>
<style>
    hr {
        width: 100%;
        color: #282828;
    }

    body {
        background-color: #000000;
        padding: 0px;
        margin: 0px;
        font-family: Arial, Helvetica, sans-serif;
    }

    .container {
        width: 100%;
        background-color: #18181B;
        position: fixed;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        width: 100%;
        height: 55px;
        align-items: center;
    }

    .nav-items {
        display: flex;
        gap: 1.7rem;
        margin-left: 20px;
    }

    .nav-item {
        text-decoration: none;
        color: #fff;
        font-size: 16px;
    }
    .nav-item:hover {
        color:blue;
    }

    .profile {
        display: flex;
        margin-right: 20px;
    }

    .profile,
    username {
        color: #fff;
        font-size: 16px;
    }
    .picture{
        width: 30px;
        height:30px;
    }

    .main {
        display: flex;
        width: 100vw;
        height: 100vh;
        background-color: #000000;
    }

    .main-left {
        display: flex;
        flex-direction: column;
        width: 75%;
        overflow: hidden;
        background-image: url('background.png');
        background-size: cover;
        box-sizing: border-box;
    }

    .toolbar {
        display: flex;
        margin: 0.5rem 0.5rem 0rem 0.5rem;
        gap: 0.7rem;
        align-items: center;
        background-color: #18181b;
        border-radius: 4px;
        height: 35px;
        padding-left: 3px;
        box-sizing: border-box;
    }

    .search-input input {
        background-color: #000000;
        border: 1px solid #444444;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        width: 300px;
        height: 13px;
        font-size: 16px;
    }

    .search-input input:focus {
        outline: none;
        border: 1px solid #444444;
    }

    .filter-action {
        display: flex;
        gap: 1rem;
    }

    .theme-orange {
        width: 100px;
        height: 25px;
        background-color: #000;
        border: 1px solid #444444;
        color: #999999;
        border-radius: 4px;
        text-align: center;
        font-size: 14px;
    }


    .wrapper-card {
        gap: 5px;
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
        align-items: flex-start;
        align-content: flex-start;
        height: 100vh;
        overflow: auto;
        flex-direction: row;
        padding-bottom: 77px;
        margin: 0.5rem 0.5rem 0rem 0.5rem;
        /* align-items: center; */
    }


    .card-container {
        background-color: #18181b;
        /* width: 293px; */
        /* height: 107px; */
        width: 24.63%;
        height: 17%;
        border-radius: 4px;
        padding: 20px 20px 20px 20px;
        transition: 0.1s;
        display: flex;
        flex-direction: column;
        justify-content: center;
        box-sizing: border-box;
        /* margin: 0.4%; */
    }

    .card-container:hover {
        background-color: #0000ff;
    }

    .card-info {
        display: flex;
        justify-content: space-between;
        color: #fff;
        /* padding-top: 25px; */
    }

    .card-title {
        font-size: 16px;
        font-weight: 600;
    }

    .card-category {
        font-size: 12px;
        /* padding-right: 0rem; */
    }

    .card-price {
        font-size: 16px;
        color: #fff;
        margin-top: 12px;
    }

    .card-stock {
        display: flex;
        /* gap: 1.4rem; */
        color: #fff;
        font-size: 12px;
        margin-top: 30px;
        justify-content: flex-start;
    }

    .main-right {
        display: flex;
        width: 30%;
        height: 100%;
        background-color: #18181b;
        flex-direction: column;
        padding: 0px 20px 20px 20px;
        box-sizing: border-box;
    }

    .ordered-info {
        display: flex;
        flex-direction: column;
        width: 100%;
        height: 100px;
        margin-bottom: 20px;
        margin-top: 10px;
    }

    .name-ordered input {
        font-size: 16px;
        background-color: #18181b;
        border: none;
        color: #fff;
        font-weight: 600;
    }

    .name-ordered input:focus {
        outline: none;
        border: none;
    }

    .table-ordered {
        display: flex;
        align-items: center;
        gap: 0.4rem;
    }

    .table-ordered .title {
        color: #999999;
        font-size: 12px;
    }

    .table-ordered .select-table {
        background-color: #18181b;
        border: none;
        color: #6675FF;
        font-size: 12px;
    }

    .order-info {
        display: flex;
        justify-content: space-between;
        margin-top: 16px;
    }

    .order-info .date-order {
        color: #9e9e9e;
        font-size: 16px;
    }

    .order-info .invoice-order {
        color: #6675ff;
        font-size: 16px;
    }

    .order-list-container {
        display: flex;
        width: 100%;
        height: 400px;
        flex-direction: column;
        gap: 1.7rem;
        overflow-y: auto;
    }

    .card-order {
        font-size: 16px;
        color: #fff;
        font-weight: 470;
        display: flex;
        flex-direction: column;
    }

    .info-menu {
        display: flex;
        justify-content: space-between;
    }

    .qty-order {
        margin-top: 10px;
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .qty {
        margin-right: 40px;
        font-size: 12px;
    }

    .button-min {
        padding: 3px 10px 3px 10px;
        font-size: 20px;
        background-color: #1E1B30;
        border: none;
        color: #fff;
        font-weight: 700;
    }

    .button-plus {
        padding: 3px 9px 3px 9px;
        font-size: 20px;
        border: none;
        background-color: #1E1B30;
        color: #6675FF;
        font-weight: 700;
    }

    .total-transactions {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 10px;
    }

    .total-transactions .total {
        font-size: 16px;
        color: #fff;
        font-weight: 600;
    }

    .total-transactions .total-price {
        font-size: 16px;
        color: #ff6700;
        font-weight: 600;
    }

    .pay {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .pay .pay-title {
        font-size: 16px;
        color: #fff;
        font-weight: 400;
    }

    .pay input {
        background-color: #18181b;
        border: 1px solid #333333;
        border-radius: 4px;
        color: #fff;
        font-size: 16px;
        font-weight: 600;
        width: 82%;
        height: 47px;
        margin-top: 10px;
    }

    .pay input:focus {
        outline: none;
    }

    .return {
        display: flex;
        justify-content: space-between;
        margin-top: 20px;
    }

    .return-amount {
        font-size: 16px;
        color: #fff;
        font-weight: 600;
    }

    .return-title {
        font-size: 16px;
        color: #fff;
        font-weight: 400;
    }

    .pay-action {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 20px;
    }

    .pay-button {
        width: 40%;
        height: 50px;
        font-size: 16px;
        background: #0000ff;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 4px;
        transition: 0.5s;
    }

    .pay-button:hover {
        background-color: #1E1B30;
        border: 1px solid #0000ff;
        color: #6675FF;
    }

    .cencel-button {
        width: 40%;
        height: 50px;
        font-size: 16px;
        background: #333;
        color: #fff;
        font-weight: 600;
        border: none;
        border-radius: 4px;
    }
</style>


</html>
