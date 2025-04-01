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
				<div class="uk-grid">
					<div class="uk-width-1-1 uk-text-center uk-margin-medium-bottom">
						<h1>Company <span class="in-highlight">legal docs</span></h1>
					</div>
					<div class="uk-grid-divider uk-child-width-1-3@m uk-child-width-1-2@s" data-uk-grid>
						<div>
							<div class="in-icon-wrap primary-color">
								<i class="fas fa-file fa-lg"></i>
							</div>
							<h3 class="uk-margin-top">Terms of Service</h3>
							<p>Read the Terms of Service and License Agreement for Blockit as well as our BlockitApp & Developer Agreements.</p>
							<ul class="uk-list uk-margin-top">
								<li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>License Agreement</a></li>
								<li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Term of Services for Blockit Trade</a></li>
							</ul>
						</div>
						<div>
							<div class="in-icon-wrap primary-color">
								<i class="fas fa-globe fa-lg"></i>
							</div>
							<h3 class="uk-margin-top">Policies</h3>
							<p>Find out more about what information we collect at Blockit, how we use it, and what control you have over your data.</p>
							<ul class="uk-list uk-margin-top">
								<li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Privacy Statement</a></li>
							</ul>
						</div>
						<div class="uk-visible@m">
							<div class="in-icon-wrap primary-color">
								<i class="fas fa-shield-alt fa-lg"></i>
							</div>
							<h3 class="uk-margin-top">Security</h3>
							<p>Learn more about how we keep your work and personal data safe when you’re using our services.</p>
							<ul class="uk-list uk-margin-top">
								<li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Blockit Trade Security</a></li>
								<li><a class="uk-flex uk-flex-middle" href="#"><i class="fas fa-file-pdf fa-sm uk-margin-small-right"></i>Responsible Disclosure Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center">
					<div class="uk-width-1-2@m uk-text-center">
						<p class="uk-text-lead uk-text-muted uk-margin-remove-bottom uk-text-center">Frequent question</p>
						<h2 class="uk-margin-small-top uk-text-center">Do you have any question</h2>
					</div>
					<div class="uk-width-1-1@m">
						<div class="uk-grid uk-child-width-1-2@m uk-margin-medium-top" data-uk-grid>
							<div>
								<ul class="in-faq-2" data-uk-accordion>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
												<i class="fas fa-phone fa-xs"></i>How to contact with blockit team?
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua voluptate velit esse cillum dolore.</p>
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum quia non numquam eius modi.</p>
										</div>
									</li>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-clearfix">
												<i class="fas fa-exclamation-triangle fa-xs"></i>Gulp installation failed, how to fix this issue?
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum numquam eius tempora.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
										</div>
									</li>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
												<i class="fas fa-tachometer-alt fa-xs"></i>Website response taking time, how to improve?
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
										</div>
									</li>
								</ul>
							</div>
							<div>
								<ul class="in-faq-2" data-uk-accordion>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
												<i class="fas fa-box-open fa-xs"></i>New update fixed all bug and issues
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
											<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio cum soluta nobis est eligendi optio cumque nihil impedit placeat facere possimus.</p>
										</div>
									</li>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
												<i class="fas fa-pencil-ruler fa-xs"></i>Can my company request custom plan?
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime.</p>
										</div>
									</li>
									<li>
										<a class="uk-accordion-title" href="#">
											<div class="uk-card uk-card-default uk-card-body uk-border-rounded">
												<i class="fas fa-cog fa-xs"></i>Can i port this template to another?
											</div>
										</a>
										<div class="uk-accordion-content uk-card uk-card-default uk-card-body uk-border-rounded">
											<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip commodo consequat. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum numquam eius tempora.</p>
											<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
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
	</main>
	@endsection