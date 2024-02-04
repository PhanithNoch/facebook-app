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
                <div class="panel panel-theme rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Contact</h3>
                        </div>
                        <div class="pull-right">
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="btn btn-sm btn-success"><i class="fa fa-google-plus"></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body no-padding rounded">
                        <ul class="list-group no-margin">
                            <li class="list-group-item"><i class="fa fa-envelope mr-5"></i> <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="a0d3d5d0d0cfd2d4e0c2cfcfd4c4c5d98ec3cfcd">[email&#160;protected]</a></li>
                            <li class="list-group-item"><i class="fa fa-globe mr-5"></i> www.bootdey.com</li>
                            <li class="list-group-item"><i class="fa fa-phone mr-5"></i> +6281 903 xxx xxx</li>
                        </ul>
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
                    <form action="...">
                        <textarea class="form-control input-lg no-border" rows="2" placeholder="What are you doing?..."></textarea>
                    </form>
                    <div class="panel-footer">
                        <button class="btn btn-success pull-right mt-5">POST</button>
                        <ul class="nav nav-pills">
                            <li>
                                <a href="#"><i class="fa fa-camera"></i></a>
                                <input type="file">
                            </li>
                        </ul>
                    </div>
                </div>
             
            </div>
        </div>
    </div>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>

</html>