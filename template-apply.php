<?php include( 'common/header-blank.php' ); ?>
<main class="flex-row flex gap-5 xl:max-w-[1500px] mx-auto pb-32">
    <div class="w-full lg:w-8/12 xl:w-9/12 px-5 lg:px-10">
        <section class="py-3  hidden lg:block">
            <div class="w-full">
                <nav class="_apply-now-steps-navbar" aria-label="Progress">
                    <ol role="list" class="overflow-hidden rounded-md lg:flex lg:rounded-none gap-5">
                        <li class="relative overflow-hidden lg:flex-1 nav-card done">
                            <div class="overflow-hidden rounded-t-md border border-b-0 border-gray-200 lg:border-0">
                                 <span class="_border-bottom-nav"
                                       aria-hidden="true"></span>
                                <div class="flex items-center justify-start px-6 py-5 text-sm font-medium">
                                    <span class="flex-shrink-0">
                                        <i class="bi bi-1-circle"></i>
                                    </span>
                                    <span class="ml-4 mt-0.5 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium">Login/Register</span>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="relative overflow-hidden lg:flex-1 nav-card done">
                            <div class="overflow-hidden rounded-t-md border border-b-0 border-gray-200 lg:border-0">
                                 <span class="_border-bottom-nav"
                                       aria-hidden="true"></span>
                                <div class="flex items-center justify-start px-6 py-5 text-sm font-medium">
                                    <span class="flex-shrink-0">
                                        <i class="bi bi-2-circle"></i>
                                    </span>
                                    <span class="ml-4 mt-0.5 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium">Projects</span>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="relative overflow-hidden lg:flex-1 nav-card active">
                            <div class="overflow-hidden rounded-t-md border border-b-0 border-gray-200 lg:border-0">
                                 <span class="_border-bottom-nav"
                                       aria-hidden="true"></span>
                                <div class="flex items-center justify-start px-6 py-5 text-sm font-medium">
                                    <span class="flex-shrink-0">
                                        <i class="bi bi-3-circle"></i>
                                    </span>
                                    <span class="ml-4 mt-0.5 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium">Personal Information</span>
                                    </span>
                                </div>
                            </div>
                        </li>
                        <li class="relative overflow-hidden lg:flex-1 nav-card">
                            <div class="overflow-hidden rounded-t-md border border-b-0 border-gray-200 lg:border-0">
                                 <span class="_border-bottom-nav"
                                       aria-hidden="true"></span>
                                <div class="flex items-center justify-start px-6 py-5 text-sm font-medium">
                                    <span class="flex-shrink-0">
                                        <i class="bi bi-4-circle"></i>
                                    </span>
                                    <span class="ml-4 mt-0.5 flex min-w-0 flex-col">
                                        <span class="text-sm font-medium">Payment</span>
                                    </span>
                                </div>
                            </div>
                        </li>
                    </ol>
                </nav>

            </div>
        </section>
        <section class="py-3 hidden" js-section="step1">
            <div class="w-full space-y-10">
                <form js-section="login" class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Log in
                        </h3>
                        <p>
                            Welcome back!
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Email
                            </label>
                            <input required="" name="email" id="email_field" type="email"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Password
                            </label>
                            <input required="" name="password" type="password"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button
                                class="min-w-[200px] bg-primary-600 p-3 text-white rounded uppercase font-semibold hover:shadow-lg transition-all">
                            Log In
                        </button>
                        <P>I'd like to <a href="#" class="text-primary-600 underline">Create an account</a></P>
                    </div>
                </form>
                <form js-section="register"
                      class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Create account
                        </h3>
                        <p>
                            Choose your login info to sign up for your Volunteering Solutions My Account. After choosing
                            the
                            login info proceed to the next step to complete the application form.
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                First Name
                            </label>
                            <input required="" name="first_name" id="first_name_field" type="text"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Last Name
                            </label>
                            <input required="" name="last_name" id="last_name_field" type="text"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Email
                            </label>
                            <input required="" name="email" id="email_field" type="email"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                            <span class="text-xs">This email would be your Login Id for MyAccount</span>
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Password
                            </label>
                            <input required="" name="password" type="password"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button
                                class="min-w-[200px] bg-primary-600 p-3 text-white rounded uppercase font-semibold hover:shadow-lg transition-all">
                            Create account
                        </button>
                        <P>Already have an account? <a href="#" class="text-primary-600 underline">Log in here</a></P>
                    </div>
                </form>
                <form js-section="ForgotPassword"
                      class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Forgot Password
                        </h3>
                        <p>
                            When you click 'Send', we'll send you an email with a link to reset your password
                        </p>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Email
                            </label>
                            <input required="" name="email" id="email_field" type="email"
                                   class="form-input px-4 py-2 rounded-lg text-primary-900">
                            <span class="text-xs">Please enter your email address below. Your password will be sent to your Email-ID shortly.</span>
                        </div>
                    </div>

                    <div class="space-y-3">
                        <button
                                class="min-w-[200px] bg-primary-600 p-3 text-white rounded uppercase font-semibold hover:shadow-lg transition-all">
                            Send
                        </button>
                        <P>Go back to <a href="#" class="text-primary-600 underline">Log in</a></P>
                    </div>
                </form>
            </div>
        </section>
        <section class="py-3 " js-section="step2">
            <div class="w-full space-y-10">
                <form class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Choose Your Program(s)
                        </h3>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-y-5">
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Select<br class="lg:hidden"> Destination *
                            </label>
                            <select name="data[ApplicationList][1][Application][project_country]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900 custom-select projectField destinationField projectField_1"
                                    id="project_country_1" data-count="1"
                                    data-message="Please Select Program Destination">
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
                                    <option value="491">Accra</option>
                                    <option value="1141">Axim</option>
                                    <option value="34">Tamale</option>
                                </optgroup>
                                <optgroup label="-Greece">
                                    <option value="154">Athens</option>
                                    <option value="1212">Thessaloniki</option>
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
                                <optgroup label="-Uganda">
                                    <option value="3448">Mukono Region</option>
                                </optgroup>
                                <optgroup label="-Vietnam">
                                    <option value="46">Hanoi</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Select<br class="lg:hidden"> Project *
                            </label>

                            <select name="data[ApplicationList][1][Application][project_name]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900 project_name projectField custom-select projectField_1"
                                    data-current-element-number="1" data-message="Please Select Program" data-count="1"
                                    id="project_name_1">
                                <option value=""></option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Select Date
                            </label>
                            <select name="data[ApplicationList][Application][Date]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                <option value="">---</option>
                                <option value="">7/July/2024</option>
                            </select>
                        </div>
                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Select Duration
                            </label>
                            <select name="data[ApplicationList][Application][Date]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                <option value="">---</option>
                                <option value="">1 Week</option>
                            </select>
                        </div>
                        <div class="flex flex-col lg:col-span-2 gap-1 w-full">
                            <button type="button" class="flex underline items-center text-sm">
                                <div class="text-primary-600 flex items-center gap-1 cursor-pointer">
                                    + Add Another Program
                                </div>
                            </button>
                        </div>

                        <div class="flex flex-col gap-1 w-full">
                            <label class="font-medium text-sm text-primary-900">
                                Participants
                            </label>
                            <select name="data[ApplicationList][participants]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900"
                                    id="participants">
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                    </div>
                    <div class="space-y-3 lg:col-span-2 pt-10 lg:pt-20">
                        <div class="flex justify-between w-full lg:col-span-2 space-x-16 font-semibold">
                            <div
                                    class="border-primary-600  border-2  flex items-center justify-center p-3 text-primary-600  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                <span class="lg:hidden">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                            </svg>
                                </span>
                                <span class="hidden lg:block">Previous Step</span>

                            </div>
                            <div
                                    class="bg-primary-600 flex items-center justify-center p-3 text-white  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                Next Step
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="py-3 " js-section="step3">
            <div class="w-full space-y-10">
                <form class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Personal Information
                        </h3>
                        <p>Please enter the following details below to continue with your application</p>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <h4 class="_heading-lg">
                                Lead Participant
                            </h4>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1 w-full">
                                <label class="font-medium text-sm text-primary-900">
                                    Phone Number *
                                </label>
                                <input name="data[Personal][phone]" data-message="Please Enter Your Phone Number"
                                       maxlength="22" type="tel" id="PersonalPhone"
                                       class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    Gender *
                                </label> <select name="data[Personal][gender]" data-message="Please Select Your Gender"
                                                 id="PersonalGender"
                                                 class="personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                    <option value="">----</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select></div>
                            <div class="flex flex-col gap-1 w-full lg:col-span-2"><label
                                        class="font-medium text-sm text-primary-900">
                                    Date of Birth *
                                </label>
                                <div class="flex gap-4"><select name="data[Personal][dob][day]"
                                                                data-message="Please Select Your Date Of Birth [ Day ]"
                                                                id="PersonalDobDay"
                                                                class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Day</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                    </select><select name="data[Personal][dob][month]"
                                                     data-message="Please Select Your Date Of Birth [ Month ]"
                                                     id="PersonalDobMonth"
                                                     class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Month</option>
                                        <option value="01">January</option>
                                    </select><select name="data[Personal][dob][year]" id="dateOfBrith_YearYear"
                                                     data-message="Please Select Your Date Of Birth [ Year ]"
                                                     class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Year</option>
                                        <option value="2023">2023</option>
                                    </select></div>
                            </div>
                            <div class="flex flex-col gap-1 w-full lg:col-span-2"><label
                                        class="font-medium text-sm text-primary-900">
                                    Address *
                                </label> <textarea name="data[Personal][address]"
                                                   data-message="Please Enter Your Address"
                                                   rows="2" cols="100" id="PersonalAddress"
                                                   class="form-control personalRequired form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                                   style="border-color: rgb(107, 114, 128);"></textarea></div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    Town or City*
                                </label> <input name="data[Personal][city]"
                                                data-message="Please Enter Your Town or City"
                                                maxlength="22" type="text" id="PersonalCity"
                                                class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    State *
                                </label> <input name="data[Personal][state]" data-message="Please Enter Your State"
                                                maxlength="22" type="text" id="PersonalState"
                                                class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    Country *
                                </label> <select name="data[Personal][country_id]"
                                                 data-message="Please Select Your Country"
                                                 id="PersonalCountryId"
                                                 class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                                    <option value="">----</option>
                                    <optgroup label="-----">
                                        <option value="177" data-gdpr="0">Australia</option>
                                    </optgroup>
                                    <optgroup label="--All Countries--">
                                        <option value="100" data-gdpr="1">Albania</option>
                                        <option value="11" data-gdpr="0">Algeria</option>
                                    </optgroup>
                                </select></div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    Zip Code *
                                </label> <input name="data[Personal][zip]" data-message="Please Enter Your Zip Code"
                                                maxlength="15" type="text" id="PersonalZip"
                                                class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full lg:col-span-2"><label
                                        class="font-medium text-sm text-primary-900">
                                    Any comment / Special Requirements
                                </label>
                                <textarea name="data[Personal][comments]" cols="100" rows="2" id="PersonalComments"
                                          class="form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                          style="border-color: rgb(107, 114, 128);"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <h4 class="_heading-lg">
                                Participant 2
                            </h4>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                            <div class="flex flex-col gap-1 w-full">
                                <label class="font-medium text-sm text-primary-900">
                                    First Name *
                                </label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label class="font-medium text-sm text-primary-900">
                                    Last Name *
                                </label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label class="font-medium text-sm text-primary-900">
                                    Email *
                                </label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label class="font-medium text-sm text-primary-900">
                                    Phone Number
                                </label>
                                <input name="data[Personal][phone]" data-message="Please Enter Your Phone Number"
                                       maxlength="22" type="tel" id="PersonalPhone"
                                       class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                            </div>
                            <div class="flex flex-col gap-1 w-full"><label class="font-medium text-sm text-primary-900">
                                    Gender *
                                </label> <select name="data[Personal][gender]" data-message="Please Select Your Gender"
                                                 id="PersonalGender"
                                                 class="personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                    <option value="">----</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-1 w-full"><label
                                        class="font-medium text-sm text-primary-900">
                                    Date of Birth *
                                </label>
                                <div class="flex gap-4"><select name="data[Personal][dob][day]"
                                                                data-message="Please Select Your Date Of Birth [ Day ]"
                                                                id="PersonalDobDay"
                                                                class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Day</option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                    </select><select name="data[Personal][dob][month]"
                                                     data-message="Please Select Your Date Of Birth [ Month ]"
                                                     id="PersonalDobMonth"
                                                     class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Month</option>
                                        <option value="01">January</option>
                                    </select><select name="data[Personal][dob][year]" id="dateOfBrith_YearYear"
                                                     data-message="Please Select Your Date Of Birth [ Year ]"
                                                     class="custom-select personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">Year</option>
                                        <option value="2023">2023</option>
                                    </select></div>
                            </div>


                            <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                <label class="font-medium text-gray-900">Is your address the same as the lead
                                    participant's?</label>
                                <div class="flex sm:items-center gap-5 select-none">
                                    <div class="flex items-center">
                                        <input id="yes" name="same-address" type="radio" checked
                                               class="h-4 w-4 border-gray-300 text-primary-600 focus:ring-primary-600">
                                        <label for="yes" class="ml-3 block text-sm font-medium leading-6 text-gray-900">Yes</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="no" name="same-address" type="radio"
                                               class="h-4 w-4 border-gray-300 text-primary-600 focus:ring-primary-600">
                                        <label for="no" class="ml-3 block text-sm font-medium leading-6 text-gray-900">No</label>
                                    </div>
                                </div>
                            </div>

                            <div class="hidden lg:col-span-2 grid grid-cols-1 lg:grid-cols-2 gap-4 lg:gap-y-5">
                                <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                    <label class="font-medium text-sm text-primary-900">
                                        Address *
                                    </label>
                                    <textarea name="data[Personal][address]" data-message="Please Enter Your Address"
                                              rows="2" cols="100" id="PersonalAddress"
                                              class="form-control personalRequired form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                              style="border-color: rgb(107, 114, 128);"></textarea>
                                </div>
                                <div class="flex flex-col gap-1 w-full">

                                    <label class="font-medium text-sm text-primary-900">
                                        Town or City*
                                    </label>
                                    <input name="data[Personal][city]" data-message="Please Enter Your Town or City"
                                           maxlength="22" type="text" id="PersonalCity"
                                           class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                                </div>
                                <div class="flex flex-col gap-1 w-full">
                                    <label class="font-medium text-sm text-primary-900">
                                        State *
                                    </label>
                                    <input name="data[Personal][state]" data-message="Please Enter Your State"
                                           maxlength="22" type="text" id="PersonalState"
                                           class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                                </div>
                                <div class="flex flex-col gap-1 w-full">
                                    <label class="font-medium text-sm text-primary-900">
                                        Country *
                                    </label>
                                    <select name="data[Personal][country_id]" data-message="Please Select Your Country"
                                            id="PersonalCountryId"
                                            class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                                        <option value="">----</option>
                                        <optgroup label="-----">
                                            <option value="177" data-gdpr="0">Australia</option>
                                        </optgroup>
                                        <optgroup label="--All Countries--">
                                            <option value="100" data-gdpr="1">Albania</option>
                                            <option value="11" data-gdpr="0">Algeria</option>
                                        </optgroup>
                                    </select>
                                </div>
                                <div class="flex flex-col gap-1 w-full">
                                    <label class="font-medium text-sm text-primary-900">
                                        Zip Code *
                                    </label>
                                    <input name="data[Personal][zip]" data-message="Please Enter Your Zip Code"
                                           maxlength="15" type="text" id="PersonalZip"
                                           class="personalRequired form-input px-4 py-2 rounded-lg text-primary-900">
                                </div>
                            </div>


                            <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                <label class="font-medium text-sm text-primary-900">
                                    Any comment / Special Requirements
                                </label>
                                <textarea name="data[Personal][comments]" cols="100" rows="2" id="PersonalComments"
                                          class="form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                          style="border-color: rgb(107, 114, 128);"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 mt-8 mb-16" style="">
                        <h4 class="text-2xl font-bold text-primary-900 mt-8 lg:col-span-2">
                            Other Information
                        </h4>

                        <h5 class="font-semibold text-primary-900 mt-4 lg:col-span-2">
                            What language(s) do you speak and what is your level?
                        </h5>

                        <div class="languageOp_2 flex flex-col gap-1 w-full lg:col-span-2 lg:col-span-1">
                            <label class="font-medium text-sm text-primary-900">
                                Level of English
                            </label>

                            <select name="data[VolunteerLanguage][2][language_level]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900"
                                    id="VolunteerLanguage2LanguageLevel">
                                <option value="">LEVEL</option>
                                <option value="1">No Knowledge</option>
                                <option value="2">Beginner Level</option>
                                <option value="3">Intermediate Level</option>
                                <option value="4">Expert/Fluent</option>
                            </select></div>
                        <div></div>
                        <div class="languageOp_3 flex flex-col gap-1 w-full lg:col-span-2 lg:col-span-1" style="">
                            <label class="font-medium text-sm text-primary-900">
                                Level of spanish </label>

                            <select name="data[VolunteerLanguage][3][language_level]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900"
                                    id="VolunteerLanguage3LanguageLevel">
                                <option value="">LEVEL</option>
                                <option value="1">No Knowledge</option>
                                <option value="2">Beginner Level</option>
                                <option value="3">Intermediate Level</option>
                                <option value="4">Expert/Fluent</option>
                            </select></div>
                        <div></div>
                        <div class="languageOp_4 flex flex-col gap-1 w-full lg:col-span-2 lg:col-span-1"
                             style="display:none">
                            <label class="font-medium text-sm text-primary-900">
                                Level of french </label>

                            <select name="data[VolunteerLanguage][4][language_level]"
                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900"
                                    id="VolunteerLanguage4LanguageLevel">
                                <option value="">LEVEL</option>
                                <option value="1">No Knowledge</option>
                                <option value="2">Beginner Level</option>
                                <option value="3">Intermediate Level</option>
                                <option value="4">Expert/Fluent</option>
                            </select></div>


                        <div class="lg:col-span-2 mt-4">
                            <h5 class="font-semibold text-primary-900">
                                Are you planning to volunteer with someone else? *
                            </h5>

                            <div class="flex gap-4 w-full">
                                <div>

                                    <input type="radio" name="travel_with_friend" value="no">
                                    No Thanks
                                </div>
                                <div>
                                    <input type="radio" name="travel_with_friend" value="yes">
                                    Yes
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full lg:col-span-2 mt-4" style="display: none;">
                                <label class="font-medium text-sm text-primary-900">
                                    Who are you Volunteering with?
                                </label>

                                <input name="data[Personal][friend_name]"
                                       class="form-control form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                       id="travelWithFriend_field" style="border-color: rgb(107, 114, 128)" type="text">
                            </div>
                        </div>


                        <div class="lg:col-span-2 mt-4">
                            <h5 class="font-semibold text-primary-900">
                                Special Dietary Requirements? *
                            </h5>

                            <div class="flex gap-4 w-full">
                                <div>
                                    <input type="radio" value="no">
                                    No Thanks
                                </div>
                                <div>
                                    <input type="radio" name="travel_with_friend" value="yes">
                                    Yes
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full lg:col-span-2 mt-4" style="display: none;">
                                <label class="font-medium text-sm text-primary-900">
                                    Please detail:
                                </label>

                                <textarea name="data[Personal][special_requirement]" rows="4" cols="100"
                                          class="form-control form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                          id="specialRequirement_field"
                                          style="border-color: rgb(107, 114, 128)"></textarea></div>
                        </div>


                        <h5 class="font-semibold text-primary-900 mt-4 lg:col-span-2">
                            Would you be interested in booking the Diploma in International Volunteering?
                        </h5>

                        <div class="flex gap-4 w-full">
                            <div>
                                <input type="radio" id="radio2" name="radio2" value="">
                                No Thanks
                            </div>
                            <div>
                                <input type="radio" id="radio2" name="radio2" value="">
                                Yes
                            </div>
                        </div>


                        <div class="lg:col-span-2 mt-4">
                            <h5 class="font-semibold text-primary-900">
                                Are you suffering from any Medical Conditions? *
                            </h5>

                            <div class="flex gap-4 w-full">
                                <div>
                                    <input type="radio" name="radio3" value="">
                                    No Thanks
                                </div>
                                <div>
                                    <input type="radio" name="radio3" value="">
                                    Yes
                                </div>
                            </div>

                            <div class="flex flex-col gap-1 w-full lg:col-span-2 mt-4" style="display: none;">
                                <label class="font-medium text-sm text-primary-900">
                                    Please detail:
                                </label>

                                <textarea name="data[Personal][medical_condition]" rows="4" cols="100"
                                          class="form-control form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                          id="medicalConditions_field"
                                          style="border-color: rgb(107, 114, 128)"></textarea></div>
                        </div>


                        <div class="flex flex-col gap-1 w-full mt-8 lg:col-span-2 ">
                            <label class="font-medium text-sm text-primary-900">
                                How did you hear about us? *
                            </label>

                            <select name="data[Personal][aboutus]"
                                    data-message="Please Select How did you hear about us"
                                    class="personalRequired form-select w-full px-4 py-2 rounded-lg text-primary-900"
                                    id="PersonalAboutus">
                                <option value="">----</option>
                                <option value="Google">Google</option>
                                <option value="GoAbroad.com">GoAbroad.com</option>
                                <option value="Go Overseas">Go Overseas</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Instagram">Instagram</option>
                                <option value="VolunteerForever.com">VolunteerForever.com</option>
                                <option value="Others">Others</option>
                            </select></div>

                        <div class="flex flex-col gap-1 w-full lg:col-span-2">
                            <label class="font-medium text-sm text-primary-900">
                                Describe your motivation to join the program
                            </label>

                            <textarea name="data[Personal][motivation]" rows="2" cols="100"
                                      class="form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                      id="motivation_field" style="border-color: rgb(107, 114, 128)"></textarea></div>

                        <div class="flex flex-col gap-1 w-full lg:col-span-2">
                            <label class="font-medium text-sm text-primary-900">
                                Any comment / Special Requirements
                            </label>

                            <textarea name="data[Personal][comments]" rows="2" cols="100"
                                      class="form-textarea border px-4 py-3 rounded-lg text-primary-900"
                                      style="border-color: rgb(107, 114, 128)" rows="6"
                                      id="PersonalComments"></textarea></div>

                    </div>
                    <div class="space-y-3 lg:col-span-2 pt-10 lg:pt-20">
                        <div class="flex justify-between w-full lg:col-span-2 space-x-16 font-semibold">
                            <div
                                    class="border-primary-600  border-2  flex items-center justify-center p-3 text-primary-600  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                <span class="lg:hidden">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                            </svg>
                                </span>
                                <span class="hidden lg:block">Previous Step</span>

                            </div>
                            <div
                                    class="bg-primary-600 flex items-center justify-center p-3 text-white  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                Next Step
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <section class="py-3 " js-section="step4">
            <div class="w-full space-y-10">
                <form class="p-5 lg:p-10 shadow border-2 border-primary-600 rounded-2xl space-y-5">
                    <div>
                        <h3 class="_heading-2xl">
                            Payment
                        </h3>
                    </div>
                    <div class="space-y-5">
                        <div>
                            <h4 class="_heading-lg">
                                Extra add-ons for your VOLSOL trip
                            </h4>
                            <div class="flex gap-8 text-sm">
                                <div class="flex items-center gap-2">
                                    <div class="h-3 w-3 rounded-full bg-primary-200"></div>
                                    <p>Payment Before You Depart</p>
                                </div>
                                <div class="flex items-center gap-2">
                                    <div class="h-3 w-3 rounded-full bg-orange-200"></div>
                                    <p>Payment Once You Arrive</p>
                                </div>
                            </div>
                        </div>
                        <div class=" grid grid-cols-1 gap-4 lg:gap-y-5">
                            <div class="flex flex-col gap-1 w-full">
                                <label
                                        class="group space-y-5 relative gap-3 block cursor-pointer rounded-lg border border-gray-300 bg-primary-50 px-6 py-4 shadow-sm focus:outline-none data-[focus]:border-primary-600 data-[focus]:ring-2 data-[focus]:ring-primary-600">
                                    <div class="md:flex justify-between gap-3">
                                        <div class="w-16">
                                            <select name="" id=""
                                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                                <option value="">0</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-sm">2 Week VOLSOL Travel Insurance Policy</h4>
                                            <span class="text-[12px] underline">see more here</span>
                                        </div>
                                        <span class="mt-2 flex sm:ml-4 sm:mt-0 sm:flex-col sm:text-right">
                                        <span class="font-bold">$80</span>
                                        <span class="ml-1 text-sm text-gray-500 sm:ml-0">/per person</span>
                                    </span>
                                    </div>
                                    <div class="text-[12px]">
                                        <h3 class="font-bold"> Additional Details</h3>
                                        <p>
                                            VOLSOL provides participants with the opportunity to contribute towards our
                                            Triple
                                            Carbon Offset Scheme. This not only helps eliminate your carbon footprint
                                            but
                                            also helps the planet with a positive contribution every time you fly. The
                                            Triple Offset Idea for volunteers in Bali works as follows. 66 mango trees
                                            are
                                            planted in Kenya.
                                        </p>
                                    </div>
                                </label>
                            </div>
                            <div class="flex flex-col gap-1 w-full">
                                <label
                                        class="group space-y-5 relative gap-3 block cursor-pointer rounded-lg border border-gray-300  bg-orange-50 px-6 py-4 shadow-sm focus:outline-none data-[focus]:border-primary-600 data-[focus]:ring-2 data-[focus]:ring-primary-600">
                                    <div class="md:flex justify-between gap-3">
                                        <div class="w-16">
                                            <select name="" id=""
                                                    class="form-select w-full px-4 py-2 rounded-lg text-primary-900">
                                                <option value="">0</option>
                                                <option value="">1</option>
                                                <option value="">2</option>
                                            </select>
                                        </div>
                                        <div class="flex-1">
                                            <h4 class="font-bold text-sm">Bali Ubud Weekend Trip - 23 Aug - 25 Aug</h4>
                                            <span class="text-[12px] underline">see more here</span>
                                        </div>
                                        <span class="mt-2 flex sm:ml-4 sm:mt-0 sm:flex-col sm:text-right">
                                        <span class="font-bold">$270</span>
                                        <span class="ml-1 text-sm text-gray-500 sm:ml-0">/per person</span>
                                    </span>
                                    </div>
                                    <div class="text-[12px]" style="display:none">
                                        <h3 class="font-bold"> Additional Details</h3>
                                        <p>
                                            VOLSOL provides participants with the opportunity to contribute towards our
                                            Triple
                                            Carbon Offset Scheme. This not only helps eliminate your carbon footprint
                                            but
                                            also helps the planet with a positive contribution every time you fly. The
                                            Triple Offset Idea for volunteers in Bali works as follows. 66 mango trees
                                            are
                                            planted in Kenya.
                                        </p>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-5 pt-6">
                        <div>
                            <h4 class="_heading-lg">
                                Checkout Trip
                            </h4>
                        </div>
                        <div class=" grid grid-cols-1 max-w-lg gap-4 lg:gap-y-5">
                            <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                <label for="" class="font-medium text-sm text-primary-900">Select Currency *</label>
                                <select name="paymentCurrency"
                                        class="max-w-56 form-select w-full px-4 py-2 rounded-lg text-primary-900 personalRequired"
                                        id="PersonalPaymentCurrency">
                                    <option value="1">USD</option>
                                    <option value="2">GBP</option>
                                    <option value="6">AUD</option>
                                    <option value="4">EUR</option>
                                </select>
                            </div>
                            <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                <label for="" class="font-medium text-sm text-primary-900">I have a Discount
                                    Code</label>
                                <div class="flex gap-3">
                                    <input type="text" class="form-input w-full px-4 py-2 rounded-lg text-primary-900">
                                    <button type="button"
                                            class="border-2 border-gray-600 text-sm px-4  font-semibold py-2 rounded-lg whitespace-nowrap getDiscount">
                                        Apply Coupon
                                    </button>
                                </div>
                            </div>
                            <div class="flex flex-col gap-1 w-full lg:col-span-2">
                                <label for="" class="font-medium text-sm text-primary-900">Payment Mode</label>
                                <div class="space-y-4 sm:flex sm:items-center sm:space-x-10 sm:space-y-0">
                                    <div class="flex items-center">
                                        <input id="credit-card" id="visa" name="payment_server_id" type="radio"
                                               value="1" type="radio" checked=""
                                               class="h-4 w-4 border-gray-300 text-primary-600 focus:ring-primary-500">
                                        <label for="credit-card"
                                               class="ml-3 block text-sm font-medium text-gray-700 flex gap-2">
                                            <img src="https://www.volunteeringsolutions.com/theme/Vs2022/img/icons/visa.png"
                                                 alt="visa / master">
                                            <img src="https://www.volunteeringsolutions.com/theme/Vs2022/img/icons/Stripe_Logo.png"
                                                 alt="Stripe_Logo" width="55">
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:col-span-2">
                                <dl class="mt-10 space-y-2 text-sm font-medium bg-primary-600 p-3 rounded-lg text-white">
                                    <div class="flex justify-between">
                                        <dt>Program Fee</dt>
                                        <dd class="text-primary-50">435 USD x 1</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt class="flex">
                                            Add-ons
                                        </dt>
                                        <dd class="text-primary-50">105 USD</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt>Application Fee</dt>
                                        <dd class="text-primary-50">249 USD x 1</dd>
                                    </div>
                                    <div class="flex justify-between">
                                        <dt>Discount</dt>
                                        <dd class="text-primary-50">-$20</dd>
                                    </div>
                                    <div
                                            class="flex items-center justify-between border-t border-gray-200 pt-3 text-primary-50">
                                        <dt>Total</dt>
                                        <dd class="text-primary-50">$789</dd>
                                    </div>
                                    <div
                                            class="flex text-xl items-center justify-between border-t border-gray-200 pt-6 text-primary-50">
                                        <dt>Payable Amount</dt>
                                        <dd>$789</dd>
                                    </div>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="space-y-5">
                        <div class="flex flex-col gap-1 w-full lg:col-span-2">
                            <div class="relative flex items-start">
                                <div class="flex h-6 items-center">
                                    <input id="agree" name="agree" type="checkbox"
                                           class="h-4 w-4 rounded border-gray-300 text-primary-600 focus:ring-primary-600">
                                </div>
                                <div class="ml-3 text-sm leading-6">
                                    <label for="agree" class="font-medium text-gray-900">
                                        I have read and agree to the Volunteering Solutions legal <a href="#"
                                                                                                     class="text-primary-600 underline">terms
                                            and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-1 w-full lg:col-span-2">
                            <div class="relative flex items-start max-w-lg gap-3">
                                <figure class="flex-shrink-0">
                                    <img src="https://www.volunteeringsolutions.com/img/onetreeplanted_key-logo_long_white-2.jpeg"
                                         alt="onetreeplanted"
                                         class="col-start-2 col-end-3 h-14 w-14 object-cover object-center">
                                </figure>
                                <div class="min-w-0 flex-1 lg:flex lg:flex-col font-medium text-gray-900">
                                    We partner with 'One Tree Planted' to plant at least one tree for every participant
                                    booking
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="space-y-3 lg:col-span-2 pt-10 lg:pt-20">
                        <div class="flex justify-between w-full lg:col-span-2 space-x-16 font-semibold">
                            <div
                                    class="border-primary-600  border-2  flex items-center justify-center p-3 text-primary-600  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                <span class="lg:hidden">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8"/>
                            </svg>
                                </span>
                                <span class="hidden lg:block">Previous Step</span>

                            </div>
                            <div
                                    class="bg-primary-600 flex items-center justify-center p-3 text-white  rounded  uppercase hover:shadow-lg transition-all lg:min-w-[200px] cursor-pointer">
                                Submit
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>
    <div class="w-full lg:w-4/12 xl:w-3/12 hidden lg:block space-y-5 p-3 py-8">
        <div class="bg-primary-50  p-5 rounded-lg space-y-3">
            <h4 class="text-xl font-bold">Your Application</h4>
            <div class="grid grid-cols-1 gap-1">
                <div class="flex items-center gap-1">
                    <i class="bi bi-geo-alt"></i>
                    <span class="text-sm flex gap-2">
						<strong>Lead Applicant :</strong>
						<label id="label_destination_1">Team Volsol</label>
					</span>
                </div>
                <div class="flex items-center gap-1">
                    <i class="bi bi-geo-alt"></i>
                    <span class="text-sm flex gap-2">
						<strong>Applicants :</strong>
						<label id="label_destination_1">2</label>
					</span>
                </div>
                <hr>
                <div class="flex items-center gap-1">
                    <i class="bi bi-geo-alt"></i>
                    <span class="text-sm flex gap-2">
						<strong>Destination:</strong>
						<label id="label_destination_1"> Cusco, Peru</label>
					</span>
                </div>

                <div class="flex items-center gap-1">
                    <i class="bi bi-backpack4"></i>
                    <span class="text-sm flex gap-2">
                        <strong>Project:</strong>
                        <label id="label_project_1">2 Weeks Special Program</label>
					</span>
                </div>

                <div class="flex items-center gap-1">
                    <i class="bi bi-calendar4-event"></i>
                    <span class="text-sm flex gap-2">
						<strong>Start Date:</strong>
						<label id="label_date_1">10/08/18</label>
					</span>
                </div>

                <div class="flex items-center gap-1">
                    <i class="bi bi-clock-history"></i>
                    <span class="text-sm flex gap-2">
						<strong>Duration:</strong>
						<label id="label_project_duration_1">2 weeks</label>
					</span>
                </div>
                <hr>

            </div>
            <div class="aspect-w-4 aspect-h-3 w-full overflow-hidden rounded-xl relative">
                <img class="object-center object-cover transition-all ease-in-out duration-200"
                     src="https://www.volunteeringsolutions.com/asset/uploads/img/block_banner/6_482b4efe_ef33_4c83_a09d_38489ffef4f5.jpg"
                     alt="2 Weeks Special Program" :class="openCTA ? 'scale-110' : ''">
            </div>
            <hr>

            <dl class="mt-10 space-y-2 text-sm font-medium bg-primary-600 p-3 rounded-lg text-white">
                <div class="flex justify-between">
                    <dt>Program Fee</dt>
                    <dd class="text-primary-50">435 USD x 1</dd>
                </div>
                <div class="flex justify-between">
                    <dt class="flex">
                        Add-ons
                    </dt>
                    <dd class="text-primary-50">105 USD</dd>
                </div>
                <div class="flex justify-between">
                    <dt>Application Fee</dt>
                    <dd class="text-primary-50">249 USD x 1</dd>
                </div>
                <div class="flex justify-between">
                    <dt>Discount</dt>
                    <dd class="text-primary-50">-$20</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-3 text-primary-50">
                    <dt>Total</dt>
                    <dd class="text-primary-50">$789</dd>
                </div>
                <div class="flex items-center justify-between border-t border-gray-200 pt-6 text-primary-50">
                    <dt class="text-base">Payable Amount</dt>
                    <dd class="text-base">$789</dd>
                </div>
            </dl>
        </div>
        <div class="bg-primary-50  p-5 rounded-lg _default-tags-properties ">
            <h4 class="text-xl font-bold mb-4">Start Your Application</h4>
            <ul class="flex flex-col gap-3 list-disc ml-8 text-sm" data-list="3" data-list-js="true">
                <li>
                    Choose your login info to sign up for your Volunteering Solutions My Account. After choosing the
                    login info proceed to the next step to complete the application form.
                </li>
                <li>
                    Enter your personal info, choice of destination and program to complete the online application
                    form.
                </li>
                <li>
                    Pay <span title="USD229 (USD)">USD 229</span> / <span title="GBP179 (GBP)">GBP 179</span> /
                    <span title="AUD350 (AUD)">AUD 350</span> / <span title="EUR210 (EUR)">EUR 210</span>
                    application fee online by Secure Payment Gateway to complete the application process.
                </li>
                <li>
                    You will receive a welcome email from us acknowledging your application; we will then send your
                    Booking Confirmation in 7-10 working days.
                </li>
                <li>
                    Once you receive your Booking Confirmation you can log into My Account and view your trip
                    details and make your final payments and you are all set to go.
                </li>
            </ul>
        </div>
    </div>
</main>
<script src="assets/js/custom.js"></script>
<?php include( 'common/page-end.php' ); ?>

