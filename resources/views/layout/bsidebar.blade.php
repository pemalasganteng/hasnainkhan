 <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><img src="{{asset('master/admin3/assets/images/icon/logo.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Halamann Depan</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Slidebar</a>
                                        <ul class="collapse">
                                            <li><a href="{{ route ('input_slidebar')}}">Input SlideBar</a></li>
                                            <li><a href="{{ route ('data_slidebar')}}">Data SlideBar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{ route ('kata_depan')}}">Kata Depan</a></li>
                                    <li><a href="{{ route ('statistik')}}">Statistik</a></li>
                                    <li><a href="/admin/halaman-depan/video">Video</a></li>
                                    <li><a href="{{ route ('kepala')}}">Kepala Sekolah</a></li>
                                    <li><a href="#" aria-expanded="true">Keunggulan</a>
                                        <ul class="collapse">
                                            <li><a href="{{route ('input_keunggulan')}}">Input Keunggulan</a></li>
                                            <li><a href="{{ route ('data_keunggulan')}}">Data Keunggulan</a></li>
                                            
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i> <span>Gallery</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Gallery Foto</a>
                                        <ul class="collapse">
                                            <li><a href="{{ route ('input_gallery_foto')}}">Input Foto</a></li>
                                            <li><a href="{{ route ('data_gallery_foto')}}">Data Foto</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Gallery Video</a>
                                        <ul class="collapse">
                                            <li><a href="#"> Input Video</a></li>
                                            <li><a href="#"> Data Video</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-comment-alt"></i> <span>Berita</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/berita  ">Input Berita</a></li>
                                    <li><a href="/admin/data-berita">Data Berita</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Alumni</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route ('input_alumni')}}">Input Alumni</a></li>
                                    <li><a href="{{ route ('data_alumni')}}">Data Alumni</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Jurusan</span></a>
                                <ul class="collapse">
                                    <li><a href="{{ route ('input_jurusan')}}">Input Jurusan</a></li>
                                    @for($i=0; $i<count($coba); $i++)
                                    
                                    <li><a href="{{ route ('data_jurusan', $coba[$i]->id)}}">{{$coba[$i]->jurusan}}</a></li>

                                    @endfor
                                </ul>
                            </li>
                          
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>GTK</span></a>
                                <ul class="collapse">
                                   
                                    <li><a href="{{ route ('input_gtk')}}">Input GTK</a></li>
                                    <li><a href="{{ route ('data_gtk')}}">Data GTK</a></li>
                                    <li><a href="{{ route ('input_lab')}}">Input Keahlian LAB</a></li>
                                </ul>
                            </li>
                            
                            
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->