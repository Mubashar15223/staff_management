@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Affiliate Traffic</div>
      <div class="customer card">
        <div class="card__head">
          <div class="title-purple card__title">Staff</div>
          <form class="form">
            <input class="form__input" type="text" name="search" placeholder="Search by name or email"
              required="required" autocomplete="off" />
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
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">Name</div>
                  <div class="customer__col">Days<i class="fa fa-exclamation-circle tooltip" aria-hidden="true" title="How many days worked since join our company"></i>
                  </div>
                  <div class="customer__col">C.Points</div>
                  <div class="customer__col">Salary</div>
                  <div class="customer__col">Traffic<i class="fa fa-exclamation-circle tooltip" aria-hidden="true" title="Previous month Engaged Traffic"></i></div>
                  <div class="customer__col">Reg.</div>
                  <div class="customer__col">CPC<i class="fa fa-exclamation-circle tooltip" aria-hidden="true" title="Cost Per Contribution Point"></i></div>
                  <div class="customer__col">CPR<i class="fa fa-exclamation-circle tooltip" aria-hidden="true" title="Cost Per Registration"></i></div>
                  <div class="customer__col">CPS<i class="fa fa-exclamation-circle tooltip" aria-hidden="true" title="Cost Per Engaged Session"></i></div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Chelsie</div>
                        <div class="customer__login">India</div>
                        <div class="customer__email">chelsie@ui8.net</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="days">27</div>
                  </div>
                  <div class="customer__col">
                    <div class="cpoint">45</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">$200</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$430
                      </div>
                      <div class="balance positive">
                        <svg class="icon icon-arrow-top">
                          <use xlink:href="#icon-arrow-top"></use>
                        </svg>45.3%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$400
                      </div>
                      <div class="balance positive">
                        <svg class="icon icon-arrow-top">
                          <use xlink:href="#icon-arrow-top"></use>
                        </svg>38.4%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="cpc">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">10</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Haley</div>
                        <div class="customer__login">Pakistan</div>
                        <div class="customer__email">chelsie@ui8.net</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="days">27</div>
                  </div>
                  <div class="customer__col">
                    <div class="cpoint">45</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">$200</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$320
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$300
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="cpc">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">10</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="{{asset('img/content/avatar-3.jpg')}}" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Andy</div>
                        <div class="customer__login">Bangladesh</div>
                        <div class="customer__email">chelsie@ui8.net</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="days">27</div>
                  </div>
                  <div class="customer__col">
                    <div class="cpoint">45</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">$300</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$247
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$220
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="cpc">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">10</div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">5</div>
                    </div>
                  </div>
                </div>
                <!-- <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Filomena Fahey</div>
                        <div class="customer__login">@username</div>
                        <div class="customer__email">fahey.designer@robot.co</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">fahey.designer@robot.co</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">12</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$223
                      </div>
                      <div class="balance positive">
                        <svg class="icon icon-arrow-top">
                          <use xlink:href="#icon-arrow-top"></use>
                        </svg>2.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">14</div>
                  <div class="customer__col">6</div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="img/content/avatar-3.jpg" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Orion Luettgen</div>
                        <div class="customer__login">@username</div>
                        <div class="customer__email">orion88@yahoo.com</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">orion88@yahoo.com</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">4</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$384
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">8</div>
                  <div class="customer__col">16</div>
                </div>
                <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="img/content/avatar-4.jpg" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Brown Beatty</div>
                        <div class="customer__login">@username</div>
                        <div class="customer__email">brown.be@gmail.com</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">brown.be@gmail.com</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">12</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$223
                      </div>
                      <div class="balance positive">
                        <svg class="icon icon-arrow-top">
                          <use xlink:href="#icon-arrow-top"></use>
                        </svg>2.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">14</div>
                  <div class="customer__col">6</div>
                </div> -->
                <!-- <div class="customer__row">
                  <div class="customer__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span
                          class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="customer__col">
                    <div class="customer__item">
                      <div class="customer__avatar"><img src="img/content/avatar-5.jpg" alt="Avatar"></div>
                      <div class="customer__description">
                        <div class="customer__user">Chelsie Haley</div>
                        <div class="customer__login">@username</div>
                        <div class="customer__email">chelsie@ui8.net</div>
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__email">chelsie@ui8.net</div>
                  </div>
                  <div class="customer__col">
                    <div class="status-green-dark customer__purchase">4</div>
                  </div>
                  <div class="customer__col">
                    <div class="customer__lifetime">
                      <div class="customer__price">$384
                      </div>
                      <div class="balance negative">
                        <svg class="icon icon-arrow-bottom">
                          <use xlink:href="#icon-arrow-bottom"></use>
                        </svg>12.8%
                      </div>
                    </div>
                  </div>
                  <div class="customer__col">5</div>
                  <div class="customer__col">33</div>
                </div> -->
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
                <div class="tooltip" title="For admin and Hr editable & view only">
                  <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                  </svg>
                </div>
              </div>
              <textarea class="editor__textarea js-editor"></textarea>
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
                <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed" data-position="right">
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
                        <div class="history__preview"><img srcSet="{{asset('img/content/product-pic-1@2x.jpg 2x')}}"
                            src="{{asset('img/content/product-pic-1.jpg')}}" alt="Product"></div>
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
                <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed" data-position="right">
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
                    <div class="history__col">Status</div>
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
                    <div class="history__col">
                      <div class="status-green-dark customer__purchase">Paid</div>
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