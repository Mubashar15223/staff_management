@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Message center</div>
      <div class="messages">
        <div class="messages__users">
          <div class="messages__nav"><a class="messages__link active" href="#">
              <svg class="icon icon-profile-circle">
                <use xlink:href="#icon-profile-circle"></use>
              </svg>Customers</a><a class="messages__link" href="#">
              <svg class="icon icon-lightning">
                <use xlink:href="#icon-lightning"></use>
              </svg>Everyone</a></div>
          <div class="messages__list">
            <div class="messages__item new active">
              <div class="messages__avatar"><img src="img/content/avatar-1.jpg" alt="Avatar"></div>
              <div class="messages__details">
                <div class="messages__head">
                  <div class="messages__man">Jarret Waelchi</div>
                  <div class="messages__time">03:30PM</div>
                </div>
                <div class="messages__content">When do you release the coded for the Fleet - Travel kit?</div>
              </div>
            </div>
            <div class="messages__item online">
              <div class="messages__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar"></div>
              <div class="messages__details">
                <div class="messages__head">
                  <div class="messages__man">Orval Casper</div>
                  <div class="messages__time">11:59AM</div>
                </div>
                <div class="messages__content">When do you release the coded for the Fleet - Travel kit?</div>
              </div>
            </div>
            <div class="messages__item new">
              <div class="messages__avatar"><img src="img/content/avatar-3.jpg" alt="Avatar"></div>
              <div class="messages__details">
                <div class="messages__head">
                  <div class="messages__man">Michel Emard</div>
                  <div class="messages__time">09:30AM</div>
                </div>
                <div class="messages__content">When do you release the coded for the Fleet - Travel kit?</div>
              </div>
            </div>
            <div class="messages__item">
              <div class="messages__avatar"><img src="img/content/avatar-4.jpg" alt="Avatar"></div>
              <div class="messages__details">
                <div class="messages__head">
                  <div class="messages__man">Reuben Ward</div>
                  <div class="messages__time">08:00AM</div>
                </div>
                <div class="messages__content">When do you release the coded for the Fleet - Travel kit?</div>
              </div>
            </div>
            <div class="messages__item">
              <div class="messages__avatar"><img src="img/content/avatar-5.jpg" alt="Avatar"></div>
              <div class="messages__details">
                <div class="messages__head">
                  <div class="messages__man">Evalyn Jenkins</div>
                  <div class="messages__time">07:01AM</div>
                </div>
                <div class="messages__content">When do you release the coded for the Fleet - Travel kit?</div>
              </div>
            </div>
          </div>
          <form class="form">
            <input class="form__input" type="text" name="search" placeholder="Search message" required="required" autocomplete="off"/>
            <button class="form__button">
              <svg class="icon icon-search">
                <use xlink:href="#icon-search"></use>
              </svg>
            </button>
          </form>
        </div>
        <div class="messages__messenger messenger">
          <div class="messenger__panel">
            <div class="messenger__line">
              <div class="messenger__man">Orval Casper</div>
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
                    <svg class="icon icon-trash">
                      <use xlink:href="#icon-trash"></use>
                    </svg>Delete message
                  </button>
                </div>
              </div>
              <button class="messenger__close">
                <svg class="icon icon-close">
                  <use xlink:href="#icon-close"></use>
                </svg>
              </button>
            </div>
            <div class="messenger__parameters">
              <div class="messenger__parameter">Customer since: <span>Sep 2021</span></div>
              <div class="messenger__parameter">Purchased: <span>21 items</span></div>
              <div class="messenger__parameter">Lifetime: <span>$1,235.00</span></div>
            </div>
          </div>
          <div class="messenger__wrapper">
            <button class="button-stroke button-small messenger__button">Load conversation</button>
            <div class="messenger__list">
              <div class="messenger__item">
                <div class="messenger__avatar"><img src="img/content/avatar-1.jpg" alt="Avatar"></div>
                <div class="messenger__details">
                  <div class="messenger__head">
                    <div class="messenger__man">Orval Casper</div>
                    <div class="messenger__time">11:59AM</div>
                  </div>
                  <div class="messenger__content">When do you release the coded for the Fleet - Travel kit? <a href="https://ui8.net" target="_blank">https://ui8.net/product-link</a></div>
                </div>
              </div>
              <div class="messenger__item">
                <div class="messenger__avatar"><img src="img/content/avatar.jpg" alt="Avatar"></div>
                <div class="messenger__details">
                  <div class="messenger__head">
                    <div class="messenger__man">Britney Beer</div>
                    <div class="messenger__time">11:59AM</div>
                  </div>
                  <div class="messenger__content">Hi @orval, thanks for contacting.<br>Yes, I’m working on it. It would be Launched next 2 weeks. You could check the progress here: <a href="https://ui8.net" target="_blank" rel="noopener noreferrer">https://ui8.net/progress</a><br></br>Thanks for your patience and understanding. 🙌<br> Regards,<br></br>Br</div>
                </div>
              </div>
            </div>
            <div class="messenger__send">
              <div class="messenger__file">
                <input type="file">
                <svg class="icon icon-file-add">
                  <use xlink:href="#icon-file-add"></use>
                </svg>
              </div>
              <div class="smile smile_up">
                <button class="smile__head">
                  <svg class="icon icon-smile">
                    <use xlink:href="#icon-smile"></use>
                  </svg>
                </button>
                <div class="smile__body">
                  <div class="smile__list">
                    <button class="smile__item"><img src="img/smileys/blush.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/surprised.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/sweat-grinning.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/cool.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/sleepy.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/crying-with-laughter.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/heart-eyes.png" alt="Smile"/></button>
                    <button class="smile__item"><img src="img/smileys/surprised.png" alt="Smile"/></button>
                  </div>
                </div>
              </div>
              <div class="messenger__form">
                <input class="messenger__input" type="text" name="message" placeholder="Message">
                <button class="button-small messenger__button">Send</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> 
@endsection