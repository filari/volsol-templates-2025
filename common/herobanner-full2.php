
<div class="bg-white">
    <div class="relative flex justify-center pt-[200px] pb-[50px]">
        <div class="mx-auto max-w-7xl relative z-10 bottom-[20px] px-5 lg:px-0">
            <div class=" z-10 pt-0 lg:pt-14 lg:w-full">
                <div class="relative text-center max-w-4xl mx-auto  space-y-14">
                    <div class="px-0">
                        <div class="sticky mx-auto max-w-4xl text-center pb-3">
                            <div class="inline-flex justify-center bg-primary-100 px-1 rounded">
                                <a target="_blank" rel="nofollow" href="https://www.reviews.co.uk/company-reviews/store/volunteeringsolutions">
                                    <div class="reviews-io-rating-bar-widget"
                                         widget-id="g3A20EuX7bGsvpit"
                                         data-store-name="volunteeringsolutions"
                                         lang="en"
                                    ></div>
                                </a>
                                <script src='//widget.reviews.io/modern-widgets/rating-bar.js'></script>
                            </div>
                        </div>
                        <h1 class="text-4xl lg:text-5xl font-bold text-primary-300">
                            Volunteer abroad with confidence
                        </h1>
                        <p class="text-gray-100 text-xl font-light">
                            Volunteering and internship opportunities for high school/college students, medical
                            &amp; nursing
                            students, gap year travelers as well as backpackers and seniors.</p>
                    </div>
                    <div class="w-full">
                        <div class="_search-box  overflow-hidden rounded-lg bg-primary-900 text-[16px] p-1 gap-1 relative flex-wrap lg:flex-nowrap flex items-center ring-1 ring-primary-100">
                            <input onclick="customModal('whereWeGo')" type="search" class="_search-input-lg rounded" placeholder="Select your top destinations">
                            <input onclick="customModal('whateCause')" type="search" class="_search-input-lg rounded"  placeholder="Select the causes you care about">
                            <button type="button" class="_search-btn-lg font-bold w-full lg:w-min" onclick="window.location.href='template-search.php'">SEARCH</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-50 absolute overflow-hidden inset-0 lg:right-0 w-full">
            <img class="aspect-[3/2] object-cover aspect-auto h-full w-full absolute" id="randomBanner"
                 src="https://volsol.divtest.com/website/assets/images/a.jpg"
                 alt="">
        </div>
        <span class="absolute inset-0 bg-gradient-to-t to-transparent via-slate-800/20 from-slate-900"></span>
    </div>
</div>

<?php include( 'common/search.php' ); ?>

<script>
    const images = [
        "https://volsol.divtest.com/website/assets/images/a.jpg",
        "https://www.volunteeringsolutions.com/asset/uploads/img/page_header_image/root/514_img1_min.jpg",
    ];

    function getRandomImage() {
        const randomIndex = Math.floor(Math.random() * images.length);
        return images[randomIndex];
    }

    document.addEventListener("DOMContentLoaded", () => {
        const bannerImage = document.getElementById("randomBanner");
        bannerImage.src = getRandomImage();
    });
</script>
