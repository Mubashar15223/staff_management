
@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('software.update', ['software' => $software->id]) }}">
  @csrf
  @method('PUT')
  <input type="text" type="hidden" value="{{$software->id}}"/>
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
                          <input class="field__input" type="text" value="{{$software->companyName}}" name="companyName" required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Website
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="platformWebsite" value="{{$software->platformWebsite}}" required>
                        </div>
                      </div>
                    </div>

                    <div class="settings__row">
                      <div class="field">
                        <div class="field__label">Package Name
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="packageName" value="{{$software->packageName}}" required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Price Type
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap cstm-radio">
                          <label id="subscribe" class="radio checkbox checkbox_reverse">
                            <input class="radio__input" type="radio" name="priceType" {{$software->priceType=="subscribe"?"checked":""}} value="subscribe"><span class="radio__inner"><span class="radio__text">Subscribe</span><span class="radio__tick"></span></span>
                          </label>
                          <label id="one-time" class="radio checkbox checkbox_reverse">
                            <input class="radio__input" type="radio" name="priceType" {{$software->priceType=="onetime"?"checked":""}} value="onetime"><span class="radio__inner"><span class="radio__text">One-time</span><span class="radio__tick"></span></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="settings__row">
                      <div class="field">
                        <div class="field__label">Purchase Date
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <div class="field__wrap">
                            <input placeholder="1-60" class="field__input" type="date" name="purchaseDate"  value="{{$software->purchaseDate}}" required>
                          </div>
                        </div>
                      </div>
                      <div id="months" class="field">
                        <div class="field__label">Months
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input placeholder="1-60" class="field__input" type="text" name="months" value="{{$software->months}}" required>
                        </div>
                      </div>
                    </div>
                    <div class="settings__row">
                    
                      <div class="field">
                        <div class="field__label">Amount 
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="number" name="amount" value="{{$software->amount}}" required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Renewal Amount
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="number" name="renewalAmount" value="{{$software->renewalAmount}}">
                        </div>
                      </div>
                      
                    </div>
                    <div class="settings__row">
                      <div class="field">
                        <div class="field__label">How many Website allowed 
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <div class="field__wrap cstm">
                            <select class="select" name="allowed">
                              <option value="Select">Select</option>
                              <option value="Unlimited" {{$software->allowed=="Unlimited"?"selected":""}}>Unlimited</option>
                              <option value="1-100" {{$software->allowed=="1-100"?"selected":""}}>1-100</option>
                            </select>
                          </div>
                        </div>
                      </div>

                     
                      <div class="field">
                        <div class="field__label">Users 
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <div class="field__wrap">
                            <input name="tags"  placeholder="Enter tags to describe your item" value="{{ implode(', ',  json_decode($software->tags, true))}}">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="editor">
                      <div class="editor__label">Description
                        <div class="tooltip" title="Description">
                        </div>
                      </div>
                      <textarea class="editor__textarea js-editor" name="description">{{$software->description}}</textarea>
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
  window.location.href = "{{route('software.index')}}";
})
</script>
@endsection