@extends('layouts.admin')



@section('content')

            <div class="content-area">
              <div class="mr-breadcrumb">
                <div class="row">
                  <div class="col-lg-12">
                      <h4 class="heading">{{ __('Edit Language') }} <a class="add-btn" href="{{route('admin-lang-index')}}"><i class="fas fa-arrow-left"></i> {{ __('Back') }}</a></h4>
                      <ul class="links">
                        <li>
                          <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }} </a>
                        </li>
                      <li><a href="javascript:;">{{ __('Language Settings') }}</a></li>
                      <li>
                        <a href="{{ route('admin-lang-index') }}">{{ __('Website Language') }} </a>
                      </li>
                        <li>
                          <a href="{{ route('admin-lang-edit',$data->id) }}">{{ __('Edit') }}</a>
                        </li>
                      </ul>
                  </div>
                </div>
              </div>
              <div class="add-product-content">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="product-description">
                      <div class="body-area" id="modalEdit">
                      <div class="gocover" style="background: url({{asset('assets/images/'.$gs->admin_loader)}}) no-repeat scroll center center rgba(45, 45, 45, 0.5);"></div>
                      <form id="geniusform" action="{{route('admin-lang-update',$data->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                      @include('includes.admin.form-both')  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Language') }} *</h4>
                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="language" placeholder="{{ __('Language') }}" value="{{$data->language}}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">{{ __('Language Direction') }} *</h4>
                                <p class="sub-heading">{{ __('(In Any Language)') }}</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <select name="rtl" class="input-field" required="">
                              <option value="0" {{ $langg->rtl == '0'  ? 'selected' : '' }}>{{ __('Left To Right') }}</option>
                              <option value="1" {{ $langg->rtl == '1'  ? 'selected' : '' }}>{{ __('Right To Left') }}</option>
                            </select>
                          </div>
                        </div>



                        <div class="row add_lan_tab justify-content-center">
                          <div class="col-lg-10">
                            <nav>
                              <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">{{ __('Website') }}</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">{{ __('User Panel') }}</a>
                                <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab" aria-controls="nav-about" aria-selected="false">{{ __('Vendor Panel') }}</a>
                              </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">

 {{-- FRONTEND STARTS --}}

                              <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

                     <hr>
                        
                        <h4 class="text-center">HEADER</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Track Order *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang16" placeholder="Track Order" required="" value="{{ $langg->lang16 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">My Account *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang11" placeholder="My Account" required="" value="{{ $langg->lang11 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">User Panel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang221" placeholder="User Panel" required="" value="{{ $langg->lang221 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Vendor Panel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang222" placeholder="Vendor Panel" required="" value="{{ $langg->lang222 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Logout *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang223" placeholder="Logout" required="" value="{{ $langg->lang223 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sign in *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang12" placeholder="Sign in" required="" value="{{ $langg->lang12 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Join *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang13" placeholder="Join" required="" value="{{ $langg->lang13 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sell *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang220" placeholder="Sell" required="" value="{{ $langg->lang220 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Featured Links *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang831" placeholder="Featured Links" required=""
                              value="{{ $langg->lang831 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">All Categories *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang1" placeholder="All Categories" required="" value="{{ $langg->lang1 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Search For Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang2" placeholder="Search For Product" required="" value="{{ $langg->lang2 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cart *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang3" placeholder="Cart" required="" value="{{ $langg->lang3 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Item(s) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang4" placeholder="Item(s)" required="" value="{{ $langg->lang4 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View Cart *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang5" placeholder="View Cart" required="" value="{{ $langg->lang5 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang6" placeholder="Total " required="" value="{{ $langg->lang6 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Checkout *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang7" placeholder="Checkout" required="" value="{{ $langg->lang7 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cart is empty. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang8" placeholder="Cart is empty." required="" value="{{ $langg->lang8 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Wish *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang9" placeholder="Wish" required="" value="{{ $langg->lang9 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Compare *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang10" placeholder="Compare" required="" value="{{ $langg->lang10 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Categories *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang14" placeholder="Categories" required="" value="{{ $langg->lang14 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">See All Categories *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang15" placeholder="See All Categories" required="" value="See All Categories">
                          </div>
                        </div>




                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Home *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang17" placeholder="Home" required="" value="{{ $langg->lang17 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Blog *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang18" placeholder="Blog" required="" value="{{ $langg->lang18 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Faq *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang19" placeholder="Faq" required="" value="{{ $langg->lang19 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Contact Us *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang20" placeholder="Contact Us" required="" value="{{ $langg->lang20 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">HOME</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang25" placeholder="Shop Now" required="" value="{{ $langg->lang25 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Featured *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang26" placeholder="Featured" required="" value="{{ $langg->lang26 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Popular Products *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang832" placeholder="Popular Products" required=""
                              value="{{ $langg->lang832 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Best Seller *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang27" placeholder="Best Seller" required="" value="{{ $langg->lang27 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Flash Deal *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang244" placeholder="Flash Deal" required="" value="{{ $langg->lang244 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Top Rated *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang28" placeholder="Top Rated" required="" value="{{ $langg->lang28 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Big Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang29" placeholder="Big Save" required="" value="{{ $langg->lang29 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Hot *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang30" placeholder="Hot" required="" value="{{ $langg->lang30 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">New *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang31" placeholder="New" required="" value="{{ $langg->lang31 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Trending *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang32" placeholder="Trending" required="" value="{{ $langg->lang32 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sale *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang33" placeholder="Sale" required="" value="{{ $langg->lang33 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Read More *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang34" placeholder="Read More" required="" value="{{ $langg->lang34 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Brands *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang236" placeholder="Brands" required="" value="{{ $langg->lang236 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">BLOG</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tag *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang35" placeholder="Tag" required="" value="{{ $langg->lang35 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Search *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang36" placeholder="Search" required="" value="{{ $langg->lang36 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Archive *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang37" placeholder="Archive" required="" value="{{ $langg->lang37 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Read More *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang38" placeholder="Read More" required="" value="{{ $langg->lang38 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Blog Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang39" placeholder="Blog Details" required="" value="{{ $langg->lang39 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View(s) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang40" placeholder="Hot" required="" value="{{ $langg->lang40 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Source *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang41" placeholder="New" required="" value="{{ $langg->lang41 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Search*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang46" placeholder="Search" required="" value="{{ $langg->lang46 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Categories *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang42" placeholder="Trending" required="" value="{{ $langg->lang42 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Recent Post *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang43" placeholder="Sale" required="" value="{{ $langg->lang43 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Archives*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang44" placeholder="Read More" required="" value="{{ $langg->lang44 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tags*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang45" placeholder="Tags" required="" value="{{ $langg->lang45 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">CONTACT US</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Name*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang47" placeholder="Name" required="" value="{{ $langg->lang47 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone Number*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang48" placeholder="Phone Number" required="" value="{{ $langg->lang48 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Address*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang49" placeholder="Email Address" required="" value="{{ $langg->lang49 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Message*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang50" placeholder="Your Message" required="" value="{{ $langg->lang50 }}">
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Code*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang51" placeholder="Enter Code" required="" value="{{ $langg->lang51 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send Message*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang52" placeholder="Send Message" required="" value="{{ $langg->lang52 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Find Us Here*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang53" placeholder="Find Us Here" required="" value="{{ $langg->lang53 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">PRODUCT ADD CART</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Wishlist*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang54" placeholder="Find Us Here" required="" value="{{ $langg->lang54 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quick View*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang55" placeholder="Quick View" required="" value="{{ $langg->lang55 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Cart*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang56" placeholder="Add To Cart" required="" value="{{ $langg->lang56 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Compare*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang57" placeholder="Compare" required="" value="{{ $langg->lang57 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Buy Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang251" placeholder="Buy Now" required="" value="{{ $langg->lang251 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">PRODUCT CATALOG</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Search*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang58" placeholder="Search" required="" value="{{ $langg->lang58 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tag*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang59" placeholder="Tag" required="" value="{{ $langg->lang59 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No Product Found*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang60" placeholder="No Product Found" required="" value="{{ $langg->lang60 }}">
                          </div>
                        </div>

                       <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Filter Results By*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang61" placeholder="Filter Results By" required="" value="{{ $langg->lang61 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">To*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang62" placeholder="To" required="" value="{{ $langg->lang62 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Popular Tags*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang63" placeholder="Popular Tags" required="" value="{{ $langg->lang63 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sort By*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang64" placeholder="Sort By" required="" value="{{ $langg->lang64 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Latest Product*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang65" placeholder="Latest Product" required="" value="{{ $langg->lang65 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Oldest Product*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang66" placeholder="Oldest Product" required="" value="{{ $langg->lang66 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Lowest Price*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang67" placeholder="Lowest Price" required="" value="{{ $langg->lang67 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Highest Price*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang68" placeholder="Highest Price" required="" value="{{ $langg->lang68 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">PRODUCT COMPARE</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Compare*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang69" placeholder="Compare" required="" value="{{ $langg->lang69 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Compare*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang70" placeholder="Product Compare" required="" value="{{ $langg->lang70 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Name*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang71" placeholder="Product Name" required="" value="{{ $langg->lang71 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang72" placeholder="Price" required="" value="{{ $langg->lang72 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Rating*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang73" placeholder="Rating" required="" value="{{ $langg->lang73 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Description*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang74" placeholder="Description" required="" value="{{ $langg->lang74 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Cart*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang75" placeholder="Add To Cart" required="" value="{{ $langg->lang75 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Remove*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang76" placeholder="Remove" required="" value="{{ $langg->lang76 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">PRODUCT DETAILS</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product SKU*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang77" placeholder="Product SKU" required="" value="{{ $langg->lang77 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Out Of Stock*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang78" placeholder="Out Of Stock" required="" value="{{ $langg->lang78 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">In Stock*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang79" placeholder="In Stock" required="" value="{{ $langg->lang79 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Review(s)*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang80" placeholder="Review(s)" required="" value="{{ $langg->lang80 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Favorite Seller *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang224" placeholder="Add To Favorite Seller" required="" value="{{ $langg->lang224 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Favorite *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang225" placeholder="Favorite" required="" value="{{ $langg->lang225 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Contact Seller*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang81" placeholder="Contact Seller" required="" value="{{ $langg->lang81 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Platform*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang82" placeholder="Platform" required="" value="{{ $langg->lang82 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Region*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang83" placeholder="Region" required="" value="{{ $langg->lang83 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Type*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang84" placeholder="License Type" required="" value="{{ $langg->lang84 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Condition*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang85" placeholder="Product Condition" required="" value="{{ $langg->lang85 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Watch Video*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang219" placeholder="Watch Video" required="" value="{{ $langg->lang219 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Estimated Shipping Time*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang86" placeholder="Estimated Shipping Time" required="" value="{{ $langg->lang86 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang87" placeholder="Price" required="" value="{{ $langg->lang87 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang88" placeholder="Size" required="" value="{{ $langg->lang88 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang89" placeholder="Color" required="" value="{{ $langg->lang89 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add to Cart*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang90" placeholder="Add to Cart" required="" value="{{ $langg->lang90 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">SHARE*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang91" placeholder="SHARE" required="" value="{{ $langg->lang91 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">DESCRIPTION*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang92" placeholder="DESCRIPTION" required="" value="{{ $langg->lang92 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">BUY & RETURN POLICY*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang93" placeholder="BUY & RETURN POLICY" required="" value="{{ $langg->lang93 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Reviews*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang94" placeholder="Reviews" required="" value="{{ $langg->lang94 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Comment*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang95" placeholder="Comment" required="" value="{{ $langg->lang95 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ratings & Reviews*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang96" placeholder="Ratings & Reviews" required="" value="{{ $langg->lang96 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No Review Found.*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang97" placeholder="No Review Found." required="" value="{{ $langg->lang97 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Review*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang98" placeholder="Review" required="" value="{{ $langg->lang98 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Review*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang99" placeholder="Your Review" required="" value="{{ $langg->lang99 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">SUBMIT*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang100" placeholder="SUBMIT" required="" value="{{ $langg->lang100 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Login*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang101" placeholder="Login" required="" value="{{ $langg->lang101 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">To Review*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang102" placeholder="To Review" required="" value="{{ $langg->lang102 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">To Comment*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang103" placeholder="To Comment" required="" value="{{ $langg->lang103 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Write Comment*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang104" placeholder="Write Comment" required="" value="{{ $langg->lang104 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Write Your Comments Here...*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang105" placeholder="Write Your Comments Here..." required="" value="{{ $langg->lang105 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Post Comment*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang106" placeholder="Post Comment" required="" value="{{ $langg->lang106 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Reply*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang107" placeholder="Reply" required="" value="{{ $langg->lang107 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang108" placeholder="View" required="" value="{{ $langg->lang108 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Reply*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang109" placeholder="Reply" required="" value="{{ $langg->lang109 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Replies*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang110" placeholder="Replies" required="" value="{{ $langg->lang110 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang111" placeholder="Edit" required="" value="{{ $langg->lang111 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang112" placeholder="Delete" required="" value="{{ $langg->lang112 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Your Comment*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang113" placeholder="Edit Your Comment" required="" value="{{ $langg->lang113 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Submit*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang114" placeholder="Submit" required="" value="{{ $langg->lang114 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang115" placeholder="Cancel" required="" value="{{ $langg->lang115 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Your Reply*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang116" placeholder="Edit Your Reply" required="" value="{{ $langg->lang116 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Write your reply*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang117" placeholder="Write your reply" required="" value="{{ $langg->lang117 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang118" placeholder="Send Message" required="" value="{{ $langg->lang118 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang119" placeholder="Subject *" required="" value="{{ $langg->lang119 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang120" placeholder="Your Message " required="" value="{{ $langg->lang120 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Quick View *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang199" placeholder="Product Quick View" required="" value="{{ $langg->lang199 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Related Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang216" placeholder="Related Products" required="" value="{{ $langg->lang216 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Seller's Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang245" placeholder="Seller's Products" required="" value="{{ $langg->lang245 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sold By *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang246" placeholder="Sold By" required="" value="{{ $langg->lang246 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No Vendor Found *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang247" placeholder="No Vendor Found" required="" value="{{ $langg->lang247 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Item *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang248" placeholder="Total Item" required="" value="{{ $langg->lang248 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Visit Store *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang249" placeholder="Visit Store" required="" value="{{ $langg->lang249 }}">
                          </div>
                        </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Wholesell *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang770" placeholder="Wholesell" required=""
                            value="{{ $langg->lang770 }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Quantity *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang768" placeholder="Quantity" required=""
                            value="{{ $langg->lang768 }}">
                        </div>
                      </div>

                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                <h4 class="heading">Discount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" name="lang769" placeholder="Discount" required=""
                                value="{{ $langg->lang769 }}">
                            </div>
                          </div>
    

    
                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                <h4 class="heading">Off *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" name="lang771" placeholder="Off" required=""
                                value="{{ $langg->lang771 }}">
                            </div>
                          </div>



                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Report This Item *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang776" placeholder="Report This Item" required=""
                            value="{{ $langg->lang776 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">REPORT PRODUCT *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang777" placeholder="REPORT PRODUCT" required=""
                            value="{{ $langg->lang777 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Please give the following details *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang778" placeholder="Please give the following details" required="" value="{{ $langg->lang778 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Enter Report Title *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang779" placeholder="Enter Report Title" required=""
                            value="{{ $langg->lang779 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Enter Report Note *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang780" placeholder="Enter Report Note" required=""
                            value="{{ $langg->lang780 }}">
                        </div>
                      </div>



                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Verified *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang783" placeholder="Verified" required="" value="{{ $langg->lang783 }}">
                        </div>
                      </div>


                      <hr>
                        
                        <h4 class="text-center">CART</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cart *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang121" placeholder="Cart " required="" value="{{ $langg->lang121 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang122" placeholder="Product Name " required="" value="{{ $langg->lang122 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size & Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang123" placeholder="Size & Color" required="" value="{{ $langg->lang123 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang124" placeholder="Quantity " required="" value="{{ $langg->lang124 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Unit Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang125" placeholder="Unit Price " required="" value="{{ $langg->lang125 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sub Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang126" placeholder="Sub Total " required="" value="{{ $langg->lang126 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">PRICE DETAILS *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang127" placeholder="PRICE DETAILS " required="" value="{{ $langg->lang127 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total MRP *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang128" placeholder="Total MRP " required="" value="{{ $langg->lang128 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Discount*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang129" placeholder="Discount" required="" value="{{ $langg->lang129 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tax*</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang130" placeholder="Your Message " required="" value="{{ $langg->lang130 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang131" placeholder="Total " required="" value="{{ $langg->lang131 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Have a promotion code? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang132" placeholder="Have a promotion code?" required="" value="{{ $langg->lang132 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Coupon Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang133" placeholder="Coupon Code" required="" value="{{ $langg->lang133 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Apply *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang134" placeholder="Apply" required="" value="{{ $langg->lang134 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Place Order *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang135" placeholder="Place Order" required="" value="{{ $langg->lang135 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">CHECKOUT</h4>

                      <hr>

                       <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Checkout *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang136" placeholder="Checkout" required="" value="{{ $langg->lang136 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang137" placeholder="Product Name" required="" value="{{ $langg->lang137 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang138" placeholder="Size" required="" value="{{ $langg->lang138 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang139" placeholder="Color" required="" value="{{ $langg->lang139 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang140" placeholder="Quantity" required="" value="{{ $langg->lang140 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Unit Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang141" placeholder="Unit Price" required="" value="{{ $langg->lang141 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sub Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang142" placeholder="Sub Total" required="" value="{{ $langg->lang142 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang143" placeholder="Shipping Cost" required="" value="{{ $langg->lang143 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tax *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang144" placeholder="Tax" required="" value="{{ $langg->lang144 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Discount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang145" placeholder="Discount" required="" value="{{ $langg->lang145 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang146" placeholder="Total" required="" value="{{ $langg->lang146 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Billing Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang147" placeholder="Billing Details" required="" value="{{ $langg->lang147 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang148" placeholder="Shipping Details" required="" value="{{ $langg->lang148 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ship To Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang149" placeholder="Ship To Address" required="" value="{{ $langg->lang149 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pick Up *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang150" placeholder="Pick Up" required="" value="{{ $langg->lang150 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pickup Location *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang151" placeholder="Pickup Location" required="" value="{{ $langg->lang151 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Full Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang152" placeholder="Full Name" required="" value="{{ $langg->lang152 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang153" placeholder="Phone Number" required="" value="{{ $langg->lang153 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang154" placeholder="Email" required="" value="{{ $langg->lang154 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang155" placeholder="Address" required="" value="{{ $langg->lang155 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Country *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang156" placeholder="Country" required="" value="{{ $langg->lang156 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Country *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang157" placeholder="Select Country" required="" value="{{ $langg->lang157 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">City *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang158" placeholder="City" required="" value="{{ $langg->lang158 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Postal Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang159" placeholder="Postal Code" required="" value="{{ $langg->lang159 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ship to a Different Address? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang160" placeholder="Ship to a Different Address?" required="" value="{{ $langg->lang160 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payment Information *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang161" placeholder="Payment Information" required="" value="{{ $langg->lang161 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Note *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang217" placeholder="Order Note" required="" value="{{ $langg->lang217 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Optional *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang218" placeholder="Optional" required="" value="{{ $langg->lang218 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang162" placeholder="Order Now" required="" value="{{ $langg->lang162 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Card Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang163" placeholder="Card Number" required="" value="{{ $langg->lang163 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cvv *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang164" placeholder="Cvv" required="" value="{{ $langg->lang164 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Month *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang165" placeholder="Month" required="" value="{{ $langg->lang165 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Year e.g. 19 *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang166" placeholder="Year e.g. 19" required=""
                              value="{{ $langg->lang166 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Card Code *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang807" placeholder="Card Code" required=""
                              value="{{ $langg->lang807 }}">
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Year e.g. 2038 *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang808" placeholder="Year e.g. 2038" required=""
                              value="{{ $langg->lang808 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Transaction ID# *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang167" placeholder="Transaction ID#" required="" value="{{ $langg->lang167 }}">
                          </div>
                        </div>



                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Address *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang743" placeholder="Address" required="" value="{{ $langg->lang743 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Orders *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang744" placeholder="Orders" required="" value="{{ $langg->lang744 }}">
                                                    </div>
                                                  </div>
                                                  
                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Payment *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang745" placeholder="Payment" required="" value="{{ $langg->lang745 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Personal Information *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang746" placeholder="Personal Information" required="" value="{{ $langg->lang746 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Enter Your Name *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang747" placeholder="Enter Your Name" required="" value="{{ $langg->lang747 }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Enter Your Email *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang748" placeholder="Enter Your Email" required="" value="{{ $langg->lang748 }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Create an account ? *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang749" placeholder="Create an account ?" required="" value="{{ $langg->lang749 }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Enter Your Password *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang750" placeholder="Enter Your Password" required="" value="{{ $langg->lang750 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Confirm Your Password *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang751" placeholder="Confirm Your Password" required="" value="{{ $langg->lang751 }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Shipping Details *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang752" placeholder="Shipping Details" required="" value="{{ $langg->lang752 }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Continue *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang753" placeholder="Continue" required="" value="{{ $langg->lang753 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Price *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang754" placeholder="Price" required="" value="{{ $langg->lang754 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Quantity *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang755" placeholder="Quantity" required="" value="{{ $langg->lang755 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Total Price *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang756" placeholder="Total Price" required="" value="{{ $langg->lang756 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Back *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang757" placeholder="Back" required="" value="{{ $langg->lang757 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Shipping Info *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang758" placeholder="Shipping Info" required="" value="{{ $langg->lang758 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Payment Info *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang759" placeholder="Payment Info" required="" value="{{ $langg->lang759 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">PayPal Express *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang760" placeholder="PayPal Express" required="" value="{{ $langg->lang760 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Credit Card *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang761" placeholder="Credit Card" required="" value="{{ $langg->lang761 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Cash On Delivery *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang762" placeholder="Cash On Delivery" required="" value="{{ $langg->lang762 }}">
                                                    </div>
                                                  </div>



                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Instamojo *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang763" placeholder="Instamojo" required="" value="{{ $langg->lang763 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Paytm *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="paytm" placeholder="Paytm" required="" value="{{ $langg->paytm }}">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                        <h4 class="heading">Razorpay *</h4>
                                                        <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="razorpay" placeholder="Razorpay" required=""
                                                        value="{{ $langg->razorpay }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Paystack *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang764" placeholder="Paystack" required="" value="{{ $langg->lang764 }}">
                                                    </div>
                                                  </div>


                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Mollie Payment *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang802" placeholder="Mollie Payment" required="" value="{{ $langg->lang802 }}">
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Authorize.Net *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang809" placeholder="Authorize.Net" required="" value="{{ $langg->lang809 }}">
                                                  </div>
                                                </div>

                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">MercadoPago *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang810" placeholder="MercadoPago" required="" value="{{ $langg->lang810 }}">
                                                  </div>
                                                </div>


                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Flutter Wave *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang811" placeholder="Flutter Wave" required="" value="{{ $langg->lang811 }}">
                                                  </div>
                                                </div>


                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">2Checkout *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang812" placeholder="2Checkout" required="" value="{{ $langg->lang812 }}">
                                                  </div>
                                                </div>
                              
                              
                                                    <div class="row">
                                                      <div class="col-lg-4">
                                                        <div class="left-area">
                                                          <h4 class="heading">SSLCommerz *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                        </div>
                                                      </div>
                                                      <div class="col-lg-7">
                                                        <input type="text" class="input-field" name="lang813" placeholder="SSLCommerz" required="" value="{{ $langg->lang813 }}">
                                                      </div>
                                                    </div>
                              

                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Voguepay *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang814" placeholder="Voguepay" required="" value="{{ $langg->lang814 }}">
                                                  </div>
                                                </div>


                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Wallet Amount: *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang815" placeholder="Wallet Amount:" required="" value="{{ $langg->lang815 }}">
                                                  </div>
                                                </div>
                          
                          
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Pay From Your Wallet *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang816" placeholder="Pay From Your Wallet" required="" value="{{ $langg->lang816 }}">
                                                  </div>
                                                </div>
                          
                          
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">Enter Your Amount *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang817" placeholder="Enter Your Amount" required="" value="{{ $langg->lang817 }}">
                                                  </div>
                                                </div>
                          
                          
                                                <div class="row">
                                                  <div class="col-lg-4">
                                                    <div class="left-area">
                                                      <h4 class="heading">SUBMIT *</h4>
                                                      <p class="sub-heading">(In Any Language)</p>
                                                    </div>
                                                  </div>
                                                  <div class="col-lg-7">
                                                    <input type="text" class="input-field" name="lang818" placeholder="SUBMIT" required="" value="{{ $langg->lang818 }}">
                                                  </div>
                                                </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Shipping Method *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang765" placeholder="Shipping Method" required="" value="{{ $langg->lang765 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Packaging *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang766" placeholder="Packaging" required="" value="{{ $langg->lang766 }}">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Final Price *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" name="lang767" placeholder="Final Price" required="" value="{{ $langg->lang767 }}">
                                                    </div>
                                                  </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Card number not valid *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang781" placeholder="Card number not valid" required=""
                            value="{{ $langg->lang781 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">CVC number not valid *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang782" placeholder="CVC number not valid" required=""
                            value="{{ $langg->lang782 }}">
                        </div>
                      </div>



                      <hr>
                        
                        <h4 class="text-center">Wishlists</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Wishlists *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang168" placeholder="Wishlists" required="" value="{{ $langg->lang168 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Success</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Success *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang169" placeholder="Success" required="" value="{{ $langg->lang169 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Get Back To Our Homepage *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang170" placeholder="Get Back To Our Homepage" required="" value="{{ $langg->lang170 }}">
                          </div>
                        </div>


                     <hr>
                        
                        <h4 class="text-center">LOGIN</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Login & Register *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang171" placeholder="Login & Register" required="" value="{{ $langg->lang171 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">LOGIN NOW *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang172" placeholder="LOGIN NOW" required="" value="{{ $langg->lang172 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Type Email Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang173" placeholder="Type Email Address" required="" value="{{ $langg->lang173 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Get Back To Our Homepage *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang174" placeholder="Type Password" required="" value="{{ $langg->lang174 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Remember Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang175" placeholder="Remember Password" required="" value="{{ $langg->lang175 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Forgot Password? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang176" placeholder="Forgot Password?" required="" value="{{ $langg->lang176 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Authenticating... *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang177" placeholder="Authenticating..." required="" value="{{ $langg->lang177 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Login *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang178" placeholder="Login" required="" value="{{ $langg->lang178 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Vendor Login *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang234" placeholder="Vendor Login" required="" value="{{ $langg->lang234 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Or *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang179" placeholder="Or" required="" value="{{ $langg->lang179 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sign In with social media *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang180" placeholder="Sign In with social media" required="" value="{{ $langg->lang180 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Signup Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang181" placeholder="Signup Now" required="" value="{{ $langg->lang181 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Full Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang182" placeholder="Full Name" required="" value="{{ $langg->lang182 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang183" placeholder="Email Address" required="" value="{{ $langg->lang183 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang184" placeholder="Phone Number" required="" value="{{ $langg->lang184 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang185" placeholder="Address" required="" value="{{ $langg->lang185 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang186" placeholder="Password" required="" value="{{ $langg->lang186 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang187" placeholder="Confirm Password" required="" value="{{ $langg->lang187 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Processing... *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang188" placeholder="Get Back To Our Homepage" required="" value="{{ $langg->lang188 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Register *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang189" placeholder="Register" required="" value="{{ $langg->lang189 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Vendor Registration *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang235" placeholder="Vendor Registration" required="" value="{{ $langg->lang235 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Login (Pop Up) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang197" placeholder="Login" required="" value="{{ $langg->lang197 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Register (Pop Up) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang198" placeholder="Register" required="" value="{{ $langg->lang198 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">FORGOT</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Forgot Password (Header) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang190" placeholder="Forgot Password (Header)" required="" value="{{ $langg->lang190 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Forgot Password (Title) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang191" placeholder=">Forgot Password (Title)" required="" value="{{ $langg->lang191 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Please Write your Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang192" placeholder="Please Write your Email" required="" value="{{ $langg->lang192 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang193" placeholder="Email Address" required="" value="{{ $langg->lang193 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Login Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang194" placeholder="Login Now" required="" value="{{ $langg->lang194 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Checking... *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang195" placeholder="Checking..." required="" value="{{ $langg->lang195 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">SUBMIT *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang196" placeholder="SUBMIT" required="" value="{{ $langg->lang196 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">VENDOR STORE</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Store Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang226" placeholder="Store Name" required="" value="{{ $langg->lang226 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Service Center *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang227" placeholder="Service Center" required="" value="{{ $langg->lang227 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Contact Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang228" placeholder="Contact Now" required="" value="{{ $langg->lang228 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Follow Us *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang229" placeholder="Follow Us" required="" value="{{ $langg->lang229 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang238" placeholder="Shop Name" required="" value="{{ $langg->lang238 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Owner Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang239" placeholder="Owner Name" required="" value="{{ $langg->lang239 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang240" placeholder="Shop Number" required="" value="{{ $langg->lang240 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang241" placeholder="Shop Address" required="" value="{{ $langg->lang241 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Registration Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang242" placeholder="Registration Number" required="" value="{{ $langg->lang242 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang243" placeholder="Message" required="" value="{{ $langg->lang243 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">FOOTER</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Footer Links *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang21" placeholder="Footer Links" required="" value="{{ $langg->lang21 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Home *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang22" placeholder="Home" required="" value="{{ $langg->lang22 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Contact Us *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang23" placeholder="Contact Us" required="" value="{{ $langg->lang23 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Recent Post *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang24" placeholder="Recent Post" required="" value="{{ $langg->lang24 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">SUCCESS MESSAGES</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Cart Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Add To Cart Message" name="add_cart" value="{{ $langg->add_cart }}" required="">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Already Added To Cart Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Already Added To Cart Message" name="already_cart" value="{{ $langg->already_cart }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Out Of Stock Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Out Of Stock Message" name="out_stock" value="{{ $langg->out_stock }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Wishlist Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Add To Wishlist Message" name="add_wish" value="{{ $langg->add_wish }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Already Added To Wishlist Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Already Added To Wishlist Message" name="already_wish" value="{{ $langg->already_wish }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Wishlist Remove Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Wishlist Remove Message" name="wish_remove" value="{{ $langg->wish_remove }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add To Compare Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Add To Compare Message" name="add_compare" value="{{ $langg->add_compare }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Already Added To Compare Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Already Added To Compare Message" name="already_compare" value="{{ $langg->already_compare }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Compare Remove Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Compare Remove Message" name="compare_remove" value="{{ $langg->compare_remove }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color Change Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Color Change Message" name="color_change" value="{{ $langg->color_change }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Coupon Found Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Coupon Found Message" name="coupon_found" value="{{ $langg->coupon_found }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No Coupon Found Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="No Coupon Found Message" name="no_coupon" value="{{ $langg->no_coupon }}" required="">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Coupon Already Applied Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Coupon Already Applied Message" name="already_coupon" value="{{ $langg->already_coupon }}" required="">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Not Found Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Email Not Found" name="email_not_found" value="{{ $langg->email_not_found }}" required="">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Oops Something Goes Wrong Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Oops Something Goes Wrong !!" name="something_wrong" value="{{ $langg->something_wrong }}" required="">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message Sent Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" placeholder="Message Sent !!" name="message_sent" value="{{ $langg->message_sent }}" required="">
                          </div>
                        </div>


                          <div class="row">
                              <div class="col-lg-4">
                                <div class="left-area">
                                  <h4 class="heading">Order Success Title *</h4>
                                  <p class="sub-heading">(In Any Language)</p>
                                </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="tawk-area">
                                    <textarea  name="order_title" required="">{{ $langg->order_title }}</textarea>
                                  </div>
                              </div>
                            </div>


                          <div class="row">
                              <div class="col-lg-4">
                                <div class="left-area">
                                  <h4 class="heading">Order Success Text *</h4>
                                  <p class="sub-heading">(In Any Language)</p>
                                </div>
                              </div>
                              <div class="col-lg-7">
                                  <div class="tawk-area">
                                    <textarea  name="order_text" required="">{{ $langg->order_text }}</textarea>
                                  </div>
                              </div>
                            </div>




                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                <h4 class="heading">Subscribe Success Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" placeholder="Subscribe Success Message" name="subscribe_success" value="{{ $langg->subscribe_success }}" required="">
                            </div>
                          </div>


                          <div class="row">
                            <div class="col-lg-4">
                              <div class="left-area">
                                <h4 class="heading">Subscribe Error Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                              </div>
                            </div>
                            <div class="col-lg-7">
                              <input type="text" class="input-field" placeholder="Subscribe Error Message" name="subscribe_error" value="{{ $langg->subscribe_error }}" required="">
                            </div>
                          </div>


                                                <hr>
                                                  
                                                  <h4 class="text-center">Subscription Popup</h4>

                                                <hr>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Enter Your Email Address *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" placeholder="Enter Your Email Address" name="lang741" value="{{ $langg->lang741 }}" required="">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">SUBSCRIBE *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" placeholder="SUBSCRIBE" name="lang742" value="{{ $langg->lang742 }}" required="">
                                                    </div>
                                                  </div>



                                                <hr>
                                                  
                                                  <h4 class="text-center">ERROR PAGE</h4>

                                                <hr>



                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">404 *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" placeholder="404" name="lang427" value="{{ $langg->lang427 }}" required="">
                                                    </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Oops! You're lost... *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" placeholder="Oops! You're lost..." name="lang428" value="{{ $langg->lang428 }}" required="">
                                                    </div>
                                                  </div>


                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">The page you are looking for might have been moved, renamed, or might never existed. *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                        <div class="col-lg-7">
                                                            <div class="tawk-area">
                                                              <textarea  name="lang429" required="">{{ $langg->lang429 }}</textarea>
                                                            </div>
                                                        </div>
                                                  </div>

                                                  <div class="row">
                                                    <div class="col-lg-4">
                                                      <div class="left-area">
                                                          <h4 class="heading">Back Home *</h4>
                                                          <p class="sub-heading">(In Any Language)</p>
                                                      </div>
                                                    </div>
                                                    <div class="col-lg-7">
                                                      <input type="text" class="input-field" placeholder="Back Home" name="lang430" value="{{ $langg->lang430 }}" required="">
                                                    </div>
                                                  </div>



                              </div>


 {{-- FRONTEND ENDS --}}


 {{-- USER PANEL STARTS --}}

                              <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">


                      <hr>
                        
                        <h4 class="text-center">USER DASHBOARD</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Dashboard *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang200" placeholder="Dashboard" required="" value="{{ $langg->lang200 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Vendor Panel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang230" placeholder="Vendor Panel" required="" value="{{ $langg->lang230 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Purchased Items *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang201" placeholder="Purchased Items" required="" value="{{ $langg->lang201 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang202" placeholder="Affiliate Code" required="" value="{{ $langg->lang202 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang203" placeholder="Withdraw" required="" value="{{ $langg->lang203 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Favorite Sellers *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang231" placeholder="Favorite Sellers" required="" value="{{ $langg->lang231 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Messages *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang232" placeholder="Messages" required="" value="{{ $langg->lang232 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tickets *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang204" placeholder="Tickets" required="" value="{{ $langg->lang204 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Disputes *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang250" placeholder="Disputes" required="" value="{{ $langg->lang250 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Profile *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang205" placeholder="Edit Profile" required="" value="{{ $langg->lang205 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Reset Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang206" placeholder="Reset Password" required="" value="{{ $langg->lang206 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Logout *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang207" placeholder="Logout" required="" value="{{ $langg->lang207 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Start Selling *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang233" placeholder="Start Selling" required="" value="{{ $langg->lang233 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pricing Plans *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang237" placeholder="Pricing Plans" required="" value="{{ $langg->lang237 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Account Information *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang208" placeholder="Account Information" required="" value="{{ $langg->lang208 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang209" placeholder="Email" required="" value="{{ $langg->lang209 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang210" placeholder="Phone" required="" value="{{ $langg->lang210 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Fax *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang211" placeholder="Fax" required="" value="{{ $langg->lang211 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">City *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang212" placeholder="City" required="" value="{{ $langg->lang212 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Zip *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang213" placeholder="Zip" required="" value="{{ $langg->lang213 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang214" placeholder="Address" required="" value="{{ $langg->lang214 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Bonus *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang215" placeholder="Affiliate Bonus" required="" value="{{ $langg->lang215 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">My Wallet *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang833" placeholder="My Wallet"
                              required="" value="{{ $langg->lang833 }}">
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Wallet Balance: *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang834" placeholder="Wallet Balance:"
                              required="" value="{{ $langg->lang834 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Add Deposit *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang835" placeholder="Add Deposit"
                              required="" value="{{ $langg->lang835 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Recent Orders *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang836" placeholder="Recent Orders"
                              required="" value="{{ $langg->lang836 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Total Orders *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang837" placeholder="Total Orders"
                              required="" value="{{ $langg->lang837 }}"">
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Pending Orders *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang838" placeholder="Pending Orders"
                              required="" value="{{ $langg->lang838 }}"">
                          </div>
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">All Time *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang839" placeholder="All Time"
                              required="" value="{{ $langg->lang839 }}"">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Transaction ID *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang840" placeholder="Transaction ID"
                              required="" value="{{ $langg->lang840 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">View Details *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang841" placeholder="View Details"
                              required="" value="{{ $langg->lang841 }}"">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">PURCHASED ITEMS</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Purchased Items *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang277" placeholder="Purchased Items" required="" value="{{ $langg->lang277 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">#Order *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang278" placeholder="#Order" required="" value="{{ $langg->lang278 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang279" placeholder="Date" required="" value="{{ $langg->lang279 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang280" placeholder="Order Total" required="" value="{{ $langg->lang280 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang281" placeholder="Order Status" required="" value="{{ $langg->lang281 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang282" placeholder="View" required="" value="{{ $langg->lang282 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">VIEW ORDER *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang283" placeholder="VIEW ORDER" required="" value="{{ $langg->lang283 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">My Order Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang284" placeholder="My Order Details" required="" value="{{ $langg->lang284 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order# *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang285" placeholder="Order#" required="" value="{{ $langg->lang285 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">print order *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang286" placeholder="print order" required="" value="{{ $langg->lang286 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang301" placeholder="Order Date" required="" value="{{ $langg->lang301 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Billing Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang287" placeholder="Billing Address" required="" value="{{ $langg->lang287 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Name: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang288" placeholder="Name:" required="" value="{{ $langg->lang288 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang289" placeholder="Email:" required="" value="{{ $langg->lang289 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang290" placeholder="Phone:" required="" value="{{ $langg->lang290 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang291" placeholder="Address:" required="" value="{{ $langg->lang291 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payment Information *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang292" placeholder="Payment Information" required="" value="{{ $langg->lang292 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Paid Amount: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang293" placeholder="Paid Amount:" required="" value="{{ $langg->lang293 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payment Method: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang294" placeholder="Payment Method:" required="" value="{{ $langg->lang294 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Charge ID: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang295" placeholder="Charge ID:" required="" value="{{ $langg->lang295 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Transaction ID: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang296" placeholder="Transaction ID:" required="" value="{{ $langg->lang296 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Transaction ID *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang297" placeholder="Edit Transaction ID" required="" value="{{ $langg->lang297 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang298" placeholder="Cancel" required="" value="{{ $langg->lang298 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Transaction ID & Press Enter *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang299" placeholder="Enter Transaction ID & Press Enter" required="" value="{{ $langg->lang299 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Submit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang300" placeholder="Submit" required="" value="{{ $langg->lang300 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang302" placeholder="Shipping Address" required="" value="{{ $langg->lang302 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">PickUp Location *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang303" placeholder="PickUp Location" required="" value="{{ $langg->lang303 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang304" placeholder="Address:" required="" value="{{ $langg->lang304 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang305" placeholder="Shipping Method" required="" value="{{ $langg->lang305 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ship To Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang306" placeholder="Ship To Address" required="" value="{{ $langg->lang306 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pick Up *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang307" placeholder="Pick Up" required="" value="{{ $langg->lang307 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ordered Products: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang308" placeholder="Ordered Products:" required="" value="{{ $langg->lang308 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">ID# *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang309" placeholder="ID#" required="" value="{{ $langg->lang309 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang310" placeholder="Name" required="" value="{{ $langg->lang310 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang311" placeholder="Quantity" required="" value="{{ $langg->lang311 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang312" placeholder="Size" required="" value="{{ $langg->lang312 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang313" placeholder="Color" required="" value="{{ $langg->lang313 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang314" placeholder="Price" required="" value="{{ $langg->lang314 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang315" placeholder="Total" required="" value="{{ $langg->lang315 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Download *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang316" placeholder="Download" required="" value="{{ $langg->lang316 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View License *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang317" placeholder="View License" required="" value="{{ $langg->lang317 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang318" placeholder="Back" required="" value="{{ $langg->lang318 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Key *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang319" placeholder="License Key" required="" value="{{ $langg->lang319 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">The Licenes Key is : *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang320" placeholder="The Licenes Key is :" required="" value="{{ $langg->lang320 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Close *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang321" placeholder="Close" required="" value="{{ $langg->lang321 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Affiliate Code</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Informations *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang322" placeholder="Affiliate Informations" required="" value="{{ $langg->lang322 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Affilate Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang323" placeholder="Your Affilate Link *" required="" value="{{ $langg->lang323 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">This is your affilate link just copy the link and paste anywhere you want. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang324" placeholder="This is your affilate link just copy the link and paste anywhere you want." required="" value="{{ $langg->lang324 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Banner *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang325" placeholder="Affiliate Banner *" required="" value="{{ $langg->lang325 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">This is your affilate banner Preview. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang326" placeholder="This is your affilate banner Preview." required="" value="{{ $langg->lang326 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Banner HTML Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang327" placeholder="Affiliate Banner HTML Code *" required="" value="{{ $langg->lang327 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">This is your affilate banner html code just copy the code and paste anywhere you want. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang328" placeholder="This is your affilate banner html code just copy the code and paste anywhere you want." required="" value="{{ $langg->lang328 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">WITHDRAW</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">My Withdraws *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang329" placeholder="My Withdraws" required="" value="{{ $langg->lang329 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang330" placeholder="Withdraw Now" required="" value="{{ $langg->lang330 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang331" placeholder="Withdraw Date" required="" value="{{ $langg->lang331 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang332" placeholder="Method" required="" value="{{ $langg->lang332 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Account *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang333" placeholder="Account" required="" value="{{ $langg->lang333 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Amount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang334" placeholder="Amount" required="" value="{{ $langg->lang334 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang335" placeholder="Status" required="" value="{{ $langg->lang335 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">WITHDRAW NOW</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang336" placeholder="Withdraw Now" required="" value="{{ $langg->lang336 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang337" placeholder="Back" required="" value="{{ $langg->lang337 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang338" placeholder="Withdraw Method" required="" value="{{ $langg->lang338 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Withdraw Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang339" placeholder="Select Withdraw Method" required="" value="{{ $langg->lang339 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Paypal *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang340" placeholder="Paypal" required="" value="{{ $langg->lang340 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Skrill *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang341" placeholder="Skrill" required="" value="{{ $langg->lang341 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payoneer *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang342" placeholder="Payoneer" required="" value="{{ $langg->lang342 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Bank *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang343" placeholder="Bank" required="" value="{{ $langg->lang343 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Amount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang344" placeholder="Withdraw Amount" required="" value="{{ $langg->lang344 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Account Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang345" placeholder="Enter Account Email" required="" value="{{ $langg->lang345 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter IBAN/Account No *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang346" placeholder="Enter IBAN/Account No" required="" value="{{ $langg->lang346 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Account Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang347" placeholder="Enter Account Name" required="" value="{{ $langg->lang347 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang348" placeholder="Enter Address" required="" value="{{ $langg->lang348 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Swift Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang349" placeholder="Enter Swift Code" required="" value="{{ $langg->lang349 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Additional Reference(Optional) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang350" placeholder="Additional Reference(Optional)" required="" value="{{ $langg->lang350 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Fee *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang351" placeholder="Withdraw Fee" required="" value="{{ $langg->lang351 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">and *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang352" placeholder="and" required="" value="{{ $langg->lang352 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">will deduct from your account. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang353" placeholder="will deduct from your account." required="" value="{{ $langg->lang353 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang354" placeholder="Withdraw" required="" value="{{ $langg->lang354 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Balance *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang355" placeholder="Current Balance" required="" value="{{ $langg->lang355 }}">
                          </div>
                        </div>

                      <hr>

                      <h4 class="text-center">ORDER TRACKING</h4>

                      <hr>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Order Tracking *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang772" placeholder="Order Tracking"
                            required="" value="{{ $langg->lang772 }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Get Tracking Code *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang773" placeholder="Get Tracking Code"
                            required="" value="{{ $langg->lang773 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">View Tracking *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang774" placeholder="View Tracking"
                            required="" value="{{ $langg->lang774 }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">No Order Found *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang775" placeholder="No Order Found."
                            required="" value="{{ $langg->lang775 }}">
                        </div>
                      </div>


                      <hr>
                        
                        <h4 class="text-center">FAVORITE SELLERS</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Favorite Sellers *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang252" placeholder="Favorite Sellers" required="" value="{{ $langg->lang252 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang253" placeholder="Shop Name" required="" value="{{ $langg->lang253 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Owner Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang254" placeholder="Owner Name" required="" value="{{ $langg->lang254 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang255" placeholder="Address" required="" value="{{ $langg->lang255 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Actions *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang256" placeholder="Actions" required="" value="{{ $langg->lang256 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang257" placeholder="Confirm Delete" required="" value="{{ $langg->lang257 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Seller. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang258" placeholder="You are about to delete this Seller." required="" value="{{ $langg->lang258 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang259" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang259 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang260" placeholder="Cancel" required="" value="{{ $langg->lang260 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang261" placeholder="Delete" required="" value="{{ $langg->lang261 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">Messages</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Messages *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang356" placeholder="Messages" required="" value="{{ $langg->lang356 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Compose Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang357" placeholder="Compose Message" required="" value="{{ $langg->lang357 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang358" placeholder="Name" required="" value="{{ $langg->lang358 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang359" placeholder="Message" required="" value="{{ $langg->lang359 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sent *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang360" placeholder="Sent" required="" value="{{ $langg->lang360 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Action *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang361" placeholder="Action" required="" value="{{ $langg->lang361 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang362" placeholder="Send Message" required="" value="{{ $langg->lang362 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang363" placeholder="Email" required="" value="{{ $langg->lang363 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang364" placeholder="Subject" required="" value="{{ $langg->lang364 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang365" placeholder="Your Message" required="" value="{{ $langg->lang365 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang366" placeholder="Send Message" required="" value="{{ $langg->lang366 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang367" placeholder="Confirm Delete" required="" value="{{ $langg->lang367 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Conversation. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang368" placeholder="You are about to delete this Conversation." required="" value="{{ $langg->lang368 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang369" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang369 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang370" placeholder="Cancel" required="" value="{{ $langg->lang370 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang371" placeholder="Delete" required="" value="{{ $langg->lang371 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Conversation with *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang372" placeholder="Conversation with" required="" value="{{ $langg->lang372 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang373" placeholder="Back" required="" value="{{ $langg->lang373 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang374" placeholder="Message" required="" value="{{ $langg->lang374 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Reply *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang375" placeholder="Add Reply" required="" value="{{ $langg->lang375 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Tickets And Disputes</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tickets *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang376" placeholder="Tickets" required="" value="{{ $langg->lang376 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Ticket *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang377" placeholder="Add Ticket" required="" value="{{ $langg->lang377 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Disputes *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang378" placeholder="Disputes" required="" value="{{ $langg->lang378 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Dispute *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang379" placeholder="Add Dispute" required="" value="{{ $langg->lang379 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang380" placeholder="Subject" required="" value="{{ $langg->lang380 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang381" placeholder="Message" required="" value="{{ $langg->lang381 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Time *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang382" placeholder="Time" required="" value="{{ $langg->lang382 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Action *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang383" placeholder="Action" required="" value="{{ $langg->lang383 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Ticket (In Modal) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang384" placeholder="Add Ticket" required="" value="{{ $langg->lang384 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Dispute (In Modal) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang385" placeholder="Add Dispute" required="" value="{{ $langg->lang385 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang386" placeholder="Order Number" required="" value="{{ $langg->lang386 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang387" placeholder="Subject" required="" value="{{ $langg->lang387 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang388" placeholder="Your Message" required="" value="{{ $langg->lang388 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang389" placeholder="Send" required="" value="{{ $langg->lang389 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang390" placeholder="Confirm Delete" required="" value="{{ $langg->lang390 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Ticket. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang391" placeholder="You are about to delete this Ticket." required="" value="{{ $langg->lang391 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Dispute. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang392" placeholder="You are about to delete this Dispute." required="" value="{{ $langg->lang392 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang393" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang393 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang394" placeholder="Cancel" required="" value="{{ $langg->lang394 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang395" placeholder="Delete" required="" value="{{ $langg->lang395 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Number: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang396" placeholder="Order Number:" required="" value="{{ $langg->lang396 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang397" placeholder="Subject:" required="" value="{{ $langg->lang397 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang398" placeholder="Back" required="" value="{{ $langg->lang398 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Admin *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang399" placeholder="Admin" required="" value="{{ $langg->lang399 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang400" placeholder="Message" required="" value="{{ $langg->lang400 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Reply *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang401" placeholder="Add Reply" required="" value="{{ $langg->lang401 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">EDIT PROFILE</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Profile *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang262" placeholder="Edit Profile" required="" value="{{ $langg->lang262 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang263" placeholder="Upload" required="" value="{{ $langg->lang263 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">User Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang264" placeholder="User Name" required="" value="{{ $langg->lang264 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang265" placeholder="Email Address" required="" value="{{ $langg->lang265 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang266" placeholder="Phone Number" required="" value="{{ $langg->lang266 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Fax *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang267" placeholder="Fax" required="" value="{{ $langg->lang267 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">City *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang268" placeholder="City" required="" value="{{ $langg->lang268 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Zip *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang269" placeholder="Zip" required="" value="{{ $langg->lang269 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang270" placeholder="Address" required="" value="{{ $langg->lang270 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang271" placeholder="Save" required="" value="{{ $langg->lang271 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">RESET PASSWORD</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Reset Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang272" placeholder="Reset Password" required="" value="{{ $langg->lang272 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang273" placeholder="Current Password" required="" value="{{ $langg->lang273 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">New Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang274" placeholder="New Password" required="" value="{{ $langg->lang274 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Re-Type New Password *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang275" placeholder="Re-Type New Password" required="" value="{{ $langg->lang275 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Submit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang276" placeholder="Submit" required="" value="{{ $langg->lang276 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">Subscription Plans</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Free *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang402" placeholder="Free" required="" value="{{ $langg->lang402 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Day(s) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang403" placeholder="Day(s)" required="" value="{{ $langg->lang403 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Plan *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang404" placeholder="Current Plan" required="" value="{{ $langg->lang404 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Expired on: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang405" placeholder="Expired on:" required="" value="{{ $langg->lang405 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ends on: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang406" placeholder="Ends on:" required="" value="{{ $langg->lang406 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Renew *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang407" placeholder="Renew" required="" value="{{ $langg->lang407 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Get Started *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang408" placeholder="Get Started" required="" value="{{ $langg->lang408 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Package Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang409" placeholder="Package Details" required="" value="{{ $langg->lang409 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang410" placeholder="Back" required="" value="{{ $langg->lang410 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Plan: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang411" placeholder="Plan:" required="" value="{{ $langg->lang411 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang412" placeholder="Price:" required="" value="{{ $langg->lang412 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Durations: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang413" placeholder="Durations:" required="" value="{{ $langg->lang413 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product(s) Allowed: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang414" placeholder="Product(s) Allowed:" required="" value="{{ $langg->lang414 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Note: *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang415" placeholder="Note:" required="" value="{{ $langg->lang415 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Previous Plan will be deactivated! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang416" placeholder="Your Previous Plan will be deactivated!" required="" value="{{ $langg->lang416 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Optional) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang417" placeholder="(Optional)" required="" value="{{ $langg->lang417 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Payment Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang418" placeholder="Select Payment Method" required="" value="{{ $langg->lang418 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select an option *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang419" placeholder="Select an option" required="" value="{{ $langg->lang419 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Paypal *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang420" placeholder="Paypal" required="" value="{{ $langg->lang420 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Stripe *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang421" placeholder="Stripe" required="" value="{{ $langg->lang421 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Card *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang422" placeholder="Card" required="" value="{{ $langg->lang422 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cvv *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang423" placeholder="Cvv" required="" value="{{ $langg->lang423 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Month *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang424" placeholder="Month" required="" value="{{ $langg->lang424 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Year *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang425" placeholder="Year" required="" value="{{ $langg->lang425 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Submit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang426" placeholder="Submit" required="" value="{{ $langg->lang426 }}">
                          </div>
                        </div>


                        <hr>

                        <h4 class="text-center">Others</h4>
  
                        <hr>
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Deposit *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang819" placeholder="Deposit" required=""
                              value="{{ $langg->lang819 }}">
                          </div>
                        </div>
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Transactions *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang820" placeholder="Transactions" required=""
                              value="{{ $langg->lang820 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Deposit Now *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang821" placeholder="Deposit Now" required=""
                              value="{{ $langg->lang821 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Amount *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang822" placeholder="Amount" required=""
                              value="{{ $langg->lang822 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Deposit Amount *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang823" placeholder="Deposit Amount" required=""
                              value="{{ $langg->lang823 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Deposits *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang824" placeholder="Deposits" required=""
                              value="{{ $langg->lang824 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Deposit Date *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang825" placeholder="Deposit Date" required=""
                              value="{{ $langg->lang825 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Transactions *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang826" placeholder="Transactions" required=""
                              value="{{ $langg->lang826 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Transaction Date *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang827" placeholder="Transaction Datee" required=""
                              value="{{ $langg->lang827 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Details *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang828" placeholder="Details" required=""
                              value="{{ $langg->lang828 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Country *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang829" placeholder="Country" required=""
                              value="{{ $langg->lang829 }}">
                          </div>
                        </div>
  
  
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">State *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang830" placeholder="State" required=""
                              value="{{ $langg->lang830 }}">
                          </div>
                        </div>




                              </div>

 {{-- USER PANEL ENDS --}}



 {{-- VENDOR PANEL STARTS --}}

                              <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">


                      <hr>
                        
                        <h4 class="text-center">GLOBAL</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(In Any Language) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang517" placeholder="(In Any Language)" required="" value="{{ $langg->lang517 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">ADD NEW *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang518" placeholder="ADD NEW" required="" value="{{ $langg->lang518 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">EDIT *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang519" placeholder="EDIT" required="" value="{{ $langg->lang519 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">HEADER</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Welcome! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang431" placeholder="Welcome!" required="" value="{{ $langg->lang431 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Visit Store *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang432" placeholder="Visit Store" required="" value="{{ $langg->lang432 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">User Panel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang433" placeholder="User Panel" required="" value="{{ $langg->lang433 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Profile *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang434" placeholder="Edit Profile" required="" value="{{ $langg->lang434 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Logout *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang435" placeholder="Logout" required="" value="{{ $langg->lang435 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">NOTIFICATION</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">New Order(s). *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang436" placeholder="New Order(s)." required="" value="{{ $langg->lang436 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Clear All *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang437" placeholder="Clear All" required="" value="{{ $langg->lang437 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You Have a new order. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang438" placeholder="You Have a new order." required="" value="{{ $langg->lang438 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No New Notifications. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang439" placeholder="No New Notifications." required="" value="{{ $langg->lang439 }}">
                          </div>
                        </div>




                      <hr>
                        
                        <h4 class="text-center">SIDEBAR</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Visit Store *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang440" placeholder="Visit Store" required="" value="{{ $langg->lang440 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Dashbord *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang441" placeholder="Dashbord" required="" value="{{ $langg->lang441 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Orders *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang442" placeholder="Orders" required="" value="{{ $langg->lang442 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">All Orders *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang443" placeholder="All Orders" required="" value="{{ $langg->lang443 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang444" placeholder="Products" required="" value="{{ $langg->lang444 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add New Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang445" placeholder="Add New Product" required="" value="{{ $langg->lang445 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">All Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang446" placeholder="All Products" required="" value="{{ $langg->lang446 }}">
                          </div>
                        </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Product Catalogs *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang785" placeholder="Product Catalogs" required="" value="{{ $langg->lang785 }}">
                        </div>
                      </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Affiliate Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang447" placeholder="Affiliate Products" required="" value="{{ $langg->lang447 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add Affiliate Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang448" placeholder="Add Affiliate Product" required="" value="{{ $langg->lang448 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">All Affiliate Products *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang449" placeholder="All Affiliate Products" required="" value="{{ $langg->lang449 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Bulk Product Upload *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang450" placeholder="Bulk Product Upload" required="" value="{{ $langg->lang450 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraws *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang451" placeholder="Withdraws" required="" value="{{ $langg->lang451 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Settings *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang452" placeholder="Settings" required="" value="{{ $langg->lang452 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Services *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang453" placeholder="Services" required="" value="{{ $langg->lang453 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Banner *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang454" placeholder="Banner" required="" value="{{ $langg->lang454 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang455" placeholder="Shipping Cost" required="" value="{{ $langg->lang455 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Social Links *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang456" placeholder="Social Links" required="" value="{{ $langg->lang456 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Edit Profile</h4>

                      <hr>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Verify Account *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang784" placeholder="Verify Account" required="" value="{{ $langg->lang784 }}">
                        </div>
                      </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang457" placeholder="Shop Name" required="" value="{{ $langg->lang457 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Owner Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang458" placeholder="Owner Name" required="" value="{{ $langg->lang458 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang459" placeholder="Shop Number" required="" value="{{ $langg->lang459 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang460" placeholder="Shop Address" required="" value="{{ $langg->lang460 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Registration Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang461" placeholder="Registration Number" required="" value="{{ $langg->lang461 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Optional) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang462" placeholder="(Optional)" required="" value="{{ $langg->lang462 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang463" placeholder="Shop Details" required="" value="{{ $langg->lang463 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang464" placeholder="Save" required="" value="{{ $langg->lang464 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Vendor Verification</h4>

                      <hr>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Vendor Verification *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang786" placeholder="Vendor Verification" required=""
                            value="{{ $langg->lang786 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Details *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang787" placeholder="Details" required=""
                            value="{{ $langg->lang787 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Enter Verification Details *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang788" placeholder="Enter Verification Details" required=""
                            value="{{ $langg->lang788 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Attachment *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang789" placeholder="Attachment" required=""
                            value="{{ $langg->lang789 }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">(Maximum Size is: 10MB) *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang792" placeholder="(Maximum Size is: 10MB)" required=""
                            value="{{ $langg->lang792 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Add More Attachment *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang790" placeholder="Add More Attachment" required=""
                            value="{{ $langg->lang790 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Submit *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang791" placeholder="Submit" required=""
                            value="{{ $langg->lang791 }}">
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Verify Now *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang803" placeholder="Verify Now" required="" value="{{ $langg->lang803 }}">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-lg-4">
                          <div class="left-area">
                            <h4 class="heading">Your Documents Submitted Successfully. *</h4>
                            <p class="sub-heading">(In Any Language)</p>
                          </div>
                        </div>
                        <div class="col-lg-7">
                          <input type="text" class="input-field" name="lang804" placeholder="Your Documents Submitted Successfully." required="" value="{{ $langg->lang804 }}">
                        </div>
                      </div>


                      <hr>
                        
                        <h4 class="text-center">DASHBOARD</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Orders Pending! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang465" placeholder="Orders Pending!" required="" value="{{ $langg->lang465 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Orders Procsessing! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang466" placeholder="Orders Procsessing!" required="" value="{{ $langg->lang466 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Orders Completed! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang467" placeholder="Orders Completed!" required="" value="{{ $langg->lang467 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Products! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang468" placeholder="Total Products!" required="" value="{{ $langg->lang468 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Item Sold! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang469" placeholder="Total Item Sold!" required="" value="{{ $langg->lang469 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Earnings! *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang470" placeholder="Total Earnings!" required="" value="{{ $langg->lang470 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View All *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang471" placeholder="View All" required="" value="{{ $langg->lang471 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">ORDERS</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang534" placeholder="Order Number" required="" value="{{ $langg->lang534 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Qty *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang535" placeholder="Total Qty" required="" value="{{ $langg->lang535 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang536" placeholder="Total Cost" required="" value="{{ $langg->lang536 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payment Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang537" placeholder="Payment Method" required="" value="{{ $langg->lang537 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Actions *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang538" placeholder="Actions" required="" value="{{ $langg->lang538 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang539" placeholder="Details" required="" value="{{ $langg->lang539 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pending *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang540" placeholder="Pending" required="" value="{{ $langg->lang540 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Processing *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang541" placeholder="Processing" required="" value="{{ $langg->lang541 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Completed *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang542" placeholder="Completed" required="" value="{{ $langg->lang542 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Declined *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang543" placeholder="Declined" required="" value="{{ $langg->lang543 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Update Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang544" placeholder="Update Status" required="" value="{{ $langg->lang544 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to update the Order's Status. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang545" placeholder="You are about to update the Order's Status." required="" value="{{ $langg->lang545 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang546" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang546 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang547" placeholder="Cancel" required="" value="{{ $langg->lang547 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Proceed *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang548" placeholder="Proceed" required="" value="{{ $langg->lang548 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">ORDER DETAILS</h4>

                      <hr>


                      <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang549" placeholder="Order Details" required="" value="{{ $langg->lang549 }}">
                          </div>
                        </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Payment Method *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang795" placeholder="Payment Method" required=""
                          value="{{ $langg->lang795 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Charge ID *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang796" placeholder="Charge ID" required=""
                          value="{{ $langg->lang796 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Transaction ID *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang797" placeholder="Transaction ID" required=""
                          value="{{ $langg->lang797 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Payment Status *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang798" placeholder="Payment Status" required=""
                          value="{{ $langg->lang798 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Unpaid *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang799" placeholder="Unpaid" required=""
                          value="{{ $langg->lang799 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Paid *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang800" placeholder="Paid" required=""
                          value="{{ $langg->lang800 }}">
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Order Note *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang801" placeholder="Order Note" required=""
                          value="{{ $langg->lang801 }}">
                      </div>
                    </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang550" placeholder="Back" required="" value="{{ $langg->lang550 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order ID *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang551" placeholder="Order ID" required="" value="{{ $langg->lang551 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang552" placeholder="Total Product" required="" value="{{ $langg->lang552 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang553" placeholder="Total Cost" required="" value="{{ $langg->lang553 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ordered Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang554" placeholder="Ordered Date" required="" value="{{ $langg->lang554 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View Invoice *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang555" placeholder="View Invoice" required="" value="{{ $langg->lang555 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Billing Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang556" placeholder="Billing Details" required="" value="{{ $langg->lang556 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Customer Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang557" placeholder="Customer Name" required="" value="{{ $langg->lang557 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang558" placeholder="Email" required="" value="{{ $langg->lang558 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Phone *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang559" placeholder="Phone" required="" value="{{ $langg->lang559 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang560" placeholder="Address" required="" value="{{ $langg->lang560 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Country *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang561" placeholder="Country" required="" value="{{ $langg->lang561 }}">
                          </div>
                        </div>

                        <div class="row">

                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">City *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang562" placeholder="City" required="" value="{{ $langg->lang562 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Postal Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang563" placeholder="Postal Code" required="" value="{{ $langg->lang563 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang564" placeholder="Shipping Details" required="" value="{{ $langg->lang564 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pickup Location *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang565" placeholder="Pickup Location" required="" value="{{ $langg->lang565 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Products Ordered *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang566" placeholder="Products Ordered" required="" value="{{ $langg->lang566 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product ID# *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang567" placeholder="Product ID#" required="" value="{{ $langg->lang567 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shop Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang568" placeholder="Shop Name" required="" value="{{ $langg->lang568 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang569" placeholder="Status" required="" value="{{ $langg->lang569 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Title *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang570" placeholder="Product Title" required="" value="{{ $langg->lang570 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang571" placeholder="Quantity" required="" value="{{ $langg->lang571 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang572" placeholder="Size" required="" value="{{ $langg->lang572 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang573" placeholder="Color" required="" value="{{ $langg->lang573 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang574" placeholder="Total Price" required="" value="{{ $langg->lang574 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Vendor Removed *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang575" placeholder="Vendor Removed" required="" value="{{ $langg->lang575 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Send Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang576" placeholder="Send Email" required="" value="{{ $langg->lang576 }}">
                          </div>
                        </div>


                        <div class="row">                        
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Key *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang577" placeholder="License Key" required="" value="{{ $langg->lang577 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">The Licenes Key is *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang578" placeholder="The Licenes Key is" required="" value="{{ $langg->lang578 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter New License Key *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang579" placeholder="Enter New License Key" required="" value="{{ $langg->lang579 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Close *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang580" placeholder="Close" required="" value="{{ $langg->lang580 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang584" placeholder="Cancel" required="" value="{{ $langg->lang584 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save License *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang585" placeholder="Save License" required="" value="{{ $langg->lang585 }}">
                          </div>
                        </div>




                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Email Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang583" placeholder="Email Address" required="" value="{{ $langg->lang583 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subject *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang581" placeholder="Subject" required="" value="{{ $langg->lang581 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Your Message *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang582" placeholder="Your Message" required="" value="{{ $langg->lang582 }}">
                          </div>
                        </div>



                      <hr>
                        
                        <h4 class="text-center">ORDER INVOICE</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Invoice *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang586" placeholder="Order Invoice" required="" value="{{ $langg->lang586 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Billing Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang587" placeholder="Billing Address" required="" value="{{ $langg->lang587 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Invoice Number *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang588" placeholder="Invoice Number" required="" value="{{ $langg->lang588 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang589" placeholder="Order Date" required="" value="{{ $langg->lang589 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order ID *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang590" placeholder="Order ID" required="" value="{{ $langg->lang590 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang591" placeholder="Product" required="" value="{{ $langg->lang591 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang592" placeholder="Size" required="" value="{{ $langg->lang592 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang593" placeholder="Color" required="" value="{{ $langg->lang593 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang594" placeholder="Price" required="" value="{{ $langg->lang594 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Qty *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang595" placeholder="Qty" required="" value="{{ $langg->lang595 }}">
                          </div>
                        </div>

                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Packaging Cost *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang596" placeholder="Packaging Cost" required="" value="{{ $langg->lang596 }}">
                      </div>
                    </div>
                    
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subtotal *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang597" placeholder="Subtotal" required="" value="{{ $langg->lang597 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang598" placeholder="Shipping Cost" required="" value="{{ $langg->lang598 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">TAX *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang599" placeholder="TAX" required="" value="{{ $langg->lang599 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Total *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang600" placeholder="Total" required="" value="{{ $langg->lang600 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Order Details *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang601" placeholder="Order Details" required="" value="{{ $langg->lang601 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang602" placeholder="Shipping Method" required="" value="{{ $langg->lang602 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pick Up *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang603" placeholder="Pick Up" required="" value="{{ $langg->lang603 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Ship To Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang604" placeholder="Ship To Address" required="" value="{{ $langg->lang604 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payment Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang605" placeholder="Payment Method" required="" value="{{ $langg->lang605 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang606" placeholder="Shipping Address" required="" value="{{ $langg->lang606 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Print Invoice *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang607" placeholder="Print Invoice" required="" value="{{ $langg->lang607 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">PRODUCTS & AFFILIATE PRODUCTS</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang608" placeholder="Name" required="" value="{{ $langg->lang608 }}">
                          </div>
                        </div>


                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Product Sku *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang793" placeholder="Product Sku" required=""
                          value="{{ $langg->lang793 }}">
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-lg-4">
                        <div class="left-area">
                          <h4 class="heading">Enter Product Sku *</h4>
                          <p class="sub-heading">(In Any Language)</p>
                        </div>
                      </div>
                      <div class="col-lg-7">
                        <input type="text" class="input-field" name="lang794" placeholder="Enter Product Sku" required=""
                          value="{{ $langg->lang794 }}">
                      </div>
                    </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Type *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang609" placeholder="Type" required="" value="{{ $langg->lang609 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang610" placeholder="Price" required="" value="{{ $langg->lang610 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang611" placeholder="Status" required="" value="{{ $langg->lang611 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Actions *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang612" placeholder="Actions" required="" value="{{ $langg->lang612 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Activated *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang713" placeholder="Activated" required="" value="{{ $langg->lang713 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Deactivated *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang714" placeholder="Deactivated" required="" value="{{ $langg->lang714 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang715" placeholder="Edit" required="" value="{{ $langg->lang715 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">View Gallery *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang716" placeholder="View Gallery" required="" value="{{ $langg->lang716 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Close *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang613" placeholder="Close" required="" value="{{ $langg->lang613 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang614" placeholder="Confirm Delete" required="" value="{{ $langg->lang614 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Product. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang615" placeholder="You are about to delete this Product." required="" value="{{ $langg->lang615 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang616" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang616 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang617" placeholder="Cancel" required="" value="{{ $langg->lang617 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang618" placeholder="Delete" required="" value="{{ $langg->lang618 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Image Gallery *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang619" placeholder="Image Gallery" required="" value="{{ $langg->lang619 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload File *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang620" placeholder="Upload File" required="" value="{{ $langg->lang620 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Done *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang621" placeholder="Done" required="" value="{{ $langg->lang621 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You can upload multiple Images. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang622" placeholder="You can upload multiple Images." required="" value="{{ $langg->lang622 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add New Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang623" placeholder="Add New Product" required="" value="{{ $langg->lang623 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">No Images Found. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang624" placeholder="No Images Found." required="" value="{{ $langg->lang624 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Types *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang625" placeholder="Product Types" required="" value="{{ $langg->lang625 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Physical *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang626" placeholder="Physical" required="" value="{{ $langg->lang626 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Digital *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang627" placeholder="Digital" required="" value="{{ $langg->lang627 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang628" placeholder="License" required="" value="{{ $langg->lang628 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Physical Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang629" placeholder="Physical Product" required="" value="{{ $langg->lang629 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Digital Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang630" placeholder="Digital Product" required="" value="{{ $langg->lang630 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang631" placeholder="License Product" required="" value="{{ $langg->lang631 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang632" placeholder="Product Name" required="" value="{{ $langg->lang632 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Condition *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang633" placeholder="Allow Product Condition" required="" value="{{ $langg->lang633 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Condition *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang634" placeholder="Product Condition" required="" value="{{ $langg->lang634 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">New *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang635" placeholder="New" required="" value="{{ $langg->lang635 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Used *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang636" placeholder="Used" required="" value="{{ $langg->lang636 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang637" placeholder="Category" required="" value="{{ $langg->lang637 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang691" placeholder="Select Category" required="" value="{{ $langg->lang691 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Sub Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang638" placeholder="Sub Category" required="" value="{{ $langg->lang638 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Sub Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang639" placeholder="Select Sub Category" required="" value="{{ $langg->lang639 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Child Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang640" placeholder="Child Category" required="" value="{{ $langg->lang640 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Child Category *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang641" placeholder="Select Child Category" required="" value="{{ $langg->lang641 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Feature Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang642" placeholder="Feature Image" required="" value="{{ $langg->lang642 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload Image Here *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang643" placeholder="Upload Image Here" required="" value="{{ $langg->lang643 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Gallery Images *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang644" placeholder="Product Gallery Images" required="" value="{{ $langg->lang644 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Set Gallery *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang645" placeholder="Set Gallery" required="" value="{{ $langg->lang645 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Estimated Shipping Time *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang646" placeholder="Allow Estimated Shipping Time" required="" value="{{ $langg->lang646 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Estimated Shipping Time *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang647" placeholder="Product Estimated Shipping Time" required="" value="{{ $langg->lang647 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Sizes *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang648" placeholder="Allow Product Sizes" required="" value="{{ $langg->lang648 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang649" placeholder="Size Name" required="" value="{{ $langg->lang649 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(eg. S,M,L,XL,XXL,3XL,4XL) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang650" placeholder="(eg. S,M,L,XL,XXL,3XL,4XL)" required="" value="{{ $langg->lang650 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size Qty *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang651" placeholder="Size Qty" required="" value="{{ $langg->lang651 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Number of quantity of this size) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang652" placeholder="(Number of quantity of this size)" required="" value="{{ $langg->lang652 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Size Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang653" placeholder="Size Price" required="" value="{{ $langg->lang653 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(This price will be added with base price) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang654" placeholder="(This price will be added with base price)" required="" value="{{ $langg->lang654 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add More Size *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang655" placeholder="Add More Size" required="" value="{{ $langg->lang655 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Colors *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang656" placeholder="Allow Product Colors" required="" value="{{ $langg->lang656 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Colors *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang657" placeholder="Product Colors" required="" value="{{ $langg->lang657 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Choose Your Favorite Colors) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang658" placeholder="(Choose Your Favorite Colors)" required="" value="{{ $langg->lang658 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add More Color *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang659" placeholder="Add More Color" required="" value="{{ $langg->lang659 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Whole Sell *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang660" placeholder="Allow Product Whole Sell" required="" value="{{ $langg->lang660 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang661" placeholder="Enter Quantity" required="" value="{{ $langg->lang661 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Discount Percentage *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang662" placeholder="Enter Discount Percentage" required="" value="{{ $langg->lang662 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add More Field *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang663" placeholder="Add More Field" required="" value="{{ $langg->lang663 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Current Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang664" placeholder="Product Current Price" required="" value="{{ $langg->lang664 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">In *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang665" placeholder="In" required="" value="{{ $langg->lang665 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">e.g 20 *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang666" placeholder="e.g 20" required="" value="{{ $langg->lang666 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Previous Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang667" placeholder="Product Previous Price" required="" value="{{ $langg->lang667 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Optional) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang668" placeholder="(Optional)" required="" value="{{ $langg->lang668 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Stock *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang669" placeholder="Product Stock" required="" value="{{ $langg->lang669 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(Leave Empty will Show Always Available) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang670" placeholder="(Leave Empty will Show Always Available)" required="" value="{{ $langg->lang670 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product Measurement *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang671" placeholder="Allow Product Measurement" required="" value="{{ $langg->lang671 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Measurement *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang672" placeholder="Product Measurement" required="" value="{{ $langg->lang672 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">None *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang673" placeholder="None" required="" value="{{ $langg->lang673 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Gram *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang674" placeholder="Gram" required="" value="{{ $langg->lang674 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Kilogram *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang675" placeholder="Kilogram" required="" value="{{ $langg->lang675 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Litre *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang676" placeholder="Litre" required="" value="{{ $langg->lang676 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Pound *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang677" placeholder="Pound" required="" value="{{ $langg->lang677 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Custom *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang678" placeholder="Custom" required="" value="{{ $langg->lang678 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Unit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang679" placeholder="Enter Unit" required="" value="{{ $langg->lang679 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Description *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang680" placeholder="Product Description" required="" value="{{ $langg->lang680 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Buy/Return Policy *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang681" placeholder="Product Buy/Return Policy" required="" value="{{ $langg->lang681 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Youtube Video URL *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang682" placeholder="Youtube Video URL" required="" value="{{ $langg->lang682 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Allow Product SEO *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang683" placeholder="Allow Product SEO" required="" value="{{ $langg->lang683 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Meta Tags *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang684" placeholder="Meta Tags" required="" value="{{ $langg->lang684 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Meta Description *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang685" placeholder="Meta Description" required="" value="{{ $langg->lang685 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Feature Tags *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang686" placeholder="Feature Tags" required="" value="{{ $langg->lang686 }}">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Your Keyword *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang687" placeholder="Enter Your Keyword" required="" value="{{ $langg->lang687 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add More Field *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang688" placeholder="Add More Field" required="" value="{{ $langg->lang688 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Tags *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang689" placeholder="Tags" required="" value="{{ $langg->lang689 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Create Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang690" placeholder="Create Product" required="" value="{{ $langg->lang690 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang691" placeholder="License" required="" value="{{ $langg->lang691 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Upload Type *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang692" placeholder="Select Upload Type" required="" value="{{ $langg->lang692 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload By File *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang693" placeholder="Upload By File" required="" value="{{ $langg->lang693 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload By Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang694" placeholder="Upload By Link" required="" value="{{ $langg->lang694 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select File *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang695" placeholder="Select File" required="" value="{{ $langg->lang695 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang696" placeholder="Link" required="" value="{{ $langg->lang696 }}">
                          </div>
                        </div>

                       <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product License *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang697" placeholder="Product License" required="" value="{{ $langg->lang697 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Key *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang698" placeholder="License Key" required="" value="{{ $langg->lang698 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Quantity *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang699" placeholder="License Quantity" required="" value="{{ $langg->lang699 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add More Field *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang700" placeholder="Add More Field" required="" value="{{ $langg->lang700 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Platform *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang701" placeholder="Product Platform" required="" value="{{ $langg->lang701 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Region *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang702" placeholder="Product Region" required="" value="{{ $langg->lang702 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">License Type *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang703" placeholder="License Type" required="" value="{{ $langg->lang703 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit Product *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang704" placeholder="Edit Product" required="" value="{{ $langg->lang704 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang705" placeholder="Edit" required="" value="{{ $langg->lang705 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang706" placeholder="Save" required="" value="{{ $langg->lang706 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Product Affiliate Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang707" placeholder="Product Affiliate Link" required="" value="{{ $langg->lang707 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">(External Link) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang708" placeholder="(External Link)" required="" value="{{ $langg->lang708 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Feature Image Source *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang709" placeholder="Feature Image Source" required="" value="{{ $langg->lang709 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">File *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang710" placeholder="File" required="" value="{{ $langg->lang710 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang711" placeholder="Link" required="" value="{{ $langg->lang711 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Feature Image Link *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang712" placeholder="Feature Image Link" required="" value="{{ $langg->lang712 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Prefered Size: (800x800) or Square Size. *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang805" placeholder="Prefered Size: (800x800) or Square Size."
                              required="" value="{{ $langg->lang805 }}">
                          </div>
                        </div>
    
    
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Image height and width must be 600 x 600. *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang806" placeholder="Image height and width must be 600 x 600."
                              required="" value="{{ $langg->lang806 }}.">
                          </div>
                        </div>
    
    
                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              <h4 class="heading">Image must have square size. *</h4>
                              <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang807" placeholder="Image must have square size."
                              required="" value="{{ $langg->lang807 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">BULK PRODUCT UPLOAD</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Download Sample CSV *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang531" placeholder="Download Sample CSV" required="" value="{{ $langg->lang531 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload a File *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang532" placeholder="Upload a File" required="" value="{{ $langg->lang532 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Start Import *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang533" placeholder="Start Import" required="" value="{{ $langg->lang533 }}">
                          </div>
                        </div>



                   <hr>
                        
                        <h4 class="text-center">WITHDRAW</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">My Withdraws *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang472" placeholder="My Withdraws" required="" value="{{ $langg->lang472 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang473" placeholder="Withdraw Now" required="" value="{{ $langg->lang473 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Date *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang474" placeholder="Withdraw Date" required="" value="{{ $langg->lang474 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang475" placeholder="Method" required="" value="{{ $langg->lang475 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Account *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang476" placeholder="Account" required="" value="{{ $langg->lang476 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Amount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang477" placeholder="Amount" required="" value="{{ $langg->lang477 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Status *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang478" placeholder="Status" required="" value="{{ $langg->lang478 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">WITHDRAW NOW</h4>

                      <hr>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Now *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang479" placeholder="Withdraw Now" required="" value="{{ $langg->lang479 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Back *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang480" placeholder="Back" required="" value="{{ $langg->lang480 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang481" placeholder="Withdraw Method" required="" value="{{ $langg->lang481 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Select Withdraw Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang482" placeholder="Select Withdraw Method" required="" value="{{ $langg->lang482 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Paypal *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang483" placeholder="Paypal" required="" value="{{ $langg->lang483 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Skrill *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang484" placeholder="Skrill" required="" value="{{ $langg->lang484 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Payoneer *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang485" placeholder="Payoneer" required="" value="{{ $langg->lang485 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Bank *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang486" placeholder="Bank" required="" value="{{ $langg->lang486 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Amount *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang487" placeholder="Withdraw Amount" required="" value="{{ $langg->lang487 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Account Email *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang488" placeholder="Enter Account Email" required="" value="{{ $langg->lang488 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter IBAN/Account No *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang489" placeholder="Enter IBAN/Account No" required="" value="{{ $langg->lang489 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Account Name *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang490" placeholder="Enter Account Name" required="" value="{{ $langg->lang490 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Address *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang491" placeholder="Enter Address" required="" value="{{ $langg->lang491 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Enter Swift Code *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang492" placeholder="Enter Swift Code" required="" value="{{ $langg->lang492 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Additional Reference(Optional) *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang493" placeholder="Additional Reference(Optional)" required="" value="{{ $langg->lang493 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw Fee *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang494" placeholder="Withdraw Fee" required="" value="{{ $langg->lang494 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">and *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang495" placeholder="and" required="" value="{{ $langg->lang495 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">will deduct from your account. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang496" placeholder="will deduct from your account." required="" value="{{ $langg->lang496 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Withdraw *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang497" placeholder="Withdraw" required="" value="{{ $langg->lang497 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Balance *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang498" placeholder="Current Balance" required="" value="{{ $langg->lang498 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">Services</h4>

                      <hr>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">SERVICE *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang499" placeholder="SERVICE" required="" value="{{ $langg->lang499 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Featured Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang500" placeholder="Featured Image" required="" value="{{ $langg->lang500 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Title *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang501" placeholder="Title" required="" value="{{ $langg->lang501 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Actions *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang502" placeholder="Actions" required="" value="{{ $langg->lang502 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang717" placeholder="Edit" required="" value="{{ $langg->lang717 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Close *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang503" placeholder="Close" required="" value="{{ $langg->lang503 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang504" placeholder="Confirm Delete" required="" value="{{ $langg->lang504 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Service. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang505" placeholder="You are about to delete this Service." required="" value="{{ $langg->lang505 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang506" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang506 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang507" placeholder="Cancel" required="" value="{{ $langg->lang507 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang508" placeholder="Delete" required="" value="{{ $langg->lang508 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add New Service *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang509" placeholder="Add New Service" required="" value="{{ $langg->lang509 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Title *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang510" placeholder="Title" required="" value="{{ $langg->lang510 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Featured Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang511" placeholder="Current Featured Image" required="" value="{{ $langg->lang511 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang512" placeholder="Upload Image" required="" value="{{ $langg->lang512 }}">
                          </div>
                        </div>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Prefered Size: (600x600) or Square Sized Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang513" placeholder="Prefered Size: (600x600) or Square Sized Image" required="" value="{{ $langg->lang513 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Description *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang514" placeholder="Description" required="" value="{{ $langg->lang514 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Create Service *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang515" placeholder="Create Service" required="" value="{{ $langg->lang515 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang516" placeholder="Save" required="" value="{{ $langg->lang516 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">SHIPPING METHODS AND PACKAGING</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">SHIPPING METHOD *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang718" placeholder="SHIPPING METHOD" required="" value="{{ $langg->lang718 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Methods *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang719" placeholder="Shipping Methods" required="" value="{{ $langg->lang719 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">PACKAGING *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang720" placeholder="PACKAGING" required="" value="{{ $langg->lang720 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Packagings *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang721" placeholder="Packagings" required="" value="{{ $langg->lang721 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Title *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang722" placeholder="Title" required="" value="{{ $langg->lang722 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang723" placeholder="Price" required="" value="{{ $langg->lang723 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Actions *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang724" placeholder="Actions" required="" value="{{ $langg->lang724 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Edit *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang725" placeholder="Edit" required="" value="{{ $langg->lang725 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Close *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang726" placeholder="Close" required="" value="{{ $langg->lang726 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Confirm Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang734" placeholder="Confirm Delete" required="" value="{{ $langg->lang734 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Shipping Method. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang727" placeholder="You are about to delete this Shipping Method." required="" value="{{ $langg->lang727 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">You are about to delete this Packaging. *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang728" placeholder="You are about to delete this Packaging." required="" value="{{ $langg->lang728 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Do you want to proceed? *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang729" placeholder="Do you want to proceed?" required="" value="{{ $langg->lang729 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Cancel *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang730" placeholder="Cancel" required="" value="{{ $langg->lang730 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Delete *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang731" placeholder="Delete" required="" value="{{ $langg->lang731 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add New Shipping Method *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang732" placeholder="Add New Shipping Method" required="" value="{{ $langg->lang732 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Add New Packaging *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang733" placeholder="Add New Packaging" required="" value="{{ $langg->lang733 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Title *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang735" placeholder="Title" required="" value="{{ $langg->lang735 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Subtitle *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang736" placeholder="Subtitle" required="" value="{{ $langg->lang736 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Duration *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang737" placeholder="Duration" required="" value="{{ $langg->lang737 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Price *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang738" placeholder="Price" required="" value="{{ $langg->lang738 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Create *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang739" placeholder="Create" required="" value="{{ $langg->lang739 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang740" placeholder="Save" required="" value="{{ $langg->lang740 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">BANNER</h4>

                      <hr>



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Current Banner *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang520" placeholder="Current Banner" required="" value="{{ $langg->lang520 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Prefered Size: (1920x220) or Relevant Sized Image *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang521" placeholder="Prefered Size: (1920x220) or Relevant Sized Image" required="" value="{{ $langg->lang521 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Upload Banner *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang522" placeholder="Upload Banner" required="" value="{{ $langg->lang522 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang523" placeholder="Save" required="" value="{{ $langg->lang523 }}">
                          </div>
                        </div>


                      <hr>
                        
                        <h4 class="text-center">SHIPPING COST</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Shipping Cost *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang524" placeholder="Shipping Cost" required="" value="{{ $langg->lang524 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang525" placeholder="Save" required="" value="{{ $langg->lang525 }}">
                          </div>
                        </div>

                      <hr>
                        
                        <h4 class="text-center">SOCIAL LINKS</h4>

                      <hr>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Facebook  *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang526" placeholder="Facebook " required="" value="{{ $langg->lang526 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Google Plus *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang527" placeholder="Google Plus" required="" value="{{ $langg->lang527 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Twitter *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang528" placeholder="Twitter" required="" value="{{ $langg->lang528 }}">
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Linkedin *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang529" placeholder="Linkedin" required="" value="{{ $langg->lang529 }}">
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                                <h4 class="heading">Save *</h4>
                                <p class="sub-heading">(In Any Language)</p>
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <input type="text" class="input-field" name="lang530" placeholder="Save" required="" value="{{ $langg->lang530 }}">
                          </div>
                        </div>






                              </div>
                            </div>
                          
                          </div>
                        </div>







 {{-- VENDOR PANEL ENDS --}}



                        <div class="row">
                          <div class="col-lg-4">
                            <div class="left-area">
                              
                            </div>
                          </div>
                          <div class="col-lg-7">
                            <button class="addProductSubmit-btn" type="submit">Save</button>
                          </div>
                        </div>
                      </form>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
@endsection