@extends('frontend.layouts.app')
@section('content')
    <style>.uk-card {
		border-radius: 10px;
		transition: box-shadow 0.3s ease, transform 0.3s ease;
		background: #fff;
		padding: 30px;
		box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
	}
	
	.uk-card:hover {
		transform: translateY(-5px);
		box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
	}
	
	.uk-text-primary {
		color: #1e90ff; /* Bright Blue */
	}
	
	.uk-text-success {
		color: #28a745; /* Green for profit */
	}
	
	.uk-text-muted {
		color: #6c757d; /* Subtle gray text */
	}
	
	.uk-button-primary {
		background-color: #28a745; /* Green background */
		color: white;
		border-radius: 50px;
		/* padding: 0 ; */
		font-size: 18px;
		text-transform: uppercase;
		box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
		transition: background-color 0.3s ease, transform 0.3s ease;
	}
	
	.uk-button-primary:hover {
		background-color: #218838;
		transform: scale(1.05);
	}
	
	.uk-button-primary:focus {
		outline: none;
	}
	
	.uk-text-center {
		text-align: center;
	}
	
	.uk-margin-top {
		margin-top: 20px;
	}
	
	.uk-max-width-small {
		max-width: 300px;
		width: 100%;
	}
	
	.uk-card-body p {
		font-size: 15px;
		line-height: 1.6;
	}
	
	.uk-card-body {
		padding: 25px;
	}
	
	.buy-button i {
		font-size: 18px;
	}
	
	/* For smaller devices (responsive) */
	@media (max-width: 600px) {
		.uk-card {
			padding: 20px;
		}
	
		.uk-button-primary {
			font-size: 16px;
			padding: 10px 20px;
		}
	}
	  </style>
    <main>
        <!-- slideshow content begin -->
        <div class="uk-section uk-padding-remove-vertical in-slideshow-gradient">
            <div id="particles-js" class="uk-light in-slideshow uk-background-contain"
                data-src="{{ asset('asset/img/in-equity-decor-1.svg') }}" data-uk-img data-uk-slideshow>
                <hr>
                <ul class="uk-slideshow-items">
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>Trade the markets
                                        directly with
                                        leading trading platforms.</p>
                                    <h1 class="uk-heading-small">The world's most <span class="in-highlight">powerful</span>
                                        trade app.</h1>
                                    <p class="uk-text-lead uk-visible@m">Get the most accurate market data, alerts,
                                        conversions, tools and more — all within the same app.</p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                        data-uk-grid>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-tesla.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">TSLA<span
                                                            class="uk-text-small">-1.47%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$113.06</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-google.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">GOOGL<span
                                                            class="uk-text-small">1.32%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$87.34</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-apple.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">AAPL<span
                                                            class="uk-text-small">3.68%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$129.62</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/banner1.png') }}" alt="image-slide" width="552"
                                   data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="uk-flex uk-flex-middle">
                        <div class="uk-container">
                            <div class="uk-grid-large uk-flex-middle" data-uk-grid>
                                <div class="uk-width-1-2@s in-slide-text">
                                    <p class="in-badge-text uk-text-small uk-margin-remove-bottom uk-visible@m"><span
                                            class="uk-label uk-label-success in-label-small">New</span>Trade the markets
                                        directly with
                                        leading trading platforms.</p>
                                    <h1 class="uk-heading-small">Reach out to new trading <span
                                            class="in-highlight">experience</span>.</h1>
                                    <p class="uk-text-lead uk-visible@m">Bring your trading ventures go around the world,
                                        way beyond the space of your trading account.</p>
                                    <div class="uk-grid-medium uk-child-width-1-3@m uk-child-width-1-2@s uk-margin-medium-top uk-visible@s"
                                        data-uk-grid>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-mcdonalds.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">MCD<span
                                                            class="uk-text-small">-1.29%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$269.47</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-amazon.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price up">
                                                    <h6 class="uk-margin-remove">AMZN<span
                                                            class="uk-text-small">3.56%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$86.08</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="uk-visible@m">
                                            <div
                                                class="uk-card uk-card-small uk-card-secondary uk-card-body uk-border-rounded uk-flex uk-flex-middle">
                                                <div class="in-symbol-logo">
                                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                                        data-src="{{ asset('asset/img/in-symbol-microsoft.svg') }}"
                                                        alt="ticker" width="28" height="28" data-uk-img>
                                                </div>
                                                <div class="in-price down">
                                                    <h6 class="uk-margin-remove">MSFT<span
                                                            class="uk-text-small">-1.18%</span></h6>
                                                    <p class="uk-margin-remove"><span
                                                            class="fas fa-arrow-circle-right fa-xs"></span>$224.93</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="in-slide-img">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/banner1.png') }}" alt="image-slide"  width="552" data-uk-img>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="uk-container">
                    <div class="uk-position-relative" data-uk-grid>
                        <ul class="uk-slideshow-nav uk-dotnav uk-position-bottom-right uk-flex uk-flex-middle"></ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- slideshow content end -->
        <!-- section content begin -->

		<style>
		/* Wrapper for the typing animation */
