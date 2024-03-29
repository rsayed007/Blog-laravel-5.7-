    <!-- #Top Bar -->
    <section>
            <!-- Left Sidebar -->
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="image">
                        <img src="{{ asset('storage/profileImage')}}/{{Auth::user()->image}}" width="48" height="48" alt="User" />
                    </div>
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}}</div>
                        <div class="email">{{Auth::user()->email}}</div>
                        <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="javascript:void(0);"><i class="material-icons">person</i>Profile</a></li>
                                @if (Request::is('admin*'))
                                    <li class="{{ Request::is('admin/profile-setting') ? 'active':'' }}">
                                        <a href="{{route('admin.profile.setting')}}">
                                            <i class="material-icons">settings</i>
                                            <span>Profile Setting</span>
                                        </a>
                                    </li>
                                @endif
                                @if (Request::is('author*'))
                                    <li class="{{ Request::is('author/profile-setting') ? 'active':'' }}">
                                        <a href="{{route('author.profile.setting')}}">
                                            <i class="material-icons">settings</i>
                                            <span>Profile Setting</span>
                                        </a>
                                    </li>
                                @endif
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                        <i class="material-icons">input</i>
                                         {{ __('Logout') }}
                                     </a>
 
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         @csrf
                                     </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        @if (Request::is('admin*'))
                            <li class="header bg-light-blue">Admin Navigation</li>
                            <li class="{{ Request::is('admin/dashboard') ? 'active':'' }}">
                                <a href="{{route('admin.dashboard')}}">
                                    <i class="material-icons">home</i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/tag*') ? 'active':'' }}">
                                <a href="{{route('admin.tag.index')}}">
                                    <i class="material-icons">label</i>
                                    <span>Tag</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/category*') ? 'active':'' }}">
                                <a href="{{route('admin.category.index')}}">
                                    <i class="material-icons">apps</i>
                                    <span>Category</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/post*') ? 'active':'' }}">
                                <a href="{{route('admin.post.index')}}">
                                    <i class="material-icons">collections_bookmark</i>
                                    <span>Posts</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/pending/post') ? 'active':'' }}">
                                <a href="{{route('admin.post.pending')}}">
                                    <i class="material-icons">new_releases</i>
                                    <span>Pending Posts</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/favorite/*') ? 'active':'' }}">
                                <a href="{{route('admin.favorite.index')}}">
                                    <i class="material-icons">favorite</i>
                                    <span>Favorite Posts</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/comments*') ? 'active':'' }}">
                                <a href="{{route('admin.post.comment')}}">
                                    <i class="material-icons">comment</i>
                                    <span>Comments</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('admin/subscriber') ? 'active':'' }}">
                                <a href="{{route('admin.subscriber')}}">
                                    <i class="material-icons">subscriptions</i>
                                    <span>Subscribe List</span>
                                </a>
                            </li>
                            <li class="header bg-deep-orange">System </li>
                            <li class="{{ Request::is('admin/profile-setting') ? 'active':'' }}">
                                <a href="{{route('admin.profile.setting')}}">
                                    <i class="material-icons">settings</i>
                                    <span>Profile Setting</span>
                                </a>
                            </li>
                        @endif
                        
                        @if (Request::is('author*'))
                            <li class="header">Author Navigation</li>
                            <li class="{{ Request::is('author/dashboard') ? 'active':'' }}">
                                <a href="{{route('author.dashboard')}}">
                                    <i class="material-icons">home</i>
                                    <span>Home</span>
                                </a>
                            </li>

                            <li class="{{ Request::is('author/post*') ? 'active':'' }}">
                                <a href="{{route('author.post.index')}}">
                                    <i class="material-icons">collections_bookmark</i>
                                    <span>Post</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('author/favorite/*') ? 'active':'' }}">
                                <a href="{{route('author.favorite.index')}}">
                                    <i class="material-icons">favorite</i>
                                    <span>Favorite Posts</span>
                                </a>
                            </li>
                            <li class="{{ Request::is('author/post/comment/*') ? 'active':'' }}">
                                <a href="{{route('author.post.comment')}}">
                                    <i class="material-icons">comment</i>
                                    <span>Comments</span>
                                </a>
                            </li>
                            <li class="header bg-deep-orange">System </li>
                            <li class="{{ Request::is('author/profile-setting') ? 'active':'' }}">
                                <a href="{{route('author.profile.setting')}}">
                                    <i class="material-icons">settings</i>
                                    <span>Profile Setting</span>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="copyright">
                        &copy; 2016 - 2017 <a href="javascript:void(0);">AdminBSB - Material Design</a>.
                    </div>
                    <div class="version">
                        <b>Version: </b> 1.0.5
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
            <!-- #END# Left Sidebar -->
        </section>