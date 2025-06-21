<footer class="footer">
    <div class="footer-container">
        <div class="footer-section about">
            <img src="{{$systemsetting?->logo}}"
                alt="Gym Logo" class="logo">
            <p>{{$systemsetting?->footer_description}}</p>
            <h4>Opening time</h4>
            <p>Monday - Friday: 7 am to 10 pm</p>
            <p>Saturday - Sunday: 9 am to 10 pm</p>
        </div>

        <div class="footer-section links">
            <h4>Usefull Link</h4>
            <div class="link-columns">
                <ul>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Membership</a></li>
                    <li><a href="#">Our Classes</a></li>
                    <li><a href="#">Instructors</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog post</a></li>
                </ul>
                <ul>
                    <li><a href="#">Schedules</a></li>
                    <li><a href="#">Payment</a></li>
                    <li><a href="#">Faqs</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-section contact">
            <h4>Contact Info</h4>
            <p><i class="bi bi-envelope"> {{$systemsetting?->email}} </i></p>
            <p><i class="bi bi-telephone"> {{$systemsetting?->phone_number}} </i></p>
            <p><i class="bi bi-geo-alt"> {{$systemsetting?->address}} </i></p>
        </div>

        <div class="footer-section newsletter">
            <h4>Newsletter</h4>
            <p>Subscribe our Newsletter and get latest updates of offers, products and promotions from every week we
                provide</p>
            <form>
                <input type="email" placeholder="Email here" required>
                <button type="submit">➤</button>
            </form>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
        </div>
    </div>
    <div style="text-align:center; margin-top:40px; font-size:14px; color:#aaa;">
        <p class="text-white">Copyright © 2025 Designed by NepholiZym. All rights reserved.<br><br>
            Distributed By: <a href="https://themewagon.com/">NepholiZym</a>
         </p>
    </div>

</footer>
