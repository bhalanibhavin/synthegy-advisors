@extends('front.front-layout')
@section('title', ($metaDataDetail && $metaDataDetail['title']) ? $metaDataDetail['title'] : 'Home')
@section('description', ($metaDataDetail && $metaDataDetail['description']) ? $metaDataDetail['description'] : 'Home')
@section('keywords', ($metaDataDetail && $metaDataDetail['keyword']) ? $metaDataDetail['keyword'] : 'Home')
@section('pagelevelcss')
@stop
@section('content')
<div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-post-type="page">
	<section class="elementor-section elementor-top-section elementor-element elementor-element-3f14da73 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3f14da73" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-4ea4a518" data-id="4ea4a518" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-7243ddb1 elementor-invisible elementor-widget elementor-widget-heading" data-id="7243ddb1" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInDown&quot;}" data-widget_type="heading.default">
				   <div class="elementor-widget-container">
					  <h1 class="elementor-heading-title elementor-size-default">Welcome to {{ config('app.name') }}  Your Trusted Accounting Partner</h1>
				   </div>
				</div>
				<div class="elementor-element elementor-element-cf1f287 elementor-invisible elementor-widget elementor-widget-text-editor" data-id="cf1f287" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="text-editor.default">
				   <div class="elementor-widget-container">
					  <p>At {{ config('app.name') }}, we simplify your financial journey with professional, accurate, and reliable accounting solutions. Whether you are a small business owner, an entrepreneur, or an established company, our expert team is here to handle all your accounting needs with precision and transparency. Let us take the stress out of numbers so you can focus on growing your business.</p>
				   </div>
				</div>
				<div class="elementor-element elementor-element-6bca493a elementor-mobile-align-center elementor-invisible elementor-widget elementor-widget-button" data-id="6bca493a" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="button.default">
				   <div class="elementor-widget-container">
					  <div class="elementor-button-wrapper">
						 <!-- <a class="elementor-button elementor-button-link elementor-size-md elementor-animation-float" href="#">
						 <span class="elementor-button-content-wrapper">
						 <span class="elementor-button-text">Get Started</span>
						 </span>
						 </a> -->
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-913ba6e" data-id="913ba6e" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-29bf8460 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="29bf8460" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img decoding="async" width="136" height="136" src="{{ asset('themes/image/icon-circle.png') }}" class="attachment-large size-large wp-image-27" alt="" />															
				   </div>
				</div>
				<div class="elementor-element elementor-element-617bb735 elementor-widget__width-auto elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="617bb735" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img decoding="async" width="151" height="130" src="{{ asset('themes/image/icon-triangle.png') }}" class="attachment-large size-large wp-image-28" alt="" />															
				   </div>
				</div>
				<div class="elementor-element elementor-element-774ecd75 elementor-widget__width-initial elementor-absolute elementor-invisible elementor-widget elementor-widget-image" data-id="774ecd75" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;,&quot;_position&quot;:&quot;absolute&quot;}" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img loading="lazy" decoding="async" width="132" height="192" src="{{ asset('themes/image/dots.png') }}" class="attachment-large size-large wp-image-29" alt="" />															
				   </div>
				</div>
				<div class="elementor-element elementor-element-69bb37df elementor-invisible elementor-widget elementor-widget-image" data-id="69bb37df" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img loading="lazy" decoding="async" width="460" height="511" src="{{ asset('themes/image/Untitled-design82.png') }}" class="attachment-large size-large wp-image-172" alt="" srcset="{{ asset('themes/image/Untitled-design82.png') }} 460w, { asset('themes/image/Untitled-design82-270x300.png 270w') }}" sizes="(max-width: 460px) 100vw, 460px" />															
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-7ef795b4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7ef795b4" data-element_type="section">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-5f1eaf6e" data-id="5f1eaf6e" data-element_type="column">
			 <div class="elementor-widget-wrap">
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-535448d4" data-id="535448d4" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-25fff1e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="25fff1e7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1dcb3ae3" data-id="1dcb3ae3" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-88b1c69 elementor-widget elementor-widget-image" data-id="88b1c69" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="73" height="75" src="{{ asset('themes/image/icon-1.png') }}" class="attachment-large size-large wp-image-31" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-59495342" data-id="59495342" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-136e281d elementor-widget elementor-widget-heading" data-id="136e281d" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">Tailored Solutions</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-4f2104c8 elementor-widget elementor-widget-text-editor" data-id="4f2104c8" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>We provide customized solutions to fit your specific needs.</p>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-3d309b53" data-id="3d309b53" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-67cfb7c7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="67cfb7c7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3dd74e8c" data-id="3dd74e8c" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-1f84c96f elementor-widget elementor-widget-image" data-id="1f84c96f" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="73" height="73" src="{{ asset('themes/image/icon-2.png') }}" class="attachment-large size-large wp-image-32" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1aeca89" data-id="1aeca89" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-51a60648 elementor-widget elementor-widget-heading" data-id="51a60648" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">Experienced Team</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-583fb3d3 elementor-widget elementor-widget-text-editor" data-id="583fb3d3" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>Our team of certified  experts bring vast industry knowledge.</p>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-6decef72" data-id="6decef72" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-11b83283 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="11b83283" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-288e1145" data-id="288e1145" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-57eaaa19 elementor-widget elementor-widget-image" data-id="57eaaa19" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="74" height="73" src="{{ asset('themes/image/icon-3.png') }}" class="attachment-large size-large wp-image-36" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-26f1e197" data-id="26f1e197" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-309df52f elementor-widget elementor-widget-heading" data-id="309df52f" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">Transparent</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-1d9930a6 elementor-widget elementor-widget-text-editor" data-id="1d9930a6" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>We keep you informed at every step with regular updates and reports.</p>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-20 elementor-top-column elementor-element elementor-element-4828b5c9" data-id="4828b5c9" data-element_type="column">
			 <div class="elementor-widget-wrap">
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-636324c8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="636324c8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-65d9bdd" data-id="65d9bdd" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-7934bcf0 elementor-widget elementor-widget-heading" data-id="7934bcf0" data-element_type="widget" data-widget_type="heading.default">
				   <div class="elementor-widget-container">
					  <h2 class="elementor-heading-title elementor-size-default">Our Services</h2>
				   </div>
				</div>
				<div class="elementor-element elementor-element-1f677d6 elementor-widget elementor-widget-image" data-id="1f677d6" data-element_type="widget" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img loading="lazy" decoding="async" width="52" height="12" src="{{ asset('themes/image/divider.png') }}" class="attachment-large size-large wp-image-50" alt="" />															
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-4a5c8bd4 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4a5c8bd4" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4d12e9d5" data-id="4d12e9d5" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7d7f8a19 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="7d7f8a19" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-19bb51cd" data-id="19bb51cd" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-69aa7872 elementor-widget elementor-widget-image" data-id="69aa7872" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="87" height="87" src="{{ asset('themes/image/icon-taskcart.png') }}" class="attachment-large size-large wp-image-58" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2f0793b4" data-id="2f0793b4" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-7665d653 elementor-widget elementor-widget-heading" data-id="7665d653" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">Accounting &amp; Bookkeeping</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-3254e9c9 elementor-widget elementor-widget-text-editor" data-id="3254e9c9" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>Our accounting and bookkeeping services are designed to save you time and provide clear financial visibility. </p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-7c1119de elementor-widget elementor-widget-button" data-id="7c1119de" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/accounting/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-45917213" data-id="45917213" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-416db4f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="416db4f5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-22d518a6" data-id="22d518a6" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-6fc818cc elementor-widget elementor-widget-image" data-id="6fc818cc" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="71" height="71" src="{{ asset('themes/image/icon-handshake.png') }}" class="attachment-large size-large wp-image-53" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-676de482" data-id="676de482" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-233a5827 elementor-widget elementor-widget-heading" data-id="233a5827" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">IEC Registration</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-762dd249 elementor-widget elementor-widget-text-editor" data-id="762dd249" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>IEC Registration (Importer Exporter Code) is a unique 10-digit code issued by the Directorate General of Foreign Trade to  international. </p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-2f3c267c elementor-widget elementor-widget-button" data-id="2f3c267c" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/iec-registration/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c36324a" data-id="c36324a" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-17fdb02c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="17fdb02c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3632959a" data-id="3632959a" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-7bf0fa49 elementor-widget elementor-widget-image" data-id="7bf0fa49" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="71" height="71" src="{{ asset('themes/image/icon-tasks.png') }}" class="attachment-large size-large wp-image-55" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-259956b5" data-id="259956b5" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-59594053 elementor-widget elementor-widget-heading" data-id="59594053" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">Payroll Management</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-27836347 elementor-widget elementor-widget-text-editor" data-id="27836347" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>We ensure that your employees are paid accurately and on time, handle tax with holdings, manage deductions and many more.</p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-37b83120 elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="37b83120" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/payroll-management/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-3ef7858 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3ef7858" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-18b3c1b" data-id="18b3c1b" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-0c434e5 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="0c434e5" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3b1ace5" data-id="3b1ace5" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-7f723a9 elementor-widget elementor-widget-image" data-id="7f723a9" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/1-1.png') }}" class="attachment-large size-large wp-image-909" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-614f024" data-id="614f024" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-8517953 elementor-widget elementor-widget-heading" data-id="8517953" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">EPF Registration</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-08627dd elementor-widget elementor-widget-text-editor" data-id="08627dd" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  The Employees&#8217; Provident Fund (EPF) is a retirement savings scheme for salaried employees in India. 								
							   </div>
							</div>
							<div class="elementor-element elementor-element-87938e1 elementor-widget elementor-widget-button" data-id="87938e1" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/epf-registration/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-8120381" data-id="8120381" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-2529024 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="2529024" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d93ba6f" data-id="d93ba6f" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-5104f75 elementor-widget elementor-widget-image" data-id="5104f75" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/2-1.png') }}" class="attachment-large size-large wp-image-910" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-e2b042d" data-id="e2b042d" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-466ac5e elementor-widget elementor-widget-heading" data-id="466ac5e" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">ESIC Registration</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-6d71e39 elementor-widget elementor-widget-text-editor" data-id="6d71e39" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>The Employees&#8217; State Insurance (ESI) scheme is a social security and health insurance scheme.</p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-8b67ab4 elementor-widget elementor-widget-button" data-id="8b67ab4" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/esic-registration/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-ddac5e7" data-id="ddac5e7" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-b3e731c elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="b3e731c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b6e519b" data-id="b6e519b" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-55d752a elementor-widget elementor-widget-image" data-id="55d752a" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/3-1.png') }}" class="attachment-large size-large wp-image-911" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ad290e9" data-id="ad290e9" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-265657b elementor-widget elementor-widget-heading" data-id="265657b" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">TDS &amp; TCS Return</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-bea0f06 elementor-widget elementor-widget-text-editor" data-id="bea0f06" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  TDS and TCS are important for tax collection and help ensure that taxes are paid in a timely and efficient manner.								
							   </div>
							</div>
							<div class="elementor-element elementor-element-8d274e2 elementor-widget__width-initial elementor-widget elementor-widget-button" data-id="8d274e2" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/tds-tcs-return/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-42053ca elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="42053ca" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4279627" data-id="4279627" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-4ed95ef7 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="4ed95ef7" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e91de13" data-id="5e91de13" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-a805bc elementor-widget elementor-widget-image" data-id="a805bc" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/Untitled-design86.png') }}" class="attachment-large size-large wp-image-374" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-20b10e78" data-id="20b10e78" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-1fa27c74 elementor-widget elementor-widget-heading" data-id="1fa27c74" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">GST Services</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-5ec0a5ba elementor-widget elementor-widget-text-editor" data-id="5ec0a5ba" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>From GST registration to filing and returns, our GST services ensure complete compliance with government regulations.</p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-3570315a elementor-widget elementor-widget-button" data-id="3570315a" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/gst-registration/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2dab2d13" data-id="2dab2d13" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-47cc1bd1 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="47cc1bd1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-3ef70728" data-id="3ef70728" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-2cb86b20 elementor-widget elementor-widget-image" data-id="2cb86b20" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/Untitled-design88.png') }}" class="attachment-large size-large wp-image-380" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-60f6091b" data-id="60f6091b" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-68ac4a59 elementor-widget elementor-widget-heading" data-id="68ac4a59" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default">MSME Registration</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-77d5f9bc elementor-widget elementor-widget-text-editor" data-id="77d5f9bc" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>Msme Registration help you access government benefits  and schemes designed for business growth and sustainability.</p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-62946518 elementor-widget elementor-widget-button" data-id="62946518" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/msme-registration/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-4d6a9c1" data-id="4d6a9c1" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-ed03452 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible" data-id="ed03452" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-b16e579" data-id="b16e579" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-50eb2dd elementor-widget elementor-widget-image" data-id="50eb2dd" data-element_type="widget" data-widget_type="image.default">
							   <div class="elementor-widget-container">
								  <img loading="lazy" decoding="async" width="69" height="69" src="{{ asset('themes/image/Untitled-design87.png') }}" class="attachment-large size-large wp-image-378" alt="" />															
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-7185015" data-id="7185015" data-element_type="column">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-8f1c64c elementor-widget elementor-widget-heading" data-id="8f1c64c" data-element_type="widget" data-widget_type="heading.default">
							   <div class="elementor-widget-container">
								  <h3 class="elementor-heading-title elementor-size-default"> Income Tax Services</h3>
							   </div>
							</div>
							<div class="elementor-element elementor-element-92a7793 elementor-widget elementor-widget-text-editor" data-id="92a7793" data-element_type="widget" data-widget_type="text-editor.default">
							   <div class="elementor-widget-container">
								  <p>At {{ config('app.name') }}, We provide complete income tax solutions including tax preparation, planning, and filing.</p>
							   </div>
							</div>
							<div class="elementor-element elementor-element-a191d53 elementor-widget elementor-widget-button" data-id="a191d53" data-element_type="widget" data-widget_type="button.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-button-wrapper">
									 <a class="elementor-button elementor-button-link elementor-size-sm" href="https://accountumindia.in/itr-filling/">
										<span class="elementor-button-content-wrapper">
										   <span class="elementor-button-icon">
											  <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
												 <path d="M190.5 66.9l22.2-22.2c9.4-9.4 24.6-9.4 33.9 0L441 239c9.4 9.4 9.4 24.6 0 33.9L246.6 467.3c-9.4 9.4-24.6 9.4-33.9 0l-22.2-22.2c-9.5-9.5-9.3-25 .4-34.3L311.4 296H24c-13.3 0-24-10.7-24-24v-32c0-13.3 10.7-24 24-24h287.4L190.9 101.2c-9.8-9.3-10-24.8-.4-34.3z"></path>
											  </svg>
										   </span>
										   <span class="elementor-button-text">Read More</span>
										</span>
									 </a>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
	   </div>
	</section>
	<section class="elementor-section elementor-top-section elementor-element elementor-element-2400714 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2400714" data-element_type="section">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-5c4a534" data-id="5c4a534" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-4b31292 elementor-widget elementor-widget-image" data-id="4b31292" data-element_type="widget" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img loading="lazy" decoding="async" width="643" height="545" src="{{ asset('themes/image/Untitled-design85.png') }}" class="attachment-large size-large wp-image-335" alt="About us" srcset="{{ asset('themes/image/Untitled-design85.png') }} 643w, {{ asset('themes/image/Untitled-design85-300x254.png') }} 300w" sizes="(max-width: 643px) 100vw, 643px" />															
				   </div>
				</div>
			 </div>
		  </div>
		  <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-279b41f" data-id="279b41f" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-720256b elementor-invisible elementor-widget elementor-widget-heading" data-id="720256b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
				   <div class="elementor-widget-container">
					  <h2 class="elementor-heading-title elementor-size-default">About Us</h2>
				   </div>
				</div>
				<div class="elementor-element elementor-element-0d569c7 elementor-widget elementor-widget-text-editor" data-id="0d569c7" data-element_type="widget" data-widget_type="text-editor.default">
				   <div class="elementor-widget-container">
					  <p>{{ config('app.name') }} is a leading accounting firm dedicated to delivering exceptional financial services across India. With years of experience in managing accounts, payroll, tax planning, and compliance, we take pride in our attention to detail and commitment to excellence. Our mission is to empower businesses with clear financial insights, robust strategies, and comprehensive support.<br /><br />Our Mission To empower businesses and individuals with accurate, reliable, and efficient accounting solutions that drive financial success.</p>
				   </div>
				</div>
				<div class="elementor-element elementor-element-5ea3b8e elementor-widget elementor-widget-progress" data-id="5ea3b8e" data-element_type="widget" data-widget_type="progress.default">
				   <div class="elementor-widget-container">
					  <span class="elementor-title" id="elementor-progress-bar-5ea3b8e">
					  Tax &amp; Payroll			</span>
					  <div aria-labelledby="elementor-progress-bar-5ea3b8e" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">
						 <div class="elementor-progress-bar" data-max="80">
							<span class="elementor-progress-text"></span>
							<span class="elementor-progress-percentage">80%</span>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="elementor-element elementor-element-899dbcf elementor-widget elementor-widget-progress" data-id="899dbcf" data-element_type="widget" data-widget_type="progress.default">
				   <div class="elementor-widget-container">
					  <span class="elementor-title" id="elementor-progress-bar-899dbcf">
					  Business Taxation			</span>
					  <div aria-labelledby="elementor-progress-bar-899dbcf" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90">
						 <div class="elementor-progress-bar" data-max="90">
							<span class="elementor-progress-text"></span>
							<span class="elementor-progress-percentage">90%</span>
						 </div>
					  </div>
				   </div>
				</div>
				<div class="elementor-element elementor-element-bb2c105 elementor-widget elementor-widget-progress" data-id="bb2c105" data-element_type="widget" data-widget_type="progress.default">
				   <div class="elementor-widget-container">
					  <span class="elementor-title" id="elementor-progress-bar-bb2c105">
					  Accounts Outsourcing			</span>
					  <div aria-labelledby="elementor-progress-bar-bb2c105" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="85">
						 <div class="elementor-progress-bar" data-max="85">
							<span class="elementor-progress-text"></span>
							<span class="elementor-progress-percentage">85%</span>
						 </div>
					  </div>
				   </div>
				</div>
			 </div>
		  </div>
	   </div>
	</section>
	
	@include('front.layout.project-count')

	@include('front.layout.why-choose-us')

	<section class="elementor-section elementor-top-section elementor-element elementor-element-2e185926 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2e185926" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
	   <div class="elementor-container elementor-column-gap-default">
		  <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-66990268" data-id="66990268" data-element_type="column">
			 <div class="elementor-widget-wrap elementor-element-populated">
				<div class="elementor-element elementor-element-6858ca50 elementor-widget elementor-widget-heading" data-id="6858ca50" data-element_type="widget" data-widget_type="heading.default">
				   <div class="elementor-widget-container">
					  <h2 class="elementor-heading-title elementor-size-default">Our Happy Clients</h2>
				   </div>
				</div>
				<div class="elementor-element elementor-element-60c713d2 elementor-widget elementor-widget-image" data-id="60c713d2" data-element_type="widget" data-widget_type="image.default">
				   <div class="elementor-widget-container">
					  <img loading="lazy" decoding="async" width="52" height="12" src="{{ asset('themes/image/divider.png') }}" class="attachment-large size-large wp-image-50" alt="" />															
				   </div>
				</div>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-7b5988e2 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="7b5988e2" data-element_type="section">
				   <div class="elementor-container elementor-column-gap-default">
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5f3da5af elementor-invisible" data-id="5f3da5af" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-623c3d32 elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="623c3d32" data-element_type="widget" data-widget_type="star-rating.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-star-rating__wrapper">
									 <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
								  </div>
							   </div>
							</div>
							<div class="elementor-element elementor-element-5ce03940 elementor-widget elementor-widget-testimonial" data-id="5ce03940" data-element_type="widget" data-widget_type="testimonial.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-testimonial-wrapper">
									 <div class="elementor-testimonial-content">{{ config('app.name') }} has been a game-changer for our business. Their expertise in GST and tax compliance has saved us time and stress. We appreciate their transparency and clear communication – they are truly our financial partners.</div>
									 <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
										<div class="elementor-testimonial-meta-inner">
										   <div class="elementor-testimonial-image">
											  <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design83.png') }}" class="attachment-full size-full wp-image-220" alt="" />						
										   </div>
										   <div class="elementor-testimonial-details">
											  <div class="elementor-testimonial-name">Rakesh Sharma</div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
					  <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-6d673c09 elementor-invisible" data-id="6d673c09" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
						 <div class="elementor-widget-wrap elementor-element-populated">
							<div class="elementor-element elementor-element-42251046 elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="42251046" data-element_type="widget" data-widget_type="star-rating.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-star-rating__wrapper">
									 <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i><i class="elementor-star-full">&#xE934;</i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
								  </div>
							   </div>
							</div>
							<div class="elementor-element elementor-element-78e4ae7f elementor-widget-mobile__width-initial elementor-widget elementor-widget-testimonial" data-id="78e4ae7f" data-element_type="widget" data-widget_type="testimonial.default">
							   <div class="elementor-widget-container">
								  <div class="elementor-testimonial-wrapper">
									 <div class="elementor-testimonial-content">The team at {{ config('app.name') }} goes above and beyond to ensure that our finances are in order. They’ve helped us with everything from payroll to tax planning, and their proactive approach has been invaluable to our company’s growth. Highly recommended!</div>
									 <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
										<div class="elementor-testimonial-meta-inner">
										   <div class="elementor-testimonial-image">
											  <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design84.png') }}" class="attachment-full size-full wp-image-221" alt="" />						
										   </div>
										   <div class="elementor-testimonial-details">
											  <div class="elementor-testimonial-name">Monika Rajput</div>
										   </div>
										</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </div>
					  </div>
				   </div>
				</section>
			 </div>
		  </div>
	   </div>
	</section>

	@include('front.layout.get-in-touch')

	@include('front.layout.google-map')

 </div>
@endsection
@section('pageleveljs')
@stop