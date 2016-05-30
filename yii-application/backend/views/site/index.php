<section id="dashbroad" class="content mdl-layout">
    <div class="row ">
        <div class=" col-md-3 col-sm-6 col-xs-12">
            <a href="/product/index">
            <div class="mdl-shadow--2dp info-box">
                <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                    <div class="info-box-content">
                        <span class="info-box-text"><?=  Yii::t('common', 'Products'); ?></span>
                        <span class="info-box-number">90<small>%</small></span>
                    </div>
            </div>
            </a>
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <a href="/category/index">
            <div class="info-box mdl-shadow--2dp">
                <span class="info-box-icon bg-red"><i class="fa"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Yii::t("common", "Categories"); ?></span>
                    <span class="info-box-number">1</span>
                </div>
                <!-- /.info-box-content -->
            </div>
          </a>
        </div>
        <!-- /.col -->
        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box  mdl-shadow--2dp">
                <span class="info-box-icon bg-green"><i class="ion"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text"><?= Yii::t("common", "Users"); ?></span>
                    <span class="info-box-number">1</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="info-box  mdl-shadow--2dp">
                <span class="info-box-icon bg-yellow"><i class="ion"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">New Members</span>
                    <span class="info-box-number">2,000</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- Default box -->
    <div class="row">
        <div class="col-md-9 col-sm-6 col-xs-12">
            <!-- Line chart -->
            <div class="box box-primary  mdl-shadow--4dp">
                <div class="box-header with-border">
                </div>
                <div class="box-body">
                </div>
                <!-- /.box-body-->
            </div>
            <!-- /.box -->
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">

            <!-- Line chart -->
            <div class="box box-primary  mdl-shadow--4dp">
                <div class="box-header with-border">
                    <i class="fa fa-bar-chart-o"></i>

                    <h3 class="box-title">Line Chart</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div id="line-chart" style="height: 300px; padding: 0px; position: relative;"><canvas class="flot-base" width="787" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 300px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 21px; text-align: center;">0</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 133px; text-align: center;">2</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 245px; text-align: center;">4</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 357px; text-align: center;">6</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 468px; text-align: center;">8</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 577px; text-align: center;">10</div><div class="flot-tick-label tickLabel" style="position: absolute; max-width: 98px; top: 283px; left: 689px; text-align: center;">12</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div class="flot-tick-label tickLabel" style="position: absolute; top: 270px; left: 1px; text-align: right;">-1.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 225px; left: 1px; text-align: right;">-1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 180px; left: 1px; text-align: right;">-0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 135px; left: 4px; text-align: right;">0.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 90px; left: 4px; text-align: right;">0.5</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 45px; left: 4px; text-align: right;">1.0</div><div class="flot-tick-label tickLabel" style="position: absolute; top: 0px; left: 4px; text-align: right;">1.5</div></div></div><canvas class="flot-overlay" width="787" height="300" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 787px; height: 300px;"></canvas></div>
                </div>
                <!-- /.box-body-->
            </div>
            <!-- /.box -->

        </div>

    </div>
    <!-- /.box -->
</section>