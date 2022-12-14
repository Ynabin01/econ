

<section class="news-event">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5">
                <div class="block-title text-left text-white">
                    <p>Latest</p>
                    <h3>NEWS <br> & EVENTS</h3>
                </div>
            </div>
            <div class="col-md-7">
                <div class="news-list">
                <ul>
                    @foreach ($newsevents as $newsevent)
                      <li><a href="/news-events/{{$newsevent->nav_name}}">{{$newsevent->caption}}</a></li>
                    @endforeach
                </ul>
                <a href="/news-events" class="thm-btn about_one__btn">View All</a>
                </div>
            </div>
        </div>
    </div>
</section>