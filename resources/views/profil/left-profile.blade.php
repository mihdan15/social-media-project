                        <div class="left">
                                <a class="profile">
                                    <div class="profile-photo">
                                        <img src="{{ Auth::user()->gravatar()}}" alt="{{Auth::user()->name}}">
                                    </div>
                                    <div class="handle">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <p class="text-muted">
                                            {{$profile->user->email}}
                                        </p>
                                    </div>
                                </a>
                        <div class="sidebar">
                            <a class="menu-item">
                                <span><i class="uil uil-profile active"></i></span><h3>Profile</h3>
                            </a>
                            <a href="/profile/{{$profile->id}}/edit" class="menu-item">
                                <span><i class="uil uil-edit"></i></span><h3>Edit Profile</h3>
                            </a>
                            <a class="menu-item" id="theme">
                                <span><i class="uil uil-palette"></i></span><h3>Theme</h3>
                            </a>
                        </div>
                    </div>
