    <!-- FOOTER END SECTION -->
    <footer>
        <div class="footer_area">
            <div class="address">
                <img src="{{ asset('assets/website/assets/img/logo.png') }}" alt="">
                <span class="footer-text"><i class="fa-solid fa-paper-plane"></i> Ka-44/2, Kalachandpur Gulshan-2, Dhaka-1212</span>
                <span class="footer-text"><i class="fa-solid fa-mobile-screen-button"></i>
                    <a class="footer-link" href="tel:+8801671711933">+880-1671-711933</a>,
                    <a class="footer-link" href="tel:+8801918893885">+880-1918-893885</a></span>
                <span class="footer-text"><i class="fa-solid fa-envelope"></i><a class="footer-link" href="#">maaeventmanagementbd@gmail.com</a></span>
                <div class="footer_social_btn">
                    <a href="{{ $commonDetails['facebook'] ?? '#' }}"><i class="footer-icon icon--fb fa-brands fa-facebook"></i></a>
                    <a href="{{ $commonDetails['instagram'] ?? '#' }}"><i class="footer-icon icon--fb fa-brands fa-instagram"></i></a>
                    <a href="https://wa.me/{{ $commonDetails['whatsapp'] ?? '#' }}"><i class="footer-icon icon--wa fa-brands fa-whatsapp"></i></a>
                    <a href="{{ $commonDetails['pinterest'] ?? '#' }}"><i class="footer-icon icon--yt fa-brands fa-pinterest"></i></a>
                    <a href="{{ $commonDetails['youtube'] ?? '#' }}"><i class="footer-icon icon--yt fa-brands fa-youtube"></i></a>
                    <a href="{{ $commonDetails['twitter'] ?? '#' }}"><i class="footer-icon icon--tw fa-brands fa-twitter"></i></a>
                    <a href="{{ $commonDetails['linkedin'] ?? '#' }}"><i class="footer-icon icon--ln fa-brands fa-linkedin"></i></a>
                    <a href="{{ $commonDetails['tiktok'] ?? '#' }}"><i class="footer-icon icon--ln fa-brands fa-tiktok"></i></a>
                </div>
            </div>
            <div class="import_link">
                <div class="item_area">
                    <h2 class="footer-title">Navigate</h2>
                    <ul>
                        <li class="footer-item"><a class="footer-link" href="#">Book Your Venue</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Workshop</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Catering</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Career</a></li>
                        <li class="footer-item"><a class="footer-link" href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="item_area">
                    <h2 class="footer-title">Useful Links</h2>
                    <ul>
                        @foreach ($documents as $doc)
                        <li class="footer-item"><a class="footer-link" href="{{ asset('storage').'/'.$doc->path }}" download>{{ $doc->name }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="map">
                <h2 class="footer-title">We are very near you!</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.259504026561!2d90.41494447533775!3d23.809369478630117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c715f2121e7d%3A0xf7d351b7edb1d903!2sMaa%20Event%20Management%20and%20Catering!5e0!3m2!1sen!2sbd!4v1695360704361!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="copyright">
            <span>&copy; Copyright - 2023 - Maa Event | All Rights Reseved | Desingned & Developed by <a href="https://www.pepplobd.com" onclick="window.open('https://pepplobd.com', '_blank')"> Pepplo BD</a></span>
        </div>
    </footer>