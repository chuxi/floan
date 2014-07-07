@extends('layout.base')

@section('head')
@parent

<link href="{{asset('assets/css/bootstrap-image-gallery.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/css/blueimp-gallery.min.css')}}"">

@stop


@section('content')

<div class="panel proshow">
    <div class="panel-body">
        <div class="row text-center">
            <div class="col-md-9 proshow_lt">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <h4>五金商贸企业流动资金贷款（二期）</h4>
                    </div>
                    <div class="col-md-6 text-right">
                        <h4>企业编号ZHJ14041200019221</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset('assets/images/project-1.png')}}">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                年化收益<br/>15%
                            </div>
                            <div class="col-md-3">
                                期限<br/>
                                12个月
                            </div>
                            <div class="col-md-3">
                                金额<br/>
                                1000万
                            </div>
                            <div class="col-md-3">
                                进度<br>
                                <div class="progress" style="margin-bottom: 0px">
                                    <div class="progress-bar progress-bar-info" role="progressbar"
                                         aria-valuenow=40 aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    还款方式：按月付息,到期还本
                                </div>
                                <div class="row">
                                    可获利息：1487.67 元/万元
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    投资当日( {{ Date('Y-m-d') }})起息
                                </div>
                                <div class="row">
                                    还本日期 2015-07-03
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-md-3 proshow_rt">
                <div class="row text-left">
                    <div class="col-md-12">
                        @if(Auth::check())
                        <h3>请先<a href="{{{ URL::to('login') }}}">登录</a></h3>
                        @else
                        <h4>请先<a href="{{{ URL::to('login') }}}">登录</a></h4>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 text-left">
                        可投金额<br/>
                         60万9千元
                    </div>
                    <div class="col-md-6 text-right">
                        剩余时间<br/>
                        6天4小时
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        {{ Form::open(array('url' => 'invest', 'class' => 'form-invest', 'role' => 'form')) }}
                        {{ Form::hidden('pid', 1) }}

                        {{ Form::text('value', null, array('placeholder' => '请输入投资金额(千元)','required' => 'true', 'class' => 'form-control')) }}

                        {{ Form::submit('立即投资', array('class' => 'btn btn-primary btn-block')) }}
                        {{ Form::close() }}
                    </div>



                </div>

            </div>
        </div>
    </div>


    <div class="panel protab">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active"><a href="#home" role="tab" data-toggle="tab">项目详情</a></li>
            <li><a href="#record1" role="tab" data-toggle="tab">投资记录</a></li>
            <li><a href="#record2" role="tab" data-toggle="tab">还款记录</a></li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="home">
                <div class="row">
                    <h4>本息保障措施</h4>
                    <ul>
                        <li>由担保机构提供不可撤销的连带责任担保，严格把控项目风险，对本息100%保障。</li>
                        <li>担保机构按规定计提30%的担保费作为风险保障金，由理财范与担保公司共同监管。</li>
                        <li>借款企业向担保机构提供固定资产抵押作为反担保措施。</li>
                    </ul>
                </div>
                <div class="row">
                    <h4>担保机构：中鸿基融资担保有限公司</h4><br/>
                    <h4>抵押物信息</h4>
                    <ul>
                        <li>提供一套房产抵押反担保。</li>
                        <li>借款企业实际控制人的个人无限连带责任担保。</li>
                        <li>房产所有人的个人无限连带责任担保。</li>
                    </ul><br/>

                    <h4>风险控制措施</h4>
                    <p>借款企业提供的北京市房产位于东城区朝阳门内大街，建筑面积206.70平米，小区周边餐饮、大型商场、银行、超市、医院等配套设施齐备，周边有多条公交、地铁线路，交通便利，市场环境活跃，具有较强变现能力。该套房产评估值为2000余万元，全部抵押。</p>
                    <p>借款企业实际控制人信用良好，对自身信用管理意识很强，增加其连带责任能有效的约束其还款意愿。</p>
                    <p>房产所有人征信良好，增加其连带责任担保，能更有效的约束借款人的还款意愿。</p>
                    <p>理财范风控专员认为该项目经营稳健，实际控制人信誉良好，贷后将加强现金流管理，确保做到专款专用。对企业经营管理及整体运作情况持续跟踪，建立预警机制，并与风险控制部门保持密切沟通。一旦发现潜在风险，即根据具体情况制定贷后监管的实施方案，确保通过严谨的贷后监管避免风险的发生。</p><br/>
                    <h4>担保机构意见</h4>
                    <p>经过担保公司对借款企业及法定代表人的深入调查了解，企业及法定代表人信用良好。同时借款企业自成立以来，业务稳健，有稳定的客户群体，企业经营良好，账款回款及时，同意为本次融资项目提供担保。</p>
                </div>
                <div class="row">
                    <h4>资金用途</h4>
                    <p>借款企业本次借款主要用于日常的经营周转.</p> <br/>
                    <h4>还款来源</h4>
                    <p>借款企业还款来源为企业日常经营收入，企业拥有稳定的客户群和较强的市场开拓能力，有较强的还款保障。</p>
                </div>
                <div class="row">
                    <h4>企业背景</h4>
                    <p>借款企业成立于1998年，主要经营不锈钢管、各类阀门及配套设备的销售等，公司产品规格齐全，广泛应用于石油、化工、电力、冶金、矿山、轧钢、造船、纺 织、印刷、建材等多个领域。公司在经营中大胆探索实业发展和资本运作相结合的发展思路，逐渐拥有较大规模的实业群体和资源储备，借助国家世纪工程“西气东 输”、“南水北调”等项目的建设，及我国城镇化进程的加快，加之煤化工行业的迅猛发展，公司业务得到了迅猛的发展。公司凭着一批优质技术人员的不断创新和 共同努力，业务不断发展壮大，以高性能的优质产品参与中国和世界市场竞争，为石油化工、化工、能源、电站、冶金等工业领域提供“与世界品牌同步”的产品以 及流体控制综合解决方案。
                    </p><br/>
                    <h4>经营范围</h4>
                    <p>主营业务：销售建筑材料、五金交电、金属材料、机械设备。</p><br/>
                    <h4>经营状况</h4>
                    <p>借款企业主要从事销售建筑材料、五金交电、金属材料、机械设备等，年产值1亿元以上，经营规模持续扩大，目前为企业发展上升期，业务规模稳步增长。公司产品规格齐全，广泛应用于石油、化工、电力、冶金、矿山、轧钢、造船、纺织、印刷、建材等多个领域，在经营中大胆探索实业发展和资本运作相结合的发展思路，逐渐拥有较大规模的实业群体和资源储备，借助国家世纪工程“西气东输”、“南水北调”等项目的建设，企业得到了迅猛的发展。
                    </p>
                </div>


            </div>
            <div class="tab-pane fade" id="record1">



            </div>
            <div class="tab-pane fade" id="record2">



            </div>
        </div>
    </div>

    <div class="prowindow" id="prowindow">
        <div class="row" data-spy="scroll" data-target=".navbar-example" style="position: relative">
            <h4>项目相关资料：</h4>
            <div id="links">
                <a href="{{ asset('assets/images/project-1.png') }}" title="Banana" data-gallery>
                    <img src="{{ asset('assets/images/project-1.png') }}" alt="Banana">
                </a>

            </div>
        </div>



    </div>


</div>

<div id="blueimp-gallery" class="blueimp-gallery">
    <!-- The container for the modal slides -->
    <div class="slides"></div>
    <!-- Controls for the borderless lightbox -->
    <h3 class="title"></h3>
    <a class="prev">‹</a>
    <a class="next">›</a>
    <a class="close">×</a>
    <a class="play-pause"></a>
    <ol class="indicator"></ol>
    <!-- The modal dialog, which will be used to wrap the lightbox content -->
    <div class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body next"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left prev">
                        <i class="glyphicon glyphicon-chevron-left"></i>
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary next">
                        Next
                        <i class="glyphicon glyphicon-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@stop