
@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('apiServer.update', ['apiServer' => $apiServer->id]) }}">
  @csrf
  @method('PUT')
  <input type="text" type="hidden" value="{{$apiServer->id}}"/>
  <div class="popup popup_product js-popup js-popup-additem animation visible">
    <div class="popup__overlay js-popup-overlay"></div>
    <div class="popup__wrap js-popup-wrap">
      <div class="product js-product">
        <div class="product__control">
          <button class="product__close">
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
                        <div class="field__label">Name
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="name" value={{$apiServer->name}} required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Company
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="company" value={{$apiServer->company}} required>
                        </div>
                      </div>
                      
                    </div>

                    <div class="settings__row">
                      <div class="field">
                        <div class="field__label">Website
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="website" value={{$apiServer->website}} required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Package Name
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <input class="field__input" type="text" name="packageName" value={{$apiServer->packageName}} required>
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
                          <input class="field__input" type="date" name="purchaseDate" value={{$apiServer->purchaseDate}}  required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Months
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <div class="field__wrap">
                            <input placeholder="1-60" class="field__input" type="number" name="months" min="1" max="60" value={{$apiServer->months}}  required>
                          </div>
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
                          <input class="field__input" type="number" name="amount" value={{$apiServer->amount}} required>
                        </div>
                      </div>
                      <div class="field">
                        <div class="field__label">Renewal Amount
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap">
                          <div class="field__wrap">
                            <input class="field__input" type="number" name="renewalAmount"  value={{$apiServer->renewalAmount}}>
                          </div>
                        </div>
                      </div>
                      
                    </div>

                    <div class="settings__row">
                      
                      <div class="field">
                        <div class="field__label">How many website allowed
                          <div class="tooltip tooltipstered">
                          </div>
                        </div>
                        <div class="field__wrap cstm">
                          <select class="select" name="allowed">
                            <option value="Unlimited">Select</option>
                            <option value="Unlimited" {{$apiServer->allowed == "Unlimited" ? "selected" : ""}}>Unlimited</option>
                            <option value="1-100" {{$apiServer->allowed == "1-100" ? "selected" : ""}}>1-100</option>
                          </select>
                        </div>
                      </div>
                      
                    </div>
                   
                    <div class="editor">
                      <div class="editor__label">Description
                        <div class="tooltip" title="Description">
                        </div>
                      </div>
                      <textarea class="editor__textarea js-editor" name="description">{{$apiServer->description}}</textarea>
                    </div>
                  </div>

                  <button type="submit" style="margin-top:30px" class="button settings__button">Save Item</button>
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
  window.location.href = "{{route('apiServer.index')}}";
})
</script>
@endsection