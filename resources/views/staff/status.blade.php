@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Claim Status</div>
      <div class="customer card">
        
        <div class="card__head">
          <div class="title-purple card__title">Staff</div>
          <form class="form">
            <input class="form__input" type="text" name="search" placeholder="Search by name or email" required="required" autocomplete="off">
            <button class="form__button">
              <svg class="icon icon-search">
                <use xlink:href="#icon-search"></use>
              </svg>
            </button>
          </form>
          <div class="card__nav">
            <button class="card__link active">Active</button>
            <button class="card__link">New</button>
          </div>
          <div class="filters">
            <button class="button-square-stroke button-small filters__head">
              <svg class="icon icon-filter">
                <use xlink:href="#icon-filter"></use>
              </svg>
            </button>
            
            <div class="filters__body">
              <div class="filters__top">
                <div class="title-red filters__title">Showing 10 of 24 staff</div>
                <button class="filters__close">
                  <svg class="icon icon-close">
                    <use xlink:href="#icon-close"></use>
                  </svg>
                </button>
              </div>
              <form class="form">
                <input class="form__input" type="text" name="search" placeholder="Search for staff"
                  required="required" autocomplete="off" />
                <button class="form__button">
                  <svg class="icon icon-search">
                    <use xlink:href="#icon-search"></use>
                  </svg>
                </button>
              </form>
              <div class="filters__group">
                <div class="filters__item">
                  <div class="field">
                    <div class="field__label">Country</div>
                    <div class="field__wrap">
                      <select class="select">
                        <option>All Countries</option>
                        <option>Bangladesh</option>
                        <option>Pakistan</option>
                        <option>India</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="filters__item">
                  <div class="filters__label">Showing</div>
                  <div class="filters__list">
                    <label id="officestaff" class="radio checkbox checkbox_reverse">
                      <input class="radio__input" type="radio" name="staff" checked=""><span class="radio__inner"><span class="radio__text">Office Staffs</span><span class="radio__tick"></span></span>
                    </label>
                    <label id="remotestaff" class="radio checkbox checkbox_reverse">
                      <input class="radio__input" type="radio" name="staff"><span class="radio__inner"><span class="radio__text">Remote Staffs</span><span class="radio__tick"></span></span>
                    </label>

                    <div style="padding-top:15px;margin-top:22px;border-top:1px solid #EFEFEF" id="ifremote">
                      <label id="fulltime" class="radio checkbox checkbox_reverse">
                        <input class="radio__input" type="radio" name="time"><span class="radio__inner"><span class="radio__text">Part-time</span><span class="radio__tick"></span></span>
                      </label>
                      <label class="radio checkbox checkbox_reverse">
                        <input class="radio__input" type="radio" name="time" checked=""><span class="radio__inner"><span class="radio__text">Full-time</span><span class="radio__tick"></span></span>
                      </label>
                    </div>
                  </div>
                </div>
                <div class="filters__item">
                  <div class="filters__label">Cost Per Contribution Point</div>
                  <div class="filters__range js-slider" data-min="0" data-max="100" data-start="20" data-end="50"
                    data-step="1" data-tooltips="true" data-prefix="$"></div>
                </div>
                <div class="filters__item">
                  <div class="filters__label">Cost Per Registration</div>
                  <div class="filters__range js-slider" data-min="0" data-max="100" data-start="1" data-end="30"
                    data-step="1" data-tooltips="true" data-prefix="$"></div>
                </div>
                <div class="filters__item">
                  <div class="filters__label">Cost Per Engaged Session</div>
                  <div class="filters__range js-slider" data-min="0" data-max="100" data-start="10" data-end="50"
                    data-step="1" data-tooltips="true" data-prefix="$"></div>
                </div>
              </div>
              <div class="filters__btns">
                <button class="button-stroke filters__button">Reset</button>
                <button class="button filters__button">Apply</button>
              </div>
            </div>
            <div class="filters__overlay"></div>
          </div>
        </div>
        <div class="customer__inner">
          <div class="customer__container">
            <div class="customer__wrapper">
              <div class="customer__table">
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">Name</div>
                  <div class="customer__col">Which Month</div>
                  <div class="customer__col">Status</div>
                  <div class="customer__col">Amount</div>
                  <div class="customer__col">Comments</div>
                  <div class="customer__col">Count</div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item" data-popup=".js-popup-refunds">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Chelsie Haley</div>
                        <div class="customer__login">Pakistan</div>
                        <div class="customer__email">January-2023</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">January-2023</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">Paid</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$384
                      </div>
                      <!-- <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div> -->
                    </div>
                  </div>
                  <div class="customer__col">8</div>
                  <div class="customer__col">16</div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item" data-popup=".js-popup-refunds">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-4.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Chelsie Haley</div>
                        <div class="customer__login">India</div>
                        <div class="customer__email">March-2023</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">March-2023</div>
                  </div>
                  <div class="customer__col">
                    <div style="background: #f1f100" class="status-green-dark customer__purchase">Approved</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$250
                      </div>
                      <!-- <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div> -->
                    </div>
                  </div>
                  <div class="customer__col">14</div>
                  <div class="customer__col">16</div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item" data-popup=".js-popup-refunds">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">James Haley</div>
                        <div class="customer__login">Bangladesh</div>
                        <div class="customer__email">August-2023</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">August-2023</div>
                  </div>
                  <div class="customer__col">
                    <div style="background:#d7d7d7;" class="status-green-dark customer__purchase">Pending</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$320
                      </div>
                      <!-- <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div> -->
                    </div>
                  </div>
                  <div class="customer__col">8</div>
                  <div class="customer__col">16</div>
                </div>

                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item" data-popup=".js-popup-refunds">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-4.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Chelsie Haley</div>
                        <div class="customer__login">India</div>
                        <div class="customer__email">March-2023</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">March-2023</div>
                  </div>
                  <div class="customer__col">
                    <div style="background: #ffa9a9" class="status-green-dark customer__purchase">Wrong info</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$250
                      </div>
                      <!-- <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div> -->
                    </div>
                  </div>
                  <div class="customer__col">12</div>
                  <div class="customer__col">16</div>
                </div>
                
              </div>
            </div>



            <div class="popup popup_refunds js-popup js-popup-refunds">
              <div class="popup__overlay js-popup-overlay"></div>
              <div class="popup__wrap js-popup-wrap">
                <div class="description">
                  <div class="title-purple description__title">Salary Request</div>
                  <div class="description__row">
                    <div class="description__col">
                      <div class="description__product">
                        <div class="description__preview"><img srcset="{{asset('img/content/avatar-1.jpg 2x')}}" src="{{asset('img/content/avatar-1.jpg')}}" alt="Product"></div>
                        <div class="description__details">
                          <div class="description__subtitle">Name</div>
                          <div class="description__new">New request</div>
                        </div>
                      </div>
                      <ul class="description__parameters">
                        <li>
                          <div class="description__label">Request send</div>
                          <div class="description__content">Aug 20, 2021</div>
                        </li>
                        <li>
                          <div class="description__label">Which Month</div>
                          <div class="description__content">September 2023</div>
                        </li>
                        <li>
                          <div class="description__label">Salary Amount</div>
                          <div class="description__yes">$200</div>
                        </li>
                        <li>
                          <div class="description__label">Locked Fund Claim</div>
                          <div class="description__yes">$200</div>
                        </li>
                        <li>
                          <div class="description__label">Debt Deduct</div>
                          <div style="background-color:#e4b5b5;" class="description__yes">$200</div>
                        </li>
                        <li>
                          <div class="description__label">Request ID</div>
                          <div class="description__content">8975ads-hd73h-8974DS</div>
                        </li>
                        <li>
                          <div class="description__label">Type
                            <div class="tooltip tooltipstered">
                              <svg class="icon icon-info-stroke">
                                <use xlink:href="#icon-info-stroke"></use>
                              </svg>
                            </div>
                          </div>
                          <div class="description__content">Paid Freelancer.com</div>
                        </li>
                        <li>
                          <div class="description__label">Final Amount
                            <div class="tooltip tooltipstered">
                              <!-- <svg class="icon icon-info-stroke">
                                <use xlink:href="#icon-info-stroke"></use>
                              </svg> -->
                            </div>
                          </div>
                          <div class="description__content">$72.88</div>
                        </li>
                      </ul>
                      <div class="description__btns">
                        <button class="button-stroke description__button">Decline</button>
                        <button class="button description__button">Approve</button>
                      </div>
                    </div>
                    <div class="description__col">
                      <div class="description__box">
                        <div class="description__info">Job scope</div>
                        <ul class="description__list">
                          <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quo dignissimos sunt voluptatum nostrum ad nihil quaerat. Laborum rem repellat fugit?</li>
                          <li>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores autem repellendus perferendis labore quo sed suscipit excepturi hic est saepe!</li>
                        </ul>
                      </div>
                      <div class="description__box">
                        <div class="description__info">Staff Claim Note</div>
                        <div class="description__comment">“ I can’t download your item at all. Even tried to change the DNS or VNP, it still doesn’t work. 😢” </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button class="popup__close js-popup-close">
                  <svg class="icon icon-close">
                    <use xlink:href="#icon-close"></use>
                  </svg>
                </button>
              </div>
            </div>



            <div class="customer__foot">
              <button class="button-stroke button-small customer__button">
                <div class="loader"></div><span>Load more</span>
              </button>
            </div>
          </div>
          <div class="customer__details details">
            <button class="details__close">
              <svg class="icon icon-close">
                <use xlink:href="#icon-close"></use>
              </svg>
            </button>
            <div class="details__head">
              <div class="details__user">
                <div class="details__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                <div class="details__wrap">
                  <div class="details__man">Chelsie Haley</div>
                  <div class="details__login">@chelsiehaly</div>
                </div>
              </div>
              <div class="details__btns">
                <button class="button-stroke details__button"><span>Follow</span>
                  <svg class="icon icon-add">
                    <use xlink:href="#icon-add"></use>
                  </svg>
                </button><a class="button details__button" href="message-center.html"><span>Message</span>
                  <svg class="icon icon-message">
                    <use xlink:href="#icon-message"></use>
                  </svg></a>
              </div>
            </div>
            <div class="editor">
              <div class="editor__label">Private note
                <div class="tooltip tooltipstered">
                  <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                  </svg>
                </div>
              </div>
              <div class="richText"><div class="richText-toolbar"><ul><li><a class="richText-btn" data-command="bold" title="Bold"><span class="fa fa-bold"></span></a></li><li><a class="richText-btn" data-command="italic" title="Italic"><span class="fa fa-italic"></span></a></li><li><a class="richText-btn" data-command="underline" title="Underline"><span class="fa fa-underline"></span></a></li><li><a class="richText-btn" data-command="justifyCenter" title="Align centered"><span class="fa fa-align-center"></span></a></li><li><a class="richText-btn" data-command="insertUnorderedList" title="Add unordered list"><span class="fa fa-list"></span></a></li><li><a class="richText-btn" title="Add URL"><span class="fa fa-link"></span><div class="richText-dropdown-outer"><div class="richText-dropdown"><span class="richText-dropdown-close"><span title="Close"><span class="fa fa-times"></span></span></span><div class="richText-form" id="richText-URL" data-editor="richText-zpnb0e"><div class="richText-form-item"><label for="url">URL</label><input type="text" id="url"></div><div class="richText-form-item"><label for="urlText">Text</label><input type="text" id="urlText"></div><div class="richText-form-item"><label for="openIn">Open in</label><select id="openIn"><option value="_self">Same tab</option><option value="_blank">New tab</option></select></div><div class="richText-form-item"><button class="btn">Add</button></div></div></div></div></a></li></ul></div><div class="richText-editor" id="richText-zpnb0e" contenteditable="true"><div><br></div></div><textarea class="editor__textarea js-editor richText-initial" style="display: none;"></textarea><div class="richText-toolbar"><a class="richText-undo is-disabled" title="Undo"><span class="fa fa-undo"></span></a><a class="richText-redo is-disabled" title="Redo"><span class="fa fa-repeat fa-redo"></span></a><a class="richText-help"><span class="fa fa-question-circle"></span></a></div></div>
            </div>
            <div class="details__group"><a class="details__line" href="mailto:fahey.designer@robot.co">
                <svg class="icon icon-mail">
                  <use xlink:href="#icon-mail"></use>
                </svg>fahey.designer@robot.co</a>
              <div class="details__socials"><a class="details__social" href="https://twitter.com/ui8" target="_blank">
                  <svg class="icon icon-twitter">
                    <use xlink:href="#icon-twitter"></use>
                  </svg></a><a class="details__social" href="https://www.instagram.com/ui8net/" target="_blank">
                  <svg class="icon icon-instagram">
                    <use xlink:href="#icon-instagram"></use>
                  </svg></a><a class="details__social" href="https://www.pinterest.com/ui8m/" target="_blank">
                  <svg class="icon icon-pinterest">
                    <use xlink:href="#icon-pinterest"></use>
                  </svg></a><a class="details__social" href="https://www.facebook.com/ui8.net/" target="_blank">
                  <svg class="icon icon-facebook">
                    <use xlink:href="#icon-facebook"></use>
                  </svg></a></div><a class="details__line" href="https://ui8.net/">
                <svg class="icon icon-link">
                  <use xlink:href="#icon-link"></use>
                </svg>robot.co</a>
            </div>
            <div class="history">
              <div class="history__label">Project Assigned
                <div class="tooltip tooltipstered" data-position="right">
                  <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                  </svg>
                </div>
              </div>
              <div class="history__inner">
                <div class="history__table">
                  <div class="history__row">
                    <div class="history__col">Project</div>
                    <div class="history__col">Cost</div>
                    <div class="history__col">C.Points</div>
                  </div>
                  <div class="history__row" data-popup=".js-popup-product">
                    <div class="history__col">
                      <div class="history__item">
                        <div class="history__preview"><img srcset="{{asset('img/content/product-pic-1@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Product"></div>
                        <div class="history__details">
                          <div class="history__product">Product Manager Matte 3D Illustration</div>
                          <div class="history__link">google.com/product/product-link</div>
                          <div class="history__price">$64
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="history__col">
                      <div class="history__price">$64
                      </div>
                    </div>
                    <div class="history__col">
                      <div class="history__date">10</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="history__foot">
                <button class="button-stroke button-small history__button">
                  <div class="loader"></div><span>Load more</span>
                </button>
              </div>
            </div>


            <div class="history">
              <div class="history__label">Salary Claim
                <div class="tooltip tooltipstered" data-position="right">
                  <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                  </svg>
                </div>
              </div>
              <div class="history__inner">
                <div class="history__table">
                  <div class="history__row">
                    <div class="history__col">Months</div>
                    <div class="history__col">Salary USD</div>
                    <div class="history__col">Date Submission</div>
                  </div>
                  <div class="history__row" data-popup=".js-popup-product">
                    <div class="history__col">
                      <div class="history__item">
                        <div class="history__details">
                          <div class="history__product">For September 2023</div>
                          <div class="history__link"></div>
                          <div class="history__price">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="history__col">
                      <div class="history__price">150
                      </div>
                    </div>
                    <div class="history__col">
                      <div class="history__date">10/09/2023</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="history__foot">
                <button class="button-stroke button-small history__button">
                  <div class="loader"></div><span>Load more</span>
                </button>
              </div>
            </div>


          </div>
        </div>
      </div>
      <div class="panel tablet-hide">
        <div class="panel__info">
          <svg class="icon icon-check-all">
            <use xlink:href="#icon-check-all"></use>
          </svg><span>2 customers</span> selected
        </div>
        <div class="panel__btns"><a class="button panel__button" href="message-center.html">Message</a></div>
      </div>
    </div>
  </div>
@endsection