@extends('layouts.app')

@section('content')

    <!-- <div class="layout-px-spacing">

        <div class="row layout-top-spacing">

            <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-one">
                    <div class="widget-heading">
                        <h6 class="">Statistics</h6>
                    </div>
                    <div class="w-chart">
                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Total Visits</p>
                                <p class="w-stats">4 023 964</p>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="total-users"></div>
                            </div>
                        </div>

                        <div class="w-chart-section">
                            <div class="w-detail">
                                <p class="w-title">Paid Visits</p>
                                <p class="w-stats">7 929</p>
                            </div>
                            <div class="w-chart-render-one">
                                <div id="paid-visits"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-four">
                    <div class="widget-content">
                        <div class="w-content">
                            <div class="w-info">
                                <h6 class="value">45,141 $</h6>
                                <p class="">Expenses</p>
                            </div>
                            <div class="">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 57%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-account-invoice-two">
                    <div class="widget-content">
                        <div class="account-box">
                            <div class="info">
                                <h5 class="">Pro Plan</h5>
                                <p class="inv-balance">$10,344</p>
                            </div>
                            <div class="acc-action">
                                <div class="">
                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                                    <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                                </div>
                                <a href="javascript:void(0);">Upgrade</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-chart-three">
                    <div class="widget-heading">
                        <div class="">
                            <h5 class="">Unique Visitors</h5>
                        </div>

                        <div class="dropdown  custom-dropdown">
                            <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                                <a class="dropdown-item" href="javascript:void(0);">View</a>
                                <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                <a class="dropdown-item" href="javascript:void(0);">Download</a>
                            </div>
                        </div>
                    </div>

                    <div class="widget-content">
                        <div id="uniqueVisits"></div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-activity-three">

                    <div class="widget-heading">
                        <h5 class="">Notifications</h5>
                    </div>

                    <div class="widget-content">

                        <div class="mt-container mx-auto">
                            <div class="timeline-line">
                                
                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Logs</h5>
                                            <span class="">27 Feb, 2020</span>
                                        </div>
                                        <p><span>Updated</span> Server Logs</p>
                                        <div class="tags">
                                            <div class="badge badge-primary">Logs</div>
                                            <div class="badge badge-success">CPanel</div>
                                            <div class="badge badge-warning">Update</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Mail</h5>
                                            <span class="">28 Feb, 2020</span>
                                        </div>
                                        <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                        <div class="tags">
                                            <div class="badge badge-primary">Admin</div>
                                            <div class="badge badge-success">HR</div>
                                            <div class="badge badge-warning">Mail</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-danger"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Task Completed</h5>
                                            <span class="">01 Mar, 2020</span>
                                        </div>
                                        <p>Backup <span>Files EOD</span></p>
                                        <div class="tags">
                                            <div class="badge badge-primary">Backup</div>
                                            <div class="badge badge-success">EOD</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-warning"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Collect Docs</h5>
                                            <span class="">10 Mar, 2020</span>
                                        </div>
                                        <p>Collected documents from <a href="javascript:void(0);">Sara</a></p>
                                        <div class="tags">
                                            <div class="badge badge-success">Collect</div>
                                            <div class="badge badge-warning">Docs</div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item-timeline timeline-new">
                                    <div class="t-dot">
                                        <div class="t-dark"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><rect x="2" y="2" width="20" height="8" rx="2" ry="2"></rect><rect x="2" y="14" width="20" height="8" rx="2" ry="2"></rect><line x1="6" y1="6" x2="6" y2="6"></line><line x1="6" y1="18" x2="6" y2="18"></line></svg></div>
                                    </div>
                                    <div class="t-content">
                                        <div class="t-uppercontent">
                                            <h5>Reboot</h5>
                                            <span class="">06 Apr, 2020</span>
                                        </div>
                                        <p>Server rebooted successfully</p>
                                        <div class="tags">
                                            <div class="badge badge-warning">Reboot</div>
                                            <div class="badge badge-primary">Server</div>
                                        </div>
                                    </div>
                                </div>                                      
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget-four">
                    <div class="widget-heading">
                        <h5 class="">Visitors by Browser</h5>
                    </div>
                    <div class="widget-content">
                        <div class="vistorsBrowser">
                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chrome"><circle cx="12" cy="12" r="10"></circle><circle cx="12" cy="12" r="4"></circle><line x1="21.17" y1="8" x2="12" y2="8"></line><line x1="3.95" y1="6.06" x2="8.54" y2="14"></line><line x1="10.88" y1="21.94" x2="15.46" y2="14"></line></svg>
                                </div>
                                <div class="w-browser-details">
                                    <div class="w-browser-info">
                                        <h6>Chrome</h6>
                                        <p class="browser-count">65%</p>
                                    </div>
                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 65%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-compass"><circle cx="12" cy="12" r="10"></circle><polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76"></polygon></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>Safari</h6>
                                        <p class="browser-count">25%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 35%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="browser-list">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                                </div>
                                <div class="w-browser-details">
                                    
                                    <div class="w-browser-info">
                                        <h6>Others</h6>
                                        <p class="browser-count">15%</p>
                                    </div>

                                    <div class="w-browser-stats">
                                        <div class="progress">
                                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                            
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                <div class="row widget-statistic">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-followers">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                                </div>
                                <p class="w-value">31.6K</p>
                                <h5 class="">Followers</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-referral">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-link"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                                </div>
                                <p class="w-value">1,900</p>
                                <h5 class="">Referral</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-12">
                        <div class="widget widget-one_hybrid widget-engagement">
                            <div class="widget-heading">
                                <div class="w-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                                </div>
                                <p class="w-value">18.2%</p>
                                <h5 class="">Engagement</h5>
                            </div>
                            <div class="widget-content">    
                                <div class="w-chart">
                                    <div id="hybrid_followers3"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-card-one">
                    <div class="widget-content">

                        <div class="media">
                            <div class="w-img">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <div class="media-body">
                                <h6>Jimmy Turner</h6>
                                <p class="meta-date-time">Monday, Nov 18</p>
                            </div>
                        </div>

                        <p>"Duis aute irure dolor" in reprehenderit in voluptate velit esse cillum "dolore eu fugiat" nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>

                        <div class="w-action">
                            <div class="card-like">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-thumbs-up"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                                <span>551 Likes</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                <div class="widget widget-five">
                    <div class="widget-content">

                        <div class="header">
                            <div class="header-body">
                                <h6>Pending Tasks</h6>
                                <p class="meta-date">Nov 2019</p>
                            </div>
                            <div class="task-action">
                                <div class="dropdown  custom-dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="pendingTask" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="pendingTask">
                                        <a class="dropdown-item" href="javascript:void(0);">Add</a>
                                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Clear All</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-content">
                            <div class="">                                            
                                <p class="task-left">8</p>
                                <p class="task-completed"><span>12 Done</span></p>
                                <p class="task-hight-priority"><span>3 Task</span> with High priotity</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
                <div class="widget widget-card-two">
                    <div class="widget-content">

                        <div class="media">
                            <div class="w-img">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <div class="media-body">
                                <h6>Dev Summit - New York</h6>
                                <p class="meta-date-time">Bronx, NY</p>
                            </div>
                        </div>

                        <div class="card-bottom-section">
                            <h5>4 Members Going</h5>
                            <div class="img-group">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                                <img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">
                            </div>
                            <a href="javascript:void(0);" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div> -->
    <div class="widget-content widget-content-area br-6">

