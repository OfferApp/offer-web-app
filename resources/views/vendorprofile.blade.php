<div class="portfolio-content">
    <div class="cbp-l-project-title">{{$vendor->fullName}}</div>
    <div class="cbp-l-project-subtitle">Owner of {{$vendor->shopName}}</div>
    <div class="cbp-slider">
        <ul class="cbp-slider-wrap">
            <li class="cbp-slider-item">
                <a href="../assets/global/img/portfolio/1200x900/13.jpg" class="cbp-lightbox">
                    <img src="../assets/global/img/portfolio/1200x900/13.jpg" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="../assets/global/img/portfolio/1200x900/14.jpg" class="cbp-lightbox">
                    <img src="../assets/global/img/portfolio/1200x900/14.jpg" alt=""> </a>
            </li>
            <li class="cbp-slider-item">
                <a href="../assets/global/img/portfolio/1200x900/01.jpg" class="cbp-lightbox">
                    <img src="../assets/global/img/portfolio/1200x900/01.jpg" alt=""> </a>
            </li>
        </ul>
    </div>
    <div class="cbp-l-project-container">
        <div class="cbp-l-project-desc">
            <div class="cbp-l-project-desc-title">
                <span>Vendor Description</span>
            </div>
            <div class="cbp-l-project-desc-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, cumque, earum blanditiis incidunt minus commodi consequatur provident quae. Nihil, alias, vel consequatur ab aliquam aspernatur optio harum facilis excepturi mollitia autem
                voluptas cum ex veniam numquam quia repudiandae in iure. Assumenda, vel provident molestiae perferendis officia commodi asperiores earum sapiente inventore quam deleniti mollitia consequatur expedita quaerat natus praesentium beatae aut
                ipsa non ex ullam atque suscipit ut dignissimos magnam!</div>
        </div>
        <div class="cbp-l-project-details">
            <div class="cbp-l-project-details-title">
                <span>Project Details</span>
            </div>
            <ul class="cbp-l-project-details-list">
                <li>
                    <strong>Name</strong>{{$vendor->fullName}}</li>
                <li>
                    <strong>Shop Address</strong>{{$vendor->shopAddress}}</li>
                <li>
                    <strong>Contact Us</strong>{{$vendor->shopContactNo}}</li>
            </ul>
            <a href="#" target="_blank" class="cbp-l-project-details-visit btn red uppercase">visit the site</a>
        </div>
    </div>
    <div class="cbp-l-project-container">
        <div class="cbp-l-project-related">
            <div class="cbp-l-project-desc-title">
                <span>Related Offers</span>
            </div>
            <ul class="cbp-l-project-related-wrap">
            @foreach ($offers as $offer)

                <li class="cbp-l-project-related-item">
                    <a href="ajax-juicy-projects/project1.html" class="cbp-singlePage cbp-l-project-related-link" rel="nofollow">
                        <img src="/assets/pages/media/works/{{$offer->offerPic}}" alt="">
                        <div class="cbp-l-project-related-title">{{$offer->offerName}}</div>
                    </a>
                </li>

            @endforeach

            </ul>

        </div>
    </div>
    <br>
    <br>
    <br> </div>
