@extends('layouts.adminlayout')

@section('contentadmin')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Berita</h1>
                    </div>

                    <div class="container">
                        <div class="col-sm-12">
                        <form action="/addberita" method="post" enctype="multipart/form-data">
                            @csrf
                              <!--Image-->
                              <div>
                                    <div class="mb-4 d-flex justify-content-center">
                                        <img id="selectedImage" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg"
                                        alt="example placeholder" style="width: 50%;" />
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <div class="btn btn-primary btn-rounded">
                                            <label class="form-label text-white m-1" for="customFile1">Choose file</label>
                                            <input type="file" name="file" class="form-control d-none" id="customFile1" onchange="displaySelectedImage(event, 'selectedImage')" />
                                        </div>
                                    </div>
                                </div>
                            <div class="mb-3">
                                <label name = "judul" for="judul" class="form-label">Judul</label>
                                <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="desc" rows="15"></textarea>
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

 @endsection
