<header>
    <div class="uk-section uk-padding-remove-vertical">
        <nav class="uk-navbar-container uk-navbar-transparent"
            data-uk-sticky="show-on-up: true; animation: uk-animation-slide-top;">
            <div class="uk-container" data-uk-navbar>
                <div class="uk-navbar-left">
                    <a class="logo-container" href="{{ route('frontend.index') }}">
                        <div class="logo-frame">
                            <img src="{{ asset('asset/img/logo.png') }}" alt="Solana Logo" class="logo">
                        </div>
                        <span class="app-name">Solana</span>
                    </a>


                    <style>
                        /* Style for the logo container */
                        .logo-container {
                            display: flex;
                            align-items: center;
                            text-decoration: none;
                            /* Remove link underline */
                        }

                        /* Logo frame to give it a nice border and padding */
                        .logo-frame {
                            /* background-color: #333; Dark background for contrast */
                            padding: 10px;
                            border-radius: 12px;
                            /* Rounded corners */
                            /* box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); Subtle shadow for depth */
                            display: inline-block;
                        }

                        /* Styling the logo itself */
                        .logo {
                            width: 70px;
                            height: auto;
                        }

                        /* App name styling */
                        .app-name {
                            font-size: 24px;
                            font-weight: bold;
                            color: #FFFFFF;
                            /* White text for contrast */
                            margin-right: 15px;
                            Space between the logo and the text font-family: 'Arial', sans-serif;
                        }
                    </style>
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li><a href="{{ route('frontend.index') }}">Home
                                {{-- <span data-uk-navbar-parent-icon></span> --}}
                            </a>
                            {{-- <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="homepage2">Homepage 2</a></li>
                                    <li><a href="homepage3">Homepage 3</a></li>
                                    <li><a href="homepage4">Homepage 4</a></li>
                                </ul>
                            </div> --}}
                        </li>
                        <li><a href="{{ route('frontend.market') }}">Markets</a>
                        </li>
                        <li><a href="#">Company<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li><a href="{{ route('frontend.about') }}">About</a></li>
                                    <li><a href="{{ route('frontend.blog') }}">Blog</a></li>
                                    <li><a href="{{ route('frontend.careers') }}">Careers</a></li>
                                    <li><a href="{{ route('frontend.contact') }}">Contact</a></li>

                                </ul>
                            </div>
                        </li>
                        <li><a href="{{ route('frontend.education') }}">Education</a>
                        </li>
                        <li><a href="#">Resources<span data-uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown uk-navbar-dropdown-width-2">
                                <div class="uk-navbar-dropdown-grid uk-child-width-1-2" data-uk-grid>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a href="https://getuikit.com/docs/introduction">Documentation<i
                                                        class="fas fa-square-arrow-up-right fa-sm"></i></a></li>
                                            <li><a href="{{ route('frontend.help-center') }}">Help Center</a></li>
                                            <li><a href="{{ route('frontend.customers') }}">Customers</a></li>
                                            <li><a href="{{ route('frontend.roadmap') }}">Roadmap</a></li>
                                            <li><a href="{{ route('frontend.legal-docs') }}">Legal Docs<i
                                                        class="fas fa-gavel fa-sm"></i></a></li>

                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="uk-nav uk-navbar-dropdown-nav">
                                            <li><a class="uk-disabled" href="#">Adipiscing elit sed do eiusmod
                                                    incididunt ut labore dolore magna lorem ipsum sit dolor amet
                                                    consectetur</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="uk-navbar-right">
                    <div class="uk-navbar-item uk-visible@m in-optional-nav">
                        <a href="{{ route('login') }}" class="uk-button uk-button-text">Log in<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                        <a href="{{ route('registerform') }}" class="uk-button uk-button-primary">Sign up<i
                                class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
