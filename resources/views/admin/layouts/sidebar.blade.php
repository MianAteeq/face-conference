<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=""><a href="/admin/dashboard"><i class="la la-home"></i><span class="menu-title" data-i18n="eCommerce Dashboard"> Dashboard</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Ecommerce">Conference</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Ecommerce"></i>
            </li>

            <li class="nav-item has-sub"><a href="#"><i class="la la-list"></i><span class="menu-title" data-i18n="Templates">Conference Candidate</span></a>
                <ul class="menu-content" style="">
                    <li class=" {{ request()->is('admin/all/conference/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.all.candidate')}}"><i></i><span data-i18n="Vertical">All Candidate </span></a>

                    </li>
                    <li class=" {{ request()->is('admin/pending/conference/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.pending.candidate')}}"><i></i><span data-i18n="Horizontal">Pending Candidate </span></a>

                    </li>
                    <li class=" {{ request()->is('admin/approve/conference/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.approve.candidate')}}"><i></i><span data-i18n="Horizontal">Approve Candidate </span></a>

                    </li>
                    <li class=" {{ request()->is('admin/rejected/conference/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.rejected.candidate')}}"><i></i><span data-i18n="Horizontal">Reject Candidate </span></a>

                    </li>
                    {{-- Receipt Pending --}}
                    <li class=" {{ request()->is('admin/receipt/pending/conference/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.receipt.pending.candidate')}}"><i></i><span data-i18n="Horizontal">Receipt Pending </span></a>

                    </li>
                    <li class=" {{ request()->is('admin/support/tickets') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.support.tickets')}}"><i></i><span data-i18n="Horizontal">Support Ticket</span></a>

                    </li>
                </ul>
            </li>
          <li class="nav-item has-sub"><a href="#"><i class="la la-list"></i><span class="menu-title" data-i18n="Templates">Workshop Candidate</span></a>
                <ul class="menu-content" style="">
                    <li class=" {{ request()->is('admin/all/workshop/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.all.workshop.candidate')}}"><i></i><span data-i18n="Vertical">All Candidate </span></a>

                    </li>
                    <li  class=" {{ request()->is('admin/pending/workshop/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.pending.workshop.candidate')}}"><i></i><span data-i18n="Horizontal">Pending Candidate </span></a>

                    </li>
                    <li  class=" {{ request()->is('admin/approve/workshop/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.approve.workshop.candidate')}}"><i></i><span data-i18n="Horizontal">Approve Candidate </span></a>

                    </li>
                    <li  class=" {{ request()->is('admin/rejected/workshop/candidate*') ? 'active' : '' }}">
                        <a class="menu-item" href="{{route('admin.rejected.workshop.candidate')}}"><i></i><span data-i18n="Horizontal">Reject Candidate </span></a>

                    </li>
                </ul>
            </li>

            <li class=" nav-item"><a href="{{route('admin.conference.type')}}"><i class="la la-list"></i><span class="menu-title" data-i18n="Shop">Conference Type</span></a>
            </li>
            <li class=" nav-item"><a href="{{route('admin.send.email')}}"><i class="la la-list"></i><span class="menu-title" data-i18n="Shop">Send Email</span></a>
            </li>


            </li>


        </ul>
    </div>
</div>
