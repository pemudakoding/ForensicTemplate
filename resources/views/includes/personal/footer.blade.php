<footer class="bg-default-blue py-6">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-3">
                <h3 class="text-roboto font-weight-700 text-white  mb-4">
                    Menu Link
                    <hr class="mb-0 mt-2 border-yellow">
                </h3>
                <main>
                    <ul class="p-0">
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Home</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">About Us</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Our Value</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Our Service</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Our Experience</a>
                        </li>
                    </ul>
                </main>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-roboto font-weight-700 text-white  mb-4">
                    Services
                    <hr class="mb-0 mt-2 border-yellow">
                </h3>
                <main>
                    <ul class="p-0">
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Forensic Invetigation</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Brand Protection</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Profiling</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Data Analytic</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Computer Forensic</a>
                        </li>
                        <li class="mt-2">
                            <a href="#" class="text-decoration-none text-white">Regulatory Compliance review</a>
                        </li>
                    </ul>
                </main>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-roboto font-weight-700 text-white  mb-4">
                    Address
                    <hr class="mb-0 mt-2 border-yellow">
                </h3>
                <main>
                    <ul class="p-0">
                        <li class="text-white">{{SiteInformation::getSiteInformation()->address}}</li>
                        <li class="text-white">{{SiteInformation::getSiteInformation()->no_telp}}</li>
                    </ul>
                </main>
            </div>
            <div class="col-12 col-md-3">
                <h3 class="text-roboto font-weight-700 text-white  mb-4">
                    Social Network
                    <hr class="mb-0 mt-2 border-yellow">
                </h3>
                <main>
                    <a href="{{SiteInformation::getSiteInformation()->facebook_url}}" class="text-decoration-none" target="_blank">
                        <img src="{{ asset('images/icons/Facebook.svg') }}" alt="Facebook" width="40">
                    </a>
                    <a href="{{SiteInformation::getSiteInformation()->twitter_url}}" class="text-decoration-none" target="_blank">
                        <img src="{{ asset('images/icons/Twitter.svg') }}" alt="Twitter" width="40" class="ms-3">
                    </a>
                    <a href="{{SiteInformation::getSiteInformation()->instagram_url}}" class="text-decoration-none" target="_blank">
                        <img src="{{ asset('images/icons/Youtube.svg') }}" alt="Youtube" width="40" class="ms-3">
                    </a>
                </main>
            </div>
        </div>
    </div>
</footer>
<footer class="bg-default-blue-dark py-4">
    <p class="text-roboto text-white text-center font-weight-700 m-0 ">
        Copyright © {{ date('Y') }} {{SiteInformation::getSiteInformation()->site_name}} All Rights Reserved
    </p>
</footer>
