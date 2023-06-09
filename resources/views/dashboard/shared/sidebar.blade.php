<div class="c-sidebar-brand">
  <img class="c-sidebar-brand-full" src="{{ asset('/metis-assets/pist.jpeg') }}" width="70" height="46" alt="CoreUI Logo"> <h2 class="ml-2">OSAS Portal</h2>
  <img class="c-sidebar-brand-minimized" src="{{ url('assets/brand/coreui-signet-white.svg') }}" width="118" height="46" alt="CoreUI Logo">
</div>
<ul class="c-sidebar-nav">

  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('dashboard.index') }}">
      <i class="cil-speedometer c-sidebar-nav-icon"></i>
      Dashboard
    </a>
  </li>
  @role('admin')
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('news.index') }}">
      <i class="cil-newspaper c-sidebar-nav-icon"></i>
      News
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('events.index') }}">
      <i class="cil-notes c-sidebar-nav-icon"></i>
      Activities
    </a>
  </li>

 
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('holidays.index')}}">
    <i class="cil-calendar-check c-sidebar-nav-icon"></i>
      Holiday
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('students.index') }}">
      <i class="cil-user-follow c-sidebar-nav-icon"></i>
      Students
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('announcements.index')}}">
      <i class="cil-line-style c-sidebar-nav-icon"></i>
      Announcement
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('appointments.index')}}">
    <i class="cil-calendar c-sidebar-nav-icon"></i>
      Appointment
    </a>
  </li>
  @endrole
  @role('assistant')
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('news.index') }}">
      <i class="cil-newspaper c-sidebar-nav-icon"></i>
      News
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('events.index') }}">
      <i class="cil-notes c-sidebar-nav-icon"></i>
      Activities
    </a>
  </li>

 
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('holidays.index')}}">
    <i class="cil-calendar-check c-sidebar-nav-icon"></i>
      Holiday
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{ route('students.index') }}">
      <i class="cil-user-follow c-sidebar-nav-icon"></i>
      Students
    </a>
  </li>
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('announcements.index')}}">
      <i class="cil-line-style c-sidebar-nav-icon"></i>
      Announcement
    </a>
  </li>
  @endrole

  @role('guidance')
  <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="{{route('holidays.index')}}">
    <i class="cil-calendar-check c-sidebar-nav-icon"></i>
      Holiday
    </a>
  </li>
  @endrole
  
  
  

  

  <!-- <li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link" href="">
      <i class="cil-school c-sidebar-nav-icon"></i>
      Services
    </a>
</li> -->

  <li class="c-sidebar-nav-title">@lang('System')</li>

  @role('admin')
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ route('users.index') }}">
        <i class="cil-people c-sidebar-nav-icon"></i>
        Users
      </a>
    </li>
    <li class="c-sidebar-nav-item">
      <a class="c-sidebar-nav-link" href="{{ route('our_backup_database') }}">
        <i class="cil-cloud-download c-sidebar-nav-icon"></i>
        Back-up Database
      </a>
    </li>
  @endrole
  <li class="c-sidebar-nav-item">
    <form action="{{ url('/logout') }}" method="POST"> @csrf 
      <span class="c-sidebar-nav-link logout-link" style="cursor:pointer">
        <i class="cil-account-logout c-sidebar-nav-icon"></i>
        Logout
      </span>
    </form>
  </li>
<script>
  $(".db").on("click",function(){
  
  $("#db-submit").click();
  
});
</script>
</ul>
<button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-minimized"></button>
</div>