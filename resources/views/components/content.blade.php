 <!-- Hero Section -->
 @props(['name'=>'','paragraph'=>'','image'=>''])

 <header class="herosection1" style="background-image: url('https://htmldemo.net/zymzoo/zymzoo/assets/img/photos/bg-page2.jpg')">
    <div class="overlay"></div>
    <div class="container d-flex align-items-center h-100">
        <div class="hero-content text-start">
            <img src="https://htmldemo.net/zymzoo/zymzoo/assets/img/icons/g1.png"
            alt="Zymzoo Logo" style="width: 80px;" class="mb-4" />
            <h1 class="display-2 fw-bold "><span class="highlight">{{ $name }}</span></h1>
            <p class="text-white">{{ $paragraph }}</p>

        </div>

</header>
