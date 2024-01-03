@extends('layouts.app')
@section('content')
<div class="overlay"></div>

<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">New Project</div>
      <div class="create">
        <div class="create__row">
          <div class="create__col">
            <div class="create__card card">
              <div class="card__head">
                <div class="title-green card__title">Name &amp; description</div>
                <div class="create__line">
                  <div class="create__info">Launched
                  </div>
                  <label class="switch">
                    <input class="switch__input" type="checkbox" checked="checked"><span class="switch__inner"><span class="switch__box"></span></span>
                  </label>
                </div>
              </div>
              <form method ="post" action ="{{route('projects.store')}}">
                @csrf
              <div class="field">
                <div class="field__label">Project Title
                  <div class="tooltip tooltipstered">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="field__wrap">
                  <input class="field__input" type="text" name="title" required>
                </div>
              </div>
              <div class="field">
                <div class="field__label">Project Code
                  <div class="tooltip tooltipstered">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="field__wrap">
                  <input class="field__input" type="text" name="code" required="">
                </div>
              </div>
              <div class="field">
                <div class="field__label">Category
                  <div class="tooltip tooltipstered">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="field__wrap">
                  <select class="select" name="category_id" class="project_category">
                      <option value="">Select category</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
              </div>
              
              <div class="editor">
                <div class="editor__label">Description
                  <div class="tooltip" title="Description">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <textarea class="editor__textarea js-editor project_description" name="description"></textarea>
              </div>
              <div class="create__group key_features_list">
                <div class="field">
                  <div class="field__label">Key features
                    <div class="tooltip tooltipstered">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>
                   
                  <div class="field__wrap">
                    <input class="field__input key_feature_1" type="text" name="key_feature[]" placeholder="Value 1" >
                  </div>
                </div>
                <div class="field">
                  <div class="field__wrap">
                    <input class="field__input key_feature_2" type="text" name="key_feature[]" placeholder="Value 2" >
                  </div>
                </div>
                <div class="field">
                  <div class="field__wrap">
                    <input class="field__input key_feature_3" type="text" name="key_feature[]" placeholder="Value 3" >
                  </div>
                </div>
                <div class="field">
                  <div class="field__wrap">
                    <input class="field__input key_feature_4" type="text" name="key_feature[]" placeholder="Value 4">
                  </div>
                
                </div>
              </div>
            </div>
            <div class="create__card card">
              <div class="card__head">
                <div class="title-blue card__title">Images</div>
              </div>
              <div class="file">
                <div class="file__label">Cover images
                  <div class="tooltip tooltipstered" data-position="right">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="file__wrap">
                  <input class="file__input" name="image" type="file">
                  <div class="file__box">
                    <svg class="icon icon-upload">
                      <use xlink:href="#icon-upload"></use>
                    </svg>Click or drop image
                  </div>
                </div>
              </div>
            </div>
            <div class="create__card card">
              <div class="card__head">
                <div class="title-green card__title">Domain &amp; Server</div>
              </div>
              <div class="field">
                <div class="field__label">Hosting Server
                  <div class="tooltip tooltipstered">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                @foreach($servers as $server)
    <div class="field__wrap">
        <select class="select sel_hosting_server" name="server_id" style="display: none;">
            <option value="">Select Server</option>
            <option value="{{$server->id}}">{{$server->name}}</option>
        </select>
    </div>
@endforeach
<div class="create__line">
    <div class="create__info">Domain Bought by our team
        <div class="tooltip tooltipstered">
            <svg class="icon icon-info">
                <use xlink:href="#icon-info"></use>
            </svg>
        </div>
    </div>
    <label class="switch">
        <input class="switch__input" type="checkbox" checked="checked">
        <span class="switch__inner"><span class="switch__box"></span></span>
    </label>
</div>

<div class="create__fieldset">
    <div class="field field_currency">
        <div class="field__label">First year amount of domain</div>
        <div class="field__wrap">
            <input class="field__input" type="text" name="first_year_amount_of_domain" >
            <div class="field__currency">$</div>
        </div>
    </div>
    <div class="field field_currency">
        <div class="field__label">Recurring amount of domain</div>
        <div class="field__wrap">
            <input class="field__input" type="text" name="recurring_amount_of_domain" >
            <div class="field__currency">$</div>
        </div>
    </div>
