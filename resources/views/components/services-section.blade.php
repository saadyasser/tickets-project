<div class="main-tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a href="#tab-upcoming" class="nav-link active" data-toggle="tab">Upcoming</a>
        </li>
        <li class="nav-item">
            <a href="#tab-trending" class="nav-link" data-toggle="tab">Trending</a>
        </li>
        <li class="nav-item">
            <a href="#tab-this-week" class="nav-link" data-toggle="tab">This Week</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane active" id="tab-upcoming">
            <div class="main-posts">

                @foreach($services as $service)
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>{{ $service->name }}</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price :
                                <span>{{ $service->customers()->where('status', 'waiting')->count() }}</span>
                            </div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-1.jpg') }}" alt="">
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="main-loader">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-trending">
            <div class="main-posts">
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-1.jpg') }}" alt="">
                            <div class="treading">
                                <img src="{{ asset('front/images/homepage/center/trending.svg') }}" alt="">
                            </div>
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-2.jpg') }}" alt="">
                            <div class="treading">
                                <img src="{{ asset('front/images/homepage/center/trending.svg') }}" alt="">
                            </div>
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-3.jpg') }}" alt="">
                            <div class="treading">
                                <img src="{{ asset('front/images/homepage/center/trending.svg') }}" alt="">
                            </div>
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-loader">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" id="tab-this-week">
            <div class="main-posts">
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-1.jpg') }}" alt="">
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-2.jpg') }}" alt="">
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event-main-post">
                    <div class="event-top">
                        <div class="event-top-left">
                            <a href="event_detail_view.html">
                                <h4>Event Title Here</h4>
                            </a>
                        </div>
                        <div class="event-top-right">
                            <div class="ticket-price">Ticket Price : <span>$15</span></div>
                            <div class="post-dt-dropdown dropdown">
                                <span class="dropdown-toggle-no-caret" role="button" data-toggle="dropdown"><i
                                        class="fas fa-ellipsis-v"></i></span>
                                <div class="dropdown-menu post-rt-dropdown dropdown-menu-right">
                                    <a class="post-link-item" href="#">Hide</a>
                                    <a class="post-link-item" href="#">Details</a>
                                    <a class="post-link-item" href="#">User Profile</a>
                                    <a class="post-link-item" href="#">Report</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-main-image">
                        <div class="main-photo">
                            <div class="photo-overlay"></div>
                            <img src="{{ asset('front/images/homepage/center/post-img-3.jpg') }}" alt="">
                            <div class="post-buttons">
                                <div class="left-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link" onclick="window.location.href = '#';">Buy
                                                Ticket</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">May
                                                Be</button></li>
                                    </ul>
                                </div>
                                <div class="right-buttons">
                                    <ul class="main-btns">
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">450
                                                Seats</button></li>
                                        <li><button class="main-btn-link btn-hide"
                                                onclick="window.location.href = '#';">Can't
                                                Go</button></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="event-city-dt">
                        <ul class="city-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div class="list-text-dt">
                                        <span>City</span>
                                        <ins>London</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-calendar-alt"></i>
                                    <div class="list-text-dt">
                                        <span>Date</span>
                                        <ins>21 Nov 2019</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-clock"></i>
                                    <div class="list-text-dt">
                                        <span>Time</span>
                                        <ins>6 PM to 9 PM</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-cloud-sun"></i>
                                    <div class="list-text-dt">
                                        <span>Weather</span>
                                        <ins>Clear</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="event-go-dt">
                        <ul class="go-dt-list">
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-check" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Going</span>
                                        <ins>45</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-question-circle" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>MayBe</span>
                                        <ins>120</ins>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="it-items">
                                    <i class="fas fa-times" style="color:#a7a8aa;"></i>
                                    <div class="list-text-dt">
                                        <span>Can't Go</span>
                                        <ins>70</ins>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="like-comments">
                        <div class="left-comments">
                            <a href="#" class="like-item" title="Like">
                                <i class="fas fa-heart"></i>
                                <span><ins>Like</ins> 251</span>
                            </a>
                            <a href="#" class="like-item lc-left" title="Comment">
                                <i class="fas fa-comment-alt"></i>
                                <span><ins>Comment</ins> 10</span>
                            </a>
                        </div>
                        <div class="right-comments">
                            <a href="#" class="like-item" title="Share">
                                <i class="fas fa-share-alt"></i>
                                <span><ins>Share</ins> 21</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-loader">
                    <div class="spinner">
                        <div class="bounce1"></div>
                        <div class="bounce2"></div>
                        <div class="bounce3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>