<?php include( 'common/header.php' ); ?>

<main>
    <div class="max-w-4xl mx-auto prose mb-16">
        <div class="container py-6">
            <div class="w-full">
                <section>
                    <div class="container  not-prose">
                        <form action="/pay" class="w-100 p-4 rounded bg-white shadow-lg" id="customPaymentForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"></div>        <div class="grid grid-cols-2 gap-4 mt-5 mb-5">

                                <h4 class="text-2xl font-bold text-primary-900 col-span-2">
                                    Participant Details
                                </h4>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Email
                                    </label>
                                    <input name="data[HdfcPayment][email]" class="paymentForm email volunteerEmail form-input px-4 py-3 rounded-lg text-primary-900" data-message="Please Email Your Email ID" v-model="email" maxlength="100" type="email" id="HdfcPaymentEmail">            </div>


                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Country of Residence *
                                    </label>
                                    <select name="data[HdfcPayment][countryUser]" id="userCountryElement" class="form-input px-4 py-3 rounded-lg text-primary-900 custom-select paymentForm" v-model="countryUser" data-message="Please Select Country">
                                        <option value="">----</option>
                                        <optgroup label="-----">
                                            <option value="177" data-gdpr="0">Australia</option>
                                            <option value="117" data-gdpr="1">Germany</option>
                                            <option value="72" data-gdpr="0">Japan</option>
                                            <option value="131" data-gdpr="1">Netherlands</option>
                                            <option value="99" data-gdpr="1">Spain</option>
                                            <option value="142" data-gdpr="1">United Kingdom</option>
                                            <option value="149" data-gdpr="0">United States</option>
                                        </optgroup>
                                        <optgroup label="--All Countries--">
                                            <option value="100" data-gdpr="1">Albania</option>
                                            <option value="11" data-gdpr="0">Algeria</option>
                                            <option value="101" data-gdpr="1">Andorra</option>
                                            <option value="12" data-gdpr="0">Angola</option>
                                            <option value="165" data-gdpr="0">Argentina</option>
                                            <option value="102" data-gdpr="1">Armenia</option>
                                            <option value="103" data-gdpr="1">Austria</option>
                                            <option value="104" data-gdpr="1">Azerbaijan</option>
                                            <option value="150" data-gdpr="0">Bahamas</option>
                                            <option value="63" data-gdpr="0">Bahrain</option>
                                            <option value="68" data-gdpr="0">Bali</option>
                                            <option value="53" data-gdpr="0">Bangladesh</option>
                                            <option value="151" data-gdpr="0">Barbados</option>
                                            <option value="105" data-gdpr="1">Belarus</option>
                                            <option value="106" data-gdpr="1">Belgium</option>
                                            <option value="152" data-gdpr="0">Belize</option>
                                            <option value="13" data-gdpr="0">Benin</option>
                                            <option value="205" data-gdpr="0">Bermuda</option>
                                            <option value="64" data-gdpr="0">Bhutan</option>
                                            <option value="166" data-gdpr="0">Bolivia</option>
                                            <option value="107" data-gdpr="1">Bosnia and Herzegovina</option>
                                            <option value="14" data-gdpr="0">Botswana</option>
                                            <option value="167" data-gdpr="0">Brazil</option>
                                            <option value="65" data-gdpr="0">Brunei</option>
                                            <option value="108" data-gdpr="1">Bulgaria</option>
                                            <option value="15" data-gdpr="0">Burkina</option>
                                            <option value="66" data-gdpr="0">Burma Myanmar</option>
                                            <option value="16" data-gdpr="0">Burundi</option>
                                            <option value="54" data-gdpr="0">Cambodia</option>
                                            <option value="17" data-gdpr="0">Cameroon</option>
                                            <option value="153" data-gdpr="0">Canada</option>
                                            <option value="18" data-gdpr="0">Cape Verde</option>
                                            <option value="19" data-gdpr="0">Central African Republic</option>
                                            <option value="168" data-gdpr="0">Chile</option>
                                            <option value="171" data-gdpr="0">Colombia</option>
                                            <option value="20" data-gdpr="0">Comoros</option>
                                            <option value="21" data-gdpr="0">Congo</option>
                                            <option value="52" data-gdpr="0">Congo Dem. Rep.</option>
                                            <option value="144" data-gdpr="0">Costa Rica</option>
                                            <option value="109" data-gdpr="1">Croatia</option>
                                            <option value="154" data-gdpr="0">Cuba</option>
                                            <option value="110" data-gdpr="1">Cyprus</option>
                                            <option value="111" data-gdpr="1">Czech Republic</option>
                                            <option value="112" data-gdpr="1">Denmark</option>
                                            <option value="22" data-gdpr="0">Djibouti</option>
                                            <option value="155" data-gdpr="0">Dominica</option>
                                            <option value="156" data-gdpr="0">Dominican Rep.</option>
                                            <option value="67" data-gdpr="0">East Timor</option>
                                            <option value="169" data-gdpr="0">Ecuador</option>
                                            <option value="23" data-gdpr="0">Egypt</option>
                                            <option value="145" data-gdpr="0">El Salvador</option>
                                            <option value="24" data-gdpr="0">Equatorial Guinea</option>
                                            <option value="25" data-gdpr="0">Eritrea</option>
                                            <option value="113" data-gdpr="1">Estonia</option>
                                            <option value="26" data-gdpr="0">Ethiopia</option>
                                            <option value="188" data-gdpr="0">Fiji</option>
                                            <option value="114" data-gdpr="1">Finland</option>
                                            <option value="115" data-gdpr="1">France</option>
                                            <option value="27" data-gdpr="0">Gabon</option>
                                            <option value="28" data-gdpr="0">Gambia</option>
                                            <option value="116" data-gdpr="1">georgia</option>
                                            <option value="1" data-gdpr="0">Ghana</option>
                                            <option value="97" data-gdpr="1">Greece</option>
                                            <option value="146" data-gdpr="0">Guatemala</option>
                                            <option value="29" data-gdpr="0">Guinea</option>
                                            <option value="30" data-gdpr="0">Guinea Bissau</option>
                                            <option value="172" data-gdpr="0">Guyana</option>
                                            <option value="157" data-gdpr="0">Haiti</option>
                                            <option value="147" data-gdpr="0">Honduras</option>
                                            <option value="197" data-gdpr="0">Hong Kong</option>
                                            <option value="118" data-gdpr="1">Hungary</option>
                                            <option value="119" data-gdpr="1">Iceland</option>
                                            <option value="56" data-gdpr="0">India</option>
                                            <option value="69" data-gdpr="0">Iran</option>
                                            <option value="70" data-gdpr="0">Iraq</option>
                                            <option value="120" data-gdpr="1">Ireland</option>
                                            <option value="71" data-gdpr="0">Israel</option>
                                            <option value="121" data-gdpr="1">Italy</option>
                                            <option value="31" data-gdpr="0">Ivory Coast</option>
                                            <option value="158" data-gdpr="0">Jamaica</option>
                                            <option value="206" data-gdpr="1">Jersey</option>
                                            <option value="73" data-gdpr="0">Jordan</option>
                                            <option value="74" data-gdpr="0">Kazakhstan</option>
                                            <option value="179" data-gdpr="0">Kiribati</option>
                                            <option value="77" data-gdpr="0">Kuwait</option>
                                            <option value="78" data-gdpr="0">Kyrgyzstan</option>
                                            <option value="57" data-gdpr="0">Laos</option>
                                            <option value="122" data-gdpr="1">Latvia</option>
                                            <option value="79" data-gdpr="0">Lebanon</option>
                                            <option value="32" data-gdpr="0">Lesotho</option>
                                            <option value="33" data-gdpr="0">Liberia</option>
                                            <option value="34" data-gdpr="0">Libya</option>
                                            <option value="123" data-gdpr="1">Liechtenstein</option>
                                            <option value="124" data-gdpr="1">Lithuania</option>
                                            <option value="125" data-gdpr="1">Luxembourg</option>
                                            <option value="207" data-gdpr="0">Macao</option>
                                            <option value="126" data-gdpr="1">Macedonia</option>
                                            <option value="3" data-gdpr="0">Madagascar</option>
                                            <option value="4" data-gdpr="0">Malawi</option>
                                            <option value="80" data-gdpr="0">Malaysia</option>
                                            <option value="81" data-gdpr="0">Maldives</option>
                                            <option value="35" data-gdpr="0">Mali</option>
                                            <option value="127" data-gdpr="1">Malta</option>
                                            <option value="180" data-gdpr="0">Marshall Islands</option>
                                            <option value="36" data-gdpr="0">Mauritania</option>
                                            <option value="37" data-gdpr="0">Mauritius</option>
                                            <option value="148" data-gdpr="0">Mexico</option>
                                            <option value="181" data-gdpr="0">Micronesia</option>
                                            <option value="128" data-gdpr="1">Moldova</option>
                                            <option value="129" data-gdpr="1">Monaco</option>
                                            <option value="82" data-gdpr="0">Mongolia</option>
                                            <option value="130" data-gdpr="1">Montenegro</option>
                                            <option value="38" data-gdpr="0">Morocco</option>
                                            <option value="39" data-gdpr="0">Mozambique</option>
                                            <option value="40" data-gdpr="0">Namibia</option>
                                            <option value="182" data-gdpr="0">Nauru</option>
                                            <option value="58" data-gdpr="0">Nepal</option>
                                            <option value="189" data-gdpr="0">New Zealand</option>
                                            <option value="159" data-gdpr="0">Nicaragua</option>
                                            <option value="41" data-gdpr="0">Niger</option>
                                            <option value="76" data-gdpr="0">North Korea</option>
                                            <option value="132" data-gdpr="1">Norway</option>
                                            <option value="83" data-gdpr="0">Oman</option>
                                            <option value="184" data-gdpr="0">Palau</option>
                                            <option value="160" data-gdpr="0">Panama</option>
                                            <option value="185" data-gdpr="0">Papua New Guinea</option>
                                            <option value="173" data-gdpr="0">Paraguay</option>
                                            <option value="170" data-gdpr="0">Peru</option>
                                            <option value="85" data-gdpr="0">Philippines</option>
                                            <option value="133" data-gdpr="1">Poland</option>
                                            <option value="134" data-gdpr="1">Portugal</option>
                                            <option value="200" data-gdpr="0">Puerto Rico</option>
                                            <option value="86" data-gdpr="0">Qatar</option>
                                            <option value="98" data-gdpr="1">Romania</option>
                                            <option value="87" data-gdpr="0">Russian Federation</option>
                                            <option value="43" data-gdpr="0">Rwanda</option>
                                            <option value="186" data-gdpr="0">Samoa</option>
                                            <option value="135" data-gdpr="1">San Marino</option>
                                            <option value="51" data-gdpr="0">Sao Tome and Principe</option>
                                            <option value="88" data-gdpr="0">Saudi Arabia</option>
                                            <option value="5" data-gdpr="0">Senegal</option>
                                            <option value="136" data-gdpr="1">Serbia</option>
                                            <option value="44" data-gdpr="0">Seychelles</option>
                                            <option value="45" data-gdpr="0">Sierra Leone</option>
                                            <option value="89" data-gdpr="0">Singapore</option>
                                            <option value="137" data-gdpr="1">Slovakia</option>
                                            <option value="138" data-gdpr="1">Slovenia</option>
                                            <option value="190" data-gdpr="0">Solomon Islands</option>
                                            <option value="46" data-gdpr="0">Somalia</option>
                                            <option value="6" data-gdpr="0">South Africa</option>
                                            <option value="75" data-gdpr="0">South Korea</option>
                                            <option value="59" data-gdpr="0">Sri Lanka</option>
                                            <option value="162" data-gdpr="0">ST. Lucia</option>
                                            <option value="163" data-gdpr="0">ST. Vincent and The Grenadines</option>
                                            <option value="161" data-gdpr="0">ST.Kitts and Nevis</option>
                                            <option value="47" data-gdpr="0">Sudan</option>
                                            <option value="174" data-gdpr="0">Suriname</option>
                                            <option value="48" data-gdpr="0">Swaziland</option>
                                            <option value="139" data-gdpr="1">Sweden</option>
                                            <option value="140" data-gdpr="1">Switzerland</option>
                                            <option value="90" data-gdpr="0">Syria</option>
                                            <option value="193" data-gdpr="0">Taiwan</option>
                                            <option value="91" data-gdpr="0">Tajikistan</option>
                                            <option value="60" data-gdpr="0">Thailand</option>
                                            <option value="8" data-gdpr="0">Togo</option>
                                            <option value="164" data-gdpr="0">Trinidad and Tobago</option>
                                            <option value="49" data-gdpr="0">Tunisia</option>
                                            <option value="92" data-gdpr="0">Turkey</option>
                                            <option value="93" data-gdpr="0">Turkmenistan</option>
                                            <option value="187" data-gdpr="0">Tuvalu</option>
                                            <option value="141" data-gdpr="1">Ukraine</option>
                                            <option value="94" data-gdpr="0">United Arab Emirates</option>
                                            <option value="175" data-gdpr="0">Uruguay</option>
                                            <option value="95" data-gdpr="0">Uzbekistan</option>
                                            <option value="191" data-gdpr="0">Vanuatu </option>
                                            <option value="143" data-gdpr="1">Vatican City</option>
                                            <option value="176" data-gdpr="0">Venezuela</option>
                                            <option value="61" data-gdpr="0">Vietnam</option>
                                            <option value="96" data-gdpr="0">Yemen</option>
                                            <option value="50" data-gdpr="0">Zambia</option>
                                            <option value="10" data-gdpr="0">Zimbabwe</option>
                                        </optgroup>
                                    </select>            </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        First Name *
                                    </label>
                                    <input name="data[HdfcPayment][fname]" class="form-input px-4 py-3 rounded-lg text-primary-900 form-control paymentForm" data-message="Please Enter Your First Name" v-model="fname" type="text" id="HdfcPaymentFname">            </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Last Name *
                                    </label>
                                    <input name="data[HdfcPayment][lname]" class="form-input px-4 py-3 rounded-lg text-primary-900 form-control paymentForm" data-message="Please Enter Your First Name" v-model="lname" type="text" id="HdfcPaymentLname">            </div>

                                <div class="flex flex-col gap-1 w-full col-span-2">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Payment Note *
                                    </label>
                                    <textarea name="data[HdfcPayment][payment_note]" class="form-textarea border px-4 py-3 rounded-lg text-primary-900 paymentForm" rows="4" style="border-color: rgb(107, 114, 128)" cols="100" data-message="Please Enter Payment Note" v-model="payment_note" id="HdfcPaymentPaymentNote"></textarea>            </div>

                                <h4 class="text-2xl font-bold text-primary-900 mt-8 col-span-2">
                                    Payment Details
                                </h4>
                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Choose Payment Type *
                                    </label>
                                    <select name="payment_type" class="form-input px-4 py-3 rounded-lg text-primary-900 paymentForm" id="payment_type_element" data-message="Please select payment type" v-model="paymentType">
                                        <option value="">---</option>
                                        <option value="application">Application Fee</option>
                                        <option value="final">Program Fee</option>
                                        <option value="insurance">Insurance Payment</option>
                                        <option value="other">Other Payment</option>
                                    </select>
                                </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Project Destination
                                    </label>
                                    <select name="data[HdfcPayment][program_country]" id="projectDestinationElement" class="custom-select form-input px-4 py-3 rounded-lg text-primary-900  paymentForm" data-message="Please select program destination">
                                        <option value="">----</option>
                                        <optgroup label="-Australia">
                                            <option value="364">Gladstone</option>
                                            <option value="3450">Holbrook</option>
                                        </optgroup>
                                        <optgroup label="-Bali">
                                            <option value="3443">Pemuteran</option>
                                            <option value="3444">Serangan</option>
                                            <option value="3442">Tianyar</option>
                                        </optgroup>
                                        <optgroup label="-Cambodia">
                                            <option value="47">Phnom Penh</option>
                                        </optgroup>
                                        <optgroup label="-Costa Rica">
                                            <option value="705">Alajuela</option>
                                            <option value="972">Caribbean Rainforest</option>
                                            <option value="3446">Osa Peninsula</option>
                                            <option value="967">Pacific Coast</option>
                                            <option value="962">Puerto Viejo</option>
                                            <option value="357">Santa Barbara De Heredia</option>
                                            <option value="358">Various</option>
                                        </optgroup>
                                        <optgroup label="-Ecuador">
                                            <option value="343">Puyo</option>
                                            <option value="17">Quito</option>
                                        </optgroup>
                                        <optgroup label="-Ghana">
                                            <option value="491">Accra </option>
                                            <option value="1141">Axim</option>
                                            <option value="34">Tamale</option>
                                        </optgroup>
                                        <optgroup label="-Greece">
                                            <option value="154">Athens</option>
                                            <option value="1212">Thessaloniki </option>
                                        </optgroup>
                                        <optgroup label="-India">
                                            <option value="2">Delhi</option>
                                            <option value="989">Jaipur</option>
                                        </optgroup>
                                        <optgroup label="-Ireland">
                                            <option value="356">Clonmel</option>
                                            <option value="332">Cork</option>
                                        </optgroup>
                                        <optgroup label="-Kenya">
                                            <option value="1">Nairobi</option>
                                        </optgroup>
                                        <optgroup label="-Madagascar">
                                            <option value="360">Nosy Komba Island</option>
                                        </optgroup>
                                        <optgroup label="-Malaysia">
                                            <option value="354">Borneo</option>
                                        </optgroup>
                                        <optgroup label="-Morocco">
                                            <option value="68">Rabat</option>
                                        </optgroup>
                                        <optgroup label="-Nepal">
                                            <option value="40">Kathmandu</option>
                                        </optgroup>
                                        <optgroup label="-New Zealand">
                                            <option value="266">Auckland</option>
                                            <option value="350">Christchurch</option>
                                            <option value="349">Punakaiki</option>
                                            <option value="348">Wellington</option>
                                        </optgroup>
                                        <optgroup label="-Peru">
                                            <option value="13">Cusco</option>
                                        </optgroup>
                                        <optgroup label="-Philippines">
                                            <option value="56">Tacloban</option>
                                        </optgroup>
                                        <optgroup label="-Portugal">
                                            <option value="351">Porto</option>
                                        </optgroup>
                                        <optgroup label="-South Africa">
                                            <option value="50">Cape Town</option>
                                            <option value="66">Port Elizabeth</option>
                                        </optgroup>
                                        <optgroup label="-Spain">
                                            <option value="33">Barcelona</option>
                                        </optgroup>
                                        <optgroup label="-Sri Lanka">
                                            <option value="48">Galle</option>
                                            <option value="100">Kosgoda</option>
                                            <option value="359">Wasgamuwa National Park</option>
                                        </optgroup>
                                        <optgroup label="-Tanzania">
                                            <option value="41">Arusha</option>
                                            <option value="1426">Mtwara</option>
                                            <option value="84">Zanzibar</option>
                                        </optgroup>
                                        <optgroup label="-Thailand">
                                            <option value="6">Bangkok</option>
                                            <option value="5">Chiang Mai</option>
                                            <option value="3445">Phuket</option>
                                        </optgroup>
                                        <optgroup label="-Vietnam">
                                            <option value="46">Hanoi</option>
                                        </optgroup>
                                    </select>            </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Select Currency
                                    </label>
                                    <select name="payment_currency" id="SelectCurrency " class="form-input px-4 py-3 rounded-lg text-primary-900   paymentForm" data-message="Please select program destination">
                                        <option value="1">USD</option>
                                        <option value="2">GBP</option>
                                        <option value="6">AUD</option>
                                        <option value="4">EUR</option>
                                    </select>            </div>

                                <div class="flex flex-col gap-1 w-full">
                                    <label class="uppercase ml-2 text-primary-900">
                                        Amount *
                                    </label>
                                    <input name="data[HdfcPayment][amount]" class="form-input px-4 py-3 rounded-lg text-primary-900  paymentForm" data-message="Please enter amount" id="payment_amount_field" type="number">            </div>


                                <div class="rounded-md bg-primary-50 w-full col-span-2">
                                    <!--<div class="flex">
										<div class="text-md text-yellow-700">
											<p class="p-2">(Please Note: A '% international banking fee is charged at the time of payment)</p>
										</div>
									</div>-->
                                </div>
                                <div class="col-span-2 mt-4">
                                    <!-- <h5 class="text-xl font-bold text-primary-900">
										 Payment Mode
									 </h5>-->

                                    <div class="flex gap-4 w-full">
                                        <div class="flex items-center">
                                            <input style="display: none" id="visa" name="payment_server_id" type="radio" value="1" class="custom-control-input" checked="checked">

                                            <label class="custom-control-label cursor_pointer" for="visa">
                                                <img src="https://www.volunteeringsolutions.com/theme/Vs2018/img/icons/visa.png" alt="visa / master">
                                            </label>

                                            <img src="/theme/Vs2022/img/icons/Stripe_Logo.png" alt="Stripe_Logo" width="55">                    </div>
                                        <!--<div class="flex items-center">
											<input id="paypal" name="payment_server_id" type="radio" value="2"
												   class="custom-control-input">
											<label class="custom-control-label cursor_pointer" for="paypal">
												<img src="https://www.volunteeringsolutions.com/theme/Vs2018/img/icons/paypal.png"
													 alt="paypal"> </label>
										</div>-->
                                    </div>
                                </div>


                                <div class="flex flex-col gap-1 w-full col-span-2 mt-5">
                                    <button class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500 customMakePayment" type="button">
                                        Make a Payment
                                    </button>
                                </div>

                            </div>
                        </form>    </div>
                </section>
                <div id="paymentHideform">

                    <form style="display: none" id="hdfc_payment_form" action="/payments/virtual_payment_gateway" method="post">
                        <input type="text" name="id" value="" class="transaction_id">
                        <input type="text" name="transaction_id" class="transaction_id">

                        <input type="text" name="vpc_Amount" value="" class="hdfc_amount">
                        <input type="text" name="vpc_Version" value="1">
                        <input type="text" name="virtualPaymentClientURL" value="https://migs.mastercard.co.in/vpcpay">
                        <input type="text" name="vpc_AccessCode" value="" class="vpc_AccessCode">
                        <input type="text" name="vpc_Command" value="pay">
                        <input type="text" name="vpc_MerchTxnRef" value="" class="transaction_id">
                        <input type="text" name="vpc_Merchant" value="" class="vpc_Merchant">

                        <input type="text" name="vpc_OrderInfo" value="TR Order info - ">

                        <input type="text" name="vpc_Locale" value="en">
                        <input type="text" name="Title" value="Volunteering Solutions">
                        <input type="text" name="SubButL" value="Pay Now!">
                        <input type="text" name="vpc_TicketNo" value="">
                        <input type="text" name="vpc_TxSourceSubType" value="">
                        <input type="text" name="vpc_ReturnURL" value="" class="notify_url">

                        <input type="submit">

                    </form>


                    <form style="display: none" name="palform" id="paypal_payment_form" action="https://www.paypal.com/cgi-bin/webscr" method="post">
                        <input type="text" name="cmd" value="_xclick">
                        <!-- <input type="text" name="business" id="paypal_businessEmail" v-model="businessEmail" value="payment@volunteeringsolutions.com">-->
                        <input type="text" name="business" value="payment@volunteeringsolutions.com">
                        <input type="text" name="item_name" id="vpc_OrderInfo" value="VolunteeringSolutions.com - ">
                        <input type="text" name="amount" id="paypal_amount" value="">
                        <input type="text" name="page_style" value="VolunteeringSolutions">
                        <input type="text" name="no_shipping" value="1">
                        <input type="text" name="return" value="https://www.volunteeringsolutions.com/thanks">
                        <input type="text" name="cancel_return" value="https://www.volunteeringsolutions.com/cancel">
                        <input type="text" name="currency_code" value="" id="paypal_currency_code">
                        <input type="text" name="lc" value="US">
                        <input type="text" name="bn" value="PP-BuyNowBF">
                        <input type="text" name="notify_url" id="paypal_notify_url">
                        <input type="text" name="image_url" value="https://www.volunteeringsolutions.com/img/logo/vs-logo.png">
                        <input type="submit">
                    </form>

                    <script src="https://js.stripe.com/v3/"></script>

                </div>
            </div>
        </div>
    </div>
</main>


<?php include( 'common/footer.php' ); ?>
<script src="assets/js/custom.js"></script>
<?php include( 'common/page-end.php' ); ?>

