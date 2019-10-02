 <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="/admin"><img src="{{asset('master/assets/images/logo2.png')}}" alt="logo"></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        @if (Auth::user()->role == 1)
                        <ul class="metismenu" id="menu">
                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-align-left"></i> <span>Halamann Depan</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Slidebar</a>
                                        <ul class="collapse">
                                            <li><a href="/admin/halaman-depan/slidebar">Input SlideBar</a></li>
                                            <li><a href="/admin/halaman-depan/data-slidebar">Data SlideBar</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kata Depan</a>
                                        <ul class="collapse">
                                            <li><a href="/admin/halaman-depan/kata-sambutan"> Kata Depan</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#" aria-expanded="true">Keunggulan</a>
                                        <ul class="collapse">
                                            <li><a href="/admin/halaman-depan/keunggulan">Input Keunggulan</a></li>
                                            <li><a href="/admin/halaman-depan/data-keunggulan">Data Keunggulan</a></li>
                                            
                                        </ul>
                                    </li>
                                    <li><a href="{{route('profilsekolah')}}">Profil Sekolah</a></li>
                                    <li><a href="{{route('visimisi')}}">Visi Misi</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-palette"></i> <span>Gallery</span></a>
                                <ul class="collapse">
                                    <li><a href="#">Gallery Foto</a>
                                        <ul class="collapse">
                                            <li><a href="/admin/gallery-foto">Input Foto</a></li>
                                            <li><a href="/admin/gallery-foto-data">Data Foto</a></li>
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
                                    <li><a href="{{route('berita_add')}}">Input Berita</a></li>
                                    <li><a href="{{route('berita_data')}}">Data Berita</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Alumni</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/alumni  ">Input Alumni</a></li>
                                    <li><a href="/admin/data-alumni">Data Alumni</a></li>
                                </ul>
                            </li>

                            <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Jurusan</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/jurusan  ">Input Jurusan</a></li>
                                    
                                </ul>
                            </li>
                              <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Files</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/filesmapel">Input Files</a></li>
                                    <li><a href="/admin/filesmapelcontroll">Kontrol Files</a></li>
                                    
                                </ul>
                            </li>
                        @endif
                        @if (Auth::user()->role == 2)
                        <ul class="metismenu" id="menu">
                            <li >
                               
                           
                              <li >
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-bookmark"></i> <span>Files</span></a>
                                <ul class="collapse">
                                    <li><a href="/admin/filesmapel">Input Files</a></li>
                                    <li><a href="/admin/filesmapelcontroll">Kontrol Files</a></li>
                                    
                                </ul>
                            </li>    
                         @endif   
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->