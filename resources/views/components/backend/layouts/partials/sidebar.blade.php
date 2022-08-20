<div id="sidebar" class='active '>
    <div class="sidebar-wrapper active mt-0">
        <div class="sidebar-header ">
            <a href="{{ url('/') }}">
                <img src="{{asset('image/logo.jpg')}}" width="200px" alt="">
            </a>
        </div>
        @php
            $role = Auth::user()->role_id;
            $user_id = Auth::user()->id;
        @endphp

        <div class="sidebar-menu">
            <ul class="menu mt-0">
                <li class='sidebar-title'>Main Menu</li>
                <li class="sidebar-item active ">
                    @if ($role == 1)
                        <a href="{{route('admin.dashboard')}}" class='sidebar-link'>
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>
                    @elseif($role == 2)
                        <a href="{{route('doctors.show', $user_id)}}" class='sidebar-link'>
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>
                    @elseif($role == 3)
                        <a href="{{route('patient.dashboard', $user_id)}}" class='sidebar-link'>
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>
                    @endif
                    

                </li>

                <li class='sidebar-title'>Doctors & Appointments</li>

                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>

                    <i data-feather="user" width="15"></i>
                        <span>Doctors</span>
                    </a>


                    <ul class="submenu ">
                        <li>
                            <a href="{{route('doctors.index')}}">
                            <i data-feather="list" width="15"></i>
                            Doctors List</a>
                        </li>

                        @if ($role == 1 || $role == 2)
                            <li>
                                <a href="{{route('doctors.create')}}">
                                <i data-feather="plus-square" width="15"></i>
                                    Add Doctor
                                </a>
                            </li>
                        @endif
                        
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                    <i data-feather="user" width="15"></i>
                        <span>Patients</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('patients.index')}}">
                            <i data-feather="list" width="15"></i>
                            Patients List</a>
                        </li>

                        @if ($role == 1 || $role == 2)
                            <li>
                                <a href="{{route('patients.create')}}">
                                <i data-feather="plus-square" width="15"></i>
                                    Add Patient
                                </a>
                            </li>
                        @endif
                    </ul>
                </li>

                <li class="sidebar-item  has-sub">
                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-plus" width="15"></i>
                        <span>Appointments</span>
                    </a>

                    <ul class="submenu ">
                        <li>
                            <a href="{{route('appointments')}}">
                            <i data-feather="list" width="15"></i>
                                Appointment List
                            </a>
                        </li>
                    </ul>

                </li>
                <li class='sidebar-title'>Departments</li>
                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="folder-plus" width="15"></i>
                        <span>General Departments</span>
                    </a>


                    <ul class="submenu ">

                        <li>
                            <a href="{{route('departments.index')}}">
                            <i data-feather="list" width="15"></i>
                                Department List
                            </a>
                        </li>

                        @if ($role == 1 || $role == 2)
                        <li>
                            <a href="{{route('departments.create')}}">
                            <i data-feather="plus-square" width="15"></i>
                                Add New Department</a>
                        </li>
                        @endif

                    </ul>

                </li>
                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="grid" width="15"></i>
                        <span>Test & Pathology Departments</span>
                    </a>


                    <ul class="submenu ">

                        <li>
                            <a href="{{route('test.index')}}">
                            <i data-feather="list" width="15"></i>
                                Test Department List
                            </a>
                        </li>
                        @if ($role == 1 || $role == 2)
                        <li>
                            <a href="{{route('test.create')}}">
                            <i data-feather="plus-square" width="15"></i>
                                Add Test Department
                            </a>
                        </li>
                        @endif
                    </ul>

                </li>
                <li class='sidebar-title'>Pathology & Imaging</li>
                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="list" width="15"></i>
                        <span>Test List and Departments</span>
                    </a>


                    <ul class="submenu ">
                        <li>
                            <a href="{{route('service.index')}}">
                            <i data-feather="list" width="15"></i>
                           <span>Test List</span>
                        </a>
                        </li>
                        @if ($role == 1 || $role == 2)
                        <li>
                            <a href="{{route('service.create')}}">
                            <i data-feather="plus-square" width="15"></i>
                                Add New Test
                            </a>
                        </li>
                        @endif
                    </ul>

                </li>
                <li class='sidebar-title'>Report & Others</li>

                <li class="sidebar-item  has-sub">

                    <a href="#" class='sidebar-link'>
                        <i data-feather="file-text" width="15"></i>
                        <span>Report</span>
                    </a>


                    <ul class="submenu ">
                        <li>
                            <a href="{{route('appointment.pdf')}}">Appointments List</a>
                        </li>
                        <li>
                            <a href="{{route('doctor.doctorlistpdf')}}">Doctor List</a>
                        </li>
                        <li>
                            <a href="{{route('pricelist.pdf')}}">Price List</a>
                        </li>
                    </ul>

                </li>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>