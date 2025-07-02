<?php include( 'common/header.php' ); ?>

<main>

    <div>
        <!-- Header -->
        <div class="relative py-32 bg-gray-900">
            <div class="absolute inset-0">
                <img class="w-full h-full object-cover" src="images/2022/03/1361_teaching_madagascar.jpg" alt="Volunteering Destinations">
                <div class="absolute inset-0 bg-gray-900 opacity-80" aria-hidden="true"></div>
            </div>
            <div class="container relative z-20 flex items-center justify-center h-full">
                <h1 class="text-white font-bold text-center text-4xl lg:text-5xl max-w-2xl">Contact Us</h1>
            </div>
        </div>
    </div>

    <div class="relative bg-primary-50">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-primary-100"></div>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-primary-100 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-3xl font-extrabold tracking-tight text-primary-900 sm:text-3xl">Get in touch</h2>
                    <dl class="mt-8 text-base text-gray-500">
                        <div>
                            <dt class="sr-only">UK Address</dt>
                            <dd class="text-base text-primary-600">
                                <h4 class="font-bold mb-1 text-xl">UK Address</h4>
                                <p>Suite 201, 6 Sutton Plaza,</p>
                                <p>Sutton - SM1 4FS, England</p>
                            </dd>
                        </div>
                        <div class="mt-4">
                            <dt class="sr-only">India Address</dt>
                            <dd class="text-base text-primary-600">
                                <h4 class="font-bold mb-1 text-xl">India Address</h4>
                                <p>10, Siri Fort Road, LGF,</p>
                                <p>New Delhi - 110049, India</p>
                            </dd>
                        </div>
                        <div class="mt-8">
                            <dt class="sr-only">Email</dt>
                            <dd class="flex items-center">
                                <!-- Heroicon name: outline/mail -->
                                <svg class="flex-shrink-0 h-10 w-10 text-primary-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3 text-xl text-primary-500 underline">
                                <a href="mailto:info@volunteeringsolutions.co.uk">info@volunteeringsolutions.co.uk</a>
                            </span>
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
            <div class="bg-primary-50 py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form action="#" method="POST" class="flex flex-col md:grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="full-name" class="sr-only">Full name</label>
                            <input type="text" name="full-name" id="full-name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="Full name">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="Email">
                        </div>
                        <div>
                            <label for="phone" class="sr-only">Phone</label>
                            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border-gray-300 rounded-md" placeholder="Phone">
                        </div>
                        <div>
                            <label for="country" class="sr-only">Country of Residence</label>
                            <select name="country" id="country" class="text-gray-500 form-select rounded w-full focus:ring-primary-500 focus:border-primary-500 border-gray-300">
                                <option>Country of Residence</option>
                                <option>Country of Residence</option>
                                <option>Country of Residence</option>
                            </select>
                        </div>
                        <div>
                            <label for="subject" class="sr-only">Your message is in regards to </label>
                            <select name="subject" id="subject" class="text-gray-500 form-select rounded w-full focus:ring-primary-500 focus:border-primary-500 border-gray-300">
                                <option>Your message is in regards to</option>
                                <option>Your message is in regards to</option>
                                <option>Your message is in regards to</option>
                            </select>
                        </div>
                        <div>
                            <label for="hear" class="sr-only">How did you hear about us? </label>
                            <select name="hear" id="hear" class="text-gray-500 form-select rounded w-full focus:ring-primary-500 focus:border-primary-500 border-gray-300">
                                <option>How did you hear about us?</option>
                                <option>How did you hear about us?</option>
                                <option>How did you hear about us?</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="message" class="sr-only">Message</label>
                            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-primary-500 focus:border-primary-500 border border-gray-300 rounded-md" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-primary-50">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:py-24 lg:px-8">
            <div class="divide-y-2 divide-gray-200">
                <div class="lg:grid lg:grid-cols-3 lg:gap-8">
                    <h2 class="text-2xl font-bold text-primary-900 md:text-4xl">Get in Touch</h2>
                    <div class="mt-8 grid grid-cols-1 gap-12 sm:grid-cols-2 sm:gap-x-8 sm:gap-y-12 lg:mt-0 lg:col-span-2">
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-8 w-8 text-primary-500"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="currentColor" d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"/></svg>
                                <h3 class="text-xl leading-6 font-bold text-primary-900">WhatsApp</h3>
                            </div>
                            <p class="mt-2 text-primary-600 ml-10 underline">
                                <a href="https://wa.me/+447856234872">
                                    +44-785-623-4872
                                </a>
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <h3 class="text-xl leading-6 font-bold text-primary-900">UK Phone</h3>
                            </div>
                            <p class="mt-2 text-primary-600 ml-10 underline">
                                <a href="tel:+442038306000">
                                    (+44)020 3830 6000
                                </a>
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <h3 class="text-xl leading-6 font-bold text-primary-900">US/CAN (Toll Free)</h3>
                            </div>
                            <p class="mt-2 text-primary-600 ml-10 underline">
                                <a href="tel:18886949411">
                                    1-888-694-9411
                                </a>
                            </p>
                        </div>
                        <div>
                            <div class="flex items-center space-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary-500" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                </svg>
                                <h3 class="text-xl leading-6 font-bold text-primary-900">India</h3>
                            </div>
                            <p class="mt-2 text-primary-600 ml-10 underline">
                                <a href="tel:911147085749">
                                    91-11-47085749
                                </a>
                            </p>
                        </div>
                    </div>
                    <div></div>
                    <div class="col-span-2">
                        <h3 class="text-lg leading-6 font-bold text-primary-900 my-4">Office Hours</h3>

                        <div class="flex space-x-12 text-sm">
                            <div>
                                <p><strong>Mon-Fri</strong> : 7am – 4pm GMT</p>
                                <p><strong>Saturday & Sunday</strong> : Closed</p>
                            </div>
                            <div>
                                <p><strong>Current Date/Time</strong>: 19:14:11</p>
                                <p>Sun,15 May 2022 Greenwich Mean Time (GMT)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="map" class="w-full h-96"></div>

    <script>
        let map;

        function initMap() {
            const london = { lat: 51.3605977, lng: -0.1915756 };
            const india = { lat: 28.554643, lng: 77.226484 };

            map = new google.maps.Map(document.getElementById("map"), {
                center: { lat: 40.3605977, lng: 35.1915756 },
                zoom: 3,
                minZoom: 3,
                disableDefaultUI: true,
                styles: [
                    {
                        "stylers": [
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "elementType": "labels",
                        "stylers": [
                            {
                                "saturation": "-100"
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "saturation": 36
                            },
                            {
                                "lightness": 40
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            },
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "administrative",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 17
                            },
                            {
                                "weight": 1.2
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 20
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#26815B"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#26815B"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#26815B"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "lightness": 21
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#26815B"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#26815B"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 18
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            },
                            {
                                "lightness": 29
                            },
                            {
                                "weight": 0.2
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 16
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#7f8d89"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#000000"
                            },
                            {
                                "lightness": 19
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "stylers": [
                            {
                                "color": "#2b3638"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry",
                        "stylers": [
                            {
                                "color": "#2b3638"
                            },
                            {
                                "lightness": 17
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#124231"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "geometry.stroke",
                        "stylers": [
                            {
                                "color": "#124231"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "labels.text.stroke",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    }
                ]
            });
            new google.maps.Marker({
                position: london,
                map,
                title: "UK Office",
                icon: 'https://dev.awall.dev/volsol/frontend/images/marker1.png'
            });
            new google.maps.Marker({
                position: india,
                map,
                title: "India Office",
                icon: 'https://dev.awall.dev/volsol/frontend/images/marker1.png'
            });
        }

        window.initMap = initMap;
    </script>

    <script
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAhXOrtc89HWTjekCFJMtlPoFMP4IJxy1E&callback=initMap&v=weekly"
            defer
    ></script>

</main>


<?php include( 'common/footer.php' ); ?>
<script src="assets/js/custom.js"></script>
<?php include( 'common/page-end.php' ); ?>

