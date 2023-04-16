<div class="container-fluid">
    <div class="row">
        <!-- Left Sidebar start-->
        <div class="side-menu-fixed">
            <div class="scrollbar side-menu-bg">
                <ul class="nav navbar-nav side-menu" id="sidebarnav">
                    <!-- menu item todo-->
                    <li>
                        <a href="todo-list.html"> <i class="ti-menu-alt"></i>
                            <span class="right-nav-text"> {{ trans('sidebar_trans.Dashboard') }} </span>
                        </a>
                    </li>

                    <!-- menu title -->
                    <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title"> {{ trans('sidebar_trans.Details') }} </li>

                    <!-- menu item trainer-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#trainer-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span
                                    class="right-nav-text">{{ trans('sidebar_trans.Trainer') }} </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="trainer-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.trainer.create') }}">{{ trans('sidebar_trans.Add_Trainer') }}</a> </li>
                            <li> <a href="{{ Route('backend.trainer.index') }}">{{ trans('sidebar_trans.All_Trainers') }}</a> </li>
                        </ul>
                    </li>

                    <!-- menu item Diet-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#diet-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{ trans('sidebar_trans.Diet') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="diet-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.diet.create') }}">{{ trans('sidebar_trans.Add_Diet') }}</a> </li>
                            <li> <a href="{{ Route('backend.diet.index') }}">{{ trans('sidebar_trans.All_Diets') }}</a> </li>
                        </ul>
                    </li>

                    <!-- menu item Meals-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#meals-menu">
                            <div class="pull-left"><i class="ti-calendar"></i>
                                <span class="right-nav-text">{{ trans('sidebar_trans.Meals') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="meals-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.meal.create') }}">{{ trans('sidebar_trans.Add_Meal') }}</a> </li>
                            <li> <a href="{{ Route('backend.meal.index') }}">{{ trans('sidebar_trans.All_Meals') }}</a> </li>
                        </ul>
                    </li>



                    <!-- menu item Meal Ingredients-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#meals_ingredients-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">
                                {{ trans('sidebar_trans.Meal_Ingredients') }} </span></div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="meals_ingredients-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.ingredient.create') }}">{{ trans('sidebar_trans.Add_Meal_Ingredients') }} </a> </li>
                            <li> <a href="{{ Route('backend.ingredient.index') }}">{{ trans('sidebar_trans.All_Meal_Ingredients') }}</a> </li>
                        </ul>
                    </li>


                    <!-- menu item Stores-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#store-menu">
                            <div class="pull-left"><i class="ti-calendar"></i>
                                <span class="right-nav-text">{{ trans('sidebar_trans.Store') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="store-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="">{{ trans('sidebar_trans.Add_Product') }}</a> </li>
                            <li> <a href="{{ Route('backend.trainer.index') }}">{{ trans('sidebar_trans.All_Products') }}</a> </li>
                        </ul>
                    </li>


                    
                    <!-- menu item Training Group-->
                    <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#training_group-menu">
                            <div class="pull-left"><i class="ti-calendar"></i>
                                <span class="right-nav-text">{{ trans('sidebar_trans.Training_Group') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="training_group-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.training_group.create') }}">{{ trans('sidebar_trans.Add_Training_Group') }}</a> </li>
                            <li> <a href="{{ Route('backend.training_group.index') }}">{{ trans('sidebar_trans.All_Training_Groups') }}</a> </li>
                        </ul>
                    </li>


                     <!-- menu item Trainings -->
                     <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#trainings-menu">
                            <div class="pull-left"><i class="ti-calendar"></i>
                                <span class="right-nav-text">{{ trans('sidebar_trans.Trainigs') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="trainings-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.training.create') }}">{{ trans('sidebar_trans.Add_Training') }}</a> </li>
                            <li> <a href="{{ Route('backend.training.index') }}">{{ trans('sidebar_trans.All_Trainings') }}</a> </li>
                        </ul>
                    </li>


                       <!-- menu item Player -->
                       <li>
                        <a href="javascript:void(0);" data-toggle="collapse" data-target="#players-menu">
                            <div class="pull-left"><i class="ti-calendar"></i><span class="right-nav-text">{{ trans('sidebar_trans.Players') }}</span>
                            </div>
                            <div class="pull-right"><i class="ti-plus"></i></div>
                            <div class="clearfix"></div>
                        </a>
                        <ul id="players-menu" class="collapse" data-parent="#sidebarnav">
                            <li> <a href="{{ Route('backend.player.create') }}">{{ trans('sidebar_trans.Add_Player') }}</a> </li>
                            <li> <a href="{{ Route('backend.player.index') }}">{{ trans('sidebar_trans.All_Players') }}</a> </li>
                        </ul>
                    </li>



                </ul>
            </div>
        </div>

        <!-- Left Sidebar End-->

        <!--=================================
