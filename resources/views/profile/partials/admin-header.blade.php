<div class="sticky-header header-section pb-2">
    <div class="header-left">
        <!--toggle button start-->
        <button style="background-color: #65C7D0" id="showLeftPush"><i class="fa fa-bars"></i></button>
        <!--toggle button end-->
        <div class="profile_details_left">
            <div class="clearfix"></div>
        </div>
        <!--notification menu end -->
        <div class="clearfix"></div>
    </div>
    <div class="header-right">

        <!--search-box-->
        <div class="search-box">
            <form
                action="{{ auth()->user()->acc_type == 'admin' ? '#InsertRedirectPathHere' : '/doctor/search' }}"
                class="input">
                <input name="appointment" value="{{ request()->query('appointment') }}"
                    class="sb-search-input input__field--madoka" placeholder="Search Name..." type="search"
                    id="input-31" />
                <label class="input__label" for="input-31">
                    <svg class="graphic" width="100%" height="100%" viewBox="0 0 404 77" preserveAspectRatio="none">
                        <path d="m0,0l404,0l0,77l-404,0l0,-77z" />
                    </svg>
                </label>
            </form>
        </div>
        <!--//end-search-box-->

        <div class="profile_details">
            <ul>
                <li class="dropdown profile_details_drop">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <div class="profile_img">
                            <span class="prfil-img"><img src="{{ asset('images/2.jpg') }}" alt=""> </span>
                            <div class="user-name">
                                @auth()
                                    <p>
                                        {{ auth()->user()->name }}
                                    </p>
                                    <span>
                                        {{ auth()->user()->acc_type }}
                                    </span>
                                @endauth

                            </div>
                            <i class="fa fa-angle-down lnr"></i>
                            <i class="fa fa-angle-up lnr"></i>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                    <ul class="dropdown-menu drp-mnu">
                        <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                        <li><a href="#"><i class="fa fa-user"></i> My Account</a></li>
                        <li><a href="#"><i class="fa fa-suitcase"></i> Profile</a></li>
                        {{-- <li><a href="#" {{ action('UserController@logout') }} @method('POST')>@csrf<i class="fa fa-sign-out"></i> Logout</a></li> --}}
                        <li>
                            <form action="/logout" method="POST" class="inline">
                                @csrf
                                <button type="submit">
                                    <i class="fa fa-sign-out">Log out</i>
                                </button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
