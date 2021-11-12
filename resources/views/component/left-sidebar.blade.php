<div class="left">
    <a class="profile">
        <div class="profile-photo">
            <img src="{{asset('template/images/profile-1.jpg')}}">
        </div>
        <div class="handle">
            <h4>Diana Ayi</h4>
            <p class="text-muted">
                @dayi
            </p>
        </div>
    </a>

    <!-------------------- SIDEBAR ------------------------->
    <div class="sidebar">
        <a class="menu-item active">
            <span><i class="uil uil-home"></i></span><h3>Home</h3>
        </a>
        <a class="menu-item">
            <span><i class="uil uil-compass"></i></span><h3>Explore</h3>
        </a>
        <a class="menu-item" id="notifications">
            <span><i class="uil uil-bell"><small class="notification-count">9+</small></i></span><h3>Notifications</h3>
            <!-------------------- NOTIFICATION POPUP ---------------->
            <div class="notifications-popup">
                <div>
                    <div class="profile-photo">
                        <img src="{{asset('template/images/profile-2.jpg')}}">
                    </div>
                    <div class="notification-body">
                        <b>Keke Benjamin</b> accepted your friend request
                        <small class="text-muted">2 DAYS AGO</small>
                    </div>
                </div>
                <div>
                    <div class="profile-photo">
                        <img src="./images/profile-3.jpg">
                    </div>
                    <div class="notification-body">
                        <b>John Doe</b> commented on your post
                        <small class="text-muted">1 HOUR AGO</small>
                    </div>
                </div>
                <div>
                    <div class="profile-photo">
                        <img src="./images/profile-4.jpg">
                    </div>
                    <div class="notification-body">
                        <b>Mary Oppong</b> and <b>283 others </b> liked your post
                        <small class="text-muted">4 MINUTES AGO</small>
                    </div>
                </div>
                <div>
                    <div class="profile-photo">
                        <img src="./images/profile-5.jpg">
                    </div>
                    <div class="notification-body">
                        <b>Doris Y. Lartey</b> commented on a post you are tagged in
                        <small class="text-muted">2 DAYS AGO</small>
                    </div>
                </div>
                <div>
                    <div class="profile-photo">
                        <img src="./images/profile-6.jpg">
                    </div>
                    <div class="notification-body">
                        <b>Donald Trump</b> commented on a post you are tagged in
                        <small class="text-muted">1 HOUR AGO</small>
                    </div>
                </div>
                <div>
                    <div class="profile-photo">
                        <img src="./images/profile-7.jpg">
                    </div>
                    <div class="notification-body">
                        <b>jane Doe</b> commented on your post
                        <small class="text-muted">1 HOUR AGO</small>
                    </div>
                </div>
            </div>
            <!-------------------- END NOTIFICATION POPUP ---------------->
        </a>
        <a class="menu-item" id="messages-notification">
            <span><i class="uil uil-envelope-alt"><small class="notification-count">6</small></i></span><h3>Messagse</h3>
        </a>
        <a class="menu-item">
            <span><i class="uil uil-bookmark"></i></span><h3>Bookmarks</h3>
        </a>
        <a class="menu-item">
            <span><i class="uil uil-chart-line"></i></span><h3>Analytics</h3>
        </a>
        <a class="menu-item" id="theme">
            <span><i class="uil uil-palette"></i></span><h3>Theme</h3>
        </a>
        <a class="menu-item">
            <span><i class="uil uil-setting"></i></span><h3>Settings</h3>
        </a>
    </div>
    <!------------------- END OF SIDEBAR -------------------->
    <label for="create-post" class="btn btn-primary">Create Post</label>
</div>
