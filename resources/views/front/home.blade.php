<x-main-layout title="Home" tid="{{ $tid }}">
    <main>
        <div class="main-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-5">
                        <div class="main-left-sidebar">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="username-dt dpbg-1">
                                        <div class="usr-pic">
                                            <img src="{{ asset('storage/users-avatar/' . Auth::user()->avatar) }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="user-main-details">
                                        <h4>{{ Auth::user()->name }}</h4>
                                    </div>
                                    <div class="profile-link">
                                        <a href="my_dashboard_activity.html">View Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-data full-width">
                                <div class="categories-left-heading">
                                    <h3>Categories</h3>
                                </div>
                                <div class="categories-items">
                                    <a class="category-item" href="#"><i class="fas fa-music"></i>Music</a>
                                    <a class="category-item" href="#"><i class="fas fa-flag"></i>Festival</a>
                                    <a class="category-item" href="#"><i class="fas fa-pen-nib"></i>Art</a>
                                    <a class="category-item" href="#"><i class="fas fa-microphone-alt"></i>Club</a>
                                    <a class="category-item" href="#"><i class="fas fa-grin-squint-tears"></i>Comedy</a>
                                    <a class="category-item" href="#"><i class="far fa-futbol"></i>Sports</a>
                                    <a class="category-item" href="#"><i class="fas fa-video"></i>Theatre</a>
                                    <a class="category-item" href="#"><i class="fas fa-bullhorn"></i>Promotions</a>
                                    <a class="category-item" href="#"><i class="fas fa-ellipsis-h"></i>Others</a>
                                </div>
                            </div>
                            @if(Auth::user())
                            <x-users-section />
                            @endif
                        </div>
                    </div>

                    <x-ticket-form />

                    <div class="col-lg-3">
                        <div class="right-side-items">
                            <div class="post-event">
                                <h6>Want to Post Your Event</h6>
                                <p>Post your event on Goeveni for free. Just make an account and add it through the
                                    simple form. As simple as that.</p>
                                <a href="add_new_event.html" class="add-nw-event">Post It Now</a>
                            </div>
                            <div class="explore-events">
                                <h4>Explore Events</h4>
                                <ul class="explore-events-dt">
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-right light-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-sun"></i>
                                                        <span>Today</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-left light-yellow">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-cloud-sun"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-cloud-sun"></i>
                                                        <span>Tomorrow</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-right dark-blue">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-calendar-alt"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-calendar-alt"></i>
                                                        <span>This Week</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="explore-card exp-left light-green">
                                                <div class="explore-item-1">
                                                    <div class="explore-icon-bg icon-large-1">
                                                        <i class="fas fa-calendar-check"></i>
                                                    </div>
                                                    <div class="explore-content">
                                                        <i class="fas fa-calendar-check"></i>
                                                        <span>Choose Date</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="w-weather">
                                <div class="weather-left">
                                    <div class="weather-city">Ludhiana</div>
                                    <div class="week-text">Monday</div>
                                    <div class="week-text">14 Oct 2019</div>
                                    <div class="week-text" style="font-size: 18px;"><i class="fas fa-tint"></i> 30%
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="up-down"><i class="fas fa-long-arrow-alt-up"></i> 18°</div>
                                        </li>
                                        <li>
                                            <div class="up-down"><i class="fas fa-long-arrow-alt-down"></i> 25°</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="weather-right">
                                    <i class="fas fa-cloud-sun"></i>
                                    <span>22°</span>
                                </div>
                                <ul class="weekly-weather">
                                    <li>
                                        <div class="degree-text">32°</div>
                                        <div class="weather-icon"><i class="fas fa-sun"></i></div>
                                        <div class="day-text">Tue</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">19°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-sun-rain"></i></div>
                                        <div class="day-text">Wed</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">32°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-sun"></i></div>
                                        <div class="day-text">Thu</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">27°</div>
                                        <div class="weather-icon"><i class="fas fa-wind"></i></div>
                                        <div class="day-text">Fri</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">22°</div>
                                        <div class="weather-icon"><i class="fas fa-cloud-showers-heavy"></i></div>
                                        <div class="day-text">Sat</div>
                                    </li>
                                    <li>
                                        <div class="degree-text">12°</div>
                                        <div class="weather-icon"><i class="fas fa-snowflake"></i></div>
                                        <div class="day-text">Sun</div>
                                    </li>
                                </ul>
                            </div>
                            <div class="news-data full-width">
                                <div class="categories-left-heading">
                                    <h3>News</h3>
                                </div>
                                <div class="categories-items">
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="fas fa-music"></i>
                                            <h6>Music</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="fas fa-pen-nib"></i>
                                            <h6>Art</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                    <div class="news-item">
                                        <div class="news-item-heading">
                                            <i class="far fa-futbol"></i>
                                            <h6>Sports</h6>
                                        </div>
                                        <div class="news-description">
                                            Suspendisse cursus egestas luctus. <a href="#">Http://website.com/news</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-main-layout>