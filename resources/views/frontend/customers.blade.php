@extends('frontend.layouts.app')
@section('content')
	<div class="uk-section uk-padding-remove-vertical in-equity-breadcrumb">
		<div class="uk-container">
			<div class="uk-grid">
				<div class="uk-width-1-1">
					<ul class="uk-breadcrumb">
						<li><a href="#">Home</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- breadcrumb content end -->
	<main>
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-3-4@m">
						<div data-uk-grid>
							<div class="uk-width-1-2@s uk-width-2-3@m">
								<h1 class="uk-margin-remove">We <span class="in-highlight">help</span> our customers.</h1>
								<p class="uk-text-lead uk-text-muted uk-margin-small-top">To engage investors so their companies can grow</p>
								<p>Our customers look to us as guides, and we weave our deep legal and technical experience into our software and services.</p>
							</div>
							<div class="uk-width-1-2@s uk-width-expand@m">
								<ul class="uk-list uk-list-large uk-list-divider">
									<li>
										<div class="uk-flex uk-flex-middle">
											<div class="in-icon-wrap primary-color uk-margin-right">
												<i class="fas fa-paper-plane fa-lg"></i>
											</div>
											<div>
												<h2 class="uk-margin-remove-bottom count" data-counter-end="35817">35817</h2>
												<span class="uk-label in-label-small">Business launch</span>
											</div>
										</div>
									</li>
									<li>
										<div class="uk-flex uk-flex-middle">
											<div class="in-icon-wrap primary-color uk-margin-right">
												<i class="fas fa-user-tie fa-lg"></i>
											</div>
											<div>
												<h2 class="uk-margin-remove-bottom count" data-counter-end="4400">4400</h2>
												<span class="uk-label in-label-small">Investor engaged</span>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-child-width-1-2@m in-testimonial-8" data-uk-grid>
					<div>
						<div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
							<img class="uk-position-bottom-right" src="img/blockit/in-testimoni-2.png" alt="client-testimoni" width="200">
							<div class="uk-card-header">
								<blockquote>
									<p>The extension makes collecting feedback so much easier! Shipright then really helps us make decisions based on the data we collected.</p>
								</blockquote>
							</div>
							<div class="uk-card-footer">
								<img src="img/blockit/in-client-testi-1.svg" alt="client-logo" width="54">
								<blockquote>
									<footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
							<img class="uk-position-bottom-right" src="img/blockit/in-testimoni-3.png" alt="client-testimoni" width="200">
							<div class="uk-card-header">
								<blockquote>
									<p>Quick, easy, and super helpful to collect and organise feedback from all kinds of channels we use to communicate with our customers.</p>
								</blockquote>
							</div>
							<div class="uk-card-footer">
								<img src="img/blockit/in-client-testi-2.svg" alt="client-logo" width="54">
								<blockquote>
									<footer>Melvin Cortez<br><cite>Cloud Architect at stormpath</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section uk-padding-remove-top">
			<div class="uk-container">
				<div class="uk-grid uk-child-width-1-3@m in-testimonial-7" data-uk-grid>
					<div>
						<div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
							<div class="uk-card-header">
								<img src="img/blockit/in-client-testi-3.svg" alt="client-logo" width="60">
							</div>
							<div class="uk-card-body">
								<blockquote>
									<p>Really love the product! It saves so much time and helps a lot in organize our feedback. Very huge potential.</p>
								</blockquote>
							</div>
							<div class="uk-card-footer">
								<blockquote>
									<footer>Gabrielle Barger<br><cite>Help Desk at pushbullet</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
							<div class="uk-card-header">
								<img src="img/blockit/in-client-testi-4.svg" alt="client-logo" width="60">
							</div>
							<div class="uk-card-body">
								<blockquote>
									<p>This is my one stop shop for sending all Updates to investors, board of directors or even exec team members.</p>
								</blockquote>
							</div>
							<div class="uk-card-footer">
								<blockquote>
									<footer>Melvin Cortez<br><cite>Cloud Architect at stormpath</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
					<div>
						<div class="uk-card uk-card-default uk-box-shadow-small uk-border-rounded">
							<div class="uk-card-header">
								<img src="img/blockit/in-client-testi-5.svg" alt="client-logo" width="60">
							</div>
							<div class="uk-card-body">
								<blockquote>
									<p>Has been a great tool for me on monthly updates & helps to communicate the key issues/plan with our team.</p>
								</blockquote>
							</div>
							<div class="uk-card-footer">
								<blockquote>
									<footer>Franklin Clark<br><cite>Sales Analyst at eventbrite</cite></footer>
								</blockquote>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>
	@endsection