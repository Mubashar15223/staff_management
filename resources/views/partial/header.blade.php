<header class="header " data-id="#header">
  <button class="header__burger"></button>
  <div class="search">
    <div class="search__head">
      <button class="search__start">
        <svg class="icon icon-search">
          <use xlink:href="#icon-search"></use>
        </svg>
      </button>
      <button class="search__direction">
        <svg class="icon icon-arrow-left">
          <use xlink:href="#icon-arrow-left"></use>
        </svg>
      </button>
      <input class="search__input" type="text" placeholder="Search or type a command">
      <button class="search__result">⌘ F</button>
      <button class="search__close">
        <svg class="icon icon-close-circle">
          <use xlink:href="#icon-close-circle"></use>
        </svg>
      </button>
    </div>
    <div class="search__body">
      <div class="search__box">
        <div class="search__category">Search Project</div>
        <div class="search__list">
                          <div class="search__item"><a class="search__link js-popup-open" href="#" data-popup=".js-popup-product">
                              <div class="search__preview"><img srcset="{{asset('img/content/product-pic-3@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-3.jpg')}}" alt="Put your title here"></div>
                              <div class="search__details">
                                <div class="search__title">Project A</div>
                                <div class="search__content">Lunched</div>
                              </div></a>
                            <button class="search__remove">
                              <svg class="icon icon-close">
                                <use xlink:href="#icon-close"></use>
                              </svg>
                            </button>
                          </div>
                          <div class="search__item"><a class="search__link js-popup-open" href="#" data-popup=".js-popup-product">
                              <div class="search__preview"><img srcset="{{asset('img/content/product-pic-4@2x.jpg 2x')}}" src="{{asset('img/content/product-pic-4.jpg')}}" alt="Put your title here"></div>
                              <div class="search__details">
                                <div class="search__title">Project B</div>
                                <div class="search__content">Under Developed</div>
                              </div></a>
                            <button class="search__remove">
                              <svg class="icon icon-close">
                                <use xlink:href="#icon-close"></use>
                              </svg>
                            </button>
                          </div>
        </div>
      </div>
      <div class="search__box">
        <div class="search__category">Search Staff</div>
        <div class="search__list"><a class="search__suggestion" href="shop.html">
                            <div class="customer__avatar">
                              <img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar" style="cursor: default;">
                            </div>
                            <div class="search__details">
                              <div class="search__title">John</div>
                              <div class="search__content">India</div>
                            </div>
                            <div class="search__arrow">
                              <svg class="icon icon-arrow-next">
                                <use xlink:href="#icon-arrow-next"></use>
                              </svg>
                            </div></a><a class="search__suggestion" href="shop.html">
                            <div class="customer__avatar">
                              <img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar" style="cursor: default;">
                            </div>
                            <div class="search__details">
                              <div class="search__title">David</div>
                              <div class="search__content">Pakistan</div>
                            </div>
                            <div class="search__arrow">
                              <svg class="icon icon-arrow-next">
                                <use xlink:href="#icon-arrow-next"></use>
                              </svg>
                            </div></a>
        </div>
      </div>
    </div>
  </div>
  <button class="header__search">
    <svg class="icon icon-search">
      <use xlink:href="#icon-search"></use>
    </svg>
  </button>
  <div class="header__control"><a class="button header__button" href="{{route('projects.create')}}">
      <svg class="icon icon-add">
        <use xlink:href="#icon-add"></use>
      </svg><span>Create</span></a>
    <div class="header__item header__item_messages">
      <button class="header__head active">
        <svg class="icon icon-message">
          <use xlink:href="#icon-message">{{('header.message')}}</use>
        </svg>
      </button>
      <div class="header__body">
        <div class="header__top">
          <div class="header__title">Message</div>
          <div class="actions actions_small">
            <button class="actions__button">
              <svg class="icon icon-more-horizontal">
                <use xlink:href="#icon-more-horizontal"></use>
              </svg>
            </button>
            <div class="actions__body">
              <button class="actions__option">
                <svg class="icon icon-check">
                  <use xlink:href="#icon-check"></use>
                </svg>Mark as read
              </button>
              <button class="actions__option">
                <svg class="icon icon-trash">
                  <use xlink:href="#icon-trash"></use>
                </svg>Delete message
              </button>
            </div>
          </div>
        </div>
        <div class="header__list"><a class="header__message new" href="message-center.html">
                            <div class="header__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar"></div>
                            <div class="header__details">
                              <div class="header__line">
                                <div class="header__subtitle">Jarret Waelchi</div>
                                <div class="header__time">03:30PM</div>
                              </div>
                              <div class="header__content">When do you release the coded template</div>
                            </div></a><a class="header__message online" href="message-center.html">
                            <div class="header__avatar"><img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar"></div>
                            <div class="header__details">
                              <div class="header__line">
                                <div class="header__subtitle">Orval Casper</div>
                                <div class="header__time">11:59AM</div>
                              </div>
                              <div class="header__content">When do you release the coded template</div>
                            </div></a><a class="header__message new" href="message-center.html">
                            <div class="header__avatar"><img src="{{asset('img/content/avatar-3.jpg')}}" alt="Avatar"></div>
                            <div class="header__details">
                              <div class="header__line">
                                <div class="header__subtitle">Michel Emard</div>
                                <div class="header__time">09:30AM</div>
                              </div>
                              <div class="header__content">When do you release the coded template</div>
                            </div></a><a class="header__message" href="message-center.html">
                            <div class="header__avatar"><img src="{{asset('img/content/avatar-4.jpg')}}" alt="Avatar"></div>
                            <div class="header__details">
                              <div class="header__line">
                                <div class="header__subtitle">Reuben Ward</div>
                                <div class="header__time">08:00AM</div>
                              </div>
                              <div class="header__content">When do you release the coded template</div>
                            </div></a><a class="header__message" href="message-center.html">
                            <div class="header__avatar"><img src="{{asset('img/content/avatar-5.jpg')}}" alt="Avatar"></div>
                            <div class="header__details">
                              <div class="header__line">
                                <div class="header__subtitle">Evalyn Jenkins</div>
                                <div class="header__time">07:01AM</div>
                              </div>
                              <div class="header__content">When do you release the coded template</div>
                            </div></a>
        </div><a class="button header__button" href="message-center.html">View in message center</a>
      </div>
    </div>
    <div class="header__item header__item_notifications">
      <button class="header__head active">
        <svg class="icon icon-notification">
          <use xlink:href="#icon-notification"></use>
        </svg>
      </button>
      <div class="header__body">
        <div class="header__top">
          <div class="header__title">Notification</div>
          <div class="actions actions_small">
            <button class="actions__button">
              <svg class="icon icon-more-horizontal">
                <use xlink:href="#icon-more-horizontal"></use>
              </svg>
            </button>
            <div class="actions__body">
              <button class="actions__option">
                <svg class="icon icon-check">
                  <use xlink:href="#icon-check"></use>
                </svg>Mark as read
              </button>
              <button class="actions__option">
                <svg class="icon icon-trash">
                  <use xlink:href="#icon-trash"></use>
                </svg>Delete notifications
              </button>
            </div>
          </div>
        </div>
        <div class="header__list"><a class="header__notification new" href="notification.html">
            <div class="header__avatar"><img src="{{asset('img/content/avatar-1.jpg')}}" alt="Avatar">
              <div class="header__icon" style="background-color: #2A85FF;"><img src="{{asset('img/content/message.svg')}}" alt="Status"></div>
            </div>
            <div class="header__details">
              <div class="header__line">
                <div class="header__subtitle">Domenica</div>
                <div class="header__login">@domenica</div>
                <div class="header__time">1h</div>
              </div>
              <div class="header__content">Comment on <strong>Smiles – 3D icons</strong></div>
            </div></a><a class="header__notification new" href="notification.html">
            <div class="header__avatar"><img src="{{asset('img/content/avatar-2.jpg')}}" alt="Avatar">
              <div class="header__icon" style="background-color: #FF6A55;"><img src="{{asset('img/content/heart.svg')}}" alt="Status"></div>
            </div>
            <div class="header__details">
              <div class="header__line">
                <div class="header__subtitle">Janice</div>
                <div class="header__login">@ethel</div>
                <div class="header__time">2h</div>
              </div>
              <div class="header__content">Likes <strong>Smiles – 3D icons</strong></div>
            </div></a><a class="header__notification new" href="notification.html">
            <div class="header__avatar"><img src="{{asset('img/content/avatar-3.jpg')}}" alt="Avatar">
              <div class="header__icon" style="background-color: #83BF6E;"><img src="{{asset('img/content/shopping-bag.svg')}}" alt="Status"></div>
            </div>
            <div class="header__details">
              <div class="header__line">
                <div class="header__subtitle">Janiya</div>
                <div class="header__login">@ethel</div>
                <div class="header__time">4h</div>
              </div>
              <div class="header__content">Purchased <strong>Smiles – 3D icons</strong></div>
            </div></a><a class="header__notification" href="notification.html">
            <div class="header__avatar"><img src="{{asset('img/content/avatar-4.jpg')}}" alt="Avatar">
              <div class="header__icon" style="background-color: #8E59FF;"><img src="{{asset('img/content/star.svg')}}" alt="Status"></div>
            </div>
            <div class="header__details">
              <div class="header__line">
                <div class="header__subtitle">Danial</div>
                <div class="header__login">@danial</div>
                <div class="header__time">6h</div>
              </div>
              <div class="header__content">Rate <img src="{{asset('img/content/rating-star.svg')}}" alt="Star"/> <strong>5</strong> for <strong>Smiles – 3D icons</strong></div>
            </div></a><a class="header__notification" href="notification.html">
            <div class="header__avatar"><img src="{{asset('img/content/avatar-5.jpg')}}" alt="Avatar">
              <div class="header__icon" style="background-color: #2A85FF;"><img src="{{asset('img/content/message.svg')}}" alt="Status"></div>
            </div>
            <div class="header__details">
              <div class="header__line">
                <div class="header__subtitle">Esmeralda</div>
                <div class="header__login">@esmeralda</div>
                <div class="header__time">8h</div>
              </div>
              <div class="header__content">Comment on <strong>Smiles – 3D icons</strong></div>
            </div></a></div><a class="button header__button" href="notification.html">See all notifications</a>
      </div>
    </div>
    <div class="header__item header__item_user">
      <button class="header__head"><img src="{{asset('img/content/avatar.jpg')}}" alt="Avatar"></button>
      <div class="header__body">
        <a class="header__link active" href="{{route('profile.index')}}">Profile</a>
        <a style="margin-bottom: 12px;padding-bottom: 12px;border-bottom: 1px solid #EFEFEF;border-radius: 0;margin-top: 12px;" class="header__link" href="{{route('settings.index')}}">Edit profile</a>
        <div class="header__nav"><a class="header__link" href="{{route('customer_overview.index')}}">
            <svg class="icon icon-bar-chart">
              <use xlink:href="#icon-bar-chart"></use>
            </svg>Analytics</a><a class="header__link" href="{{route('customer_overview.index')}}">
            <svg class="icon icon-ticket">
              <use xlink:href="#icon-ticket"></use>
            </svg>Affiliate center</a>
            <a class="header__link" href="explore-creators.html">
            <svg class="icon icon-grid">
              <use xlink:href="#icon-grid"></use>
            </svg>Explore creators</a></div>
        <div style="border-radius: 0px; cursor: unset;" onmouseover="this.style.cursor='pointer'" onmouseout="this.style.cursor='unset'" class="header__nav header__link color" data-popup=".js-popup-claim">
            <svg style="margin-right:12px" width="25px" height="25px" viewBox="0 0 24 24" fill="#8E59FF" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M12 2.75C6.89137 2.75 2.75 6.89137 2.75 12C2.75 17.1086 6.89137 21.25 12 21.25C17.1086 21.25 21.25 17.1086 21.25 12C21.25 6.89137 17.1086 2.75 12 2.75ZM1.25 12C1.25 6.06294 6.06294 1.25 12 1.25C17.9371 1.25 22.75 6.06294 22.75 12C22.75 17.9371 17.9371 22.75 12 22.75C6.06294 22.75 1.25 17.9371 1.25 12ZM12 5.25C12.4142 5.25 12.75 5.58579 12.75 6V6.31673C14.3804 6.60867 15.75 7.83361 15.75 9.5C15.75 9.91421 15.4142 10.25 15 10.25C14.5858 10.25 14.25 9.91421 14.25 9.5C14.25 8.82154 13.6859 8.10339 12.75 7.84748V11.3167C14.3804 11.6087 15.75 12.8336 15.75 14.5C15.75 16.1664 14.3804 17.3913 12.75 17.6833V18C12.75 18.4142 12.4142 18.75 12 18.75C11.5858 18.75 11.25 18.4142 11.25 18V17.6833C9.61957 17.3913 8.25 16.1664 8.25 14.5C8.25 14.0858 8.58579 13.75 9 13.75C9.41421 13.75 9.75 14.0858 9.75 14.5C9.75 15.1785 10.3141 15.8966 11.25 16.1525V12.6833C9.61957 12.3913 8.25 11.1664 8.25 9.5C8.25 7.83361 9.61957 6.60867 11.25 6.31673V6C11.25 5.58579 11.5858 5.25 12 5.25ZM11.25 7.84748C10.3141 8.10339 9.75 8.82154 9.75 9.5C9.75 10.1785 10.3141 10.8966 11.25 11.1525V7.84748ZM12.75 12.8475V16.1525C13.6859 15.8966 14.25 15.1785 14.25 14.5C14.25 13.8215 13.6859 13.1034 12.75 12.8475Z" fill="#8E59FF"></path>
</svg> Claim my salary</div>
        <div class="header__nav"><a class="header__link" href="{{url('logout')}}">Log out</a></div>
      </div>
    </div>
  </div>
  <div class="header__btns"><a class="header__link" href="sign-in.html">Sign in</a><a class="button header__button" href="sign-up.html">Sign up</a></div>
</header>