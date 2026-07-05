@extends('layouts.app')

@section('content')
    <div class="page" id="page-contact">
        <div class="contact-layout">
            <div class="contact-left-panel">
                <span class="section-label">{{ $data->content->contact_label->value ?? '' }}</span>
                <h2 class="section-h2">{!! $data->content->contact_h2->value ?? '' !!}</h2>
                <p class="clp-sub">{{ $data->content->contact_sub->value ?? '' }}</p>
                {{-- <div class="contact-info">
                    <div class="ci">
                        <div class="ci-icon">📧</div>
                        <div>
                            <div class="ci-label">{{ $data->content->contact_email_label->value ?? '' }}</div>
                            <div class="ci-val">{{ $data->content->contact_email_val->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">💬</div>
                        <div>
                            <div class="ci-label">{{ $data->content->contact_chat_label->value ?? '' }}</div>
                            <div class="ci-val">{{ $data->content->contact_chat_val->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">📍</div>
                        <div>
                            <div class="ci-label">{{ $data->content->contact_location_label->value ?? '' }}</div>
                            <div class="ci-val">{{ $data->content->contact_location_val->value ?? '' }}</div>
                        </div>
                    </div>
                    <div class="ci">
                        <div class="ci-icon">⏱️</div>
                        <div>
                            <div class="ci-label">{{ $data->content->contact_response_label->value ?? '' }}</div>
                            <div class="ci-val">{{ $data->content->contact_response_val->value ?? '' }}</div>
                        </div>
                    </div>
                </div>
                <div style="margin-bottom:20px;font-size:12px;font-weight:600;letter-spacing:1px;text-transform:uppercase;color:rgba(250,247,242,.3);">
                    {{ $data->content->contact_social_label->value ?? '' }}
                </div>
                <div class="contact-social">
                    <div class="cs-btn">📸</div>
                    <div class="cs-btn">🎵</div>
                    <div class="cs-btn">🐦</div>
                    <div class="cs-btn">📌</div>
                </div> --}}
            </div>

            <div class="contact-right-panel">
                <div class="cf-heading">{{ $data->content->form_heading->value ?? '' }}</div>
                <div class="cf-row">
                    <div class="cf-group">
                        <label class="cf-label">{{ $data->content->form_firstname_label->value ?? '' }}</label>
                        <input class="cf-input" type="text" placeholder="{{ $data->content->form_firstname_placeholder->value ?? '' }}" />
                    </div>
                    <div class="cf-group">
                        <label class="cf-label">{{ $data->content->form_lastname_label->value ?? '' }}</label>
                        <input class="cf-input" type="text" placeholder="{{ $data->content->form_lastname_placeholder->value ?? '' }}" />
                    </div>
                </div>
                <div class="cf-group">
                    <label class="cf-label">{{ $data->content->form_email_label->value ?? '' }}</label>
                    <input class="cf-input" type="email" placeholder="{{ $data->content->form_email_placeholder->value ?? '' }}" />
                </div>
                <div class="cf-group">
                    <label class="cf-label">{{ $data->content->form_topic_label->value ?? '' }}</label>
                    <div class="cf-chips">
                        <div class="cf-chip active" onclick="selectChip(this)">{{ $data->content->form_chip1->value ?? '' }}</div>
                        <div class="cf-chip" onclick="selectChip(this)">{{ $data->content->form_chip2->value ?? '' }}</div>
                        <div class="cf-chip" onclick="selectChip(this)">{{ $data->content->form_chip3->value ?? '' }}</div>
                        <div class="cf-chip" onclick="selectChip(this)">{{ $data->content->form_chip4->value ?? '' }}</div>
                        <div class="cf-chip" onclick="selectChip(this)">{{ $data->content->form_chip5->value ?? '' }}</div>
                        <div class="cf-chip" onclick="selectChip(this)">{{ $data->content->form_chip6->value ?? '' }}</div>
                    </div>
                </div>
                <div class="cf-group">
                    <label class="cf-label">{{ $data->content->form_message_label->value ?? '' }}</label>
                    <textarea class="cf-input" placeholder="{{ $data->content->form_message_placeholder->value ?? '' }}"></textarea>
                </div>
                <button class="cf-submit" onclick="handleContactSubmit(this)">{{ $data->content->form_submit->value ?? '' }}</button>
                <div class="cf-privacy">{{ $data->content->form_privacy->value ?? '' }}</div>
            </div>
        </div>

        <!-- FAQ -->
        <section class="faq-section">
            <span class="section-label">{{ $data->content->faq_label->value ?? '' }}</span>
            <h2 class="section-h2" style="margin-bottom:36px;">{!! $data->content->faq_h2->value ?? '' !!}</h2>
            <div class="faq-grid">
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q1->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a1->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q2->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a2->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q3->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a3->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q4->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a4->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q5->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a5->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q6->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a6->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q7->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a7->value ?? '' }}</div>
                </div>
                <div class="faq-item" onclick="toggleFaq(this)">
                    <div class="faq-q">{{ $data->content->faq_q8->value ?? '' }}</div>
                    <div class="faq-a">{{ $data->content->faq_a8->value ?? '' }}</div>
                </div>
            </div>
        </section>
    </div>
@endsection
