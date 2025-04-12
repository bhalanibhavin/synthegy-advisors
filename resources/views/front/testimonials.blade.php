@extends('front.front-layout')
@section('title', ($metaDataDetail && $metaDataDetail['title']) ? $metaDataDetail['title'] : 'Testimonials')
@section('description', ($metaDataDetail && $metaDataDetail['description']) ? $metaDataDetail['description'] : 'Testimonials')
@section('keywords', ($metaDataDetail && $metaDataDetail['keyword']) ? $metaDataDetail['keyword'] : 'Testimonials')
@section('pagelevelcss')
<link rel='stylesheet' href="{{ asset('themes/css/post-444.css') }}" />
@stop
@section('content')
<div data-elementor-type="wp-page" data-elementor-id="444" class="elementor elementor-444" data-elementor-post-type="page">
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6a788953 elementor-section-content-middle elementor-reverse-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6a788953" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-caf001b" data-id="caf001b" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5657a9c2 elementor-widget elementor-widget-heading animated fadeInUp" data-id="5657a9c2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h1 class="elementor-heading-title elementor-size-default">Testimonials</h1>
                    </div>
                    </div>
                    <div class="elementor-element elementor-element-6b42f770 elementor-widget elementor-widget-image animated fadeInUp" data-id="6b42f770" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="52" height="12" src="{{ asset('themes/image/divider-gold.png') }}" class="attachment-large size-large wp-image-77" alt="">															
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="elementor-section elementor-top-section elementor-element elementor-element-6f9b652 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6f9b652" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9ebcd15" data-id="9ebcd15" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-98167ea elementor-widget elementor-widget-heading" data-id="98167ea" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h2 class="elementor-heading-title elementor-size-default">Our Happy Clients</h2>
                    </div>
                    </div>
                    <div class="elementor-element elementor-element-8cc2c69 elementor-widget elementor-widget-image" data-id="8cc2c69" data-element_type="widget" data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <img decoding="async" width="52" height="12" src="{{ asset('themes/image/divider.png') }}" class="attachment-large size-large wp-image-50" alt="">															
                    </div>
                    </div>
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-4301fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4301fe5" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-f4265d3 animated fadeInLeft" data-id="f4265d3" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-ca73731 elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="ca73731" data-element_type="widget" data-widget_type="star-rating.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-star-rating__wrapper">
                                        <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
                                    </div>
                                </div>
                                </div>
                                <div class="elementor-element elementor-element-70c96d1 elementor-widget elementor-widget-testimonial" data-id="70c96d1" data-element_type="widget" data-widget_type="testimonial.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-testimonial-wrapper">
                                        <div class="elementor-testimonial-content">Accountum India has been a game-changer for our business. Their expertise in GST and tax compliance has saved us time and stress. We appreciate their transparency and clear communication – they are truly our financial partners.</div>
                                        <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                            <div class="elementor-testimonial-meta-inner">
                                            <div class="elementor-testimonial-image">
                                                <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design83.png') }}" class="attachment-full size-full wp-image-220" alt="">						
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
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-37acd9f animated fadeInRight" data-id="37acd9f" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-5316e6a elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="5316e6a" data-element_type="widget" data-widget_type="star-rating.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-star-rating__wrapper">
                                        <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
                                    </div>
                                </div>
                                </div>
                                <div class="elementor-element elementor-element-d4e18d9 elementor-widget-mobile__width-initial elementor-widget elementor-widget-testimonial" data-id="d4e18d9" data-element_type="widget" data-widget_type="testimonial.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-testimonial-wrapper">
                                        <div class="elementor-testimonial-content">The team at Accountum India goes above and beyond to ensure that our finances are in order. They’ve helped us with everything from payroll to tax planning, and their proactive approach has been invaluable to our company’s growth. Highly recommended!</div>
                                        <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                            <div class="elementor-testimonial-meta-inner">
                                            <div class="elementor-testimonial-image">
                                                <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design84.png') }}" class="attachment-full size-full wp-image-221" alt="">						
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
                    <section class="elementor-section elementor-inner-section elementor-element elementor-element-2294936 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2294936" data-element_type="section">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-20f105d animated fadeInLeft" data-id="20f105d" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInLeft&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-cada91e elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="cada91e" data-element_type="widget" data-widget_type="star-rating.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-star-rating__wrapper">
                                        <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
                                    </div>
                                </div>
                                </div>
                                <div class="elementor-element elementor-element-31e99e8 elementor-widget elementor-widget-testimonial" data-id="31e99e8" data-element_type="widget" data-widget_type="testimonial.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-testimonial-wrapper">
                                        <div class="elementor-testimonial-content">I was looking for reliable accounting support, and Accountum India exceeded my expectations. Their team is knowledgeable, organized, and always available to answer my questions. Their services have been a game-changer for my business.</div>
                                        <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                            <div class="elementor-testimonial-meta-inner">
                                            <div class="elementor-testimonial-image">
                                                <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design89.png') }}" class="attachment-full size-full wp-image-462" alt="">						
                                            </div>
                                            <div class="elementor-testimonial-details">
                                                <div class="elementor-testimonial-name">Shivani Dangi</div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-143ecde animated fadeInRight" data-id="143ecde" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInRight&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-22d7f64 elementor--star-style-star_fontawesome elementor-widget elementor-widget-star-rating" data-id="22d7f64" data-element_type="widget" data-widget_type="star-rating.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-star-rating__wrapper">
                                        <div class="elementor-star-rating" title="5/5" itemtype="http://schema.org/Rating" itemscope="" itemprop="reviewRating"><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i><i class="elementor-star-full"></i> <span itemprop="ratingValue" class="elementor-screen-only">5/5</span></div>
                                    </div>
                                </div>
                                </div>
                                <div class="elementor-element elementor-element-02e6c99 elementor-widget-mobile__width-initial elementor-widget elementor-widget-testimonial" data-id="02e6c99" data-element_type="widget" data-widget_type="testimonial.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-testimonial-wrapper">
                                        <div class="elementor-testimonial-content">As a startup, we needed someone to guide us through GST and tax compliance, and Accountum India was perfect for the job. Their support and expertise have been instrumental in keeping us organized and compliant. We’re glad to have found them.</div>
                                        <div class="elementor-testimonial-meta elementor-has-image elementor-testimonial-image-position-aside">
                                            <div class="elementor-testimonial-meta-inner">
                                            <div class="elementor-testimonial-image">
                                                <img loading="lazy" decoding="async" width="60" height="60" src="{{ asset('themes/image/Untitled-design90.png') }}" class="attachment-full size-full wp-image-461" alt="">						
                                            </div>
                                            <div class="elementor-testimonial-details">
                                                <div class="elementor-testimonial-name">Varun Trivedi</div>
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
</div>
<div data-elementor-type="wp-page" data-elementor-id="12" class="elementor elementor-12" data-elementor-post-type="page">
</div>
@endsection
@section('pageleveljs')
@stop