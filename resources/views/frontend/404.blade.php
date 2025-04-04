@extends('frontend.layouts.app')
@section('content')
	<!-- page loader end -->
	<main>
		<!-- section content begin -->
		<div class="uk-section">
			<div class="uk-container">
				<div class="uk-grid uk-flex uk-flex-center uk-flex-middle" data-uk-height-viewport="expand: true">
					<div class="uk-width-3-4@m in-offset-top-30">
						<div class="uk-child-width-1-2@m uk-flex uk-flex-middle in-padding-horizontal@s" data-uk-grid>
							<div>
								<div class="uk-flex uk-flex-middle">
									<div class="uk-margin-right">
										<i class="fas fa-exclamation-triangle fa-6x large transparent uk-text-danger"></i>
									</div>
									<div>
										<h1 class="uk-heading-xlarge uk-margin-remove"><span class="uk-text-danger">404</span></h1>
									</div>
								</div>
							</div>
							<div>
								<h1 class="uk-heading-bullet uk-heading-small">Oops!</h1>
								<p class="uk-text-muted">The page you're looking for doesn't exist, or was loaded incorrectly.</p>
								<a href="index.html" class="uk-button uk-button-text uk-text-primary uk-margin-small-top">Back to homepage<i class="fas fa-chevron-circle-right fa-xs uk-margin-small-left"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- section content end -->
	</main>
	@endsection