@extends('layouts.admin')

@section('content')

    <div class="container vh-100">
        <div class="card">
           <div class="card-header">
              <h1>Mohamed's Dashboard</h1>
           </div>
            <div class="card-body dashboard">
                <div class="row">
                    <div>
                        <h3>
                            <a class="nav-link " href="">
                                <i class="material-icons opacity-10">table_view</i>
                                <span>Categories</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link " href="">
                                <i class="material-icons opacity-10">inventory</i>
                                <span>Products</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link " href="">
                                <i class="material-icons opacity-10">inventory_2</i>
                                <span>Orders</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link" href="">
                                <i class="material-icons opacity-10">messages</i>
                                <span>Messages</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link" href="">
                                <i class="material-icons opacity-10">home</i>
                                <span>Home Page Content</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link " href="">
                                <i class="material-icons opacity-10">content_copy</i>
                                <span>About Page Content</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link " href="">
                                <i class="material-icons opacity-10">star_half</i>
                                <span>Why Us Features</span>
                            </a>
                        </h3>
                    </div>
                    <div>
                        <h3>
                            <a class="nav-link">
                                <i class="material-icons opacity-10">groups</i>
                                <span>Team Member</span>
                            </a>
                        </h3>
                    </div>

                </div>
            </div>
        </div>
</div>

@endsection