.typing-effect h1 {
    font-size: 40px;
    font-weight: 700;
    color: white;
    display: inline-block;
    overflow: hidden; /* Hide the text that is not yet typed */
    white-space: nowrap; /* Prevent text wrapping */
    border-right: 2px solid white; /* Create the cursor effect */
    animation: typing 4s steps(30, end) infinite, blink-caret 0.75s step-end infinite;
}

/* Typing effect using keyframes */
@keyframes typing {
    0% {
        width: 0;
    }
    50% {
        width: 100%;
    }
    100% {
        width: 0;
    }
}

/* Blinking caret effect */
@keyframes blink-caret {
    0%, 50% {
        border-color: transparent;
    }
    50%, 100% {
        border-color: white;
    }
}

/* Styling for the span (highlighted account) */
.in-highlight {
    color: #28a745; /* Bright highlight color */
    font-weight: 700;
}

/* Subtle text styling for the description (P) */
.uk-text-muted {
    color: white;
    opacity: 0.8;
    font-size: 18px;
    line-height: 1.6;
    transition: opacity 0.3s ease;
}

/* On hover, subtle text becomes more visible */
.uk-text-muted:hover {
    opacity: 1;
}

/* Responsive adjustments for smaller screens */
@media (max-width: 600px) {
    .typing-effect h1 {
        font-size: 32px;
    }

    .uk-text-muted {
        font-size: 16px;
    }
}


		</style>
        <div class="uk-section in-equity-17">
            <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                <div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-5@m uk-text-center typing-effect">
						<h1 class="uk-margin-remove">
							Choose your <span class="in-highlight">account</span> type
						</h1>
						<p class="uk-text-lead uk-text-muted uk-margin-small-top">Simply select your preferred account type in our application form.</p>
					</div>
					
					
					
					<div class="uk-width-3-4@m uk-margin-medium-top">
						<div class="uk-grid-collapse uk-child-width-1-2@m in-equity-pricing" data-uk-grid>
							@foreach($toppackages as $package)
								<div>
									<div class="uk-card uk-card-default uk-card-body uk-box-shadow-medium">
										<p class="uk-text-small uk-text-muted uk-text-uppercase">Investment
											<span class="uk-label uk-margin-small-left in-label-small">USD {{ number_format($package->investment_amount, 2) }}</span>
										</p>
										<h2 class="uk-margin-top uk-margin-remove-bottom">{{ $package->package_name }}</h2>
										<p class="uk-text-lead uk-text-muted uk-margin-remove-top">{{ $package->description }}</p>
										<hr>
										<ul class="uk-list in-list-check">
											<li>Benefit from industry-leading entry prices</li>
											<li>Three decades of trading know-how</li>
											<li>Award-winning customer service*</li>
											<li>Highly-regarded trader education*</li>
											<li>Advanced risk management</li>
											<li>Tax-free spread betting profits</li>
											<li>Low minimum deposit</li>
										</ul>
										
										<!-- Display Number of Registered Users -->
										<div class="uk-text-small uk-text-muted uk-margin-small-top">
											<strong>Registered Users:</strong> 10
										</div>
					
										<!-- Countdown Timer -->
										<div class="uk-text-small uk-text-muted uk-margin-small-top">
											<strong>Offer Ends In:</strong> <span id="countdown{{ $package->id }}"></span>
										</div>
					
										<a href="{{ route('registerform') }}"
										   class="uk-button uk-button-default uk-border-rounded uk-align-center">
											Open an account <i class="fas fa-arrow-circle-right uk-margin-small-left"></i>
										</a>
									</div>
								</div>
							@endforeach
						</div>
					</div>
					
					<script>
						// Set a fixed end time for the countdown (example: 2 hours from now)
						@foreach($packages as $package)
							var endTime{{ $package->id }} = new Date(new Date().getTime() + 2 * 60 * 60 * 1000); // 2 hours from now
					
							// Countdown function
							function updateCountdown{{ $package->id }}() {
								var now = new Date().getTime();
								var distance = endTime{{ $package->id }} - now;
					
								var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
								var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
								var seconds = Math.floor((distance % (1000 * 60)) / 1000);
					
								document.getElementById("countdown{{ $package->id }}").innerHTML = hours + "h " + minutes + "m " + seconds + "s ";
					
								// If the countdown is over, display "EXPIRED"
								if (distance < 0) {
									clearInterval(x);
									document.getElementById("countdown{{ $package->id }}").innerHTML = "EXPIRED";
								}
							}
					
							// Update countdown every second
							var x{{ $package->id }} = setInterval(updateCountdown{{ $package->id }}, 1000);
						@endforeach
					</script>
					
					
					
                </div>
            </div>
        </div>















     <div class="uk-section uk-section-primary uk-preserve-color in-equity-1">
    <div class="uk-container">
        <div class="uk-grid">
            <div class="uk-width-1-1">
                <h4>All Packages</h4>
            </div>
        </div>
		<div class="uk-grid-match uk-grid-small uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-4@m uk-margin-bottom" data-uk-grid>
			@foreach($packages as $package)
				<div>
					<div class="uk-card uk-card-body uk-card-default uk-border-rounded uk-box-shadow-medium" style="background-color: white; border: none;">
						<div class="uk-text-center uk-margin-small">
							<h4 class="uk-text-primary uk-text-bold uk-text-uppercase uk-margin-remove">{{ $package->package_name }}</h4>
						</div>
						<div class="uk-flex uk-flex-between uk-margin-top">
							<div class="uk-text-center">
								<h6 class="uk-text-muted">Investment</h6>
								<p class="uk-text-bold uk-text-primary uk-margin-remove">{{ $package->investment_amount }} USD</p>
							</div>
							<div class="uk-text-center">
								<h6 class="uk-text-muted">Profit</h6>
								<p class="uk-text-bold uk-text-success uk-margin-remove">+{{ $package->profit_percentage }}% / day</p>
							</div>
						</div>
						<p class="uk-margin-small-top uk-text-muted" style="font-size: 14px;">{{ $package->description }}</p>
						<div class="uk-text-center uk-margin-top">
							<a href="{{ route('login') }}" class="uk-button uk-button-primary uk-border-rounded uk-padding-small uk-width-1-1 uk-max-width-small buy-button">
								Buy Now <i class="fas fa-shopping-cart uk-margin-small-left"></i>
							</a>
						</div>
					</div>
				</div>
			@endforeach
		</div>
		
    </div>
