<ul class="metismenu" id="menu-bar">
    {{-- <li class="menu-title">Navigation</li> --}}

    <li>
        <a href="/">
            <i data-feather="home"></i>
            {{-- <span class="badge badge-success float-right">1</span> --}}
            <span> Dashboard </span>
        </a>
    </li>
    <li>
        <a href="javascript: void(0);">
            <i data-feather="inbox"></i>
            <span> Administrator </span>
            <span class="menu-arrow"></span>
        </a>

        {{-- <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="/apps/email/inbox">Inbox</a>
            </li>
            <li>
                <a href="/apps/email/read">Read</a>
            </li>
            <li>
                <a href="/apps/email/compose">Compose</a>
            </li>
        </ul> --}}
    </li>
    <li>
        <a href="javascript: void(0);">
            <i class='uil uil-books'></i>
            <span> Residential Information </span>
            <span class="menu-arrow"></span>
        </a>
    </li>
    <li>
        <a href=" {{route('bansos.index')}} ">
            <i class='uil uil-globe'></i> 
            <span> Bantuan Sosial </span>
            <span class="menu-arrow"></span>
        </a>
    </li>
    <li>
        <a href=" {{route('umkm.index')}} ">
            <i class='uil uil-store'></i>
            <span> UMKM </span>
            {{-- <span class="menu-arrow"></span> --}}
        </a>
    </li>
    <li>
        <a href=" {{route('media.index')}} ">
            <i data-feather="grid"></i>
            <span> Publication </span>
            {{-- <span class="menu-arrow"></span>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="/apps/email/inbox">Artikel</a>
                </li>
                <li>
                    <a href="/apps/email/read">Galery</a>
                </li>
            </ul> --}}
        </a>
    </li>
</ul>
