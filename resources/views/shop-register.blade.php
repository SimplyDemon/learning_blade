@extends('layout')

@section('content')
    <section class="page_breadcrumbs ds background_cover background_overlay section_padding_top_65 section_padding_bottom_65">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Registration</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="./">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">Shop</a>
                        </li>
                        <li class="active">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="ls section_padding_top_100 section_padding_bottom_100">
        <div class="container">

            <div class="row">

                <form method="POST" class="shop-register" role="form">

                    <div class="col-sm-6">
                        <div class="form-group validate-required" id="first_name_field">
                            @if($validationErrors !== null && $validationErrors->has('first_name'))
                                @foreach($validationErrors->get('first_name') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="first_name" class="control-label">
                                <span class="grey">Имя:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="first_name" id="first_name" placeholder="" value="@isset($first_name){{ $first_name }}@endisset">
                        </div>

                        <div class="form-group" id="company_field">
                            @if($validationErrors !== null && $validationErrors->has('company'))
                                @foreach($validationErrors->get('company') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="company" class="control-label">
                                <span class="grey">Компания:</span>
                            </label>

                            <input type="text" class="form-control " name="company" id="company" placeholder="" value="@isset($company){{ $company }}@endisset">

                        </div>


                    </div>

                    <div class="col-sm-6">
                        <div class="form-group validate-required" id="last_name_field">
                            @if($validationErrors !== null && $validationErrors->has('last_name'))
                                @foreach($validationErrors->get('last_name') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="last_name" class="control-label">
                                <span class="grey">Фамилия:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="last_name" id="last_name" placeholder="" value="@isset($last_name){{ $last_name }}@endisset">

                        </div>

                        <div class="form-group validate-required validate-email" id="email_field">
                            @if($validationErrors !== null && $validationErrors->has('email'))
                                @foreach($validationErrors->get('email') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="email" class="control-label">
                                <span class="grey">Почта:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="email" id="email" placeholder="" value="@if(isset($email)){{ $email }}@elseif(isset($user)){{ $user->email }}@endif">

                        </div>

                    </div>

                    <div class="col-sm-12">
                        <div class="form-group address-field validate-required" id="address_fields">
                            @if($validationErrors !== null && $validationErrors->has('address'))
                                @foreach($validationErrors->get('address') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="address" class="control-label">
                                <span class="grey">Адрес:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="address" id="address" placeholder="" value="@isset($address){{ $address }}@endisset">

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group address-field validate-required" id="city_field">
                            @if($validationErrors !== null && $validationErrors->has('city'))
                                @foreach($validationErrors->get('city') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="city" class="control-label">
                                <span class="grey">Город:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="city" id="city" placeholder="" value="@isset($city){{ $city }}@endisset">

                        </div>

                        <div class="form-group address-field validate-required validate-postcode" id="postcode_field">
                            @if($validationErrors !== null && $validationErrors->has('postcode'))
                                @foreach($validationErrors->get('postcode') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="postcode" class="control-label">
                                <span class="grey">Индекс:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="postcode" id="postcode" placeholder="" value="@isset($postcode){{ $postcode }}@endisset">

                        </div>

                        <div class="form-group validate-required validate-phone" id="phone_field">
                            @if($validationErrors !== null && $validationErrors->has('phone'))
                                @foreach($validationErrors->get('phone') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="phone" class="control-label">
                                <span class="grey">Телефон:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="phone" id="phone" placeholder="" value="@isset($phone){{ $phone }}@endisset">

                        </div>


                        <div class="form-group" id="password_field">
                            @if($validationErrors !== null && $validationErrors->has('password'))
                                @foreach($validationErrors->get('password') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="password" class="control-label">
                                <span class="grey">Пароль:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="password" id="password" placeholder="" value="@isset($first_name){{ $first_name }}@endisset">

                        </div>


                        <div class="form-group">

                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios"> Ship to this address
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios"> Ship to different address
                                </label>
                            </div>

                        </div>

                    </div>

                    <div class="col-sm-6">

                        <div class="form-group">
                            @if($validationErrors !== null && $validationErrors->has('state'))
                                @foreach($validationErrors->get('state') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="state" class="control-label">
                                <span class="grey">Регион:</span>
                                <span class="required">*</span>
                            </label>

                            <select class="form-control" name="state" id="state">
                                <option>Select a country…</option>
                                <option value="MSK">Московский</option>
                                <option value="not_msk">Не Московский</option>
                            </select>
                        </div>

                        <div class="form-group">
                            @if($validationErrors !== null && $validationErrors->has('country'))
                                @foreach($validationErrors->get('country') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="country" class="control-label">
                                <span class="grey">Country:</span>
                                <span class="required">*</span>
                            </label>

                            <select class="form-control" name="country" id="country">
                                <option>Select a country…</option>
                                <option value="RU">Russia</option>
                                <option value="AX">Åland Islands</option>
                                <option value="AF">Afghanistan</option>
                                <option value="AL">Albania</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB" selected="selected">United Kingdom (UK)</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>

                        <div class="form-group validate-required validate-fax" id="fax_field">
                            @if($validationErrors !== null && $validationErrors->has('fax'))
                                @foreach($validationErrors->get('fax') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="fax" class="control-label">
                                <span class="grey">Факс:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="fax" id="fax" placeholder="" value="@isset($fax){{ $fax }}@endisset">

                        </div>


                        <div class="form-group" id="password_confirmation ">
                            @if($validationErrors !== null && $validationErrors->has('password_confirmation '))
                                @foreach($validationErrors->get('password_confirmation ') as $error)
                                    <p style="color:red">{{$error}}</p>
                                @endforeach
                            @endif
                            <label for="password_confirmation" class="control-label">
                                <span class="grey">Подтверждение пароля:</span>
                                <span class="required">*</span>
                            </label>

                            <input type="text" class="form-control " name="password_confirmation " id="password_confirmation " placeholder="" value="@isset($first_name){{ $first_name }}@endisset">

                        </div>


                    </div>

                    <div class="col-sm-12">

                        <button type="submit" class="theme_button wide_button color1 topmargin_40">Зарегистрироваться</button>
                        <button type="reset" class="theme_button wide_button">Очистить форму</button>

                    </div>

                </form>


            </div>
        </div>
    </section>
@endsection