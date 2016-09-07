<div class="container row well" style="width:100%">
    <div class="col-sm-11 col-md-11 col-lg-11">
       <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">profile
            <span class="caret"></span></button>
            <ul class="dropdown-menu">
                <li id="l1" class="">
                    <a href="{{ action('Main@userinfo') }}" id="myprof">
                        <span class="glyphicon glyphicon-user"></span> MyProf
                    </a>
                </li>
                <li id="l2" class=""><a href="{{ action('Main@addUser') }}" id="adduser">
                    <span class="glyphicon glyphicon-user">AddUser</a>
                </li>
                <li id="l3" class=""> <a href="{{action('Main@addedUserDetail')}}" id="showuser">
                    <span class="glyphicon glyphicon-user">ShowUser</a>
                </li>
            </ul>
        </div> 
    </div>
    <div class="col-sm-1 col-md-1 col-lg-1">
        <a href="{{action('Logout@index')}}"><button type="button" class="btn btn-info">
        <span class="glyphicon glyphicon-log-out"></span> Logout</button> </a>
    </div>
</div>

<script src="assets/js/Header.js"></script>
