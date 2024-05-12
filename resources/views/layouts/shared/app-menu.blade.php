<ul class="metismenu" id="menu-bar">
    {{-- <li class="menu-title">Navigation</li> --}}

    <li>
        <a href="/">
            <i data-feather="home"></i>
            {{-- <span class="badge badge-success float-right">1</span> --}}
            <span> Dashboard </span>
        </a>
    </li>
    {{-- <li class="menu-title">Apps</li> --}}
    <li>
        <a href="javascript: void(0);">
            <i data-feather="inbox"></i>
            <span> Administrator </span>
            <span class="menu-arrow"></span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="briefcase"></i>
            <span> Residential Information </span>
            <span class="menu-arrow"></span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="bookmark"></i>
            <span> Social Service </span>
            <span class="menu-arrow"></span>
        </a>
    </li>
    <li>
        <a href=" {{route('media.index')}} ">
            <i data-feather="grid"></i>
            <span> Publication </span>
        </a>
    </li>
</ul>