</div>















        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-2 uk-background-contain uk-background-center"
            data-src="{{ asset('asset/img/in-equity-2-bg.png') }}" data-uk-img>
            <div class="uk-container uk-margin-top">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-2xlarge@m uk-text-center">
                        <span class="uk-label uk-label-warning">Fast execution, low latency<i
                                class="fas fa-arrow-right fa-xs uk-margin-small-left"></i></span>
                        <h1 class="uk-margin-top">Your premium choice for trading currencies & stocks online</h1>
                        <p class="uk-text-lead uk-margin-medium-top">Harness the power of technology to make a quicker,
                            smarter and more precise decision on CFD currency pairs, stocks, commodities and more</p>
                    </div>
                    <div class="uk-width-3-4@m uk-margin-medium-top">
                        <img class="uk-align-center" src="{{ asset('asset/img/in-lazy.gif') }}"
                            data-src="{{ asset('asset/img/in-equity-2-img.png') }}" alt="image" width="758"
                            height="334" data-uk-img>
                    </div>
                    <div class="uk-width-2xlarge@m uk-margin-medium-top">
                        <div class="uk-grid uk-child-width-1-4@m uk-child-width-1-4@s uk-text-center in-feature-box"
                            data-uk-grid>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-equity-2-icon-1.svg') }}" alt="icon-1"
                                        width="35" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Trading calculators</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-equity-2-icon-2.svg') }}" alt="icon-2"
                                        width="38" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Market analysis</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-equity-2-icon-3.svg') }}" alt="icon-3"
                                        width="42" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Market reviews</p>
                            </a>
                            <a href="#">
                                <span class="in-icon-wrap">
                                    <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-equity-2-icon-4.svg') }}" alt="icon-4"
                                        width="42" height="42" data-uk-img>
                                </span>
                                <p class="uk-margin-top">Trading academy</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-3 in-offset-top-20">
            <div class="uk-container uk-margin-large-bottom">
                <div class="uk-grid uk-flex uk-flex-middle">
                    <div class="uk-width-expand@m">
                        <h1 class="uk-margin-small-bottom">Tight spreads and <span class="in-highlight">ultra-fast</span>
                            execution</h1>
                        <h3 class="uk-margin-top uk-text-warning">Best market prices available so you can receive excellent
                            conditions.</h3>
                        <hr class="uk-margin-medium-top uk-margin-medium-bottom">
                        <ul class="uk-list in-list-check">
                            <li>Negative balance protection</li>
                            <li>Segregated and supervised client funds</li>
                            <li>Instant deposit & fast withdrawal</li>
                        </ul>
                    </div>
                    <div class="uk-width-2xlarge uk-flex uk-flex-right uk-flex-center@s">
                        <div class="uk-card uk-card-body uk-card-default uk-border-rounded in-margin-top-60@s">
                            <div id="tradingview-widget"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-4">
            <div class="uk-container uk-margin-top uk-margin-medium-bottom">
                <div class="uk-grid uk-child-width-1-2@m in-testimonial-2" data-uk-grid>
                    <div class="uk-width-1-1@m uk-text-center">
                        <h1>More than <span class="in-highlight">23,000</span> traders joined</h1>
                    </div>
                    <div>
                        <div class="uk-background-contain uk-background-top-left"
                            data-src="{{ asset('asset/img/in-equity-4-blob-1.svg') }}" data-uk-img>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <div class="uk-background-primary uk-border-pill">
                                        <img class="uk-align-center uk-border-pill"
                                            src="{{ asset('asset/img/in-lazy.gif') }}"
                                            data-src="{{ asset('asset/img/blockit/in-team-1.png') }}" alt="client-1"
                                            width="100" height="100" data-uk-img>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove-bottom">Angela Nannenhorn</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">from United Kingdom</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>Very convenience for trader, spread for gold is relatively low compare to other broker
                                </p>
                            </blockquote>
                        </div>
                    </div>
                    <div>
                        <div class="uk-background-contain uk-background-top-left"
                            data-src="{{ asset('asset/img/in-equity-4-blob-2.svg') }}" data-uk-img>
                            <div class="uk-flex uk-flex-middle">
                                <div class="uk-margin-right">
                                    <div class="uk-background-primary uk-border-pill">
                                        <img class="uk-align-center uk-border-pill"
                                            src="{{ asset('asset/img/in-lazy.gif') }}"
                                            data-src="{{ asset('asset/img/blockit/in-team-8.png') }}" alt="client-2"
                                            width="100" height="100" data-uk-img>
                                    </div>
                                </div>
                                <div>
                                    <h5 class="uk-margin-remove-bottom">Wade Palmer</h5>
                                    <p class="uk-text-muted uk-margin-remove-top">from Germany</p>
                                </div>
                            </div>
                            <blockquote>
                                <p>One of the best FX brokers, I have been using! their trading conditions are excellent</p>
                            </blockquote>
                        </div>
                    </div>
                    <div class="uk-width-1-1@m uk-text-center">
                        <a href="#" class="uk-button uk-button-text">See more traders stories from all over the
                            world<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section in-equity-5">
            <div class="uk-container uk-margin-remove-bottom">
                <div class="uk-grid uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
                    <div>
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                    data-src="{{ asset('asset/img/in-equity-5-award-1.svg') }}" alt="award-1"
                                    width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>Best Mobile Trading App</h6>
                                <p class="provider">European CEO Magazine</p>
                                <p class="year">2019</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                    data-src="{{ asset('asset/img/in-equity-5-award-2.svg') }}" alt="award-2"
                                    width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>Best Forex Ecn Broker</h6>
                                <p class="provider">UK Forex awards</p>
                                <p class="year">2020</p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-visible@m">
                        <div class="uk-flex uk-flex-left in-award">
                            <div class="uk-margin-small-right">
                                <img src="{{ asset('asset/img/in-lazy.gif') }}"
                                    data-src="{{ asset('asset/img/in-equity-5-award-3.svg') }}" alt="award-3"
                                    width="91" height="82" data-uk-img>
                            </div>
                            <div>
                                <h6>Best Trading Conditions</h6>
                                <p class="provider">Forex report magazine</p>
                                <p class="year">2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
        <!-- section content begin -->
        <div class="uk-section uk-section-primary uk-preserve-color in-equity-6 uk-background-contain uk-background-center"
            data-src="{{ asset('asset/img/in-equity-decor-2.svg') }}" data-uk-img>
            <div class="uk-container uk-margin-small-bottom">
                <div class="uk-grid uk-flex uk-flex-center">
                    <div class="uk-width-2xlarge@m uk-text-center">
                        <h1>Ready to get started?</h1>
                        <p class="uk-text-lead">Global access to financial markets from a single account</p>
                    </div>
                    <div class="uk-width-3-4@m uk-margin-medium-top">
                        <div class="uk-flex uk-flex-center uk-flex-middle button-app">
                            <div>
                                <a href="{{ route('registerform') }}" class="uk-button uk-button-secondary uk-border-rounded">Open your
                                    account<i class="fas fa-arrow-circle-right uk-margin-small-left"></i></a>
                            </div>
                            <div class="uk-margin-left uk-margin-right">
                                <p class="uk-margin-remove">And download the app</p>
                            </div>
                            <div class="uk-margin-right">
                                <a href="#"><img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-app-store.svg') }}" alt="app-store"
                                        width="120" height="40" data-uk-img></a>
                            </div>
                            <div>
                                <a href="#"><img src="{{ asset('asset/img/in-lazy.gif') }}"
                                        data-src="{{ asset('asset/img/in-google-play.svg') }}" alt="google-play"
                                        width="135" height="40" data-uk-img></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- section content end -->
    </main>
@endsection
