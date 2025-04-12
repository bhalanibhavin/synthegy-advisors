@extends('front.front-layout')
@section('title', ($metaDataDetail && $metaDataDetail['title']) ? $metaDataDetail['title'] : 'Contact Us')
@section('description', ($metaDataDetail && $metaDataDetail['description']) ? $metaDataDetail['description'] : 'Contact Us')
@section('keywords', ($metaDataDetail && $metaDataDetail['keyword']) ? $metaDataDetail['keyword'] : 'Contact Us')
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
                        <h1 class="elementor-heading-title elementor-size-default"><a href="{{ route('contact-us') }}">Contact Us</a></h1>
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
</div>
<div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-post-type="page">
    @include('front.layout.get-in-touch')

    @include('front.layout.google-map')
</div>

@endsection
@section('pageleveljs')
@stop