<!--
        <div  style="width: 100%" >
            <a  style="width: 100%"  href="#filter" data-active="false" data-toggle="collapse" aria-expanded="false" class="btn btn-outline-success mb-2">
                <div style="float: left;margin-left:10px">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg>
                    <span >Filter</span>
                </div>
            </a>
            <ul class="submenu list-unstyled collapse" id="filter" style="">
                 -->
                    

                    {{-- Filter Tab --}}
                @include('reservation.tab-filter',['filter'=>$filter,'type'=>'analy'])
                {{-- End filter Tab --}}
                
            <!-- </ul>
        </div>-->

    </div>


    <div class="layout-px-spacing">

<div class="row layout-top-spacing">
@if (Auth::guard()->user()->role==1)
    <!-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-one">
            <div class="widget-heading">
                <h6 class="">Daily booking status</h6>
            </div>
            <div class="w-chart">
                <div class="w-chart-section">
                    <div class="w-detail">
                        <p class="w-title">Total Selling </p>
                        <p class="w-stats">{{$res_state["t_un_sell"]}}   €</p>
                    </div>
                     <div class="w-chart-render-one">
                        <div id="total-users"></div>
                    </div> -->
                    <!-- <div class="w-chart-render-one">
                        <div id="paid-visits"></div>
                    </div>
                </div> -->

                <!-- <div class="w-chart-section">
                    <div class="w-detail">
                        <p class="w-title">Total Purchase</p>
                        <p class="w-stats">{{$res_state["t_un_purshase"]}}   €</p>
                    </div>
                       <div class="w-chart-render-one">
                        <div id="total-users"></div>
                         </div>  -->
                    <!-- <div class="w-chart-render-one">
                        <div id="paid-visits"></div>
                    </div> -->
                <!-- </div> -->

                


            <!-- </div>
        </div>
    </div> -->

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget-four">
            <div class="widget-heading">
                <h5 class="">Daily booking status</h5>
            </div>
            <div class="widget-content">
                <div class="vistorsBrowser">
                    <div class="browser-list">
                        <div class="w-icon">
                        </div>
                        <div class="w-browser-details">
                            <div class="w-browser-info">
                                <h6>Total Selling</h6>
                                <p style="font-size: 19px;font-weight: 600;margin-bottom: 0;color: #888ea8;"> {{number_format($res_state["t_un_sell"], 2, ',', ' ')}}   €</p>
                            </div>
                            <div class="w-browser-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="browser-list">
                        <div class="w-icon">
                        </div>
                        <div class="w-browser-details">
                            
                            <div class="w-browser-info">
                                <h6>Total Purchase</h6>
                                <p style="    font-size: 19px;font-weight: 600;margin-bottom: 0;color: #888ea8;"> {{number_format($res_state["t_un_purshase"], 2, ',', ' ')}} </p>
                            </div>

                            <div class="w-browser-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 100%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <!-- <div class="browser-list">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>
                        </div>
                        <div class="w-browser-details">
                            
                            <div class="w-browser-info">
                                <h6>Others</h6>
                                <p class="browser-count">15%</p>
                            </div>

                            <div class="w-browser-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div> -->
                    
                </div>

            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget-one">
            <div class="widget-content">
                <div class="w-numeric-value">
                    <div class="w-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    </div>
                    <div class="w-content">
                        <span class="w-value">  {{number_format($res_state["res_marge"], 2, ',', ' ')}}  €</span>
                        <span class="w-numeric-title">Daily Margin</span>
                    </div>
                </div>
                <div class="w-chart">
                    <div id="total-orders"></div>
                </div>
            </div>
        </div>
    </div>
   
   
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value">{{number_format($res_state["state_nightprice"], 2, ',', ' ')}} Eur</h6>
                        <p class="">ADR</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                        </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 100%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value">{{$res_state["state_bdsc"]}} %</h6>
                        <p class="">Average Commission</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: {{$res_state["state_bdsc"]}}%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value">{{$res_state["state_nightcount"]}} Nights</h6>
                        <p class="">LOS</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-primary" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value"> {{number_format($res_state["state_marge"], 2, ',', ' ')}} Eur</h6>
                        <p class="">REVpar</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value">{{$res_state["tnight_count"]}} Nights</h6>
                        <p class="">Total_Nights</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">
                <div class="w-content">
                    <div class="w-info">
                        <h6 class="value">{{$res_state["state_bw"]}} Days</h6>
                        <p class="">Booking_Window</p>
                    </div>
                    <div class="">
                        <!-- <div class="w-icon"> -->
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg> -->
                        <!-- </div> -->
                    </div>
                </div>
                <div class="progress">
                    <div class="progress-bar bg-gradient-dark" role="progressbar" style="width: 100%" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-two">
            <div class="widget-heading">
                <h5 class="">Sales by Category</h5>
            </div>
            <div class="widget-content">
                <div id="chart-2" class=""></div>
                <input type="hidden" name="res_ok" id="res_ok" value="{{ $res_state["res_ok"] }}"/>
                <input type="hidden" name="res_count_st_cn" id="res_count_st_cn" value="{{ $res_state["res_count_st_cn"] }}"/>
                <input type="hidden" name="res_count_st_KUN" id="res_count_st_KUN" value="{{ $res_state["res_count_st_KUN"] }}"/>
                <input type="hidden" name="res_count_st_CN_FEE" id="res_count_st_CN_FEE" value="{{ $res_state["res_count_st_CN_FEE"] }}"/>
                <input type="hidden" name="res_count_stCN_NRF" id="res_count_stCN_NRF" value="{{ $res_state["res_count_stCN_NRF"] }}"/>
                <input type="hidden" name="res_count_st_NO_SHOW" id="res_count_st_NO_SHOW" value="{{ $res_state["res_count_st_NO_SHOW"] }}"/>
           
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Revenue <H1></H1></h5>
                <ul class="tabs tab-pills">
                    <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Booking Date</a></li>
                </ul>
            </div>

            <div class="widget-content">
                <div class="tabs tab-content">
                    <div id="2" class="tabcontent"> 
                        <div id="revenueMonthly"></div>
                             @php 
                            $total_Booking_selling=0;
                            $total_Booking_purchsing=0;
                            @endphp
                        @for($i=0;$i < 12;$i++)

                        <input type="hidden" name="mois_{{$i}}_book" id="mois_{{$i}}_book"  @if(isset($records[$i]["total"])) value="{{$records[$i]["total"]}} " @else value="0" @endif/>
                        <input type="hidden" name="mois_{{$i}}_book_pur" id="mois_{{$i}}_book_pur" @if(isset($records[$i]["total_purchsing"]))  value="{{$records[$i]["total_purchsing"]}}" @else value="0"  @endif/>
                        
                            @php 
                            if(isset($records[$i]["total"])) 
                            $total_Booking_selling=$total_Booking_selling + $records[$i]["total"];
                            if(isset($records[$i]["total_purchsing"]))
                            $total_Booking_purchsing=$total_Booking_purchsing + $records[$i]["total_purchsing"];

                            @endphp
                        @endfor
                        @php 
                      

                        @endphp
                       <input type="hidden" name="total_Booking_selling" id="total_Booking_selling"   value="{{$total_Booking_selling}} "  />
                       <input type="hidden" name="total_Booking_purchsing" id="total_Booking_purchsing"   value="{{$total_Booking_purchsing}} " />
                        

                    </div>
                </div>
            </div>
        </div>
    </div> -->


   

  

<!--    
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Revenue <H1></H1></h5>
                <ul class="tabs tab-pills">
                    <li><a href="javascript:void(0);" id="tb_1_1" class="tabmenu">Checkout Date</a></li>
                </ul>
            </div>

            <div class="widget-content">
                <div class="tabs tab-content">
                    <div id="2" class="tabcontent"> 
                        <div id="revenueMonthly_1"></div>
                             @php 
                            $total_checkout_selling=0;
                            $total_checkout_purchsing=0;
                            @endphp
                        @for($i=0;$i < 12;$i++)

                        <input type="hidden" name="mois_{{$i}}_chek" id="mois_{{$i}}_chek"  @if(isset($records_1[$i]["total"])) value="{{$records_1[$i]["total"]}} " @else value="0" @endif/>
                        <input type="hidden" name="mois_{{$i}}_chek" id="mois_{{$i}}_chek_pur" @if(isset($records_1[$i]["total_purchsing"]))  value="{{$records_1[$i]["total_purchsing"]}}" @else value="0"  @endif/>
                            @php 
                            if(isset($records_1[$i]["total"])) 
                            $total_checkout_selling=$total_checkout_selling + $records_1[$i]["total"];
                            if(isset($records_1[$i]["total_purchsing"]))
                            $total_checkout_purchsing=$total_checkout_purchsing + $records_1[$i]["total_purchsing"];
                            @endphp
                        @endfor

                       <input type="hidden" name="total_checkout_selling" id="total_checkout_selling"   value="{{$total_checkout_selling}} "  />
                       <input type="hidden" name="total_checkout_purchsing" id="total_checkout_purchsing"   value="{{$total_checkout_purchsing}} " />
                        
                        
                       

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-one">
            <div class="widget-heading">
                <h5 class="">Revenue <H1></H1></h5>
                <ul class="tabs tab-pills">
                    <li><a href="javascript:void(0);" id="tb_1_1" class="tabmenu">Checkin Date</a></li>
                </ul>
            </div>

            <div class="widget-content">
                <div class="tabs tab-content">
                    <div id="content_2" class="tabcontent"> 
                        <div id="revenueMonthly_2"></div>
                             @php 
                            $total_checkin_selling=0;
                            $total_checkin_purchsing=0;
                            @endphp
                        @for($i=0;$i < 12;$i++)

                        <input type="hidden" name="mois_{{$i}}_chekin" id="mois_{{$i}}_chekin"  @if(isset($records_2[$i]["total"])) value="{{$records_2[$i]["total"]}} " @else value="0" @endif/>
                        <input type="hidden" name="mois_{{$i}}_chekin" id="mois_{{$i}}_chekin_pur" @if(isset($records_2[$i]["total_purchsing"]))  value="{{$records_2[$i]["total_purchsing"]}}" @else value="0"  @endif/>
                            @php 
                            if(isset($records_2[$i]["total"])) 
                            $total_checkin_selling=$total_checkin_selling + $records_2[$i]["total"];
                            if(isset($records_2[$i]["total_purchsing"]))
                            $total_checkin_purchsing=$total_checkin_purchsing + $records_2[$i]["total_purchsing"];
                            @endphp
                        @endfor

                       <input type="hidden" name="total_checkin_selling" id="total_checkin_selling"   value="{{$total_checkin_selling}} "  />
                       <input type="hidden" name="total_checkin_purchsing" id="total_checkin_purchsing"   value="{{$total_checkin_purchsing}} " />
                        
                        
                       

                    </div>
                </div>
            </div>
        </div>
    </div>

  
    
    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-three">
            <div class="widget-heading">
                <div class="">
                    <h5 class="">Revenue Booking (2022 - 2023)</h5>
                </div>

                <div class="dropdown  custom-dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    </div>
                </div>
            </div>
            @for($i=0;$i < 12;$i++)

            <input type="hidden" name="mois_{{$i}}_parans" id="mois_{{$i}}_parans"  @if(isset($records_prece[$i]["total"])) value="{{$records_prece[$i]["total"]}} " @else value="0" @endif/>
              
            @endfor

            <div class="widget-content">
                <div id="uniqueVisits"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-three">
            <div class="widget-heading">
                <div class="">
                    <h5 class="">Revenue checkout (2022 - 2023)</h5>
                </div>

                <div class="dropdown  custom-dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    </div>
                </div>
            </div>
            @for($i=0;$i < 12;$i++)

            <input type="hidden" name="mois_{{$i}}_parans_checkout" id="mois_{{$i}}_parans_checkout"  @if(isset($records_prece_checkout[$i]["total"])) value="{{$records_prece_checkout[$i]["total"]}} " @else value="0" @endif/>
              
            @endfor

            <div class="widget-content">
                <div id="unique_checkout"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-three">
            <div class="widget-heading">
                <div class="">
                    <h5 class="">Revenue check-in (2022 - 2023)</h5>
                </div>

                <div class="dropdown  custom-dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    </div>
                </div>
            </div>
            @for($i=0;$i < 12;$i++)

            <input type="hidden" name="mois_{{$i}}_parans_checkin" id="mois_{{$i}}_parans_checkin"  @if(isset($records_prece_checkin[$i]["total"])) value="{{$records_prece_checkin[$i]["total"]}} " @else value="0" @endif/>
              
            @endfor

            <div class="widget-content">
                <div id="unique_checkin"></div>
            </div>
        </div>
    </div>

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-chart-three">
            <div class="widget-heading">
                <div class="">
                    <h5 class="">Revenue par semaine (2022 - 2023)</h5>
                </div>

                <div class="dropdown  custom-dropdown">
                    <a class="dropdown-toggle" href="#" role="button" id="uniqueVisitors" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="uniqueVisitors">
                        <a class="dropdown-item" href="javascript:void(0);">View</a>
                        <a class="dropdown-item" href="javascript:void(0);">Update</a>
                        <a class="dropdown-item" href="javascript:void(0);">Download</a>
                    </div>
                </div>
            </div>
            @php 
            $month = date('m');
            @endphp
            @for($i=0;$i < 7;$i++)

            <input type="hidden" name="semaine_{{$i}}_parans_total" id="semaine_{{$i}}_parans_total"  @if(isset($records_semaine[$i]["total"])) value="{{$records_semaine[$i]["total"]}} " @else value="0" @endif/>
            <input type="hidden" name="semaine_{{$i}}_parans_jour" id="semaine_{{$i}}_parans_jour"  @if(isset($records_semaine[$i]["total"])) value="{{$records_semaine[$i]["date_jour"]}} " @else value="0" @endif/>
              
            @endfor

            <div class="widget-content">
                <div id="unique_semaine"></div>
            </div>
        </div>
    </div> -->

     <!-- <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget widget-account-invoice-two">
            <div class="widget-content">
                <div class="account-box">
                    <div class="info">
                        <h5 class="">Pro Plan</h5>
                        <p class="inv-balance">$10,344</p>
                    </div>
                    <div class="acc-action">
                        <div class="">
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a>
                            <a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg></a>
                        </div>
                        <a href="javascript:void(0);">Upgrade</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

   

    <!-- <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
        <div class="widget-three">
            <div class="widget-heading">
                <h5 class="">Summary</h5>
            </div>
            <div class="widget-content">

                <div class="order-summary">

                    <div class="summary-list">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                        </div>
                        <div class="w-summary-details">
                            
                            <div class="w-summary-info">
                                <h6>Income</h6>
                                <p class="summary-count">$92,600</p>
                            </div>

                            <div class="w-summary-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="summary-list">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                        </div>
                        <div class="w-summary-details">
                            
                            <div class="w-summary-info">
                                <h6>Profit</h6>
                                <p class="summary-count">$37,515</p>
                            </div>

                            <div class="w-summary-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="summary-list">
                        <div class="w-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                        </div>
                        <div class="w-summary-details">
                            
                            <div class="w-summary-info">
                                <h6>Expenses</h6>
                                <p class="summary-count">$55,085</p>
                            </div>

                            <div class="w-summary-stats">
                                <div class="progress">
                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                    
                </div>

            </div>
        </div>
    </div> -->

    

    <!-- <div class="col-xl-5 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-one">
            <div class="widget-heading">
                <h5 class="">Transactions</h5>
            </div>

            <div class="widget-content">
                <div class="transactions-list">
                    <div class="t-item">
                        <div class="t-company-name">
                            <div class="t-icon">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                            <div class="t-name">
                                <h4>Electricity Bill</h4>
                                <p class="meta-date">4 Aug 1:00PM</p>
                            </div>

                        </div>
                        <div class="t-rate rate-dec">
                            <p><span>-$16.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                        </div>
                    </div>
                </div>

                <div class="transactions-list">
                    <div class="t-item">
                        <div class="t-company-name">
                            <div class="t-icon">
                                <div class="avatar avatar-xl">
                                    <span class="avatar-title rounded-circle">SP</span>
                                </div>
                            </div>
                            <div class="t-name">
                                <h4>Shaun Park</h4>
                                <p class="meta-date">4 Aug 1:00PM</p>
                            </div>
                        </div>
                        <div class="t-rate rate-inc">
                            <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                        </div>
                    </div>
                </div>

                <div class="transactions-list">
                    <div class="t-item">
                        <div class="t-company-name">
                            <div class="t-icon">
                                <div class="avatar avatar-xl">
                                    <span class="avatar-title rounded-circle">AD</span>
                                </div>
                            </div>
                            <div class="t-name">
                                <h4>Amy Diaz</h4>
                                <p class="meta-date">4 Aug 1:00PM</p>
                            </div>

                        </div>
                        <div class="t-rate rate-inc">
                            <p><span>+$66.44</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg></p>
                        </div>
                    </div>
                </div>

                <div class="transactions-list">
                    <div class="t-item">
                        <div class="t-company-name">
                            <div class="t-icon">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                </div>
                            </div>
                            <div class="t-name">
                                <h4>Netflix</h4>
                                <p class="meta-date">4 Aug 1:00PM</p>
                            </div>

                        </div>
                        <div class="t-rate rate-dec">
                            <p><span>-$32.00</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down"><line x1="12" y1="5" x2="12" y2="19"></line><polyline points="19 12 12 19 5 12"></polyline></svg></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        
        <div class="widget widget-activity-four">

            <div class="widget-heading">
                <h5 class="">Recent Activities</h5>
            </div>

            <div class="widget-content">

                <div class="mt-container mx-auto">
                    <div class="timeline-line">
                        
                        <div class="item-timeline timeline-primary">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p><span>Updated</span> Server Logs</p>
                                <span class="badge badge-danger">Pending</span>
                                <p class="t-time">Just Now</p>
                            </div>
                        </div>

                        <div class="item-timeline timeline-success">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Send Mail to <a href="javascript:void(0);">HR</a> and <a href="javascript:void(0);">Admin</a></p>
                                <span class="badge badge-success">Completed</span>
                                <p class="t-time">2 min ago</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-danger">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Backup <span>Files EOD</span></p>
                                <span class="badge badge-danger">Pending</span>
                                <p class="t-time">14:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-dark">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Collect documents from <a href="javascript:void(0);">Sara</a></p>
                                <span class="badge badge-success">Completed</span>
                                <p class="t-time">16:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-warning">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Conference call with <a href="javascript:void(0);">Marketing Manager</a>.</p>
                                <span class="badge badge-primary">In progress</span>
                                <p class="t-time">17:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-secondary">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Rebooted Server</p>
                                <span class="badge badge-success">Completed</span>
                                <p class="t-time">17:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-warning">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Send contract details to Freelancer</p>
                                <span class="badge badge-danger">Pending</span>
                                <p class="t-time">18:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-dark">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Kelly want to increase the time of the project.</p>
                                <span class="badge badge-primary">In Progress</span>
                                <p class="t-time">19:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-success">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Server down for maintanence</p>
                                <span class="badge badge-success">Completed</span>
                                <p class="t-time">19:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-secondary">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Malicious link detected</p>
                                <span class="badge badge-warning">Block</span>
                                <p class="t-time">20:00</p>
                            </div>
                        </div>

                        <div class="item-timeline  timeline-warning">
                            <div class="t-dot" data-original-title="" title="">
                            </div>
                            <div class="t-text">
                                <p>Rebooted Server</p>
                                <span class="badge badge-success">Completed</span>
                                <p class="t-time">23:00</p>
                            </div>
                        </div>

                    </div>                                    
                </div>

                <div class="tm-action-btn">
                    <button class="btn">View All <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        
        <div class="widget widget-account-invoice-one">

            <div class="widget-heading">
                <h5 class="">Account Info</h5>
            </div>

            <div class="widget-content">
                <div class="invoice-box">
                    
                    <div class="acc-total-info">
                        <h5>Balance</h5>
                        <p class="acc-amount">$470</p>
                    </div>

                    <div class="inv-detail">                                        
                        <div class="info-detail-1">
                            <p>Monthly Plan</p>
                            <p>$ 199.0</p>
                        </div>
                        <div class="info-detail-2">
                            <p>Taxes</p>
                            <p>$ 17.82</p>
                        </div>
                        <div class="info-detail-3 info-sub">
                            <div class="info-detail">
                                <p>Extras this month</p>
                                <p>$ -0.68</p>
                            </div>
                            <div class="info-detail-sub">
                                <p>Netflix Yearly Subscription</p>
                                <p>$ 0</p>
                            </div>
                            <div class="info-detail-sub">
                                <p>Others</p>
                                <p>$ -0.68</p>
                            </div>
                        </div>
                    </div>

                    <div class="inv-action">
                        <a href="" class="btn btn-dark">Summary</a>
                        <a href="" class="btn btn-danger">Transfer</a>
                    </div>
                </div>
            </div>

        </div>
    </div> -->

    <!-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-two">

            <div class="widget-heading">
                <h5 class="">Recent Orders</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Customer</div></th>
                                <th><div class="th-content">Product</div></th>
                                <th><div class="th-content">Invoice</div></th>
                                <th><div class="th-content th-heading">Price</div></th>
                                <th><div class="th-content">Status</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Andy King</div></td>
                                <td><div class="td-content product-brand">Nike Sport</div></td>
                                <td><div class="td-content">#76894</div></td>
                                <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Irene Collins</div></td>
                                <td><div class="td-content product-brand">Speakers</div></td>
                                <td><div class="td-content">#75844</div></td>
                                <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Laurie Fox</div></td>
                                <td><div class="td-content product-brand">Camera</div></td>
                                <td><div class="td-content">#66894</div></td>
                                <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-danger">Pending</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Luke Ivory</div></td>
                                <td><div class="td-content product-brand">Headphone</div></td>
                                <td><div class="td-content">#46894</div></td>
                                <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Ryan Collins</div></td>
                                <td><div class="td-content product-brand">Sport</div></td>
                                <td><div class="td-content">#89891</div></td>
                                <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Nia Hillyer</div></td>
                                <td><div class="td-content product-brand">Sunglasses</div></td>
                                <td><div class="td-content">#26974</div></td>
                                <td><div class="td-content pricing"><span class="">$168.09</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                            </tr>
                            <tr>
                                <td><div class="td-content customer-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="avatar">Sonia Shaw</div></td>
                                <td><div class="td-content product-brand">Watch</div></td>
                                <td><div class="td-content">#76844</div></td>
                                <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    -->

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-three">

            <div class="widget-heading">
                <h5 class="">Classement Destination TOP 10</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><div class="th-content">Name</div></th>
                                <th><div class="th-content th-heading">Nombre de reservation</div></th>
                                <th><div class="th-content th-heading">Marge</div></th>
                            </tr>
                        </thead>
                        <tbody>
                     
                        @foreach($Destination_top as $row)
                            <tr>
                                <td><div class="td-content product-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="product">{{$row['Country']}}</div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['count_tgx']}}</span></div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['marge_tgx']}}</span></div></td>
                           
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
      <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-three">

            <div class="widget-heading">
                <h5 class="">Classement City TOP 10</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th><div class="th-content">Name</div></th>
                                <th><div class="th-content th-heading">Nombre de reservation</div></th>
                                <th><div class="th-content th-heading">Marge</div></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($City_top as $row)
                            <tr>
                                <td><div class="td-content product-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="product">{{$row['City']}}</div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['count_tgx']}}</span></div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['marge_tgx']}}</span></div></td>
                           
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-three">

            <div class="widget-heading">
                <h5 class="">Classement Buyer TOP 10</h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                            <th><div class="th-content">Name</div></th>
                                <th><div class="th-content th-heading">Nombre de reservation</div></th>
                                <th><div class="th-content th-heading">Marge</div></th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($Buyer_top as $row)
                            <tr>
                                <td><div class="td-content product-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="product">{{$row['clientCode']}}</div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['count_tgx']}}</span></div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['marge_tgx']}}</span></div></td>
                           
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 

    <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-table-three">

            <div class="widget-heading">
                <h5 class="">Classement Seller TOP 10 </h5>
            </div>

            <div class="widget-content">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th><div class="th-content">Name</div></th>
                                <th><div class="th-content th-heading">Nombre de reservation</div></th>
                                <th><div class="th-content th-heading">Marge</div></th>
                                
                            </tr>
                        </thead>
                        <tbody>

                        @foreach($Seller_top as $row)
                            <tr>
                                <td><div class="td-content product-name"><img src="{{asset('storage/img/90x90.jpg')}}" alt="product">{{$row['providerName']}}</div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['count_tgx']}}</span></div></td>
                                <td><div class="td-content"><span class="pricing">{{$row['marge_tgx']}}</span></div></td>
                           
                            </tr>
                            @endforeach 
                        
                    
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> 
@else
<h1>aucun information</h1>
@endif
</div>

</div>
<script>
/*
==================================
Sales By Category | Options
==================================
*/

// $res_ok=document.getElementById("res_ok").value;
// $res_count_st_cn=document.getElementById("res_count_st_cn").value;
// $res_count_st_KUN=document.getElementById("res_count_st_KUN").value;
// $res_count_st_CN_FEE=document.getElementById("res_count_st_CN_FEE").value;
// $res_count_stCN_NRF=document.getElementById("res_count_stCN_NRF").value;
// $res_count_st_NO_SHOW=document.getElementById("res_count_st_NO_SHOW").value;
// alert($res_ok)
// chart.updateSeries([{
//   series: [100,50, 50, 100,150,25],
// }])

// function codeAddress() {
//     $res_ok=document.getElementById("res_ok").value;
// $res_count_st_cn=document.getElementById("res_count_st_cn").value;
// $res_count_st_KUN=document.getElementById("res_count_st_KUN").value;
// $res_count_st_CN_FEE=document.getElementById("res_count_st_CN_FEE").value;
// $res_count_stCN_NRF=document.getElementById("res_count_stCN_NRF").value;
// $res_count_st_NO_SHOW=document.getElementById("res_count_st_NO_SHOW").value;
// let fgp_array = [$res_ok,$res_count_st_cn,$res_count_st_KUN,$res_count_st_CN_FEE,$res_count_stCN_NRF,$res_count_st_NO_SHOW];
//     console.log("Changing chart to FGP");
//     // chart.updateSeries([{


//     //     series: [{
//     //   data: fgp_array
//     //          }],
//     // }])
//     ApexCharts.exec('#chart-2', 'updateOptions', {
//         series: fgp_array,
//         //   labels: newLabels
//         })
//  };


// function myFunction()
// {
//     // $("th").removeClass("sorting_asc");
//         alert('ff');
// }
// window.addEventListener('load', (event) => {
//     $("th").removeClass("sorting_asc");
//     $(".mt").addClass("sorting_desc");
// });
    // });
    function check_code()
    {
        //  alert($('#Code').val());
        if($('#Type_code').val()!="" && $('#Code').val()=="")
        {
            $('#code_message').text("merci d'ajouter le code");
            $('#Type_message').text("");
            $("#Code").prop('required',true);

        }
        if($('#Code').val()!="" && $('#Type_code').val()=="")
        {
            $('#code_message').text("");
            $('#Type_message').text("merci d'ajouter le Type de code")
            $("#Type_code").prop('required',true);
        }
        if($('#Code').val()=="" && $('#Type_code').val()=="" )
        {
            $("#Code").prop('required',false);
            $("#Type_code").prop('required',false);
            $('#code_message').text("");
            $('#Type_message').text("");
        }
        if($('#Code').val()!=""  )
        {
            $('#code_message').text("");
            

        }
        if($('#Type_code').val()!="" )
        {
            $('#Type_message').text("");
            

        }
    }
function vide()
{
    // $("#hotel").empty();
    $('#hotel').val(null).trigger('change');
    window.document.getElementById('hotel').selectedIndex = 0;

    $('#rangeCalendarFlatpickr').val(null).trigger('change');
    window.document.getElementById('rangeCalendarFlatpickr').selectedIndex = 0;

    $('#date_type').val(null).trigger('change');
    window.document.getElementById('date_type').selectedIndex = 0;

    $('#status').val(null).trigger('change');
    window.document.getElementById('status').selectedIndex = 0;

    $('#agency').val(null).trigger('change');
    window.document.getElementById('agency').selectedIndex = 0;

    $('#provider').val(null).trigger('change');
    window.document.getElementById('provider').selectedIndex = 0;

    $('#Payment_Status').val(null).trigger('change');
    window.document.getElementById('Payment_Status').selectedIndex = 0;

    $('#Type_code').val(null).trigger('change');
    window.document.getElementById('Type_code').selectedIndex = 0;

    $("#Code").val('');
    $('#Type_message').text("");
    $('#code_message').text("");
    $("#Code").prop('required',false);
    $("#Type_code").prop('required',false);
}
    // document.getElementById("start_date").value = <?php echo json_encode($filter["start_date"]); ?>;    // set the value to this input 
    // document.getElementById("end_date").value = <?php echo json_encode($filter["end_date"]); ?>;    // set the value to this input 
    // document.getElementById("rangeCalendarFlatpickr").value =  json_encode($filter["rangeCalendarFlatpickr"]);    // set the value to this input 
    // document.getElementById("date_type").value = <?php echo json_encode($filter["date_type"]); ?>;    // set the value to this input 
    // document.getElementById("status").value = <?php echo json_encode($filter["status"]); ?>;    // set the value to this input 
    //  document.getElementById("hotel").value = <?php echo json_encode(''); ?>;    // set the value to this input 
    // document.getElementById("agency").value = <?php echo json_encode($filter["agency"]); ?>;    // set the value to this input 
    // document.getElementById("provider").value = <?php echo json_encode($filter["provider"]); ?>;   // set the value to this input 
    // document.getElementById("Payment_Status").value = <?php echo json_encode($filter["Payment_Status"]); ?>;   // set the value to this input 





</script>
    
@endsection  