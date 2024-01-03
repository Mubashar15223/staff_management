@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Notification</div>
      <div class="notification">
        <div class="notification__row">
          <div class="notification__col">
            <div class="card">
              <div class="card__head">
                <div class="title-red card__title">New</div>
                <select class="select select_small">
                  <option>Recent</option>
                  <option>New</option>
                  <option>This year</option>
                </select>
                <div class="actions">
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
                      <svg class="icon icon-setting">
                        <use xlink:href="#icon-setting"></use>
                      </svg>Go setting
                    </button>
                  </div>
                </div>
              </div>
              <div class="notification__list">
                <div class="notification__item new">
                  <div class="notification__avatar"><img src="img/content/avatar-1.jpg" alt="Avatar">
                    <div class="notification__icon" style="background-color: #2A85FF"><img src="img/content/message.svg" alt="Status"></div>
                  </div>
                  <div class="notification__details">
                    <div class="notification__line">
                      <div class="notification__subtitle">Domenica</div>
                      <div class="notification__login">@domenica</div>
                      <div class="notification__time">1h</div>
                    </div>
                    <div class="notification__content">Comment on <strong>Smiles – 3D icons</strong></div>
                    <div class="notification__comment">"Great work, I just purchased this product"</div>
                    <div class="notification__control">
                      <button class="notification__action notification__action_favorite">Like<span>d</span></button>
                      <button class="notification__action">Reply</button>
                    </div>
                    <div class="answer">
                      <div class="answer__avatar"><img src="img/content/avatar.jpg" alt="Avatar"/></div>
                      <div class="answer__details">
                        <div class="answer__message">
                          <textarea class="answer__textarea" name="answer" oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;" placeholder="Leave something to reply" required="required"></textarea>
                        </div>
                        <div class="answer__btns">
                          <button class="button button-small answer__button disabled">Reply</button>
                          <button class="button-stroke button-small answer__button">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="notification__item new">
                  <div class="notification__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar">
                    <div class="notification__icon" style="background-color: #FF6A55"><img src="img/content/heart.svg" alt="Status"></div>
                  </div>
                  <div class="notification__details">
                    <div class="notification__line">
                      <div class="notification__subtitle">Janice</div>
                      <div class="notification__login">@ethel</div>
                      <div class="notification__time">2h</div>
                    </div>
                    <div class="notification__content">Likes <strong>Smiles – 3D icons</strong></div>
                    <div class="notification__comment">"Great work, I just purchased this product"</div>
                    <div class="notification__control">
                      <button class="notification__action notification__action_favorite">Like<span>d</span></button>
                      <button class="notification__action">Reply</button>
                    </div>
                    <div class="answer">
                      <div class="answer__avatar"><img src="img/content/avatar.jpg" alt="Avatar"/></div>
                      <div class="answer__details">
                        <div class="answer__message">
                          <textarea class="answer__textarea" name="answer" oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;" placeholder="Leave something to reply" required="required"></textarea>
                        </div>
                        <div class="answer__btns">
                          <button class="button button-small answer__button disabled">Reply</button>
                          <button class="button-stroke button-small answer__button">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="notification__item new">
                  <div class="notification__avatar"><img src="img/content/avatar-3.jpg" alt="Avatar">
                    <div class="notification__icon" style="background-color: #83BF6E"><img src="img/content/shopping-bag.svg" alt="Status"></div>
                  </div>
                  <div class="notification__details">
                    <div class="notification__line">
                      <div class="notification__subtitle">Janiya</div>
                      <div class="notification__login">@domenica</div>
                      <div class="notification__time">4h</div>
                    </div>
                    <div class="notification__content">Purchased <strong>Smiles – 3D icons</strong></div>
                    <div class="notification__comment">"Great work, I just purchased this product"</div>
                    <div class="notification__control">
                      <button class="notification__action notification__action_favorite">Like<span>d</span></button>
                      <button class="notification__action">Reply</button>
                    </div>
                    <div class="answer">
                      <div class="answer__avatar"><img src="img/content/avatar.jpg" alt="Avatar"/></div>
                      <div class="answer__details">
                        <div class="answer__message">
                          <textarea class="answer__textarea" name="answer" oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;" placeholder="Leave something to reply" required="required"></textarea>
                        </div>
                        <div class="answer__btns">
                          <button class="button button-small answer__button disabled">Reply</button>
                          <button class="button-stroke button-small answer__button">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="notification__item">
                  <div class="notification__avatar"><img src="img/content/avatar-4.jpg" alt="Avatar">
                    <div class="notification__icon" style="background-color: #8E59FF"><img src="img/content/star.svg" alt="Status"></div>
                  </div>
                  <div class="notification__details">
                    <div class="notification__line">
                      <div class="notification__subtitle">Danial</div>
                      <div class="notification__login">@danial</div>
                      <div class="notification__time">6h</div>
                    </div>
                    <div class="notification__content">Rate <img src="img/content/rating-star.svg" alt="Star" /> <strong>5</strong> for <strong>Smiles – 3D icons</strong></div>
                    <div class="notification__comment">"Great work, I just purchased this product"</div>
                    <div class="notification__control">
                      <button class="notification__action notification__action_favorite">Like<span>d</span></button>
                      <button class="notification__action">Reply</button>
                    </div>
                    <div class="answer">
                      <div class="answer__avatar"><img src="img/content/avatar.jpg" alt="Avatar"/></div>
                      <div class="answer__details">
                        <div class="answer__message">
                          <textarea class="answer__textarea" name="answer" oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;" placeholder="Leave something to reply" required="required"></textarea>
                        </div>
                        <div class="answer__btns">
                          <button class="button button-small answer__button disabled">Reply</button>
                          <button class="button-stroke button-small answer__button">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="notification__item">
                  <div class="notification__avatar"><img src="img/content/avatar-5.jpg" alt="Avatar">
                    <div class="notification__icon" style="background-color: #2A85FF"><img src="img/content/message.svg" alt="Status"></div>
                  </div>
                  <div class="notification__details">
                    <div class="notification__line">
                      <div class="notification__subtitle">Esmeralda</div>
                      <div class="notification__login">@esmeralda</div>
                      <div class="notification__time">8h</div>
                    </div>
                    <div class="notification__content">Comment on <strong>Smiles – 3D icons</strong></div>
                    <div class="notification__comment">"Great work, I just purchased this product"</div>
                    <div class="notification__control">
                      <button class="notification__action notification__action_favorite">Like<span>d</span></button>
                      <button class="notification__action">Reply</button>
                    </div>
                    <div class="answer">
                      <div class="answer__avatar"><img src="img/content/avatar.jpg" alt="Avatar"/></div>
                      <div class="answer__details">
                        <div class="answer__message">
                          <textarea class="answer__textarea" name="answer" oninput="this.style.height = &quot;&quot;;this.style.height = this.scrollHeight + &quot;px&quot;" placeholder="Leave something to reply" required="required"></textarea>
                        </div>
                        <div class="answer__btns">
                          <button class="button button-small answer__button disabled">Reply</button>
                          <button class="button-stroke button-small answer__button">Cancel</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="notification__foot">
                <button class="button-stroke button-small notification__button">
                  <div class="loader"></div><span>Load more</span>
                </button>
              </div>
            </div>
          </div>
          <div class="notification__col">
            <div class="card">
              <div class="card__head">
                <div class="title-red card__title">Filter</div>
              </div>
              <div class="notification__filters">
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox" checked><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Comments</span></span>
                </label>
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Likes</span></span>
                </label>
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox" checked><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Review</span></span>
                </label>
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox" checked><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Mentions</span></span>
                </label>
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Purchases</span></span>
                </label>
                <label class="checkbox checkbox_reverse">
                  <input class="checkbox__input" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Message</span></span>
                </label>
              </div>
              <div class="notification__btns">
                <button class="button-stroke button-small notification__button">Select all</button>
                <button class="button-stroke button-small notification__button">Unslect all</button>
              </div>
              <div class="notification__variants">
                <label class="radio">
                  <input class="radio__input" type="radio" name="customers"><span class="radio__inner"><span class="radio__text">Everyone</span><span class="radio__tick"></span></span>
                </label>
                <label class="radio">
                  <input class="radio__input" type="radio" name="customers" checked><span class="radio__inner"><span class="radio__text">Everyone</span><span class="radio__tick"></span></span>
                </label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection