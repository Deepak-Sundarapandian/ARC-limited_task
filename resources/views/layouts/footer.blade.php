<section class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-md-2">
                <div class="visit-stats">
                    <img src="{{ asset('assets/Bar_chart1.gif') }}" alt="Graph">
                    <p>Total Visits: <strong>7992961</strong></p>
                    <p>Visits Today: <strong>0</strong></p>
                    <p><em>(This Year)</em></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="news-events">
                    <h5>NEWS & EVENTS</h5>
                    <marquee width="100%" direction="up">
                          <ul>
                        <li>Mathura Branch Office has been shifted to a new premises in June 2025.</li>
                        <li>New Satellite Branch opened at Jetpur under Rajkot branch in June 2025.</li>
                        <li>Guindy Satellite Branch under Chennai Office shifted to new premises in June 2025.</li>
                    </ul>
                    </marquee>
                  

                </div>
            </div>


            <div class="col-md-3">
                <div class="quick-links">
                    <h5>QUICK LINKS</h5>
                    <ul>
                        <li><a href="#">HOME</a></li>
                        <li><a href="#">BRANCH LIST</a></li>
                        <li><a href="#">A R C ON SCHEDULE</a></li>
                        <li><a href="#">CONTACT US</a></li>
                        <li><a href="#">SITEMAP</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <div class="track-box">
                    <h5>TRACK YOUR CONSIGNMENT</h5>
                    <hr class="divider">
                    <a href="#" class="track-btn">Click For Consignment</a>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-bottom">
    <p>
        An ISO 9001-2015 Certified Company – One of India’s Largest Surface Transport Organisations – 580+ Booking &
        Delivery Centres – O
    </p>
</div>
<style>

    .visit-stats p{
        padding: 0;
    }
    .footer-top {
        background-color: #7a0015;
        color: #fff;
        padding: 40px 20px;
        position: relative;
        background-image: url("{{ asset('images/footer-lines.png') }}");
        background-size: cover;
        background-position: center;
    }

    .footer-top h5 {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 20px;
        border-bottom: 1px dotted #fff;
        display: inline-block;
        padding-bottom: 5px;
    }

    .news-events ul {
        padding-left: 0;
        list-style: none;
    }

    .news-events ul li {
        margin-bottom: 15px;
        font-size: 14px;
        line-height: 1.6;
    }

    .visit-stats {
        margin-top: 20px;
        font-size: 13px;
    }

    .visit-stats img {
        width: 60px;
        margin-bottom: 10px;
    }

    .quick-links ul {
        padding-left: 0;
        list-style: none;
    }

    .quick-links ul li {
        margin-bottom: 10px;
    }

    .quick-links ul li a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
    }

    .quick-links ul li a:hover {
        text-decoration: underline;
    }

    .track-box {
        background-color: #fff;
        color: #000;
        padding: 20px;
        text-align: center;
        border-radius: 5px;
    }

    .track-box h5 {
        font-size: 16px;
        font-weight: bold;
    }

    .divider {
        width: 40px;
        border: 2px dashed #7a0015;
        margin: 10px auto;
    }

    .track-btn {
        display: inline-block;
        margin-top: 10px;
        padding: 10px 25px;
        background-color: #f89c1c;
        color: #000 ;
        text-decoration: none;
        font-weight: bold;
        border-radius: 3px;
    }

    .track-btn:hover {
        background-color: #e38c0c;
    }

    .footer-bottom {
        background-color: #f4f0ba;
        padding: 10px;
        text-align: center;
        font-size: 13px;
        font-weight: bold;
        color: #002c5a;
    }
</style>
