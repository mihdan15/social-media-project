@extends('master1')

@section('judul')
Social Media
@endsection

@section('content')
<div class="stories">
    <div class="story">
        <div class="profile-photo">
            <img src="./images/profile-20.jpg">
        </div>
        <p class="name">Your Story</p>
    </div>
    <div class="story">
        <div class="profile-photo">
            <img src="{{asset('sosmed/images/profile-9.jpg')}}">
        </div>
        <p class="name">Lilla James/p>
    </div>
    <div class="story">
        <div class="profile-photo">
            <img src="{{asset('sosmed/images/profile-10.jpg')}}">
        </div>
        <p class="name">Winnie Hale</p>
    </div>
    <div class="story">
        <div class="profile-photo">
            <img src="{{asset('tmplate/images/profile-11.jpg')}}">
        </div>
        <p class="name">Daniel Bale</p>
    </div>
    <div class="story">
        <div class="profile-photo">
            <img src="{{asset('tmplate/images/profile-12.jpg')}}">
        </div>
        <p class="name">Jane Doe</p>
    </div>
    <div class="story">
        <div class="profile-photo">
            <img src="./images/profile-8.jpg">
        </div>
        <p class="name">Tina White</p>
    </div>
</div>
<!------------------- END OF STORIES -------------------->
<form class="create-post">
    <div class="profile-photo">
        <img src="./images/profile-1.jpg">
    </div>
    <input type="text" placeholder="What's on your mind, Diana?" id="create-post">
    <input type="submit" value="Post" class="btn btn-primary">
</form>

<!------------------- FEEDS --------------------->
<div class="feeds">
    <!------------------- FEED 1 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-13.jpg">
                </div>
                <div class="ingo">
                    <h3>Lana Rose</h3>
                    <small>Dubai, 15 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-1.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 2 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-14.jpg">
                </div>
                <div class="ingo">
                    <h3>Benjamin Dwayne</h3>
                    <small>Miami, 2 HOURS AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-2.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 3,473 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 3 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-15.jpg">
                </div>
                <div class="ingo">
                    <h3>Malik Berry</h3>
                    <small>Ghana, 1 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-3.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 4 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-16.jpg">
                </div>
                <div class="ingo">
                    <h3>Lana Rose</h3>
                    <small>Dubai, 15 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-4.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 5 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-16.jpg">
                </div>
                <div class="ingo">
                    <h3>Chris Brown</h3>
                    <small>Dubai, 15 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-5.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 6 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-17.jpg">
                </div>
                <div class="ingo">
                    <h3>Michael David</h3>
                    <small>Dubai, 15 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-6.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
    <!------------------- FEED 7 --------------------->
    <div class="feed">
        <div class="head">
            <div class="user">
                <div class="profile-photo">
                    <img src="./images/profile-18.jpg">
                </div>
                <div class="ingo">
                    <h3>Ama Jackie</h3>
                    <small>Dubai, 15 MINUTES AGO</small>
                </div>
            </div>
            <span class="edit">
                <i class="uil uil-ellipsis-h"></i>
            </span>
        </div>

        <div class="photo">
            <img src="./images/feed-7.jpg">
        </div>

        <div class="action-buttons">
            <div class="interaction-buttons">
                <span><i class="uil uil-heart"></i></span>
                <span><i class="uil uil-comment-dots"></i></span>
                <span><i class="uil uil-share-alt"></i></span>
            </div>
            <div class="bookmark">
                <span><i class="uil uil-bookmark-full"></i></span>
            </div>
        </div>

        <div class="liked-by">
            <span><img src="./images/profile-10.jpg"></span>
            <span><img src="./images/profile-4.jpg"></span>
            <span><img src="./images/profile-15.jpg"></span>
            <p>Liked by <b>Ernest Achiever</b> and <b>2,323 others</b></p>
        </div>

        <div class="caption">
            <p><b>Lana Rose</b> Lorem ipsum dolor sit quisquam eius. <span class="harsh-tag">#lifestyle</span></p>
        </div>
        <div class="comments text-muted">View all 277 comments</div>
    </div>
    <!---------------- END OF FEED ----------------->
</div>

@endsection


