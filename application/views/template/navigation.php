<div class="navigation">
    <div class="mainnav">
        <ul class="mainnav__unorderedlist">
            <li class="mainnav__topList">
                <div id="mainNav_toggle" class="mainnav__togglebutton">
                    <svg viewBox="0 0 24 24">
                        <g>
                            <path d="m0.89 12.023 6.189-7.935v15.87l-6.189-7.935zm10.091-5.095h11.948v-2.429h-11.948v2.429zm0 6.286h11.948v-2.428h-11.948v2.428zm0 6.287h11.948v-2.429h-11.948v2.429z" class="menu_icon"/>
                        </g>
                    </svg>
                </div>
                <div id="mainNav_toggleLabel" class="mainnav__togglebuttonLabel">
                    <svg viewBox="0 0 24 24" style="height: 100%; width: 100%">
                        <g>
                            <path d="m7.487 19.501h15.488v-2.429h-15.488v2.429zm0-6.287h15.488v-2.428h-15.488v2.428zm0-8.715v2.429h15.488v-2.429h-15.488zm-6.353 15.002h2.905v-2.429h-2.905v2.429zm0-6.287h2.905v-2.428h-2.905v2.428zm0-8.715v2.429h2.905v-2.429h-2.905z" class="menu_icon"/>
                        </g>
                    </svg>
                </div>
            </li>    
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem<?php if($active=="payroll")echo" mainnavItem-active";?>">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m0.868 11.595v2.222c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.222zm0 3.79v2.223c0 1.436 2.98 2.601 6.651 2.601 3.67 0 6.65-1.165 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0 3.791v2.223c0 1.435 2.98 2.601 6.651 2.601 3.67 0 6.65-1.166 6.65-2.601v-2.174c-0.528 1.233-3.302 2.174-6.641 2.174-3.382 0-6.185-0.966-6.66-2.223zm0-9.149c0-1.436 2.98-2.602 6.651-2.602 3.67 0 6.65 1.166 6.65 2.602 0 1.435-2.98 2.601-6.65 2.601-3.671 0-6.651-1.166-6.651-2.601zm8.963-7.426c0 1.436 2.98 2.601 6.65 2.601 3.671 0 6.651-1.165 6.651-2.601 0-1.435-2.98-2.601-6.651-2.601-3.67 0-6.65 1.166-6.65 2.601zm5.367 11.324c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.602-6.651 2.602-0.438 0-0.867-0.017-1.283-0.049v-2.601zm0 3.791c0.419 0.032 0.851 0.048 1.293 0.048 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.436-2.98 2.601-6.651 2.601-0.438 0-0.867-0.016-1.283-0.048v-2.601zm0-7.581c0.419 0.031 0.851 0.048 1.293 0.048 3.339 0 6.113-0.942 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.438 0-0.867-0.017-1.283-0.049v-2.6zm-5.35-3.548c-0.011-0.065-0.017-0.13-0.017-0.195v-2.223c0.475 1.257 3.278 2.223 6.66 2.223 3.339 0 6.113-0.941 6.641-2.174v2.174c0 1.435-2.98 2.601-6.651 2.601-0.477 0-0.943-0.02-1.404-0.045-0.451-1.11-2.494-2.017-5.229-2.361z" class="ugs_icon"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Payroll</div>
                    </div>
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem<?php if($active=="timesheet")echo" mainnavItem-active";?>">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m12 1.131c-5.976 0-10.869 4.893-10.869 10.869s4.893 10.869 10.869 10.869 10.869-4.893 10.869-10.869-4.893-10.869-10.869-10.869zm4.567 15.436-5.65-3.484v-6.524h1.631v5.663l4.893 2.936-0.874 1.409z" class="ugs_icon"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Timesheet</div>
                    </div>                
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="<?php echo base_url(); ?>Employee">
                    <div class="mainnav__container_item mainnavItem<?php if($active=="employees")echo" mainnavItem-active";?>">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m16.864 8.895c-0.103-1.528-0.935-2.857-2.159-3.629 0.241-1.596 1.619-2.815 3.281-2.815 1.839 0 3.329 1.49 3.329 3.329 0 1.837-1.49 3.328-3.329 3.328-0.396 0-0.776-0.07-1.122-0.213zm2.352 9.141c1.249-0.116 2.652-0.375 4.198-0.857l0.238-0.075 9e-3 -0.054v-3.454c0-1.854-1.191-3.436-2.854-4.007-0.784 0.594-1.762 0.94-2.82 0.94-0.438 0-0.863-0.06-1.262-0.18-0.147 0.63-0.426 1.207-0.804 1.705 1.933 0.792 3.296 2.709 3.295 4.941v1.041zm-11.746-9.148c0.104-1.517 0.928-2.837 2.141-3.609-0.237-1.602-1.618-2.828-3.284-2.828-1.839 0-3.329 1.49-3.329 3.329 0 1.837 1.49 3.328 3.329 3.328 0.404 0 0.791-0.073 1.143-0.22zm-2.353 9.149c-1.254-0.114-2.664-0.373-4.218-0.858l-0.238-0.075-9e-3 -0.054v-3.454c0-1.854 1.191-3.436 2.854-4.007 0.784 0.594 1.762 0.94 2.82 0.94 0.445 0 0.877-0.062 1.282-0.184 0.147 0.631 0.426 1.211 0.805 1.71-1.933 0.791-3.296 2.708-3.296 4.94v1.042zm4.281-5.029c-1.69 0.556-2.905 2.151-2.905 4.025v3.454l9e-3 0.054 0.238 0.074c2.242 0.701 4.191 0.935 5.794 0.935 3.133 0 4.948-0.893 5.06-0.95l0.222-0.113h0.024v-3.454c1e-3 -1.874-1.214-3.469-2.904-4.025-0.771 0.578-1.731 0.914-2.769 0.914s-1.997-0.335-2.769-0.914zm2.769-0.464c1.839 0 3.329-1.491 3.329-3.329s-1.49-3.328-3.329-3.328c-1.838 0-3.329 1.49-3.329 3.328 0 1.839 1.491 3.329 3.329 3.329z" class="ugs_icon"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Employees</div>
                    </div>             
                </a>
            </li>
            <li class="mainnav__list">
                <a class="mainnav__anchor" href="<?php echo base_url(); ?>Setup">
                    <div class="mainnav__container_item mainnavItem<?php if($active=="setup")echo" mainnavItem-active";?>">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m13.253 9.288v-7.961h-2.506v7.961c-1.129 0.486-1.921 1.609-1.921 2.916s0.792 2.431 1.921 2.917v7.552h2.506v-7.552c1.129-0.486 1.921-1.61 1.921-2.917s-0.792-2.43-1.921-2.916zm-2.506 2.916c0-0.691 0.561-1.253 1.253-1.253 0.691 0 1.253 0.562 1.253 1.253 0 0.692-0.562 1.253-1.253 1.253-0.692 0-1.253-0.561-1.253-1.253zm-5.386-4.787v15.256h-2.505v-15.256c-1.13-0.486-1.921-1.609-1.921-2.916 0-1.752 1.422-3.174 3.174-3.174 1.751 0 3.173 1.422 3.173 3.174 0 1.307-0.791 2.43-1.921 2.916zm-2.505-2.916c0-0.692 0.561-1.253 1.253-1.253 0.691 0 1.252 0.561 1.252 1.253 0 0.691-0.561 1.253-1.252 1.253-0.692 0-1.253-0.562-1.253-1.253zm18.239 12.082v-15.256h-2.505v15.256c-1.13 0.486-1.921 1.609-1.921 2.916 0 1.752 1.422 3.174 3.173 3.174 1.752 0 3.174-1.422 3.174-3.174 0-1.307-0.791-2.43-1.921-2.916zm-2.505 2.916c0-0.691 0.561-1.253 1.252-1.253 0.692 0 1.253 0.562 1.253 1.253 0 0.692-0.561 1.253-1.253 1.253-0.691 0-1.252-0.561-1.252-1.253z" class="ugs_icon" fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text">Setup</div>
                    </div>             
                </a>
            </li>
            <!-- <li id="toggle_pin-sidebar" class="mainnav__list mainnav__pinside">
                <div class="mainnav__anchor" href="#">
                    <div class="mainnav__container_item mainnavItem">
                        <div class="mainnavItem__icon">
                            <svg viewBox="0 0 24 24">
                                <g>
                                    <path d="m22.673 2.346c0-0.562-0.457-1.019-1.02-1.019h-19.307c-0.562 0-1.019 0.457-1.019 1.019v19.308c0 0.562 0.457 1.019 1.019 1.019h19.307c0.563 0 1.02-0.457 1.02-1.019v-19.308zm-2.42 2.095c0-0.44-0.262-0.798-0.584-0.798h-11.061c-0.322 0-0.584 0.358-0.584 0.798v15.118c0 0.44 0.262 0.798 0.584 0.798h11.061c0.322 0 0.584-0.358 0.584-0.798v-15.118z" class="ugs_icon"  fill-rule="evenodd"/>
                                </g>
                            </svg>
                        </div>
                        <div class="mainnavItem__text"></div>
                    </div>             
                </div>
            </li> -->
        </ul>
    </div>
</div>