@extends('layouts.app')
@include('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Affiliate center</div>
      <div class="page__row">
        <div class="page__col">
          <div class="card">
            <div class="card__head">
              <div class="title-red card__title">Snapshot</div>
              <select class="select select_small">
                <option>Last 7 days</option>
                <option>This month</option>
                <option>All time</option>
              </select>
            </div>
            <div class="overview js-tabs">
              <div class="overview__nav"><a class="overview__link js-tabs-link active" href="#">
                  <div class="overview__icon" style="background-color: #B1E5FC;">
                    <svg class="icon icon-mouse">
                      <use xlink:href="#icon-mouse"></use>
                    </svg>
                  </div>
                  <div class="overview__details">
                    <div class="overview__subtitle">Clicks
                      <div class="tooltip" title="Small description">
                        <svg class="icon icon-info">
                          <use xlink:href="#icon-info"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="overview__counter">411</div>
                  </div>
                  <div class="balance background negative">
                    <svg class="icon icon-arrow-bottom">
                      <use xlink:href="#icon-arrow-bottom"></use>
                    </svg>37.8%
                  </div></a><a class="overview__link js-tabs-link" href="#">
                  <div class="overview__icon" style="background-color: #CABDFF;">
                    <svg class="icon icon-activity">
                      <use xlink:href="#icon-activity"></use>
                    </svg>
                  </div>
                  <div class="overview__details">
                    <div class="overview__subtitle">Payouts
                      <div class="tooltip" title="Small description">
                        <svg class="icon icon-info">
                          <use xlink:href="#icon-info"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="overview__counter">$89</div>
                  </div>
                  <div class="balance background positive">
                    <svg class="icon icon-arrow-top">
                      <use xlink:href="#icon-arrow-top"></use>
                    </svg>37.8%
                  </div></a></div>
              <div class="overview__container">
                <div class="overview__item js-tabs-item" style="display: block;">
                  <div class="overview__chart overview__chart_snapshot">
                    <div id="snapshot-clicks"></div>
                  </div>
                </div>
                <div class="overview__item js-tabs-item">
                  <div class="overview__chart overview__chart_snapshot">
                    <div id="oveview-income"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card__head card__head_wide">
              <div class="title-purple card__title">Performance by day</div>
              <select class="select select_small">
                <option>Last 7 days</option>
                <option>This month</option>
                <option>All time</option>
              </select>
            </div>
            <div class="card__chart card__chart_performance-by-day">
              <div id="performance-by-day"></div>
            </div>
          </div>
          <div class="indicators">
            <div class="indicators__table">
              <div class="indicators__row">
                <div class="indicators__col">Date</div>
                <div class="indicators__col">Impressions
                  <div class="tooltip" title="Small description impressions">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="indicators__col">Clicks
                  <div class="tooltip" title="Small description clicks">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="indicators__col">Total earnings</div>
                <div class="indicators__col">EPC
                  <div class="tooltip" title="Small description EPC">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
              </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 09, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">263</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 50%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>37.8%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 25%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>25.2%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$0.00
                                  </div>
                                  <div class="indicators__col">$0.00
                                  </div>
                                </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 13, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">20</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 90%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>17.8%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 44%"></div>
                                        </div>
                                      </div>
                                      <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                          <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>11.9%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$18.00
                                  </div>
                                  <div class="indicators__col">$0.06
                                  </div>
                                </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 24, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">252</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 20%"></div>
                                        </div>
                                      </div>
                                      <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                          <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>37.8%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 77%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>25.8%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$24.00
                                  </div>
                                  <div class="indicators__col">$0.06
                                  </div>
                                </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 27, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">138</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 100%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>24.8%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 100%"></div>
                                        </div>
                                      </div>
                                      <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                          <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>33.4%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$0.00
                                  </div>
                                  <div class="indicators__col">$0.07
                                  </div>
                                </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 28, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">149</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 80%"></div>
                                        </div>
                                      </div>
                                      <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                          <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>14.3%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 33%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>5.5%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$0.00
                                  </div>
                                  <div class="indicators__col">$0.08
                                  </div>
                                </div>
                                <div class="indicators__row">
                                  <div class="indicators__col">Oct 29, 2021</div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">263</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_blue" style="width: 50%"></div>
                                        </div>
                                      </div>
                                      <div class="balance positive">
                                        <svg class="icon icon-arrow-top">
                                          <use xlink:href="#icon-arrow-top"></use>
                                        </svg>4.5%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">
                                    <div class="indicators__item">
                                      <div class="indicators__box">
                                        <div class="indicators__counter">72</div>
                                        <div class="indicators__line">
                                          <div class="indicators__progress indicators__progress_purple" style="width: 67%"></div>
                                        </div>
                                      </div>
                                      <div class="balance negative">
                                        <svg class="icon icon-arrow-bottom">
                                          <use xlink:href="#icon-arrow-bottom"></use>
                                        </svg>25.4%
                                      </div>
                                    </div>
                                  </div>
                                  <div class="indicators__col">$64.00
                                  </div>
                                  <div class="indicators__col">$0.24
                                  </div>
                                </div>
            </div>
          </div>
        </div>
        <div class="page__col">
          <div class="card">
            <div class="card__head">
              <div class="title-blue card__title">Create a link</div>
            </div>
            <div class="link">
              <div class="link__fieldset">
                <div class="link__title">Promote any product with a simple link</div>
                <select class="select">
                  <option>Choose your product</option>
                  <option>Choose your product 1</option>
                  <option>Choose your product 2</option>
                </select>
                <div class="field">
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="linkproduct" placeholder="Or enter a product link">
                  </div>
                </div>
                <button class="button-small link__button">Create</button>
              </div>
              <div class="link__box">
                <div class="link__label">Use this link to promote.</div>
                <div class="field field_icon field_copy">
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="link-promote" placeholder="Enter link promote">
                    <div class="field__icon">
                      <svg class="icon icon-link">
                        <use xlink:href="#icon-link"></use>
                      </svg>
                    </div>
                    <button class="field__copy">
                      <svg class="icon icon-copy">
                        <use xlink:href="#icon-copy"></use>
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
              <div class="link__box">
                <div class="link__label">Share to social accounts</div>
                <div class="link__line">
                  <div class="link__list">
                    <div class="link__avatar"><img src="img/content/avatar.jpg" alt="Avatar">
                      <div class="link__icon">
                        <svg class="icon icon-facebook-fill">
                          <use xlink:href="#icon-facebook-fill"></use>
                        </svg>
                      </div>
                    </div>
                    <div class="link__avatar"><img src="img/content/avatar.jpg" alt="Avatar">
                      <div class="link__icon">
                        <svg class="icon icon-twitter-fill">
                          <use xlink:href="#icon-twitter-fill"></use>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <button class="button-small link__button"><span>Share</span>
                    <svg class="icon icon-arrow-right">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card__head">
              <div class="title-blue card__title">Popular products</div>
            </div>
            <div class="popular">
              <div class="popular__head">
                <div class="popular__stage">Products</div>
                <div class="popular__stage">Earning</div>
              </div>
              <div class="popular__list"><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-1@2x.jpg 2x" src="img/content/product-pic-1.jpg" alt="Crypter - NFT UI kit"/></div>
                  <div class="popular__title">Crypter - NFT UI kit</div>
                  <div class="popular__details">
                    <div class="popular__price">$2,453.80</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-2@2x.jpg 2x" src="img/content/product-pic-2.jpg" alt="Bento Matte 3D illustration 1.0"/></div>
                  <div class="popular__title">Bento Matte 3D illustration 1.0</div>
                  <div class="popular__details">
                    <div class="popular__price">$105.60</div>
                    <div class="status-red popular__status">Deactive</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-3@2x.jpg 2x" src="img/content/product-pic-3.jpg" alt="Excellent material 3D chair"/></div>
                  <div class="popular__title">Excellent material 3D chair</div>
                  <div class="popular__details">
                    <div class="popular__price">$648.60</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-4@2x.jpg 2x" src="img/content/product-pic-4.jpg" alt="Fleet - travel shopping kit"/></div>
                  <div class="popular__title">Fleet - travel shopping kit</div>
                  <div class="popular__details">
                    <div class="popular__price">$648.60</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-1@2x.jpg 2x" src="img/content/product-pic-1.jpg" alt="Crypter - NFT UI kit"/></div>
                  <div class="popular__title">Crypter - NFT UI kit</div>
                  <div class="popular__details">
                    <div class="popular__price">$2,453.80</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-2@2x.jpg 2x" src="img/content/product-pic-2.jpg" alt="Bento Matte 3D illustration 1.0"/></div>
                  <div class="popular__title">Bento Matte 3D illustration 1.0</div>
                  <div class="popular__details">
                    <div class="popular__price">$105.60</div>
                    <div class="status-red popular__status">Deactive</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-3@2x.jpg 2x" src="img/content/product-pic-3.jpg" alt="Excellent material 3D chair"/></div>
                  <div class="popular__title">Excellent material 3D chair</div>
                  <div class="popular__details">
                    <div class="popular__price">$648.60</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a><a class="popular__item" href="#" data-popup=".js-popup-product">
                  <div class="popular__preview"><img srcSet="img/content/product-pic-4@2x.jpg 2x" src="img/content/product-pic-4.jpg" alt="Fleet - travel shopping kit"/></div>
                  <div class="popular__title">Fleet - travel shopping kit</div>
                  <div class="popular__details">
                    <div class="popular__price">$648.60</div>
                    <div class="status-green popular__status">Active</div>
                  </div></a>
              </div><a class="button-stroke popular__button" href="products-dashboard.html">All products</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection