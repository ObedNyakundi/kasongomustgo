<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ruto Must Go</title>
        <link rel="icon" href="{{ asset('landing/public/external/icc.jpg') }}" />
        <link rel="stylesheet" href="{{ asset('landing/styles/index.css') }}" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined"
            rel="stylesheet"
        />
    </head>
    <body>
        <div class="main-frame">
            <div class="frame1">
                <div class="navbar-section1">
                    <span class="material-symbols-outlined menu" id="menu"
                        >menu</span
                    >
                    <h2>Ruto Must Go</h2>
                </div>
                <div class="navbar-section2">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Politics</a></li>
                        <li><a href="#">Corruption</a></li>
                        <li><a href="#">Murders</a></li>
                        <li><a href="#">Abductions</a></li>
                    </ul>
                </div>
                <div class="navbar-section3">
                    <span class="material-symbols-outlined">search</span>
                    <span class="material-symbols-outlined"
                        >account_circle</span
                    >
                </div>
            </div>

            <div class="frame2">
                <div class="frame2-section">
                    <h1>Ruto Must Go</h1>
                    <p>If Kenya must change, Ruto must go first</p>
                    <a href="#">
                        <span>Latest Updates</span>
                        <span class="material-symbols-outlined"
                            >arrow_forward</span
                        >
                    </a>
                </div>
            </div>

            <div class="frame3">
                <h1>Featured Stories</h1>
                <div class="frame3-section">
                    <div class="card">
                        <div class="top">
                            <img
                                src="{{ asset('landing/Assets/tq_blzp55lz-d-z3i-200h.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Politics</h5>
                            <h3>The State of Democracy</h3>
                            <p>
                                An in-depth analysis of Kenya'sdemocratic
                                journey and currentchallenges
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top">
                            <img
                                src ="{{ asset('landing/Assets/tq_httdwkskzj-oll-400w.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Economy</h5>
                            <h3>Economic Reforms</h3>
                            <p>
                                Understanding the impact of recenteconomic
                                policies on daily life.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="top">
                            <img
                                src="{{ asset('landing/Assets/tq_vumowcotjv-c1ed-400w.png') }}"
                                alt=""
                            />
                        </div>
                        <div class="bottom">
                            <h5>Gen z protest</h5>
                            <h3>Youth Movement</h3>
                            <p>
                                How young Kenyans are driving social change
                                across the nation.
                            </p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="frame4">
                <div class="frame4-top">
                    <h1>popular topics</h1>
                    <div class="frame4-top-section">
                        <div class="card1"><a href="#">Abductions</a></div>
                        <div class="card1"><a href="#">Economy</a></div>
                        <div class="card1"><a href="#">Corruption</a></div>
                        <div class="card1"><a href="#">Fufua ICC</a></div>
                        <div class="card1"><a href="#">Gen Z Protests</a></div>
                        <div class="card1">
                            <a href="#">Reject Finance Bill 2024</a>
                        </div>
                        <div class="card1"><a href="#">Education</a></div>
                        <div class="card1"><a href="#">Health</a></div>
                    </div>
                </div>
                <div class="frame4-bottom">
                    <div class="col1 col">
                        <h2>Ruto Must Go</h2>
                        <p>Your trusted source for news andanalysis</p>
                        <p>
                            &copy;<span id="getDate"></span>. All Rights
                            Reserved.
                        </p>
                    </div>
                    <div class="col2 col">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Advertise</a></li>
                        </ul>
                    </div>
                    <div class="col3 col">
                        <h2>Categories</h2>
                        <ul>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Economy</a></li>
                            <li><a href="#">Society</a></li>
                        </ul>
                    </div>
                    <div class="col4 col">
                        <h2>Follow Us</h2>
                        <ul>
                            <li>
                                <a
                                    href="https://www.facebook.com/jonathan.mwaniki.127"
                                    ><span class="bi-facebook"></span
                                ></a>
                            </li>
                            <li>
                                <a href="https://x.com/Maestropuns"
                                    ><span class="bi-twitter"></span
                                ></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/jonaahrojo/"
                                    ><span class="bi-instagram"></span
                                ></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('landing/script.js') }}"></script>
    </body>
</html>
