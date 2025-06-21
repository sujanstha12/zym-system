@extends('frontend.master')
@section('container')
    <x-content : name=" CONTACT US "
        paragraph="A gym class is a structured fitness session designed to improve overall health and wellness. These classes are led by trained instructors and often focus on different aspects such as strength, endurance, flexibility, or cardio." />

    <div class="container">
        <div class="row">
            <section class="contact-section">
                <div class="contact-header">
                    <h2><strong>GET IN</strong> <span class="highlight">TOUCH</span></h2>
                    <p>Contact us if you need information</p>
                </div>

                <div class="contact-container">
                    <div class="contact-box">
                        <i class="fas fa-map-marker-alt contact-icon"></i>
                        <p><strong>252B, Central Street Main road</strong><br>Belix Tower, New York, USA</p>
                    </div>

                    <div class="contact-box">
                        <i class="fas fa-phone-alt contact-icon"></i>
                        <p>09 (123) 456 789<br>09 (987) 654 321</p>
                    </div>

                    <div class="contact-box">
                        <i class="fas fa-globe contact-icon"></i>
                        <p>info@example.com<br>www.example.com</p>
                    </div>
                </div>
            </section>


        </div>
    </div>

    <div class="d-flex contact-body">
        <div class="form-container">
            <h1>Send Message</h1>
            <p>
                If you need any information, feel free to send me message. I will try to answer your questions and give
                you proper tips about your message.
            </p>
            <form>
                <div class="input-group">
                    <input type="text" placeholder="Name" name="name" required>
                    <input type="email" placeholder="Email" name="email" required>
                </div>
                <textarea placeholder="Write message here" name="message" required></textarea>
                <a href="admin.contact.show"> <button type="submit">SEND MESSAGE</button></a>
            </form>
        </div>
        <div class="form-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3520.698700012525!2d81.62104727531406!3d28.06422297597978!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3998677e63505b1b%3A0x1037b3303874919d!2sThe%20Burger%20House%20And%20Crunchy%20Fried%20Chicken!5e0!3m2!1sen!2snp!4v1747293316702!5m2!1sen!2snp"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
@endsection
