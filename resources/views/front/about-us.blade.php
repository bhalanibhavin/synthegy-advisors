@extends('front.front-layout')
@section('title', ($metaDataDetail && $metaDataDetail['title']) ? $metaDataDetail['title'] : 'About Us')
@section('description', ($metaDataDetail && $metaDataDetail['description']) ? $metaDataDetail['description'] : 'About Us')
@section('keywords', ($metaDataDetail && $metaDataDetail['keyword']) ? $metaDataDetail['keyword'] : 'About Us')
@section('pagelevelcss')
<link rel='stylesheet' href="{{ asset('themes/css/post-14.css') }}" />
@stop
@section('content')
<div data-elementor-type="wp-page" data-elementor-id="14" class="elementor elementor-14 elementor-14" data-elementor-post-type="page">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6ebd2690 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6ebd2690" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-780a41bb" data-id="780a41bb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5612f075 elementor-widget elementor-widget-heading animated fadeInUp" data-id="5612f075" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default"><a href="{{ route('about-us') }}">About Us</a></h1>
                    </div>
                    </div>
                    <div class="elementor-element elementor-element-307795d elementor-widget elementor-widget-image animated fadeInUp" data-id="307795d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="52" height="12" src="{{ asset('themes/image/divider-gold.png') }}" class="attachment-large size-large wp-image-77" alt="">															
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-ff16716 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="ff16716" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-36b833d" data-id="36b833d" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-1380d57 elementor-widget elementor-widget-image" data-id="1380d57" data-element_type="widget" data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <img decoding="async" width="643" height="545" src="{{ asset('themes/image/Untitled-design85.png') }}" class="attachment-large size-large wp-image-335" alt="About us" srcset="{{ asset('themes/image/Untitled-design85.png') }} 643w, {{ asset('themes/image/Untitled-design85-300x254.png') }} 300w" sizes="(max-width: 643px) 100vw, 643px">															
                </div>
                </div>
            </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c9a88b5" data-id="c9a88b5" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-6d88de7 elementor-widget elementor-widget-heading animated fadeInLeft" data-id="6d88de7" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">About Us</h2>
                </div>
                </div>
                <div class="elementor-element elementor-element-1fa2e89 elementor-widget elementor-widget-text-editor" data-id="1fa2e89" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">
                    <p>{{ config('app.name') }} is a leading accounting firm dedicated to delivering exceptional financial services across India. With years of experience in managing accounts, payroll, tax planning, and compliance, we take pride in our attention to detail and commitment to excellence. Our mission is to empower businesses with clear financial insights, robust strategies, and comprehensive support.</p>
                    <p>Our Mission To empower businesses and individuals with accurate, reliable, and efficient accounting solutions that drive financial success.</p>
                </div>
                </div>
                <div class="elementor-element elementor-element-779c0ea elementor-widget elementor-widget-progress" data-id="779c0ea" data-element_type="widget" data-widget_type="progress.default">
                <div class="elementor-widget-container">
                    <span class="elementor-title" id="elementor-progress-bar-779c0ea">
                    Tax &amp; Payroll			</span>
                    <div aria-labelledby="elementor-progress-bar-779c0ea" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="80">
                        <div class="elementor-progress-bar" data-max="80" style="width: 80%;">
                            <span class="elementor-progress-text"></span>
                            <span class="elementor-progress-percentage">80%</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-9dc2d2c elementor-widget elementor-widget-progress" data-id="9dc2d2c" data-element_type="widget" data-widget_type="progress.default">
                <div class="elementor-widget-container">
                    <span class="elementor-title" id="elementor-progress-bar-9dc2d2c">
                    Business Taxation			</span>
                    <div aria-labelledby="elementor-progress-bar-9dc2d2c" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="90">
                        <div class="elementor-progress-bar" data-max="90" style="width: 90%;">
                            <span class="elementor-progress-text"></span>
                            <span class="elementor-progress-percentage">90%</span>
                        </div>
                    </div>
                </div>
                </div>
                <div class="elementor-element elementor-element-13b1d84 elementor-widget elementor-widget-progress" data-id="13b1d84" data-element_type="widget" data-widget_type="progress.default">
                <div class="elementor-widget-container">
                    <span class="elementor-title" id="elementor-progress-bar-13b1d84">
                    Accounts Outsourcing			</span>
                    <div aria-labelledby="elementor-progress-bar-13b1d84" class="elementor-progress-wrapper" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="85">
                        <div class="elementor-progress-bar" data-max="85" style="width: 85%;">
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
</div>
<div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-post-type="page">
    @include('front.layout.project-count')

    @include('front.layout.why-choose-us')
</div>
@endsection
@section('pageleveljs')
@stop