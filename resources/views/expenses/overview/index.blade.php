
@extends('layouts.app')
@section('content')
<div class="page__inner">
  <div class="page__container">
   <div class="cstm-dropdown">
      <div class="page__title h3">All Expenses</div>
      <select class="select select_small">
          <option>September 2023</option>
          <option>October 2023</option>
          <option>November 2023</option>
      </select>
   </div>
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
                <div class="income__label">Office Labour Cost
                  <div class="tooltip" title="Office Labour Cost">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="income__counter">$128k</div>
                <div class="income__indicator"> 
                  <div class="balance positive">
                    <svg class="icon icon-arrow-top">
                      <use xlink:href="#icon-arrow-top"></use>
                    </svg>37.8%
                  </div><span>vs Sept 2023</span>
                </div>
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
                <div class="income__label">Remote Labour Cost
                  <div class="tooltip" title="Remote Labour Cost">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="income__counter">$512.64</div>
                <div class="income__indicator"> 
                  <div class="balance negative">
                    <svg class="icon icon-arrow-top">
                      <use xlink:href="#icon-arrow-top"></use>
                    </svg>17.8%
                  </div><span>vs Sept 2023</span>
                </div>
              </div>
            </div>
          </div>
          <div class="income__item">
            <div class="income__icon" style="background-color: #B1E5FC;">
              <svg class="icon icon-shopping-bag">
                <use xlink:href="#icon-shopping-bag"></use>
              </svg>
            </div>
            <div class="income__line">
              <div class="income__details">
                <div class="income__label">Utilities Cost
                  <div class="tooltip" title="Utilities Cost">
                    <svg class="icon icon-info">
                      <use xlink:href="#icon-info"></use>
                    </svg>
                  </div>
                </div>
                <div class="income__counter">$64k</div>
                <div class="income__indicator"> 
                  <div class="balance positive">
                    <svg class="icon icon-arrow-top">
                      <use xlink:href="#icon-arrow-top"></use>
                    </svg>24.3%
                  </div><span>vs Sept 2023</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="page__row">
      <div class="page__col">
        <div class="card">
          <div class="card__head">
            <div class="title-purple card__title">Monthly Total Expenses<div class="tooltip" title="Sum up of Office, remote labour and utilities cost">
              <svg style="fill: #6F767E !important" class="icon icon-info">
                <use xlink:href="#icon-info"></use>
              </svg>
            </div></div>
            <select class="select select_small">
              <option>Last 7 days</option>
              <option>This month</option>
              <option>All time</option>
            </select>
          </div>
          <div class="card__chart card__chart_product-sales">
            <div id="monthly-expense"></div>
          </div>
        </div>
      </div>
      <div class="page__col">
        <div class="card">
          <div class="card__head">
            <div class="title-blue card__title">Utilities</div>
          </div>
          <div class="countries">
            <div class="countries__list">
              <div class="countries__item">
                <div class="countries__flag">SG</div>
                <div class="countries__title">Siteground</div>
                <div class="countries__price">$876.77</div>
              </div>
              <div class="countries__item">
                <div class="countries__flag">HG</div>
                <div class="countries__title">HostGator</div>
                <div class="countries__price">$128.77</div>
              </div>
              <div class="countries__item">
                <div class="countries__flag">BH</div>
                <div class="countries__title">Bluehost</div>
                <div class="countries__price">$124.77</div>
              </div>
              <div class="countries__item">
                <div class="countries__flag">RA</div>
                <div class="countries__title">Rapid API</div>
                <div class="countries__price">$82.36</div>
              </div>
              <div class="countries__item">
                <div class="countries__flag">SS</div>
                <div class="countries__title">StatScore</div>
                <div class="countries__price">$32.00</div>
              </div>
              <div class="countries__item">
                <div class="countries__flag">CA</div>
                <div class="countries__title">Cricket API</div>
                <div class="countries__price">$41.89</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="earning">
      <div class="earning__table">
        <div class="earning__row">
          <div class="earning__col">Month<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Launched<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Progress<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Engaged<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Registered<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Deposit<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
          <div class="earning__col">Total Expenses<i class="tooltip fa fa-exclamation-circle tooltip tooltipstered" aria-hidden="true" title="tooltip"></i></div>
        </div>
                      <div class="earning__row">
                        <div class="earning__col">Sept 2024</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">5</div>
                        <div class="earning__col">23,223</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">
                          <div class="status-green-dark earning__status">$3,140.00</div>
                        </div>
                      </div>
                      <div class="earning__row">
                        <div class="earning__col">Sept 2024</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">5</div>
                        <div class="earning__col">23,223</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">
                          <div class="status-green-dark earning__status">$3,140.00</div>
                        </div>
                      </div>
                      <div class="earning__row">
                        <div class="earning__col">Sept 2024</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">5</div>
                        <div class="earning__col">23,223</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">
                          <div class="status-green-dark earning__status">$3,140.00</div>
                        </div>
                      </div>
                      <div class="earning__row">
                        <div class="earning__col">Sept 2024</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">5</div>
                        <div class="earning__col">23,223</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">23</div>
                        <div class="earning__col">
                          <div class="status-green-dark earning__status">$3,140.00</div>
                        </div>
                      </div>
                      
                      
      </div>
    </div>
  </div>
</div>
@endsection
  @section('script')
  <script>
      function edit(id)
      {
          var editRoute  = "{{route('theme.edit',  'id' )}}"
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