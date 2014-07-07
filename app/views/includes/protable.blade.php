<div class="panel panel-info propanel">
    <div class="panel-heading"><h3>项目列表</h3></div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
<!--                    <th>编号</th>-->
                    <th>项目名称</th>
                    <th>年华收益</th>
                    <th>金额</th>
                    <th>期限</th>
                    <th>进度</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pros as $pro)
                <tr>

                    <td> {{ $pro->title }} </td>
                    <td>{{ $pro->rate }}%</td>
                    <td>{{ $pro->amount }}万</td>
                    <td>{{ $pro->duration }}个月</td>
                    <td style="width: 180px">
                        <div class="progress" style="margin-bottom: 0px">
                            <div class="progress-bar progress-bar-success" role="progressbar"
                                 aria-valuenow={{ $pro->collected/$pro->amount*100 }} aria-valuemin="0" aria-valuemax="100" style="width: {{ $pro->collected/$pro->amount*100 }}%">

                            </div>
                        </div>
                    </td>
                    <td>
                        {{HTML::link(URL::to('project/'. $pro->id), $pro->collected==$pro->amount? "投资已满": "立即投资")}}
                    </td>
                </tr>
                @endforeach
                </tbody>
                <tfoot>
                {{ $pros->links() }}
                </tfoot>
            </table>
        </div>

    </div>
</div>