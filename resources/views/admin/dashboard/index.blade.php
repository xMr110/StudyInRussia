@can('viewAny',\App\Models\User::class)
    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">

                <div class="w-header" style="justify-content: flex-start;">
                    <i class="fas fa-users fa-4x" style="padding-right: 5%; "></i>

                    <div class="w-info">
                        <h6 class="value">Total Users</h6>
                    </div>
                </div>

                <div class="w-content" style="  flex-direction: row;
                                                align-content: flex-end;
                                                justify-content: center;
                                                margin-top: 0!important;
                                                ">

                    <div class="w-info">
                        <p class="value" style="color: #e91647; font-weight:600!important;"> {{ \App\Models\User::count() }} </p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">

                <div class="w-header" style="justify-content: flex-start;">
                    <i class="fas fa-bells fa-4x" style="padding-right: 5%; "></i>

                    <div class="w-info">
                        <h6 class="value">Notification</h6>
                    </div>
                </div>
                <div class="w-content" style="  flex-direction: row;
                                                align-content: flex-end;
                                                justify-content: center;
                                                margin-top: 0!important;
                                                ">

                    <div class="w-info">
                        <p class="value" style="color: #e91647; font-weight:600!important;"> 15 </p>
                    </div>

                </div>

            </div>
        </div>
    </div>


    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">

                <div class="w-header" style="justify-content: flex-start;">
                    <i class="fas fa-mail-bulk fa-4x" style="padding-right: 5%; "></i>

                    <div class="w-info">
                        <h6 class="value">Messages</h6>
                    </div>
                </div>
                <div class="w-content" style="  flex-direction: row;
                                                align-content: flex-end;
                                                justify-content: center;
                                                margin-top: 0!important;
                                                ">

                    <div class="w-info">
                        <p class="value" style="color: #e91647; font-weight:600!important;"> 15 </p>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing">
        <div class="widget widget-card-four">
            <div class="widget-content">

                <div class="w-header" style="justify-content: flex-start;">
                    <i class="fas fa-tags fa-4x" style="padding-right: 5%; "></i>

                    <div class="w-info">
                        <h6 class="value">categories</h6>
                    </div>
                </div>
                <div class="w-content" style="  flex-direction: row;
                                                align-content: flex-end;
                                                justify-content: center;
                                                margin-top: 0!important;
                                                ">

                    <div class="w-info">
                        <p class="value" style="color: #e91647; font-weight:600!important;"> 12 </p>
                    </div>

                </div>

            </div>
        </div>
    </div>

@endcan


