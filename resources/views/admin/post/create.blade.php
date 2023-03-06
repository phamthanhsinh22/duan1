@extends('admin.layout')
@section('content')
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
            <div class="container">
                <div class="page-header-content pt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-4">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                Dashboard
                            </h1>
                            <div class="page-header-subtitle">Example dashboard overview and content summary</div>
                        </div>
                        <div class="col-12 col-xl-auto mt-4">
                            <button class="btn btn-white p-3" id="reportrange">
                                <i class="mr-2 text-primary" data-feather="calendar"></i>
                                <span></span>
                                <i class="ml-1" data-feather="chevron-down"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container mt-n10">
            <div class="row">
                <div class="col-xxl-4 col-xl-12 mb-4">
                    <div class="card h-100">
                        <div class="card-body h-100 d-flex flex-column justify-content-center py-5 py-xl-4">
                            <div class="row align-items-center">
                                <div class="col-xl-8 col-xxl-12">
                                    <div class="text-center text-xl-left text-xxl-center px-4 mb-4 mb-xl-0 mb-xxl-4">
                                        <h1 class="text-primary">Welcome to SB Admin Pro!</h1>
                                        <p class="text-gray-700 mb-0">Browse our fully designed UI toolkit! Browse our
                                            prebuilt app pages, components, and utilites, and be sure to look at our
                                            full documentation!</p>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-xxl-12 text-center"><img class="img-fluid"
                                        src="assets/img/illustrations/at-work.svg" style="max-width: 26rem" /></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Example Colored Cards for Dashboard Demo-->
            <!-- Example Charts for Dashboard Demo-->
            <div class="row">
                <div class="col-md-12">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <div class="card-header"><h2>Add Post</h2>
                    </div>
                    <div class="card-body">
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                        </div>
                            <div class="position-center">
                                <form role="form" action="{{ route('post.store') }}" id="myTable" method="post" enctype='multipart/form-data'>
                                    {{csrf_field()}}
                                <div class="form-group">
                                    
                                    <label for="exampleInputEmail1">Nhập Title</label>
                                    <input type="text" onkeyup="ChangeToSlug()" id="slug" name="title" class="form-control" id="exampleInputEmail1" placeholder="Vui lòng nhập...">
                                    <label for="exampleInputEmail1">Nhập slugPost</label>
                                    <input type="text" id="convert_slug" name="slug_title" class="form-control" id="exampleInputEmail1" placeholder="Vui lòng nhập...">
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nội Dung</label>
                                    <textarea name="content"  id="noidung_post" class="form-control" rows="7" style="resize: none;"></textarea>
                                    </div>
                                    <div class="form-group">
                                    <label for="exampleInputEmail1">Nhập Tóm tắt</label>
                                    <textarea name="summary" id="noidung_chapter" class="form-control" rows="3" style="resize: none;"></textarea>
                                    </div>
                                    
                                    <label for="exampleInputEmail1">Hình ảnh</label>
                                    <input type="file" name="images" class="form-control-file" id="exampleInputEmail1" placeholder="Vui lòng nhập...">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hoạt Động</label>
                                        <br>
                                        <select name="Active" class="custom-select">
                                            <option value="1">Hoạt động</option>
                                            <option value="0">Không hoạt động</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nổi bật</label>
                                        <br>
                                        <select name="hot" class="custom-select">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Xu Hướng</label>
                                        <br>
                                        <select name="trending" class="custom-select">
                                            <option value="1">Có</option>
                                            <option value="0">Không</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Loại tin</label>
                                        <br>
                                        <select name="type_id" class="custom-select">
                                            @foreach($type as $typ)
                                            <option value="{{$typ->id}}">{{$typ->typName}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                </div>
                                
                                <button type="submit" name="" class="btn btn-info">Add</button>
                            </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer class="footer mt-auto footer-light">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 small">Copyright &copy; Your Website 2021</div>
                <div class="col-md-6 text-md-right small">
                    <a href="#!">Privacy Policy</a>
                    &middot;
                    <a href="#!">Terms &amp; Conditions</a>
                </div>
            </div>
        </div>
    </footer>
</div>

@endsection