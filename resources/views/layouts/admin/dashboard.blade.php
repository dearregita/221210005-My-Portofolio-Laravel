@extends('layouts.admin.app')
@section('content')

<main id="main" class="main">


    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <div class="col-lg-12">
          <div class="row">
              
            <!-- User Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">User</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>150 Data</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End User Card -->

            <!-- Contact Us Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="card-body">
                  <h5 class="card-title">Contact Us</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-envelope"></i>
                    </div>
                    <div class="ps-3">
                      <h6>200 Data</h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Contact Us Card -->

            <!-- Profile Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Profile</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-briefcase"></i>
                    </div>
                    <div class="ps-3">
                      <h6>20 Data</h6>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Profile Card -->
          </div>
        </div>

        <!-- Left side columns -->
    
        <div class="card col-lg-8">
            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Time</th>
                    <th scope="col">Activity</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>12 Sep 2021 <span>| 12:22:11</span></td>
                    <td>Deleted Education</td>
                  </tr>
                  <tr>
                    <td>12 Sep 2021 <span>| 15:22:11</span></td>
                    <td>Edit Skill</td>
                  </tr>
                  <tr>
                    <td>12 Sep 2021 <span>| 20:22:11</span></td>
                    <td>Add User</td>
                  </tr>
                  <tr>
                    <td>12 Sep 2021 <span>| 22:22:11</span></td>
                    <td>Delete Contact Us</td>
                  </tr>
                  <tr>
                    <td>12 Sep 2021 <span>| 23:22:11</span></td>
                    <td>Add User</td>
                  </tr>
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>

        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

        <!-- Website Traffic -->
        <div class="card">
        <div class="card-body pb-0">
            <h5 class="card-title">Summary Profile</h5>

            <div id="trafficChart" style="min-height: 400px;" class="echart"></div>

            <script>
            document.addEventListener("DOMContentLoaded", () => {
                echarts.init(document.querySelector("#trafficChart")).setOption({
                tooltip: {
                    trigger: 'item'
                },
                legend: {
                    top: '5%',
                    left: 'center'
                },
                series: [{
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    label: {
                    show: false,
                    position: 'center'
                    },
                    emphasis: {
                    label: {
                        show: true,
                        fontSize: '18',
                        fontWeight: 'bold'
                    }
                    },
                    labelLine: {
                    show: false
                    },
                    data: [{
                        value: 6,
                        name: 'Tools'
                    },
                    {
                        value: 7,
                        name: 'Skill'
                    },
                    {
                        value: 4,
                        name: 'Experience'
                    },
                    {
                        value: 2,
                        name: 'Education'
                    }
                    ]
                }]
                });
            });
            </script>

        </div>
        </div><!-- End Website Traffic -->

        </div><!-- End Right side columns -->
        
      </div>        
    </section>
</main><!-- End #main -->


@endsection