</div>

<div class="create__card card">
    <div class="card__head">
        <div class="title-purple card__title">Theme &amp; Plugin</div>
    </div>
    <div class="field">
        <div class="field__label">Theme Usage
            <div class="tooltip tooltipstered">
                <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                </svg>
            </div>
        </div>
        @foreach($plugins as $plugin)
        <div class="field__wrap">
            <select class="select" name="plugin_id" class="project_theme">
                <option>Select category</option>
                <option value="{{$plugin->id}}">{{$plugin->platformName}}</option>
            </select>
        </div>
        @endforeach
    </div>
</div>

             
              <div class="create__label">Paid Plugin
                <div class="tooltip tooltipstered">
                  <svg class="icon icon-info">
                    <use xlink:href="#icon-info"></use>
                  </svg>
                </div>
              </div>
              <div class="create__list" name="name">
                <label class="checkbox">
                  <input class="checkbox__input" name="paid_plugin[]" type="checkbox" ><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">quform</span></span>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" name="paid_plugin[]" type="checkbox" ><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Touchy Menu</span></span>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" name="paid_plugin[]" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Wpdata Table</span></span>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" name="paid_plugin[]" type="checkbox"><span class="checkbox__inner"><span class="checkbox__tick"></span><span class="checkbox__text">Wpbakery</span></span>
                </label>
              </div>
            </div>
            <div class="create__card card">
              <div class="card__head">
                <div class="title-blue card__title">Teams</div>
              </div>

              <div class="team_input" style="margin-top: 0;">
                <div class="create__top">
                  <div class="create__label">Product Manager
                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>

                </div>
                <div style="flex: 1;" class="create__tags">
                  <input class="product_manager_name" name="tags[]" placeholder="Enter tags to describe your item" value="John">
                </div>
              </div>

              <div class="team_input">
                <div class="create__top">
                  <div class="create__label">Vice Manager
                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>

                </div>
                <div style="flex: 1;" class="create__tags">
                  <input class="vice_manager_name" name="tags[]" placeholder="Enter tags to describe your item" value="Vincent">
                </div>
              </div>
              <div class="team_input">
                <div class="create__top">
                  <div class="create__label">Backend Developer
                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>

                </div>
                <div style="flex: 1;" class="create__tags">
                  <input class="backend_manager_name" name="tags[]" placeholder="Enter tags to describe your item" value="Captain India">
                </div>
              </div>
              <div class="team_input">
                <div class="create__top">
                  <div class="create__label">Frontend Developer
                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>

                </div>
                <div style="flex: 1;" class="create__tags">
                  <input class="frontend_developer_name" name="tags[]" placeholder="Enter tags to describe your item" value="Captain India">
                </div>
              </div>
              <div class="team_input">
                <div class="create__top">
                  <div class="create__label">Tester
                    <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                      <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                      </svg>
                    </div>
                  </div>

                </div>
                <div style="flex: 1;" class="create__tags">
                  <input class="tester_name" name="tags[]" placeholder="Enter tags to describe your item" value="Muhammad Bilal">
                </div>
              </div>
            </div>
            <div class="create__card card">
              <div class="card__head">
                <div class="title-red card__title">GA Submission</div>
              </div>
              <div class="field">
                <div class="field__label">Month
                  <div class="tooltip" title="Maximum 100 characters. No HTML or emoji allowed">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="field__wrap">
                  <select class="select">
                    <option>Select Month</option>
                    <option>July</option>
                    <option>August</option>
                    <option>September</option>
                    <option>October</option>
                  </select>
                </div>
              </div>
              <div class="ga_report_grid">
                <div class="field">
                  <div class="field__label">Users
                  </div>
                  <div class="field__wrap">
                    <input class="field__input " type="text" name="ga_users">
                  </div>
                </div>
                <div class="field">
                  <div class="field__label">New Users
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="ga_new_users" >
                  </div>
                </div>
                <div class="field">
                  <div class="field__label">Average Engagement Time
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="ga_average_engagement_time" >
                  </div>
                </div>

                <div class="field">
                  <div class="field__label">Engagement Rate
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" class="ga_engagement_rate" type="text" name="engagement_rate" >
                  </div>
                </div>

                <div class="field">
                  <div class="field__label">Session
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="ga_session" >
                  </div>
                </div>

                <div class="field">
                  <div class="field__label">Mobile User %
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="ga_mobile_user" >
                  </div>
                </div>
                <div class="field">
                  <div class="field__label">Desktop User %
                  </div>
                  <div class="field__wrap">
                    <input class="field__input" type="text" name="ga_desktop_user" >
                  </div>
                </div>

              </div>
              <div class="card__head">
                <div class="title-blue card__title">Country Audience</div>
              </div>
              <div class="ga_report_grid">

                <label class="checkbox">
                  <input class="checkbox__input" type="checkbox" ><span class="checkbox__inner"><span
                      class="checkbox__tick"></span><span class="checkbox__text">
                      <div class="field">
                        <div class="field__label">Indian User %
                        </div>

                      </div>
                    </span></span>
                  <div class="field__wrap mt-10">
                    <input class="field__input" type="text" name="user_percentage[]" >
                  </div>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" type="checkbox" ><span class="checkbox__inner"><span
                      class="checkbox__tick"></span><span class="checkbox__text">
                      <div class="field">
                        <div class="field__label">Pakistan User %
                        </div>

                      </div>
                    </span></span>
                  <div class="field__wrap mt-10">
                    <input class="field__input" type="text" name="user_percentage[]" >
                  </div>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" type="checkbox" ><span class="checkbox__inner"><span
                      class="checkbox__tick"></span><span class="checkbox__text">
                      <div class="field">
                        <div class="field__label">Bangladesh User %
                        </div>

                      </div>
                    </span></span>
                  <div class="field__wrap mt-10">
                    <input class="field__input" type="text" name="user_percentage[]" >
                  </div>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" type="checkbox" ><span class="checkbox__inner"><span
                      class="checkbox__tick"></span><span class="checkbox__text">
                      <div class="field">
                        <div class="field__label">Vietnam User %
                        </div>

                      </div>
                    </span></span>
                  <div class="field__wrap mt-10">
                    <input class="field__input" type="text" name="user_percentage[]" >
                  </div>
                </label>
                <label class="checkbox">
                  <input class="checkbox__input" type="checkbox" ><span class="checkbox__inner"><span
                      class="checkbox__tick"></span><span class="checkbox__text">
                      <div class="field">
                        <div class="field__label">Combodia User %
                        </div>

                      </div>
                    </span></span>
                  <div class="field__wrap mt-10">
                    <input class="field__input" type="text" name="user_percentage[]" >
                  </div>
                </label>
              </div>

              <div class="editor">
                <div class="editor__label">Message to reviewer
                  <div class="tooltip" title="Description">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <textarea class="editor__textarea js-editor  message_to_reviewer" name="message_to_reviewer"></textarea>
              </div>
            </div>
            
          </div>
          <div class="create__col">
            <div class="create__preview js-preview">
              <button class="create__close js-preview-close">
                <svg class="icon icon-close">
                  <use xlink:href="#icon-close"></use>
                </svg>
              </button>
              <div class="card">
                <div class="card__head">
                  <div class="title-blue card__title">Preview</div>
                  <button class="card__full">
                    <svg class="icon icon-expand">
                      <use xlink:href="#icon-expand"></use>
                    </svg>
                  </button>
                </div>
                <div class="create__photo"><img src="{{asset('img/content/photo-1.jpg')}}" alt="Product"></div>
                <div class="create__flex">
                  <div class="create__subtitle">Fleet - Travel shopping UI design kit</div>
                  <div class="create__price">$98</div>
                </div>
                <div class="create__user">
                  <div class="create__avatar"><img src="{{asset('img/content/avatar.jpg')}}" alt="Avatar"></div>
                  <div class="create__text">by <span>Hortense</span></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="panel">
        <div class="panel__info">
          <svg class="icon icon-check-all">
            <use xlink:href="#icon-check-all"></use>
          </svg>Last saved <span>Oct 4, 2021 - 23:32</span>
        </div>
        <div class="panel__btns">
          <button class="button-stroke panel__button save_draft_project publish_project_btn" type="submit">Save Draft</button>
          <button class="button panel__button publish_project_btn">Publish now</button>
          <div class="actions actions_up">
            <button class="actions__button">
              <svg class="icon icon-more-horizontal">
                <use xlink:href="#icon-more-horizontal"></use>
              </svg>
            </button>
            <div class="actions__body">
              <button class="actions__option js-preview-open">
                <svg class="icon icon-expand">
                  <use xlink:href="#icon-expand"></use>
                </svg>Preview
              </button>
              <button class="actions__option" data-popup=".js-popup-schedule">
                <svg class="icon icon-calendar">
                  <use xlink:href="#icon-calendar"></use>
                </svg>Schedule product
              </button>
              <button class="actions__option">
                <svg class="icon icon-link">
                  <use xlink:href="#icon-link"></use>
                </svg>Get shareable link
              </button>
              <button class="actions__option">
                <svg class="icon icon-close">
                  <use xlink:href="#icon-close"></use>
                </svg>Clear data
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="popup popup_schedule js-popup js-popup-schedule">
        <div class="popup__overlay js-popup-overlay"></div>
        <div class="popup__wrap js-popup-wrap">
          <div class="calendar js-calendar">
            <div class="title-red calendar__title">Reschedule product</div>
            <div class="calendar__note">Choose a day and time in the future you want your product to be published.
            </div>
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
                  <div class="calendar__container js-date-container"><div class="date-picker-wrapper single-date  no-shortcuts  no-topbar  inline-wrapper single-month has-gap" unselectable="on" style="user-select: none;"><div class="month-wrapper">   <table class="month1" cellspacing="0" border="0" cellpadding="0">       <thead>           <tr class="caption">               <th>                   <span class="prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M14.207 7.793a1 1 0 0 1 0 1.414L11.414 12l2.793 2.793a1 1 0 0 1-1.414 1.414l-3.5-3.5a1 1 0 0 1 0-1.414l3.5-3.5a1 1 0 0 1 1.414 0z" fill="#777e91"></path></svg>                   </span>               </th>               <th colspan="5" class="month-name"><div class="month-element">january</div> <div class="month-element">2022</div></th>               <th><span class="next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M9.793 7.793a1 1 0 0 0 0 1.414L12.586 12l-2.793 2.793a1 1 0 0 0 1.414 1.414l3.5-3.5a1 1 0 0 0 0-1.414l-3.5-3.5a1 1 0 0 0-1.414 0z" fill="#777e91"></path></svg></span>               </th>           </tr>           <tr class="week-name"><th>su</th><th>mo</th><th>tu</th><th>we</th><th>th</th><th>fr</th><th>sa</th>       </tr></thead>       <tbody><tr><td><div time="1640458800000" data-tooltip="" class="day lastMonth  valid">26</div></td><td><div time="1640545200000" data-tooltip="" class="day lastMonth  valid">27</div></td><td><div time="1640631600000" data-tooltip="" class="day lastMonth  valid">28</div></td><td><div time="1640718000000" data-tooltip="" class="day lastMonth  valid">29</div></td><td><div time="1640804400000" data-tooltip="" class="day lastMonth  valid">30</div></td><td><div time="1640890800000" data-tooltip="" class="day lastMonth  valid">31</div></td><td><div time="1640977200000" data-tooltip="" class="day toMonth  valid  tmp">1</div></td></tr><tr><td><div time="1641063600000" data-tooltip="" class="day toMonth  valid  tmp">2</div></td><td><div time="1641150000000" data-tooltip="" class="day toMonth  valid  tmp">3</div></td><td><div time="1641236400000" data-tooltip="" class="day toMonth  valid  tmp">4</div></td><td><div time="1641322800000" data-tooltip="" class="day toMonth  valid  tmp">5</div></td><td><div time="1641409200000" data-tooltip="" class="day toMonth  valid  tmp">6</div></td><td><div time="1641495600000" data-tooltip="" class="day toMonth  valid  tmp">7</div></td><td><div time="1641582000000" data-tooltip="" class="day toMonth  valid  tmp">8</div></td></tr><tr><td><div time="1641668400000" data-tooltip="" class="day toMonth  valid  tmp">9</div></td><td><div time="1641754800000" data-tooltip="" class="day toMonth  valid  tmp">10</div></td><td><div time="1641841200000" data-tooltip="" class="day toMonth  valid  tmp">11</div></td><td><div time="1641927600000" data-tooltip="" class="day toMonth  valid  tmp">12</div></td><td><div time="1642014000000" data-tooltip="" class="day toMonth  valid  tmp">13</div></td><td><div time="1642100400000" data-tooltip="" class="day toMonth  valid  tmp">14</div></td><td><div time="1642186800000" data-tooltip="" class="day toMonth  valid  tmp">15</div></td></tr><tr><td><div time="1642273200000" data-tooltip="" class="day toMonth  valid  tmp">16</div></td><td><div time="1642359600000" data-tooltip="" class="day toMonth  valid  tmp">17</div></td><td><div time="1642446000000" data-tooltip="" class="day toMonth  valid  tmp">18</div></td><td><div time="1642532400000" data-tooltip="" class="day toMonth  valid  tmp">19</div></td><td><div time="1642618800000" data-tooltip="" class="day toMonth  valid  tmp checked first-date-selected">20</div></td><td><div time="1642705200000" data-tooltip="" class="day toMonth  valid  tmp">21</div></td><td><div time="1642791600000" data-tooltip="" class="day toMonth  valid  tmp">22</div></td></tr><tr><td><div time="1642878000000" data-tooltip="" class="day toMonth  valid  tmp">23</div></td><td><div time="1642964400000" data-tooltip="" class="day toMonth  valid  tmp">24</div></td><td><div time="1643050800000" data-tooltip="" class="day toMonth  valid  tmp">25</div></td><td><div time="1643137200000" data-tooltip="" class="day toMonth  valid  tmp">26</div></td><td><div time="1643223600000" data-tooltip="" class="day toMonth  valid  tmp">27</div></td><td><div time="1643310000000" data-tooltip="" class="day toMonth  valid  tmp">28</div></td><td><div time="1643396400000" data-tooltip="" class="day toMonth  valid  tmp">29</div></td></tr><tr><td><div time="1643482800000" data-tooltip="" class="day toMonth  valid  tmp">30</div></td><td><div time="1643569200000" data-tooltip="" class="day toMonth  valid  tmp">31</div></td><td><div time="1643655600000" data-tooltip="" class="day nextMonth  valid">1</div></td><td><div time="1643742000000" data-tooltip="" class="day nextMonth  valid">2</div></td><td><div time="1643828400000" data-tooltip="" class="day nextMonth  valid">3</div></td><td><div time="1643914800000" data-tooltip="" class="day nextMonth  valid">4</div></td><td><div time="1644001200000" data-tooltip="" class="day nextMonth  valid">5</div></td></tr></tbody>   </table><div class="dp-clearfix"></div><div class="time"><div class="time1"></div></div><div class="dp-clearfix"></div></div><div class="footer"></div><div class="date-range-length-tip"></div></div></div>
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
                    <div class="calendar__value js-calendar-value">1:30 AM</div>
                  </div>
                </div>
                <div class="calendar__body js-calendar-body">
                  <div class="calendar__top">
                    <div class="calendar__subtitle js-calendar-title">1:30 AM</div>
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
    </form>
    </div>
  </div>



@endSection
@section('script')
{{-- $(document).ready(function(){
  $("button").on("click", function(){
      window.location.href = "{{ url('projects.create') }}";
  });
}); --}}
@endSection



