@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
      <div class="page__title h3">Staffs</div>
      <div class="page__row">
        <div class="page__col">
          <div class="total card">
            <div class="card__head">
              <div class="title-red card__title">Total staffs</div>
              <select class="select select_small">
                <option>Last 28 days</option>
                <option>Last 14 days</option>
                <option>Last 7 days</option>
              </select>
            </div>
            <div class="total__overview">
              <div class="total__details">
                <div class="h4 total__title">1,509 staffs</div>
                <div class="total__line">
                  <div class="balance background positive">
                    <svg class="icon icon-arrow-top">
                      <use xlink:href="#icon-arrow-top"></use>
                    </svg>37.8%
                  </div>vs. Sep
                </div>
              </div>
              <div class="total__chart">
                <div id="total-customers"></div>
              </div>
            </div>
            <div class="users">
              <div class="users__head">
                <div class="users__info">Welcome <strong>21 New Staffs</strong> on this month 😎</div><a class="button-stroke users__button" href="message-center.html">New Staffs List</a>
              </div>
              <div class="users__list"><a class="users__item" href="message-center.html">
                  <div class="users__avatar"><img src="img/content/avatar.jpg" alt="Avatar"></div>
                  <div class="users__title">Gladyce</div></a><a class="users__item" href="message-center.html">
                  <div class="users__avatar"><img src="img/content/avatar-1.jpg" alt="Avatar"></div>
                  <div class="users__title">Elbert</div></a><a class="users__item" href="message-center.html">
                  <div class="users__avatar"><img src="img/content/avatar-2.jpg" alt="Avatar"></div>
                  <div class="users__title">Joyce</div></a><a class="users__all" href="customer-list.html">
                  <div class="users__icon">
                    <svg class="icon icon-arrow-right">
                      <use xlink:href="#icon-arrow-right"></use>
                    </svg>
                  </div>
                  <div class="users__text">View all</div></a></div>
            </div>
          </div>
          <div class="card">
            <div class="card__head">
              <div class="title-purple card__title">Position Type</div>
              <select class="select select_small">
                <option>Last 7 days</option>
                <option>This month</option>
                <option>All time</option>
              </select>
            </div>
            <div class="card__chart card__chart_traffic-channel">
              <div id="traffic-channel"></div>
            </div>
          </div>
          <div class="card">
            <div class="card__head card__head_wide">
              <div class="title-purple card__title">Active staffs</div>
              <select class="select select_small">
                <option>Last 30 days</option>
                <option>Last 20 days</option>
                <option>Last 10 days</option>
              </select>
            </div>
            <div class="card__chart card__chart_active-customers">
              <div id="active-customers"></div>
            </div>
          </div>
        </div>
        <div class="page__col">
          <div class="card">
            <div class="card__head">
              <div class="title-red card__title">Claim Request</div>
            </div>
            <div class="refund">
              <div class="refund__list">
                <div class="refund__item">
                  <div class="refund__icon">
                    <svg class="icon icon-basket">
                      <use xlink:href="#icon-basket"></use>
                    </svg>
                  </div>
                  <div class="refund__content">You have <strong>52 open Claim Requests</strong> to action. 👀</div>
                </div>
              </div><a class="button-stroke refund__button" href="income-refunds.html">Review Claim Requests 
              </a>
            </div>
          </div>
          <div class="card">
            <div class="card__head">
              <div class="title-blue card__title">Contract Type</div>
            </div>
            <div class="device">
              <div class="device__chart">
                <div id="top-device"></div>
              </div>
              <div class="device__legend">
                <div class="device__indicator device__indicator_mobile">
                  <svg class="icon icon-profile-circle">
                    <use xlink:href="#icon-profile-circle"></use>
                  </svg>
                  <div class="device__title">Full-Time</div>
                  <div class="device__percent">20%</div>
                </div>
                <div class="device__indicator device__indicator_tablet">
                  <svg class="icon icon-profile-circle">
                    <use xlink:href="#icon-profile-circle"></use>
                  </svg>
                  <div class="device__title">Part-Time</div>
                  <div class="device__percent">5%</div>
                </div>
                <div class="device__indicator device__indicator_desktop">
                  <svg class="icon icon-profile-circle">
                    <use xlink:href="#icon-profile-circle"></use>
                  </svg>
                  <div class="device__title">Probation</div>
                  <div class="device__percent">75%</div>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card__head">
              <div class="title-purple card__title">Top country</div>
            </div>
            <div class="card__chart card__chart_top-country">
              <div id="top-country"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection