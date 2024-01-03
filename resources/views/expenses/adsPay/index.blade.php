@extends('layouts.app')
@section('content')
<div class="page__inner">
    <div class="page__container">
        <div class="page__title h3">Ads Pay</div>
        <div class="card">
        <div class="income">
            <div class="income__list">
            <div class="income__item">
                <div class="income__icon" style="background-color: #B5E4CA;">
                <svg class="icon icon-activity">
                    <use xlink:href="#icon-activity"></use>
                </svg>
                </div>
                <div class="income__line">
                <div class="income__details">
                    <div class="income__label">Total Paid
                    <div class="tooltip" title="Total Paid from Beginning">
                        <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                        </svg>
                    </div>
                    </div>
                    <div class="income__counter">$128,789</div>
                </div>
                </div>
            </div>
            <div class="income__item">
                <div class="income__icon" style="background-color: #CABDFF;">
                <svg class="icon icon-pie-chart">
                    <use xlink:href="#icon-pie-chart"></use>
                </svg>
                </div>
                <div class="income__line">
                <div class="income__details">
                    <div class="income__label">This Year
                    <div class="tooltip" title="New Ads Paid This Year">
                        <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                        </svg>
                    </div>
                    </div>
                    <div class="income__counter">$128,789</div>
                </div>
                </div>
            </div>
            <div class="income__item">
                <div class="income__icon" style="background-color: #B1E5FC;">
                <svg class="icon icon-donut-chart">
                    <use xlink:href="#icon-donut-chart"></use>
                </svg>
                </div>
                <div class="income__line">
                <div class="income__details">
                    <div class="income__label">CPR
                    <div class="tooltip" title="Cost Per Registration">
                        <svg class="icon icon-info">
                        <use xlink:href="#icon-info"></use>
                        </svg>
                    </div>
                    </div>
                    <div class="income__counter">$338.98</div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <div class="transactions card">
        <div class="card__head cstm-select">
            <div class="title-blue card__title">Item Listing</div>
            <select class="select select_small">
            <option>All time</option>
            <option>This Year Purchases</option>
            </select>
            <a href="{{route('adsPay.create')}}"><button class="button-small card__button">Add Item</button></a>
        </div>
        <div class="transactions__wrapper">
            <div class="transactions__table">
                <div class="transactions__row">
                    <div class="transactions__col">Month</div>
                    <div class="transactions__col">Company</div>
                    <div class="transactions__col">Promote</div>
                    <div class="transactions__col">Paid</div>
                    <div class="transactions__col">Traffic</div>
                    <div class="transactions__col">CPR</div>
                </div>
            @foreach ($adsPays as $item)
            <div class="transactions__row">
                <div class="transactions__col">
                <div class="transactions__label">Date</div>{{$item->month}}
                </div>
                <div class="transactions__col">
                    <div class="transactions__details">
                        <div class="transactions__product">Fleet - Travel shopping UI Design kit</div>
                        <div class="transactions__invoice">Short Description</div>
                    </div>
                    <div class="status-green-dark transactions__status">{{$item->company}}</div>
                </div>
                <div class="transactions__col">
                <div class="transactions__product">{{$item->promotedWebsite}}</div>
                <div class="transactions__invoice">Short Description</div>
                </div>
                <div class="transactions__col">
                <div class="transactions__label">Paid</div>$350.00
                </div>
                <div class="transactions__col">
                <div class="transactions__label">Traffic</div>
                <div class="transactions__amount">120</div>
                </div>
                <div class="transactions__col">
                    <div class="transactions__label">CPR</div>
                    <div class="transactions__amount">$10.00</div>
                </div>
                <div class="transactions__col">
                    <div class="transactions__amount">
                        <div class="actions">
                            <button class="actions__button">
                                <svg class="icon icon-more-horizontal">
                                <use xlink:href="#icon-more-horizontal"></use>
                                </svg>
                            </button>
                            <div class="actions__body">
                                <button class="actions__option" onClick="edit({{$item->id}})">
                                <svg class="icon icon-edit">
                                    <use xlink:href="#icon-edit"></use>
                                </svg>Edit Item
                                </button>
                                <button class="actions__option" onClick="delete_item({{$item->id}})">
                                <svg class="icon icon-trash">
                                    <use xlink:href="#icon-trash"></use>
                                </svg>Delete forever 
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{ route('adsPay.destroy', $item->id) }}" method="POST" id="delete_form_{{$item->id}}">
                @csrf
                @method('DELETE')
                </form>
            </div>
            @endforeach
        </div>
        <div class="transactions__foot">
            <button class="button-stroke button-small transactions__button">
                <div class="loader"></div><span>Load more</span>
            </button>
        </div>
    </div>
        
</div>
@endsection

@section('script')
  <script>
      function edit(id)
      {
          var editRoute  = "{{route('adsPay.edit',  'id' )}}"
          var url = editRoute.replace(/id/, id);
          window.location.href = url;
      }
  
      function delete_item(id) {
              Swal.fire({
              title: "Are you sure?",
              text: "You won't be able to revert this!",
              icon: "warning",
              showCancelButton: true,
              confirmButtonColor: "#0069F6",
              cancelButtonColor: "#d33",
              confirmButtonText: "Yes, delete it!"
              }).then((result) => {
              if (result.isConfirmed) {
                $('#delete_form_'+id+'').submit();
  
                Swal.fire({
                title: "Deleted!",
                text: "Your file has been deleted.",
                icon: "success"
                });
              }
              });
          }
  </script>
@endsection