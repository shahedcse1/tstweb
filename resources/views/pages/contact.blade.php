@extends('layouts.app')
@section('title', 'Contact Us')
@section('meta_desc', 'Contact TST White House Ltd. — H-12/A, Road-110, Gulshan 2, Dhaka. Phone: +88 01894 70 99 95. Email: info@tstwhitehouseltd.com')

@section('content')

<x-page-hero
    title="Contact Us"
    subtitle="Get in touch for pricing, supply agreements, and partnership inquiries."
    :breadcrumb="[['label'=>'Contact','url'=>route('contact')]]"
/>

{{-- SUCCESS MESSAGE --}}
@if(session('success'))
<div class="container" style="padding-top:32px">
    <div class="alert alert-success">
        ✅ {{ session('success') }}
    </div>
</div>
@endif

<section class="section">
    <div class="container contact-layout">

        {{-- CONTACT INFO --}}
        <div class="contact-info-panel fade-up">
            <div class="section-label">Get in Touch</div>
            <h2 class="section-title">We'd Love to Hear From You</h2>
            <p style="color:var(--text-muted);margin-bottom:40px">Whether you're looking to source commodities, discuss a partnership, or have questions about our products — our team is ready to help.</p>

            <div class="contact-info-list">
                @foreach($info as $item)
                <div class="cil-item">
                    <div class="cil-icon">{{ $item['icon'] }}</div>
                    <div>
                        <h5>{{ $item['label'] }}</h5>
                        @if(isset($item['link']))
                            <p><a href="{{ $item['link'] }}">{{ $item['value'] }}</a></p>
                        @else
                            <p>{{ $item['value'] }}</p>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            <div class="working-hours">
                <h5>Working Hours</h5>
                <p>Sunday – Thursday: 9:00 AM – 6:00 PM (BST)</p>
                <p>Friday – Saturday: Closed</p>
            </div>
        </div>

        {{-- CONTACT FORM --}}
        <div class="contact-form-panel fade-up" style="animation-delay:.15s">
            <h3>Send Us a Message</h3>
            <form action="{{ route('contact.submit') }}" method="POST" novalidate>
                @csrf
                <div class="form-row">
                    <div class="form-group">
                        <label for="name">Full Name <span class="req">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                               placeholder="Your full name" required
                               class="{{ $errors->has('name') ? 'input-error' : '' }}">
                        @error('name')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address <span class="req">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                               placeholder="you@company.com" required
                               class="{{ $errors->has('email') ? 'input-error' : '' }}">
                        @error('email')<span class="field-error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="form-group">
                    <label for="company">Company / Organization</label>
                    <input type="text" id="company" name="company" value="{{ old('company') }}"
                           placeholder="Your company name (optional)">
                </div>
                <div class="form-group">
                    <label for="subject">Subject <span class="req">*</span></label>
                    <input type="text" id="subject" name="subject" value="{{ old('subject') }}"
                           placeholder="e.g. Sugar supply inquiry, partnership discussion"
                           class="{{ $errors->has('subject') ? 'input-error' : '' }}">
                    @error('subject')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <div class="form-group">
                    <label for="product">Product Interest</label>
                    <select id="product" name="product">
                        <option value="">Select a product (optional)</option>
                        <option value="sugar" {{ old('product')=='sugar'?'selected':'' }}>Sugar</option>
                        <option value="oils" {{ old('product')=='oils'?'selected':'' }}>Edible Oils</option>
                        <option value="lentils" {{ old('product')=='lentils'?'selected':'' }}>Lentils</option>
                        <option value="salt" {{ old('product')=='salt'?'selected':'' }}>Salt</option>
                        <option value="stone" {{ old('product')=='stone'?'selected':'' }}>Stone (GABBRO)</option>
                        <option value="coal" {{ old('product')=='coal'?'selected':'' }}>Coal</option>
                        <option value="bitumen" {{ old('product')=='bitumen'?'selected':'' }}>Bitumen</option>
                        <option value="sand" {{ old('product')=='sand'?'selected':'' }}>Sand</option>
                        <option value="other" {{ old('product')=='other'?'selected':'' }}>Other / General Inquiry</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message <span class="req">*</span></label>
                    <textarea id="message" name="message" rows="5"
                              placeholder="Tell us about your requirements — volumes, delivery location, timelines, etc."
                              class="{{ $errors->has('message') ? 'input-error' : '' }}">{{ old('message') }}</textarea>
                    @error('message')<span class="field-error">{{ $message }}</span>@enderror
                </div>
                <button type="submit" class="btn btn-submit">
                    Send Message →
                </button>
            </form>
        </div>
    </div>
</section>

{{-- MAP SECTION --}}
<section class="section section-gray">
    <div class="container">
        <div class="section-header centered fade-up">
            <div class="section-label">Our Location</div>
            <h2 class="section-title">Corporate Office — Gulshan 2, Dhaka</h2>
        </div>
        <div class="map-embed fade-up">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.6!2d90.4168!3d23.7897!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDQ3JzIyLjkiTiA5MMKwMjUnMDMuMiJF!5e0!3m2!1sen!2sbd!4v1"
                width="100%" height="420" style="border:0; border-radius:16px;"
                allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
            <div class="map-address-card">
                <div class="mac-icon">📍</div>
                <div>
                    <strong>TST White House Ltd.</strong>
                    <p>H-12/A, Road-110, Gulshan 2</p>
                    <p>Dhaka-1212, Bangladesh</p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
