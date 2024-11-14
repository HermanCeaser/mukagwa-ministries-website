<x-app-layout>
    @push('css')
        <style>
            /* Donation Page Styles */
            .donate-section .payment-info {
                position: relative;
                padding-top: 40px;
                padding-bottom: 10px;
            }

            .donate-section .payment-options {
                position: relative;
                padding-bottom: 10px;
            }

            .donate-section .payment-info-select {
                position: relative;
                float: left;
                text-align: center;
                margin: 0px 15px 15px 0px;
            }

            .donate-section .payment-info-select input[type="radio"] {
                left: 0px;
                top: 0px;
                visibility: hidden;
                position: absolute;
                opacity: 0;
            }

            .donate-section .payment-info-select label {
                position: relative;
                display: block;
                line-height: 24px;
                padding: 12px 30px;
                text-align: center;
                font-size: 16px;
                text-transform: capitalize;
                font-weight: 500;
                background: #faf9f2;
                color: #2f3753;
                border: 1px solid #faf9f2;
                cursor: pointer;
                border-radius: 5px;
                -webkit-transition: all 500ms ease;
                -ms-transition: all 500ms ease;
                transition: all 500ms ease;
            }

            .donate-section .payment-info-select img {
                position: relative;
                padding-left: 10px;
            }

            .donate-section .payment-info-select input[type="radio"]:checked+label {
                background: #3f6b92;
                border-color: #3f6b92;
                color: #ffffff;
            }

            .donate-section .info-column {
                position: relative;
                margin-bottom: 30px;
            }

            .donate-section .info-column .inner {
                position: relative;
                display: block;
            }
        </style>
    @endpush
    <section id="common_banner_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="commn_banner_page">
                        <h2><span class="color_big_heading">{{ __($title) }}</span></h2>
                        <ul class="breadcrumb_wrapper">
                            <li class="breadcrumb_item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb_item"><img src="{{ asset('assets/img/icon/arrow.png') }}"
                                    alt="img">
                            </li>
                            <li class="breadcrumb_item active">{{ ucfirst($title) ?? __('Make a Donation') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Make a donation Area -->
    <section id="make_donation_area" class="section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="section_heading">
                        <h3>Make a donation</h3>
                        <h2><span class="color_big_heading">Donate</span> now to help the <br> people</h2>
                    </div>
                </div>
            </div>
            <div class="row" id="counter">
                <div class="col-lg-8 mx-auto">
                    <div class="details_wrapper_area">
                        <form action="{{ route('donation.store') }}" id="donationForm" method="POST">
                            @csrf
                            <div class="donet_amount_area doner_content_pbottom row">

                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group p-2">
                                        <label>Currency</label>
                                        <select id="currency" class="form-control" name="currency">
                                        </select>
                                        @error('currency')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6 col-sm-12">
                                    <div class="form-group p-2 text-end">
                                        <label>Amount</label>
                                        <div class="input_donet_amount">
                                            <span id="donation_currency_symbol"></span>
                                            <input id="donation_amount" name="amount"
                                                onkeypress="return CheckNumeric()" type="text"
                                                style="text-align: right;" required />
                                        </div>
                                        @error('amount')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="donet_amount_form_area doner_content_pbottom row">
                                <h3>Donor Details</h3>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="Enter first name*" required
                                                value="{{ old('first_name') }}" />
                                            @error('first_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Enter last name*" value="{{ old('last_name') }}"
                                                required />
                                            @error('last_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="user@emailadrress.com*" value="{{ old('email') }}" required />
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="phone" name="phone_number" class="form-control"
                                                value="{{ old('phone_number') }}" placeholder="+256 780 260 782" />
                                            @error('phone_number')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control"
                                                value="{{ old('address') }}" placeholder="Enter address" />
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <select class="form-control" name="country" required>
                                                <option value="">Select Country</option>
                                                @foreach (\Config::get('constants.COUNTRIES') as $code => $country)
                                                    <option value="{{ $code }}" @selected(old('country') == $code)>
                                                        {{ $country }}</option>
                                                @endforeach
                                            </select>
                                            @error('country')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <textarea name="comment" rows="3" class="form-control" placeholder="Write your comment">{{ old('comment') }}</textarea>
                                            @error('comment')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div x-data="{ paymentMeans: 'bank' }" class="donet_amount_form_area doner_content_pbottom row" >
                                <h3>Payment Means</h3>
                                {{-- <div class="payment-options clearfix">
                                    <div class="payment-info-select">
                                        <input x-model="paymentMeans" value="bank" type="radio"
                                            name="payment_means" id="radio-nine">
                                        <label for="radio-nine">Bank Transfer<img style="height:32px; width:auto;"
                                                src="{{ asset('assets/img/icon/icon-bank.png') }}" alt="" />
                                        </label>
                                    </div>
                                    <div class="payment-info-select">
                                        <input x-model="paymentMeans" value="mobile_money" type="radio"
                                            name="payment_means" id="radio-zero">
                                        <label for="radio-zero">Mobile Money
                                            <img style="height:32px; width:auto;"
                                                src="{{ asset('assets/img/icon/icon-momo.png') }}" alt="" />
                                        </label>
                                    </div>
                                </div> --}}
                                <div class="payment_option_area">
                                    <ul>
                                        <li>
                                            <label for="radio-zero">
                                                <input x-model="paymentMeans" value="bank" type="radio"
                                                    name="payment_means" id="radio-zero">

                                                <img src="{{ asset('assets/img/icon/icon-bank.png') }}"
                                                    alt="icon">
                                            </label>
                                        </li>

                                        <li>
                                            <label for="radio-one">
                                                <input x-model="paymentMeans" value="mobile_money" type="radio"
                                                    name="payment_means" id="radio-one">

                                                <img src="{{ asset('assets/img/icon/icon-momo.png') }}"
                                                    alt="icon">
                                            </label>
                                        </li>
                                        {{-- <li><img src="{{ asset('assets/img/icon/master.png') }}" alt="icon"></li>
                                        <li><img src="{{ asset('assets/img/icon/paypal.png') }}" alt="icon"></li> --}}
                                    </ul>
                                </div>
                                <div x-show="paymentMeans=='bank'" class="row clearfix">
                                    <div id="bank-transfer">
                                        <div class="default-event col-sm-12">
                                            <div class="section_heading inner-box">
                                                <h2 style="text-align: left;"><span>DFCU BANK</span></h2>
                                            </div>
                                            <h3 class="mb-2"><a href="#">Direct Bank Transfer</a> </h3>
                                            <ul class="info">
                                                <li class="mb-2"><span class="far fa-address-card"></span> Account No:
                                                    01440016344389</li>
                                                <li class="mb-2"><span class="fa fa-map-marker-alt"></span> SWIFT CODE :
                                                    DFCUUGKA.</li>
                                                <li class="mb-2"><span class="fa fa-user"></span> Account Name: MUKAGWA CHILDREN AND WOMEN MINISTRIES.
                                                </li>
                                            </ul>
                                        </div>
                                    </div>


                                </div>

                                <div x-show="paymentMeans =='mobile_money'" class="row clearfix">
                                    <div id="mobile-money">
                                        <div class="default-event col-sm-12">
                                            <div class="section_heading inner-box">
                                                <h2 style="text-align: left;"><span>Mobile Money</span></h2>
                                            </div>
                                            <h3 class="mb-2"><a href="#">Donate using Mobile Money</a>
                                            </h3>
                                            <ul class="info">
                                                <li class="mb-2"><span class="fa fa-phone"></span> MTN: <a
                                                        href="tel:+256782331162">+256 782 331 162</a></li>
                                                <li class="mb-2"><span class="fa fa-phone"></span> Airtel: <a
                                                        href="tel:+256705996362">+256 705 996 362</a></li>
                                                <li class="mb-2"><span class="fa fa-user"></span> Names: MUTUNDA BETTY</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="payment_amount_submit">
                        <button class="btn btn_theme btn_md">Donate now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>

    @push('js')
        <script>
            const currencies = {
                ALL: {
                    name: "Albanian Lek",
                    symbol: "Lek"
                },
                ARS: {
                    name: "Argentine Peso",
                    symbol: "$"
                },
                AUD: {
                    name: "Australian Dollar",
                    symbol: "$"
                },
                AED: {
                    name: "UAE Dirham",
                    symbol: "د.إ"
                },
                BGN: {
                    name: "Bulgarian Lev",
                    symbol: "лв"
                },
                BHD: {
                    name: "Bahraini Dinar",
                    symbol: "ب.د"
                },
                BND: {
                    name: "Brunei Dollar",
                    symbol: "$"
                },
                BRL: {
                    name: "Brazilian Real",
                    symbol: "R$"
                },
                BWP: {
                    name: "Botswana Pula",
                    symbol: "P"
                },
                CAD: {
                    name: "Canadian Dollar",
                    symbol: "$"
                },
                CHF: {
                    name: "Swiss Franc",
                    symbol: "CHF"
                },
                CLP: {
                    name: "Chilean Peso",
                    symbol: "$"
                },
                CNY: {
                    name: "Chinese Yuan",
                    symbol: "¥"
                },
                COP: {
                    name: "Colombian Peso",
                    symbol: "$"
                },
                CRC: {
                    name: "Costa Rican Colón",
                    symbol: "₡"
                },
                CZK: {
                    name: "Czech Koruna",
                    symbol: "Kč"
                },
                DKK: {
                    name: "Danish Krone",
                    symbol: "kr"
                },
                DOP: {
                    name: "Dominican Peso",
                    symbol: "RD$"
                },
                DZD: {
                    name: "Algerian Dinar",
                    symbol: "د.ج"
                },
                EGP: {
                    name: "Egyptian Pound",
                    symbol: "ج.م"
                },
                EUR: {
                    name: "Euro",
                    symbol: "€"
                },
                GBP: {
                    name: "British Pound Sterling",
                    symbol: "£"
                },
                GHS: {
                    name: "Ghanaian Cedi",
                    symbol: "₵"
                },
                GMD: {
                    name: "Gambian Dalasi",
                    symbol: "D"
                },
                GTQ: {
                    name: "Guatemalan Quetzal",
                    symbol: "Q"
                },
                HKD: {
                    name: "Hong Kong Dollar",
                    symbol: "$"
                },
                HNL: {
                    name: "Honduran Lempira",
                    symbol: "L"
                },
                HUF: {
                    name: "Hungarian Forint",
                    symbol: "Ft"
                },
                IDR: {
                    name: "Indonesian Rupiah",
                    symbol: "Rp"
                },
                ILS: {
                    name: "Israeli New Shekel",
                    symbol: "₪"
                },
                INR: {
                    name: "Indian Rupee",
                    symbol: "₹"
                },
                IQD: {
                    name: "Iraqi Dinar",
                    symbol: "ع.د"
                },
                ISK: {
                    name: "Icelandic Króna",
                    symbol: "kr"
                },
                JOD: {
                    name: "Jordanian Dinar",
                    symbol: "د.ا"
                },
                JPY: {
                    name: "Japanese Yen",
                    symbol: "¥"
                },
                KES: {
                    name: "Kenyan Shilling",
                    symbol: "KSh"
                },
                KHR: {
                    name: "Cambodian Riel",
                    symbol: "៛"
                },
                KRW: {
                    name: "South Korean Won",
                    symbol: "₩"
                },
                KWD: {
                    name: "Kuwaiti Dinar",
                    symbol: "د.ك"
                },
                LBP: {
                    name: "Lebanese Pound",
                    symbol: "ل.ل"
                },
                LKR: {
                    name: "Sri Lankan Rupee",
                    symbol: "Rs"
                },
                LYD: {
                    name: "Libyan Dinar",
                    symbol: "ل.د"
                },
                MAD: {
                    name: "Moroccan Dirham",
                    symbol: "د.م."
                },
                MOP: {
                    name: "Macanese Pataca",
                    symbol: "MOP$"
                },
                MUR: {
                    name: "Mauritian Rupee",
                    symbol: "₨"
                },
                MWK: {
                    name: "Malawian Kwacha",
                    symbol: "MK"
                },
                MXN: {
                    name: "Mexican Peso",
                    symbol: "$"
                },
                MYR: {
                    name: "Malaysian Ringgit",
                    symbol: "RM"
                },
                NGN: {
                    name: "Nigerian Naira",
                    symbol: "₦"
                },
                NOK: {
                    name: "Norwegian Krone",
                    symbol: "kr"
                },
                NZD: {
                    name: "New Zealand Dollar",
                    symbol: "$"
                },
                OMR: {
                    name: "Omani Rial",
                    symbol: "ر.ع."
                },
                PAB: {
                    name: "Panamanian Balboa",
                    symbol: "B/."
                },
                PEN: {
                    name: "Peruvian Nuevo Sol",
                    symbol: "S/."
                },
                PHP: {
                    name: "Philippine Peso",
                    symbol: "₱"
                },
                PLN: {
                    name: "Polish Złoty",
                    symbol: "zł"
                },
                PYG: {
                    name: "Paraguayan Guarani",
                    symbol: "₲"
                },
                QAR: {
                    name: "Qatari Riyal",
                    symbol: "ر.ق"
                },
                RUB: {
                    name: "Russian Ruble",
                    symbol: "₽"
                },
                RWF: {
                    name: "Rwandan Franc",
                    symbol: "FRw"
                },
                SAR: {
                    name: "Saudi Riyal",
                    symbol: "ر.س"
                },
                SDD: {
                    name: "Sudanese Dinar",
                    symbol: "ج.س."
                },
                SEK: {
                    name: "Swedish Krona",
                    symbol: "kr"
                },
                SGD: {
                    name: "Singapore Dollar",
                    symbol: "$"
                },
                SLL: {
                    name: "Sierra Leonean Leone",
                    symbol: "Le"
                },
                SYP: {
                    name: "Syrian Pound",
                    symbol: "£S"
                },
                THB: {
                    name: "Thai Baht",
                    symbol: "฿"
                },
                TND: {
                    name: "Tunisian Dinar",
                    symbol: "د.ت"
                },
                TRY: {
                    name: "Turkish Lira",
                    symbol: "₺"
                },
                TWD: {
                    name: "New Taiwan Dollar",
                    symbol: "NT$"
                },
                TZS: {
                    name: "Tanzanian Shilling",
                    symbol: "TSh"
                },
                UGX: {
                    name: "Ugandan Shilling",
                    symbol: "USh"
                },
                USD: {
                    name: "United States Dollar",
                    symbol: "$"
                },
                VEF: {
                    name: "Venezuelan Bolívar",
                    symbol: "Bs"
                },
                VND: {
                    name: "Vietnamese Dong",
                    symbol: "₫"
                },
                XAF: {
                    name: "Central African CFA Franc",
                    symbol: "FCFA"
                },
            };

            function getOptions(data) {
                return Object.entries(data)
                    .map(([country, currency]) => `<option value="${country}">${country} | ${currency.name}</option>`)
                    .join("");
            }

            function CheckNumeric() {
                return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
            }

            function FormatCurrency(ctrl) {

                if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
                    return;
                }

                var val = ctrl.value;

                val = val.replace(/,/g, "");
                ctrl.value = "";
                val += '';
                x = val.split('.');
                x1 = x[0];
                x2 = x.length > 1 ? '.' + x[1] : '';

                var rgx = /(\d+)(\d{3})/;

                while (rgx.test(x1)) {
                    x1 = x1.replace(rgx, '$1' + ',' + '$2');
                }

                ctrl.value = x1 + x2;

            }




            let currencySymbol = "$"; // Set the default currency symbol
            const currencyDropdown = document.getElementById('currency');
            currencyDropdown.innerHTML = getOptions(currencies);
            console.log("Working: ", currencySymbol)



            // Set the selected Currency as USD and update the currency symbol
            currencyDropdown.value = "USD";
            currencySymbol = currencies[currencyDropdown.value].symbol;
            // Set the selected Currency as USD
            // document.querySelector(`#currency option[value="USD"]`).selected = true;

            const donationAmountInput = document.getElementById('donation_amount');
            const donationCurrencySymbol = document.getElementById('donation_currency_symbol');
            donationCurrencySymbol.innerText = currencySymbol;


            currencyDropdown.addEventListener("change", function() {
                currencySymbol = currencies[currencyDropdown.value].symbol;
                donationCurrencySymbol.innerText = currencySymbol;
            });

            donationAmountInput.addEventListener("keyup", function() {
                FormatCurrency(this)
            });
        </script>
    @endpush

</x-app-layout>
