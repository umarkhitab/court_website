<div class="be-left-sidebar">
    <div class="left-sidebar-wrapper"><a class="left-sidebar-toggle" href="#">Blank Page</a>
        <div class="left-sidebar-spacer">
            <div class="left-sidebar-scroll">
                <div class="left-sidebar-content">
                    <ul class="sidebar-elements">
                        <li>
                            <a href="{{ route('judge_message.index') }}">
                                <i class="mdi mdi-plus-circle-o"></i> <span>Session Judge Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('cheifejustice.index') }}">
                                <i class="mdi mdi-plus-circle-o"></i> <span>Chief Justice Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('registrar.index') }}">
                                <i class="mdi mdi-plus-circle-o"></i> <span>Registrar Message</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('announcement.index') }}">
                                <i class="mdi mdi-notifications-add"></i> <span>Create Announcements</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('list.index') }}">
                                <i class="mdi mdi-collection-plus"></i> <span> Create List </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('events.index') }}">
                                <i class="mdi mdi-collection-plus"></i> <span> Letest Events </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('gallery.index') }}">
                                <i class="mdi mdi-collection-folder-image"></i> <span> Gallery </span>
                            </a>
                        </li>
                        
                        <li>
                            <a href="{{ route('pleading-note.index') }}">
                                <i class="mdi mdi-collection-folder-image"></i> <span> Add Pleading Note </span>
                            </a>
                        </li>
                        <li class="parent">
                            <a href="#">
                                <i class="icon mdi mdi-accounts-add"></i><span>Judicial Officers</span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('judofficerslinks.index') }}">Add Title</a>
                                </li>
                                <li>
                                    <a href="{{ route('judofficers.index') }}">Add Judicial Officers</a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-accounts-list"></i><span>Judicial
                                    Staff</span></a>
                            <ul class="sub-menu">
                                <li class="parent">
                                    <a href="#">
                                        <i class="icon mdi mdi-undefined"></i><span>Category Wise Staff</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li>
                                            <a href="{{ route('stafflink.index') }}">
                                                <i class="icon mdi mdi-undefined"></i><span>Add Title</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('staff.index') }}">
                                                <i class="icon mdi mdi-undefined"></i><span>Add Staff</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="parent"><a href="#"><i class="icon mdi mdi-undefined"></i><span>Court Wise
                                            Staff</span></a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('court_staff.index') }}"><i
                                                    class="icon mdi mdi-undefined"></i><span>Add Court Staff</span></a>
                                        </li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="{{ route('judgemental.index') }}">
                                <i class="mdi mdi-collection-plus"></i> <span> Judgement & Orders </span>
                            </a>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-format-list-bulleted"></i><span>Periodical
                                    Statement</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('per_cart.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Category</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('fortnightly.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Periodical Statements</span>
                                    </a>
                                </li>
                                <!-- <li>
                                    <a href="#">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Add Reports</span>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i class="icon mdi mdi-smartphone-info"></i><span>Case
                                    Information</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('causelist.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Cause List</span>
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{ route('police_station') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Police Stations </span>
                                    </a>
                                </li> --}}
                                <li>
                                    <a href="{{ route('fir') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add FIR </span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="parent"><a href="#"><i
                                    class="icon mdi mdi-notifications-active"></i><span>Notifications & Jobs</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('noty.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Notifications</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('jobs.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Add Jobs</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li>
                            <a href="{{ route('pic.index') }}">
                                 <span> <i class="mdi mdi-picture-in-picture"></i> Picture Gallery</span>
                            </a>
                        </li> --}}
                        <li class="parent">
                            <a href="#">
                                <i class="mdi mdi-picture-in-picture"></i> Pictures Gallery </span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('pic.index') }}">Images</a>
                                </li>
                                <li>
                                    <a href="{{ route('video.index') }}"> Videos </a>
                                </li>
                            </ul>
                        </li>
                        {{-- <li class="parent">
                            <a href="#">
                                <i class="mdi mdi-picture-in-picture"></i> <span>Picture Gallery</span>
                            </a>
                            <ul class="sub-menu">
                                <li class="">
                                    <a href="{{ route('pic_titles.index') }}">Add Titles</a>
                                </li>
                               
                            </ul>
                        </li> --}}
                        
                        <li class="parent"><a href="#"><i
                                    class="icon mdi mdi-case-download"></i><span>Downloads</span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('downloads.index') }}">
                                        <i class="icon mdi mdi-undefined"></i><span>Judicial Forms</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- <li>
                            <a href="#">
                                <i class="icon mdi mdi-link"></i><span>Add Related Links</span>
                            </a>
                        </li> -->
                        <li>
                            <a href="{{ route('library.index') }}">
                                <i class="mdi mdi-local-library"></i> <span> Library </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('articles.index') }}">
                                <i class="mdi mdi-file"></i> <span> Published Articles </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('e-file-data.index') }}">
                                <i class="mdi mdi-file"></i> <span> E-File data</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>