@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
        <div class="page__title h3">Settings</div>
        <div class="settings">
            <div class="settings__menu"><a class="settings__link active" href="#basics">Basics</a><a
                    class="settings__link" href="#account">Account</a><a class="settings__link"
                    href="#notifications">Other info</a><a class="settings__link" href="#payment">Payment</a></div>
            <div class="settings__wrapper">
                <select class="select">
                    <option>Basics</option>
                    <option>Account</option>
                    <option>Other info</option>
                    <option>Payment</option>
                </select>
                <div class="settings__list">
                    <div class="settings__item">
                        <div class="settings__anchor" id="basics" data-value="Basics"></div>
                        <div class="title-green settings__title">Profile information</div>
                        <div class="settings__profile">
                            <div class="settings__avatar"><img src="{{asset('img/content/avatar.jpg')}}" alt="Avatar">
                                <button class="settings__remove">
                                    <svg class="icon icon-close">
                                        <use xlink:href="#icon-close"></use>
                                    </svg>
                                </button>
                            </div>
                            <div class="settings__file">
                                <input type="file">
                                <button class="button settings__button" type="button">
                                    <svg class="icon icon-add">
                                        <use xlink:href="#icon-add"></use>
                                    </svg><span>Upload new picture</span>
                                </button>
                            </div>
                            <button class="button-stroke settings__button">Remove</button>
                        </div>
                        <div class="settings__fieldset">
                            <div class="field">
                                <div class="field__label">Display name
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="text" name="display-name">
                                </div>
                            </div>
                            <div class="field">
                                <div class="field__label">Email
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="email" name="email">
                                </div>
                            </div>
                            <div class="field">
                                <div class="field__label">Hire by
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <select class="select" name="" id="">
                                        <option value="">Mr. X</option>
                                        <option value="">Mr. Y</option>
                                        <option value="">Mr. Z</option>
                                    </select>
                                </div>
                            </div>
                            <div class="editor">
                                <div class="editor__label">BJT profile link
                                    <div class="tooltip" title="Description">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <!-- <textarea class="editor__textarea js-editor"></textarea> -->
                                <input class="field__input" type="text" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="settings__item">
                        <div class="settings__anchor" id="account" data-value="Account"></div>
                        <div class="title-purple settings__title">Login</div>
                        <div class="settings__fieldset">
                            <div class="field">
                                <div class="field__label">Old password
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="password" name="old-password">
                                </div>
                            </div>
                            <div class="settings__row">
                                <div class="field">
                                    <div class="field__label">New password
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="field__wrap">
                                        <input class="field__input" type="password" name="new-password">
                                    </div>
                                </div>
                                <div class="field">
                                    <div class="field__label">Confirm new password
                                        <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                            <svg class="icon icon-info">
                                                <use xlink:href="#icon-info"></use>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="field__wrap">
                                        <input class="field__input" type="password" name="Confirm-password">
                                    </div>
                                </div>
                            </div>
                            <button class="button-stroke settings__button">Update password</button>
                        </div>
                    </div>
                    <div class="settings__item">
                        <div class="settings__anchor" id="notifications" data-value="Notifications"></div>
                        <div class="title-red settings__title">Other info</div>
                        <div class="settings__list">
                            <div class="settings__line">
                                <div class="settings__label">Full-time
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <label class="switch">
                                    <input class="switch__input" type="checkbox" /><span class="switch__inner"><span
                                            class="switch__box"></span></span>
                                </label>
                            </div>
                            <div class="settings__line">
                                <div class="settings__label">Office Staff
                                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <label class="switch">
                                    <input class="switch__input" type="checkbox" checked="checked" /><span
                                        class="switch__inner"><span class="switch__box"></span></span>
                                </label>
                            </div>
                            <div class="field">
                                <div class="field__label">Salary Amount
                                    <div class="tooltip tooltipstered">
                                        <svg class="icon icon-info">
                                            <use xlink:href="#icon-info"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="field__wrap">
                                    <input class="field__input" type="text" name="salary-amount">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="settings__item">
                        <div class="settings__anchor" id="payment" data-value="Payment"></div>
                        <div class="title-green settings__title">Payments</div>
                        <div class="field">
                            <div class="">
                                <select id="select" class="myselect" name="Payments">
                                    <option value="Freelancer">Freelancer</option>
                                    <option value="Upwork">UpWork</option>
                                    <option value="Fiverr">Fiverr</option>
                                    <option value="Paypal">Paypal</option>
                                    <option value="Local Bank">Local Bank</option>
                                    <option value="Binance">Binance</option>
                                </select>
                            </div>
                        </div>
                        <div id="paypal" style="margin-top:20px" class="field__wrap">
                            <input class="field__input" type="email" placeholder="Paypal email" name="email">
                        </div>
                        <div style="margin-top:20px" id="bank" class="editor">
                            <div class="richText">
                                <div class="richText-toolbar">
                                    <ul>
                                        <li><a class="richText-btn" data-command="bold" title="Bold"><span
                                                    class="fa fa-bold"></span></a></li>
                                        <li><a class="richText-btn" data-command="italic" title="Italic"><span
                                                    class="fa fa-italic"></span></a></li>
                                        <li><a class="richText-btn" data-command="underline" title="Underline"><span
                                                    class="fa fa-underline"></span></a></li>
                                        <li><a class="richText-btn" data-command="justifyCenter"
                                                title="Align centered"><span class="fa fa-align-center"></span></a></li>
                                        <li><a class="richText-btn" data-command="insertUnorderedList"
                                                title="Add unordered list"><span class="fa fa-list"></span></a></li>
                                        <li><a class="richText-btn" title="Add URL"><span class="fa fa-link"></span>
                                                <div class="richText-dropdown-outer">
                                                    <div class="richText-dropdown"><span
                                                            class="richText-dropdown-close"><span title="Close"><span
                                                                    class="fa fa-times"></span></span></span>
                                                        <div class="richText-form" id="richText-URL"
                                                            data-editor="richText-wgmtir">
                                                            <div class="richText-form-item"><label
                                                                    for="url">URL</label><input type="text" id="url">
                                                            </div>
                                                            <div class="richText-form-item"><label
                                                                    for="urlText">Text</label><input type="text"
                                                                    id="urlText"></div>
                                                            <div class="richText-form-item"><label for="openIn">Open
                                                                    in</label><select id="openIn">
                                                                    <option value="_self">Same tab</option>
                                                                    <option value="_blank">New tab</option>
                                                                </select></div>
                                                            <div class="richText-form-item"><button
                                                                    class="btn">Add</button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a></li>
                                    </ul>
                                </div>
                                <div class="richText-editor" id="richText-wgmtir" contenteditable="true">
                                    <div><br></div>
                                </div><textarea placeholder="Enter your bank info.."
                                    class="editor__textarea js-editor richText-initial"
                                    style="display: none;"></textarea>
                                <div class="richText-toolbar"><a class="richText-undo is-disabled" title="Undo"><span
                                            class="fa fa-undo"></span></a><a class="richText-redo is-disabled"
                                        title="Redo"><span class="fa fa-repeat fa-redo"></span></a><a
                                        class="richText-help"><span class="fa fa-question-circle"></span></a></div>
                            </div>
                        </div>
                        <div id="binance" style="margin-top:20px;" class="field__wrap">
                            <input class="field__input" type="email" placeholder="Binance email" name="email">
                            <input style="margin-top:20px" class="field__input" type="text"
                                placeholder="USDT Address (TRC20)" name="email">
                        </div>
                    </div>

                </div>
                <button class="button settings__button">Save</button>
            </div>
        </div>
    </div>
</div>
@endsection