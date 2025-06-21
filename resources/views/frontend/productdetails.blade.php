@extends('frontend.master')
@section('container')
    <x-content : name="PRODUCT DETAILS"
        paragraph="We have highly professional and expert instructors who play a vital role in maintaining our health. They are dedicated and knowledgeable, helping you overcome challenges and achieve your fitness goals." />

            <div class="container">
                <div class="product-section">
                    <div class="product-image">
                        <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/shop/2.jpg" alt="Hand Dumble">
                    </div>
                    <div class="product-details">
                        <h1>HAND DUMBLE</h1>

                        <p class="description">
                            Hand Dumble is very professional and expert trainer. In his job. He never compromise about his
                            work
                            to maintain our sed cuuntur magni dolores eos qui rat ione volupta
                        </p>
                        <p><strong>Stock:</strong> <span class="stock">Available</span></p>
                        <p><strong>SKU:</strong> 35487kbckl</p>

                        <div class="quantity-container">
                            <label><strong>Quantity:</strong></label>
                            <div class="quantity-selector">
                                <input type="text" value="01">
                                <div class="buttons">
                                    <button>▲</button>
                                    <button>▼</button>
                                </div>
                            </div>
                            <button class="add-to-cart">ADD TO CART</button>
                        </div>

                        <p><strong>Category:</strong> Fitness</p>
                        <p><strong>Tag:</strong> Fitness, Gym, Instrument, Bodybuilding</p>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="search-box">
                        <h2>SEARCH</h2>
                        <input type="text" placeholder="Keywords here">
                        <button>🔍</button>
                    </div>

                    <div class="categories">
                        <h2>CATEGORIES</h2>
                        <ul>
                            <li>Fitness Ball <span>25</span></li>
                            <li>Gym Bag <span>52</span></li>
                            <li>Water Bottle <span>12</span></li>
                        </ul>
                    </div>
                </aside>
            </div>
        @endsection
