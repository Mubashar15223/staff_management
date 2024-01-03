@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('adsPay.update', ['adsPay' => $adsPay->id]) }}">
    @csrf
    @method('PUT')
<div class="popup popup_product js-popup js-popup-additem animation visible">
  <div class="popup__overlay js-popup-overlay"></div>
  <div class="popup__wrap js-popup-wrap">
  <div class="product js-product">
      <div class="product__control">
      <button class="product__close js-popup-close">
          <svg class="icon icon-close">
          <use xlink:href="#icon-close"></use>
          </svg>
      </button>
      </div>
      <div style="width:1020px;" class="product__wrapper">
      <div class="product__details">
          <div class="product__overview">
          <div class="create__card card">
              <div class="card__head">
              <div class="title-red card__title">Add Item</div>
              </div>
              <div class="settings__fieldset">
              <div class="field">
                  <div class="settings__row">
                  <div class="field">
                      <div class="field__label">Company
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <input class="field__input" type="text" name="company" value="{{$adsPay->company}}" required>
                      </div>
                  </div>
                  <div class="field">
                      <div class="field__label">Ads Website
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <input class="field__input" type="text" name="adsWebsite" value="{{$adsPay->adsWebsite}}" required>
                      </div>
                  </div>
                  </div>

                  <div class="settings__row">
                  <div class="field">
                      <div class="field__label">Month
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <input class="field__input" type="month" name="month" value="{{$adsPay->month}}"  required>
                      </div>
                  </div>
                  <div class="field">
                      <div class="field__label">Paid of this month
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <input class="field__input" type="number" name="paidMonth" value="{{$adsPay->paidMonth}}" required>
                      </div>
                  </div>
                  </div>

                  <div class="settings__row">
                  <div class="field">
                      <div class="field__label">Engaged Traffic
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <div class="field__wrap">
                          <input class="field__input" type="number" name="engagedTraffic" value="{{$adsPay->engagedTraffic}}" required>
                      </div>
                      </div>
                  </div>
                  <div class="field">
                      <div class="field__label">Our Promoted Website
                      <div class="tooltip tooltipstered">
                      </div>
                      </div>
                      <div class="field__wrap">
                      <input class="field__input" type="text" name="promotedWebsite" value="{{$adsPay->promotedWebsite}}" required>
                      </div>
                  </div>
                  </div>

                  <div class="editor">
                  <div class="editor__label">Short Description
                      <div class="tooltip" title="Description">
                      </div>
                  </div>
                  <textarea class="editor__textarea js-editor" name="description">{{$adsPay->description}}</textarea>
                  </div>
              </div>

              <button style="margin-top:30px" class="button settings__button" type="submit">Save Item</button>


              </div>
          </div>
          </div>
      </div>
      </div>
  </div>
  </div>
</div>
</form>
@endsection

@section('script')
<script>
$('.product__close').on('click', function(event){
  event.preventDefault();
  window.location.href = "{{route('adsPay.index')}}";
})
</script>
@endsection