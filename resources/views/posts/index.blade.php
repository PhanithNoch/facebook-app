<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>


    <div class="container bootstrap snippets bootdeys">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4">
                <div class="panel rounded shadow">
                    <div class="panel-body">
                        <div class="inner-all">
                            <ul class="list-unstyled">
                                <li class="text-center">
                                    <img data-no-retina class="img-circle img-responsive img-bordered-primary" src="{{ asset('storage/profiles/'.$user->profile_url) }}" alt="John Doe">
                                </li>
                                <li class="text-center">
                                    <h4 class="text-capitalize">{{$user->first_name}} {{$user->last_name}}</h4>
                                    <p class="text-muted text-capitalize">web designer</p>
                                </li>

                                <li><br></li>
                                <li>
                                    <div class="btn-group-vertical btn-block">
                                        <a href class="btn btn-default"><i class="fa fa-cog pull-right"></i>Edit Account</a>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button class="btn btn-default" type="submit">
                                                <i class="fa fa-cog pull-right"></i>Logout
                                            </button>

                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-9 col-md-9 col-sm-8">
                <div class="profile-cover">
                    <div class="cover rounded shadow no-overflow">
                        <div class="inner-cover">

                            <div class="btn-group cover-menu-mobile hidden-lg hidden-md">
                                <button type="button" class="btn btn-theme btn-sm dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <ul class="dropdown-menu pull-right no-border" role="menu">
                                    <li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                                    <li><a href="#"><i class="fa fa-fw fa-envelope"></i> <span>Messages</span> <small>(7 new)</small></a></li>
                                </ul>
                            </div>
                            <img src="https://bootdey.com/img/Content/flores-amarillas-wallpaper.jpeg" class="img-responsive full-width" alt="cover" style="max-height:200px;">
                        </div>
                        <ul class="list-unstyled no-padding hidden-sm hidden-xs cover-menu">
                            <li class="active"><a href="#"><i class="fa fa-fw fa-clock-o"></i> <span>Timeline</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-user"></i> <span>About</span></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-photo"></i> <span>Photos</span> <small>(98)</small></a></li>
                            <li><a href="#"><i class="fa fa-fw fa-users"></i><span> Friends </span><small>(23)</small></a></li>
                        </ul>
                    </div>
                </div>
                <div class="divider"></div>
                <div class="panel rounded shadow">
                    <form action="{{route('posts.store')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        <textarea name="content" class="form-control input-lg no-border" rows="2" placeholder="What are you doing?..."></textarea>
                        <div class="panel-footer">
                            <ul class="nav nav-pills">
                                <li>
                                    <a href="#"><i class="fa fa-camera"></i></a>
                                    <input name="image" type="file">
                                </li>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-success pull-right mt-5">POST</button>

                    </form>

                </div>

            </div>
        </div>

        <div class="row">
            @foreach($posts as $post)
            <div class="col-md-3"></div>
            <div class="col-md-9 " style="margin-bottom: 20px;">
                <div class="card">
                    <div class="card-body">
                        <img style="border-radius: 50%;" width="100" src="{{ asset('storage/profiles/'.$post->user->profile_url) }}" alt="">
                        <h5 class="card-title
                                    ">{{$post->title}}</h5>
                        <p class="card-text">{{$post->content}}</p>
                        <img width="100%" src="{{ asset('storage/posts/'.$post->image_url) }}" class="card-img-top" alt="...">
                        <!-- comment section -->
                        <div class="row">

                        </div>

                        <!-- end comment section -->
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>