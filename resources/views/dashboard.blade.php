<x-dashboard>
    
    <x-slot name="header">
        Dashboard
    </x-slot>

    <x-slot name="desc">
        Dashboard
    </x-slot>

    <div class="nk-content-body">
        <div class="row">
            <div class="col-sm-12 col-lg-3">
                <div class="card card-bordered">
                    <div class="card-inner">
                        <div class="team">
                            <div class="user-card user-card-s2">
                                <div class="user-avatar lg">
                                    <img src="{{ auth()->user()->profile_photo_path ? url("storage/".auth()->user()->profile_photo_path) : "https://ui-avatars.com/api/?name=".auth()->user()->profile->first_name. " " . auth()->user()->profile->last_name ."&color=7F9CF5&background=EBF4FF" }}">
                                    <div class="status dot dot-lg dot-success"></div>
                                </div>
                                <div class="user-info">
                                    <h6>{{ auth()->user()->profile->first_name }} {{ auth()->user()->profile->last_name }}</h6>
                                    <span class="sub-text">user</span>
                                </div>
                            </div>
                            <ul class="team-info">
                                <li><span>Join Date</span><span>{{ auth()->user()->created_at->format("d F Y") }}</span></li>
                                <li><span>Phone</span><span>{{ auth()->user()->profile->phone ?? '-' }}</span></li>
                                <li><span>Email</span><span>{{ auth()->user()->email }}</span></li>
                            </ul>
                            <div class="team-view">
                                <a target="_blank" href="{{ route("profile",auth()->user()->username) }}" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                            </div>
                        </div><!-- .team -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div>
            <div class="col-sm-12 col-lg-9">
                <div class="card card-bordered">
                    <div class="card-body">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Profile</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-play"></em><span>Socials</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-reload"></em><span>Change password</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-setting"></em><span>Public setting</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabItem5">
                                <form action="{{ route("user-profile-information.update") }}" class="form-horizontal" enctype="multipart/form-data" method="POST" accept-charset="utf-8">
                                    @csrf
                                    @method("PUT")
                                    <div class="row form-group">
                                        <div class="col-12 mb-3">
                                            <label class="control-label">Username</label>
                                            <input type="text" name="username" class="form-control" value="{{ old("username",auth()->user()->username) }}" placeholder="write your username">
                                            @error("username")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="control-label">First Name</label>
                                            <input type="text" name="first_name" class="form-control" value="{{ old("first_name",auth()->user()->profile->first_name) }}" placeholder="write your first name">
                                            @error("first_name")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label class="control-label">Last Name</label>
                                            <input type="text" name="last_name" class="form-control" value="{{ old("last_name",auth()->user()->profile->last_name) }}" placeholder="write your last name">
                                            @error("last_name")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label>Designation</label>
                                            <input type="text" name="designation" class="form-control" value="{{ old("designation",auth()->user()->profile->designation) }}" placeholder="write your designation">
                                            @error("designation")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
    
                                        <div class="col-6">
                                            <label class="control-label">Email</label>
                                            <input type="email" name="email" class="form-control" value="{{ old("email",auth()->user()->email) }}" placeholder="write your email">
                                            @error("email")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
        
                                    <div class="row form-group">
                                        <div class="col-12" style="margin-bottom: 20px">
                                            <label>Country</label>
                                            <select name="country_id" class="form-control">
                                                    <option value="0">Select Country</option>
                                                @foreach ($countries as $item)
                                                    <option {{ old("country_id",auth()->user()->profile->country_id) == $item->id ? "selected" : "" }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
    
                                        <div class="col-6">
                                            <label>Province</label>
                                            <input type="text" name="province" value="{{ old("province",auth()->user()->profile->province) }}" class="form-control" placeholder="write your province">
                                            @error("province")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label>City</label>
                                            <input type="text" name="city" value="{{ old("city",auth()->user()->profile->city) }}" class="form-control" placeholder="write your city">
                                            @error("city")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>Address</label>
                                            <input name="address" class="form-control" rows="3" placeholder="" value="{{ old("address",auth()->user()->profile->address) }}">
                                            @error("address")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label>Phone</label>
                                            <input type="text" name="phone" value="{{ old("phone",auth()->user()->profile->phone) }}" class="form-control" placeholder="">
                                            @error("phone")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
    
                                        <div class="col-6">
                                            <label for="exampleInputFile">Resume&nbsp;[pdf/doc]
                                            </label>
                                            <div class="custom-file">
                                                <input type="file" name="resume" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                <span id="file_path_span"></span>
                                                @if(auth()->user()->profile->thumb)<a target="_blank" class="mt-2" href="{{ url("storage/".auth()->user()->profile->thumb) }}">lihat</a>@endif
                                                @error('resume')
                                                    <small class="text-danger">{{ $message }}</small>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <label>Skype</label>
                                            <input type="text" name="skype" value="{{ old("skype",auth()->user()->profile->skype) }}" class="form-control" placeholder="e.g., sk_john123">
                                            @error("skype")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-6">
                                            <label>Whatsapp</label>
                                            <input type="text" name="whatapp" value="{{ old("whatapp",auth()->user()->profile->whatapp) }}" class="form-control" placeholder="e.g., +923001234567">
                                            @error("whatapp")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
    
                                    </div>
    
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <label>About me</label>
                                            <textarea name="about_me" class="form-control" rows="3" placeholder="">{{ old("about_me",auth()->user()->profile->about_me) }}</textarea>
                                            @error("about_me")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row form-group">
                                        <div class="col-12">
                                            <img width="100px" src="{{ auth()->user()->profile_photo_path ? url("storage/".auth()->user()->profile_photo_path) : "https://ui-avatars.com/api/?name=".auth()->user()->username."&color=7F9CF5&background=EBF4FF" }}"><br><br>
                                            <div style="position:relative;">&nbsp;[gif / jpg / png / jpeg]<br>
                                                <label class="btn btn-sm btn-primary ml-0" href="javascript:;">
                                                    <i class="fa fa-cloud-upload"></i> Change Avatar                                                
                                                    <input type="file" style="position:absolute;z-index:2;top:0;left:0;height:38px;filter: alpha(opacity=0);-ms-filter:&quot;progid:DXImageTransform.Microsoft.Alpha(Opacity=0)&quot;;opacity:0;background-color:transparent;color:transparent;" name="photo" onchange="$(&quot;#upload-logo&quot;).html($(this).val());">
                                                </label>
                                                &nbsp;
                                                <span class="label label-info" id="upload-logo"></span>
                                            </div>
                                            @error('photo')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="update_profile" required>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" name="submit" value="Update" class="btn btn-primary pull-right">
                                    </div>
                                </form>                           
                            </div>
                            <div class="tab-pane" id="tabItem6">
                                <form action="{{ route("user-profile-information.update") }}" class="form-horizontal p-3" method="post" accept-charset="utf-8">
                                    @csrf
                                    @method("PUT")
                                    <div class="row form-group">
                                        <label>Facebook</label>
                                        <input type="url" name="facebook" value="{{ old("facebook",auth()->user()->profile->facebook) }}" class="form-control" placeholder="e.g., https://www.facebook.com">
                                        @error("facebook")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="row form-group">
                                        <label>Twitter</label>
                                        <input type="url" name="twitter" value="{{ old("twitter",auth()->user()->profile->twitter) }}" class="form-control" placeholder="e.g., https://www.twitter.com">
                                        @error("twitter")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <div class="row form-group">
                                        <label>LinkedIn</label>
                                        <input type="url" name="linkedin" value="{{ old("linkedin",auth()->user()->profile->linkedin) }}" class="form-control" placeholder="e.g., https://www.linkedin.com">
                                        @error("linkedin")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
    
                                    <div class="row form-group">
                                        <label>Instagram</label>
                                        <input type="url" name="instagram" value="{{ old("instagram",auth()->user()->profile->instagram) }}" class="form-control" placeholder="e.g., https://www.instagram.com">
                                        @error("instagram")
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>
                                    <input type="hidden" name="type" value="update_social" required>
                                    <div class="form-group d-flex justify-content-end">
                                        <input type="submit" name="submit" value="Update" class="btn btn-info pull-primary">
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="tabItem7">
                                <form action="{{ route("user-profile-information.update") }}" class="form-horizontal" method="POST" accept-charset="utf-8">
                                    @csrf
                                    @method("PUT")
                                    <div class="row form-group g-gs">
                                        <div class="col-12">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="new password">
                                            @error("password")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
    
                                        <div class="col-12">
                                            <label class="control-label">Confirm password</label>
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="repeat new password">
                                            @error("password_confirmation")
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>
                                    <input type="hidden" name="type" value="update_password" required>
                                    <div class="form-group d-flex justify-content-end mt-2">
                                        <input type="submit" name="submit" value="Update" class="btn btn-primary pull-right">
                                    </div>
                                </form>                    
                            </div>
                            <div class="tab-pane" id="tabItem8">
                                <form action="{{ route("update_public") }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        @foreach ($feature as $item)
                                        <div class="col-lg-3 col-6 mb-3">
                                            <div class="custom-control-lg custom-switch">
                                                <input {{ (collect(old('feature',$group)))->contains($item->id) ? 'checked' : '' }} value="{{ $item->id }}" name="feature[]" type="checkbox" class="custom-control-input" id="customSwitch{{ $item->id }}">
                                                <label class="custom-control-label" for="customSwitch{{ $item->id }}">{{ $item->name }}</label>
                                            </div>
                                        </div>           
                                        @endforeach
                                    </div>               
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div>
        </div>
    </div>
</x-dashboard>
