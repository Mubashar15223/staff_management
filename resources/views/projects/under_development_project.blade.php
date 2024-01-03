@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Under Development</div>
      <div class="products card js-tabs">
        <div class="products__head">
          <div class="title-purple products__title">Projects</div>
          <form class="form">
            <input class="form__input" type="text" name="search" placeholder="Search product" required="required" autocomplete="off"/>
            <button class="form__button">
              <svg class="icon icon-search">
                <use xlink:href="#icon-search"></use>
              </svg>
            </button>
          </form>
          <div class="products__indicators">
            <button class="button-stroke button-small products__button">Deleted</button>
            <button class="button-stroke button-small products__button">Set status</button>
            <div class="products__counter">3 selected</div>
          </div>
        </div>
        <div class="products__container">
          <div class="products__tab js-tabs-item" style="display: block;">
            <div class="products__wrapper">
              <div class="products__table">
                <div class="products__row">
                  <div class="products__col">
                    <label class="checkbox">
                      <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                    </label>
                  </div>
                  <div class="products__col">Project</div>
                  <div class="products__col">Status</div>
                  <div class="products__col">Code</div>
                  <div class="products__col">Reg.</div>
                  <div class="products__col">Total Cost</div>
                  <div class="products__col">Total CPR</div>
                </div>
                @if(count($projects) > 0) 

                  @foreach($projects as $project)
                  <div class="products__row">
                    <div class="products__col">
                      <label class="checkbox">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span></span>
                      </label>
                    </div>
                    <div class="products__col"><a class="products__item" href="#" data-popup=".js-popup-product">
                        <div class="products__preview"><img   srcSet="img/content/product-pic-1@2x.jpg 2x" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Product"></div>
                        <div class="products__details">
                          <div class="products__subtitle">{{$project->title}}</div>
                          <div class="products__wrap">
                            <div class="products__price">$98
                            </div>
                            <div class="products__category">3m 23d</div>
                          </div>
                        </div></a></div>
                    <div class="products__col">
                      <div class="products__label">Status</div>
                      <div class="status-green products__status">Active</div>
                      <div class="control">
                        <button class="control__button">
                          <a href="products-add.html">
                            <svg class="icon icon-edit">
                              <use xlink:href="#icon-edit"></use>
                            </svg>
                          </a>
                        </button>
                        <button class="control__button">
                          <svg class="icon icon-message">
                            <use xlink:href="#icon-message"></use>
                          </svg>
                        </button>
                        <div class="actions">
                          <button class="actions__button">
                            <svg class="icon icon-more-horizontal">
                              <use xlink:href="#icon-more-horizontal"></use>
                            </svg>
                          </button>
                          <div class="actions__body">
                            <button class="actions__option">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>Edit product
                            </button>
                            <button class="actions__option">
                              <svg class="icon icon-message">
                                <use xlink:href="#icon-message"></use>
                              </svg>View comment
                            </button>
                            <button class="actions__option">
                              <svg class="icon icon-edit">
                                <use xlink:href="#icon-edit"></use>
                              </svg>Edit title & description
                            </button>
                            <button class="actions__option">
                              <svg class="icon icon-link">
                                <use xlink:href="#icon-link"></use>
                              </svg>Get shareable link 
                            </button>
                            <button class="actions__option">
                              <svg class="icon icon-trash">
                                <use xlink:href="#icon-trash"></use>
                              </svg>Delete forever 
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="products__col">{{$project->code}}
                    </div>
                    <div class="products__col">
                      <div class="products__label">Sales</div>
                      <div class="products__sales">
                        <div class="products__number">12367
                        </div>
                        <div class="balance positive">
                          <svg class="icon icon-arrow-top">
                            <use xlink:href="#icon-arrow-top"></use>
                          </svg>37.8
                        </div>
                      </div>
                    </div>
                    <div class="products__col">
                      <div class="products__label">Views</div>
                      <div class="products__box">
                        <div class="products__number">$900</div>
                      </div>
                    </div>
                    <div class="products__col">
                      <div class="products__label">Likes</div>
                      <div class="products__box">
                        <div class="products__number">111</div>
                      </div>
                    </div>
                  </div>

                  @endforeach

                @endif
             
            </div>
            <div class="products__foot">
              <button class="products__arrow">
                <svg class="icon icon-arrow-left">
                  <use xlink:href="#icon-arrow-left"></use>
                </svg>
              </button>
              <button class="products__arrow">
                <svg class="icon icon-arrow-right">
                  <use xlink:href="#icon-arrow-right"></use>
                </svg>
              </button>
            </div>
          </div>
          
          
        </div>
      </div>
      <div class="panel tablet-hide">
        <div class="panel__info">
          <svg class="icon icon-check-all">
            <use xlink:href="#icon-check-all"></use>
          </svg>2 products selected
        </div>
        <div class="panel__btns">
          <button class="button-stroke-red panel__button"><span>Deleted</span>
            <svg class="icon icon-trash">
              <use xlink:href="#icon-trash"></use>
            </svg>
          </button>
          <button class="button panel__button">Publish</button>
        </div>
      </div>
      <div class="popup popup_schedule js-popup js-popup-schedule">
        <div class="popup__overlay js-popup-overlay"></div>
        <div class="popup__wrap js-popup-wrap">
          <div class="calendar js-calendar">
            <div class="title-red calendar__title">Reschedule product</div>
            <div class="calendar__note">Choose a day and time in the future you want your product to be published.</div>
            <div class="calendar__list">
              <div class="calendar__item calendar__item_date js-calendar-item">
                <div class="calendar__head js-calendar-head">
                  <svg class="icon icon-calendar">
                    <use xlink:href="#icon-calendar"></use>
                  </svg>
                  <div class="calendar__details">
                    <div class="calendar__category">Date</div>
                    <input class="calendar__value js-date-range" type="text" data-single-month="true" data-container=".js-date-container">
                  </div>
                </div>
                <div class="calendar__body js-calendar-body">
                  <div class="calendar__container js-date-container"></div>
                  <div class="calendar__foot">
                    <button class="button-stroke button-small calendar__button js-date-clear">Clear</button>
                    <button class="button-small calendar__button js-calendar-close">Close</button>
                  </div>
                </div>
              </div>
              <div class="calendar__item calendar__item_time js-calendar-item">
                <div class="calendar__head js-calendar-head">
                  <svg class="icon icon-clock">
                    <use xlink:href="#icon-clock"></use>
                  </svg>
                  <div class="calendar__details">
                    <div class="calendar__category">Time</div>
                    <div class="calendar__value js-calendar-value"> </div>
                  </div>
                </div>
                <div class="calendar__body js-calendar-body">
                  <div class="calendar__top">
                    <div class="calendar__subtitle js-calendar-title"></div>
                    <button class="calendar__close js-calendar-close">
                      <svg class="icon icon-close">
                        <use xlink:href="#icon-close"></use>
                      </svg>
                    </button>
                  </div>
                  <ul class="calendar__time js-calendar-time">
                    <li>12:00 AM</li>
                    <li>12:30 AM</li>
                    <li>1:00 AM</li>
                    <li class="active">1:30 AM</li>
                    <li>2:00 AM</li>
                    <li>2:30 AM</li>
                    <li>3:00 AM</li>
                    <li>3:30 AM</li>
                    <li>4:00 AM</li>
                    <li>4:30 AM</li>
                    <li>5:00 AM</li>
                    <li>5:30 AM</li>
                    <li>6:00 AM</li>
                    <li>6:30 AM</li>
                    <li>7:00 AM</li>
                    <li>7:30 AM</li>
                    <li>8:00 AM</li>
                    <li>8:30 AM</li>
                    <li>9:00 AM</li>
                    <li>9:30 AM</li>
                    <li>10:00 AM</li>
                    <li>10:30 AM</li>
                    <li>11:00 AM</li>
                    <li>11:30 AM</li>
                    <li>12:00 PM</li>
                    <li>12:30 PM</li>
                    <li>1:00 PM</li>
                    <li>1:30 PM</li>
                    <li>2:00 PM</li>
                    <li>2:30 PM</li>
                    <li>3:00 PM</li>
                    <li>3:30 PM</li>
                    <li>4:00 PM</li>
                    <li>4:30 PM</li>
                    <li>5:00 PM</li>
                    <li>5:30 PM</li>
                    <li>6:00 PM</li>
                    <li>6:30 PM</li>
                    <li>7:00 PM</li>
                    <li>7:30 PM</li>
                    <li>8:00 PM</li>
                    <li>8:30 PM</li>
                    <li>9:00 PM</li>
                    <li>9:30 PM</li>
                    <li>10:00 PM</li>
                    <li>10:30 PM</li>
                    <li>11:00 PM</li>
                    <li>11:30 PM</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="calendar__btns">
              <button class="button calendar__button">Reschedule</button>
            </div>
          </div>
          <button class="popup__close js-popup-close">
            <svg class="icon icon-close">
              <use xlink:href="#icon-close"></use>
            </svg>
          </button>
        </div>
      </div>
    </div>
  </div>
  @endsection
 