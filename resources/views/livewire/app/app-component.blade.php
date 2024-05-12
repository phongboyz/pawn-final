<div>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ໜ້າຫຼັກ</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">ຂໍ້ມູນລະບົບ</a></li>
                        <li class="breadcrumb-item active">ຕັ້ງຄ່າລະບົບ</li>
                    </ol>
                </div>
                <h4 class="page-title">ຕັ້ງຄ່າລະບົບ</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="card-box">
                <div class="row">
                    <div class="col-xl-3 col-md-4">
                        <div class="text-center card-box shadow-none border border-secoundary">
                            <div class="member-card">
                                <div class="avatar-xl member-thumb mb-3 mx-auto d-block">

                                    @if ($profile)
                                    <img src="{{asset($profile->temporaryUrl())}}" class="rounded-circle img-thumbnail"
                                        alt="profile-image">
                                    <i class="mdi mdi-star-circle member-star text-success" title="verified user"></i>
                                    @elseif ($profiles)
                                    <img src="{{asset($profiles)}}" class="rounded-circle img-thumbnail"
                                        alt="profile-image">
                                    @else
                                    <img src="{{asset('backend/assets/images/users/avatar-1.jpg')}}"
                                        class="rounded-circle img-thumbnail" alt="profile-image">
                                    @endif

                                </div>

                                <div class="">
                                    <h5 class="font-18 mb-1">{{$data_app->name}}</h5>
                                </div>

                                <div class="form-group" wire:ignore>
                                    <p>ອັບໂຫຼດຮູບພາບ</p>
                                    <input type="file" class="filestyle" wire:model="profile">
                                </div>

                                <hr>

                                
                                    <div class="row">
                                        <div class="col-6 text-right">
                                            <p class="text-muted font-13"><strong>ຊື່ລະບົບ :</strong> </p>

                                            <p class="text-muted font-13"><strong>ເບີໂທລະສັບ :</strong></p>

                                            <p class="text-muted font-13"><strong>@if($data_app->facebook)facebook :@endif</strong></p>

                                            <p class="text-muted font-13"><strong>@if($data_app->tiktok)tiktok :@endif</strong> </p>

                                            <p class="text-muted font-13"><strong>ສະຖານະ :</strong> </p>
                                        </div>
                                        <div class="col-6 text-left">
                                            <p class="ml-4  font-13">{{$data_app->name}}</p>
                                            <p class="ml-4 font-13">{{$data_app->phone}}</p>
                                            <p class="ml-4 font-13">@if($data_app->facebook){{$data_app->facebook}} @endif</p>
                                            <p class="ml-4 font-13">@if($data_app->tiktok){{$data_app->tiktok}} @endif</p>
                                            
                                                @if ($data_app->active == 1)
                                                <p class="ml-4 text-primary font-13">ໃຊ້ງານ</p>
                                                @else
                                                <p class="ml-4 text-danger font-13">ປິດໃຊ້ງານ</p>
                                                @endif
                                            
                                        </div>
                                    </div>

                               

                                <ul class="social-links list-inline mt-4">
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                            data-original-title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                            data-original-title="Twitter"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="#"
                                            data-original-title="Skype"><i class="fab fa-skype"></i></a>
                                    </li>
                                </ul>

                            </div>

                        </div>
                        <!-- end card-box -->

                    </div>
                    <!-- end col -->

                    <div class="col-xl-9 col-md-8">

                        <div class="text-center">
                        <h5 class="header-title">ຂໍ້ມູນລະບົບ</h5>
                        </div>
                        
                        <div class="row">
                        <div class="col-6">
                                    <div class="form-group">
                                        <p>ຊື່ລະບົບ <span class="text-danger">*</span></p>
                                        <input type="text" class="form-control phetsarath-font"
                                            wire:model="name" placeholder="ຊື່ລະບົບ" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <p>ເບີໂທລະສັບ <span class="text-danger">*</span></p>
                                        <input type="text" class="form-control phetsarath-font @error('phone') is-invalid @enderror"
                                            wire:model="phone" placeholder="ເບີໂທລະສັບ">
                                        @error('phone') <span style="color: red"
                                            class="error">{{ $message }}</span>@enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <p>facebook</p>
                                        <input type="text" class="form-control"
                                            wire:model="facebook" placeholder="facebook">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <p>tiktok</p>
                                        <input type="text" class="form-control"
                                            wire:model="tiktok" placeholder="tiktok">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <p>ລາຍລະອຽດເພີ່ມເຕີມ</p>
                                        <textarea class="form-control phetsarath-font"
                                            wire:model="detail" placeholder="ລາຍລະອຽດເພີ່ມເຕີມ" > 
                                            {{$detail}}
                                        </textarea>
                                    </div>
                                </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-12">

                                <center>
                                <button class="btn btn-warning phetsarath-font items-center" wire:click="store">ອັບເດດຂໍ້ມູນລະບົບ</button>
                                </center>
                                
                            </div>
                        </div>
                        
                    </div>
                    <!-- end col -->

                </div>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>