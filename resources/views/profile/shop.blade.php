@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="shop">
        <div class="shop__background"><img src="{{asset('img/content/bg-shop.jpg')}}" alt="Background"></div>
        <div class="shop__tabs card js-tabs">
          <div class="shop__profile">
            <div class="shop__details">
              <div class="shop__avatar"><img src="{{asset('img/content/avatar.jpg')}}" alt="Avatar">
                <button class="shop__add">
                  <svg class="icon icon-add">
                    <use xlink:href="#icon-add"></use>
                  </svg>
                </button>
              </div>
              <div class="shop__wrap">
                <div class="h4 shop__man">Chelsie Haley</div>
                <div class="shop__info">Dream big. Think different. Do great!</div>
              </div>
            </div>
            <div class="shop__contacts">
              <div class="shop__socials"><a class="shop__social" href="#" target="_blank">
                  <img src="{{asset('https://www.bjbaji.com/images/web/bj-favicon.ico')}}"></a><a class="shop__social" href="#" target="_blank">
                  <img src="{{asset('https://www.freelancer.com/favicon.ico')}}"></a><a class="shop__social" href="#" target="_blank">
                  <img src="{{asset('https://www.upwork.com/favicon.ico')}}"></a>
                  <a class="shop__social" href="#" target="_blank">
                  <img src="{{asset('https://fiverr-res.cloudinary.com/npm-assets/layout-server/favicon.52df53a.ico')}}"></a>
                </div>
              <button class="button shop__button">BJT Profile</button>
            </div>
          </div>
          <div class="shop__control">
            <div class="shop__nav">
              <a class="shop__link js-tabs-link active" href="#">Projects</a>
              <a class="shop__link js-tabs-link" href="#">Guiding</a>
              <a class="shop__link js-tabs-link" href="#">Recruiting</a>
            </div>
            <div class="shop__select">
              <!-- <select class="select select_small">
                <option>Most recent</option>
                <option>Most new</option>
                <option>Most popular</option>
              </select> -->
            </div>
            <!-- <div class="filters">
              <button class="button-square-stroke button-small filters__head">
                <svg class="icon icon-filter">
                  <use xlink:href="#icon-filter"></use>
                </svg>
              </button>
              <div class="filters__body">
                <div class="filters__top">
                  <div class="title-red filters__title">Showing 9 of 32 products</div>
                  <button class="filters__close">
                    <svg class="icon icon-close">
                      <use xlink:href="#icon-close"></use>
                    </svg>
                  </button>
                </div>
                <form class="form">
                  <input class="form__input" type="text" name="search" placeholder="Search for products" required="required" autocomplete="off"/>
                  <button class="form__button">
                    <svg class="icon icon-search">
                      <use xlink:href="#icon-search"></use>
                    </svg>
                  </button>
                </form>
                <div class="filters__group">
                  <div class="filters__item">
                    <div class="field">
                      <div class="field__label">Sort by</div>
                      <div class="field__wrap">
                        <select class="select">
                          <option>Featured</option>
                          <option>Last</option>
                          <option>New</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="filters__item">
                    <div class="filters__label">Showing</div>
                    <div class="filters__list">
                      <label class="checkbox checkbox_reverse">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">All products</span></span>
                      </label>
                      <label class="checkbox checkbox_reverse">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">UI Kit</span></span>
                      </label>
                      <label class="checkbox checkbox_reverse">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Illustration</span></span>
                      </label>
                      <label class="checkbox checkbox_reverse">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Wireframe kit</span></span>
                      </label>
                      <label class="checkbox checkbox_reverse">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Icons</span></span>
                      </label>
                    </div>
                  </div>
                  <div class="filters__item">
                    <div class="filters__label">Price</div>
                    <div class="filters__range js-slider" data-min="0" data-max="100" data-start="20" data-end="50" data-step="1" data-tooltips="true" data-prefix="$"></div>
                  </div>
                  <div class="filters__item">
                    <div class="filters__box">
                      <div class="field">
                        <div class="field__label">Rating</div>
                        <div class="field__wrap">
                          <select class="select select_up">
                            <option>1 and up</option>
                            <option>2 and up</option>
                            <option>3 and up</option>
                            <option selected>4 and up</option>
                            <option>5</option>
                          </select>
                        </div>
                      </div>
                      <svg class="icon icon-heart-fill">
                        <use xlink:href="#icon-heart-fill"></use>
                      </svg>
                    </div>
                  </div>
                </div>
                <div class="filters__btns">
                  <button class="button-stroke filters__button">Reset</button>
                  <button class="button filters__button">Apply</button>
                </div>
              </div>
              <div class="filters__overlay"></div>
            </div> -->
          </div>
          <div class="shop__container">
            <div class="shop__tab js-tabs-item" style="display: block;">
              <div class="shop__products">
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-1@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$64
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-2@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-2.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$123
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-3@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-3.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name </div>
                    <div class="summary__empty">$0
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-stroke">
                        <use xlink:href="#icon-star-stroke"></use>
                      </svg>No ratings
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-6@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-6.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$64
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-5@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-5.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$123
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-4@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-4.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name </div>
                    <div class="summary__price">$45
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-1@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$64
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-2@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-2.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name</div>
                    <div class="summary__price">$123
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
                <div class="summary">
                  <div class="summary__preview"><img srcSet="{{asset('img/content/product-pic-3@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-3.jpg')}}" alt="Product"/>
                    <div class="summary__control">
                      <button class="summary__button">
                        <svg class="icon icon-edit">
                          <use xlink:href="#icon-edit"></use>
                        </svg>
                      </button>
                      <button data-popup=".js-popup-product" class="summary__button">
                         <i class="fa fa-area-chart " aria-hidden="true"></i>
                      </button>
                      <button class="summary__button">
                        <svg class="icon icon-arrow-right">
                          <use xlink:href="#icon-arrow-right"></use>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="summary__line">
                    <div class="summary__title">Project Name </div>
                    <div class="summary__price">$45
                    </div>
                  </div>
                  <div class="ratin-section">
                    <div class="position">
                      <p>Manager</p>
                    </div>
                    <div class="summary__rating">
                      <svg class="icon icon-star-fill">
                        <use xlink:href="#icon-star-fill"></use>
                      </svg>4.8
                      <div class="summary__counter">(87)
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="shop__foot">
                <button class="button-stroke button-small shop__button">Load more</button>
              </div>
            </div>
            <div class="shop__tab js-tabs-item">
              <div class="work-guide">
                <a class="button header__button" href="#">
                  <span>Add Guider</span></a>
              </div>
              <div class="shop__group">
                <div class="follower">
                  <div class="follower__details">
                    <div class="follower__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"/></div>
                    <div class="follower__wrap">
                      <div class="follower__man">Reed Parker</div>
                      <div class="follower__list">
                        <div class="follower__counter"><span>16 </span>projects</div>
                        <div class="follower__counter"><span>34 </span>C.points</div>
                      </div>
                      <div class="follower__btns">
                        <button class="button-stroke follower__button follower__button_follow">Visit profile</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="follower__gallery">
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-1@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="img/content/product-pic-2@2x.jpg 2x" src="{{asset('img/content/product-pic-2.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="img/content/product-pic-3@2x.jpg 2x" src="{{asset('img/content/product-pic-3.jpg')}}" alt="Core - Dashboard Builder"/></div>
                  </div>
                </div>
                <div class="follower">
                  <div class="follower__details">
                    <div class="follower__avatar"><img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar"/></div>
                    <div class="follower__wrap">
                      <div class="follower__man">Tristian Hermiston</div>
                      <div class="follower__list">
                        <div class="follower__counter"><span>16 </span>projects</div>
                        <div class="follower__counter"><span>34 </span>C.points</div>
                      </div>
                      <div class="follower__btns">
                        <button class="button-stroke follower__button follower__button_follow">Visit profile</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="follower__gallery">
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-4@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-4.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-5@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-5.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-6@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-6.jpg')}}" alt="Core - Dashboard Builder"/></div>
                  </div>
                </div>
              </div>
              <div class="shop__foot">
                <button class="button-stroke button-small shop__button">Load more</button>
              </div>
            </div>
            <div class="shop__tab js-tabs-item">
              <div class="work-guide">
                <p class="who-recruite">
                  <img src="img/content/avatar-1.jpg" style="cursor: default;">
                  <span><strong style="color:#000">Super</strong> recuit me</span>
                </p>
              </div>
              <div class="shop__group">
                <div class="follower">
                  <div class="follower__details">
                    <div class="follower__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"/></div>
                    <div class="follower__wrap">
                      <div class="follower__man">Reed Parker</div>
                      <div class="follower__list">
                        <div class="follower__counter"><span>16 </span>projects</div>
                        <div class="follower__counter"><span>34 </span>C.points</div>
                      </div>
                      <div class="follower__btns">
                        <button class="button-stroke follower__button follower__button_follow">Visit profile</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="follower__gallery">
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-1@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-1.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-2@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-2.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-3@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-3.jpg')}}" alt="Core - Dashboard Builder"/></div>
                  </div>
                </div>
                <div class="follower">
                  <div class="follower__details">
                    <div class="follower__avatar"><img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar"/></div>
                    <div class="follower__wrap">
                      <div class="follower__man">Tristian Hermiston</div>
                      <div class="follower__list">
                        <div class="follower__counter"><span>16 </span>projects</div>
                        <div class="follower__counter"><span>34 </span>C.points</div>
                      </div>
                      <div class="follower__btns">
                        <button class="button-stroke follower__button follower__button_follow">Visit profile</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="follower__gallery">
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-4@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-4.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{asset('img/content/product-pic-5@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-5.jpg')}}" alt="Core - Dashboard Builder"/></div>
                    <div class="follower__preview"><img srcSet="{{('img/content/product-pic-6@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-6.jpg')}}" alt="Core - Dashboard Builder"/></div>
                  </div>
                </div>
              </div>
              <div class="shop__foot">
                <button class="button-stroke button-small shop__button">Load more</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection