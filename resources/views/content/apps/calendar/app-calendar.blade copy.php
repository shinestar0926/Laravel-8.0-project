@extends('layouts/calendarLayoutMaster')

@section('title', 'App Calender')

@section('vendor-style')
<!-- Vendor css files -->
<!-- <link rel="stylesheet" href="{{ asset(mix('vendors/css/calendars/fullcalendar.min.css')) }}"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.6.0/main.min.css">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/forms/select/select2.min.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('vendors/css/pickers/flatpickr/flatpickr.min.css')) }}">
@endsection
@section('page-style')
<!-- Page css files -->
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/pickers/form-flat-pickr.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/pages/app-calendar.css')) }}">
<link rel="stylesheet" href="{{ asset(mix('css/base/plugins/forms/form-validation.css')) }}">
<!-- Cutom css file -->
<link rel="stylesheet" href="{{ asset(mix('css/calendar-custom.css')) }}" />

@endsection
@section('content')
<!-- 20210508 -->
<div class="btn-group "  id="dropdownButton">
  <!-- <button
    class="btn btn-primary dropdown-toggle"
    type="button"
    id="dropdownMenuButton"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false"
  >
  <i data-feather='tool' ></i>
    Tools
  </button> -->
  <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <div class="custom-control custom-switch custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customSwitch" />
      <label class="custom-control-label" for="customSwitch">Switch One</label>
    </div>
    <div class="custom-control custom-switch custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customSwitch_2" />
      <label class="custom-control-label" for="customSwitch_2">Switch Two</label>
    </div><div class="custom-control custom-switch custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customSwitch_3" />
      <label class="custom-control-label" for="customSwitch_3">Switch Three</label>
    </div><div class="custom-control custom-switch custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customSwitch_4" />
      <label class="custom-control-label" for="customSwitch_4">Switch Four</label>
    </div><div class="custom-control custom-switch custom-control-inline">
      <input type="checkbox" class="custom-control-input" id="customSwitch_5" />
      <label class="custom-control-label" for="customSwitch_5">Switch Five</label>
    </div>
  </div> -->

            <!-- New begin -->
            <li class="dropdown dropdown-notification mr-25">
              <a class="nav-link btn btn-primary" href="javascript:void(0);" data-toggle="dropdown"><i data-feather='tool' ></i>Tools</a>
              <!-- <div class="btn-group "  > -->
                <!-- <button
                  class="btn btn-primary dropdown-toggle"
                  type="button"
                  id="dropdownMenuButton"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                <i data-feather='tool' ></i>
                  Tools
                </button> -->
              <!-- </div> -->
              <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                <li class="scrollable-container media-list">
                  <div class="media d-flex align-items-center">
                    <h6 class="font-weight-bolder mr-auto mb-0">Switch One</h6>
                    <div class="custom-control custom-control-primary custom-switch">
                      <input class="custom-control-input" id="customSwitch_1" type="checkbox" checked="">
                      <label class="custom-control-label" for="customSwitch_1"></label>
                    </div>
                  </div>
                </li>
                <li class="scrollable-container media-list">
                  <div class="media d-flex align-items-center">
                    <h6 class="font-weight-bolder mr-auto mb-0">Switch Two</h6>
                    <div class="custom-control custom-control-primary custom-switch">
                      <input class="custom-control-input" id="customSwitch_2" type="checkbox" checked="">
                      <label class="custom-control-label" for="customSwitch_2"></label>
                    </div>
                  </div>
                </li>
                <li class="scrollable-container media-list">
                  <div class="media d-flex align-items-center">
                    <h6 class="font-weight-bolder mr-auto mb-0">Switch Three</h6>
                    <div class="custom-control custom-control-primary custom-switch">
                      <input class="custom-control-input" id="customSwitch_3" type="checkbox" checked="">
                      <label class="custom-control-label" for="customSwitch_3"></label>
                    </div>
                  </div>
                </li>
                <li class="scrollable-container media-list">
                  <div class="media d-flex align-items-center">
                    <h6 class="font-weight-bolder mr-auto mb-0">Switch Four</h6>
                    <div class="custom-control custom-control-primary custom-switch">
                      <input class="custom-control-input" id="customSwitch_4" type="checkbox" checked="">
                      <label class="custom-control-label" for="customSwitch_4"></label>
                    </div>
                  </div>
                </li>
                <li class="scrollable-container media-list">
                  <div class="media d-flex align-items-center">
                    <h6 class="font-weight-bolder mr-auto mb-0">Switch Five</h6>
                    <div class="custom-control custom-control-primary custom-switch">
                      <input class="custom-control-input" id="customSwitch_5" type="checkbox" checked="">
                      <label class="custom-control-label" for="customSwitch_5"></label>
                    </div>
                  </div>
                </li>
                <li class="dropdown-menu-footer" ><a class="btn btn-primary btn-block" href="javascript:void(0)" id="saveOption">Save Options</a></li>
              </ul>
          </li>
        <!-- New end -->
</div>


<!-- Full calendar start -->
<section>

  <div class="app-calendar overflow-hidden border">
    <div class="row no-gutters">

    <!-- Sidebar -->
      <!-- <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
        <div class="sidebar-wrapper">
          <div class="card-body d-flex justify-content-center">
            <button class="btn btn-primary btn-toggle-sidebar btn-block" data-toggle="modal" data-target="#add-new-sidebar">
              <span class="align-middle">Add Event</span>
            </button>
          </div>
          <div class="card-body pb-0">
            <h5 class="section-label mb-1">
              <span class="align-middle">Filter</span>
            </h5>
            <div class="custom-control custom-checkbox mb-1">
              <input type="checkbox" class="custom-control-input select-all" id="select-all" checked />
              <label class="custom-control-label" for="select-all">View All</label>
            </div>
            <div class="calendar-events-filter">
              <div class="custom-control custom-control-danger custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input input-filter" id="personal" data-value="personal" checked />
                <label class="custom-control-label" for="personal">Personal</label>
              </div>
              <div class="custom-control custom-control-primary custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input input-filter" id="business" data-value="business" checked />
                <label class="custom-control-label" for="business">Business</label>
              </div>
              <div class="custom-control custom-control-warning custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input input-filter" id="family" data-value="family" checked />
                <label class="custom-control-label" for="family">Family</label>
              </div>
              <div class="custom-control custom-control-success custom-checkbox mb-1">
                <input type="checkbox" class="custom-control-input input-filter" id="holiday" data-value="holiday" checked />
                <label class="custom-control-label" for="holiday">Holiday</label>
              </div>
              <div class="custom-control custom-control-info custom-checkbox">
                <input type="checkbox" class="custom-control-input input-filter" id="etc" data-value="etc" checked />
                <label class="custom-control-label" for="etc">ETC</label>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-auto">
          <img src="{{ asset('images/pages/calendar-illustration.png') }}" alt="Calendar illustration" class="img-fluid" />
        </div>
      </div> -->
      <!-- /Sidebar -->

      <!-- Calendar -->
      <div class="col position-relative">
        <div class="card shadow-none border-0 mb-0 rounded-0">
          <div class="card-body pb-0">
            <div id="calendar"></div>
          </div>
        </div>
      </div>
      <!-- /Calendar -->
      <div class="body-content-overlay"></div>
    </div>
  </div>
  <!-- Calendar Add/Update/Delete event modal-->
  <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
    <div class="modal-dialog sidebar-lg">
      <div class="modal-content p-0">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
        <div class="modal-header mb-1">
          <h5 class="modal-title">Add Event</h5>
        </div>
        <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
          <form class="event-form needs-validation" data-ajax="false" novalidate>
            <div class="form-group">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Event Title" required />
            </div>
            <div class="form-group">
              <label for="select-label" class="form-label">Label</label>
              <select class="select2 select-label form-control w-100" id="select-label" name="select-label">
                <option data-label="primary" value="Business" selected>Business</option>
                <option data-label="danger" value="Personal">Personal</option>
                <option data-label="warning" value="Family">Family</option>
                <option data-label="success" value="Holiday">Holiday</option>
                <option data-label="info" value="ETC">ETC</option>
              </select>
            </div>
            <div class="form-group position-relative">
              <label for="start-date" class="form-label">Start Date</label>
              <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Start Date" />
            </div>
            <div class="form-group position-relative">
              <label for="end-date" class="form-label">End Date</label>
              <input type="text" class="form-control" id="end-date" name="end-date" placeholder="End Date" />
            </div>
            <div class="form-group">
              <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input allDay-switch" id="customSwitch3" />
                <label class="custom-control-label" for="customSwitch3">All Day</label>
              </div>
            </div>
            <div class="form-group">
              <label for="event-url" class="form-label">Event URL</label>
              <input type="url" class="form-control" id="event-url" placeholder="https://www.google.com" />
            </div>
            <div class="form-group select2-primary">
              <label for="event-guests" class="form-label">Add Guests</label>
              <select class="select2 select-add-guests form-control w-100" id="event-guests" multiple>
                <option data-avatar="1-small.png" value="Jane Foster">Jane Foster</option>
                <option data-avatar="3-small.png" value="Donna Frank">Donna Frank</option>
                <option data-avatar="5-small.png" value="Gabrielle Robertson">Gabrielle Robertson</option>
                <option data-avatar="7-small.png" value="Lori Spears">Lori Spears</option>
                <option data-avatar="9-small.png" value="Sandy Vega">Sandy Vega</option>
                <option data-avatar="11-small.png" value="Cheryl May">Cheryl May</option>
              </select>
            </div>
            <div class="form-group">
              <label for="event-location" class="form-label">Location</label>
              <input type="text" class="form-control" id="event-location" placeholder="Enter Location" />
            </div>
            <div class="form-group">
              <label class="form-label">Description</label>
              <textarea name="event-description-editor" id="event-description-editor" class="form-control"></textarea>
            </div>
            <div class="form-group d-flex">
              <button type="submit" class="btn btn-primary add-event-btn mr-1">Add</button>
              <button type="button" class="btn btn-outline-secondary btn-cancel" data-dismiss="modal">Cancel</button>
              <button type="submit" class="btn btn-primary update-event-btn d-none mr-1">Update</button>
              <button class="btn btn-outline-danger btn-delete-event d-none">Delete</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--/ Calendar Add/Update/Delete event modal-->
  <span class="add-user" data-toggle="modal" data-target="#modals-slide-in"><i data-feather="plus"></i>Add Employees</span>

    <!-- <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">New Employee</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                <input
                  type="text"
                  class="form-control dt-full-name"
                  id="basic-icon-default-fullname"
                  placeholder="John Doe"
                  name="user-fullname"
                  aria-label="John Doe"
                  aria-describedby="basic-icon-default-fullname2"
                />
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="basic-icon-default-uname">Username</label>
                <input
                  type="text"
                  id="basic-icon-default-uname"
                  class="form-control dt-uname"
                  placeholder="Web Developer"
                  aria-label="jdoe1"
                  aria-describedby="basic-icon-default-uname2"
                  name="user-name"
                />
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label class="form-label" for="basic-icon-default-phone">Contact Information</label>
                <input
                  type="text"
                  id="basic-icon-default-phone"
                  class="form-control dt-phone"
                  placeholder="123-456-789"
                  aria-label="123-456-789"
                  aria-describedby="basic-icon-default-email2"
                  name="user-phone"
                />
                <small class="form-text text-muted"> You can use Mobile Phone numbers </small>
              </div>
              <div class="form-group col-md-6">
                <label class="form-label" for="basic-icon-default-email">Email</label>
                <input
                  type="text"
                  id="basic-icon-default-email"
                  class="form-control dt-email"
                  placeholder="john.doe@example.com"
                  aria-label="john.doe@example.com"
                  aria-describedby="basic-icon-default-email2"
                  name="user-email"
                />
                <small class="form-text text-muted"> You can use letters, numbers & periods </small>
              </div>
            </div>

            <div class="form-group mb-2 mt-2">
              <div class="custom-control custom-control-info custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="colorCheck6" checked />
                <label class="custom-control-label" for="colorCheck6">Send employee a link to the free app (Recommended)</label>
              </div>
            </div>

            
            <div class="form-group">
                <label class="form-label access-label" for="access-level">Access Level</label>
                <div class="accessLevel">
                  <span class="access-level">Employee</span>
                  <span class="access-level">Manager</span>
                  <span class="access-level">General Manager</span>
                </div>
            </div>

            <div class="form-group mb-2 col-md-4 user-wage">
              <label class="form-label" for="user-wage">Wage</label>
                <select class="select2 form-control" id="user-wage">
                  <option value="hour">/hour</option>
                  <option value="year">year</option>
                </select>

            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary data-submit col-md-12">Submit</button>
              </div>
              <div class="form-group col-md-6">
                <button type="reset" class="btn btn-outline-secondary col-md-12" data-dismiss="modal">Cancel</button>          
              </div>
            </div>
          </div>
        </form>
      </div>
    </div> -->

    <div class="modal modal-slide-in new-user-modal fade" id="modals-slide-in">
      <div class="modal-dialog">
        <form class="add-new-user modal-content pt-0">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">×</button>
          <div class="modal-header mb-1">
            <h5 class="modal-title" id="exampleModalLabel">New User</h5>
          </div>
          <div class="modal-body flex-grow-1">
            <div class="form-group">
              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
              <input
                type="text"
                class="form-control dt-full-name"
                id="basic-icon-default-fullname"
                placeholder="John Doe"
                name="user-fullname"
                aria-label="John Doe"
                aria-describedby="basic-icon-default-fullname2"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-icon-default-uname">Username</label>
              <input
                type="text"
                id="basic-icon-default-uname"
                class="form-control dt-uname"
                placeholder="Web Developer"
                aria-label="jdoe1"
                aria-describedby="basic-icon-default-uname2"
                name="user-name"
              />
            </div>
            <div class="form-group">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <input
                type="text"
                id="basic-icon-default-email"
                class="form-control dt-email"
                placeholder="john.doe@example.com"
                aria-label="john.doe@example.com"
                aria-describedby="basic-icon-default-email2"
                name="user-email"
              />
              <small class="form-text text-muted"> You can use letters, numbers & periods </small>
            </div>
            <div class="form-group">
              <label class="form-label" for="user-role">User Role</label>
              <select id="user-role" class="form-control">
                <option value="subscriber">Subscriber</option>
                <option value="editor">Editor</option>
                <option value="maintainer">Maintainer</option>
                <option value="author">Author</option>
                <option value="admin">Admin</option>
              </select>
            </div>
            <div class="form-group mb-2">
              <label class="form-label" for="user-plan">Select Plan</label>
              <select id="user-plan" class="form-control">
                <option value="basic">Basic</option>
                <option value="enterprise">Enterprise</option>
                <option value="company">Company</option>
                <option value="team">Team</option>
              </select>
            </div>
            <button type="submit" class="btn btn-primary mr-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-outline-secondary" data-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>

    <!-- Bottom Table -->

    <div class="table-responsive dayTable">
      <table class="table table-bordered">
        <tbody>
            <tr>
              <th>
                <div class="row display-flex">
                  <div>
                    <div>
                      WAGES
                    </div>
                    <div >
                      HOURS
                    </div>
                  </div>
                  <div class="detail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </div>
              </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <!-- <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div> -->
                  </div>
                </th>
                <th>
                <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="subdetail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                    <div>
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                  </div>
                </th>
            </tr>
        </tbody>
      </table>
    </div>

    <div class="table-responsive weekTable">
      <table class="table table-bordered">
        <tbody>
            <tr>
              <th>
                <div class="row display-flex">
                  <div>
                    <div>
                      WAGES
                    </div>
                    <div >
                      HOURS
                    </div>
                  </div>
                  <div class="detail-wage">
                    <div>$0.00</div>
                    <div>8.00</div>
                  </div>
                </div>
              </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">0</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                        <div>$0.00</div>
                        <div>0.00</div>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                      <div>$0.00</div>
                      <div>8.00</div>
                    </div>
                  </div>
                </th>
                <th>
                <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">1</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                      <div>$0.00</div>
                      <div>0.00</div>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">0</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                        <div>$0.00</div>
                        <div>0.00</div>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">0</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                        <div>$0.00</div>
                        <div>0.00</div>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">0</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                        <div>$0.00</div>
                        <div>0.00</div>
                    </div>
                  </div>
                </th>
                <th>
                  <div class="row subdetail-wage-week">
                    <div class="weekTable-bottom-bar-user">
                      <i data-feather="user" aria-hidden="true"></i>
                      <span class="js-summary-employees">0</span>
                    </div>
                    <div class="weekTable-bottom-bar">
                        <div>$0.00</div>
                        <div>0.00</div>
                    </div>
                  </div>
                </th>
            </tr>
        </tbody>
      </table>
    </div>
</section>
<!-- Full calendar end -->
@endsection

@section('vendor-script')
<!-- Vendor js files -->
<!-- <script src="{{ asset(mix('vendors/js/calendar/fullcalendar.min.js')) }}"></script> -->

<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar-scheduler@5.6.0/main.min.js"></script> -->
<script src="{{ asset(mix('js/scripts/pages/app-calendar.min.js')) }}"></script>

<script src="{{ asset(mix('vendors/js/extensions/moment.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/select/select2.full.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/forms/validation/jquery.validate.min.js')) }}"></script>
<script src="{{ asset(mix('vendors/js/pickers/flatpickr/flatpickr.min.js')) }}"></script>
@endsection
@section('page-script')
<!-- Page js files -->
<script src="{{ asset(mix('js/scripts/pages/app-calendar-events.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/pages/app-calendar.js')) }}"></script>
<script src="{{ asset(mix('js/scripts/forms/form-select2.js')) }}"></script>

@endsection