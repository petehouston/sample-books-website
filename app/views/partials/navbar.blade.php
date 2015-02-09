<div class="navbar navbar-default">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ URL::route('home') }}">Books Library</a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
        <ul class="nav navbar-nav">
            <li><a href="#">List</a>
            </li>
            <li><a href="{{ URL::route('search') }}">Search</a>
            </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
            @if (Auth::guest())
            <li>
                <a href="{{ URL::route('admin.home') }}">Admin</a>
            </li>
            @else
            <li>
                <a href="{{ URL::route('admin.home') }}">Admin</a>
                
            </li>
            <li>
                <a href="{{ URL::route('admin.logout') }}">Log out</a>
            </li>
            @endif

        </ul>
    </div>
</div>